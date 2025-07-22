@extends('admin.admin_master')
@section('admin')

<div class="content">

    <form action="{{ route('update.review') }}" method="POST" enctype="multipart/form-data" id="mainForm">
    @csrf
        
        <input type="hidden" name="id" value="{{ $review->id }}">
        <div class="card-body">
            
                <div class="tab-pane pt-4" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
                    <div class="row">

                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="card border mb-0">

                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">                      
                                                <h4 class="card-title mb-0">Edit Review</h4>                      
                                            </div><!--end col-->                                                       
                                        </div>
                                    </div>
                                    <form action="">
                                        <div class="card-body">
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Name</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="name" value="{{ $review->name }}">
                                                </div>
                                            </div>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Position</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="position" value="{{ $review->position }}">
                                                </div>
                                            </div>
                                            @error('position')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Message</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <textarea class="form-control" type="text" name="message" value="" rows="5" spellcheck="false">{{ $review->message }}</textarea>
                                                </div>
                                            </div>
                                            @error('message')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Image</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control mb-2" type="file" name="image" value="{{ asset($review->image) }}">
                                                    
                                                    @if($review->image)
                                                        <img src="{{ asset($review->image) }}" alt="Review Image" width="150">
                                                    @endif
                                                </div>
                                            </div>
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <br>
                                            <button type="submit" class="btn btn-primary" id="uploadBtn">Upload</button>
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("mainForm");
        const button = document.getElementById("uploadBtn");

        form.addEventListener("submit", function (e) {
            
            // Disable button after validation passes
            button.disabled = true;
            button.innerHTML = `<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Uploading...`;
        });
    });
</script>
@endsection