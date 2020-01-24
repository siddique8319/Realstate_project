<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l2" lang="en">


<!-- Mirrored from themekit.frontendmatter.com/dist/themes/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 19:22:33 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <mete name="csrf-token" content="{{csrf_token()}}">
  <title>Doofazproperty</title>
  <link href="{{URL::asset('frontendadmin/css/vendor/all.css')}}" rel="stylesheet">
  <link href="{{URL::asset('frontendadmin/css/app/app.css')}}" rel="stylesheet">
</head>

<body >

  <div class="st-container" id="app">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#sidebar-menu" data-toggle="sidebar-menu" data-effect="st-effect-3" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>

          <a href="#sidebar-chat" data-toggle="sidebar-menu" class="toggle pull-right"></a>

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
       <img src="{{asset('frontendadmin/images/logo1.png')}}" alt="" style="height: 50px ; width:150px;" />
        </div>
        <div class="navbar-collapse collapse" id="collapse">
          <form class="navbar-form navbar-left hidden-xs" role="search">
            <div class="search-2">
              <div class="input-group">
                <input type="text" class="form-control form-control-w-150" placeholder="Search ..">
                <span class="input-group-btn">
            <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
        </span>
              </div>
            </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <!-- notifications -->
            <!-- <li class="dropdown notifications updates hidden-xs hidden-sm">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="badge badge-primary">4</span>
              </a> -->
              <!-- <ul class="dropdown-menu" role="notification">
                <li class="dropdown-header">Notifications</li>
                <li class="media">
                  <div class="pull-right">
                    <span class="label label-success">New</span>
                  </div>
                  <div class="media-left">
                    <img src="images/people/50/guy-2.jpg" alt="people" class="img-circle" width="30">
                  </div>
                  <div class="media-body">
                    <a href="#">Adrian D.</a> posted <a href="#">a photo</a> on his timeline.
                    <br/>
                    <span class="text-caption text-muted">5 mins ago</span>
                  </div>
                </li>
                <li class="media">
                  <div class="pull-right">
                    <span class="label label-success">New</span>
                  </div>
                  <div class="media-left">
                    <img src="images/people/50/guy-6.jpg" alt="people" class="img-circle" width="30">
                  </div>
                  <div class="media-body">
                    <a href="#">Bill</a> posted <a href="#">a comment</a> on Adrian's recent <a href="#">post</a>.
                    <br/>
                    <span class="text-caption text-muted">3 hrs ago</span>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <span class="icon-block s30 bg-grey-200"><i class="fa fa-plus"></i></span>
                  </div>
                  <div class="media-body">
                    <a href="#">Mary D.</a> and <a href="#">Michelle</a> are now friends.
                    <p>
                      <span class="text-caption text-muted">1 day ago</span>
                    </p>
                    <a href="#">
                      <img class="width-30 img-circle" src="images/people/50/woman-6.jpg" alt="people">
                    </a>
                    <a href="#">
                      <img class="width-30 img-circle" src="images/people/50/woman-3.jpg" alt="people">
                    </a>
                  </div>
                </li>
              </ul> -->
            </li>
             <!-- <li class="dropdown notifications hidden-xs hidden-sm">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>

                <span class="badge floating badge-danger">12</span>

              </a>
              <ul class="dropdown-menu">
                <li class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object thumb" src="images/people/50/guy-2.jpg" alt="people">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="pull-right">
                      <span class="label label-default">5 min</span>
                    </div>
                    <h5 class="media-heading">Adrian D.</h5>

                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object thumb" src="images/people/50/woman-7.jpg" alt="people">
                    </a>
                  </div>

                  <div class="media-body">
                    <div class="pull-right">
                      <span class="label label-default">2 days</span>
                    </div>
                    <h5 class="media-heading">Jane B.</h5>
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object thumb" src="images/people/50/guy-8.jpg" alt="people">
                    </a>
                  </div>

                  <div class="media-body">
                    <div class="pull-right">
                      <span class="label label-default">3 days</span>
                    </div>
                    <h5 class="media-heading">Andrew M.</h5>
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </li>
              </ul>
            </li> -->
           <li class="dropdown user">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('frontendadmin/images/images.jpg')}}" alt="" class="img-circle" />{{Auth::user()->name}}<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </li>
           </ul>
        </div>
      </div>
    </div>


 <!-- Sidebar component -->
    <div class="sidebar right sidebar-size-2 sidebar-offset-0 sidebar-skin-white sidebar-visible-desktop" id=email-items-menu>
      <div class="split-vertical">
        
        <div class="split-vertical-body">
          <div class="split-vertical-cell">
            <div data-scrollable>
              <ul class="emails">
              @foreach($show as $shows)
                <li class="sidebar-block">
               
                  <a href="#">
                    <span class="media">
               
                    <span class="media-body">
                  
                    <span class="text-h3">{{$shows->title}}</span>
                    </span>
                    </span>
                    <span class="email-body"> <img src="{{asset('images/'.$shows->image)}}" alt="" style="height: 120px ; width:170px" />
                       </span>
                  </a>
              
                </li>
                @endforeach
               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
  
    <div class="chat-window-container"></div>
    <div class="st-pusher">
       <div class="sidebar left sidebar-size-2 sidebar-offset-0 sidebar-skin-blue sidebar-visible-desktop" id=sidebar-menu data-type=collapse>
        <div class="split-vertical">
          <div class="sidebar-block tabbable tabs-icons">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#sidebar-tabs-menu" data-toggle="tab"><i class="fa fa-bars"></i></a></li>
              <li><a href="#sidebar-tabs-2" data-toggle="tab"><i class="fa fa-bar-chart-o"></i></a></li>
            </ul>
          </div>
          <div class="split-vertical-body">
            <div class="split-vertical-cell">
              <div class="tab-content">

                <div class="tab-pane active" id="sidebar-tabs-menu">
                  <div data-scrollable>

                    <ul class="sidebar-menu sm-icons-right sm-icons-block">
                      <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                      
                    </ul>
                    <ul class="sidebar-menu sm-bordered sm-active-item-bg">
                    @foreach($input as $view)
                    <li class="hasSubmenu">
                        <a href="#{{$view->menu}}"><i class="fa    fa-dot-circle-o  "></i>{{$view->menu}} <span></span></a>
                        <ul id="{{$view->menu}}">
                        @php
                        $submenus=DB::table('permission_sub_menus')
                        ->where('menu',$view->menu)
                        ->where('status',0)->orderby('id','desc')
                        ->get();
                       @endphp
                                    
                                        
                        @foreach($submenus as $submenu)
                          <li><a><router-link  to="/{{$submenu->url}}"> <span>{{$submenu->sub_menu}}</span></router-link></a></li>
                          @endforeach
                           </ul>
                      </li>
                      @endforeach
                      @if(Auth::user()->type==1)
                     
                       
               
                      @endif
                    </ul> 
                     
                    <!-- <ul class="sidebar-menu sm-bordered sm-active-item-bg">
                    
                 
                      <li class="hasSubmenu">
                        <a href="#submenu-media"><i class="fa fa-envelope-o"></i> <span>Messaging</span></a>
                        <ul id="submenu-media">
                          <li><a href="new-message"> <span>New Message</span></a></li>
                          <li><a href="read-message"> <span>Read Message</span></a></li>
                           </ul>
                      </li>
                      <li class="hasSubmenu ">
                        <a href="#components">
                          <i class="fa fa-money"></i>
                           <span >Flat Setup</span>
                           </a>
                           
                        <ul id="components" >
                                   
                                      <li><router-link  to="/project-name"> <span>Project Name</span></router-link></li>
                                                 
                                      <li><router-link  to="/house-entry">  <span>House Entry</span></router-link></a></li>
                                     
                                  
                                       <li><router-link  to="/floor-entry">  <span>Floor Entry</span></router-link></li>
                                                     
                                      <li><router-link  to="/flatno-entry"> <span>Flat No Entry</span></router-link></a></li>
                                                          
                                      <li><router-link  to="/flatsizeentry">  <span>Flat Size Entry</span></router-link></a></li>
                                                                 
                                      <li><router-link  to="/flatpriceentry">  <span>Flat Price Entry</span></router-linl></a></li>
                                
                                    <li><router-link  to="/discount"> <span>Flat Discount Entry</span></router-link></a></li>                        
                              <li><a href="installment-entry"> <span>Installment Entry</span></a></li>                            
                              <li><router-link  to="/year">  <span>Year Entry</span></router-link></a></li>
                         
                        </ul>
                      </li>
                         <li class="hasSubmenu ">
                        <a href="#campaign">
                          <i class="fa  fa-shekel"></i>
                           <span >Commission</span>
                           </a>
                        <ul id="campaign">
                          <li><router-link  to="/commissionType">  <span>Commission Type Entry</span></router-link></a></li>
                         <li><router-link  to="/commissionEntry"><span>Commission Entry</span></router-link></a></li>
                         <li><router-link  to="/incentive"> <span>Incentive Entry</span></router-link></a></li>
                          <li><router-link  to="/sallary"><span>Fix Sallery Entry</span></router-link></a></li>
                         
                        </ul>
                      </li>
                     
                      <li class="hasSubmenu">
                        <a href="#phonebook"><i class="fa fa-mobile"></i> <span>Staff Entry</span></a>
                        <ul id="phonebook">
                         <li><router-link  to="/staffType"><span>Staff Type Entry</span></router-link></a></li>
                          <li><router-link  to="/staff"><span>Staff Entry</span></router-link></a></li>
                           <li><router-link  to="/designation"> <span>Designation Entry</span></router-link></a></li>
                        </ul>
                      </li>
                        <li class="hasSubmenu">
                        <a href="#new"><i class="fa fa-mobile"></i> <span>Client Entry</span></a>
                        <ul id="new">
                         <li><a href="new-client-entry"> <span>New Client Entry</span></a></li>
                          
                        </ul>
                      </li>
                    <li class="hasSubmenu">
                        <a href="#report"><i class="fa fa-mobile"></i> <span>Report</span></a>
                        <ul id="report">
                        
                          
                        </ul> -->
                      <!-- </li>
                      <li class="hasSubmenu">
                        <a href="#menu"><i class="fa fa-mobile"></i> <span>Menu</span></a>
                        <ul id="menu">
                         <li><a><router-link  to="/menu"> <span>ADD Menu</span></router-link></a></li>
                         <li><a><router-link  to="/permissionmenu"> <span>Permission Menu</span></router-link></a></li>
                         <li><a><router-link  to="/submenu"> <span>Sub Menu</span></router-link></a></li>
                         <li><a><router-link  to="/permissionSubmenu"> <span>Permission Sub Menu</span></router-link></a></li>
                        </ul>
                      </li>
                      <li class="hasSubmenu">
                        <a href="#men"><i class="fa fa-mobile"></i> <span>Discount</span></a>
                        <ul id="men">
                         <li><a><router-link  to="/discountentry"> <span>ADD Discount</span></router-link></a></li>
                         
                        </ul> -->
                      <!-- </li> -->
                    
                            <!-- <li class="">
                        <a href="developerApi"><i class="md md-tab-unselected"></i> <span>API Progress</span></a>
                      </li>
                       <li class="">
                        <a href="error-information"><i class="fa fa-question-circle"></i> <span>Error Information</span></a>
                      </li>  -->
                    <!-- </ul> -->

                  


                  </div>
                </div>
                <!-- // END .tab-pane -->

             

              </div>
              <!-- // END .tab-content -->

            </div>
            <!-- // END .split-vertical-cell -->

          </div>
          <!-- // END .split-vertical-body -->



        </div>
      </div>
        
         <div class="st-content" id="content">

