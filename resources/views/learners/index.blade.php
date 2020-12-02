@extends('base')
@section('content')
@include('info')

<div class="float-right">
    <a href="{{url('/learners/create')}}" class="btn btn-secondary">Add New Learner</a>
</div>

<h1>Learners</h1>
<table class="table table-boarded table-striped table-sm">
    <thead class="thead-dark white-text">
        <tr>
            <th>Edit</th>
            <th>ID No.</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Level</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
    @foreach($learners as $learner)

    <tr>
    <td>
        <a href="{{url('/learners/edit',['id'=>$learner])}}" class="btn btn-secondary btn-sm">
            Edit
        </a>
    </td>
        <td>{{$learner->id}}</td>
        <td>{{$learner->lname}}</td>
        <td>{{$learner->fname}}</td>
        <td>{{$learner->level}}</td>
        <td>{{$learner->status}}</td>
    </tr>
    @endforeach
    </tbody>

</table>
@stop
