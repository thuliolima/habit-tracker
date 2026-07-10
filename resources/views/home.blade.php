
 {{-- @dd($habitos) --}}
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
    <title>
      {{ config('app.name') }}
    </title>
</head>
<body>
    <h1 class="text-3xl font-bold underline">
        Pagina Inicial
    </h1>
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
