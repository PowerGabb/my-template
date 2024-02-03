@extends('layouts.index')
@section('title', 'Home')
@section('content')
    <h1>{{ Auth::user()->name }}</h1>
@endsection