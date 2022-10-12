@extends('students.layout')
@section('content')
<div class="pull-left">
    <h2>Student Crud Step by Step <h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('students.create') }}">Create New Student</a>
        </div>
    </div>
</div>

@if ($message=Session::get('success'))
<div class="alert alert-sucess">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Course</th>
        <th>Fee</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($students as $s)
    <tr>
        <td>{{++$i}}</td>
        <td>{{ $s->studname }}</td>
        <td>{{ $s->course }}</td>
        <td>{{ $s->fee }}</td>
        <td>
            <form action="{{ route('students.destroy',$s->id) }}" method="post">
                <a class="btn btn-info" href="{{ route('students.show',$s->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('students.edit',$s->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
    </tr>
    @endforeach
</table>