<div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    
                    <th> ID </th>
                    <th>Nom</th>
                    <th> Prenoms</th>
                    <th> Rôle</th>
                    <th> Email</th>
                
                </tr>
            </thead>
            <tbody>

                @foreach($admins as $admin)
                <tr>
                    
                    <td> {{$admin->id}} </td>
                    <td> {{$admin->firstname}} </td>
                    <td> {{$admin->lastname}} </td>
                   
                    <td> 
                        @if($admin->is_super_admin)
                            Super Administrateur
                        @elseif($admin->is_guichet_admin)
                            Administrateur Guichet
                        @elseif($admin->is_protocole_admin)
                            Administrateur Protocole
                        @elseif($admin->is_impression_admin)
                            Administrateur Impression
                        @elseif($admin->is_dg_admin)
                            Administrateur DG
                        @endif
                    </td>
                    <td>{{$admin->email}}</td>
                
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
