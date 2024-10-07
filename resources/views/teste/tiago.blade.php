<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TIAGO</title>
</head>
<body>
    <?php 
        
        echo 'oiiiiii'
        
        ?>

        @foreach(range(1,20) as $key)

            <li>{{$key}}</li>

        @endforeach

        @auth
                <span>estas autenticado</span>
        @endauth

        
</body>
</html>