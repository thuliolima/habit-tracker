
 {{-- @dd($habitos) --}}
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
</head>
<body>
    Olá, {{$nome}} {{$sobrenome}}!
    <p>
    Esses são os seus habitos:
    </p>

    <ul>
    @foreach($habitos as $habit )
                <li> {{$habit}} </li>
    @endforeach
    </ul>

    @auth
        <p>
            Você não está logado....
        </p>
    @endauth

</body>
</html>
