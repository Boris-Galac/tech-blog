//////////// padding main

const indexPage = document.location.pathname.length === 1;
const xy = document.querySelector(".header").offsetHeight;

if (indexPage) {
  document.querySelector(".hero-banner").style = `
  padding-top: ${xy}px;
  `;
}

function paddingMain(page, main) {
  window.location.pathname.includes(page);
  const xy = document.querySelector(".header").offsetHeight;
  if (window.location.pathname.includes(page)) {
    document.querySelector(main).style = `
      padding-top: ${xy}px;
    `;
  }
}
paddingMain("category", ".main");
paddingMain("blog", ".second-main");
paddingMain("about", ".about-main");

///////////// ham menu

const menuUl = document.querySelector(".header__list");

document.querySelector(".header__ham").addEventListener("click", (e) => {
  // open  menu
  const hamIcon = [...e.target.children];
  hamIcon.forEach((line) => {
    line.classList.toggle("active");
    menuUl.classList.remove("is-closed");
    menuUl.classList.toggle("is-open");
    if (indexPage) {
      document.querySelector(".hero-banner").classList.remove("is-open");
      document.querySelector(".hero-banner").classList.add("is-closed");
    }
  });
  // close menu
  if (menuUl.classList.contains("is-open")) {
    if (indexPage) {
      document
        .querySelector(".hero-banner")
        .classList.replace("is-closed", "is-open");
    }
  } else {
    menuUl.classList.remove("is-open");
    menuUl.classList.add("is-closed");
  }
});

/////////// search

document.querySelector(".search-icon").addEventListener("click", (e) => {
  document.querySelector(".search-container").classList.add("active");
  document.querySelector(".search-container").classList.remove("deactive");

  document.querySelector(".hero-banner__headline-wrapper").style = `
    visibility: hidden;
    `;
});
document.querySelector(".close-search").addEventListener("click", (e) => {
  document.querySelector(".search-container").classList.remove("active");
  document.querySelector(".search-container").classList.add("deactive");

  document.querySelector(".hero-banner__headline-wrapper").style = `
    visibility: visible;
  `;
});

/////////// back to top
const backToTop = document.querySelector(".back-to-top");

window.addEventListener("scroll", (e) => {
  if (window.scrollY > 20) {
    backToTop.classList.add("active");
  } else backToTop.classList.remove("active");
});
backToTop.addEventListener("click", (e) => {
  scroll({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
});

// pagination

if (document.querySelector(".next")) {
  document.querySelector(".next").innerText = "Next";
}
if (document.querySelector(".prev")) {
  document.querySelector(".prev").innerText = "Prev";
}

// snap scroll slider latest blogs
if (indexPage) {
  const left = document.querySelector(".latest-blogs__left-arrow");
  const right = document.querySelector(".latest-blogs__right-arrow");
  const scrollContainer = document.querySelector(".latest-blogs__wrapper");

  right.addEventListener("click", (e) => {
    scrollContainer.scrollBy({
      top: 0,
      left: 50,
      behavior: "smooth",
    });
  });

  left.addEventListener("click", (e) => {
    scrollContainer.scrollBy({
      top: 0,
      left: -50,
      behavior: "smooth",
    });
  });
}

// placeholder

function forSinglePostPage() {
  // placeholder for comment textarea
  document.querySelector("textarea#comment").placeholder = "Leave a comment...";
  // padding top main
  document.querySelector(".single-blogpost").style = `
    padding-top: ${xy}px;
    `;
}
if (document.body.classList.contains("single-post")) {
  forSinglePostPage();
}
