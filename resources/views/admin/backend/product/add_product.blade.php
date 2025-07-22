@extends('admin.admin_master')
@section('admin')

<div class="content">

    <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data" id="mainForm">
    @csrf
        <div class="card-body">
            
            
                <div class="tab-pane pt-4" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
                    <div class="row">

                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="card border mb-0">

                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">                      
                                                <h4 class="card-title mb-0">Add Product</h4>                      
                                            </div><!--end col-->                                                       
                                        </div>
                                    </div>
                                    <form id="uploadForm" action="">
                                        
                                        <div class="card-body">
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Title</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                                                </div>
                                            </div>
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Name</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                                </div>
                                            </div>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Price</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="price" value="{{ old('price') }}">
                                                </div>
                                            </div>
                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Image</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="file" name="image" id="imageInput">
                                                    <br>
                                                    <img id="previewImage" src="#" alt="Image Preview" class="img-fluid mt-2 border rounded" style="display: none; max-height: 150px;">
                                                </div>
                                            </div>

                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <br>
                                            <button type="submit" class="btn btn-primary" id="uploadBtn">Add</button>
                                        </div>
                                    </form>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function () {
                                            const imageInput = document.getElementById('imageInput');
                                            const previewImage = document.getElementById('previewImage');

                                            imageInput.addEventListener('change', function (event) {
                                                const file = event.target.files[0];
                                                if (file) {
                                                    const reader = new FileReader();
                                                    reader.onload = function (e) {
                                                        previewImage.src = e.target.result;
                                                        previewImage.style.display = 'block';
                                                    };
                                                    reader.readAsDataURL(file);
                                                } else {
                                                    previewImage.src = '#';
                                                    previewImage.style.display = 'none';
                                                }
                                            });
                                        });
                                    </script>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("mainForm");
        const button = document.getElementById("uploadBtn");

        form.addEventListener("submit", function (e) {
            const title = form.querySelector('input[name="title"]').value.trim();
            const name = form.querySelector('input[name="name"]').value.trim();
            const price = form.querySelector('input[name="price"]').value.trim();
            const image = form.querySelector('input[name="image"]').files[0];

            let errors = [];

            if (!title) errors.push("Title is required");
            if (!name) errors.push("Name is required");
            if (!price || isNaN(price)) errors.push("Price must be a number");
            if (!image) errors.push("Image is required");

            if (errors.length > 0) {
                e.preventDefault(); // Stop submission
                alert("Please fix the following:\n\n" + errors.join("\n"));
                return false;
            }

            // Disable button after validation passes
            button.disabled = true;
            button.innerHTML = `<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Uploading...`;
        });
    });
</script>
@endsection