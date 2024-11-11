@extends('user.layouts.app')

@section('title', 'Jadwal Tiket')

@section('content')

<div class="container mx-auto mt-24">


  <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm">
 
      <div class="flex justify-between items-center mb-4">
          <div class="flex items-center space-x-2">
              <iconify-icon icon="mdi:swap-horizontal" class="text-gray-500 icon-small"></iconify-icon>
              <span class="text-lg font-semibold">Bandung - Jakarta</span>
          </div>
          <div class="flex items-center space-x-1">
              <iconify-icon icon="mdi:clock" class="text-black icon-small"></iconify-icon>
              <span class="text-black">19.00</span>
          </div>
      </div>
      
    
      <div class="flex justify-between items-center mb-4">
          <div class="flex items-center space-x-1">
              <iconify-icon icon="mdi:money" class="text-black icon-small"></iconify-icon>
              <span class="text-black">Rp. 100.000</span>
          </div>
          <div class="flex items-center space-x-1">
              <iconify-icon icon="mdi:bus" class="text-black icon-small"></iconify-icon>
              <span class="text-black">BTC Terminal</span>
          </div>
      </div>
      
      
     <a href="{{ route('kursi') }}"> <button class="bg-red-400 text-white py-2 px-4 rounded-lg hover:bg-red-500 transition duration-300">
          Pesan
      </button></a>
  </div></div>
@endsection
