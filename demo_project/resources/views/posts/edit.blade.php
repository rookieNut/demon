@extends("posts.layout")

@section("content")

<a class="btn btn-secondary" href="{{ route('posts.index') }}">Index Page</a>

<form method="POST" action="{{ route('posts.update',$post->id) }}">
    @csrf
    @method("PUT")
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{ $post->name }}">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">author</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="author" value="{{ $post->author }}">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description" value="{{ $post->description }}">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection