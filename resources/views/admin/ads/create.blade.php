@extends('layouts.admin')

@section('title')
    Create Advertising
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.ads.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card">
            <div class="card-header">
                <h4>Create Advertising</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Title (top)</label>
                    <input type="text" class="form-control" name="title_1" @error('title_1')  is-invalid @enderror>
                    @error('title_1')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Image (Top)</label>
                    <input type="file" class="form-control" name="image_1">
                </div>
                <div class="form-group">
                    <label>Url (Top)</label>
                    <input type="text" class="form-control" name="url_1">
                </div>

                <div class="form-group">
                    <label>Title (Sidebar)</label>
                    <input type="text" class="form-control" name="title_2" @error('title_2')  is-invalid @enderror>
                    @error('title_2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Image (Sidebar)</label>
                    <input type="file" class="form-control" name="image_2">
                </div>
                <div class="form-group">
                    <label>Url (Sidebar)</label>
                    <input type="text" class="form-control" name="url_2">
                </div>


                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>

            </div>

        </div>
    </form>

    </div>
@endsection
