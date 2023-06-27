<div>


    <div class="modal-body">

        @if ( $success != "" )
            <div style="color: teal; margin-bottom: 350px"> {{$success}} </div>
        @else
            <form wire:submit.prevent="join">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" wire:model="nom" placeholder="Entrez le nom de l'administrateur" aria-describedby="nom" required>
                    @error('nom')
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
                    <label for="statut" class="form-label">Statut de l'administrateur</label>
                    <select class="form-select form-control" wire:model="statut" aria-label="Default select example">
                        <option selected>Status Admin</option>
                        <option value="1">Super admin</option>
                        <option value="2">Guichet Admin</option>
                        <option value="3">Protocole Admin</option>
                        <option value="4">Impression Admin</option>
                        <option value="5">DG Admin</option>
                    </select>

                    @error('statut')
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
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" wire:model="password" placeholder="*****" class="form-control" required>
                    @error('password')
                    <div class="form-text" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="cpassword" class="form-label">Confirmez mot de passe</label>
                    <input type="password" wire:model="cpassword" placeholder="*****" class="form-control" required>
                    @error('cpassword')
                    <div class="form-text" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        @endif
    </div>
</div>
