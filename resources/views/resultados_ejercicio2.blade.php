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
      <p>Array patron ingresado: {{ implode(' ',$array_patron) }}</p>
      <p>Cadena comparación: {{ implode(' ',$array_comprador) }}</p>
      <p>
        <h3> La comparacion es: {{$validacion_comparacion}}</h3>

      </p>
    </div>

@endsection
