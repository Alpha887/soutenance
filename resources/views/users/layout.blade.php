<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title') | {{ env('APP_NAME') }}</title>

	  <link rel="stylesheet" href="/assets-users-dashboard/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets-users-dashboard/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets-users-dashboard/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/assets-users-dashboard/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets-users-dashboard/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets-users-dashboard/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets-users-dashboard/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets-users-dashboard/images/favicon.png" />

    <script type="text/javascript">
        function copyToClipBoard() {

            var content = document.getElementById('linktocopy');
            
            content.select();
            document.execCommand('copy');

            //alert("Lien d'affiliation copié avec succès.");
        }
    </script>

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        toastr.options = {
          "closeButton": true,
          "progressBar": true,
          "timeOut": "5000",

      };
        
        $('#showCopy').click(function() {
           toastr.success('Lien d\'affiliation copié avec succès' );
        });
      });
    </script>
    
	
	@yield('stylesheets')


	@livewireStyles

</head>
<body>
	<div class="container-scroller">
      
      <nav class="sidebar sidebar-offcanvas" id="sidebar">


        <!--div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="#"><img src="assets-users-dashboard/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="#"><img src="assets-users-dashboard/images/logo-mini.svg" alt="logo" /></a>
        </div-->


        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="/images/avatar.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ auth()->user()->lastname }} {{ auth()->user()->firstname }}</h5>
                  <span>Administrateur</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <!--a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Mon profil</p>
                  </div>
                </a-->
                <!--div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Changer de mot de passe</p>
                  </div-->
                </a>
                <div class="dropdown-divider"></div>
                
              </div>
            </div>
          </li>




          <li class="nav-item nav-category">
            <span class="nav-link">Menu de navigation</span>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('user_dashboard')}}" style=" @if( Request::path() == "user" ) background-color: white; color: black; @else background-color: transparent;@endif ">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title" style=" @if( Request::path() == "user" ) color: black; @else color: white ;@endif ">Acceuil</span>
            </a>
          </li>


          <!--li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Listes des dossiers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">En cours de validation</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Dossiers validés</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Dossiers rejeté</a></li>
              </ul>
            </div>
          </li-->


          <!--li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Crée un dossier</span>
            </a>
          </li-->



          <!--li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Chercher un dossier</span>
            </a>
          </li-->


          <!--li class="nav-item menu-items" >
            <a href="{{ route('user_affiliates') }}" class="nav-link" style=" @if( Request::path() == "user/my-affiliates" ) background-color: white; @else background-color: transparent;@endif " >
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title" style=" @if( Request::path() == "user/my-affiliates" ) color: black; @else color: white ;@endif ">Crée une entreprise</span>
            </a>
          </li-->



          <!--li class="nav-item menu-items">
            <button class="nav-link" data-bs-toggle="modal" data-bs-target="#affiliateLink" style="background-color: black;">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Lien d'affiliation</span>
            </button>
          </li>
        </ul-->
      </nav>
      






      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <!--a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a-->
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <!--a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p->
                      <p class="text-muted mb-0"> 15 Minutes ago </p->
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <--h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <--div class="preview-item-content">
                      <-p class="preview-subject mb-1">Event today</p-->
                      <!--p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p-->
                    <!--/div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li-->

              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="/images/avatar.png" alt="" width="70">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ auth()->user()->lastname }} {{ auth()->user()->firstname }}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <!--div class="preview-item-content">
                      <p class="preview-subject mb-1">Paramètres</p>
                    </div-->
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item preview-item" href="{{ route('user_logout') }}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Se déconnecter</p>
                    </div>
                  </a>

                  
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">

          @yield('content')

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2023<br>

                Distributed By <a href="https://www.themewagon.com/"target="_blank">Terminal SA</a>

              </span>
              <!--span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span-->
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>


<!-- MODALS -->
	
<div class="modal fade" id="affiliateLink" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" >
    <div class="modal-content" style="background-color: white;">

      <div class="modal-header" style="color: #191C24">
        <h5 class="modal-title" id="exampleModalLabel">Votre lien d'affiliation</h5>
        
      </div>
      <div class="modal-body">
          <textarea cols="50" id="linktocopy" value="" style=" margin-bottom: 10px" readonly>  </textarea>

          <button onclick="copyToClipBoard()" class="btn btn-success" id="showCopy">Copier le lien</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
        
      </div>
    </div>
  </div>
</div>



	@yield('javascripts')

	@livewireScripts

    
      
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
	
	  <script src="/assets-users-dashboard/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assets-users-dashboard/vendors/chart.js/Chart.min.js"></script>
    <script src="/assets-users-dashboard/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/assets-users-dashboard/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/assets-users-dashboard/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/assets-users-dashboard/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets-users-dashboard/js/off-canvas.js"></script>
    <script src="/assets-users-dashboard/js/hoverable-collapse.js"></script>
    <script src="/assets-users-dashboard/js/misc.js"></script>
    <script src="/assets-users-dashboard/js/settings.js"></script>
    <script src="/assets-users-dashboard/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/assets-users-dashboard/js/dashboard.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
		
</body>
</html>