<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">SINVETI</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SI</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('home')}}">Dashboard</a></li>
              </ul>
            </li>
         
            <li class="menu-header">SINVETI </li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Biodata</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-lin beep beep-sidebar" href="{{route('data_diri')}}">Data Diri</a></li>
                <li><a class="nav-lin beep beep-sidebar" href="{{route('dokumen')}}">Dokumen</a></li>                
            </ul>
            </li>
          
           
          </ul>

          <div class="mt-4 mb-4 p-3">
            <a href="{{route('survei')}}" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Survei
            </a>
          </div>        
        </aside>
      </div>
