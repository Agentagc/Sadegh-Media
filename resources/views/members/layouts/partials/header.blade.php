<header class="header-full-width header--sticky">
    <div class="container-fluid-13">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-fluid-main-wrapper">
                    <div class="left-area">
                        <div class="logo">
                            <a href="{{ url('/') }}">
{{--                                <img--}}
{{--                                    alt="Virtuo - Personal Portfolio HTML Template for developers and freelancers"--}}
{{--                                    class="logo-dark"--}}
{{--                                    src="{{ asset("assets/images/logo/white-logo-reeni.png") }}"--}}
{{--                                />--}}
{{--                                <img--}}
{{--                                    alt="Virtuo - Personal Portfolio HTML Template for developers and freelancers"--}}
{{--                                    class="logo-white"--}}
{{--                                    src="{{ asset("assets/images/logo/white-logo-reeni.png") }}"--}}
{{--                                />--}}
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
                        <nav class="tmp-mainmenu-nav d-none d-xl-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
                            <ul class="tmp-mainmenu onepagenav">
                                <li><a href="#home">معرفی</a></li>
                                @if(isset($member) && $member->abilities->isNotEmpty())
                                    <li><a href="#abilities">توانایی‌ها</a></li>
                                @endif
                                <li><a href="#resume">رزومه</a></li>
                                @if(isset($member) && $member->skills->isNotEmpty())
                                    <li><a href="#skills">تخصص‌ها</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <div class="right-area">
                        <!-- <a href="contact.html" class="tmp-btn btn-primary">Contact Me</a> -->
                        <!--  <a
                            class="tmp-btn btn-border tmp-modern-button"
                            href="index-04.html#"
                        >
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">با من تماس بگیرید</span>
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
                            </div>
                        </a> -->
                        <div class="actions-area tmp-modern-button">
                            <!--
                            <div class="tmp-side-collups-area d-none d-xl-block">
                                <button class="tmp-menu-bars tmp_button_active">
                                    <i class="fa-regular fa-bars-staggered"></i>
                                </button>
                            </div>
                            -->
                            <div class="tmp-side-collups-area d-block d-xl-none">
                                <button class="tmp-menu-bars humberger_menu_active">
                                    <i class="fa-regular fa-bars-staggered"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
