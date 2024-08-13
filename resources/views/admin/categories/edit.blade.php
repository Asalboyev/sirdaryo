@extends('layouts.admin')

@section('title')
    Update Category
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="card">
            <div class="card-header">
                <h4>Update Category</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name (UZ)</label>
                    <input type="text" class="form-control" name="name_uz" value="{{$category->name_uz }}">
                </div>
                <div class="form-group">
                    <label>Name (RU)</label>
                    <input type="text" class="form-control" name="name_ru" value="{{$category->name_ru }}">
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{$category->slug }}">
                </div>
                <div class="form-group">
                    <label>Meta title</label>
                    <input type="text" class="form-control" name="meta_title" value="{{$category->meta_title }}">
                </div>
                <div class="form-group">
                    <label>Meta description</label>
                    <input type="text" class="form-control" name="meta_description" value="{{$category->meta_description }}">
                </div>
                <div class="form-group">
                    <label>Meta keywords</label>
                    <input type="text" class="form-control" name="meta_keywords" value="{{$category->meta_keywords }}">
                </div>

                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>

            </div>

        </div>
    </form>

    </div>
@endsection
