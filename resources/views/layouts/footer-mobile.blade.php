<style>
    .footer-mobile{
        width: 100vw;
        padding: 10px  20px;
        box-sizing: border-box;
        position: fixed;
        bottom: 0px;
        z-index: 1002;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #FFFFFF;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.09);

    }
    .footer-mobile svg{
        fill: #606060;
    }
    .footer-mobile .active{
        color: #E3B000 !important;
    }
    .footer-mobile .active svg {
        fill: #E3B000 !important;
    }
    #footer-mobile-button {
        all: unset;
        display: flex;
        flex-direction: column;
        gap: 5px;
        align-items: center;
        /* دسته‌بندی‌ها */

        font-family: 'IRANSans';
        font-style: normal;
        font-weight: 300;
        font-size: 10px;
        line-height: 15px;
        text-align: center;

        /* Second Color */
        color: #606060;


    }
    .footer-mobile-link{
        display: flex;
        flex-direction: column;
        gap: 5px;
        align-items: center;
        text-decoration: none;
        font-family: 'IRANSans';
        font-style: normal;
        font-weight: 300;
        font-size: 10px;
        line-height: 15px;
        text-align: center;

        /* Second Color */
        color: #606060;


    }
    .categories-popup{
        position: fixed;
        width: 100%;
        height:100vh;
        z-index: 1001;
        top: 0px;
        right: 0;
        background-color: white;
        box-sizing: border-box;
        display: none;
    }
    .categories-popup.open{
        display: block;
    }
    .categories-popup-header{
        top: 0;
        padding:15px 20px ;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: solid 1px rgb(0, 0, 0, 0.08);
        
    }
    .categories-popup-header button{
        all: unset;
    }
    @media (min-width: 1024px){
        .footer-mobile{
            display: none;
        }    
        .categories-popup{
            display: none
        }
    }

</style>

