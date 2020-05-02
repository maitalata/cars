@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Cars</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Company</td>
          <td>Color</td>
          <td>Model</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
        <tr>
            <td>{{$car->id}}</td>
            <td>{{$car->Company}} </td>
            <td>{{$car->Color}}</td>
            <td>{{$car->Model}}</td>
            <td>
                <a href="{{ route('cars.edit', $car->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('cars.destroy', $car->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
