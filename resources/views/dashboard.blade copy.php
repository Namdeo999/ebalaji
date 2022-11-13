
<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="http://127.0.0.1:8000/assets/" data-base-url="http://127.0.0.1:8000" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard - Analytics | Sneat - HTML Laravel Free Admin Template </title>
  <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5, bootstrap 5 free, free admin template">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="38uLBYxWEoul7erFHcmqIGgDNHTChPMuu0f808z1">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="http://127.0.0.1:8000/assets/img/favicon/favicon.ico" />

  <!-- Include Styles -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

{{-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/fonts/boxicons.css?id=a9a7a946ee13016e04f57799146804c7" /> --}}
<link rel="stylesheet" href="{{ asset('assets/common/css/boxicons.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/common/css/core.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/common/css/theme-default.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/common/css/demo.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/common/css/perfect-scrollbar.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/common/css/apex-charts.css') }}" />
<!-- Core CSS -->
{{-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/css/core.css?id=d5d416cfe6184a99dfd8fb3b76cc99e7" /> --}}
{{-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/css/theme-default.css?id=3e8cb4751ca766e56a68fe0bd72b5fef" /> --}}
{{-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/demo.css?id=6ec63121218f83eed6a13a8aa3decb44" /> --}}

{{-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=858f7088631c9c1fe122f541dcad3a4d" /> --}}

<!-- Vendor Styles -->
{{-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/libs/apex-charts/apex-charts.css"> --}}


<!-- Page Styles -->

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- laravel style -->

<script src="{{ asset('assets/common/js/helpers.js') }}"></script>
{{-- <script src="http://127.0.0.1:8000/assets/vendor/js/helpers.js"></script> --}}

<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('assets/common/js/config.js') }}"></script>
{{-- <script src="http://127.0.0.1:8000/assets/js/config.js"></script> --}}

<!-- beautify ignore:end -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');

</script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
  <!-- Layout Content -->
  <div class="layout-wrapper layout-content-navbar ">
  <div class="layout-container">

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
  <div class="app-brand demo">
    <a href="http://127.0.0.1:8000" class="app-brand-link">
      <span class="app-brand-logo demo">
        <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
    <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
    <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
    <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
  </defs>
  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
      <g id="Icon" transform="translate(27.000000, 15.000000)">
        <g id="Mask" transform="translate(0.000000, 8.000000)">
          <mask id="mask-2" fill="white">
            <use xlink:href="#path-1"></use>
          </mask>
          <use fill="#696cff" xlink:href="#path-1"></use>
          <g id="Path-3" mask="url(#mask-2)">
            <use fill="#696cff" xlink:href="#path-3"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
          </g>
          <g id="Path-4" mask="url(#mask-2)">
            <use fill="#696cff" xlink:href="#path-4"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
          </g>
        </g>
        <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
          <use fill="#696cff" xlink:href="#path-5"></use>
          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
        </g>
      </g>
    </g>
  </g>
</svg>
      </span>
      <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-autod-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    
    

    
    
    
    
    
    <li class="menu-item active">
      <a href="http://127.0.0.1:8000" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
      </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Layouts</div>
      </a>

      
            <ul class="menu-sub">
    
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/layouts/without-menu" class="menu-link" >
            <div>Without menu</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/layouts/without-navbar" class="menu-link" >
            <div>Without navbar</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/layouts/container" class="menu-link" >
            <div>Container</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/layouts/fluid" class="menu-link" >
            <div>Fluid</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/layouts/blank" class="menu-link"  target="_blank" >
            <div>Blank</div>
    </a>

    
      </li>
    </ul>
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Pages</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx bx-dock-top"></i>
                <div>Account Settings</div>
      </a>

      
            <ul class="menu-sub">
    
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/pages/account-settings-account" class="menu-link" >
            <div>Account</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/pages/account-settings-notifications" class="menu-link" >
            <div>Notifications</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/pages/account-settings-connections" class="menu-link" >
            <div>Connections</div>
    </a>

    
      </li>
    </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div>Authentications</div>
      </a>

      
            <ul class="menu-sub">
    
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/auth/login-basic" class="menu-link"  target="_blank" >
            <div>Login</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/auth/register-basic" class="menu-link"  target="_blank" >
            <div>Register</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/auth/forgot-password-basic" class="menu-link"  target="_blank" >
            <div>Forgot Password</div>
    </a>

    
      </li>
    </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div>Misc</div>
      </a>

      
            <ul class="menu-sub">
    
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/pages/misc-error" class="menu-link"  target="_blank" >
            <div>Error</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/pages/misc-under-maintenance" class="menu-link"  target="_blank" >
            <div>Under Maintenance</div>
    </a>

    
      </li>
    </ul>
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Components</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="http://127.0.0.1:8000/cards/basic" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div>Cards</div>
      </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div>User interface</div>
      </a>

      
            <ul class="menu-sub">
    
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/accordion" class="menu-link" >
            <div>Accordion</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/alerts" class="menu-link" >
            <div>Alerts</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/badges" class="menu-link" >
            <div>Badges</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/buttons" class="menu-link" >
            <div>Buttons</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/carousel" class="menu-link" >
            <div>Carousel</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/collapse" class="menu-link" >
            <div>Collapse</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/dropdowns" class="menu-link" >
            <div>Dropdowns</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/footer" class="menu-link" >
            <div>Footer</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/list-groups" class="menu-link" >
            <div>List groups</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/modals" class="menu-link" >
            <div>Modals</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/navbar" class="menu-link" >
            <div>Navbar</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/offcanvas" class="menu-link" >
            <div>Offcanvas</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/pagination-breadcrumbs" class="menu-link" >
            <div>Pagination &amp; Breadcrumbs</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/progress" class="menu-link" >
            <div>Progress</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/spinners" class="menu-link" >
            <div>Spinners</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/tabs-pills" class="menu-link" >
            <div>Tabs &amp; Pills</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/toasts" class="menu-link" >
            <div>Toasts</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/tooltips-popovers" class="menu-link" >
            <div>Tooltips &amp; popovers</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/ui/typography" class="menu-link" >
            <div>Typography</div>
    </a>

    
      </li>
    </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div>Extended UI</div>
      </a>

      
            <ul class="menu-sub">
    
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/extended/ui-perfect-scrollbar" class="menu-link" >
            <div>Perfect scrollbar</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/extended/ui-text-divider" class="menu-link" >
            <div>Text Divider</div>
    </a>

    
      </li>
    </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="http://127.0.0.1:8000/icons/boxicons" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div>Boxicons</div>
      </a>

      
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Forms &amp; Tables</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>Form Elements</div>
      </a>

      
            <ul class="menu-sub">
    
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/forms/basic-inputs" class="menu-link" >
            <div>Basic Inputs</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/forms/input-groups" class="menu-link" >
            <div>Input groups</div>
    </a>

    
      </li>
    </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>Form Layouts</div>
      </a>

      
            <ul class="menu-sub">
    
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/form/layouts-vertical" class="menu-link" >
            <div>Vertical Form</div>
    </a>

    
      </li>
  
  
  
  <li class="menu-item ">
    <a href="http://127.0.0.1:8000/form/layouts-horizontal" class="menu-link" >
            <div>Horizontal Form</div>
    </a>

    
      </li>
    </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="http://127.0.0.1:8000/tables/basic" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div>Tables</div>
      </a>

      
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Misc</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="https://themeselection.com/support/" class="menu-link"  target="_blank" >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div>Support</div>
      </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html" class="menu-link"  target="_blank" >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div>Documentation</div>
      </a>

      
          </li>
          </ul>

</aside>
    

    <!-- Layout page -->
    <div class="layout-page">
      <!-- BEGIN: Navbar-->
            <!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    
      <!--  Brand demo (display only for navbar-full and hide on below xl) -->
      
      <!-- ! Not required for layout-without-menu -->
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="bx bx-menu bx-sm"></i>
        </a>
      </div>
      
      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item d-flex align-items-center">
            <i class="bx bx-search fs-4 lh-0"></i>
            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
          </div>
        </div>
        <!-- /Search -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">

          <!-- Place this tag where you want the button to render. -->
          <li class="nav-item lh-1 me-3">
            <a class="github-button" href="https://github.com/themeselection/sneat-html-laravel-admin-template-free" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/sneat-html-laravel-admin-template-free on GitHub">Star</a>
          </li>

          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="http://127.0.0.1:8000/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="http://127.0.0.1:8000/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-semibold d-block">John Doe</span>
                      <small class="text-muted">Admin</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <i class="bx bx-user me-2"></i>
                  <span class="align-middle">My Profile</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <i class='bx bx-cog me-2'></i>
                  <span class="align-middle">Settings</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 bx bx-credit-card me-2 pe-1"></i>
                    <span class="flex-grow-1 align-middle">Billing</span>
                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                  </span>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <i class='bx bx-power-off me-2'></i>
                  <span class="align-middle">Log Out</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ User -->
        </ul>
      </div>

        </nav>
  <!-- / Navbar -->
            <!-- END: Navbar-->


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
            <p class="mb-4">You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in your profile.</p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="http://127.0.0.1:8000/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="http://127.0.0.1:8000/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Profit</span>
            <h3 class="card-title mb-2">$12,628</h3>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +72.80%</small>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="http://127.0.0.1:8000/assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span>Sales</span>
            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +28.42%</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Total Revenue -->
  <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div class="row row-bordered g-0">
        <div class="col-md-8">
          <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
          <div id="totalRevenueChart" class="px-2"></div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="text-center">
              <div class="dropdown">
                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2022
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                  <a class="dropdown-item" href="javascript:void(0);">2021</a>
                  <a class="dropdown-item" href="javascript:void(0);">2020</a>
                  <a class="dropdown-item" href="javascript:void(0);">2019</a>
                </div>
              </div>
            </div>
          </div>
          <div id="growthChart"></div>
          <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

          <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2022</small>
                <h6 class="mb-0">$32.5k</h6>
              </div>
            </div>
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2021</small>
                <h6 class="mb-0">$41.2k</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Revenue -->
  <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
    <div class="row">
      <div class="col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="http://127.0.0.1:8000/assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="d-block mb-1">Payments</span>
            <h3 class="card-title text-nowrap mb-2">$2,456</h3>
            <small class="text-danger fw-semibold"><i class='bx bx-down-arrow-alt'></i> -14.82%</small>
          </div>
        </div>
      </div>
      <div class="col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="http://127.0.0.1:8000/assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Transactions</span>
            <h3 class="card-title mb-2">$14,857</h3>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +28.14%</small>
          </div>
        </div>
      </div>
      <!-- </div>
    <div class="row"> -->
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
              <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                <div class="card-title">
                  <h5 class="text-nowrap mb-2">Profile Report</h5>
                  <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                </div>
                <div class="mt-sm-auto">
                  <small class="text-success text-nowrap fw-semibold"><i class='bx bx-chevron-up'></i> 68.2%</small>
                  <h3 class="mb-0">$84,686k</h3>
                </div>
              </div>
              <div id="profileReportChart"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <!-- Order Statistics -->
  <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Order Statistics</h5>
          <small class="text-muted">42.82k Total Sales</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex flex-column align-items-center gap-1">
            <h2 class="mb-2">8,258</h2>
            <span>Total Orders</span>
          </div>
          <div id="orderStatisticsChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-mobile-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Electronic</h6>
                <small class="text-muted">Mobile, Earbuds, TV</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">82.5k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class='bx bx-closet'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Fashion</h6>
                <small class="text-muted">T-shirt, Jeans, Shoes</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">23.8k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-info"><i class='bx bx-home-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Decor</h6>
                <small class="text-muted">Fine Art, Dining</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">849k</small>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-football'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Sports</h6>
                <small class="text-muted">Football, Cricket Kit</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">99</small>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Order Statistics -->

  <!-- Expense Overview -->
  <div class="col-md-6 col-lg-4 order-1 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">Income</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Expenses</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Profit</button>
          </li>
        </ul>
      </div>
      <div class="card-body px-0">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
            <div class="d-flex p-4 pt-3">
              <div class="avatar flex-shrink-0 me-3">
                <img src="http://127.0.0.1:8000/assets/img/icons/unicons/wallet.png" alt="User">
              </div>
              <div>
                <small class="text-muted d-block">Total Balance</small>
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$459.10</h6>
                  <small class="text-success fw-semibold">
                    <i class='bx bx-chevron-up'></i>
                    42.9%
                  </small>
                </div>
              </div>
            </div>
            <div id="incomeChart"></div>
            <div class="d-flex justify-content-center pt-4 gap-2">
              <div class="flex-shrink-0">
                <div id="expensesOfWeek"></div>
              </div>
              <div>
                <p class="mb-n1 mt-1">Expenses This Week</p>
                <small class="text-muted">$39 less than last week</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Expense Overview -->

  <!-- Transactions -->
  <div class="col-md-6 col-lg-4 order-2 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Transactions</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="http://127.0.0.1:8000/assets/img/icons/unicons/paypal.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Paypal</small>
                <h6 class="mb-0">Send money</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="http://127.0.0.1:8000/assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Wallet</small>
                <h6 class="mb-0">Mac'D</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+270.69</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="http://127.0.0.1:8000/assets/img/icons/unicons/chart.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Transfer</small>
                <h6 class="mb-0">Refund</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+637.91</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="http://127.0.0.1:8000/assets/img/icons/unicons/cc-success.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Credit Card</small>
                <h6 class="mb-0">Ordered Food</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">-838.71</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="http://127.0.0.1:8000/assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Wallet</small>
                <h6 class="mb-0">Starbucks</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+203.33</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <img src="http://127.0.0.1:8000/assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Mastercard</small>
                <h6 class="mb-0">Ordered Food</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">-92.45</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Transactions -->
</div>

            <!-- pricingModal -->
                        <!--/ pricingModal -->

          </div>
          <!-- / Content -->

          <!-- Footer -->
                    <!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <script>
        document.write(new Date().getFullYear())

      </script>
      , made with ❤️ by <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
    </div>
    <div>
      <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
      <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
      <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html" target="_blank" class="footer-link me-4">Documentation</a>
      <a href="https://github.com/themeselection/sneat-html-laravel-admin-template-free/issues" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
    </div>
  </div>
</footer>
<!--/ Footer-->
                    <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

        <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
    <!--/ Layout Content -->

  <!-- Include Scripts -->
  <!-- BEGIN: Vendor JS-->
  <script src="{{ asset('assets/common/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/common/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/common/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/common/js/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/common/js/menu.js') }}"></script>
  <script src="{{ asset('assets/common/js/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/common/js/main.js') }}"></script>
  <script src="{{ asset('assets/common/js/dashboards-analytics.js') }}"></script>
{{-- <script src="http://127.0.0.1:8000/assets/vendor/libs/jquery/jquery.js?id=6c6bb30e07aa97fd50fc3c7851ba13bb"></script> --}}
{{-- <script src="http://127.0.0.1:8000/assets/vendor/libs/popper/popper.js?id=165a3cd6eccfec3da5cc774d5839ba2a"></script> --}}
{{-- <script src="http://127.0.0.1:8000/assets/vendor/js/bootstrap.js?id=dd4fcec379e9f857bc9e4e8b1bbbe3d6"></script> --}}
{{-- <script src="http://127.0.0.1:8000/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?id=3f751bf441a2e50654697fe701ad7eb7"></script> --}}
{{-- <script src="http://127.0.0.1:8000/assets/vendor/js/menu.js?id=5b0206934b6f39aa4766004ea9d22bd3"></script> --}}
{{-- <script src="http://127.0.0.1:8000/assets/vendor/libs/apex-charts/apexcharts.js"></script> --}}
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
{{-- <script src="http://127.0.0.1:8000/assets/js/main.js?id=5971037ce98c7a1fb1c8931365d154ea"></script> --}}

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
{{-- <script src="http://127.0.0.1:8000/assets/js/dashboards-analytics.js"></script> --}}
<!-- END: Page JS-->

</body>

</html>
