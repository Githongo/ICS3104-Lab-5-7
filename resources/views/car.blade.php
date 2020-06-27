<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>

    <body>
        @foreach ($cars as $car)
            <li> {{ $car->make }}</li>
            <li> {{ $car->model }}</li>
            <li> {{ $car->produced_on }}</li>
        @endforeach
    
    </body>


</html>
