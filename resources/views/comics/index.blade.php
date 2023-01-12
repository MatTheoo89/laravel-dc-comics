@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Elenco Comics</h1>
        <table class="table table-striped">
            <thead>
                <tr class="text-white">
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic )
                    <tr>
                        <td class="text-white">{{$comic->id}}</td>
                        <td class="text-white">{{$comic->title}}</td>
                        <td class="text-white">{{$comic->type}}</td>
                        <td class="text-white">
                            
                            <a class="btn btn-primary" href="{{route('comics.show', $comic)}}" title="show"><i class="fa-regular fa-eye"></i></a>
                            <a class="btn btn-warning text-white" href="#" title="edit"><i class="fa-solid fa-pencil"></i></a>
                            <a class="btn btn-danger text-white" href="#" title="delete"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    <h1>Nessun prodotto trovato</h1>
                @endforelse

            </tbody>
        </table>
        <div class="text-center">
            {{$comics->links()}}
        </div>
    </div>
@endsection