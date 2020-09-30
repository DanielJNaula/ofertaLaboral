@extends('layout.app')

@section('title', 'Ejercicio 1')


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
<br><br>
        <h3>FORMULARIO</h3>
        <form action="{{ route('ejercicio1') }}" method="POST" class="form-horizontal">
            @csrf
          <div class="form-group">
            <label for="array_numero">Array</label>
            <input type="text" class="form-control" id="array_numero" name="array_numero"  placeholder="Ingrese los elementos del array">
            <small id="emailHelp" class="form-text text-muted">Los elementos del array deben ser separados por una , (Ejemplo: 1,3,2,5,4,6,8).</small>
          </div>
          <div class="form-group">
            <label for="suma_calculo">Suma</label>
            <input type="text" class="form-control" id="suma_calculo" name="suma_calculo" placeholder="Ingrese el numero">
          </div>

          <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>

@endsection
