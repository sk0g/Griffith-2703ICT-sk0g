@extends('master')

@section('title')
    {{ $item->name }}
@endsection

@section('content')
    <h1>{{ $item->name }} by {{ $item->manufacturer->mfg_name }}</h1>
    <h3>Price: ${{ $item->price }}</h3>

    <a href="/product/">Back</a>
@endsection