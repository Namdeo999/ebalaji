    <a href="index3.html" class="brand-link">
      <img src="assets/images/AdminLTELogo.png" alt="Ebalaji Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

      <span class="brand-text text-light">Ebalaji Services</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-1 pb-1 mb-1 d-flex">
        <div class="image">
          <img src="assets/images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block text-light">User Name</a>
        </div>
      </div> -->

      <div class="dropdown bg-light mt-1 " style="box-shadow: 0px 0px 2px 0px">
        <button class="btn btn-secondry btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{asset('assets/images/user_active.png')}}" class="rounded-circle" > {{ucwords(session('LOGIN_NAME'))}}
           
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
            @if (session('LOGIN'))
                <li class="nav-item">
                    {{-- <a class="dropdown-item active" aria-current="page" href="{{url('logout')}}">{{session('ADMIN_NAME')}} Logout</a> --}}
                    <a class="dropdown-item active" aria-current="page" href="logout">Logout</a>
                </li>
            @endif
        </ul>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item menu-open">
            <a href="/dashboard" class="nav-link"><i class="nav-icon fas fa-th"></i><p>Dashboard</p></a>
            
          </li>

            @if (session('LOGIN_ROLE') == MyApp::ADMIN)
                <hr style="margin: 0px; color:#ffffff;">
                <li class="nav-header text-light ">Manage & Utilities</li>
                <hr style="margin: 0px; color:#ffffff;">

                    <li class="nav-item">
                        <a href="partner" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>Partners</p></a>
                    </li>

                <hr style="margin: 0px; color:#ffffff;">
                <li class="nav-header text-light ">Manage Coupons</li>
                <hr style="margin: 0px; color:#ffffff;">

                    <li class="nav-item">
                        <a href="set-price" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>Set Price</p></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>P-Coupon</p></a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>E-Coupon</p></a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="coupon" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>Coupon</p></a>
                    </li>
                
            @endif

            @if (session('LOGIN_ROLE') == MyApp::MASTER_DISTRIBUTOR)

                <hr style="margin: 0px; color:#ffffff;">
                <li class="nav-header text-light ">Manage & Utilities</li>
                <hr style="margin: 0px; color:#ffffff;">

                    <li class="nav-item">
                        <a href="set-price" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>Set Price</p></a>
                    </li>
                    <li class="nav-item">
                        <a href="partner" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>Partners</p></a>
                    </li>

                <hr style="margin: 0px; color:#ffffff;">
                    <li class="nav-header text-light ">Manage Coupons</li>
                <hr style="margin: 0px; color:#ffffff;">

                <li class="nav-item">
                    <a href="coupon" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>Coupon</p></a>
                </li>
                       
            @endif

          @if (session('LOGIN_ROLE') == MyApp::RETAILER)
              
          @endif

          
          

          <hr style="margin: 0px; color:#ffffff;">
          <li class="nav-header text-light ">Direct & Utilities</li>
          <hr style="margin: 0px; color:#ffffff;">

          <li class="nav-item">
            <a href="https://www.trackpan.utiitsl.com/PANONLINE/#forward" target="_blank" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>Track UTI PAN</p></a>
          </li>
          <li class="nav-item">
            <a href="https://tin.tin.nsdl.com/pantan/StatusTrack.html" target="_blank" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>Track NSDL PAN</p></a>
          </li>
          <li class="nav-item">
            <a href="https://www.pan.utiitsl.com/PAN_ONLINE/ePANCard" target="_blank" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>UTI E-PAN</p></a>
          </li>
          <li class="nav-item">
            <a href="https://www.onlineservices.nsdl.com/paam/requestAndDownloadEPAN.html" target="_blank" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>NSDL E-PAN</p></a>
          </li>
          <li class="nav-item">
            <a href="https://www.pan.utiitsl.com/PAN_ONLINE/homereprint" target="_blank" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>Reprint UTI PAN</p></a>
          </li>
          <li class="nav-item">
            <a href="https://www.onlineservices.nsdl.com/paam/ReprintEPan.html" target="_blank" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>Reprint NSDL PAN</p></a>
          </li>
          <li class="nav-item">
            <a href="https://www.pan.utiitsl.com/panaadhaarlink/forms/pan.html/panaadhaar" target="_blank" class="nav-link"><i class="fas fa-angle-right nav-icon"></i><p>UTI PAN Link Status</p></a>
          </li>
          
        {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Create Partner
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                  <p>Retailer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                  <p>Distributor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                  <p>Super Distributor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                  <p>White Level</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
            </ul>
        </li> --}}

          {{-- <li class="nav-header">Coupon</li> --}}
          <hr style="margin: 0px; color:#ffffff;">
          <li class="nav-header">Account</li>
          <hr style="margin: 0px; color:#ffffff;">

            <li class="nav-item">
                <a href="#" class="nav-link"><i class="nav-icon fas fa-th"></i><p>Download Certificate </p></a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link"><i class="nav-icon fas fa-th"></i><p>Bank Detail </p></a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link"><i class="nav-icon fas fa-th"></i><p>Wallet</p></a>
            </li>

            
            <li class="nav-item">
                <a href="#" class="nav-link"></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"></a>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>