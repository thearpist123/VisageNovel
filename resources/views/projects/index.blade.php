@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Project List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projects.create') }}"> Create New Project</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>description</th>
            <th>Number of tasks</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->title }}</td>
            <td>{{ $project->description }}</td>
            <td>{{ count($project->tasks) }}</td>
            <td>
                <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('projects.show',$project->id) }}">Show Task List</a>
    
                    <a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}">Edit Project</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete Project</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>      
@endsection
