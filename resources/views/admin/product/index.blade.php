@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="table-responsive">
            <a href="{{ route('admin.product.create') }} ">Tambah product</a>
            <table class="table table-light mb-0">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">foto</th>
                        <th scope="col">nama</th>
                        <th scope="col">slug</th>
                        <th scope="col">deskripsi</th>
                        <th scope="col">harga</th>
                        <th scope="col">stok</th>
                        <th scope="col">category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src={{ asset('storage/' . $data->gambar) }} class="rounded-circle" width="40" height="40"></td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->slug }}</td>
                            <td>{{ $data->harga }}</td>
                            <td>{{ $data->stok }}</td>
                            <td>{{ $data->deskripsi }}</td>
                            <td>{{ $data->category->nama }}</td>
                            <td>
                                <div class="button-group d-flex flex-lg-row items-center">
                                    <a href="{{ route('admin.product.edit', $data->id) }}" class="btn btn-warning">EDIT</a>
                                    <form action="{{ route('admin.product.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">SUBMIT</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection