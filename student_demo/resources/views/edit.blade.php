@extends('layout.main');

@section('content')

<form action="{{ route('students.update', $student->id) }}" method="post">
 
  <div class="form-group">
  @csrf
  @method('PATCH')
 
  <div class="form-group">   
        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" id="name" class="form-control" placeholder="Enter Name">
    </div>


    <div class="form-group">   
        <label>Birth date:</label>
        <input type="date" name="birth_day" id="birth_day" value="{{ $student->birth_day }}" class="form-control" placeholder="Enter Birth date">
    </div>

    <div class="form-group">   
        <label>Mobile Number:</label>
        <input type="number" name="mobile_no" id="mobile_no" value="{{ $student->mobile_no }}" class="form-control" placeholder="Enter Mobile Number">
    </div>

    <div class="form-group">   
        <label>Email:</label>
        <input type="email" name="email" id="email" value="{{ $student->email }}" class="form-control" placeholder="Enter Email">
    </div>
    
    <div class="form-group">   
        <label>Address:</label>
        <textarea name="address" id="address" value="{{ $student->address }}" class="form-control" rows="4" placeholder="Enter Address"></textarea>
    </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
 
</form>



@endsection