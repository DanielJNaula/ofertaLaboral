@extends('layout.app')

@section('title', 'Resultado Ejercicio 1')


@section('content')

    <div class="container">
        <h1> <strong>Ejercicio 2</strong></h1>
        <p>
          Dado un patrón y una cadena s, encuentre si s sigue el mismo patrón que la cadena <br>

          Ejemplo 1: <br>
          Entrada: patrón = "abba", s = "perro gato gato perro" <br>
          Salida: verdadero <br>
        </p>
<br><br>


        <h1>Resultados</h1>
      <p>Array patron ingresado: {{ implode(' ',$array_patron) }}</p>
      <p>Cadena comparación: {{ implode(' ',$array_comprador) }}</p>
      <p>
        <h3> La comparacion es: {{$validacion_comparacion}}</h3>

      </p>
    </div>

@endsection
