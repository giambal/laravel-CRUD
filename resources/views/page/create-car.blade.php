@extends('layout.home')

@section('content')
  <div class="title">
    <div class="">

    </div>
    <div class="">
      <h1>Add New Car</h1>

    </div>
    <div class="link">

      <a href="{{route('cars.index')}}">torna indietro</a>
    </div>
  </div>
  <div class="carForm">

    <form action="{{ route('cars.store')}}" method="post">
      @csrf
      <div class="formDiv">

        <label for="brand">Brand</label><br>
        <input type="text" name="brand" value="">
      </div>
      <div class="formDiv">

        <label for="model">Model</label><br>
        <input type="text" name="model" value="">
      </div>
      <div class="formDiv">

        <label for="displacement">Displacement</label><br>
        <input type="text" name="displacement" value="">
      </div>
      <div class="formDiv">

        <label for="max_speed">Max speed</label><br>
        <input type="text" name="max_speed" value="">
      </div>
      <button type="submit" name="">Save the car</button>
    </form>
  </div>
@stop
