<header id="topnav" class="sticky defaultscroll">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="{{route('welcome')}}">
                <strong>Terminal SA</strong>
                <img src="storage/app/public/photos/91rKAM1SMeq3B99gSsaq5xJiVhMi8arrHax6VksL.png" height="35" alt="" class="mr-2">
            </a>
        </div>
        <div class="buy-button">

            <a href="{{route('login')}}" class="mr-3 btn btn-primary login-btn-success">Se connecter</a>
            <!--a href="{{route('joinView')}}" class="btn btn-primary login-btn-success ">S'inscrire</a-->


        </div>
        <!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <!--ul class="navigation-menu">

                <li><a href="about.html">A propos</a></li>
                <li><a href="#pricing">Packs</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="contact.html">Contact</a></li>

            </ul-->


            </ul>
            <!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <a href="{{route('login')}}" class="btn btn-success">Se connecter</a>
                <!--a href="{{route('joinView')}}"  class="btn btn-success">S'inscrire</a-->
            </div>
            <!--end login button-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</header>