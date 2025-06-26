@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="table-responsive">
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Tambah Kategori</a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <table class="table table-light mb-0">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $data)

                        <tr>
                            <td>{{  $loop->iteration }}</td>
                            <td>{{ $data['nama'] }}</td>
                            <td>{{ $data['slug'] }}</td>
                            <td>
                                <div class="button-group d-flex flex-lg-row">
                                    <form action="{{ route('admin.category.edit', $data->id) }}" method="GET">
                                        <button type="submit" class="btn btn-warning ">EDIT</button>
                                    </form>
                                    <form action="{{  route('admin.category.destroy', $data->id)  }} " method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
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