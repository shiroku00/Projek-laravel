@extends('user.layouts.app')

@section('title', 'My Order')

@section('content')

<div class="flex justify-center">
  <div class="space-atas bg-white shadow-md rounded-lg p-6 w-full max-w-4xl">

    <div class="flex flex-col md:flex-row justify-between space-x-0 md:space-x-4 mb-4">
      
    
      <div class="text-start mb-4 md:mb-0">
        <span class="block font-semibold text-gray-500">Nomor Transaksi</span>
        <span class="block">No. 0000001</span>
      </div>

      
      <div class="text-start mb-4 md:mb-0">
        <span class="block font-semibold text-gray-500">Tanggal Keberangkatan</span>
        <div class="flex items-start justify-start space-x-2">
          <span class="iconify text-gray-500 icon-small" data-icon="mdi:calendar-check"></span>
          <span>31-08-2024</span>
        </div>
      </div>

      
      <div class="text-start mb-4 md:mb-0">
        <span class="block font-semibold text-gray-500">Tanggal Pemesanan</span>
        <div class="flex items-start justify-start space-x-2">
          <span class="iconify text-gray-500 icon-small" data-icon="mdi:calendar"></span>
          <span>22-08-2024</span>
        </div>
      </div>

      
      <div class="text-start">
        <span class="block font-semibold text-gray-500">Total Pembayaran</span>
        <div class="flex items-start justify-start space-x-2">
          <span class="iconify text-gray-500 icon-small" data-icon="mdi:money"></span> <!-- Currency icon -->
          <span class="block text-lg font-semibold">Rp. 200.000</span>
        </div>
      </div>
    </div>

   
    <hr>

   
    <div class="flex flex-col md:flex-row justify-between items-start mb-4">
      

      <div class="flex items-start space-x-2 mb-4 md:mb-0">
        <span class="iconify icon-small" data-icon="mdi:account-group" class="text-gray-500"></span>
        <span>Penumpang: 2</span>
      </div>

      
      <div class="flex items-start space-x-2 mb-4 md:mb-0">
        <span class="iconify icon-small" data-icon="mdi:bus" class="text-gray-500"></span>
        <span>Jurusan: Bandung - Jakarta</span>
      </div>

 
      <div class="flex items-start space-x-2 mb-4 md:mb-0">
        <span class="iconify icon-small" data-icon="mdi:map-marker" class="text-gray-500"></span>
        <span>Terminal: BTC Terminal</span>
      </div>

      
      <button id="openModal" class="flex items-center space-x-1 bg-blue-500 text-white rounded-lg px-4 py-2 hover:bg-blue-600">
        <span class="iconify icon-small" data-icon="mdi:eye"></span> 
        <span>Detail Tiket</span>
      </button>
      
    </div>


    <div class="flex flex-col md:flex-row justify-between items-start mt-4">
      
      
      <div class="flex items-start space-x-2 mb-4 md:mb-0">
        <span class="iconify icon-small" data-icon="mdi:check-circle" class="text-green-500"></span>
        <span>Lunas</span>
      </div>

    
      <div class="flex items-start space-x-2 mb-4 md:mb-0">
        <span class="iconify icon-small" data-icon="mdi:clock-time-four" class="text-gray-500"></span>
        <span>19.00</span>
      </div>

      <div class="flex items-start space-x-2 mb-4 md:mb-0">
        <span class="iconify icon-small" data-icon="mdi:seat" class="text-gray-500"></span>
        <span>Kursi: 32-33</span>
      </div>

      <button  class="flex items-center space-x-1 bg-green-500 text-white rounded-lg px-4 py-2 hover:bg-green-600">
        <span class="iconify icon-small" data-icon="mdi:printer"></span> <!-- Printer icon -->
        <span>Cetak Tiket</span>
      </button>
      
    </div>
  </div>
</div>

<div id="detailModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
  <div class="mt-5 flex items-center justify-center min-h-screen px-4 text-center">
   
      <div class="fixed inset-0 transition-opacity" aria-hidden="true">
          <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>

    
      <div class="inline-block bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-8 max-w-lg w-full relative p-8">
          
        
          <button id="closeModal" class="absolute top-4 left-4 text-gray-500 hover:text-gray-700">
              <span class="iconify" data-icon="mdi:close" data-inline="false" style="font-size: 1.5rem;"></span>
          </button>

       
          <div class="bg-white pt-6 space-y-6">

             
              <div>
                  <h2 class="text-xl font-semibold mb-4">Detail Penumpang</h2>
                  <div class="space-y-4">
                      <div class="flex items-center justify-between">
                          <div class="flex items-center space-x-4">
                              <span class="iconify" data-icon="mdi:account-circle" style="color: gray;"></span>
                              <div>
                                  <p><strong>Asep</strong></p>
                                  <p class="text-sm text-gray-600">Tel: 089662345689</p>
                                  <p class="text-sm text-gray-600">Email: aw@gmail.com</p>
                              </div>
                          </div>
                          <div class="text-gray-500">
                              <p class="text-center">Kursi</p>
                              <p class="text-xl font-semibold text-center">32</p>
                          </div>
                      </div>
                      <div class="flex items-center justify-between">
                          <div class="flex items-center space-x-4">
                              <span class="iconify" data-icon="mdi:account-circle" style="color: gray;"></span>
                              <div>
                                  <p><strong>Budi</strong></p>
                                  <p class="text-sm text-gray-600">Tel: 0896627070708</p>
                                  <p class="text-sm text-gray-600">Email: sukiman@gmail.com</p>
                              </div>
                          </div>
                          <div class="text-gray-500">
                              <p class="text-center">Kursi</p>
                              <p class="text-xl font-semibold text-center">33</p>
                          </div>
                      </div>
                  </div>
              </div>

          
              <div>
                  <h2 class="text-xl font-semibold mb-4">Detail Tiket</h2>
                  <div class="space-y-2">
                      <div class="flex items-center justify-between">
                          <p>Terminal</p>
                          <p class="font-semibold">BTC Terminal</p>
                      </div>
                      <div class="flex items-center justify-between">
                          <p>Jurusan</p>
                          <p class="font-semibold">Bandung - Jakarta</p>
                      </div>
                      <div class="flex items-center justify-between">
                          <p>Jam Keberangkatan</p>
                          <p class="font-semibold">19.00</p>
                      </div>
                      <div class="flex items-center justify-between">
                          <p>Harga</p>
                          <p class="font-semibold">Rp. 200.000</p>
                      </div>
                      <div class="flex items-center justify-between">
                          <p>Status</p>
                          <p class="font-semibold text-green-500">Lunas</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script>
  // Get elements
  const openModal = document.getElementById('openModal');
  const closeModal = document.getElementById('closeModal');
  const detailModal = document.getElementById('detailModal');

  // Open modal on button click
  openModal.addEventListener('click', function() {
      detailModal.classList.remove('hidden');
  });

  // Close modal on button click
  closeModal.addEventListener('click', function() {
      detailModal.classList.add('hidden');
  });
</script>
