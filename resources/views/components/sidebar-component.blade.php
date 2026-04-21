 <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
     <div class="sidebar-brand">
         <a href="./index.html" class="brand-link">
             {{-- <img src="./assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" /> --}}
             <span class="brand-text fw-light">Surkhet Soft</span>
         </a>
     </div>
     <div class="sidebar-wrapper">
         <nav class="mt-2">
             <!--begin::Sidebar Menu-->
             <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                 aria-label="Main navigation" data-accordion="false" id="navigation">
                
                 <li class="nav-item">
                     <a href="{{route('home')}}" class="nav-link {{request()->route()->getName()  == 'home' ? 'active' : ''}}">
                         <i class="nav-icon bi bi-speedometer"></i>
                         <p>Home</p> 
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{route('leading-brands.index')}}" class="nav-link {{request()->route()->getName()  == 'leading-brands.index' ? 'active' : ''}}">
                         <i class="nav-icon bi bi-speedometer"></i>
                         <p>Leading Brands</p> 
                     </a>
                 </li>
                 
             </ul>
             <!--end::Sidebar Menu-->
         </nav>
     </div>
     <!--end::Sidebar Wrapper-->
 </aside>
