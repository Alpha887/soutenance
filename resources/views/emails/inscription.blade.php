<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link async rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2/dist/semantic.min.css"/>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background: #ECEFF8; padding: 30px;" >

<div style="max-width: 800px; margin: 0 auto; padding: 20px; background: #ECEFF8">
	
	<h3 class="ui header" style="color: #4661B9;">{{env('APP_NAME')}} | Inscription</h3>
	<div>Bonjour/Bonsoir  <span style="color: #4661B9;">{{ $data['firstname'] }} {{ $data['lastname'] }}</span></div>
	<p>Bienvenue à {{env('APP_NAME')}}, nous sommes heureux de vous accueillir parmir nous pour une aventure pleine de surprises. Veuillez ci-dessous trouvez le lien de vérification 	de votre compte ainsi que le code de confirmation à renseigner.
	</p>

	<p>Code de confirmation: {{ $data['codeConfirmation'] }}
	</p>

	<p>Lien de vérification: <a href="{{ route('user_emailVerification') }}" target="_blank"> {{ env('EMAIL_VERIFICATION_URL') }} </a>
	</p>

	<p>Cordialement, {{env('APP_NAME')}}</p>
	
</div>

</body>
</html>