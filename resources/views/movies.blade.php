@extends("layouts.main")

@section("content")
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Titolo originale</th>
                <th scope="col">Nazionalità</th>
                <th scope="col">Data</th>
                <th scope="col">Voto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td scope="row">{{$movie->id}}</td>
                    <td>{{$movie->title}}</td>
                    <td>{{$movie->original_title}}</td>
                    <td>{{$movie->nationality}}</td>
                    <td>{{$movie->date}}</td>
                    <td>{{$movie->vote}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section("title", "Films")
