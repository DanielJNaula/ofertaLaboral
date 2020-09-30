@extends('layout.app')

@section('title', 'Ejercicio 2')


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

        <form action="{{ route('ejercicio2') }}" method="POST" class="form-horizontal">
            @csrf
          <h3>FORMULARIO</h3>
          <div class="form-group">
            <label for="array_patron">Patron</label>
            <input type="text" class="form-control" id="array_patron" required name="array_patron"  placeholder="Ingrese los elementos del array patrón separados por un espacio">
            <small id="emailHelp" class="form-text text-muted">Los elementos del array  (Ejemplo: a b b b a).</small>
          </div>
          <div class="form-group">
            <label for="array_comparador">Array</label>
            <input type="text" class="form-control" required id="array_comparador" name="array_comparador" placeholder="Ingrese los elementos del array de comparación separados por un espacio">
            <small id="emailHelp" class="form-text text-muted">Los elementos del array (Ejemplo: perro gato pescado).</small>
          </div>

          <button type="submit" class="btn btn-primary">Comparar</button>
        </form>
    </div>

@endsection
