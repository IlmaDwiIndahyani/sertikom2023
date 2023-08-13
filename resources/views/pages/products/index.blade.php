@extends('layouts.main')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $row)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $row->product_name }}</td>
                            <td>{{ $row->description }}</td>
                            <td>{{ $row->price }}</td>
                            <td><img src="{{ asset('storage/'. $row->image) }}" alt="image_top_hits" width="100"></td>
                            <td>
                                <a href="{{ route('products.edit',  $row->id) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                
                                <form id="delete" action="{{ route('products.destroy',  $row->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
