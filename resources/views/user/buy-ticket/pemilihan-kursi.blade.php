@extends('user.layouts.app')

@section('title', 'Pilih Kursi')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/content/container.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buy/kursi.css') }}">
@endpush

@section('content')
<div class="space-atas">
    <div class="flex justify-center items-start space-x-10">
   
        <div class="flex justify-center" id="seat-map-container">
            <div class="flex items-center space-x-2">
                <button class="bg-gray-200 w-8 h-8 border-2 rounded border-black"></button>
                <p class="text-sm">Kosong</p>
            </div>
            <div class="flex items-center space-x-2">
                <button class="bg-red-500 w-8 h-8 border-2 rounded border-black"></button>
                <p class="text-sm">Terisi/Rusak</p>
            </div>
            <div class="flex items-center space-x-2">
                <button class="bg-green-500 w-8 h-8 border-2 rounded border-black"></button>
                <p class="text-sm">Pilihan Anda</p>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-start space-x-10 flex-col lg:flex-row">
      
        <div class="bg-white p-6 shadow-lg rounded-lg max-w-lg">
            <div class="flex justify-center" id="seat-map-container">
             
                <div class="grid grid-cols-4 gap-2" id="seat-map">
                  
                    <div></div>
                    <div></div>
                    <div class="h-10"></div>
              
                    <div></div>
                   
                    <div class="relative bg-gray-300 w-10 h-10 border-2 border-black rounded flex items-center justify-center overflow-visible">
                       
                        <iconify-icon icon="mdi:steering" class="absolute" style="color: black;" width="32" height="32"
                            style="top: -8px; transform: translateY(-25%);"></iconify-icon>
                    </div>

                   
                    <div class="col-span-5 h-6"></div>

                    
                    @for($i = 1; $i <= 40; $i++)
                        @if($i % 4 === 3)
                            <div class="h-10"></div>
                        @endif
                        <button class="seat w-10 h-10 text-white rounded border-2 border-black"
                                onclick="toggleSeat(this)">{{ $i }}</button>
                    @endfor
                </div>
            </div>
        </div>


        <div class="flex-grow max-w-xs flex justify-center">
            <form action="" method="POST" id="passenger-form" class="form-background p-4 rounded-lg space-y-6 hidden">

            </form>

        </div>
    </div>

    <script>
        let selectedSeats = [];

        function toggleSeat(seat) {
            const seatNumber = seat.innerText; 
            const seatIndex = selectedSeats.indexOf(seatNumber);

            if (seatIndex > -1) {
          
                selectedSeats.splice(seatIndex, 1);
                seat.classList.remove('seat-selected'); 
            } else {
                
                selectedSeats.push(seatNumber);
                seat.classList.add('seat-selected'); 
            }

            updatePassengerForm();
        }

        function updatePassengerForm() {
            const form = document.getElementById('passenger-form');
            form.innerHTML = ''; 

            if (selectedSeats.length > 0) {
                form.classList.remove('hidden'); 

                selectedSeats.forEach((seat, index) => {
                    const seatInput = document.createElement('div');
                    seatInput.className = 'mb-4';
                    seatInput.innerHTML = `
                        <h3 class="text-black text-xl mb-2">Passenger No ${index + 1} (Seat ${seat})</h3>
                        <input type="text" placeholder="Nama Depan" class="w-full p-2 rounded border-2 border-black mb-2">
                        <input type="text" placeholder="Nama Belakang" class="w-full p-2 rounded border-2 border-black mb-2">
                        <input type="text" placeholder="Nik" class="w-full p-2 rounded border-2 border-black mb-2">
                        <input type="email" placeholder="Email" class="w-full p-2 rounded border-2 border-black mb-2">
                        <input type="text" placeholder="No. Hp" class="w-full p-2 rounded border-2 border-black mb-2">
                    `;
                    form.appendChild(seatInput);
                });

             
                const submitButton = document.createElement('button'); 
                submitButton.type = "button"; 
                submitButton.className = "w-full bg-red-700 text-white p-2 rounded"; 
                submitButton.innerText = "Simpan Penumpang";
                submitButton.onclick = submitForm; 
                form.appendChild(submitButton);
            } else {
                form.classList.add('hidden'); 
            }
        }

        function submitForm() {
            alert('Form submitted for: ' + selectedSeats.join(', '));
           
        }
    </script>
@endsection
