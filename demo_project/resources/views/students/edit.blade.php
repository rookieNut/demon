@extends('students.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit New Students</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops !!</strong>Error Occured <br></br>
    <ul>
        @foreach($errors->all() as $e)
        <li> {{ $e }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('students.update',$student->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student Name: </strong>
            <input type="text" name="studname" class="form-control" placeholder="student name" value="{{ $student->studname}}"/>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Course: </strong>
            <input type="text" name="course" class="form-control" placeholder="Course name" value="{{ $student->course }}"/>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fee : </strong>
            <input type="number" name="fee" class="form-control" placeholder="fee" value="{{ $student->fee }}"/>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">submit</button>
    </div>

</form>

@endsection