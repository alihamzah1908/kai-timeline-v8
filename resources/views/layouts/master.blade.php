<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>C-LOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-kai-icon.png') }}">
    <!-- Summernote css -->
    <link href="{{ asset('assets/libs/summernote/summernote-bs4.css') }}" rel="stylesheet" />

    <!-- plugins -->
    <link href="{{ asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/multiselect/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/libs/smartwizard/smart_wizard.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/libs/smartwizard/smart_wizard_theme_arrows.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/libs/smartwizard/smart_wizard_theme_circles.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/libs/smartwizard/smart_wizard_theme_dots.min.css') }}" type="text/css" />
    <link href="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
    <!-- App css -->

    <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
            </div>
        </div>
    </div>
    
    <div id="wrapper">

        <!-- Topbar Start -->
        <!-- <div class="navbar navbar-expand flex-column flex-md-row navbar-custom"> -->
        <!-- <div class="container-fluid"> -->
        <!-- LOGO -->
        <!-- <a href="{{ route('home') }}" class="navbar-brand mr-0 mr-md-2 logo">
            <span class="logo-lg">
                <img src="{{ asset('assets/images/Logo_KAI_Commuter.svg.png') }}" alt="" height="37" />
                <span class="d-inline h5 ml-1 text-logo"></span>
            </span>
            <span class="logo-sm">
                <img src="{{ asset('assets/images/Logo_KAI_Commuter.svg.png') }}" alt="" height="24">
            </span>
        </a> -->

        <!-- <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
                    <li class="">
                        <button class="button-menu-mobile open-left disable-btn">
                            <i data-feather="menu" class="menu-icon"></i>
                            <i data-feather="x" class="close-icon"></i>
                        </button>
                    </li>
                </ul> -->

        <!-- <ul class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list" data-toggle="tooltip" data-placement="left" title="8 new unread notifications">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i data-feather="bell"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <div class="dropdown-item noti-title border-bottom">
                                <h5 class="m-0 font-size-16">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                    <div class="notify-icon bg-primary"><i class="uil uil-user-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                    <div class="notify-icon">
                                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                    <div class="notify-icon">
                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom active">
                                    <div class="notify-icon bg-success"><i class="uil uil-comment-message"></i> </div>
                                    <p class="notify-details">Jaclyn Brunswick commented on Dashboard<small class="text-muted">1
                                            min
                                            ago</small></p>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                    <div class="notify-icon bg-danger"><i class="uil uil-comment-message"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days
                                            ago</small></p>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="uil uil-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all border-top">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li claNoss="dropdown notification-list align-self-center profile-dropdown">
                        <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <div class="media user-profile ">
                                <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" alt="user-image" class="rounded-circle align-self-center" />
                                <div class="media-body text-left">
                                    <h6 class="pro-user-name ml-2 my-0">
                                        <span>Shreyu N</span>
                                        <span class="pro-user-desc text-muted d-block mt-1">Administrator </span>
                                    </h6>
                                </div>
                                <span data-feather="chevron-down" class="ml-2 align-self-center"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu profile-dropdown-items dropdown-menu-right">
                            <a href="pages-profile.html" class="dropdown-item notify-item">
                                <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                                <span>My Account</span>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                                <span>Settings</span>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                                <span>Support</span>
                            </a>

                            <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                                <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a href="{{ route('login') }}" class="dropdown-item notify-item">
                                <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul> -->
        <!-- </div> -->

        <!-- </div> -->
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">
            <div class="container-fluid mb-4 d-flex justify-content-center">
                <a href="{{ route('home') }}" class="mr-0 mr-md-2 logo">
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/c-log-bar.png') }}" alt="" height="115" width="258" />
                        <span class="d-inline h5 ml-1 text-logo"></span>
                    </span>
                </a>
            </div>

            <!-- <div class="media user-profile mt-2 mb-2">
                <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
                <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

                <div class="media-body">
                    <h6 class="pro-user-name font-size-12 mt-0 mb-0">{{ ucfirst(Auth::user()->username) }}</h6>
                    <span class="pro-user-desc">{{ ucfirst(Auth::user()->name) }}</span>
                </div>
                <div class="dropdown align-self-center profile-dropdown-menu">
                    <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span data-feather="chevron-down"></span>
                    </a>
                    <div class="dropdown-menu profile-dropdown">
                        <a href="pages-profile.html" class="dropdown-item notify-item">
                            <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                            <span>My Account</span>
                        </a>
                        <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                            <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div> -->
            <div class="sidebar-content">
                <!--- Sidemenu -->
                <div id="sidebar-menu" class="slimscroll-menu">
                    <ul class="metismenu font-weight-bold" id="menu-bar">
                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="bookmark" class="text-white"></i>
                                <span class="font-weight-bold"> Dashboard </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ route('monitoring.progreal') }}">Realisasi Program Monitoring</a>
                                </li>
                                <li>
                                    <a href="{{ route('monitoring.rup') }}">RUP Monitoring</a>
                                </li>
                                <li>
                                    <a href="{{ route('monitoring.pbj') }}">PBJ Monitoring</a>
                                </li>
                                <li>
                                    <a href="{{ route('monitoring.contract') }}">Contract Monitoring</a>
                                </li>
                                <li>
                                    <a href="{{ route('monitoring.rab') }}">RAB Monitoring</a>
                                </li>
                                <li>
                                    <a href="{{ route('monitoring.vendor') }}">Vendor Monitoring</a>
                                </li>
                                <li>
                                    <a href="{{ route('monitoring.klaring') }}">Import Inklaring Monitoring</a>
                                </li>
                                <li>
                                    <a href="{{ route('monitoring.warehouse') }}">Warehouse Monitoring</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="{{ route('home') }}">
                                <i data-feather="home"></i>
                                <span> Dashboard </span>
                            </a>
                        </li> -->
                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="users" class="text-white"></i>
                                <span class="font-weight-bold"> Management Users </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ route('users.index') }}">List Users</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="users" class="text-white"></i>
                                <span class="font-weight-bold"> Management Roles </span>
                                <span class="menu-arrow"></span>
                            </a>
                            @can('role-list')
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ route('roles.index') }}">List Roles</a>
                                </li>
                            </ul>
                            @endcan
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="bookmark" class="text-white"></i>
                                <span class="font-weight-bold"> Timeline </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                @can('timeline.approval-list')
                                <li>
                                    <a href="{{ route('task.approval') }}">Task Approval</a>
                                </li>
                                @endcan
                                @can('timeline-list')
                                <li>
                                    <a href="{{ route('list.timeline') }}">List Timeline</a>
                                </li>
                                @endcan
                                <li>
                                    <a href="{{ route('signed.timeline') }}">Upload Timeline Final</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="bookmark" class="text-white"></i>
                                <span class="font-weight-bold"> NPP </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                @can('npp-list')
                                <li>
                                    <a href="{{ route('list.npp') }}">List NPP</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="bookmark" class="text-white"></i>
                                <span class="font-weight-bold"> SP3 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                @can('sp3.approval-list')
                                <li>
                                    <a href="{{ route('sp3.task.approval') }}">Task Approval</a>
                                </li>
                                @endcan
                                @can('sp3-list')
                                <li>
                                    <a href="{{ route('list.sp3') }}">List SP3</a>
                                </li>
                                @endcan
                                <li>
                                    <a href="{{ route('sp3.final') }}">Upload SP3 Final</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="bookmark" class="text-white"></i>
                                <span class="font-weight-bold"> PBJ </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                @can('pbj.approval-list')
                                <li>
                                    <a href="{{ route('list.taskpbj') }}">Task Approval PBJ</a>
                                </li>
                                @endcan
                                @can('pbj-list')
                                <li>
                                    <a href="{{ route('list.procurement') }}">List PBJ</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="bookmark" class="text-white"></i>
                                <span class="font-weight-bold"> Contract </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                @can('contract.approval-list')
                                <li>
                                    <a href="{{ route('contract.approval') }}">Task Approval Contract</a>
                                </li>
                                @endcan
                                @can('contract-list')
                                <li>
                                    <a href="{{ route('contract.index') }}">List Contract</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="bookmark" class="text-white"></i>
                                <span class="font-weight-bold"> Warehouse </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="nav-second-level" aria-expanded="false">
                                @can('warehouse-card-list')
                                <li>
                                    <a href="javascript:void(0)">Card</a>
                                </li>
                                @endcan
                                @can('warehouse-part-list')
                                <li>
                                    <a href="{{ route('warehouse.index') }}">Spare Part</a>
                                </li>
                                @endcan
                                @can('warehouse-waste-list')
                                <li>
                                    <a href="{{ route('waste.index') }}">Waste</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="bookmark" class="text-white"></i>
                                <span class="font-weight-bold"> Vendor Management </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="nav-second-level" aria-expanded="false">
                                @can('warehouse-card-list')
                                <li>
                                    <a href="{{ route('vendor.index') }}">List Vendor</a>
                                </li>
                                @endcan
                                @can('vendor-blacklist-list')
                                <li>
                                    <a href="{{ route('blacklist.index') }}">Vendor Blacklist</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="bookmark" class="text-white"></i>
                                <span class="font-weight-bold"> Harga Satuan </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                @can('vendor-blacklist-list')
                                <li>
                                    <a href="{{ route('list.hs') }}">List Harga Satuan</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 border">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        @php $date = date('d M Y H:i:s') @endphp
                                        <i class="uil uil-home-alt"></i> {{ $date }} Login as <b>{{ Auth::user()->name }}</b>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <!-- <ul class="mt-1 mr-3 navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">
                                            <li class="dropdown notification-list" data-toggle="tooltip" data-placement="left" title="8 new unread notifications">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                    <i data-feather="bell" class="text-kai" height="15"></i>
                                                    <span class="noti-icon-badge"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                                    <div class="dropdown-item noti-title border-bottom">
                                                        <h5 class="m-0 font-size-16">
                                                            <span class="float-right">
                                                                <a href="" class="text-dark">
                                                                    <small>Clear All</small>
                                                                </a>
                                                            </span>Notification
                                                        </h5>
                                                    </div>

                                                    <div class="slimscroll noti-scroll">

                                                        <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                                            <div class="notify-icon bg-primary"><i class="uil uil-user-plus"></i></div>
                                                            <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small>
                                                            </p>
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                                            <div class="notify-icon">
                                                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" class="img-fluid rounded-circle" alt="" />
                                                            </div>
                                                            <p class="notify-details">Karen Robinson</p>
                                                            <p class="text-muted mb-0 user-msg">
                                                                <small>Wow ! this admin looks good and awesome design</small>
                                                            </p>
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                                            <div class="notify-icon">
                                                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" class="img-fluid rounded-circle" alt="" />
                                                            </div>
                                                            <p class="notify-details">Cristina Pride</p>
                                                            <p class="text-muted mb-0 user-msg">
                                                                <small>Hi, How are you? What about our next meeting</small>
                                                            </p>
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom active">
                                                            <div class="notify-icon bg-success"><i class="uil uil-comment-message"></i> </div>
                                                            <p class="notify-details">Jaclyn Brunswick commented on Dashboard<small class="text-muted">1
                                                                    min
                                                                    ago</small></p>
                                                        </a>

                                                        <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                                            <div class="notify-icon bg-danger"><i class="uil uil-comment-message"></i></div>
                                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days
                                                                    ago</small></p>
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <div class="notify-icon bg-primary">
                                                                <i class="uil uil-heart"></i>
                                                            </div>
                                                            <p class="notify-details">Carlos Crouch liked
                                                                <b>Admin</b>
                                                                <small class="text-muted">13 days ago</small>
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all border-top">
                                                        View all
                                                        <i class="fi-arrow-right"></i>
                                                    </a>

                                                </div>
                                            </li>
                                        </ul> -->
                                        <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <div class="media">
                                                <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
                                                <!-- <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" class="avatar-xs rounded-circle mr-2" alt="Shreyu" /> -->

                                                <div class="media-body mr-2">
                                                    <h6 class="pro-user-name font-size-10 mt-0 mb-0 text-kai">{{ ucfirst(Auth::user()->username) }}</h6>
                                                    <span class="pro-user-desc text-dark">{{ ucfirst(Auth::user()->name) }}</span>
                                                </div>
                                                <span data-feather="chevron-down" height="20" class="ml-2 align-self-center text-kai"></span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu profile-dropdown-items dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item notify-item">
                                                <i data-feather="user" class="icon-dual icon-xs mr-2 text-kai"></i>
                                                <span>My Account</span>
                                            </a>
                                            <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                                <i data-feather="log-out" class="icon-dual icon-xs mr-2 text-kai"></i>
                                                <span>Logout</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div> <!-- content -->
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <?php echo date('Y') ?> &copy KAI Commuter
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i data-feather="x-circle"></i>
            </a>
            <h5 class="m-0">Customization</h5>
        </div>

        <div class="slimscroll-menu">

            <h5 class="font-size-16 pl-3 mt-4">Choose Variation</h5>
            <div class="p-3">
                <h6>Default</h6>
                <a href="index.html"><img src="{{ asset('assets/images/layouts/vertical.jpg') }}" alt="vertical" class="img-thumbnail demo-img" /></a>
            </div>
            <div class="px-3 py-1">
                <h6>Top Nav</h6>
                <a href="layouts-horizontal.html"><img src="{{ asset('assets/images/layouts/horizontal.jpg') }}" alt="horizontal" class="img-thumbnail demo-img" /></a>
            </div>
            <div class="px-3 py-1">
                <h6>Dark Side Nav</h6>
                <a href="layouts-dark-sidebar.html"><img src="{{ asset('assets/images/layouts/vertical-dark-sidebar.jpg') }}" alt="dark sidenav" class="img-thumbnail demo-img" /></a>
            </div>
            <div class="px-3 py-1">
                <h6>Condensed Side Nav</h6>
                <a href="layouts-dark-sidebar.html"><img src="{{ asset('assets/images/layouts/vertical-condensed.jpg') }}" alt="condensed" class="img-thumbnail demo-img" /></a>
            </div>
            <div class="px-3 py-1">
                <h6>Fixed Width (Boxed)</h6>
                <a href="layouts-boxed.html"><img src="{{ asset('assets/images/layouts/boxed.jpg') }}" alt="boxed" class="img-thumbnail demo-img" /></a>
            </div>
        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- datatable js -->
    <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>

    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

    <!-- optional plugins -->
    <script src="{{ asset('assets/libs/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <script src="{{ asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/libs/multiselect/jquery.multi-select.js') }}"></script>

    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <!-- page js -->
    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!--Summernote js-->
    <script src="{{ asset('assets/libs/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <!-- Init js -->
    <script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>
    <!-- <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/pages/form-editor.init.js') }}"></script>
    <script src="{{ asset('assets/libs/smartwizard/jquery.smartWizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/libs/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-validation.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $('.money').mask('000.000.000.000.000', {
            reverse: true
        });
        $('.mask-date').mask('00/00/0000');
        $('.mask-time').mask('00:00');
        $('.mask-phone').mask('00000000000');

        $(".datepicker").flatpickr()
    </script>
    @stack('scripts')

</body>

</html>