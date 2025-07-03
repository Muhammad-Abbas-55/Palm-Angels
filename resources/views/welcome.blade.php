@extends('layouts.master')
@section('title', 'Home | Paradise Palm')
@section('content')
    <!-- Product Grid -->
    <section class="w-full py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-1">
            @foreach ($products as $product)
                <div class="bg-white rounded product-card relative group">
                    <!-- Image Slider -->
                    <div class="product-image-slider">
                        <div id="carousel-{{ $product->id }}" class="carousel slide" data-bs-ride="false"
                            data-bs-interval="false">
                            @php $images = json_decode($product->images, true); @endphp

                            @if (count($images) > 1)
                                <div class="carousel-indicators">
                                    @foreach ($images as $index => $image)
                                        <button type="button" data-bs-target="#carousel-{{ $product->id }}"
                                            data-bs-slide-to="{{ $index }}"
                                            class="{{ $index === 0 ? 'active' : '' }}"
                                            aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                                            aria-label="Slide {{ $index + 1 }}">
                                        </button>
                                    @endforeach
                                </div>
                            @endif

                            <div class="carousel-inner h-full">
                                @foreach ($images as $index => $image)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }} h-full">
                                        <img src="{{ asset('storage/' . $image) }}" class="d-block w-100"
                                            alt="{{ $product->name }} - Image {{ $index + 1 }}">
                                    </div>
                                @endforeach
                            </div>

                            @if (count($images) > 1)
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carousel-{{ $product->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carousel-{{ $product->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif
                        </div>

                        <!-- Favorite Icon -->
                        <div class="heart-icon" onclick="toggleFavorite(this)">
                            <i class="bi bi-heart"></i>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="p-4">
                        <div class="text-sm font-bold uppercase mb-1">{{ $product->name }}</div>
                        <div class="text-base">
                            <span class="text-gray-900 font-semibold">£{{ $product->current_price }}</span>
                            <span class="line-through text-gray-500 ml-2 text-sm">£{{ $product->original_price }}</span>
                            <span class="text-red-500 ml-2 text-sm">(-{{ $product->discount }}%)</span>
                        </div>
                        <div class="text-xs text-gray-500 mt-1">{{ $product->colors }} Colors</div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>

@endsection
