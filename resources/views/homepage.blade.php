<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
    <h1>Hello world :</h1>
   
    @for ($i = 0; $i < count($name); $i++)
        <h3> {{ $name[$i] }} {{ $age[$i] }}   </h3>
    @endfor


    <h2>Domande:</h2>
    <p>1) Una variabile la devo dichiarare per forza nel route della pagina corrente?
        es. max.contatore = count($name) .. dove la dichiaro ?

        2) Come ciclo due array associativi nei data con il foreach?

        3)Se ho più array da portare in una pagina, come li metto tutti nei data ?
    </p>
</body>
</html>