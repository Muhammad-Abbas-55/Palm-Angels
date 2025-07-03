@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <h1 class="text-2xl font-bold mb-6">Edit Product</h1>
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')

                        <div class="mb-4">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ old('name', $product->name) }}" required
                                class="form-control">
                        </div>

                        <div class="mb-4">
                            <label>Current Price</label>
                            <input type="number" name="current_price"
                                value="{{ old('current_price', $product->current_price) }}" required class="form-control">
                        </div>

                        <div class="mb-4">
                            <label>Original Price</label>
                            <input type="number" name="original_price"
                                value="{{ old('original_price', $product->original_price) }}" required class="form-control">
                        </div>

                        <div class="mb-4">
                            <label>Discount (%)</label>
                            <input type="number" name="discount" value="{{ old('discount', $product->discount) }}" required
                                class="form-control">
                        </div>

                        <div class="mb-4">
                            <label>Colors</label>
                            <input type="number" name="colors" value="{{ old('colors', $product->colors) }}" required
                                class="form-control">
                        </div>

                        <div class="mb-4">
                            <label>New Product Images</label>
                            <input type="file" name="images[]" multiple class="form-control">
                        </div>

                        @if ($product->images)
                            <div class="mt-6">
                                <h3 class="font-semibold mb-2">Current Images:</h3>
                                <div class="grid grid-cols-3 gap-4">
                                    @foreach (json_decode($product->images, true) as $image)
                                        <img src="{{ asset('storage/' . $image) }}" class="object-cover m-9 rounded border" style="width: 80px; height:90px">
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        
                        <button type="submit" class="btn mt-4 btn-primary">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
