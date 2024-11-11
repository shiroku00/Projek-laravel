<!-- resources/views/admin/layout/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Tambahkan link CSS atau file lain yang dibutuhkan -->
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin/content/container.css') }}">
    <!-- Iconify CDN for icons -->
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>


        <!-- Include sidebar -->
        @include('admin.sidebar.sidebar')
        
        <!-- Main content -->
        <div class="content">
            @yield('content')
        </div>
    </div>
    
</body>
</html>
