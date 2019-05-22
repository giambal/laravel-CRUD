@extends('layout.home')

@section('content')
  <div class="title">
    <div class="">

    </div>
    <div class="">
      <h1>Update Car</h1>

    </div>
    <div class="link">

      <a href="{{route('cars.index')}}">torna indietro</a>
    </div>
  </div>
  <div class="carForm">

    <form action="{{ route('cars.update', $car->id )}}" method="post">
      @csrf
      @method('PATCH')
      <div class="formDiv">

        <label for="brand">Brand</label><br>
        <input type="text" name="brand" value="{{$car->brand}}">
      </div>
      <div class="formDiv">

        <label for="model">Model</label><br>
        <input type="text" name="model" value="{{$car->model}}">
      </div>
      <div class="formDiv">

        <label for="displacement">Displacement</label><br>
        <input type="text" name="displacement" value="{{$car->displacement}}">
      </div>
      <div class="formDiv">

        <label for="max_speed">Max speed</label><br>
        <input type="text" name="max_speed" value="{{$car->max_speed}}">
      </div>
      <button type="submit" name="">Update car</button>
    </form>
  </div>
@stop
