@extends('admin.admin_master')
@section('admin')

<div class="content">

    <form id="mainForm" action="{{ route('store.review') }}" method="POST" enctype="multipart/form-data">
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
                                            <h4 class="card-title mb-0">Add Reviews</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
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
                                        <label class="form-label">Position</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <input class="form-control" type="text" name="position" value="{{ old('position') }}">
                                        </div>
                                    </div>
                                    @error('position')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="form-group mb-3 row">
                                        <label class="form-label">Message</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <textarea class="form-control" name="message" rows="5" spellcheck="false">{{ old('message') }}</textarea>
                                        </div>
                                    </div>
                                    @error('message')
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

    if (!form || !button) return;

    form.addEventListener("submit", function (e) {
        const name = form.querySelector('input[name="name"]').value.trim();
        const position = form.querySelector('input[name="position"]').value.trim();
        const message = form.querySelector('textarea[name="message"]').value.trim();
        const image = form.querySelector('input[name="image"]').files[0];

        let errors = [];

        if (!name) errors.push("Name is required");
        if (!position) errors.push("Position is required");
        if (!message) errors.push("Message is required");
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


