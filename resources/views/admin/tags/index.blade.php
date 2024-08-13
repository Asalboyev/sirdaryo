@extends('layouts.admin')
@section('title')
     Tags
@endsection
@section('content')

<div class="col-12 col-md-12 col-lg-12">

    <div class="card">

        @if (session('success'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>×</span>
            </button>
            {{ session('success') }}
            </div>
        </div>
    @endif
      <div class="card-header">
        <h4>Tags table</h4>
        <div class="card-header-form">
            <a href="{{ route('admin.tags.create') }}" class="btn btn-primary">Create</a>
        </div>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody><tr>
              <th>#</th>
              <th>Name (Uz)</th>
              <th>Name (Ru)</th>
              <th>Slug</th>
              <th>Action</th>
            </tr>
            @foreach ($tags as $tag)
            <tr>
                <td>{{$loop->iteration  }}</td>
                <td>{{ $tag->name_uz }}</td>
                <td>{{ $tag->name_ru }}</td>
                <td>{{ $tag->slug }}</td>

                <td >
                    <form style="display: inline" action="{{ route('admin.tags.destroy',$tag->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button href="#" class="btn btn-danger" onclick="return confirm('Ochirishni xohlisizmi?')" type="submit">Delete</button>
                    </form>
                    <a href="{{ route('admin.tags.edit',$tag->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('admin.tags.show',$tag->id) }}" class="btn btn-warning">Show</a>
                </td>
              </tr>
            @endforeach


          </tbody></table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
            {{ $tags->links() }}

        </nav>
      </div>
    </div>
  </div>
@endsection
