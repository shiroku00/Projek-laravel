
@extends('admin.layouts.app')

@section('title', 'Pelanggan')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/content/table.css') }}">
@endpush
@section('content')

<div class="content-table">
   
  
    
    
    
        <!-- Tabel Admin -->
        <div class="w-full max-w-5xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Header Tabel -->
            <div class="bg-gray-800 text-white text-lg font-semibold px-6 py-4">
                Daftar Pengguna
            </div>
    
            <!-- Tabel -->
            <table id="adminTable" class="min-w-full leading-normal display">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Profile
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Email
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Role
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data rows -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="Profile">
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">
                                John Doe
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">
                                john.doe@example.com
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Admin
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button class="text-indigo-600 hover:text-indigo-900 px-2">Edit</button>
                            <button class="text-red-600 hover:text-red-900 px-2">Delete</button>
                        </td>
                    </tr>
                    <!-- Copy this row for more entries -->
                </tbody>
            </table>
        </div>
    
        <!-- jQuery and DataTables JavaScript CDN -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    
        <!-- DataTables Initialization -->
        <script>
            $(document).ready(function() {
                $('#adminTable').DataTable({
                    "pageLength": 5,
                    "lengthMenu": [5, 10, 25, 50],
                    "language": {
                        "search": "Cari:",
                        "paginate": {
                            "next": "Berikutnya",
                            "previous": "Sebelumnya"
                        },
                        "lengthMenu": "Tampilkan _MENU_ data per halaman",
                        "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    }
                });
            });
        </script>
    
    </body>
    </html>
    
</div>



@endsection

