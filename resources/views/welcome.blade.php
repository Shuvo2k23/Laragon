{{-- upto tutorial 12  --}}

@extends('layouts/toplayout')
@section('head')
    Home page
@endsection
@section('contents')
    My name is  <b>{{$id ? $id : ""}}</b>. I can design web page using laravel. 
@endsection
@section('nav')
    @parent
    <h3>Hello brother</h3>
@endsection