<div class="footer-mobile">
    <a href="{{route('home')}}" class="footer-mobile-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }} ">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.5008 24H4.50019C2.01908 24 0 21.9813 0 19.5007V9.56326C0 8.06649 0.741031 6.67171 1.98308 5.83484L9.48339 0.774629C11.0105 -0.25821 12.9885 -0.25821 14.5176 0.774629L22.0169 5.83484C23.259 6.67271 24 8.06649 24 9.56326V19.5007C24 21.9813 21.9819 24 19.5008 24ZM12.0005 0.999594C11.3185 0.999594 10.6374 1.20056 10.0434 1.6025L2.54211 6.66171C1.57607 7.31361 1.00004 8.39744 1.00004 9.56226V19.4997C1.00004 21.4294 2.57011 22.9992 4.50019 22.9992H19.5008C21.4309 22.9992 23.001 21.4294 23.001 19.4997V9.56326C23.001 8.39844 22.4249 7.31461 21.4589 6.66271L13.9586 1.6025C13.3636 1.20156 12.6825 0.999594 12.0005 0.999594Z" fill="currentColor"/>
        </svg>

        خانه

    </a>
    <button id='footer-mobile-button' type="button" class="footer-mobile-items "  onclick="toggleActive()">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.49991 0H4.49995C2.01898 0 0 2.019 0 4.5V8.5C0 9.327 0.672993 10 1.49998 10H8.49991C9.3269 10 9.9999 9.327 9.9999 8.5V1.5C9.9999 0.673 9.3269 0 8.49991 0ZM8.99991 8.5C8.99991 8.776 8.77591 9 8.49991 9H1.49998C1.22399 9 0.99999 8.776 0.99999 8.5V4.5C0.99999 2.57 2.56997 1 4.49995 1H8.49991C8.77591 1 8.99991 1.224 8.99991 1.5V8.5ZM13.4999 10H20.4998C21.3268 10 21.9998 9.327 21.9998 8.5V4.5C21.9998 2.019 19.9808 0 17.4998 0H13.4999C12.6729 0 11.9999 0.673 11.9999 1.5V8.5C11.9999 9.327 12.6729 10 13.4999 10ZM12.9999 1.5C12.9999 1.224 13.2239 1 13.4999 1H17.4998C19.4298 1 20.9998 2.57 20.9998 4.5V8.5C20.9998 8.776 20.7758 9 20.4998 9H13.4999C13.2239 9 12.9999 8.776 12.9999 8.5V1.5ZM8.49991 12H1.49998C0.672993 12 0 12.673 0 13.5V17.5C0 19.981 2.01898 22 4.49995 22H8.49991C9.3269 22 9.9999 21.327 9.9999 20.5V13.5C9.9999 12.673 9.3269 12 8.49991 12ZM8.99991 20.5C8.99991 20.776 8.77591 21 8.49991 21H4.49995C2.56997 21 0.99999 19.43 0.99999 17.5V13.5C0.99999 13.224 1.22399 13 1.49998 13H8.49991C8.77591 13 8.99991 13.224 8.99991 13.5V20.5ZM23.8538 23.146L20.8538 20.146C21.5588 19.284 21.9998 18.198 21.9998 17C21.9998 14.243 19.7568 12 16.9998 12C14.2429 12 11.9999 14.243 11.9999 17C11.9999 19.757 14.2429 22 16.9998 22C18.1978 22 19.2838 21.559 20.1458 20.854L23.1458 23.854C23.2438 23.952 23.3718 24 23.4998 24C23.6278 24 23.7558 23.951 23.8538 23.854C24.0487 23.659 24.0487 23.341 23.8538 23.146ZM16.9998 21C14.7938 21 12.9999 19.206 12.9999 17C12.9999 14.794 14.7938 13 16.9998 13C19.2058 13 20.9998 14.794 20.9998 17C20.9998 19.206 19.2058 21 16.9998 21Z" fill="currentColor"/>
        </svg>

        دسته‌بندی‌ها       
    </button>
    <a href="{{route('user.orders')}}" class="footer-mobile-link {{ Route::currentRouteName() == 'user.orders' ? 'active' : '' }}">
    <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19.2286 7.07739C18.9959 6.01994 18.1605 5.18879 17.0998 4.96036C16.2697 4.78126 15.4375 4.6354 14.6042 4.51958C14.5688 3.95546 14.527 3.39993 14.4776 2.88086C14.3554 1.5864 13.3655 0.552554 12.0721 0.365947C10.5803 0.151455 9.41886 0.151455 7.92814 0.365947C6.63476 0.552554 5.64595 1.58748 5.52262 2.88086C5.47329 3.39886 5.43146 3.95546 5.39607 4.51958C4.56277 4.6354 3.73054 4.78233 2.90046 4.96036C1.8398 5.18879 1.00328 6.01994 0.770561 7.07739C-0.256854 11.734 -0.256854 16.2608 0.770561 20.9175C1.00328 21.9749 1.8398 22.8061 2.90046 23.0345C5.25665 23.5418 7.62893 23.7949 10.0001 23.7949C12.3713 23.7949 14.7447 23.5418 17.0998 23.0345C18.1605 22.8061 18.997 21.9738 19.2286 20.9175C20.2571 16.2608 20.2571 11.734 19.2286 7.07739ZM6.58972 2.98167C6.66479 2.19449 7.29218 1.54029 8.08043 1.42661C9.47892 1.22499 10.5192 1.22391 11.9188 1.42661C12.7081 1.54029 13.3344 2.19342 13.4095 2.98167C13.4524 3.42781 13.4888 3.90291 13.521 4.38552C11.1766 4.13671 8.82365 4.13671 6.47925 4.38552C6.51143 3.90291 6.54789 3.42781 6.59079 2.98167H6.58972ZM18.1819 20.6858C18.0414 21.325 17.5159 21.8473 16.8735 21.9856C12.3134 22.968 7.68684 22.968 3.12675 21.9856C2.48435 21.8473 1.95884 21.325 1.81835 20.6858C0.825256 16.1858 0.825256 11.8091 1.81835 7.30797C1.95884 6.66878 2.48542 6.1465 3.12675 6.00815C3.86138 5.84942 4.59816 5.71751 5.33709 5.61027C5.27167 7.00446 5.25236 8.31929 5.28025 9.07967C5.29097 9.37567 5.54085 9.61804 5.83578 9.59552C6.13178 9.58479 6.36236 9.33598 6.35163 9.03999C6.32375 8.26674 6.34627 6.90151 6.41705 5.47192C7.60963 5.33893 8.80542 5.27244 10.0012 5.27244C11.197 5.27244 12.3917 5.33893 13.5843 5.47192C13.6551 6.90151 13.6787 8.26674 13.6497 9.03999C13.639 9.33598 13.8706 9.58479 14.1656 9.59552C14.1731 9.59552 14.1795 9.59552 14.1859 9.59552C14.4734 9.59552 14.7104 9.36816 14.7222 9.07967C14.75 8.31822 14.7297 7.00339 14.6643 5.61027C15.4021 5.71751 16.1389 5.84942 16.8746 6.00815C17.517 6.1465 18.0425 6.66878 18.183 7.30797C19.1772 11.8091 19.1761 16.1847 18.1819 20.6858Z" fill="currentColor"/>
    </svg>
        سبد خرید

    </a>
    <a href="{{route('user.dashboard')}}" class="footer-mobile-link {{ Route::currentRouteName() == 'user.dashboard' ? 'active' : '' }}">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.003 11.774C15.503 11.753 17.31 9.944 17.375 6.378C17.315 2.932 15.408 1.022 11.997 1C8.545 1.021 6.625 3.066 6.625 6.378C6.625 9.84 8.546 11.753 12.003 11.774ZM11.997 2C14.852 2.019 16.325 3.498 16.375 6.378C16.32 9.36 14.929 10.757 12.003 10.774C9.073 10.757 7.682 9.363 7.625 6.387C7.68 3.453 9.112 2.018 11.997 2Z" fill="currentColor"/>
            <path d="M11.9971 14.2939C6.7381 14.3269 3.9081 17.1609 3.8121 22.4909C3.8071 22.7669 4.0271 22.9949 4.3031 22.9999H4.3121C4.5841 22.9999 4.8071 22.7819 4.8121 22.5089C4.8981 17.6839 7.2501 15.3229 11.9961 15.2939C16.6851 15.3239 19.1051 17.7519 19.1871 22.5089C19.1921 22.7849 19.4421 23.0139 19.6961 22.9999C19.9721 22.9949 20.1921 22.7679 20.1871 22.4909C20.0961 17.2389 17.1901 14.3269 11.9971 14.2939Z" fill="currentColor"/>
        </svg>

        پروفایل
    </a>
    
