<div>


    <div class="modal-body">

        @if ( $success != "" )
            <div style="color: teal; margin-bottom: 350px"> {{$success}} </div>
        @else
            <form wire:submit.prevent="join">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" wire:model="name" placeholder="Entrez le nom de l'administrateur" aria-describedby="name" required>
                    @error('name')
                    <div class="form-text" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénoms</label>
                    <input type="text" class="form-control" wire:model="prenom" placeholder="Entrez les prénoms de l'administrateur" aria-describedby="prenom" required>
                    @error('prenom')
                    <div class="form-text" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="societe" class="form-label">Société</label>
                    <input type="text" class="form-control" wire:model="societe" placeholder="Entrez la société de de l'invité" aria-describedby="société" required>
                    @error('societe')
                    <div class="form-text" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" wire:model="email" placeholder="Entrez l'email de l'administrateur" aria-describedby="emailHelp" required>
                    @error('email')
                    <div class="form-text" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="adress" class="form-label">Adresse</label>
                    <input type="text" class="form-control" wire:model="adress" placeholder="Entrez l'adress de l'invité" aria-describedby="adress" required>
                    @error('adress')
                    <div class="form-text" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        @endif
    </div>
</div>
