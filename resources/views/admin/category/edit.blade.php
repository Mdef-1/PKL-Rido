@extends('layouts.admin')
@section('content')
    <div class="card-body">
        <h4 class="card-title mb-3">Edit Category</h4>
        <form action="{{ route('admin.category.update',  $category->id) }}" method="POST">
            @csrf
            @method('PUT')  
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tb-fname" name="nama" value="{{ $category->nama }}" placeholder="Enter Name here">
                        <label for="tb-fname">Category Name</label>
                    </div>
                </div>
                <div class="ms-auto mt-3 mt-md-0">
                    <button type="submit" class="btn btn-primary hstack gap-6">
                        <i class="ti ti-send fs-4"></i>
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
    </form>
    </div>
@endsection