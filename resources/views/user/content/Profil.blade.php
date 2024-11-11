@extends('user.layouts.app')

@section('title', 'Profil')

@section('content')
<div class="flex flex-col justify-center items-center min-h-screen  px-4"> <!-- Added px-4 for padding on small screens -->
    <!-- Profile Card -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-full md:w-[36rem] mb-4"> <!-- w-full on small screens, md:w-[36rem] on medium and larger screens -->
        <table class="w-full mb-4 border-collapse">
            <tr class="border-b-2 border-black">
                <td class="py-2">Nama</td>
                <td class="py-2">:</td>
                <td class="py-2">Asep</td>
            </tr>
            <tr class="border-b-2 border-black">
                <td class="py-2">Alamat</td>
                <td class="py-2">:</td>
                <td class="py-2">Jl Permana</td>
            </tr>
            <tr class="border-b-2 border-black">
                <td class="py-2">No Telepon</td>
                <td class="py-2">:</td>
                <td class="py-2">089662325689</td>
            </tr>
            <tr class="border-b-2 border-black">
                <td class="py-2">Jenis Kelamin</td>
                <td class="py-2">:</td>
                <td class="py-2">Laki-laki</td>
            </tr>
            <tr class="border-b-2 border-black">
                <td class="py-2">Email</td>
                <td class="py-2">:</td>
                <td class="py-2">Aw@gmail.com</td>
            </tr>
        </table>
        <button id="editBtn" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-200 w-full md:w-auto"> <!-- Added w-full for small screens -->
            Edit Profil
        </button>
    </div>
    </div><!-- Modal Profil dengan Overlay dan Pengaturan Scroll -->
    <div id="editModal" class="fixed inset-0 flex justify-center items-center hidden z-50">
        <!-- Overlay Background untuk membuat modal tidak tembus -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
    
        <!-- Konten Modal (dibuat fixed di tengah dan bisa di-scroll) -->
        <div class=" space-atas relative bg-white p-8 rounded-lg shadow-lg w-full md:w-[36rem] max-h-[90vh] overflow-y-auto">
            <h2 class="text-xl font-semibold">Edit Profil</h2>
            <form>
                <div class="mb-2">
                    <label class="block text-gray-700">Nama</label>
                    <input type="text" class="w-full border rounded px-3 py-2" value="Asep">
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700">Alamat</label>
                    <input type="text" class="w-full border rounded px-3 py-2" value="Jl Permana">
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700">No Telepon</label>
                    <input type="text" class="w-full border rounded px-3 py-2" value="089662345689">
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700">Jenis Kelamin</label>
                    <input type="text" class="w-full border rounded px-3 py-2" value="Laki-laki">
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" class="w-full border rounded px-3 py-2" value="Aw@gmail.com">
                </div>
                <!-- Tombol Simpan dan Batal -->
                <div class="flex justify-end space-x-4">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                        Simpan
                    </button>
                    <button type="button" id="closeModal" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Get elements
        const editBtn = document.getElementById('editBtn');
        const editModal = document.getElementById('editModal');
        const closeModal = document.getElementById('closeModal');
    
        // Open modal on button click
        editBtn.addEventListener('click', () => {
            editModal.classList.remove('hidden');
        });
    
        // Close modal on close button click
        closeModal.addEventListener('click', () => {
            editModal.classList.add('hidden');
        });
    
        // Optional: close the modal when clicking outside of modal content
        window.addEventListener('click', (e) => {
            if (e.target === editModal) {
                editModal.classList.add('hidden');
            }
        });
    </script>
    
@endsection
