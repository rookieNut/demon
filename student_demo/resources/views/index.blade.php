@extends('layout.main')

@section('content')

<h1>This is an Index page</h1>  

<a href="{{route('students.create')}}" class="btn btn-primary"> Create a New Post </a>

@if(session()->get('success'))
   
    <p>  {{ session()->get('success') }}  </p>
   
@endif


<br>
<table class="table">
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Birth date</th>
        <th>Mobile Number</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
@if(isset($students))
@foreach($students as $s)
    <tr>
        <td> {{ $s->name }} </td>
        <td> {{ $s->gender }} </td>
        <td> {{ $s->birth_day }} </td>
        <td> {{ $s->mobile_no }} </td>
        <td> {{ $s->email }} </td>
        <td> {{ $s->address }} </td>
        <td> <a class="btn btn-info" href="{{ route('students.edit', $s->id) }}"> Update </a>  </td> 
        <td>   
        <form action="{{ route('students.destroy', $s->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
        </form> 
        </td> 
    </tr>
  
@endforeach
@endif
</table>


<br><br><hr><hr>

<form action="{{ action('\App\Http\Controllers\studentcontroller@search')  }}" method="post"> 
@csrf       
Enter Name to Search Record:- <input type="text" name="search" >            
<button class="btn btn-danger" type="submit" name="submit" >Search</button>
</form> 

@if(session()->get('search'))
   
    <p style="color:blue;">  {{ session()->get('search') }}  </p>
   
@else
    @isset($search)
    <table class="table">
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Birth date</th>
        <th>Mobile Number</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
        @foreach($search as $s)
            <tr>
            <td> {{ $s->name }} </td>
            <td> {{ $s->gender }} </td>
            <td> {{ $s->birth_day }} </td>
            <td> {{ $s->mobile_no }} </td>
            <td> {{ $s->email }} </td>
            <td> {{ $s->address }} </td>
            </tr>
        @endforeach
    </table>
    @endisset

@endif

@endsection