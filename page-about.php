<?php get_header() ?>

<!-- main -->

<main class="main about-main">
      <div class="container">
        <h1 class="about-us__heading h1--heading">About our blog</h1>
        <div class="about-us__container">
          <div>
            <div class="about-us__header">
              <div class="about-us__img-wrapper">
                <img
                  src="/wp-content/themes/tech-blog//src/styles/images/about-img.jpg"
                  alt="about blog image"
                />
              </div>
            </div>
            <div class="about-us__text-wrapper">
              <p class="about-us__paragraph paragraph">
                Contrary to popular belief, Lorem Ipsum is not simply random
                text. It has roots in a piece of classical Latin literature from
                45 BC, making it over 2000 years old. Richard McClintock, a
                Latin professor at Hampden-Sydney College in Virginia, looked up
                one of the more obscure Latin words, consectetur, from a Lorem
                Ipsum passage, and going through the cites of the word in
                classical literature, discovered the undoubtable source. Lorem
                Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus
                Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                written in 45 BC. This book is a treatise on the theory of
                ethics, very popular during the Renaissance. The first line of
                Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line
                in section.
              </p>
              <q class="quote"
                >Conversation is king. Content is just something to talk about.
                ~ <span class="quote-author">Cory Doctorow</span></q
              >
            </div>
          </div>
          <div>
          <?php get_template_part('template-parts/content', 'sidebar') ?>

          </div>
        </div>
      </div>
    </main>


<?php get_footer() ?>