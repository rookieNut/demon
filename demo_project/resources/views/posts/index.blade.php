@extends("posts.layout")

@section('content')    

    @if(isset($search))
        <a href="{{ route('posts.index') }}" class="btn btn-primary text-white">Return To Index</a>
    @else
        <a class="btn btn-primary" href="{{ route('posts.create') }}">Add Posts </a>
    @endisset

    <form method="POST" action="{{ action('App\Http\Controllers\PostController@search') }}">
        @csrf
        <input type="text" name="search" placeholder="enter a search by id"/>
        <button class="btn btn-primary" type="submit">submit</button>
    </form>

    @if($search=session()->get('search'))
    <table class="table">
        <thead class="thead-dark">
            <tr>            
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>        
        <tbody>
            @foreach($posts as $p)
            <tr>                
                <td>{{ $p->id }}</td>
                <td>{{ $p->name }}</td>
                <td> {{ $p->author }}</td>
                <td>{{ $p->description }}</td>
                <td>
                    <form action="{{ route('posts.destroy',$p->id) }}" method="post">
                        <a class="btn btn-info" href="{{ route('posts.show',$p->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('posts.edit',$p->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>            
            @endforeach
        </tbody>
    </table>

    @else

    <table class="table">
        @isset($search)
        <thead class="thead-dark">
            <tr>            
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>        
        <tbody>
            @foreach($search as $p)
            <tr>                
                <td>{{ $p->id }}</td>
                <td>{{ $p->name }}</td>
                <td> {{ $p->author }}</td>
                <td>{{ $p->description }}</td>
                <td>
                    <form action="{{ route('posts.destroy',$p->id) }}" method="post">
                        <a class="btn btn-info" href="{{ route('posts.show',$p->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('posts.edit',$p->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>            
            @endforeach
        </tbody>
    </table>
    @endisset
    @endif

    <table class="table">
        <thead class="thead-dark">
            <tr>            
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>        
        <tbody>
            @foreach($posts as $p)
            <tr>                
                <td>{{ $p->id }}</td>
                <td>{{ $p->name }}</td>
                <td> {{ $p->author }}</td>
                <td>{{ $p->description }}</td>
                <td>
                    <form action="{{ route('posts.destroy',$p->id) }}" method="post">
                        <a class="btn btn-info" href="{{ route('posts.show',$p->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('posts.edit',$p->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>            
            @endforeach
        </tbody>
    </table>
    
@endsection