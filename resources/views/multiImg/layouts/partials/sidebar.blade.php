
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('/')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>MultiImage</span>
        </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Image</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
           <a class="dropdown-item" href="{{route('image')}}">MultiImage</a>
            
         
          
        </div>
      </li>
    </ul>