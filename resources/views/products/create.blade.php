@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <h1 class="text-2xl font-bold mb-6">Create Product</h1>
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label>Name</label>
                            <input type="text" name="name" required class="form-control">
                        </div>

                        <div class="mb-4">
                            <label>Current Price</label>
                            <input type="number" name="current_price" required class="form-control">
                        </div>

                        <div class="mb-4">
                            <label>Original Price</label>
                            <input type="number" name="original_price" required class="form-control">
                        </div>

                        <div class="mb-4">
                            <label>Discount (%)</label>
                            <input type="number" name="discount" required class="form-control">
                        </div>

                        <div class="mb-4">
                            <label>Colors</label>
                            <input type="number" name="colors" required class="form-control">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Product Images</label>
                            <input type="file" name="images[]" multiple required class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
