<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    @hasSection('page-title')
        @yield('page-title')
    @else
        <title>Dashboard | SMKT - Admin & Dashboard Application</title>
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="SMKT | Admin & Dashboard Template" name="description" />
    <meta content="Sweetsica" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">


    @hasSection('page-css')
        @yield('page-css')
    @else
        <!-- jquery.vectormap css -->

        <link rel="stylesheet" href="{{asset('admin/assets/libs/morris.js/morris.css')}}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    @endif

</head>

<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{route('index')}}" class="logo">
                        <span class="logo-light  fs-5 fw-semibold ">
                            <i class="mdi mdi-camera-control"></i> SMKT
                        </span>
                        <span class="logo-sm fs-2">
                            <i class="mdi mdi-camera-control"></i>
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="mdi mdi-menu"></i>
                </button>

                <!-- App Search-->
                <form role="search" class="app-search">
                    <div class="form-group mb-0 position-relative">
                        <input type="text" class="form-control" placeholder="Search..">
                        <span><i class="fa fa-search"></i></span>
                    </div>
                </form>
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <i class="ri-search-line"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="mb-3 m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-none d-sm-inline-block">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('admin/assets/images/flags/us_flag.jpg')}}" class="me-2" height="12" alt="Header Language"> English <span class="mdi mdi-chevron-down"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <span> French </span> <img src="{{asset('admin/assets/images/flags/french_flag.jpg')}}" alt="" height="16" class="float-end" />
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <span> Spanish </span><img src="{{asset('admin/assets/images/flags/spain_flag.jpg')}}" alt="" height="16" class="float-end" />
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <span> Russian </span><img src="{{asset('admin/assets/images/flags/russia_flag.jpg')}}" alt="" height="16" class="float-end" />
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <span> German </span><img src="{{asset('admin/assets/images/flags/germany_flag.jpg')}}" alt="" height="16" class="float-end" />
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <span> Italian </span><img src="{{asset('admin/assets/images/flags/italy_flag.jpg')}}" alt="" height="16" class="float-end" />
                        </a>
                    </div>
                </div>

                <!-- light dark -->
                <button type="button" class="btn header-item fs-4 rounded-end-0" id="light-dark-mode">
                    <i class="fas fa-moon align-middle"></i>
                </button>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-bell-outline noti-icon"></i>
                        <span class="badge rounded-pill text-bg-danger noti-dot">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0"> Notifications </h6>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-success rounded-circle">
                                            <i class="mdi mdi-cart-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <p class="mb-0"><b class="mb-1 ">Your order is placed</b></p>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-danger rounded-circle">
                                            <i class="mdi mdi-message-text-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <p class="mb-0"><b class="mb-1">New Message received</b></p>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have 87 unread messages</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-info rounded-circle">
                                            <i class="mdi mdi-filter-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <p class="mb-0"><b class="mb-1">Your item is shipped</b></p>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">It is a long established fact that a reader will</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-success rounded-circle">
                                            <i class="mdi mdi-message-text-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <p class="mb-0"><b class="mb-1">New Message received</b></p>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have 87 unread messages</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-warning rounded-circle">
                                            <i class="mdi mdi-cart-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <p class="mb-0"><b class="mb-1">Your order is placed</b></p>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-1">
                            <div class="d-grid">
                                <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown notification-list d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{asset('admin/assets/images/users/user-4.jpg')}}" alt="Header Avatar">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle "></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> My Wallet</a>
                        <a class="dropdown-item d-block" href="#"><span class="badge text-bg-success float-end mt-1">11</span><i class="mdi mdi-settings"></i>Settings</a>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                    </div>
                </div>

                <!-- <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="ri-settings-2-line"></i>
                    </button>
                </div> -->

            </div>
        </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">
        @hasSection('page-sidebar')
            @yield('page-sidebar')
        @else
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="index.html" class="waves-effect">
                                <i class="icon-accelerator"></i><span class="badge text-bg-success rounded-pill float-end">9+</span> <span> Dashboard </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-mail-open"></i><span> Tiềm năng <span class="float-end menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{route('sample.index')}}">Khách hàng</a></li>
                                <li><a href="{{route('sample.index')}}">Nhóm</a></li>
                                <li><a href="{{route('sample.index')}}">Chủ đề</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="calendar.html" class="waves-effect"><i class="icon-calendar"></i><span> Chi phí </span></a>
                            <ul class="submenu">
                                <li><a href="email-inbox.html">Kế hoạch</a></li>
                                <li><a href="email-read.html">Đầu mục</a></li>
                                <li><a href="email-compose.html">Đơn vị</a></li>
                            </ul>
                        </li>

                        {{-- <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-paper-sheet"></i><span> Pages <span class="float-end menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-timeline.html">Timeline</a></li>
                                <li><a href="pages-faqs.html">FAQs</a></li>
                                <li><a href="pages-maintenance.html">Maintenance</a></li>
                                <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                <li><a href="pages-starter.html">Starter Page</a></li>
                                <li><a href="pages-login.html">Login</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                <li><a href="pages-404.html">Error 404</a></li>
                                <li><a href="pages-500.html">Error 500</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect"><i class="ti-layout"></i><span>Layouts <span class="float-end menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                <!-- <li>
                                    <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                        <li><a href="layouts-preloader.html">Preloader</a></li>
                                        <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                                    </ul>
                                </li> -->

                                <!-- <li>
                                    <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        - <li><a href="layouts-hori-topbar-light.html">Topbar light</a></li>
                                        <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                                        <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                                        <li><a href="layouts-hori-colored-header.html">Colored Header</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </li> --}}

                        <li class="menu-title">Cài đặt</li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-pencil-ruler"></i> <span> UI Elements <span class="float-end menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                            <ul class="submenu">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-badge.html">Badge</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                <li><a href="ui-navs.html">Navs</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-images.html">Images</a></li>
                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                <li><a href="ui-pagination.html">Pagination</a></li>
                                <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                <li><a href="ui-spinner.html">Spinner</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-video.html">Video</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-diamond"></i> <span> Advanced UI <span class="float-end menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                            <ul class="submenu">
                                <li><a href="advanced-alertify.html">Alertify</a></li>
                                <li><a href="advanced-rating.html">Rating</a></li>
                                <li><a href="advanced-nestable.html">Nestable</a></li>
                                <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                <li><a href="advanced-sweet-alert.html">Sweet-Alert</a></li>
                                <li><a href="advanced-lightbox.html">Lightbox</a></li>
                            </ul>
                        </li>

                        {{-- <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-todolist-check"></i><span> Forms <span class="badge rounded-pill text-bg-danger float-end">8</span> </span></a>
                            <ul class="submenu">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-advanced.html">Form Advanced</a></li>
                                <li><a href="form-editors.html">Form Editors</a></li>
                                <li><a href="form-uploads.html">Form File Upload</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                                <li><a href="form-summernote.html">Summernote</a></li>
                                <li><a href="form-xeditable.html">Form Xeditable</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-graph"></i><span> Charts <span class="float-end menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="charts-morris.html">Morris Chart</a></li>
                                <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                <li><a href="charts-flot.html">Flot Chart</a></li>
                                <li><a href="charts-c3.html">C3 Chart</a></li>
                                <li><a href="charts-knob.html">Jquery Knob Chart</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-spread"></i><span> Tables <span class="float-end menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Table</a></li>
                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                <li><a href="tables-editable.html">Editable Table</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-coffee"></i> <span> Icons <span class="float-end menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                            <ul class="submenu">
                                <li><a href="icons-material.html">Material Design</a></li>
                                <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                <li><a href="icons-outline.html">Outline Icons</a></li>
                                <li><a href="icons-themify.html">Themify Icons</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-map"></i><span> Maps <span class="float-end menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="maps-google.html"> Google Map</a></li>
                                <li><a href="maps-vector.html"> Vector Map</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-share"></i><span> Multi Level <span class="float-end menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="javascript:void(0);"> Menu 1</a></li>
                                <li>
                                    <a href="javascript:void(0);">Menu 2 <span class="float-end menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="javascript:void(0);">Menu 2.1</a></li>
                                        <li><a href="javascript:void(0);">Menu 2.1</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        @endif
    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            @hasSection('page-content')
                @yield('page-content')
            @else
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Stexo</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="d-flex">
                                        <div class="flex-grow-1 mt-3">
                                            <h5 class="font-size-17">Active Sessions</h5>
                                        </div>
                                        <div class="mini-stat-icon ">
                                            <i class="mdi mdi-cube-outline bg-primary text-white"></i>
                                        </div>
                                    </div>
                                    <h3>43,225</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">Previous period<span class="float-end">75%</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="d-flex">
                                        <div class="flex-grow-1 mt-3">
                                            <h5 class="font-size-17">Total Revenue</h5>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                                        </div>
                                    </div>
                                    <h3>$73,265</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">Previous period<span class="float-end">88%</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="d-flex">
                                        <div class="flex-grow-1 mt-3">
                                            <h5 class="font-size-17">Average Price</h5>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                                        </div>
                                    </div>
                                    <h3>447</h3>
                                    <div class="progress mt-3" style="height: 4px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">Previous period<span class="float-end">68%</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="d-flex">
                                        <div class="flex-grow-1 mt-3 ">
                                            <h5 class="font-size-17">Add to Card</h5>
                                        </div>
                                        <div class="mini-stat-icon float-end">
                                            <i class="mdi mdi-buffer bg-danger text-white"></i>
                                        </div>
                                    </div>
                                    <h3>86%</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">Previous period<span class="float-end">82%</span></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title mb-4">Area Chart</h4>

                                    <div id="morris-area-example" class="morris-charts morris-chart-height"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xl-4">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Donut Chart</h4>

                                    <div id="morris-donut-example" class="morris-charts morris-chart-height"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Friends Suggestions</h4>
                                    <div class="friends-suggestions">
                                        <a href="#" class="friends-suggestions-list">
                                            <div class="border-bottom position-relative">
                                                <div class="float-start mb-0 me-3">
                                                    <img src="{{asset('admin/assets/images/users/user-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                </div>
                                                <div class="suggestion-icon float-end mt-2 pt-1">
                                                    <i class="mdi mdi-plus"></i>
                                                </div>

                                                <div class="desc">
                                                    <h5 class="font-size-14 mb-1 pt-2 mt-2 ">Ralph Ramirez</h5>
                                                    <p class="text-muted">3 Friend suggest</p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="friends-suggestions-list">
                                            <div class="border-bottom position-relative">
                                                <div class="float-start mb-0 me-3">
                                                    <img src="{{asset('admin/assets/images/users/user-3.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                </div>
                                                <div class="suggestion-icon float-end mt-2 pt-1">
                                                    <i class="mdi mdi-plus"></i>
                                                </div>

                                                <div class="desc">
                                                    <h5 class="font-size-14 mb-1 pt-2 mt-2 ">Patrick Beeler</h5>
                                                    <p class="text-muted">17 Friend suggest</p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="friends-suggestions-list">
                                            <div class="border-bottom position-relative">
                                                <div class="float-start mb-0 me-3">
                                                    <img src="{{asset('admin/assets/images/users/user-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                </div>
                                                <div class="suggestion-icon float-end mt-2 pt-1">
                                                    <i class="mdi mdi-plus"></i>
                                                </div>

                                                <div class="desc">
                                                    <h5 class="font-size-14 mb-1 pt-2 mt-2 ">Victor Zamora</h5>
                                                    <p class="text-muted">12 Friend suggest</p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="friends-suggestions-list">
                                            <div class="border-bottom position-relative">
                                                <div class="float-start mb-0 me-3">
                                                    <img src="{{asset('admin/assets/images/users/user-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                </div>
                                                <div class="suggestion-icon float-end mt-2 pt-1">
                                                    <i class="mdi mdi-plus"></i>
                                                </div>

                                                <div class="desc">
                                                    <h5 class="font-size-14 mb-1 pt-2 mt-2  ">Bryan Lacy</h5>
                                                    <p class="text-muted">18 Friend suggest</p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="friends-suggestions-list">
                                            <div class="position-relative">
                                                <div class="float-start mb-0 me-3">
                                                    <img src="{{asset('admin/assets/images/users/user-6.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                </div>
                                                <div class="suggestion-icon float-end mt-2 pt-1">
                                                    <i class="mdi mdi-plus"></i>
                                                </div>

                                                <div class="desc">
                                                    <h5 class="font-size-14 mb-1 pt-2 mt-2 ">James Sorrells</h5>
                                                    <p class="text-muted mb-1">6 Friend suggest</p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Sales Analytics</h4>
                                    <div id="morris-line-example" class="morris-chart" style="height: 360px"></div>

                                </div>
                            </div>

                        </div>

                        <div class="col-xl-4">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title mb-4">Recent Activity</h4>
                                    <ol class="activity-feed mb-0">
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <p class="text-muted mb-1">Now</p>
                                                <p class="font-size-15 mt-0 mb-0">Andrei Coman magna sed porta finibus, risus posted a new article: <b class="text-primary">Forget UX Rowland</b></p>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <p class="text-muted mb-1">Yesterday</p>
                                            <p class="font-size-15 mt-0 mb-0">Andrei Coman posted a new article: <b class="text-primary">Designer Alex</b></p>
                                        </li>
                                        <li class="feed-item">
                                            <p class="text-muted mb-1">2:30PM</p>
                                            <p class="font-size-15 mt-0 mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace Commented <b class="text-primary"> Developer Moreno</b></p>
                                        </li>
                                        <li class="feed-item pb-3">
                                            <p class="text-muted mb-1">12:48 PM</p>
                                            <p class="font-size-15 mt-0 mb-3">Zack Wetass, Chris Wallace Commented <b class="text-primary">UX Murphy</b></p>
                                        </li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- START ROW -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Active Deals</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Contact</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col" colspan="2">Date</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Philip Smead</td>
                                                    <td><span class="badge text-bg-success">Delivered</span></td>
                                                    <td>$9,420,000</td>
                                                    <td>
                                                        <div>
                                                            <img src="{{asset('admin/assets/images/users/user-2.jpg')}}" alt="" class="avatar-sm rounded-circle me-2"> Philip Smead
                                                        </div>
                                                    </td>
                                                    <td>Houston, TX 77074</td>
                                                    <td>15/1/2018</td>

                                                    <td>
                                                        <div>
                                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Brent Shipley</td>
                                                    <td><span class="badge text-bg-warning text-white">Pending</span></td>
                                                    <td>$3,120,000</td>
                                                    <td>
                                                        <div>
                                                            <img src="{{asset('admin/assets/images/users/user-3.jpg')}}" alt="" class="avatar-sm rounded-circle me-2"> Brent Shipley
                                                        </div>
                                                    </td>
                                                    <td>Oakland, CA 94612</td>
                                                    <td>16/1/2019</td>

                                                    <td>
                                                        <div>
                                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Robert Sitton</td>
                                                    <td><span class="badge text-bg-success">Delivered</span></td>
                                                    <td>$6,360,000</td>
                                                    <td>
                                                        <div>
                                                            <img src="{{asset('admin/assets/images/users/user-4.jpg')}}" alt="" class="avatar-sm rounded-circle me-2"> Robert Sitton
                                                        </div>
                                                    </td>
                                                    <td>Hebron, ME 04238</td>
                                                    <td>17/1/2019</td>

                                                    <td>
                                                        <div>
                                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Alberto Jackson</td>
                                                    <td><span class="badge text-bg-danger">Cancel</span></td>
                                                    <td>$5,200,000</td>
                                                    <td>
                                                        <div>
                                                            <img src="{{asset('admin/assets/images/users/user-5.jpg')}}" alt="" class="avatar-sm rounded-circle me-2"> Alberto Jackson
                                                        </div>
                                                    </td>
                                                    <td>Salinas, CA 93901</td>
                                                    <td>18/1/2019</td>

                                                    <td>
                                                        <div>
                                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>David Sanchez</td>
                                                    <td><span class="badge text-bg-success">Delivered</span></td>
                                                    <td>$7,250,000</td>
                                                    <td>
                                                        <div>
                                                            <img src="{{asset('admin/assets/images/users/user-6.jpg')}}" alt="" class="avatar-sm rounded-circle me-2"> David Sanchez
                                                        </div>
                                                    </td>
                                                    <td>Cincinnati, OH 45202</td>
                                                    <td>19/1/2019</td>

                                                    <td>
                                                        <div>
                                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END ROW -->
                </div>
            @endif
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © SMKT.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Sweetsica
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
@hasSection('page-js')
    @yield('page-js')
@else
    <!-- JAVASCRIPT -->
    <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{asset('admin/assets/libs/morris.js/morris.min.js')}}"></script>

    <script src="{{asset('admin/assets/libs/raphael/raphael.min.js')}}"></script>

    <script src="{{asset('admin/assets/js/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('admin/assets/js/app.js')}}"></script>
@endif
</body>

</html>
