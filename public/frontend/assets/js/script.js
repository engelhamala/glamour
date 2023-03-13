//spinner
// window.addEventListener("load", () => {
//     const spinner = document.querySelector(".spinner");
//     spinner.classList.toggle("spinner-hidden");
//     });

//   // Header scroll class
//   $(window).scroll(function() {
//     if ($(this).scrollTop() > 100) {
//     $('.navbar').addClass('header-scrolled');
//     } else {
//     $('.navbar').removeClass('header-scrolled');
//     }
// });

//   scroll
// let scroll = document.querySelector(".scroll-link");
// window.onscroll = function () {
//     this.scrollY >= 1000
//         ? scroll.classList.add("show")
//         : scroll.classList.remove("show");
// };
// scroll.onclick = function () {
//     window.scrollTo({
//         top: 0,
//         behavior: "smooth",
//     });
// };

// search
let icon = document.querySelector(".search-toggle");
let searching = document.querySelector(".search-wrap");
let input = document.querySelector(".search-txt");

icon.onclick = function () {
    searching.classList.toggle("active");
    input.focus();
};

// login
let login = document.querySelector(".login");
let logwrap = document.querySelector(".login-wrap");

login.onclick = function () {
    logwrap.classList.toggle("active");
};

// cart
let cart = document.querySelector(".shopping-cart");
let cartwrap = document.querySelector(".cart-wrap");
let cartclose = document.querySelector(".cart-close");

cart.onclick = function () {
    cartwrap.classList.add("active");
};

cartclose.onclick = function () {
    cartwrap.classList.remove("active");
};

var menueOptions = {
    desktopStickyOffset: 10,
    desktopHasSecondaryToggleButton: true,
    desktopHasTertiaryToggleButton: true,
    mobileHasSecondaryToggleButton: true,
    mobileHasTertiaryToggleButton: true,
    onDesktopStickyChange: function (instance) {
        console.log("Sticky Change Callback");
    },
    onMobileToggleClick: function (toggle, instance) {
        console.log("Mobile Toggle Click");
    },
    onDesktopPrimaryToggleClick: function (toggle, instance) {
        console.log("Desktop Primary Toggle Click");
    },
    onDesktopSecondaryToggleClick: function (toggle, instance) {
        console.log("Desktop Secondary Toggle Click");
    },
    onMobilePrimaryToggleClick: function (toggle, instance) {
        console.log("Mobile Primary Toggle Click");
    },
    onMobileSecondaryToggleClick: function (toggle, instance) {
        console.log("Mobile Secondary Toggle Click");
    },
    onMobilePrimaryAnchorClick: function (anchor, instance) {
        console.log("Mobile Primary Anchor Click");
    },
    onMobileSecondaryAnchorClick: function (anchor, instance) {
        console.log("Mobile Secondary Anchor Click");
    },
};
var menue = new Menue(menueOptions);

console.log(menue);

// carousel
$(window).on("load", function () {
    // ---------home-slider---------------
    $(".home-slider").owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 25000,
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 1,
                nav: false,
            },
            1000: {
                items: 1,
                loop: true,
            },
        },
    });


    $(".testimonials-slider").owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 25000,
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 1,
                nav: false,
            },
            1000: {
                items: 1,
                loop: true,
            },
        },
    });



    $(".products-slider").owlCarousel({
        ltr: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 25000,
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 1,
                nav: false,
            },
            1000: {
                items: 1,
                loop: true,
            },
        },
    });


    $(".brands-slider").owlCarousel({
        ltr: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 25000,
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 3,
                nav: false,
            },
            1000: {
                items: 5,
                loop: true,
            },
        },
    });




    $(".blog-slider").owlCarousel({
        ltr: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 25000,
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 1,
                nav: false,
            },
            900: {
                items: 2,
                nav: false,
            },
            1000: {
                items: 3,
                loop: true,
            },
        },
    });


    $(".follow-slider").owlCarousel({
        ltr: true,
        loop: true,
        margin: 0,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 25000,
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            500: {
                items: 1,
                nav: false,
            },
            600: {
                items: 2,
                nav: false,
            },
            900: {
                items: 3,
                nav: false,
            },
            1000: {
                items: 4,
                nav: false,
            },
            1200: {
                items: 6,
                loop: true,
            },
        },
    });


});

// category filter
filterObjects("all");

function filterObjects(c) {
    var x, i;
    x = document.getElementsByClassName("box");
    if (c == "all") c = "";

    for (i = 0; i < x.length; i++) {
        removeClass(x[i], "show");

        if (x[i].className.indexOf(c) > -1) addClass(x[i], "show");
    }
}

function addClass(element, name) {
    var i, arr1, arr2;

    arr1 = element.className.split(" ");

    arr2 = name.split(" ");

    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function removeClass(element, name) {
    var i, arr1, arr2;

    arr1 = element.className.split(" ");

    arr2 = name.split(" ");

    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }

    element.className = arr1.join(" ");
}







jQuery(function ($) {
    $("#trendslider").flexslider({
        animation: "slide",
    });
});

jQuery(function ($) {
    // The slider being synced must be initialized first
    $('#carousel').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: true,
      itemWidth: 148,
      itemMargin: 12,
      asNavFor: '#product-slider'
    });

    $('#trend-slider').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      sync: "#carousel"
    });
  });




//   scroll
let scroll = document.querySelector("#slidetop");
window.onscroll = function () {
    this.scrollY >= 1000
        ? scroll.classList.add("show")
        : scroll.classList.remove("show");
};
scroll.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
};
