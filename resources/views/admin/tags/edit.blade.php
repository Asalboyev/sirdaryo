@extends('layouts.admin')

@section('title')
    Update Tag
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.tags.update', $tag->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="card">
            <div class="card-header">
                <h4>Update Tag</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name (UZ)</label>
                    <input type="text" class="form-control" name="name_uz" value="{{$tag->name_uz }}">
                </div>
                <div class="form-group">
                    <label>Name (RU)</label>
                    <input type="text" class="form-control" name="name_ru" value="{{$tag->name_ru }}">
                </div>


                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>

            </div>

        </div>
    </form>

    </div>
@endsection
