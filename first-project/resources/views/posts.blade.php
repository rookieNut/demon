@extends('layout.main')

@section('content')

    <table class="table">
        @if(isset($posts))
        @foreach($posts as $p)
            <tr>
                <td> {{ $p->name }} </td>
                <td> {{ $p->author }} </td>
                <td> {{ $p->description }} </td>
            </tr>
        @endforeach
        @endif
    </table>

@endsection