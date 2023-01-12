@extends('layouts.main')

@section('content')
    <div class="container text-center">
        <div class="row">
            <h1>show Comics</h1>

        <div class="col-4 offset-4">
        <div class="card d-flex">
            <div class="image">
                <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$comic['title']}}</h5>
                <p class="card-text text-black">{{$comic['description']}}</p>
                <p class="card-text text-black">{{$comic['price']}}</p>
                <p class="card-text text-black">{{$comic['series']}}</p>
                <p class="card-text text-black">{{$comic['sale_date']}}</p>
                <p class="card-text text-black">{{$comic['type']}}</p>
                <a class="btn btn-info" href="{{route('comics.index')}}">Torna indietro</a>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection