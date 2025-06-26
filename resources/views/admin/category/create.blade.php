@extends('layouts.admin')
@section('content')
    <div class="card-body">
        <h4 class="card-title mb-3">Tambah Kategori</h4>
        <form action="{{ route('admin.category.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tb-fname"  name="nama" placeholder="Masukkan Nama Kategori">
                        <label for="tb-fname">Nama Kategori</label>
                    </div>
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