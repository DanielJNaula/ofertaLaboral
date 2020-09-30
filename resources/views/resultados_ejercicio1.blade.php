@extends('layout.app')

@section('title', 'Resultado Ejercicio 1')


@section('content')

    <div class="container">
        <h1> <strong>Ejercicio 1</strong></h1>
        <p>Dado una matriz y un entero. <br>
            Devuelve el número máximo de subarreglos no vacíos, no superpuestos, que sus valores sumen en el número entero. <br>
            Ejemplo 1: <br>
            Input: arreglo= [1,1,1,1], numero= 2 <br>
            Output: 2 <br>
            Explanation: Dos subarreglos no superpuestos que suman 2 [1,1], [1,1] <br>
        </p>


        <h1>Resultados</h1>
      <p>Array ingresado: [ {{ implode(',',$array_calculo) }} ]</p>
      <p>Numero: {{$suma}}</p>
      <p>
        <h3> {{sizeof($array_no_sobrepuestos)}} Array no superpuestos que suman {{$suma}}</h3>
        @for($i = 0; $i < sizeof($array_no_sobrepuestos); $i++)

            [ {{ implode(',',$array_no_sobrepuestos[$i]) }} ] <br>
        @endfor
      </p>
    </div>

@endsection
