/*---- Default JS INDEXING

    01.serviceWidget();
    02.swiperJs();
    03.wowActive();
    04.wowActive();
    05.counterUp();
    06.tmpVedioActivation();
    07.stickyHeader();
    08.smoothScroll();
    09.menuCurrentLink();
    10.radialProgress();
    11.fonklsAnimation();
    12.rightDemo();
    13.onePageNav();
    14.tpm_mobileMenuActive();
    15.stickyToTop();
    16.tmpcustomAnimation();
    17.popupMobileMenu();
    18.contactForm();

----*/


(function ($) {
    "use strict";

    var tmPk = {
        m: function (e) {
            tmPk.d();
            tmPk.methods();
        },

        d: function (e) {
            (this._window = $(window)),
                (this._document = $(document)),
                (this._body = $("body")),
                (this._html = $("html"));
        },

        methods: function (e) {
            tmPk.shapeMove();
            // you can active this element tmPk.bgActiveBlur();
            tmPk.serviceWidget();
            tmPk.swiperJs();
            tmPk.wowActive();
            tmPk.tmpVedioActivation();
            tmPk.stickyHeader();
            tmPk.smoothScroll();
            tmPk.menuCurrentLink();
            tmPk.rollingText();
            tmPk.radialProgress();
            tmPk.fonklsAnimation();
            tmPk.rightDemo();
            tmPk.onePageNav();
            tmPk.tpm_mobileMenuActive();
            tmPk.stickyToTop();
            tmPk.tmpcustomAnimation();
            tmPk.popupMobileMenu();
            tmPk.preloaderWithBannerActivation();
            tmPk.odoMeter();
            tmPk.tmpTiltAnimation();
            tmPk.tmpHover();
            tmPk.titleSplit_2();
            tmPk.lineAnimation();
            tmPk.tmpgradientAnimation();
            tmPk._clickDoc();
        },
        shapeMove: function () {
            $('.shape-move').mousemove(function (e) {

                var wx = $(window).width();
                var wy = $(window).height();

                var x = e.pageX - this.offsetLeft;
                var y = e.pageY - this.offsetTop;

                var newx = x - wx / 2;
                var newy = y - wy / 2;

                $('.shape-image .shape').each(function () {
                    /**
                     * @param rtl add rtl class after move
                     */
                    $(".up.shape").addClass('r-40')
                    $(".down.shape").addClass('r-35')
                    var speed = $(this).attr('data-speed');
                    if ($(this).attr('data-revert')) speed *= -1;
                    TweenMax.to($(this), 1, {
                        x: (1 - newx * speed),
                        y: (1 - newy * speed)
                    });

                });

            });
        },

        bgActiveBlur: function name(params) {
            document.addEventListener("DOMContentLoaded", function () {
                const overlay = document.querySelector(".background-overlay");
                const closeButton = document.querySelector(".tmp-close-button-audio");

                function checkAndObserve() {
                    const videoCard = document.querySelector(".tmp-intro-video-card-wrapper.position-right");
                    if (!videoCard) {
                        overlay.classList.remove("active");
                        return;
                    }
                    const observer = new MutationObserver((mutations) => {
                        mutations.forEach((mutation) => {
                            if (mutation.attributeName === "class") {
                                if (videoCard.classList.contains("is-expanded")) {
                                    overlay.classList.add("active");
                                } else {
                                    overlay.classList.remove("active");
                                }
                            }
                        });
                    });

                    observer.observe(videoCard, {
                        attributes: true
                    });
                }

                checkAndObserve();

                if (closeButton) {
                    closeButton.addEventListener("click", function () {
                        overlay.classList.remove("active");
                        console.log("Overlay closed.");
                    });
                }


            });

        },

        tmpgradientAnimation: function name(params) {
            var e = document.querySelectorAll(".tmp-gradient-wrapper"),
                t = document.querySelectorAll(".tmp-gradient-animation");
            gsap.to(e, {
                scale: 0.6,
                repeat: -1,
                duration: 3,
                yoyo: !0,
                ease: Linear.easeNone
            }).play(), gsap.to(t, {
                repeat: -1,
                duration: 3,
                rotation: 360,
                ease: Linear.easeNone
            }).play();
        },

        tmpTiltAnimation: function () {
            var tiltActive = document.getElementsByClassName('paralax-image');

            if (tiltActive.length) {
                // Now initialize the jQuery plugin
                $('.paralax-image').tilt({
                    maxTilt: 12,
                    speed: 1000,
                    easing: 'cubic-bezier(.03,.98,.52,.99)',
                    transition: false,
                    perspective: 1000,
                    scale: 1
                });
            }
        },

        tmpHover: function () {
            function handleMouseEnter(containerSelector, itemSelector) {
                $(containerSelector).on('mouseenter', itemSelector, function () {
                    var self = this;
                    $(self).removeClass('tmp-control');
                    setTimeout(function () {
                        $(containerSelector + ' .active').removeClass('active').addClass('tmp-control');
                        $(self).removeClass('tmp-control').addClass('active');
                    }, 0);
                });
            }

            // Apply the function to both elements
            handleMouseEnter('.animation-action-1', '.single-animation');
            handleMouseEnter('.animation-action-2', '.single-animation');
            handleMouseEnter('.animation-action-3', '.single-animation');
            handleMouseEnter('.animation-action-4', '.single-animation');
            handleMouseEnter('.animation-action-5', '.single-animation');
            handleMouseEnter('.animation-action-6', '.single-animation');
        },


        _clickDoc: function (e) {
            var inputblur, inputFocus;
            inputblur = function (e) {
                if (!$(this).val()) {
                    $(this).parent('.form-group').removeClass('focused');
                }
            };
            inputFocus = function (e) {
                $(this).parents('.form-group').addClass('focused');
            };
            tmPk._document
                .on('blur', 'input,textarea,select', inputblur)
                .on('focus', 'input:not([type="radio"]),input:not([type="checkbox"]),textarea,select', inputFocus)

        },


        serviceWidget: function () {
            function serviceAnimation() {
                var $servicesWidget = $(".services-widget");
                var $activeBg = $servicesWidget.find(".active-bg");

                function updateActiveService($element) {
                    if (!$element.length) return;

                    var rect = $element[0].getBoundingClientRect();
                    var topOff =
                        rect.top - $servicesWidget[0].getBoundingClientRect().top;
                    var height = $element.outerHeight();

                    var $closestServiceItem = $element.closest(".service-item");
                    if ($closestServiceItem.length) {
                        $closestServiceItem.removeClass("mleave");
                    }

                    $servicesWidget.find(".service-item").each(function () {
                        var $item = $(this);
                        if (!$item.is($closestServiceItem)) {
                            $item.addClass("mleave");
                        }
                    });

                    $activeBg.css({
                        top: topOff + "px",
                        height: height + "px",
                    });
                }

                $servicesWidget.on("mouseenter", ".service-item", function () {
                    updateActiveService($(this));
                });

                $servicesWidget.on("mouseleave", function () {
                    var $currentElement = $servicesWidget.find(".current");
                    updateActiveService($currentElement);

                    $servicesWidget.find(".service-item").each(function () {
                        var $item = $(this);
                        if (!$item.is($currentElement.closest(".service-item"))) {
                            $item.removeClass("mleave");
                        }
                    });
                });

                // Initial call
                updateActiveService($servicesWidget.find(".current"));

                $servicesWidget.on("click", ".service-item", function () {
                    $servicesWidget.find(".service-item").removeClass("current");
                    $(this).addClass("current");
                });
            }

            // Initialize serviceAnimation
            serviceAnimation();
        },

        swiperJs: function () {
            $(document).ready(function () {
                var swiper = new Swiper(".testimonial-swiper", {
                    // slidesPerView: 2,
                    spaceBetween: 30,
                    loop: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 1,
                        },
                        800: {
                            slidesPerView: 3,
                        },
                    },
                });
            });
            $(document).ready(function () {
                var swiper = new Swiper(".mySwiper-bentogrid", {
                    slidesPerView: 2,
                    spaceBetween: 30,
                    loop: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    speed: 1000,

                    breakpoints: {
                        0: {
                            slidesPerView: 1,
                        },
                        800: {
                            slidesPerView: 2,
                        },
                    },
                });
            });
            $(document).ready(function () {
                var swiper = new Swiper(".testimonial-swiper-v2", {
                    slidesPerView: 2.5,
                    spaceBetween: 30,
                    freeMode: true,
                    centeredSlides: true,
                    loop: true,
                    autoHeight: true,
                    loopAddBlankSlides: true,
                    autoplay: false,
                    pagination: {
                        el: ".tmp-swiper-pagination",
                        clickable: true,
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 1,
                            centeredSlides: true, // Enable centering for smaller screens as well
                        },
                        767: {
                            slidesPerView: 2,
                            centeredSlides: true, // Enable centering for larger screens
                        },
                    },
                });
            });

            $(document).ready(function () {
                var swiper = new Swiper(".project-details-swiper", {
                    slidesPerView: 2,
                    spaceBetween: 30,
                    loop: true,
                    navigation: {
                        nextEl: ".project-swiper-button-next",
                        prevEl: ".project-swiper-button-prev",
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 1,
                        },
                        500: {
                            slidesPerView: 2,
                        },
                    },
                });
            });
            $(document).ready(function () {
                var swiper = new Swiper(".swiper-testimonials-2", {
                    slidesPerView: 2,
                    spaceBetween: 30,
                    navigation: {
                        nextEl: ".project-swiper-button-next",
                        prevEl: ".project-swiper-button-prev",
                    },
                    loop: true,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 1,
                        },
                        500: {
                            slidesPerView: 2,
                        },
                    },
                });
            });
        },

        wowActive: function () {
            new WOW().init();
        },

        tmpVedioActivation: function (e) {
            $(".play-video").on("click", function (e) {
                e.preventDefault();
                $(".video-overlay").addClass("open");
                $(".video-overlay").append(
                    '<iframe width="560" height="515" src="https://www.youtube.com/embed/8NJWZpC51Tg?si=Wu_uoN3F0HADlEQp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
                );
            });

            $(".video-overlay, .video-overlay-close").on("click", function (e) {
                e.preventDefault();
                close_video();
            });

            $(document).keyup(function (e) {
                if (e.keyCode === 27) {
                    close_video();
                }
            });

            function close_video() {
                $(".video-overlay.open").removeClass("open").find("iframe").remove();
            }
        },

        // sticky header activation
        menuCurrentLink: function () {
            var currentPage = location.pathname.split("/"),
                current = currentPage[currentPage.length - 1];
            $(".tmp-mainmenu li a").each(function () {
                var $this = $(this);
                if ($this.attr("href") === current) {
                    $this.addClass("active");
                    $this.parents(".has-dropdown").addClass("menu-item-open");
                }
            });
        },

        stickyHeader: function (e) {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 150) {
                    $(".header--sticky").addClass("sticky");
                } else {
                    $(".header--sticky").removeClass("sticky");
                }
            });
        },

        popupMobileMenu: function (e) {
            $(".humberger_menu_active").on("click", function (e) {
                $(".tmp-popup-mobile-menu").addClass("active");
            });

            $(".close-menu").on("click", function (e) {
                $(".tmp-popup-mobile-menu").removeClass("active");
                $(".tmp-popup-mobile-menu .tmp-mainmenu .has-dropdown > a")
                    .siblings(".submenu")
                    .removeClass("active")
                    .slideUp("400");
                $(".tmp-popup-mobile-menu .tmp-mainmenu .has-dropdown > a").removeClass(
                    "open"
                );
            });

            $(".tmp-popup-mobile-menu .tmp-mainmenu .has-dropdown > a").on(
                "click",
                function (e) {
                    e.preventDefault();
                    $(this).siblings(".submenu").toggleClass("active").slideToggle("400");
                    $(this).toggleClass("open");
                }
            );

            $(
                ".tmp-popup-mobile-menu, .tmp-popup-mobile-menu .tmp-mainmenu.onepagenav li a"
            ).on("click", function (e) {
                e.target === this &&
                $(".tmp-popup-mobile-menu").removeClass("active") &&
                $(".tmp-popup-mobile-menu .tmp-mainmenu .has-dropdown > a")
                    .siblings(".submenu")
                    .removeClass("active")
                    .slideUp("400") &&
                $(
                    ".tmp-popup-mobile-menu .tmp-mainmenu .has-dropdown > a"
                ).removeClass("open");
            });

            $(".onepagenav-click a").on("click", function (e) {
                $(".tmp-popup-mobile-menu").removeClass("active");
                tmPk._html.css({
                    overflow: "",
                });
            });
        },

        tpm_mobileMenuActive: function (e) {
            $(".tmp_button_active").on("click", function (e) {
                e.preventDefault();
                $(".tmp_side_bar").addClass("tmp_side_bar_open");
                $("body").addClass("sidemenu-active");
                // tmPk._html.css({
                //   overflow: "hidden",
                // });
            });

            $(".close_side_menu_active").on("click", function (e) {
                e.preventDefault();
                $(".tmp_side_bar").removeClass("tmp_side_bar_open");
                $("body").removeClass("sidemenu-active");
                tmPk._html.css({
                    overflow: "",
                });
            });
        },

        smoothScroll: function (e) {
            $(document).on("click", '.onepage a[href^="#"]', function (event) {
                event.preventDefault();
                $("html, body").animate({
                        scrollTop: $($.attr(this, "href")).offset().top,
                    },
                    2000
                );
            });
        },

        rollingText: function () {
            let elements = document.querySelectorAll(".rolling-text");

            elements.forEach((element) => {
                let innerText = element.innerText;
                element.innerHTML = "";

                let textContainer = document.createElement("div");
                textContainer.classList.add("block");

                for (let letter of innerText) {
                    let span = document.createElement("span");
                    span.innerText = letter.trim() === "" ? "\xa0" : letter;
                    span.classList.add("letter");
                    textContainer.appendChild(span);
                }

                element.appendChild(textContainer);
                element.appendChild(textContainer.cloneNode(true));
            });

            elements.forEach((element) => {
                element.addEventListener("mouseover", () => {
                    element.classList.remove("play");
                });
            });
        },

        radialProgress: function () {
            $("svg.radial-progress").each(function (index, value) {
                $(this).find($("circle.bar--animated")).removeAttr("style");
                // Get element in Veiw port
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();

                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    var percent = $(value).data("countervalue");
                    var radius = $(this).find($("circle.bar--animated")).attr("r");
                    var circumference = 2 * Math.PI * radius;
                    var strokeDashOffset =
                        circumference - (percent * circumference) / 100;
                    $(this)
                        .find($("circle.bar--animated"))
                        .animate({
                            "stroke-dashoffset": strokeDashOffset
                        }, 2800);
                }
            });
        },

        tmpcustomAnimation: function () {
            return {
                init: function () {
                    this.animates();
                },
                animates: function () {
                    var animates = $(".tmp-scroll-trigger");
                    if (animates.length > 0) {
                        animates.each(function () {
                            $(this).on("animationend", function (e) {
                                setTimeout(function () {
                                    $(e.target).attr("animation-end", "");
                                }, 1000);
                            });
                        });
                    }
                },
            };
        },

        rightDemo: function (e) {
            $(".show-demo").on("click", function (e) {
                $(".demo-modal-area").addClass("open");
            });
            $(".demo-close-btn").on("click", function (e) {
                $(".demo-modal-area").removeClass("open");
            });
            $(".popuptab-area li a.demo-dark").on("click", function (e) {
                $(".demo-modal-area").addClass("dark-version");
                $(".demo-modal-area").removeClass("active-light");
            });
            $(".popuptab-area li a.demo-light").on("click", function (e) {
                $(".demo-modal-area").removeClass("dark-version");
                $(".demo-modal-area").addClass("active-light");
            });
        },

        onePageNav: function () {
            $(".onepagenav").onePageNav({
                currentClass: "current",
                changeHash: false,
                scrollSpeed: 500,
                scrollThreshold: 0.2,
                filter: ":not(.external)",
                easing: "swing",
            });
        },

        // two scroll spy
        smothScroll: function () {
            $(document).on("click", ".smoth-animation", function (event) {
                event.preventDefault();
                $("html, body").animate({
                        scrollTop: $($.attr(this, "href")).offset().top - 50,
                    },
                    300
                );
            });
        },

        fonklsAnimation: function () {
            let endAnimation = document.getElementsByClassName('.end');
            if (endAnimation.length) {
                let endTl = gsap.timeline({
                    repeat: -1,
                    delay: 0.2,
                    scrollTrigger: {
                        trigger: ".end",
                        start: "bottom 100%-=50px",
                    },
                });
                gsap.set(".end", {
                    opacity: 0,
                });
                gsap.to(".end", {
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: ".end",
                        start: "bottom 100%-=50px",
                        once: true,
                    },
                });
                let mySplitText = new SplitText(".end", {
                    type: "words,chars",
                });
                let chars = mySplitText.chars;
                endTl.to(chars, {
                    duration: 0.5,
                    scaleY: 0.9,
                    ease: "power3.out",
                    stagger: 0.04,
                    transformOrigin: "center bottom",
                });
                endTl.to(
                    chars, {
                        yPercent: -10,
                        ease: "elastic",
                        stagger: 0.03,
                        duration: 0.8,
                    },
                    0.5
                );
                endTl.to(
                    chars, {
                        scaleY: 1,
                        ease: "elastic.out(2.5, 0.2)",
                        stagger: 0.03,
                        duration: 1.5,
                    },
                    0.5
                );
                endTl.to(
                    chars, {
                        ease: "power2.out",
                        stagger: 0.03,
                        duration: 0.3,
                    },
                    0.5
                );
                endTl.to(
                    chars, {
                        yPercent: 0,
                        ease: "back",
                        stagger: 0.03,
                        duration: 0.8,
                    },
                    0.7
                );
                endTl.to(chars, {
                    duration: 1.4,
                    stagger: 0.05,
                });
            }

        },

        stickyToTop: function (e) {
            $(".tmp-sticky-top").css({
                top: 25,
            });
            $(".tmp-sticky-top-2").css({
                top: 80,
            });
        },

        preloaderWithBannerActivation: function () {
            document.addEventListener("DOMContentLoaded", function () {
                // Select all title and subtitle elements
                const heroTitles = document.querySelectorAll(".tmp-title-split");
                const heroSubtitles = document.querySelectorAll(".hero__sub-title");

                // Loop through each pair of title and subtitle
                heroTitles.forEach((title, index) => {
                    const subtitle = heroSubtitles[index]; // Match title with subtitle (if in pairs)

                    // Split the text for both title and subtitle
                    const splitTitle = new SplitText(title, {
                        type: "chars"
                    });
                    const splitSubtitle = subtitle ?
                        new SplitText(subtitle, {
                            type: "chars words"
                        }) :
                        null;

                    // Create a timeline for each title and subtitle
                    gsap.timeline({
                        scrollTrigger: {
                            trigger: title, // Trigger animation when the current title comes into view
                            start: "top 80%", // Start when the top of the element reaches 80% of the viewport height
                            end: "bottom 60%", // Optional: Define when animation ends
                            toggleActions: "play none none none", // Play only once
                            // markers: true // Uncomment for debugging
                        },
                    })
                        .from(splitTitle.chars, {
                            duration: 0.2,
                            x: -10,
                            autoAlpha: .02,
                            stagger: 0.02,
                        })
                        .from(
                            splitSubtitle ? splitSubtitle.words : [], {
                                duration: 0.8,
                                x: 100,
                                autoAlpha: 0,
                                stagger: 0.01,
                            },
                            "-=1" // Overlap with the previous animation
                        );
                });
            });
            document.addEventListener("DOMContentLoaded", function () {
                // Select all title and subtitle elements
                const heroTitles = document.querySelectorAll(".tmp-title-split-2");
                const heroSubtitles = document.querySelectorAll(".hero__sub-title");

                // Loop through each pair of title and subtitle
                heroTitles.forEach((title, index) => {
                    const subtitle = heroSubtitles[index]; // Match title with subtitle (if in pairs)

                    // Split the text for both title and subtitle
                    // const splitTitle = new SplitText(title, {
                    // type: "chars"
                    // });
                    // const splitSubtitle = subtitle ?
                    // new SplitText(subtitle, {
                    // type: "chars words"
                    // }) :
                    // null;

                    // Create a timeline for each title and subtitle
                    gsap.timeline({
                        scrollTrigger: {
                            trigger: title, // Trigger animation when the current title comes into view
                            start: "top 80%", // Start when the top of the element reaches 80% of the viewport height
                            end: "bottom 60%", // Optional: Define when animation ends
                            toggleActions: "play none none none", // Play only once
                            // markers: true // Uncomment for debugging
                        },
                    })
                    // .from(splitTitle.chars, {
                    //     duration: 0.2,
                    //     x: -10,
                    //     autoAlpha: .06,
                    //     stagger: 0.01,
                    // })
                    // .from(
                    //     splitSubtitle ? splitSubtitle.words : [], {
                    //         duration: 0.2,
                    //         x: 100,
                    //         autoAlpha: .06,
                    //         stagger: 0.01,
                    //     },
                    //     "-=1" // Overlap with the previous animation
                    // );
                });
            });


        },

        animationOnHover: function () {
            let cards = document.querySelectorAll('.tmponhover');
            cards.forEach((tmpOnHover) => {
                tmpOnHover.onmousemove = function (e) {
                    let x = e.pageX - tmpOnHover.offsetLeft;
                    let y = e.pageY - tmpOnHover.offsetTop;
                    tmpOnHover.style.setProperty('--x', x + 'px');
                    tmpOnHover.style.setProperty('--y', y + 'px');
                };
            });
        },

        odoMeter: function () {

            $(document).ready(function () {
                function isInViewport(element) {
                    const rect = element.getBoundingClientRect();
                    return (
                        rect.top >= 0 &&
                        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
                    );
                }

                function triggerOdometer(element) {
                    const $element = $(element);
                    if (!$element.hasClass('odometer-triggered')) {
                        const countNumber = $element.attr('data-count');
                        $element.html(countNumber);
                        $element.addClass('odometer-triggered'); // Add a class to prevent re-triggering
                    }
                }

                function handleOdometer() {
                    $('.odometer').each(function () {
                        if (isInViewport(this)) {
                            triggerOdometer(this);
                        }
                    });
                }

                // Check on page load
                handleOdometer();

                // Check on scroll
                $(window).on('scroll', function () {
                    handleOdometer();
                });
            });


        },

        titleSplit_2: function () {
            if ($('.tmp-title-split').length) {
                let staggerAmount = 0.03,
                    translateXValue = 20,
                    delayValue = 0.1,
                    easeType = "power2.out",
                    animatedTextElements = document.querySelectorAll('.tmp-title-split');

                animatedTextElements.forEach((element) => {
                    let animationSplitText = new SplitText(element, {
                        type: "chars, words"
                    });
                    gsap.from(animationSplitText.chars, {
                        duration: 1,
                        delay: delayValue,
                        x: translateXValue,
                        autoAlpha: 0,
                        stagger: staggerAmount,
                        ease: easeType,
                        scrollTrigger: {
                            trigger: element,
                            start: "top 85%"
                        },
                    });
                });
            }
        },

        tiltAnimation: function () {

            let tiltAnimation = document.getElementsByClassName('tilt-container');

            if (tiltAnimation.length) {
                $(document).ready(function () {
                    let tiltContainer = document.querySelector('.tilt-container');

                    if (tiltContainer) {
                        tiltContainer.addEventListener('mousemove', (e) => {
                            const xPos = (window.innerWidth / 2 - e.pageX) / 80;
                            const yPos = (window.innerHeight / 2 - e.pageY) / 80;

                            tiltContainer.style.transform = `rotateX(${yPos}deg) rotateY(${xPos}deg)`;
                        });

                        tiltContainer.addEventListener('mouseenter', () => {
                            tiltContainer.style.transition = 'none';
                        });

                        tiltContainer.addEventListener('mouseleave', () => {
                            tiltContainer.style.transition = 'transform 0.3s';
                            tiltContainer.style.transform = 'none';
                        });
                    }
                });
            }

        },

        lineAnimation: function () {
            let line_animation = document.querySelectorAll('.for-animation-inner');
            if (line_animation.length) {
                const parent = document.querySelector('.for-animation-inner');
                const line1 = document.querySelector('.cta__line-1');
                const line2 = document.querySelector('.cta__line-2');

                function animateLines() {
                    const parentHeight = parent.offsetWidth;

                    // Animating the first line using Timeline
                    gsap.killTweensOf(line1);
                    gsap.set(line1, {
                        x: 0,
                        opacity: 0
                    });
                    const tl1 = gsap.timeline({
                        repeat: -1,
                        onRepeat: () => gsap.set(line1, {
                            x: 0,
                            opacity: 0
                        }),
                    });
                    tl1
                        .to(line1, {
                            duration: 0.3,
                            opacity: 1
                        })
                        .to(line1, {
                            duration: 4,
                            x: parentHeight,
                            ease: 'none'
                        }, '<')
                        .to(line1, {
                            duration: 0.3,
                            opacity: 0
                        }, 3);

                    // Animating the Second Line Using Timeline
                    gsap.killTweensOf(line2);
                    gsap.set(line2, {
                        x: 0,
                        opacity: 0
                    });
                    const tl2 = gsap.timeline({
                        repeat: -1,
                        onRepeat: () => gsap.set(line2, {
                            x: 0,
                            opacity: 0
                        }),
                    });
                    tl2
                        .to(line2, {
                            duration: 0.3,
                            opacity: 1
                        })
                        .to(line2, {
                            duration: 4,
                            x: -parentHeight,
                            ease: 'none'
                        }, '<')
                        .to(line2, {
                            duration: 0.3,
                            opacity: 0
                        }, 3);
                }

                animateLines();
            }
        },


    };

    tmPk.m();
})(jQuery, window);


