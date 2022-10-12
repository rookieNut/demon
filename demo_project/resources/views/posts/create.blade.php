@extends("posts.layout")

@section("content")

<form method="POST" action="{{ route('posts.store') }}">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">author</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="author">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection