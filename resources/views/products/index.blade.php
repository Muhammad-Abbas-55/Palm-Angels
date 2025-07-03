@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold mb-6 text-center">All Products</h2>
    <div class="flex justify-end mb-6 p-1">
        <a href="{{ route('products.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded shadow hover:bg-blue-700 transition">
            + Add Product
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-3">
        @foreach ($products as $product)
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4 flex flex-col justify-between">
                
                {{-- Image Preview Carousel or Grid --}}
                <div class="flex space-x-2 overflow-x-auto mb-4">
                    @foreach (json_decode($product->images, true) as $image)
                        <img src="{{ asset('storage/' . $image) }}" class="w-20 h-20 object-cover rounded border" alt="Product Image">
                    @endforeach
                </div>

                {{-- Product Info --}}
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-gray-800 mb-1">{{ $product->name }}</h3>
                    <div class="text-gray-700 text-sm">
                        <span class="text-green-600 font-semibold">£{{ $product->current_price }}</span>
                        <span class="line-through ml-2 text-gray-400">£{{ $product->original_price }}</span>
                    </div>
                    <div class="text-xs text-gray-500 mt-1">{{ $product->colors }} Color{{ $product->colors > 1 ? 's' : '' }}</div>
                </div>

                {{-- Action Buttons --}}
                <div class="mt-4 flex justify-between items-center">
                    <a href="{{ route('products.edit', $product->id) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
