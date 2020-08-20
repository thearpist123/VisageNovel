@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Project</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back to project list</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $project->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $project->description }}
            </div>
        </div>
    </div>
    <h3>Tasks</h3>
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>description</th>
            <th>Assignee</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($project->tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td><a href="{{route('users.show', $task->assignee->id)}}">{{ $task->assignee->name }}</td>
            <td>
                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>      
@endsection