<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../" />
    <title>KN Dalda | Security</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="aside-enabled">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <!--begin::Aside Toolbar-->
                <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
                    <!--begin::Aside user-->
                    <!--begin::User-->
                    @if (Auth::check())
                        <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
                     
                            <!--begin::Wrapper-->
                            <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                                <!--begin::Section-->
                                <div class="d-flex">
                                    <!--begin::Info-->
                                    <div class="flex-grow-1 me-2">
                                        <!--begin::Username-->
                                        <a href="#"
                                            class="text-white text-hover-primary fs-6 fw-bold">{{ Auth::user()->name }}</a>
                                        <!--end::Username-->
                                        <!--begin::Description-->
                                        <span
                                            class="text-gray-600 fw-semibold d-block fs-8 mb-1">{{ Auth::user()->role }}</span>
                                        <!--end::Description-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center text-success fs-9">
                                            <span class="bullet bullet-dot bg-success me-1"></span>online
                                        </div>
                                        <div class="text-white fs-8 fw-bold mt-1">
                                                <a href="{{ route('logout') }}" class="btn btn-danger"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                                    Out</a>
                                                <form id="logout-form" action="{{ route('security.logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::User menu-->
                                    <div class="me-n2">
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                                            data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-setting-2 text-muted fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <!--begin::User account menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                            data-kt-menu="true">
                                           
                                             <div class="menu-item px-5">
                                                <a href="{{ route('logout') }}" class="menu-link px-5"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
                                                    Out</a>
                                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::User account menu-->
                                        <!--end::Action-->
                                    </div>
                                    <!--end::User menu-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::User-->
                    @endif
                </div>
                <!--end::Aside Toolbar-->
                @if (Auth::check())
                    <!--begin::Aside menu-->
                    <div class="aside-menu flex-column-fluid">
                        <!--begin::Aside Menu-->
                        <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper"
                            data-kt-scroll="true" data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
                            data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                                id="#kt_aside_menu" data-kt-menu="true">
                                <!--end:Menu item-->
                                <div class="menu-item">
                                       <!--begin:Menu item-->
                                       <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="{{ route('security.dashboard') }}">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-calendar-8 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="{{ route('invitations.web.verify.form') }}">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-calendar-8 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">New Scan</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="{{ route('scanlogs.index') }}">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-calendar-8 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Scan History</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                               
                                <!--end:Menu item-->
                                    <!--begin:Menu link-->
                                    
                                </div>
                             
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Aside Menu-->
                    </div>
                    <!--end::Aside menu-->
                @endif
                <!--begin::Footer-->
                <div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">

                </div>
                <!--end::Footer-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" style="" class="header align-items-stretch">
                    <!--begin::Brand-->
                    <div class="header-brand ">
                        <!--begin::Logo-->
                        <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center">
                            <h1 class="text-white">KN Dalda</h1>
                        </a>
                        <!--end::Logo-->
                        <!--begin::Aside minimize-->
                        <div id="kt_aside_toggle"
                            class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize"
                            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                            data-kt-toggle-name="aside-minimize">
                            <i class="ki-duotone ki-entrance-right fs-1 me-n1 minimize-default">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <i class="ki-duotone ki-entrance-left fs-1 minimize-active">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::Aside minimize-->
                        <!--begin::Aside toggle-->
                        <div class="d-flex align-items-center d-lg-none me-n2" title="Show aside menu">
                            <div class="btn btn-icon btn-active-color-primary w-30px h-30px"
                                id="kt_aside_mobile_toggle">
                                <i class="ki-duotone ki-abstract-14 fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::Aside toggle-->
                    </div>
                    <!--end::Brand-->
                    <!--begin::Toolbar-->
                    <div class="toolbar d-flex align-items-stretch">
                        <!--begin::Toolbar container-->
                        <div
                            class="container-xxl py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between ">
                            <!--begin::Page title-->
                            <div class="page-title d-flex justify-content-center flex-column me-5">
                            </div>
                            <!--end::Page title-->
                            <!--begin::Action group-->
                            <div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">
                                <!--begin::Theme mode-->
                                <div class="d-flex align-items-center ml-3">
                                    <!--begin::Menu toggle-->
                                    <a href="#"
                                        class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary"
                                        data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-night-day theme-light-show fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                            <span class="path7"></span>
                                            <span class="path8"></span>
                                            <span class="path9"></span>
                                            <span class="path10"></span>
                                        </i>
                                        <i class="ki-duotone ki-moon theme-dark-show fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <!--begin::Menu toggle-->
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="light">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-night-day fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                        <span class="path6"></span>
                                                        <span class="path7"></span>
                                                        <span class="path8"></span>
                                                        <span class="path9"></span>
                                                        <span class="path10"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">Light</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="dark">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-moon fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">Dark</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="system">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-screen fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">System</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Theme mode-->
                            </div>
                            <!--end::Action group-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->

                <main class="py-4">
                    @yield('content')
                </main>


                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer" style="margin-top:auto;">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2025&copy;</span>
                            <a href="#" target="_blank" class="text-gray-800 text-hover-primary">Verify</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">Contact</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/apps/contacts/view-contact.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    @yield('scripts')
</body>
<!--end::Body-->

</html>
