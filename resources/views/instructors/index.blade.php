@extends('base')
@section('content')
@include('info')

<div class="float-right">
        <a href="{{url('/instructors/create')}}" class="btn btn-secondary">
            Add New Instructor
        </a>
</div>

<h1>Instructors</h1>
<table class="table table-boarded table-striped table-sm">
    <thead class="thead-dark white-text">
        <tr>
            <th>Edit</th>
            <th>ID No.</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Expertise</th>
            <th>Rating</th>
        </tr>
    </thead>

    <tbody>
    @foreach($instructors as $instructor)

    <tr>
    <td>
        <a href="{{url('/instructors/edit',['id'=>$instructor])}}" class="btn btn-secondary btn-sm">Edit</a>
    </td>
        <td>{{$instructor->id}}</td>
        <td>{{$instructor->lname}}</td>
        <td>{{$instructor->fname}}</td>
        <td>{{$instructor->aoe}}</td>
        <td>{{$instructor->rating}}</td>

    </tr>
    @endforeach
    </tbody>

</table>
@stop
