<footer id="footer">
  <h1>Footer</h1>
</footer>
<script type="module">
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper(...)
</script>
<script>
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    autoplay: {
        delay: 3000, // Tempo de exibição de cada slide em milissegundos
      }
  });
</script>
</body>

</html>