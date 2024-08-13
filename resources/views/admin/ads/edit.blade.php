
@extends('layouts.admin')

@section('title')
    Update Advertising
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.ads.update',$ads->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="card">
            <div class="card-header">
                <h4>Update Advertising</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Title (top)</label>
                    <input type="text" class="form-control" value="{{ $ads->title_1 }}" name="title_1" @error('title_1')  is-invalid @enderror>
                    @error('title_1')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Image (Top)</label>
                    <input type="file" class="form-control" value="{{ $ads->image_1 }}" name="image_1">
                </div>
                <div class="form-group">
                    <label>Url (Top)</label>
                    <input type="text" class="form-control" value="{{ $ads->url_1 }}" name="url_1">
                </div>

                <div class="form-group">
                    <label>Title (Sidebar)</label>
                    <input type="text" class="form-control" value="{{ $ads->title_2 }}" name="title_2" @error('title_2')  is-invalid @enderror>
                    @error('title_2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Image (Sidebar)</label>
                    <input type="file" class="form-control" value="{{ $ads->image_2 }}" name="image_2">
                </div>
                <div class="form-group">
                    <label>Url (Sidebar)</label>
                    <input type="text" class="form-control" value="{{ $ads->url_2 }}" name="url_2">
                </div>


                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>

            </div>

        </div>
    </form>

    </div>
@endsection
