@extends('admin.master')
@section('title')
    Create
@endsection
@section('main-content')

<style>
      .btn{
        align-items: center;
        width: 80px;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Category</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissable">
                    <i class="fa fa-ban"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>{{ session('success') }}</b>
                </div>
            @endif
            @if ($errors->any())
            <div  class="alert alert-danger" >
                <strong>Validation error(s):</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form name="CreateCategory" id="CreateCategory" method="POST" enctype="multipart/form-data" action="{{ route('admin.category.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Category Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title" required>
                                </div>


                                <div class="form-group">
                                    <label for="meta_tag">Meta Tag <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_tag" id="meta_tag">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_keyword" id="meta_keyword">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" class="form-control" cols="30" rows="4" style="resize: none;"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status <span class="text-danger">*</span></label><br>
                                    <input type="radio" name="status" id="enable" checked value="true">&nbsp;<label for="enable">Enable</label>
                                    <input type="radio" name="status" id="disable" value="false">&nbsp;<label for="disable">Disable</label>
                                </div>
                                <div class="form-group">
                                    <label for="authentication">Authentication</label><br>
                                    <input type="checkbox" name="authentication" id="authentication" value="top_stores">&nbsp;<label for="authentication">Top Store</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="category_image">Category Image <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" name="category_image" id="category_image" onchange="previewImage()">

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-lg btn-primary">Save</button>
                        <a href="{{ route('admin.category') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<script>     function previewImage() {
    var file = document.getElementById('category_image').files[0];
    var reader = new FileReader();
    reader.onloadend = function () {
        var imagePreview = document.createElement('img');
        imagePreview.src = reader.result;
        imagePreview.className = 'image-preview';
        imagePreview.style.width = '500px';
        imagePreview.style.height = '300px';
        var existingPreview = document.querySelector('.image-preview');
        if (existingPreview) {
            existingPreview.remove();
        }
        document.querySelector('#category_image').parentElement.appendChild(imagePreview);
    }
    if (file) {
        reader.readAsDataURL(file);
    }
}
</script>
@endsection
