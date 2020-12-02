@extends('base')

@section('content')

@include('info')


<div class="float-right">
    <a href="{{url('/users/create')}}" class="btn btn-secondary">
            Add New User
    </a>

</div>

<h1>List of Users</h1>
<table class="table table-bordered table-striped table-sm">
    <thead class="thead-dark white-text">
        <tr>
            <th>Edit</th>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)

        <tr>
            <td>
                <a href="{{url('/users/edit', ['id'=>$user])}}" class="btn btn-secondary btn-sm">Edit</a>
            </td>
            <td>{{$user->id}}</td>
            <td>{{$user->lname}}</td>
            <td>{{$user->fname}}</td>
            <td>{{$user->email}}</td>
        </tr>

        @endforeach
    </tbody>


</table>
@stop
