<div>

    @if ( $success != "" )

        <div class="ui positive message">
            <i class="close icon"></i>
            <div class="header">
              Félicitations | Congratulations
            </div>
            <p>{{$success}}
            </p>

            <a href="{{route('login')}}">Cliquez ici pour continuer</a>
        </div>

    @else

        <form class="mt-4 login-form" wire:submit.prevent="verify">

            @csrf

            @if ( $failed != "" )
             <div class="ui negative message">
                <i class="close icon"></i>
                <div class="header">
                  Erreur survenue
                </div>
                <p>{{$failed}}
              </p></div>
            @endif                      
                
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="code">Code de confirmation <span class="text-danger">*</span></label>

                    <div class="position-relative">
                        <i data-feather="edit" class="fea icon-sm icons"></i>
                        <input type="text" class="pl-5 form-control" wire:model="code" placeholder="8be1562g">
                    </div>

                    @error('code')
                    <p style="color: red;">
                          {{$message}}
                        </p>
                        <div class="ui divider"></div>
                    @enderror

                </div>
            </div>
            

            <div class="mb-0 col-lg-12">
                <button class="btn btn-primary btn-block pad" type="submit">Valider</button>
            </div>
            <!--end col-->

            <div class="mt-4 text-center col-lg-12">
            </div>
            
            
            <div class="text-center col-12">
                <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright  2022 &nbsp; {{env('APP_NAME')}} &nbsp; Tous Droits Réservés.</small>
                </p>
            </div>
                

        </form>
    @endif

</div>
