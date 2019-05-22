@extends('layout.home')

@section('content')

  <div class="title">
    <div class="">

    </div>
    <div class="">

      <h1>Cars List</h1>
    </div>
    <div class="link">
      <a href="{{ route('cars.create') }}">Add New Car</a>
    </div>

  </div>
  <div class="tableCar">

    <table>
      @foreach($cars as $car)

        <tr>
          <td>{{$car->id}}</td>
          <td>{{$car->brand}}</td>
          <td>{{$car->model}}</td>
          <td>{{$car->displacement}}</td>
          <td>{{$car->max_speed}}</td>
          <td><a class="link" href="{{ route('cars.edit', $car->id ) }}"><i class="fas fa-edit"></i></a></td>
          <td>
            <form class="" action="{{ route('cars.destroy' , $car->id ) }}" method="post">
              @csrf
              @method('DELETE')
              <button class="del-butt" type="submit"><i class="fas fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>

      @endforeach
    </table>
  </div>

@stop
