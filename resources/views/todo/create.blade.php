@extends('layouts.app')

@section('content')

<div class="container">
  <a class="mb-5 d-inline-block" href="{{ route('home') }}">Go to Home</a>

  <div class="row">

    <form class="col-md-6" method="POST" action="{{ route('todo.store') }}">
      @csrf

      <label class="form-label">Task</label>
      <textarea name="todo" class="form-control"></textarea>
      <button class="btn btn-primary mt-3" type="submit">Create</button>

    </form>
  </div>

</div>

@endsection
