<div>
    <form wire:submit.prevent="login"  class="mt-4 login-form">

        @if ( $failed != "" )
         <div class="ui negative message">
            <i class="close icon"></i>
            <div class="header">
              Erreur survenue
            </div>
            <p>{{$failed}}
          </p></div>
        @endif

        @csrf                             
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Adresse Email <span class="text-danger">*</span></label>

                    <div class="position-relative">
                        <i data-feather="mail" class="fea icon-sm icons"></i>
                        <input type="email" class="pl-5 form-control" wire:model="email" placeholder="name@example.com">
                    </div>

                    @error('email')
                        <div class="ui pointing red basic label">
                          {{$message}}
                        </div>
                        <div class="ui divider"></div>
                    @enderror

                </div>
            </div>
            <!--end col-->

            <div class="col-lg-12">
                <div class="form-group">
                    <label>Mot de passe <span class="text-danger">*</span></label>
                    <div class="position-relative">
                        <i data-feather="key" class="fea icon-sm icons"></i>
                        <input type="password" class="pl-5 form-control" wire:model="password" placeholder="Mot de passe">
                    </div>

                    @error('password')
                        <div class="ui pointing red basic label">
                          {{$message}}
                        </div>
                        <div class="ui divider"></div>
                    @enderror
                </div>
            </div>
            

            <div class="col-lg-12">
                <div class="d-flex justify-content-between">
                    <div class="form-group">
                        
                    </div>

                    <p class="mb-2 forgot-pass"><a href="#"
                            class="text-dark font-weight-bold">Mot de passe oublié?</a></p>
                </div>
            </div>
            <!--end col-->

            <div class="mb-0 col-lg-12">
                <button class="btn btn-primary btn-block pad" type="submit">Connexion</button>
            </div>
            <!--end col-->

            <div class="mt-4 text-center col-lg-12">
            </div>
            


            <!--div class="text-center col-12">
                <p class="mt-3 mb-0"><small class="mr-2 text-dark">Pas encore inscrit
                        ?</small> <a href="{{route('joinView')}}"
                        class="text-dark font-weight-bold">S'inscrire</a></p>
            </div-->
            <!--end col-->
            
            <div class="text-center col-12">
                <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright  2022 &nbsp; {{env('APP_NAME')}} &nbsp; Tous Droits Réservés.</small>
                </p>
            </div>
        </div>
        <!--end row-->
    </form>
</div>
