<style>
  #loader {
    position: fixed;
    inset: 0;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    opacity: 1;
    transition: opacity 0.5s ease;
  }

  #loader.hidden {
    opacity: 0;
    pointer-events: none;
  }

  .dots-container {
    display: flex;
    gap: 10px;
  }

  .dot {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: #E3B000;
    animation: pulse 1.5s infinite ease-in-out;
  }

  .dot:nth-child(1) { animation-delay: -0.3s; }
  .dot:nth-child(2) { animation-delay: -0.1s; }
  .dot:nth-child(3) { animation-delay: 0.1s; }
  .dot:nth-child(4) { animation-delay: 0.3s; }
  .dot:nth-child(5) { animation-delay: 0.5s; }

  @keyframes pulse {
    0%, 100% {
      transform: scale(0.8);
      background-color: #E3B000;
      box-shadow: 0 0 0 0 rgba(227, 176, 0, 0.7);
    }
    50% {
      transform: scale(1.2);
      background-color: #C29700; /* کمی تیره‌تر برای حس پالس */
      box-shadow: 0 0 0 10px rgba(227, 176, 0, 0);
    }
  }
</style>


<div id="loader" aria-label="Loading content">
  <section class="dots-container" role="status" aria-live="polite">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </section>
</div>

<script>
  window.addEventListener('load', () => {
    const loader = document.getElementById('loader');
    if (!loader) return;

    // اضافه کردن کلاس برای شروع انیمیشن ناپدید شدن
    loader.classList.add('hidden');

    // بعد از اتمام انیمیشن، لودر رو کامل از DOM مخفی می‌کنیم
    loader.addEventListener('transitionend', () => {
      loader.style.display = 'none';
    }, { once: true });
  });
</script>
