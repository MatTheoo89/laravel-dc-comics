@extends('layouts.main')

@section('content')
    <div class="container text-center">
        <div class="row">
            <h1>show Comics</h1>

        <div class="col-4 offset-4">
        <div class="card">
            <div class="image">
                <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
            </div>
            <div class="card-body">
                <h5 class="card-title text-black">{{$comic['title']}}</h5>
                <p class="card-text text-black">{{$comic['description']}}</p>
                <p class="card-text text-black">{{$comic['price']}}</p>
                <p class="card-text text-black">{{$comic['series']}}</p>
                <p class="card-text text-black">{{$comic['sale_date']}}</p>
                <p class="card-text text-black">{{$comic['type']}}</p>
                
                <div class="d-flex justify-content-center">
                    <a class="btn btn-info me-4" href="{{route('comics.index')}}">Torna indietro</a>
                <form
                onsubmit="return confirm('Confermi l\'eliminazione di : {{$comic->title}}')"
                class="d-inline"
                action="{{route('comics.destroy', $comic)}}"
                method="post">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-danger text-white" title="delete"><i class="fa-solid fa-trash"></i> Elimina</button>
            </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection