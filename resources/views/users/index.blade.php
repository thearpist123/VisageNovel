@extends('layout')
 
@section('content')   
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Number of tasks</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ count($user->tasks) }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show Task List</a>
            </td>
        </tr>
        @endforeach
    </table>      
@endsection