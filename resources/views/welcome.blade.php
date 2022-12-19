@extends ('layouts.app');

@section ('content')

<h1 class="text-center">Hello world</h1>


<div class="container">

    <div class="row row-cols-5">

        @foreach($movies as $movie)


        <div class="col gy-3">
            <div class="card text-center p-2">
                <p>Titolo del film: {{ $movie->title }}</p>
                <p>Titolo originale: {{ $movie->original_title }}</p>
                <p>Nationality: {{ $movie->nationality }}</p>
                <p>Data di uscita: {{ $movie->date}}</p>
                <p>Voto: {{ $movie->vote }}</p>
            </div>
        </div>

        @endforeach



    </div>
</div>


@endsection