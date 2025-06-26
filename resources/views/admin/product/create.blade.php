@extends('layouts.admin')
@section('content')
    <div class="card-body">
        <h4 class="card-title mb-3">Basic Form</h4>
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tb-fname" name="nama" value=""
                            placeholder="Enter Name here">
                        <label for="tb-fname">Nama produk</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="tb-fname" name="stok" value=""
                            placeholder="Enter Name here">
                        <label for="tb-fname">Stok Produk</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="tb-fname" name="harga" value=""
                            placeholder="Enter Name here">
                        <label for="tb-fname">Harga Produk</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tb-fname" name="deskripsi" value=""
                            placeholder="Enter Name here">
                        <label for="tb-fname">Deskripsi Produk</label>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <select class="form-select mr-sm-2" id="inlineFormCustomSelect" name="category_id">
                        <option selected disabled>pilih...</option>
                        @foreach ($categories as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-4">
                <form class="mt-3">
                    <label for="tb-fname">gambar produk</label>
                    <input class="form-control" type="file" id="formFile" name="gambar"accept="image/*" nama="gambar" required>
                </form>
                </div>
                <div class="ms-auto mt-3 mt-md-0">
                    <button type="submit" class="btn btn-primary hstack gap-6">
                        <i class="ti ti-send fs-4"></i>
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection