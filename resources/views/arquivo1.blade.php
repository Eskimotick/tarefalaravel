<html>

    <header>
            <title>This is title</title>
    </header>
    <body><ul>
            @foreach($lista as $variavel)

            	<li><h3>{{ $variavel->name}} {{$variavel->surname}}</h3></li>

            @endforeach

         </ul>
    </body>
</html>