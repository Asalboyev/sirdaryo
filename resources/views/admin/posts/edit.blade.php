@extends('layouts.admin')
@section('css')
  <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('title')
    Edit Posts
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="card">
            <div class="card-header">
                <h4>Update Post</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Title (UZ)</label>
                    <input type="text" class="form-control" value="{{ $post->title_uz }}" name="title_uz" @error('name_uz')  is-invalid @enderror>
                    @error('name_uz')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Title (RU)</label>
                    <input type="text" class="form-control"  value="{{ $post->title_ru }}" name="title_ru">
                </div>
                <div class="form-group">
                    <label>Body (UZ)</label>
                    <textarea type="text" class="form-control ckeditor"  name="body_uz"> {!! $post->body_uz !!}</textarea>
                </div>
                <div class="form-group">
                    <label>Body (RU)</label>
                    <textarea type="text" class="form-control ckeditor"  name="body_ru">{!! $post->body_ru !!}</textarea>

                </div>
                <div class="form-group">
                    <label>Image </label>
                    <input type="file" class="form-control" name="image" value="{{ $post->image }}">
                </div>
                <div class="form-group">

                    <label>Category selected </label>
                 <select  id="" name="category_id"  class="form-control">
                    @foreach ($categories as $category)
                        <option {{ $post->category_id==$category->id ? 'selected' : '' }} value="{{$category->id}}">{{ $category->name_uz }}</option>
                    @endforeach
                 </select>
                </div>

                <div class="form-group">

                    <label>Tags selected </label>
                    <select id="" name="tags[]" class="form-control select2" multiple="">
                        @foreach ($tags as $tag)
                            <option  @if(in_array($tag->id, $post->tags->pluck('id')->toArray())) selected @endif value="{{ $tag->id }}">{{ $tag->name_uz }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <div class="control-label">Muhimmi ?</div>
                    <label class="custom-switch mt-2">
                      <input type="checkbox" value="1" {{ $post->is_spacial == 1 ? 'checked' : '' }} name="is_spacial" class="custom-switch-input">
                      <span class="custom-switch-indicator"></span>
                    </label>
                  </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ $post->slug }}">
                </div>
                <div class="form-group">
                    <label>Meta title</label>
                    <input type="text" class="form-control" name="meta_title" value="{{ $post->meta_title }}">
                </div>
                <div class="form-group">
                    <label>Meta description</label>
                    <input type="text" class="form-control" name="meta_description" value="{{ $post->meta_description }}">
                </div>
                <div class="form-group">
                    <label>Meta keywords</label>
                    <input type="text" class="form-control" name="meta_keywords" value="{{ $post->meta_keywords }}">
                </div>

                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>

            </div>

        </div>
    </form>

    </div>
@endsection

@section('js')
   <script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
   <script src="/admin/assets/bundles/select2/dist/js/select2.full.min.js"></script>


   {{-- <script>

        // $('textarea').ckeditor();
         $('.ckeditor').ckeditor(); // if class is prefered.

   </script> --}}

   <script type="text/javascript">
        CKEDITOR.replace('body_uz', {
            filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('body_ru', {
            filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });

</script>
@endsection
