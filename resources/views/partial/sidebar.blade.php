{{-- <div id="sidebar">
  <h2>Sidebar</h2>
  <ul>
      <li><a href="{{ route('map') }}" class="{{ Request::is('map') ? 'active' : '' }}">Tampil Map</a></li>
      <li><a href="{{ route('data.index') }}" class="{{ Request::is('data') ? 'active' : '' }}">Tampil Data</a></li>
  </ul>
</div> --}}

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="/template/assets/img/3 kali 4.jpg">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="/map" class="simple-text logo-normal">
          Ferdi Nurrahman
          <!-- <div class="logo-image-big">
            <img src="/template/assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">   
          <li class="{{ Request::is('map') ? 'active' : '' }}">
            <a href="{{ route('map') }}">
                <i class="nc-icon nc-pin-3"></i>
                <p>Map</p>
            </a>
        </li>            
        <li>
          <li class="{{ Request::is('keloladata') ? 'active' : '' }}">
            <a href="{{ route('data.index') }}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Kelola Data</p>
          </a>
      </li>            
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Paper Dashboard 2</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
            </ul>
          </div>
        </div>
      </nav>