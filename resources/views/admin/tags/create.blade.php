@extends('layouts.admin')

@section('title')
    Create Tag
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.tags.store') }}" method="POST">
            @csrf
        <div class="card">
            <div class="card-header">
                <h4>Create Tag</h4>
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
              

                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>

            </div>

        </div>
    </form>

    </div>
@endsection
