@extends('admin.admin_master')
@section('admin')

<div class="content">

    <form action="{{ route('update.product') }}" method="POST" enctype="multipart/form-data">
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
                                    <form action="">

                                        
                                         
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
                                                    <input class="form-control" type="file" name="image" value="{{ $product->image }}">
                                                </div>
                                            </div>
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <br>
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
    </form>

</div>
@endsection