</div>
<div class="categories-popup ">
    <div class="categories-popup-header" >
        
        <button type="button"  onclick=""> 
            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.8" d="M21.1284 20.6556L15.8303 15.3576C17.2741 13.5918 17.984 11.3387 17.8131 9.06419C17.6422 6.78971 16.6036 4.66793 14.9122 3.13772C13.2208 1.6075 11.0059 0.785933 8.72575 0.842945C6.44558 0.899956 4.27454 1.83119 2.66171 3.44402C1.04888 5.05685 0.117653 7.22788 0.0606418 9.50805C0.0036303 11.7882 0.825199 14.0031 2.35541 15.6945C3.88563 17.3859 6.00741 18.4245 8.28188 18.5954C10.5564 18.7663 12.8095 18.0564 14.5753 16.6126L19.8733 21.9107C20.0407 22.0723 20.2649 22.1618 20.4976 22.1598C20.7304 22.1578 20.953 22.0644 21.1175 21.8998C21.2821 21.7353 21.3755 21.5127 21.3775 21.2799C21.3795 21.0472 21.29 20.823 21.1284 20.6556ZM8.96217 16.8452C7.55778 16.8452 6.18493 16.4287 5.01722 15.6485C3.84951 14.8683 2.9394 13.7593 2.40196 12.4618C1.86452 11.1643 1.72391 9.73659 1.99789 8.35919C2.27187 6.98178 2.94815 5.71656 3.9412 4.72351C4.93426 3.73045 6.19948 3.05417 7.57689 2.78019C8.95429 2.50621 10.382 2.64683 11.6795 3.18426C12.977 3.7217 14.086 4.63182 14.8662 5.79952C15.6464 6.96723 16.0629 8.34008 16.0629 9.74447C16.0608 11.627 15.312 13.4319 13.9808 14.7631C12.6496 16.0943 10.8447 16.8431 8.96217 16.8452Z" fill="black"/>
            </svg>

        </button>
        <button type="button"  onclick="toggleActive()">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.8" d="M0.00163583 10.2762C-0.00119751 10.3043 0.000219159 10.2548 0.00163583 10.2762V10.2762ZM19.1266 9.4512H1.54722C1.65205 9.11128 1.82347 8.79117 2.06005 8.52055L7.65305 1.84929C7.92647 1.52258 7.9208 0.999503 7.6403 0.682689C7.36122 0.364224 6.91355 0.372474 6.63872 0.695889L1.05564 7.35725C0.377052 8.13773 0.00163583 9.23999 0.00163583 10.2779C0.0115525 11.3075 0.351553 12.3982 1.01597 13.1837L6.57355 19.9259C6.71239 20.0942 6.89797 20.1783 7.08497 20.1783C7.26205 20.1783 7.43914 20.1024 7.57514 19.9473C7.85705 19.6338 7.86697 19.1091 7.59639 18.7807L2.03172 12.0303C1.80222 11.7597 1.63647 11.4412 1.5373 11.1029H19.1266C19.5176 11.1029 19.835 10.7333 19.835 10.2779C19.835 9.82246 19.5176 9.45285 19.1266 9.45285V9.4512Z" fill="black"/>
            </svg>
        </button>
    </div>
    <div class="data-list">
        @include('layouts.category-dropdown')
    </div>
