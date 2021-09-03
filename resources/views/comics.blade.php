@extends('templates.base')

@section('title', 'Comics')

@section('content')
    @dump($comicsList[$arrayIndex])
@endsection