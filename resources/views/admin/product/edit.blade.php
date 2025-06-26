@extends('layouts.admin')
@section('content')
    <div class="card-body">
        <h4 class="card-title mb-3">Edit Category</h4>
        <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tb-fname" name="nama" value="{{ $product->nama }}"
                            placeholder="Enter Name here">
                        <label for="tb-fname">Nama produk</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="tb-fname" name="stok" value="{{ $product->stok }}"
                            placeholder="Enter Name here">
                        <label for="tb-fname">Stok Produk</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="tb-fname" name="harga" value="{{ $product->harga }}"
                            placeholder="Enter Name here">
                        <label for="tb-fname">Harga Produk</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tb-fname" name="deskripsi" value="{{ $product->deskripsi }}"
                            placeholder="Enter Name here">
                        <label for="tb-fname">Deskripsi Produk</label>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <select class="form-select mr-sm-2" id="inlineFormCustomSelect" name="category_id">
                        <option selected disabled>pilih...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"  {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-4">
                
                        <label for="tb-fname">gambar produk</label>
                        <input class="form-control" type="file" id="formFile" name="gambar" accept="image/*" value="">
                   
                    <small class="text_muted">Kosongkan jika tidak ingin merubah gambar</small>
                @if($product->gambar)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $product->gambar) }}" class="img-thumbnail" style="max-width:300px" alt="">
                    </div>
                </div>
                <div class="ms-auto mt-3 mt-md-0">
                    <button type="submit" class="btn btn-primary hstack gap-6">
                        <i class="ti ti-send fs-4"></i>
                        Submit
                    </button>
                </div>
                @endif
            </div>
    </div>
    </div>
    </form>
    </div>
@endsection