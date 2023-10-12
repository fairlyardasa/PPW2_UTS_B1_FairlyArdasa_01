@extends('pemain.layout')

@section('tittle', 'Daftar Barang')

@section('header-text')
<h1>Daftar Pemain</h1>
<p>Inilah daftar dari para pemain yang berad di klub X:</p>
@endsection

@section('content')
    @include('pemain.content')
@endsection