</div>
<script>
  // Toggle active state for footer-mobile button and manage popup visibility
  function toggleActive() {
    const button = document.getElementById('footer-mobile-button');
    const currentActive = document.querySelector('.footer-mobile .active');
    const categoriesPopup = document.querySelector('.categories-popup');

    if (button.classList.contains('active')) {
      // Deactivate the button
      button.classList.remove('active');

      // Restore last active element if available
      if (toggleActive.lastActiveElement) {
        toggleActive.lastActiveElement.classList.add('active');
        toggleActive.lastActiveElement = null;
      }

      // Hide popup
      if (categoriesPopup) {
        categoriesPopup.classList.remove('open');
      }
    } else {
      // Save current active element before deactivating
      if (currentActive && currentActive !== button) {
        toggleActive.lastActiveElement = currentActive;
        currentActive.classList.remove('active');
      }

      // Activate the button
      button.classList.add('active');

      // Show popup
      if (categoriesPopup) {
        categoriesPopup.classList.add('open');
      }
    }

    // Update popup height after toggle
    updateDataListHeight();
  }

  // Select necessary DOM elements
  const footerMobile = document.querySelector('.footer-mobile');
  const popupHeader = document.querySelector('.categories-popup-header');
  const dataList = document.querySelector('.categories-popup .data-list');

  // Update height of data list based on screen and visible elements
  const updateDataListHeight = () => {
    if (dataList && popupHeader && footerMobile) {
      const windowHeight = window.innerHeight;
      const headerHeight = popupHeader.offsetHeight;
      const footerHeight = footerMobile.offsetHeight;
      const newHeight = windowHeight - headerHeight - footerHeight;

      dataList.style.height = `${newHeight}px`;
      dataList.style.overflowY = 'auto'; // Enable vertical scrolling if needed
    }
  };

  // Initial height setup
  updateDataListHeight();

  // Update height on window resize
  window.addEventListener('resize', updateDataListHeight);
</script>
