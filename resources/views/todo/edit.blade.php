@extends('layouts.app')

@section('content')

<div class="container">
<a class="mb-5 d-inline-block" href="{{ route('home') }}">Go to Home</a>

  <div class="row">
  
  <form class="col-md-6" method="POST" action="{{ route('todo.update', $todo->id) }}">
    @csrf
    
      <label class="form-label">Task</label>
    <textarea name="todo" class="form-control">{{ $todo->todo }}</textarea>


    <label class="mt-3 form-label">Status</label>
    <select name="status" class="form-select">
      <option value="1" @if($todo->status) selected @endif >Completed</option>
      <option value="0" @if(!$todo->status) selected @endif >Uncompleted</option>
    </select>

      <button class="btn btn-primary mt-3" type="submit">Update</button>

  </form>
  </div>

</div>

@endsection
