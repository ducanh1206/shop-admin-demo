@extends('admin.admin_master')
@section('admin')

<div class="content">

    <form action="{{ route('update.product') }}" method="POST" enctype="multipart/form-data" id="mainForm">
    @csrf

        <input type="hidden" name="id" value="{{ $product->id }}">
        <div class="card-body">
            
                <div class="tab-pane pt-4" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
                    <div class="row">

                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="card border mb-0">

                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">                      
                                                <h4 class="card-title mb-0">Edit Product</h4>                      
                                            </div><!--end col-->                                                       
                                        </div>
                                    </div>


                                        
                                         
                                        <div class="card-body">
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Title</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="title" value="{{ $product->title }}">
                                                </div>
                                            </div>
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Name</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                                                </div>
                                            </div>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Price</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="price" value="{{ $product->price }}">
                                                </div>
                                            </div>
                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Image</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control mb-2" type="file" name="image" value="{{ asset($product->image) }}">
                                                    
                                                    @if($product->image)
                                                        <img src="{{ asset($product->image) }}" alt="Product Image" width="150">
                                                    @endif
                                                </div>
                                            </div>
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            
                                            <br>
                                            <button type="submit" class="btn btn-primary" id="uploadBtn">Upload</button>
                                        </div>
 
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

            let errors = [];

            if (!title) errors.push("Title is required");
            if (!name) errors.push("Name is required");
            if (!price || isNaN(price)) errors.push("Price must be a number");

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