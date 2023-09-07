<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=devide-width,initial.scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contacto</title>   
    </head>
    <body>
        <h1>Formulario de contacto</h1>
        <h3>
            {{$tipo}}
        </h3>
        <form action="validar-contacto" method="POST">
            @csrf
            <label for="correo">Correo</label><br>
            <input
                for="email"
                name="correo"
                @if($tipo == 'alumno')
                    value="@alumnos.udg.mx"
                @else
                    value="@gmail.com"
                @endif
                >
            <br>
            </label><br>
            <label for="comentario">Comentario</label><br>
            <textarea name="comentario" cols="30" rows="10">

            </textarea><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>