<style>
    .search-box {
        position: relative;
        width: 100%;
        height: 50px;
        background-color: rgba(96, 96, 96, 0.08);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 10px;
        padding: 0 20px;
        box-sizing: border-box;
        cursor: pointer;
    }

    .search-box img {
        height: 24px;
        width: auto;
        pointer-events: none;
        position: relative;
        z-index: 11;
    }

    .search-box > input {
        all: unset;
        font-family: 'IRANSans';
        font-size: 1rem;
        color: rgba(0, 0, 0, 0.7);
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 12px;
        top: 0;
        right: 0;
        padding: 0px 56px 0px 20px;
        box-sizing: border-box;
        cursor: text;
        z-index: 10;
    }

    .results-popup {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        width: 100%;
        background: white;
        border-radius: 0 0 12px 12px;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
        z-index: 9;
        overflow: hidden;
        
    }

    .results-popup div {
        padding: 10px;
        cursor: pointer;
        position: relative;
        width: 100%;
        max-width: calc(100% - 20px);
        box-sizing: border-box;
        margin: auto;
        font-family: 'IRANSans';
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .results-popup div::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 10px;
        right: 10px;
        height: 1px;
        background-color: #eee;
    }

    .mobile-popup {
        display: none;
        position: fixed;
        inset: 0;
        background: white;
        z-index: 1000;
        padding: 20px;
    }

    .popup-inner {
        max-width: 600px;
        margin: auto;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
    }

    .searcher-box{
        width: 100%;
        background: rgba(96, 96, 96, 0.08);
        border-radius: 12px;
        position: relative;
        padding: 0 20px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    .searcher-box img {
        height: 20px;
        width: auto;
        pointer-events: none;
        position: relative;
        z-index: 2;
    }
    .popup-inner .searcher-box input {
        all: unset;
        font-family: 'IRANSans';
        width: 100%;
        height: 100%;
        top: 0;
        right: 0;
        padding: 12px 50px 12px 20px;
        border-radius: 12px;
        box-sizing: border-box;
        font-size: 14px;
        position: absolute;
        z-index: 1;
    }

    .close-mobile-search {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    @media (max-width: 1024px) {
        .search-box > input {
            display: none;
        }

        .search-box {
            all: unset;
            width: auto;
        }

        .search-box img {
            filter: brightness(0) saturate(100%) invert(42%) sepia(4%) saturate(160%) hue-rotate(150deg);
            height: 21px;
            width: auto;
        }

        .results-popup {
            position: static;
            background: none;
            border-radius: 0;
            box-shadow: none;
            margin: auto;
            margin-top: 20px;

        }
        .mobile-popup .close-mobile-popup{
            all: unset;
            width: 30px;
            height: 30px;
            position: relative;
            cursor: pointer;
        }
        .mobile-popup .close-mobile-popup::before,
        .mobile-popup .close-mobile-popup::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 2px;
            background-color: rgb(97, 97, 97);
            transform-origin: center;
            transition: all 0.3s ease;
            border-radius: 1px;
        }

        .mobile-popup .close-mobile-popup::before {
            transform: translate(-50%, -50%) rotate(45deg);
        }

        .mobile-popup .close-mobile-popup::after {
            transform: translate(-50%, -50%) rotate(-45deg);
        }
        .mobile-popup .close-mobile-popup:hover::before,
        .mobile-popup .close-mobile-popup:hover::after {
            background-color: black;
        }

    }
</style>

<div class="search-box" id="searchTrigger">
    <picture>
        <source srcset="{{ asset('icons/ui/search-icon-mobile.svg') }}" media="(max-width: 1024px)">
        <img src="{{ asset('icons/ui/search-icon.svg') }}" alt="search">
    </picture>
    <input type="text" id="desktopSearchInput" placeholder="جستجو در های‌ترک">
    <div id="desktopResultsPopup" class="results-popup"></div>
</div>

<div id="mobileSearchPopup" class="mobile-popup">
    <div class="popup-inner">
        <div class="searcher-box">
            <input type="text" id="mobileSearchInput" placeholder="جستجو در های‌ترک">
            <img src="{{ asset('icons/ui/search-icon-mobile.svg') }}">
        </div>
        <button type="button" class="close-mobile-popup" onclick="closeMobileSearchPopup()"></button>
    </div>
    <div id="mobileResultsPopup" class="results-popup"></div>
</div>

<script>
    function closeMobileSearchPopup() {
        const mobilePopup = document.getElementById('mobileSearchPopup');
        const mobileInput = document.getElementById('mobileSearchInput');
        const mobileResults = document.getElementById('mobileResultsPopup');

        if (mobilePopup) mobilePopup.style.display = 'none';
        if (mobileInput) mobileInput.value = '';
        if (mobileResults) {
            mobileResults.innerHTML = '';
            mobileResults.style.display = 'none';
        }
    }
    document.addEventListener("DOMContentLoaded", function () {
        const searchTrigger = document.getElementById('searchTrigger');
        const desktopInput = document.getElementById('desktopSearchInput');
        const desktopResults = document.getElementById('desktopResultsPopup');
        const mobilePopup = document.getElementById('mobileSearchPopup');
        const mobileInput = document.getElementById('mobileSearchInput');
        const mobileResults = document.getElementById('mobileResultsPopup');
        let currentQuery = '';

        const isMobile = () => window.innerWidth < 1024;

        if (searchTrigger) {
            searchTrigger.addEventListener('click', () => {
                if (isMobile()) {
                    mobilePopup.style.display = 'block';
                    mobileInput.focus();
                }
            });
        }

        function setupLiveSearch(inputElement, resultsContainer) {
            if (!inputElement) return;

            let debounceTimer;
            inputElement.addEventListener('input', function () {
                const query = this.value.trim();
                currentQuery = query;

                clearTimeout(debounceTimer);
                if (query.length < 2) {
                    resultsContainer.style.display = 'none';
                    resultsContainer.innerHTML = '';
                    return;
                }

                debounceTimer = setTimeout(() => {
                    fetch('/api/live-search', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ query: query })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (query !== currentQuery) return; // Ignore outdated responses

                        resultsContainer.innerHTML = '';
                        if (query.length === 0) {
                            resultsContainer.style.display = 'none';
                            return;
                        }

                        if (data.length === 0) {
                            resultsContainer.innerHTML = '<div style="padding: 10px;">موردی یافت نشد</div>';
                            resultsContainer.style.display = 'block';
                            return;
                        }

                        data.forEach(item => {
                            const div = document.createElement('div');
                            div.classList.add('search-result-item');

                            const link = document.createElement('a');
                            link.href = `/archive?name=${encodeURIComponent(item.name)}`;
                            link.textContent = item.name;
                            link.style.flex = '1';
                            link.style.textDecoration = 'none';
                            link.style.color = 'inherit';

                            const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
                            svg.setAttribute("width", "20");
                            svg.setAttribute("height", "20");
                            svg.setAttribute("viewBox", "0 0 20 20");
                            svg.setAttribute("fill", "none");
                            svg.innerHTML = `
                                <g id="Group">
                                    <g id="Group_2">
                                        <path id="Path" d="M5.875 5.87509L14.125 14.1251" stroke="#101010" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path id="Path_2" d="M11.668 5.83343L5.8763 5.87426L5.83463 11.6668" stroke="#101010" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                </g>
                            `;

                            div.appendChild(link);
                            div.appendChild(svg);
                            resultsContainer.appendChild(div);
                        });

                        resultsContainer.style.display = 'block';
                    });
                }, 300); // Debounce delay
            });

            inputElement.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' && this.value.trim()) {
                    window.location.href = `/archive?name=${encodeURIComponent(this.value.trim())}`;
                }
            });
        }

        setupLiveSearch(desktopInput, desktopResults);
        setupLiveSearch(mobileInput, mobileResults);
    });
</script>