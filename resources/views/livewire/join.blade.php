<div>
    <div>
        @if ( $success != "" )
            <div style="color: teal; margin-bottom: 350px"> {{$success}} </div>
        @else
            <form wire:submit.prevent="join"  class="mt-4 login-form">

                 @csrf                             
                <div class="row">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nom">Nom(s) <span class="text-danger">*</span></label>

                            <div class="position-relative">
                                <i data-feather="edit-2" class="fea icon-sm icons"></i>
                                <input type="text" class="pl-5 form-control" wire:model="nom" placeholder="MATEMGO">
                            </div>


                            @error('nom')
                            <p style="color: red;">
                                  {{$message}}
                                </p>
                                <div class="ui divider"></div>
                            @enderror

                    

                </div>
            </div>


            <div class="col-lg-6">
                <div class="form-group">
                    <label for="prenom">Prénom(s) <span class="text-danger">*</span></label>

                    <div class="position-relative">
                        <i data-feather="align-justify" class="fea icon-sm icons"></i>
                        <input type="text" class="pl-5 form-control" wire:model="prenom" placeholder="Gutemberg">
                    </div>

                    @error('prenom')
                    <p style="color: red;">
                          {{$message}}
                        </p>
                        <div class="ui divider"></div>
                    @enderror

                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label for="email">Adresse Email <span class="text-danger">*</span></label>

                    <div class="position-relative">
                        <i data-feather="mail" class="fea icon-sm icons"></i>
                        <input type="email" class="pl-5 form-control" wire:model="email" placeholder="name@example.com">
                    </div>

                    @error('email')
                    <p style="color: red;">
                          {{$message}}
                        </p>
                        <div class="ui divider"></div>
                    @enderror

                </div>
            </div>
            <!--end col-->

            <div class="col-lg-12">
                <div class="form-group">
                    <label for="password">Mot de passe <span class="text-danger">*</span></label>
                    <div class="position-relative">
                        <i data-feather="key" class="fea icon-sm icons"></i>
                        <input type="password" class="pl-5 form-control" wire:model="password" placeholder="Mot de passe">
                    </div>

                    @error('password')
                    <p style="color: red;">
                          {{$message}}
                        </p>
                        <div class="ui divider"></div>
                    @enderror
                </div>
            </div>


            <div class="col-lg-12">
                <div class="form-group">
                    <label for="confirmPassword">Confirmation du mot de passe <span class="text-danger">*</span></label>
                    <div class="position-relative">
                        <i data-feather="key" class="fea icon-sm icons"></i>
                        <input type="password" class="pl-5 form-control" wire:model="confirmPassword" placeholder="Condirmation du mot de passe">
                    </div>

                    @error('confirmPassword')
                    <p style="color: red;">
                          {{$message}}
                        </p>
                        <div class="ui divider"></div>
                    @enderror
                </div>
            </div>
            

            <div class="col-lg-12">
                <div class="d-flex justify-content-between">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input"
                                wire:model="remember" id="remember">
                            <label class="custom-control-label" for="remember">Accepter les termes & conditions d'utilisation</label>

                        </div>
                    </div>


                </div>

                    <div class="mb-0 col-lg-12">
                        <button class="btn btn-primary btn-block pad" type="submit">S'inscrire</button>
                    </div>
                    <!--end col-->

                    <div class="mt-4 text-center col-lg-12">
                    </div>
                    


                    <div class="text-center col-12">
                        <p class="mt-3 mb-0"><small class="mr-2 text-dark">Déjà inscrit
                                ?</small> <a href="{{route('login')}}"
                                class="text-dark font-weight-bold">Se connecter</a></p>
                    </div>
                    <!--end col-->
                    
                    <div class="text-center col-12">
                        <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright  2022 &nbsp; {{env('APP_NAME')}} &nbsp; Tous Droits Réservés.</small>
                        </p>
                    </div>
                </div>
                <!--end row-->
            </form>
        @endif
</div>

</div>
