<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <h1>ciao Mondo!!!!</h1>
  <a href="http://127.0.0.1:8000/pagina2">pagina 2</a>
  <h2>Lista Studenti</h2>
  <h3>Classe A</h3>
  <ul>
    @foreach ($lista as $list)
      @if($list['classe'] == "A")
        <li>{{$list['nome']}} {{$list['cognome']}}</li>
      @endif
    @endforeach
  </ul>
  <h3>Classe B</h3>
  <ul>
    @foreach ($lista as $list)
      @if($list['classe'] == "B")
        <li>{{$list['nome']}} {{$list['cognome']}}</li>
      @endif
    @endforeach
  </ul>
</body>
</html>