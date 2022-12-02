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
            <aside class="aside">
              <form role="search" class="aside__search-form">
                <input
                  class="aside__search-input"
                  type="search"
                  aria-label="search"
                  placeholder="Search for a blog"
                />
              </form>
              <div class="aside__categories">
                <h3 class="aside__category-heading h3--heading">Categories</h3>
                <div>
                  <ul class="aside__category-list">
                    <li>
                      <span class="category-tag">Web</span><span>(2)</span>
                    </li>
                    <li>
                      <span class="category-tag">Software</span><span>(8)</span>
                    </li>
                    <li>
                      <span class="category-tag">Gaming</span><span>(11)</span>
                    </li>
                    <li>
                      <span class="category-tag">Hardware</span><span>(3)</span>
                    </li>
                    <li>
                      <span class="category-tag">Technology</span
                      ><span>(16)</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="aside__tags">
                <h3 class="aside__tags-heading h3--heading">Popular tags</h3>
                <div class="aside__tag-wrapper">
                  <span class="aside__tag tag">Internet</span>
                  <span class="aside__tag tag">Shop</span>
                  <span class="aside__tag tag">Monitor</span>
                  <span class="aside__tag tag">Entertaiment</span>
                  <span class="aside__tag tag">Selling</span>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </main>


<?php get_footer() ?>