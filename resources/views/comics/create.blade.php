@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="text-end me-4">
            <a class="btn btn-warning" href="{{route('comics.index')}}">Torna indietro</a>
        </div>

        <h1 class="ms-4 mb-5">create Comics</h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        
        @endif

        <div class="form-container">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">title *</label>
                    <input  type="text"
                            class="form-control @error('title') is-invalid @enderror"
                            id="title"
                            name="title"
                            value="{{old('title')}}"
                            placeholder="title">
                    @error('title')
                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                        <span>{{$message}}</span>
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">thumb *</label>
                    <input  type="text"
                    class="form-control @error('thumb') is-invalid @enderror"
                            id="thumb"
                            name="thumb"
                            value="{{old('thumb')}}"
                            placeholder="thumb">
                    @error('thumb')
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            <span>{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">price *</label>
                    <input  type="text"
                            class="form-control @error('price') is-invalid @enderror"
                            id="price"
                            name="price"
                            value="{{old('price')}}"
                            placeholder="price">
                    @error('price')
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            <span>{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">series *</label>
                    <input  type="text"
                            class="form-control @error('series') is-invalid @enderror"
                            id="series"
                            name="series"
                            value="{{old('series')}}"
                            placeholder="series">
                    @error('series')
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            <span>{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale_date *</label>
                    <input  type="text"
                            class="form-control @error('sale_date') is-invalid @enderror"
                            id="sale_date"
                            name="sale_date"
                            value="{{old('sale_date')}}"
                            placeholder="sale_date">
                    @error('sale_date')
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            <span>{{$message}}</span>
                        </div>
                    @enderror
                    </div>
                <div class="mb-3">
                    <label for="type" class="form-label">type *</label>
                    <input  type="text"
                            class="form-control @error('type') is-invalid @enderror"
                            id="type"
                            name="type"
                            value="{{old('type')}}"
                            placeholder="type">
                    @error('type')
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            <span>{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description *</label>
                    <textarea   class="form-control @error('description') is-invalid @enderror"
                                id="description"
                                name="description"
                                rows="5">{{old('title')}}
                    </textarea>
                    @error('description')
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            <span>{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <button  type="submit" class="btn btn-primary mt-5 ms-4">Invia</button>
            </form>
    
        </div>

    </div>
@endsection