// Back To Top style here
function updateDimensions() {
    windowHeight = window.innerHeight;
    documentHeight = document.documentElement.scrollHeight - windowHeight;
}

// Initialize dimensions
updateDimensions();

// Add resize event listener to update dimensions
window.addEventListener('resize', updateDimensions);

document.addEventListener('DOMContentLoaded', function () {
    var box = document.querySelector(".scrollToTop");
    if (box) {
        var water = box.querySelector(".water");

        window.addEventListener('scroll', function () {
            var scrollPosition = window.scrollY;
            var percent = Math.min(
                Math.floor((scrollPosition / documentHeight) * 100),
                100
            );
            water.style.transform = "translate(0," + (100 - percent) + "%)";

            if (scrollPosition >= 200) {
                box.style.display = 'block';
            } else {
                box.style.display = 'none';
            }
        });

        // Add click event listener to scroll to top
        box.onclick = function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        };
    }

    // Preloader functionality
    function removePreloader() {
        document.body.classList.remove("preloader-active");
    }

    document.body.classList.add("preloader-active");
    window.addEventListener('load', function () {
        removePreloader();
    });
});


const video = document.getElementById('myVideo');

video.addEventListener('canplay', function () {
    video.classList.add('loaded');
});

/* ---------- Scoped script: IIFE, only touches elements inside each
       .cfx-section. Works whether this is inline OR moved into an
       external file like main.js — it does NOT rely on
       document.currentScript, so file location doesn't matter. If you
       have multiple coverflow sections on one page, each one gets its
       own independent instance automatically. ---------- */
