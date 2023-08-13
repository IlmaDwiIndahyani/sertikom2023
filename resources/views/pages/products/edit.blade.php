@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Edit Produk</h2>
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal auth-form my-4"
                    action="{{ route('products.update', $product->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Nama Produk</label>
                        <input id="product_name" type="text" name="product_name"
                            class="form-control @error('product_name') is-invalid @enderror"
                            value="{{ $product->product_name }}" placeholder="Masukkan Nama Produk">
                        @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea id="description" name="description"
                            class="form-control @error('description') is-invalid @enderror"
                            placeholder="Masukkan Deskripsi Produk">{{ $product->description }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input id="price" type="number" step="0.01" name="price"
                            class="form-control @error('price') is-invalid @enderror"
                            value="{{ $product->price }}" placeholder="Masukkan Harga Produk">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Foto Top Hits</label>
                        @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @endif
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" placeholder="Masukkan Foto" onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="{{ route('products.index') }}" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
