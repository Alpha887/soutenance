<div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    
                    <th> ID </th>
                    <th>Nom</th>
                    <th> Prenoms</th>
                    <th> Société</th>
                    <th> Email</th>
                    <th> Adresse</th>
                    <th> Crée le</th>
                    <th> Validation du chef protocole</th>
                    <th> Validation du DG</th>
                
                </tr>
            </thead>
            <tbody>

                @foreach($invites as $invite)
                <tr>
                    
                    <td> {{$invite->id}} </td>
                    <td> {{$invite->nom}} </td>
                    <td> {{$invite->prenoms}} </td>
                    <td> {{$invite->societe}} </td>
                    <td> {{$invite->email}} </td>
                    <td> {{$invite->adress}} </td>
                    <td> {{$invite->created_at}} </td>
                    <td> {{$invite->valid1}} </td>
                    <td> {{$invite->valide2}} </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
