@extends('welcome');

@section('title')
        @if(count($category))
        @foreach($category as $cat)
        <li>{{$cat}}</li>
        @endforeach
        @endif
@endsection

   
@section('head')


@stop
