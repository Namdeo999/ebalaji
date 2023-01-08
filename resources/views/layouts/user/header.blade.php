<ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
</ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
       {{-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>  --}}
      
    </ul>

    {{-- <div  >
        <span>Wallet : 4500</span>
    </div> --}}


    <div class="dropdown" >
      <button class="btn btn-secondry btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          {{-- <img src="{{asset('assets/images/user_active.png')}}" class="rounded-circle elevation-3" > {{ucwords(session('LOGIN_NAME'))}} --}}
          <img src="{{asset('assets/images/user_active.png')}}" alt="Ebalaji Logo" class="img-circle elevation-2" height="28px" width="28px" > 
          <span class="brand-text text-dark px-1">
            {{strtoupper(session('LOGIN_NAME'))}} - 
            @if (session('LOGIN_ROLE') == MyApp::ADMIN)
              ADMIN
            @elseif(session('LOGIN_ROLE') == MyApp::MASTER_DISTRIBUTOR)
              DISTRIBUTOR
            @else
              RETAILER
            @endif
          </span>
        </button>

      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
          @if (session('LOGIN'))
              <li class="nav-item">
                  <a class="dropdown-item " >Wallet : 4500</a>
              </li>
              <hr style="margin: 0px;">
              <li class="nav-item">
                  {{-- <a class="dropdown-item active" aria-current="page" href="{{url('logout')}}">{{session('ADMIN_NAME')}} Logout</a> --}}
                  <a class="dropdown-item " aria-current="page" href="logout">Logout</a>
              </li>
          @endif
      </ul>
    </div>
