<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../" />
    <title>Metronic</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Tailwind CSS & Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="canonical" href="http://preview.keenthemes.comlayouts/dark-sidebar.html" />
    <link rel="shortcut icon" href="/Kima/assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="/Kima/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/Kima/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="/Kima/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/Kima/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (localStorage.getItem("data-bs-theme") !== null) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header" data-kt-sticky="true"
                data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-KIMA"
                data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
                <!--begin::Header container-->
                <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
                    id="kt_app_header_container">
                    <!--begin::Sidebar mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px"
                            id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <!--end::Sidebar mobile toggle-->
                    <!--begin::Mobile logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="index.html" class="d-lg-none">
                            <img alt="Logo" src="/Kima/assets/media/logos/default-small.svg" class="h-30px" />
                        </a>
                    </div>
                    <!--end::Mobile logo-->
                    <!--begin::Header wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                        id="kt_app_header_wrapper">
                        <!--begin::Menu wrapper-->
                        <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                            data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                            data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                            data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                            data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                            <!--begin::Menu-->
                            <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                                id="kt_app_header_menu" data-kt-menu="true">
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-title">Dashboards</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-title">Comunicados</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                </div>
                                <!--end:Menu link-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-title">Contactos</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <!--end:Menu link-->
                                </div>
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-title">Clientes</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <!--end:Menu link-->
                                </div>
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-title">Tickets</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <!--end:Menu link-->
                                </div>
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-title">Cotizacion</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <!--end:Menu link-->
                                </div>
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-title">Requisitos</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <!--end:Menu link-->
                                </div>
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-title">Tarifario</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <!--end:Menu link-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                    <!--begin::Logo-->
                    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                        <a href="index.php">
                            <img alt="Logo" src="/Kima/assets/media/logos/default-dark.svg"
                                class="h-25px app-sidebar-logo-default" />
                            <img alt="Logo" src="/Kima/assets/media/logos/default-small.svg"
                                class="h-20px app-sidebar-logo-KIMA" />
                        </a>
                    </div>
                    <!--end::Logo-->

                    <!--begin::Sidebar menu-->
                    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                            <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
                                data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                                data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                                data-kt-scroll-save-state="true">

                                <!--begin::Menu-->
                                <div class="menu menu-column menu-rounded fw-semibold fs-6" id="#kt_app_sidebar_menu"
                                    data-kt-menu="true">

                                    <!-- Opción: Inicio -->
                                    <div class="menu-item mb-5">
                                        <a href="index.php" class="menu-link">
                                            <span class="menu-icon">
                                                <i class="fas fa-home fs-2"></i>
                                            </span>
                                            <span class="menu-title">Inicio</span>
                                        </a>
                                    </div>

                                    <!-- Opción: Comunicados -->
                                    <div class="menu-item mb-5">
                                        <a href="/Kima/pages/comunicados.php" class="menu-link">
                                            <span class="menu-icon">
                                                <i class="fas fa-bell fs-2"></i>
                                            </span>
                                            <span class="menu-title">Comunicados</span>
                                        </a>
                                    </div>

                                    <!-- Opción: Contactos -->
                                    <div class="menu-item mb-5">
                                        <a href="/Kima/pages/contactos.php" class="menu-link">
                                            <span class="menu-icon">
                                                <i class="fas fa-address-book fs-2"></i>
                                            </span>
                                            <span class="menu-title">Contactos</span>
                                        </a>
                                    </div>

                                    <!-- Opción: Clientes -->
                                    <div class="menu-item mb-5">
                                        <a href="/Kima/pages/clientes.php" class="menu-link">
                                            <span class="menu-icon">
                                                <i class="fas fa-users fs-2"></i>
                                            </span>
                                            <span class="menu-title">Clientes</span>
                                        </a>
                                    </div>

                                    <!-- Opción: Tickets -->
                                    <div class="menu-item mb-5">
                                        <a href="/Kima/pages/tickets.php" class="menu-link">
                                            <span class="menu-icon">
                                                <i class="fas fa-ticket-alt fs-2"></i>
                                            </span>
                                            <span class="menu-title">Tickets</span>
                                        </a>
                                    </div>

                                    <!-- Opción: Cotización -->
                                    <div class="menu-item mb-5">
                                        <a href="/Kima/pages/cotizacion.php" class="menu-link">
                                            <span class="menu-icon">
                                                <i class="fas fa-file-invoice fs-2"></i>
                                            </span>
                                            <span class="menu-title">Cotización</span>
                                        </a>
                                    </div>

                                    <!-- Opción: Requisitos -->
                                    <div class="menu-item mb-5">
                                        <a href="/Kima/pages/requisitos.php" class="menu-link">
                                            <span class="menu-icon">
                                                <i class="fas fa-list-alt fs-2"></i>
                                            </span>
                                            <span class="menu-title">Requisitos</span>
                                        </a>
                                    </div>

                                    <!-- Opción: Tarifario -->
                                    <div class="menu-item mb-5">
                                        <a href="/Kima/pages/tarifario.php" class="menu-link">
                                            <span class="menu-icon">
                                                <i class="fas fa-wallet fs-2"></i>
                                            </span>
                                            <span class="menu-title">Tarifario</span>
                                        </a>
                                    </div>
                                </div>
                                <!--end::Menu-->
                            </div>
                        </div>
                    </div>
                    <!--end::Sidebar menu-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>

    <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend-->
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>var hostUrl = "/Kima/assets/";</script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="/Kima/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/Kima/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="/Kima/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="/Kima/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="/Kima/assets/js/widgets.bundle.js"></script>
    <script src="/Kima/assets/js/custom/widgets.js"></script>
    <script src="/Kima/assets/js/custom/apps/chat/chat.js"></script>
    <script src="/Kima/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="/Kima/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="/Kima/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>