(function () {
    var sections = document.querySelectorAll('.cfx-section');

    sections.forEach(function (root) {
        // Skip a section we've already wired up (e.g. if this script
        // accidentally runs twice).
        if (root.dataset.cfxInit) return;
        root.dataset.cfxInit = 'true';

        initCoverflow(root);
    });

    function initCoverflow(root) {
        var stage = root.querySelector('[data-cfx-stage]');
        var dotsWrap = root.querySelector('[data-cfx-dots]');
        var prevBtn = root.querySelector('[data-cfx-prev]');
        var nextBtn = root.querySelector('[data-cfx-next]');

        var cards = Array.prototype.slice.call(stage.querySelectorAll('.cfx-card'));
        var count = cards.length;

        if (count === 0) {
            console.warn('[cfx-coverflow] No .cfx-card elements found inside this section.');
            return;
        }
        if (count > 30) {
            console.warn('[cfx-coverflow] ' + count + ' cards detected. Works fine, but only ~7 ' +
                '(or 3 on mobile) are ever visible at once — consider paging server-side if this grows further.');
        }

        cards.forEach(function (card, i) {
            var img = card.dataset.img || '';
            var sub = card.dataset.sub || '';
            var title = card.dataset.title || '';

            card.dataset.idx = i;
            if (img) card.style.backgroundImage = "url('" + img + "')";

            card.innerHTML =
                '<div class="cfx-sheen"></div>' +
                '<div class="cfx-label">' +
                (sub ? '<p class="cfx-eyebrow">' + sub + '</p>' : '') +
                (title ? '<p class="cfx-title">' + title + '</p>' : '') +
                '</div>';

            card.addEventListener('click', function () { active = i; render(); });

            var dot = document.createElement('div');
            dot.className = 'cfx-dot';
            dot.dataset.idx = i;
            dot.addEventListener('click', function () { active = i; render(); });
            dotsWrap.appendChild(dot);
        });

        var active = Math.min(Math.floor(count / 2), count - 1);

        function posClass(d) {
            if (d === 0) return 'cfx-pos-0';
            if (d === 1) return 'cfx-pos-1';
            if (d === -1) return 'cfx-pos-n1';
            if (d === 2) return 'cfx-pos-2';
            if (d === -2) return 'cfx-pos-n2';
            if (d >= 3) return 'cfx-pos-3';
            if (d <= -3) return 'cfx-pos-n3';
            return 'cfx-hidden';
        }

        function render() {
            cards.forEach(function (card) {
                var i = parseInt(card.dataset.idx, 10);
                var d = i - active;
                var sideClass = d < 0 ? ' cfx-is-left' : '';
                card.className = 'cfx-card ' + posClass(d) + sideClass;
            });
            dotsWrap.querySelectorAll('.cfx-dot').forEach(function (dot) {
                dot.classList.toggle('active', parseInt(dot.dataset.idx, 10) === active);
            });
        }

        function goNext() { active = Math.min(active + 1, count - 1); render(); }
        function goPrev() { active = Math.max(active - 1, 0); render(); }

        nextBtn.addEventListener('click', goNext);
        prevBtn.addEventListener('click', goPrev);

        // Keyboard nav only while this section is focused/hovered, so it
        // doesn't hijack arrow keys used elsewhere on your page.
        root.setAttribute('tabindex', '-1');
        root.addEventListener('keydown', function (e) {
            if (e.key === 'ArrowRight') goNext();
            if (e.key === 'ArrowLeft') goPrev();
        });

        /* ---- Touch swipe support (mobile) ---- */
        var touchStartX = 0;
        var touchStartY = 0;
        var SWIPE_THRESHOLD = 40; // px

        stage.addEventListener('touchstart', function (e) {
            touchStartX = e.changedTouches[0].clientX;
            touchStartY = e.changedTouches[0].clientY;
        }, { passive: true });

        stage.addEventListener('touchend', function (e) {
            var dx = e.changedTouches[0].clientX - touchStartX;
            var dy = e.changedTouches[0].clientY - touchStartY;

            if (Math.abs(dx) < SWIPE_THRESHOLD || Math.abs(dx) < Math.abs(dy)) return;

            if (dx < 0) goNext();
            else goPrev();
        }, { passive: true });

        render();
    }
})();
