@extends('templates.base')

@section('title', 'HomePage')

@section('content')
    <div class="container-fluid home-page-content">
        <div class="container">
            <div class="row">
                @foreach($comicsList as $singleComics) 
                <div class="col-4">
                    <a href="{{ route('comics', [ 'id' => $loop->iteration ]) }}">
                        <div>
                            <img src="{{ $singleComics['thumb'] }}" />
                            <h3>{{ $singleComics["title"] }}</h3>
                        </div>
                    </a>
                </div>            
                @endforeach
            </div>
        </div>
    </div>
@endsection