@extends ('layouts.app');

@section ('content')

<h1 class="text-center">Hello world</h1>

<ul>

    @foreach($movies as $movie)


    <li>{{ $movie->title }}</li>

    @endforeach



</ul>

@endsection