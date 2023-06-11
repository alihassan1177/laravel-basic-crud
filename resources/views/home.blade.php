@extends('layouts.app')

@section('content')
<div class="container">

  <div class="d-flex justify-content-between items-center mb-5">
    <h3>Todos</h3>
    @auth
    <a href="{{route('todo.create')}}" class="btn btn-primary">Create New Todo</a>
    @endauth
  </div>

  <div class="table-responsive">
    <table id="todos-table" class="display table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>#</th>
          <th>Task</th>
          <th>Status</th>
          @auth
          <th>Actions</th>
          @endauth
        </tr>
      </thead>
      <tbody>
        @foreach ($todos as $todo)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $todo->todo }}</td>
          @if($todo->status)
          <td>Completed</td>
          @else
          <td>Uncompleted</td>
          @endif
          @auth
          <td>
            <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-info">Edit</a>
            <a href="{{ route('todo.delete', $todo->id ) }}" class="btn btn-danger">Delete</a>
          </td>
          @endauth
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection

@section('scripts')
<script>
  $(function() {
    $("#todos-table").DataTable()
  })
</script>
@endsection
