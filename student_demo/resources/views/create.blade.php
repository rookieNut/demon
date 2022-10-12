@extends('layout.main')

@section('content')
<ul>
@foreach($errors->all() as $error)

   <li>{{ $error }}</li> 

@endforeach
</ul>
<form method="post" action="{{ route('students.store') }}">
@csrf
    <div class="form-group">   
        <label>Name:</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
    </div>

    <div class="form-group">
        <label>Gender</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" value="Male" id="male" name="gender">
                <label class="custom-control-label" for="male">Male</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" value="Female" id="female" name="gender">
                <label class="custom-control-label" for="female">Female</label>
            </div>
    </div>

    <div class="form-group">   
        <label>Birth date:</label>
        <input type="date" name="birth_day" id="birth_day" class="form-control" placeholder="Enter Birth date">
    </div>

    <div class="form-group">   
        <label>Mobile Number:</label>
        <input type="number" name="mobile_no" id="mobile_no" class="form-control" placeholder="Enter Mobile Number">
    </div>

    <div class="form-group">   
        <label>Email:</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
    </div>
    
    <div class="form-group">   
        <label>Address:</label>
        <textarea name="address" id="address" class="form-control" rows="4" placeholder="Enter Address"></textarea>
    </div>

    <input type="submit" name="submit" value="Submit" class="btn btn-dark">

</form>

@endsection