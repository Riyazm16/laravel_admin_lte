 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="index3.html" class="nav-link">Home</a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="#" class="nav-link">Contact</a>
     </li>
   </ul>

   <!-- SEARCH FORM -->
   <form class="form-inline ml-3">
     <div class="input-group input-group-sm">
       <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
       <div class="input-group-append">
         <button class="btn btn-navbar" type="submit">
           <i class="fas fa-search"></i>
         </button>
       </div>
     </div>
   </form>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
     <!-- Messages Dropdown Menu -->
     <li class="nav-item dropdown">
       <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="far fa-comments"></i>
         <span class="badge badge-danger navbar-badge">3</span>
       </a>
       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <a href="#" class="dropdown-item">
           <!-- Message Start -->
           <div class="media">
             <img src="{{ asset('dist/img/user1-128x128.jp')}}g" alt="User Avatar" class="img-size-50 mr-3 img-circle">
             <div class="media-body">
               <h3 class="dropdown-item-title">
                 Brad Diesel
                 <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
               </h3>
               <p class="text-sm">Call me whenever you can...</p>
               <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
             </div>
           </div>
           <!-- Message End -->
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <!-- Message Start -->
           <div class="media">
             <img src="{{ asset('dist/img/user8-128x128.jp')}}g" alt="User Avatar" class="img-size-50 img-circle mr-3">
             <div class="media-body">
               <h3 class="dropdown-item-title">
                 John Pierce
                 <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
               </h3>
               <p class="text-sm">I got your message bro</p>
               <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
             </div>
           </div>
           <!-- Message End -->
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <!-- Message Start -->
           <div class="media">
             <img src="{{ asset('dist/img/user3-128x128.jp')}}g" alt="User Avatar" class="img-size-50 img-circle mr-3">
             <div class="media-body">
               <h3 class="dropdown-item-title">
                 Nora Silvester
                 <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
               </h3>
               <p class="text-sm">The subject goes here</p>
               <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
             </div>
           </div>
           <!-- Message End -->
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
       </div>
     </li>
     <!-- Notifications Dropdown Menu -->
     <li class="nav-item dropdown">
       <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="far fa-bell"></i>
         <span class="badge badge-warning navbar-badge">15</span>
       </a>
       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <span class="dropdown-item dropdown-header">15 Notifications</span>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fas fa-envelope mr-2"></i> 4 new messages
           <span class="float-right text-muted text-sm">3 mins</span>
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fas fa-users mr-2"></i> 8 friend requests
           <span class="float-right text-muted text-sm">12 hours</span>
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fas fa-file mr-2"></i> 3 new reports
           <span class="float-right text-muted text-sm">2 days</span>
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
       </div>
     </li>
     <li class="nav-item">
       <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
         <i class="fas fa-th-large"></i>
       </a>
     </li>
   </ul>
 </nav>
 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
     <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">AdminLTE 3</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="{{ asset('dist/img/user2-160x160.jp')}}g" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">Alexander Pierce</a>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item has-treeview ">
           <a href="#" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ route('dashboards', ['routeName'=>'dashboardV1'])}}" class="nav-link dashboardV1">
                 <i class="far fa-circle nav-icon "></i>
                 <p>Dashboard v1</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('dashboards', ['routeName'=>'dashboardV2'])}}" class="nav-link dashboardV2">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Dashboard v2</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('dashboards', ['routeName'=>'dashboardV3'])}}" class="nav-link dashboardV3">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Dashboard v3</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="{{ route('examples', ['routeName'=>'widgets'])}}" class="nav-link widgets">
             <i class="nav-icon fas fa-th"></i>
             <p>
               Widgets
               <span class="right badge badge-danger">New</span>
             </p>
           </a>
         </li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
             <p>
               Layout Options
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right">6</span>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ route('layouts', ['routeName'=>'top-nav']) }}" class="nav-link top-nav">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Top Navigation</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('layouts', ['routeName'=>'boxed']) }}" class="nav-link boxed">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Boxed</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('layouts', ['routeName'=>'fixed-sidebar']) }}" class="nav-link fixed-sidebar">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Fixed Sidebar</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('layouts', ['routeName'=>'fixed-topnav']) }}" class="nav-link fixed-topnav">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Fixed Navbar</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('layouts', ['routeName'=>'fixed-footer']) }}" class="nav-link fixed-footer">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Fixed Footer</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('layouts', ['routeName'=>'collapsed-sidebar']) }}" class="nav-link collapsed-sidebar">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Collapsed Sidebar</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Charts
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ route('charts', ['routeName'=>'chartjs']) }}" class="nav-link chartjs">
                 <i class="far fa-circle nav-icon"></i>
                 <p>ChartJS</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('charts', ['routeName'=>'flot']) }}" class="nav-link flot">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Flot</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('charts', ['routeName'=>'inline']) }}" class="nav-link inline">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Inline</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tree"></i>
             <p>
               UI Elements
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ route('UI', ['routeName'=>'general']) }}" class="nav-link general">
                 <i class="far fa-circle nav-icon"></i>
                 <p>General</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('UI', ['routeName'=>'icons']) }}" class="nav-link icons">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Icons</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('UI', ['routeName'=>'buttons']) }}" class="nav-link buttons">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Buttons</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('UI', ['routeName'=>'sliders']) }}" class="nav-link sliders">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Sliders</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('UI', ['routeName'=>'modals']) }}" class="nav-link modals">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Modals & Alerts</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('UI', ['routeName'=>'navbar']) }}" class="nav-link navbar">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Navbar & Tabs</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('UI', ['routeName'=>'timeline']) }}" class="nav-link timeline">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Timeline</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('UI', ['routeName'=>'ribbons']) }}" class="nav-link ribbons">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Ribbons</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-edit"></i>
             <p>
               Forms
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ route('forms', ['routeName'=>'general'])}}" class="nav-link fgeneral">
                 <i class="far fa-circle nav-icon"></i>
                 <p>General Elements</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('forms', ['routeName'=>'advanced'])}}" class="nav-link advanced">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Advanced Elements</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('forms', ['routeName'=>'editors'])}}" class="nav-link editors">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Editors</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-table"></i>
             <p>
               Tables
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ route('tables', ['routeName'=>'simple'])}}" class="nav-link simple">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Simple Tables</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('tables', ['routeName'=>'data'])}}" class="nav-link data">
                 <i class="far fa-circle nav-icon"></i>
                 <p>DataTables</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('tables', ['routeName'=>'jsgrid'])}}" class="nav-link jsgrid">
                 <i class="far fa-circle nav-icon"></i>
                 <p>jsGrid</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-header">EXAMPLES</li>
         <li class="nav-item">
           <a href="{{ route('examples', ['routeName'=>'calendar'])}}" class="nav-link calendar">
             <i class="nav-icon far fa-calendar-alt"></i>
             <p>
               Calendar
               <span class="badge badge-info right">2</span>
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ route('examples', ['routeName'=>'gallery'])}}" class="nav-link gallery">
             <i class="nav-icon far fa-image"></i>
             <p>
               Gallery
             </p>
           </a>
         </li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon far fa-envelope"></i>
             <p>
               Mailbox
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ route('mailbox', ['routeName'=>'mailbox'])}}" class="nav-link mailbox">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Inbox</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('mailbox', ['routeName'=>'compose'])}}" class="nav-link compose">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Compose</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('mailbox', ['routeName'=>'read-mail'])}} " class="nav-link read-mail">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Read</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-book"></i>
             <p>
               Pages
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'invoice'])}}" class="nav-link invoice">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Invoice</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'profile'])}}" class="nav-link profile">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Profile</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'e_commerce'])}}" class="nav-link e_commerce">
                 <i class="far fa-circle nav-icon"></i>
                 <p>E-commerce</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'projects'])}}" class="nav-link projects">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Projects</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'project_add'])}}" class="nav-link project_add">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Project Add</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'project_edit'])}}" class="nav-link project_edit">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Project Edit</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'project_detail'])}}" class="nav-link project_detail">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Project Detail</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'contacts'])}}" class="nav-link contacts">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Contacts</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon far fa-plus-square"></i>
             <p>
               Extras
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'login'])}}" class="nav-link login">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Login</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'register'])}}" class="nav-link register">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Register</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'lockscreen'])}}" class="nav-link lockscreen">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Lockscreen</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'legacy-user-menu'])}}" class="nav-link legacy-user-menu">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Legacy User Menu</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'language-menu'])}}" class="nav-link language-menu">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Language Menu</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'404'])}}" class="nav-link 404">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Error 404</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'500'])}}" class="nav-link 500">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Error 500</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'pace'])}}" class="nav-link pace">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Pace</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'blank'])}}" class="nav-link blank">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Blank Page</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('examples', ['routeName'=>'starter'])}}" class="nav-link starter">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Starter Page</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-header">MISCELLANEOUS</li>
         <li class="nav-item">
           <a href="https://adminlte.io/docs/3.0" class="nav-link">
             <i class="nav-icon fas fa-file"></i>
             <p>Documentation</p>
           </a>
         </li>
         <li class="nav-header">MULTI LEVEL EXAMPLE</li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="fas fa-circle nav-icon"></i>
             <p>Level 1</p>
           </a>
         </li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-circle"></i>
             <p>
               Level 1
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="#" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Level 2</p>
               </a>
             </li>
             <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>
                   Level 2
                   <i class="right fas fa-angle-left"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="#" class="nav-link">
                     <i class="far fa-dot-circle nav-icon"></i>
                     <p>Level 3</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="#" class="nav-link">
                     <i class="far fa-dot-circle nav-icon"></i>
                     <p>Level 3</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="#" class="nav-link">
                     <i class="far fa-dot-circle nav-icon"></i>
                     <p>Level 3</p>
                   </a>
                 </li>
               </ul>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Level 2</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="fas fa-circle nav-icon"></i>
             <p>Level 1</p>
           </a>
         </li>
         <li class="nav-header">LABELS</li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon far fa-circle text-danger"></i>
             <p class="text">Important</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon far fa-circle text-warning"></i>
             <p>Warning</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon far fa-circle text-info"></i>
             <p>Informational</p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>
 @if(!empty($pageName))
 <input type="hidden" value="{{$pageName}}" class="pageName">
 @else
 <input type="hidden" value="" class="pageName">
 @endif