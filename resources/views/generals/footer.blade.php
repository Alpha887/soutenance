<footer class="footer" style="margin-top: px;">
        <div class="container">
            <div class="row">
                <div class="pb-0 mb-0 col-lg-4 col-12 mb-md-4 pb-md-2">
                    <h5 class="text-light footer-head">{{env('APP_NAME')}}</h5>
                    <p class="mt-4">Meilleur application de suivie des dossiers de production de badges.</p>

                    <ul class="mt-4 mb-0 list-unstyled social-icon social">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                    </ul>
                    <!--end icon-->

                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-4 col-md-4 mt-sm-0 pt-sm-0">
                    <h5 class="text-light footer-head">Liens Utiles</h5>
                    <ul class="mt-4 list-unstyled footer-list">
                        <li><a href="{{route('welcome')}}" class="text-foot"><i class="mr-1 mdi mdi-chevron-right"></i>
                                Accueil</a></li>
                        <li><a href="#" class="text-foot"><i class="mr-1 mdi mdi-chevron-right"></i>
                                A propos</a></li>
                        <li><a href="#" class="text-foot"><i class="mr-1 mdi mdi-chevron-right"></i>
                                Contact</a></li>
                        <li><a href="#" class="text-foot"><i class="mr-1 mdi mdi-chevron-right"></i>
                                Faq</a></li>
                    </ul>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-4 col-md-4 mt-sm-0 pt-sm-0">
                    <h5 class="text-light footer-head">Adresses</h5>
                    <div class="mt-2">
                        <h6 class="text-foot"><i class="mr-1 mdi mdi-home"> </i>
                            Head Office</h6>
                        <p>Mission Road, Nigeria</p>
                        <h6><i class="mr-1 mdi mdi-email"> </i>Adresse Electronique</h6>
                        <p>admin@admin.admin</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-left">
                        <p class="mb-0">
                            © Copyright 2022 {{env('APP_NAME')}} Tous
                            Droits Réservés.
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>