<!-- extra div for emulating position:fixed of the menu -->
<div class="st-content-inner">

  <div class="container-fluid">
 
                 @if(Auth::user()->type==1)
     <h5>Welcome to admin panel</h5>
                     @endif
                     @if(Auth::user()->type==2)
     <h5>Welcome</h5>
                     @endif
            <router-view></router-view>
                         
      </div>
    </div>
</div>
           
    </div>



     <!-- Footer -->
    <footer class="footer">
      <strong>Doofazproperty</strong> v4.0.0 &copy; Copyright 2020
    </footer>
    <!-- // Footer -->

  </div>
  <!-- /st-container -->

  <!-- Modal -->
  <div class="modal fade image-gallery-item" id="showImageModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-header">
        On my way to the top
      </div>
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <!-- <img class="img-responsive" src="images/place1-full.jpg" alt="Place"> -->
    </div>
  </div>

  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "admin",
      skins: {
        "default": {
          "primary-color": "#3498db"
        }
      }
    };
  </script>

  <!-- Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
  <script src="{{URL::asset('frontendadmin/js/vendor/all.js')}}"></script>
      
  <script src="{{URL::asset('frontendadmin/js/app/app.js')}}"></script>

  <script src="{{ asset('js/app.js') }}" defer></script>

  
</div>
</body>


<!-- Mirrored from themekit.frontendmatter.com/dist/themes/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 19:23:14 GMT -->
</html>

       