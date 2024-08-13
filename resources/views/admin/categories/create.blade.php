@extends('layouts.admin')

@section('title')
    Create Category
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
        <div class="card">
            <div class="card-header">
                <h4>Create Category</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name (UZ)</label>
                    <input type="text" class="form-control" name="name_uz" @error('name_uz')  is-invalid @enderror>
                    @error('name_uz')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Name (RU)</label>
                    <input type="text" class="form-control" name="name_ru">
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <div class="form-group">
                    <label>Meta title</label>
                    <input type="text" class="form-control" name="meta_title">
                </div>
                <div class="form-group">
                    <label>Meta description</label>
                    <input type="text" class="form-control" name="meta_description">
                </div>
                <div class="form-group">
                    <label>Meta keywords</label>
                    <input type="text" class="form-control" name="meta_keywords">
                </div>

                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>

            </div>

        </div>
    </form>

    </div>
@endsection
