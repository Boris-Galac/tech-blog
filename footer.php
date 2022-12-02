

    <!-- footer  -->

    <footer class="footer">
        <div class="container">
            <div>
                <h2 class="footer__heading h2--heading">quick links</h2>
                <nav class="footer__nav">
                    <ul><li><a class="footer__link" href="index.html">home</a></li></ul>
                    <ul><li><a class="footer__link" href="blog.html">blog</a></li></ul>
                    <ul><li><a class="footer__link" href="#">projects</a></li></ul>
                    <ul><li><a class="footer__link" href="#">about</a></li></ul>
                </nav>
            </div>
            <div>
                <h3 class="footer__subheading">follow us</h3>
                <div class="footer__socials">
                    <a href="#"><img src="/wp-content/themes/tech-blog/src/styles/icons/social-1.svg" class="socials__icon" alt="freecodecamp"></a>
            <a href="#"><img src="/wp-content/themes/tech-blog/src/styles/icons/social-2.svg" class="socials__icon" alt="codepen"></a>
            <a href="#"><img src="/wp-content/themes/tech-blog/src/styles/icons/social-3.svg" class="socials__icon" alt="github"></a>               
        </div>
    </div>
      </div>
      <hr>
      <p class="footer__copyright">This website is developed and managed by Boris Galac</p>
    </footer>
    
    <!-- search component -->
    
    <div class="search-container">
        <div class="close-search">
            <div class="close-search__container">
          <div class="close-search__icon"></div>
        </div>
      </div>
      <form class="search-form">
          <div class="search-form__input">
              <input
              type="search"
              name="search"
              id="search"
              class="search-form__search"
              placeholder="Search for something..."
              />
              <i class="fa-sharp fa-solid fa-magnifying-glass search-icon"></i>
            </div>
        </form>
    </div>
    <div class="back-to-top">
        <img src="/wp-content/themes/tech-blog/src/styles/icons/back-to-top.svg" alt="back to top">
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
