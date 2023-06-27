@extends('generals.layout')

@section('title')
Se connecter
@stop


@section('content')

<section class=" auth">
    <div class="container">
        <div class="pb-3 row justify-content-center">

            <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                <div class="text-center">
                   <a href="../index.html"><img src="storage/app/public/photos/91rKAM1SMeq3B99gSsaq5xJiVhMi8arrHax6VksL.png" alt="" class="mb-3 img-fluid auth__logo"></a> 
                </div>
                
                    <div class="bg-white shadow card login-page roundedd border-1 ">
	                    <div class="card-body">
	                        <h4 class="text-center card-title">Se connecter</h4>

                            @if( session()->has('permission') )
                              <div class="ui negative message">
                                <i class="close icon"></i>
                                <div class="header">
                                  Accès non authorisé
                                </div>
                                <p>{{ session()->get('permission') }}
                              </p></div>
                            @endif

                            @if( session()->has('deconnexion') )
                              <div class="ui info message">
                                <i class="close icon"></i>
                                <div class="header">
                                  Déconnexion
                                </div>
                                <p>{{ session()->get('deconnexion') }}
                              </p></div>
                            @endif

	                        @livewire('login')
	                        
	                    </div>
	                </div>
                <!---->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

@stop