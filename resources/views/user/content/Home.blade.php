
@extends('user.layouts.app')

@section('title', 'Home Page')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/content/home.css') }}">
@endpush

@section('content')
<div class="container"></div>
    <img src="{{ asset('css/images/bus.jpg')}}" alt="" class="bus-image" >
    <div class="search-bar">
        <input type="date" placeholder="Tanggal Berangkat">
        <div class="input-with-icon">
            <input type="text" placeholder="Kota Asal">
            <iconify-icon class="input-arrow" icon="cil:arrow-right"></iconify-icon>
        </div>
        <input type="text" placeholder="Kota Tujuan">
        <button>Cari</button>
    </div>
    
@endsection

