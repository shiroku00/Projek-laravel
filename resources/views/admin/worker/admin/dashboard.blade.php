
@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')


@section('content')

<div class="content">

   
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Card 1 -->
            <div class="bg-blue-500 text-white p-6 rounded-lg flex items-center space-x-4">
                <span class="iconify text-3xl" data-icon="mdi:cart-outline"></span>
                <div>
                    <p class="text-2xl font-bold">150</p>
                    <p>New Orders</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-green-500 text-white p-6 rounded-lg flex items-center space-x-4">
                <span class="iconify text-3xl" data-icon="mdi:chart-pie"></span>
                <div>
                    <p class="text-2xl font-bold">53%</p>
                    <p>Bounce Rate</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-yellow-500 text-white p-6 rounded-lg flex items-center space-x-4">
                <span class="iconify text-3xl" data-icon="mdi:account-multiple-outline"></span>
                <div>
                    <p class="text-2xl font-bold">44</p>
                    <p>User Registrations</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-red-500 text-white p-6 rounded-lg flex items-center space-x-4">
                <span class="iconify text-3xl" data-icon="mdi:account-group"></span>
                <div>
                    <p class="text-2xl font-bold">65</p>
                    <p>Unique Visitors</p>
                </div>
            </div>
        </div>

        <!-- Sales Chart (Static Placeholder) -->
        <div class="bg-white mt-6 p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold">Sales</h2>
                <span class="iconify text-xl" data-icon="mdi:chart-areaspline"></span>
            </div>
            <div class="h-64 bg-gradient-to-r from-blue-300 via-blue-400 to-blue-500 rounded-lg flex items-center justify-center">
                <p class="text-white text-lg font-semibold">[Placeholder for Sales Chart]</p>
            </div>
        </div>
    </div>


</div>
@endsection

