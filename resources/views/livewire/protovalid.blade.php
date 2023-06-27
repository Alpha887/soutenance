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
                    <th></th>
                    <th></th>
                
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
                    <td>

                    <button type="button" class="btn btn-success">Validé</button>
                    

                    </td>

                    <td>
                    <button type="button" class="btn btn-danger">Refuser</button>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
