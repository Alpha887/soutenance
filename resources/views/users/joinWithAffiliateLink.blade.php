@extends('generals.layout')

@section('title')
    Créer un compte - Affiliation
@stop


@section('content')

<section class=" auth">
    <div class="container">
        <div class="pb-3 row justify-content-center">

            <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">

                <div class="text-center">
                   <a href="#"><img src="storage/app/public/photos/91rKAM1SMeq3B99gSsaq5xJiVhMi8arrHax6VksL.png" alt="" class="mb-3 img-fluid auth__logo"></a> 
                </div>
                
                <div class="bg-white shadow card login-page roundedd border-1 ">
                    <div class="card-body">
                        <h4 class="text-center card-title">Inscription - Affiliation</h4>
                        @livewire('join-with-affiliate', ['user' => $user])
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