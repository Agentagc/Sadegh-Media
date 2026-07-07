@extends('members.layouts.master')

@section('member')

    <div class="d-none d-xl-block">
        <div class="tmp-sidebar-area tmp_side_bar">
            <div class="inner">
                <div class="top-area">
                    <a class="logo" href="index.html">
                        <img
                            alt="Virtuo - Personal Portfolio HTML Template for developers and freelancers"
                            class="logo-dark"
                            src="{{ asset("assets/images/logo/white-logo-reeni.png") }}"
                        />
                        <img
                            alt="Virtuo - Personal Portfolio HTML Template for developers and freelancers"
                            class="logo-white"
                            src="{{ asset("assets/images/logo/dark-logo-virtuo.png") }}"
                        />
                    </a>
                    <div class="close-icon-area">
                        <button class="tmp-round-action-btn close_side_menu_active">
                            <i class="fa-sharp fa-light fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <div class="content-wrapper">
                    <div class="image-area-feature">
                        <a href="index.html">
                            <img alt="personal-logo" src="{{ asset("assets/images/logo/man.png") }}"/>
                        </a>
                    </div>
                    <h5 class="title mt--30">
                        فریلنسر ارائه‌دهنده راه‌حل‌های استثنایی با Webflow و Next.js است.
                    </h5>
                    <p class="disc">
                        من یک فریلنسر ماهر متخصص در توسعه Webflow ، طراحی FIGMA و پروژه
                        های بعدی هستم.من راه حل های وب خلاق ، پویا و کاربر محور را ارائه
                        می دهم.
                    </p>
                    <div class="short-contact-area">
                        <!-- single contact information -->
                        <div class="single-contact">
                            <i class="fa-solid fa-phone"></i>
                            <div class="information tmp-link-animation">
                                <span>اکنون تماس بگیرید</span>
                                <a class="number" href="index-04.html#">+92 (8800) - 98670</a>
                            </div>
                        </div>
                        <!-- single contact information end -->
                        <!-- single contact information -->
                        <div class="single-contact">
                            <i class="fa-solid fa-envelope"></i>
                            <div class="information tmp-link-animation">
                                <span>به ما نامه ارسال کنید</span>
                                <a class="number" href="index-04.html#">example@info.com</a>
                            </div>
                        </div>
                        <!-- single contact information end -->
                        <!-- single contact information -->
                        <div class="single-contact">
                            <i class="fa-solid fa-location-crosshairs"></i>
                            <div class="information tmp-link-animation">
                                <span>آدرس من</span>
                                <span class="number">66 بروکلینت، نیویورک ۳۲۶۹</span>
                            </div>
                        </div>
                        <!-- single contact information end -->
                    </div>
                    <!-- social area start -->
                    <div class="social-wrapper mt--20">
                        <span class="subtitle">با من پیدا کن</span>
                        <div class="social-link">
                            <a href="index-04.html#"
                            ><i class="fa-brands fa-instagram"></i
                                ></a>
                            <a href="index-04.html#"
                            ><i class="fa-brands fa-linkedin-in"></i
                                ></a>
                            <a href="index-04.html#"
                            ><i class="fa-brands fa-twitter"></i
                                ></a>
                            <a href="index-04.html#"
                            ><i class="fa-brands fa-facebook-f"></i
                                ></a>
                        </div>
                    </div>
                    <!-- social area end -->
                </div>
            </div>
        </div>
        <a
            class="overlay_close_side_menu close_side_menu_active"
            href="javascript:void(0);"
        ></a>
    </div>
    <div class="d-block d-xl-none">
        <div class="tmp-popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a class="logo-area" href="index.html">
                            <img
                                alt="Virtuo - Personal Portfolio HTML Template for developers and freelancers"
                                class="logo-dark"
                                src="{{ asset("assets/images/logo/white-logo-reeni.png") }}"
                            />
                            <img
                                alt="Virtuo - Personal Portfolio HTML Template for developers and freelancers"
                                class="logo-white"
                                src="{{ asset("assets/images/logo/dark-logo-virtuo.png") }}"
                            />
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button tmp-round-action-btn">
                            <i class="fa-sharp fa-light fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <ul class="tmp-mainmenu onepagenav">
                    <li>
                        <a href="index-04.html#home">خانه</a>
                    </li>
                    <li>
                        <a href="index-04.html#about">در مورد</a>
                    </li>
                    <li>
                        <a href="index-04.html#service">خدمات</a>
                    </li>
                    <li>
                        <a href="index-04.html#portfolio">طرح</a>
                    </li>
                    <li>
                        <a href="index-04.html#blog">وبلاگ</a>
                    </li>
                    <li>
                        <a href="index-04.html#contacts">تماس</a>
                    </li>
                </ul>
                <div class="social-wrapper mt--40">
                    <span class="subtitle">با من پیدا کن</span>
                    <div class="social-link">
                        <a href="index-04.html#"
                        ><i class="fa-brands fa-instagram"></i
                            ></a>
                        <a href="index-04.html#"
                        ><i class="fa-brands fa-linkedin-in"></i
                            ></a>
                        <a href="index-04.html#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="index-04.html#"
                        ><i class="fa-brands fa-facebook-f"></i
                            ></a>
                    </div>
                </div>
                <!-- social area end -->
            </div>
        </div>
    </div>
    <div class="personal-page-inner-wrapper">
        <div class="container-fluid-13">
            <div class="row">
                <div class="col-xl-4">
                    <div class="profile-image-1-personal-left-fixed">
                        <div class="inner-content">
                            <img
                                alt="business-coatch"
                                src="{{ asset("assets/images/banner/portfolio-image-1.jpg") }}"
                            />
                            <h3 class="title">
                                سلام من<br/>جان دو هستم.<br/>یک
                                <span class="header-caption">
                    <span class="cd-headline clip is-full-width">
                      <span class="cd-words-wrapper" style="width: 228.812px">
                        <b class="theme-gradient is-visible">توسعه دهنده</b>
                        <b class="theme-gradient is-hidden">طراح</b>
                        <b class="theme-gradient is-hidden">نویسنده</b>
                      </span>
                    </span>
                  </span>
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="col-xl-8 pl--70 pl_md--15 pl_sm--15 pt--70">
                    <div class="personal-portfolio-right-inner-wrapper">
                        <div
                            class="banner-personal-portfolio pb--60 pt_md--0 pt_sm--0"
                            id="home"
                        >
                            <div class="section-header">
                                <h4 class="subtitle">
                                    <i class="fa-regular fa-house"></i>معرفی کردن
                                </h4>
                                <h1 class="">
                                    سلام من
                                    <strong><span class="theme-gradient">جان دو </span></strong
                                    >یک <br/>طراح و توسعه دهنده وب
                                </h1>
                                <p class="">
                                    من چیزهای زیبا و ساده ای را طراحی و کد می کنم و کاری را که
                                    انجام می دهم دوست دارم.فقط دانلود کنید!
                                </p>
                            </div>
                        </div>
                        <div class="counterup-area-personal tmp-section-gapBottom">
                            <div class="row g-5 animation-action-1">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 paralax-image">
                                    <div
                                        class="count-box counter-style-2 border-style small-radious text-center"
                                    >
                                        <div
                                            class="counter-main-wrapper-card single-animation tmponhover active"
                                        >
                                            <h3 class="count-number">
                                                <span class="odometer" data-count="320">00</span>هزار
                                            </h3>
                                            <div class="tmp-light light-center"></div>
                                        </div>
                                        <h5 class="title">مشتری های مبارک</h5>
                                        <p class="description">
                                            Lorem Ipsum به سادگی متن ساختگی چاپ و حروفچ وب است صنعت
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 paralax-image">
                                    <div
                                        class="count-box counter-style-2 border-style small-radious text-center"
                                    >
                                        <div
                                            class="counter-main-wrapper-card single-animation tmponhover"
                                        >
                                            <h3 class="count-number">
                                                <span class="odometer" data-count="255">00</span>هزار
                                            </h3>
                                            <div class="tmp-light light-center"></div>
                                        </div>
                                        <h5 class="title">کارمندان</h5>
                                        <p class="description">
                                            لورم ایپسوم به سادگی متن ساختگی چاپ و حروفچوب است صنعت
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 paralax-image">
                                    <div
                                        class="count-box counter-style-2 border-style small-radious text-center"
                                    >
                                        <div
                                            class="counter-main-wrapper-card single-animation tmponhover"
                                        >
                                            <h3 class="count-number">
                                                با <span class="odometer" data-count="120">00</span>
                                            </h3>
                                            <div class="tmp-light light-center"></div>
                                        </div>
                                        <h5 class="title">کار در حال اجرا</h5>
                                        <p class="description">
                                            لورم ایپسوم به سادگی متن ساختگی چاپ و حروفچوب است صنعت
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tmp skill area start -->
                        <div class="tmp-skill-area pt--40 pb--80" id="service">
                            <div class="row g-5">
                                <div class="col-12">
                                    <div class="progress-wrapper">
                                        <div class="content">
                                            <h2
                                                class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1"
                                            >
                                                مهارت طراحی
                                            </h2>
                                            <!-- Start Single Progress Charts -->
                                            <div class="progress-charts">
                                                <h6 class="heading heading-h6">فتوشت</h6>
                                                <div class="progress">
                                                    <div
                                                        aria-valuemax="100"
                                                        aria-valuemin="0"
                                                        aria-valuenow="85"
                                                        class="progress-bar wow fadeInLeft"
                                                        data-wow-delay=".3s"
                                                        data-wow-duration="0.5s"
                                                        role="progressbar"
                                                        style="
                        width: 100%;
                        visibility: visible;
                        animation-duration: 0.5s;
                        animation-delay: 0.3s;
                        animation-name: fadeInLeft;
                      "
                                                    >
                                                        <span class="percent-label">100 ٪</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Progress Charts -->
                                            <!-- Start Single Progress Charts -->
                                            <div class="progress-charts">
                                                <h6 class="heading heading-h6">فیگما</h6>
                                                <div class="progress">
                                                    <div
                                                        aria-valuemax="100"
                                                        aria-valuemin="0"
                                                        aria-valuenow="85"
                                                        class="progress-bar wow fadeInLeft"
                                                        data-wow-delay=".4s"
                                                        data-wow-duration="0.6s"
                                                        role="progressbar"
                                                        style="
                        width: 95%;
                        visibility: visible;
                        animation-duration: 0.6s;
                        animation-delay: 0.4s;
                        animation-name: fadeInLeft;
                      "
                                                    >
                                                        <span class="percent-label">95 ٪</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Progress Charts -->
                                            <!-- Start Single Progress Charts -->
                                            <div class="progress-charts">
                                                <h6 class="heading heading-h6">Adobe XD</h6>
                                                <div class="progress">
                                                    <div
                                                        aria-valuemax="100"
                                                        aria-valuemin="0"
                                                        aria-valuenow="85"
                                                        class="progress-bar wow fadeInLeft"
                                                        data-wow-delay=".5s"
                                                        data-wow-duration="0.7s"
                                                        role="progressbar"
                                                        style="
                        width: 60%;
                        visibility: visible;
                        animation-duration: 0.7s;
                        animation-delay: 0.5s;
                        animation-name: fadeInLeft;
                      "
                                                    >
                                                        <span class="percent-label">60 ٪</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Progress Charts -->
                                            <!-- Start Single Progress Charts -->
                                            <div class="progress-charts">
                                                <h6 class="heading heading-h6">Adobe Illustrator</h6>
                                                <div class="progress">
                                                    <div
                                                        aria-valuemax="100"
                                                        aria-valuemin="0"
                                                        aria-valuenow="85"
                                                        class="progress-bar wow fadeInLeft"
                                                        data-wow-delay=".6s"
                                                        data-wow-duration="0.8s"
                                                        role="progressbar"
                                                        style="
                        width: 70%;
                        visibility: visible;
                        animation-duration: 0.8s;
                        animation-delay: 0.6s;
                        animation-name: fadeInLeft;
                      "
                                                    >
                                                        <span class="percent-label">70 ٪</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Progress Charts -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tmp skill area end -->
                    <div
                        class="tmp-section-gapBottom banner-personal-portfolio experience-style-list signle-section"
                    >
                        <div class="section-header pb--20">
                            <h4 class="subtitle wow move-right">
                                <i class="fa-regular fa-user"></i>رزومه من
                            </h4>
                            <h2 class="title">آموزش و <span>تجربه</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content">
                                    <div class="experience-list animation-action-2">
                                        <!-- Start Single List  -->
                                        <div
                                            class="resume-single-list bg-card single-animation tmponhover active"
                                        >
                                            <div class="inner">
                                                <div class="heading">
                                                    <div class="title">
                                                        <h4>نمونه کارها شخصی احمق های آوریل</h4>
                                                        <span>دانشگاه DVI (۱۳۷۶ - ۱۳۸۰)</span>
                                                    </div>
                                                    <div class="date-of-time">
                                                        <span>4.30/5</span>
                                                    </div>
                                                </div>
                                                <p class="description">
                                                    آموزش باید بسیار باشد لورم ایپسوم تیندینت است اک
                                                    دولور علیکوام سودالز. فازلس سد موریس هندریت،
                                                    لائورت سم این، لوبورتس موریس هندریت آنت.
                                                </p>
                                            </div>
                                            <div class="tmp-light light-left"></div>
                                        </div>
                                        <!-- End Single List  -->
                                        <!-- Start Single List  -->
                                        <div
                                            class="resume-single-list bg-card single-animation tmponhover"
                                        >
                                            <div class="inner">
                                                <div class="heading">
                                                    <div class="title">
                                                        <h4>نمونه ای از نمونه کارها شخصی</h4>
                                                        <span>دانشکده مطالعات (1379 - 1381)</span>
                                                    </div>
                                                    <div class="date-of-time">
                                                        <span>4.50/5</span>
                                                    </div>
                                                </div>
                                                <p class="description">
                                                    لورم ایپسوم متن ساختگی برای طراحی و تایپ است لورم
                                                    ایپسوم یو تی تیندینت است اک دولور علیکوام سودالز.
                                                    فازلس سد موریس هندریت، لائورت سم این، لوبورتس
                                                    موریس هندریت آنت.
                                                </p>
                                            </div>
                                            <div class="tmp-light light-left"></div>
                                        </div>
                                        <!-- End Single List  -->
                                        <!-- Start Single List  -->
                                        <div
                                            class="resume-single-list bg-card single-animation tmponhover"
                                        >
                                            <div class="inner">
                                                <div class="heading">
                                                    <div class="title">
                                                        <h4>نکاتی برای نمونه کارها شخصی</h4>
                                                        <span>دانشگاه مطالعات (۱۳۷۶ - ۱۳۸۰)</span>
                                                    </div>
                                                    <div class="date-of-time">
                                                        <span>4.80/5</span>
                                                    </div>
                                                </div>
                                                <p class="description">
                                                    اگر می‌خواهید از یک گذرگاه استفاده کنید. لورم
                                                    ایپسوم متن ساختگی برای طراحی و تایپ است. لورم
                                                    ایپسوم سد موریس هندریت، لائورت سم این، لوبورتس
                                                    موریس هندریت آنت.
                                                </p>
                                            </div>
                                            <div class="tmp-light light-left"></div>
                                        </div>
                                        <!-- End Single List  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Service__Style--1 Area  -->
                    <div
                        class="tmp-service-area tmp-section-gapBottom banner-personal-portfolio signle-section"
                    >
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-header">
                                    <h4 class="subtitle wow move-right">
                                        <i class="fa-solid fa-layer-group"> </i> تخصص های من
                                    </h4>
                                    {{--                                        <h2 class="title">من<span> تخصص</span></h2>--}}
                                </div>
                            </div>
                        </div>
                        <div
                            class="row g-5 skills-wrapper mt--5 text-center animation-action-4"
                        >
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div
                                    class="skill-style-border-card single-animation tmponhover active"
                                >
                                    <div class="skill-inner">
                                        <img alt="Figma" src="{{ asset("assets/images/skill/figma.png") }}"/>
                                        <h3 class="count-number">
                                            <span class="odometer" data-count="92">00</span>٪
                                        </h3>
                                        <p class="name">فیگما</p>
                                    </div>
                                    <div class="tmp-light light-left"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div
                                    class="skill-style-border-card single-animation tmponhover"
                                >
                                    <div class="skill-inner">
                                        <img
                                            alt="Framer"
                                            src="{{ asset("assets/images/skill/framer.png") }}"
                                        />
                                        <h3 class="count-number">
                                            <span class="odometer" data-count="99">00</span>٪
                                        </h3>
                                        <p class="name">قاب</p>
                                    </div>
                                    <div class="tmp-light light-left"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div
                                    class="skill-style-border-card single-animation tmponhover"
                                >
                                    <div class="skill-inner">
                                        <img
                                            alt="Webflow"
                                            src="{{ asset("assets/images/skill/webflow.png") }}"
                                        />
                                        <h3 class="count-number">
                                            <span class="odometer" data-count="95">00</span>٪
                                        </h3>
                                        <p class="name">جریان وب</p>
                                    </div>
                                    <div class="tmp-light light-left"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div
                                    class="skill-style-border-card single-animation tmponhover"
                                >
                                    <div class="skill-inner">
                                        <img alt="React" src="{{ asset("assets/images/skill/react.png") }}"/>
                                        <h3 class="count-number">
                                            <span class="odometer" data-count="88">00</span>٪
                                        </h3>
                                        <p class="name">react</p>
                                    </div>
                                    <div class="tmp-light light-left"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div
                                    class="skill-style-border-card single-animation tmponhover"
                                >
                                    <div class="skill-inner">
                                        <img
                                            alt="WordPress"
                                            src="{{ asset("assets/images/skill/wordpress.png") }}"
                                        />
                                        <h3 class="count-number">
                                            <span class="odometer" data-count="85">00</span>٪
                                        </h3>
                                        <p class="name">وردپرس</p>
                                    </div>
                                    <div class="tmp-light light-left"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div
                                    class="skill-style-border-card single-animation tmponhover"
                                >
                                    <div class="skill-inner">
                                        <img
                                            alt="Laravel/PHP"
                                            src="{{ asset("assets/images/skill/laravel.png") }}"
                                        />
                                        <h3 class="count-number">
                                            <span class="odometer" data-count="94">00</span>٪
                                        </h3>
                                        <p class="name">LARAVEL/PHP</p>
                                    </div>
                                    <div class="tmp-light light-left"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div
                                    class="skill-style-border-card single-animation tmponhover"
                                >
                                    <div class="skill-inner">
                                        <img
                                            alt="WordPress"
                                            src="{{ asset("assets/images/skill/wordpress.png") }}"
                                        />
                                        <h3 class="count-number">
                                            <span class="odometer" data-count="85">00</span>٪
                                        </h3>
                                        <p class="name">وردپرس</p>
                                    </div>
                                    <div class="tmp-light light-left"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div
                                    class="skill-style-border-card single-animation tmponhover"
                                >
                                    <div class="skill-inner">
                                        <img
                                            alt="Laravel/PHP"
                                            src="{{ asset("assets/images/skill/laravel.png") }}"
                                        />
                                        <h3 class="count-number">
                                            <span class="odometer" data-count="94">00</span>٪
                                        </h3>
                                        <p class="name">LARAVEL/PHP</p>
                                    </div>
                                    <div class="tmp-light light-left"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service__Style--1 Area  -->

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal Portfolio Body area Start -->
    <div
        aria-hidden="true"
        class="modal fade"
        id="exampleModalCenter"
        role="dialog"
        tabindex="-1"
    >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button
                        aria-label="Close"
                        class="close"
                        data-bs-dismiss="modal"
                        type="button"
                    >
                        <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="portfolio-popup-thumbnail">
                                <div class="image">
                                    <img
                                        alt="slide"
                                        class="w-100"
                                        src="assets/images/portfolio/portfolio-04.jpg"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-content">
                                <h3><span>برجسته - طراحی</span>توسعه طراحی برنامه.</h3>
                                <p class="mb--30">
                                    لورم ایپسوم متن آزمایشی برای پر کردن فضا در طراحی و نشر است.
                                    این متن معمولاً جهت نمایش قالب‌بندی و تایپوگرافی استفاده
                                    می‌شود. متمایز فرضیه ماپکسیوبو ونیام تمپونیوس الیگندی..
                                </p>
                                <p>
                                    لورم ایپسوم متن ساختگی بدون مفهوم. متمایز فرضیه. دولوروم
                                    آلیاس سوسپیت رروم مایورز علیقام سیاروم اودیت، نیهیل کلبه
                                    کوآس ایوستو ماینوس.!
                                </p>
                                <div class="button-group button-group-pd mt--20">
                                    <a
                                        class="tmp-btn hover-icon-reverse btn-border tmp-modern-button radius-round download-icon"
                                        href="index-04.html#"
                                    >
                                        <div class="icon-reverse-wrapper">
                                            <span class="btn-text">دانلود کنید</span>
                                            <div class="btn-hack"></div>
                                            <img
                                                alt=""
                                                class="btn-bg"
                                                src="assets/images/button/btg-bg.svg"
                                            />
                                            <img
                                                alt=""
                                                class="btn-bg-hover"
                                                src="assets/images/button/btg-bg-2.svg"
                                            />
                                            <span class="btn-icon"
                                            ><i class="fa-solid fa-thumbs-up"></i
                                                ></span>
                                            <span class="btn-icon"
                                            ><i class="fa-solid fa-thumbs-up"></i
                                                ></span>
                                        </div>
                                    </a>
                                    <a
                                        class="tmp-btn hover-icon-reverse btn-border tmp-modern-button radius-round download-icon"
                                        href="index-04.html#"
                                    >
                                        <div class="icon-reverse-wrapper">
                                            <span class="btn-text">مشاهده پروژه ها</span>
                                            <div class="btn-hack"></div>
                                            <img
                                                alt=""
                                                class="btn-bg"
                                                src="assets/images/button/btg-bg.svg"
                                            />
                                            <img
                                                alt=""
                                                class="btn-bg-hover"
                                                src="assets/images/button/btg-bg-2.svg"
                                            />
                                            <span class="btn-icon"
                                            ><i class="fa-regular fa-chevron-left"></i
                                                ></span>
                                            <span class="btn-icon"
                                            ><i class="fa-regular fa-chevron-left"></i
                                                ></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End of .text-content -->
                        </div>
                    </div>
                    <!-- End of .row Body-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Portfolio area -->
    <!-- progress area start -->
    <div class="scrollToTop" style="display: block">
        <div class="arrowUp">
            <i class="fa-light fa-arrow-up"></i>
        </div>
        <div class="water" style="transform: translate(0px, 87%)">
            <svg class="water_wave water_wave_back" viewbox="0 0 560 20">
                <use xlink:href="#wave"></use>
            </svg>
            <svg class="water_wave water_wave_front" viewbox="0 0 560 20">
                <use xlink:href="#wave"></use>
            </svg>
            <svg
                style="display: none"
                version="1.1"
                viewbox="0 0 560 20"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
            >
                <symbol id="wave">
                    <path
                        d="M420,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C514,6.5,518,4.7,528.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H420z"
                        fill="#fff"
                    ></path>
                    <path
                        d="M420,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C326,6.5,322,4.7,311.5,2.7C304.3,1.4,293.6-0.1,280,0c0,0,0,0,0,0v20H420z"
                        fill="#fff"
                    ></path>
                    <path
                        d="M140,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C234,6.5,238,4.7,248.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H140z"
                        fill="#fff"
                    ></path>
                    <path
                        d="M140,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C46,6.5,42,4.7,31.5,2.7C24.3,1.4,13.6-0.1,0,0c0,0,0,0,0,0l0,20H140z"
                        fill="#fff"
                    ></path>
                </symbol>
            </svg>
        </div>
    </div>
    <!-- progress area end -->

@endsection
