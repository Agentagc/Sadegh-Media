@extends('members.layouts.master')

@php
    use Illuminate\Support\Facades\Storage;
@endphp

@section('member')

    <div class="d-block d-xl-none">
        <div class="tmp-popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a class="logo-area" href="{{ url('/') }}">
{{--                            <img--}}
{{--                                alt="Virtuo - Personal Portfolio HTML Template for developers and freelancers"--}}
{{--                                class="logo-dark"--}}
{{--                                src="{{ asset("assets/images/logo/white-logo-reeni.png") }}"--}}
{{--                            />--}}
{{--                            <img--}}
{{--                                alt="Virtuo - Personal Portfolio HTML Template for developers and freelancers"--}}
{{--                                class="logo-white"--}}
{{--                                src="{{ asset("assets/images/logo/dark-logo-virtuo.png") }}"--}}
{{--                            />--}}
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img
                                    src="{{ asset('assets/images/logo/sadegh-media-01-noBG-light.png') }}"
                                    alt="رسانه صادق"
                                    style="width: 70px; height: 70px; border-radius: 14px; object-fit: cover; margin-top: 8px;"
                                />
                                <span
                                    style="font-family: 'Gofteh',sans-serif, Tahoma, sans-serif; font-size: 24px; font-weight: 500; color: white;">
                                    رسانه صادق
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button tmp-round-action-btn">
                            <i class="fa-sharp fa-light fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <ul class="tmp-mainmenu onepagenav">
                    <li><a href="#home">معرفی</a></li>
                    @if($member->abilities->isNotEmpty())
                        <li><a href="#abilities">توانایی‌ها</a></li>
                    @endif
                    <li><a href="#resume">رزومه</a></li>
                    @if($member->skills->isNotEmpty())
                        <li><a href="#skills">تخصص‌ها</a></li>
                    @endif
                    <li><a href="{{ url('/') }}">بازگشت به خانه</a></li>
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
                            <img alt="{{ $member->full_name }}"
                                 src="{{ $member->avatar ? Storage::url($member->avatar) : asset('assets/images/banner/portfolio-image-1.jpg') }}"/>
                            <h3 class="title">
                                من<br/>{{ $member->full_name }} هستم.<br/>یک
                                <span class="header-caption">
                    <span class="cd-headline clip is-full-width">
                      <span class="cd-words-wrapper" style=" background: rgba(0, 0, 0, 0.35);
                      border-radius: 12px;
                      padding: 2px 10px;
                      backdrop-filter: blur(3px);">
                          @foreach($member->roles as $index => $role)
                              <b class="theme-gradient {{ $index === 0 ? 'is-visible' : 'is-hidden' }} ">
                                  {{ $role->title }}
                              </b>
                          @endforeach
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
                                <h1 class="">سلام، من <strong><span
                                            class="theme-gradient">{{ $member->full_name }} </span></strong><br/> یک
                                    <strong><span
                                            class="theme-gradient">{{ $member->role_title }}</span></strong> هستم
                                </h1>
                                <p class="">{{ $member->bio }}</p>
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
                        <!-- tmp abilities area start -->
                        @if($member->abilities->isNotEmpty())
                            <div class="tmp-skill-area pt--40 pb--80" id="abilities">
                                <div class="row g-5">
                                    <div class="col-12">
                                        <div class="progress-wrapper">
                                            <div class="content">
                                                <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                                                    توانایی‌ها
                                                </h2>
                                                @foreach($member->abilities as $index => $ability)
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6"> {{ $ability->title }} </h6>
                                                        <div class="progress">
                                                            <div
                                                                aria-valuemax="100"
                                                                aria-valuemin="0"
                                                                aria-valuenow=" {{ $ability->percentage }}"
                                                                class="progress-bar wow fadeInLeft"
                                                                data-wow-delay="{{ $index * 0.1 + 0.3 }}s"
                                                                data-wow-duration="{{ $index * 0.1 + 0.5 }}s"
                                                                role="progressbar"
                                                                style="width: {{ $ability->percentage }}%;"
                                                            >
                                                                <span class="percent-label"> {{ $ability->percentage }} ٪</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- tmp abilities area end -->
                        <!-- tmp IDK area start -->
                        <div
                            class="tmp-section-gapBottom banner-personal-portfolio experience-style-list signle-section"
                            id="resume"
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
                        <!-- tmp IDK area end -->
                        <!-- tmp skill area start  -->
                        @if($member->skills->isNotEmpty())
                            <div
                                class="tmp-service-area tmp-section-gapBottom banner-personal-portfolio signle-section"
                                id="skills">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-header">
                                            <h4 class="subtitle wow move-right">
                                                <i class="fa-solid fa-layer-group"></i> تخصص های من
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-5 skills-wrapper mt--5 text-center animation-action-4">
                                    @foreach($member->skills as $index => $skill)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div
                                                class="skill-style-border-card single-animation tmponhover {{ $index === 0 ? 'active' : '' }}">
                                                <div class="skill-inner">
                                                    @if($skill->icon)
                                                        <img alt="{{ $skill->title }}"
                                                             src="{{ Storage::url($skill->icon) }}"/>
                                                    @endif
                                                    <h3 class="count-number">
                                                        <span class="odometer"
                                                              data-count="{{ $skill->percentage }}">00</span>٪
                                                    </h3>
                                                    <p class="name">{{ $skill->title }}</p>
                                                </div>
                                                <div class="tmp-light light-left"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <!-- tmp skill area end  -->

                    </div>
                </div>
            </div>
        </div>
    </div>

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
