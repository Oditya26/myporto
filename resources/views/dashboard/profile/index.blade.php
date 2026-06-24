@extends('dashboard.layout')

@section('konten')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" />

    <form id="profile-form" action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_cropped_foto" id="_cropped_foto">
        <div class="card" style="width:170px">
            <img id="profile-preview" class="card-img-top" src="{{ get_meta_value('_foto') ? asset('foto').'/'.get_meta_value('_foto') : asset('admin/images/faces/face1.jpg') }}" alt="Card image" style="width:100%; aspect-ratio: 1 / 1; object-fit: cover;">
            <div class="card-body">
                <h3 class="card-title">Photo Profile</h3>
            </div>
        </div>
        <br>

        <div class="row justify-content-between mb-3">
            <div class="col-6">
                <div class="mb-2">
                    <h3>Profile</h3>
                </div>
                <div class="mb-3">
                    <label for="_foto" class="form-label">Photo</label>
                    <input type="file" class="form-control form-control-sm" name="_foto" id="_foto" accept="image/*">
                    <small class="text-muted">Pilih foto, atur area crop 1:1, lalu klik Submit.</small>
                </div>

                <div class="mb-3">
                    <div class="border rounded p-2">
                        <img id="image-to-crop" src="{{ get_meta_value('_foto') ? asset('foto').'/'.get_meta_value('_foto') : '' }}" alt="Crop preview" style="max-width:100%; display:{{ get_meta_value('_foto') ? 'block' : 'none' }};">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="_kota" class="form-label">City</label>
                    <input type="text" class="form-control form-control-sm" name="_kota" id="_kota" value="{{get_meta_value('_kota')}}">
                </div>

                <div class="mb-3">
                    <label for="_provinsi" class="form-label">Province</label>
                    <input type="text" class="form-control form-control-sm" name="_provinsi" id="_provinsi" value="{{get_meta_value('_provinsi')}}">
                </div>

                <div class="mb-3">
                    <label for="_nohp" class="form-label">Phone Number</label>
                    <input type="text" class="form-control form-control-sm" name="_nohp" id="_nohp" value="{{get_meta_value('_nohp')}}">
                </div>

                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm" name="_email" id="_email" value="{{get_meta_value('_email')}}">
                </div>

            </div>
            
            <div class="col-6">
                <div class="mb-2">
                    <h3>Social Media Account</h3>
                </div>

                <div class="mb-3">
                    <label for="_facebook" class="form-label">Username Facebook</label>
                    <input type="text" class="form-control form-control-sm" name="_facebook" id="_facebook" value="{{get_meta_value('_facebook')}}">
                </div>

                <div class="mb-3">
                    <label for="_twitter" class="form-label">Username Twitter</label>
                    <input type="text" class="form-control form-control-sm" name="_twitter" id="_twitter" value="{{get_meta_value('_twitter')}}">
                </div>

                <div class="mb-3">
                    <label for="_linkedin" class="form-label">Username Linkedin</label>
                    <input type="text" class="form-control form-control-sm" name="_linkedin" id="_linkedin" value="{{get_meta_value('_linkedin')}}">
                </div>

                <div class="mb-3">
                    <label for="_github" class="form-label">Username Github</label>
                    <input type="text" class="form-control form-control-sm" name="_github" id="_github" value="{{get_meta_value('_github')}}">
                </div>

                <div class="mb-3">
                    <label for="_instagram" class="form-label">Username Instagram</label>
                    <input type="text" class="form-control form-control-sm" name="_instagram" id="_instagram" value="{{get_meta_value('_instagram')}}">
                </div>
            </div>
        </div>

        
        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        
        
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const input = document.getElementById('_foto');
            const preview = document.getElementById('profile-preview');
            const cropImage = document.getElementById('image-to-crop');
            const form = document.getElementById('profile-form');
            const hiddenInput = document.getElementById('_cropped_foto');
            const submitButton = form ? form.querySelector('button[type="submit"]') : null;
            let cropper = null;
            let isProcessingCrop = false;

            if (input && cropImage && form) {
                input.addEventListener('change', function (event) {
                    const file = event.target.files[0];
                    if (!file) return;

                    const reader = new FileReader();
                    reader.onload = function (e) {
                        cropImage.src = e.target.result;
                        cropImage.style.display = 'block';
                        preview.src = e.target.result;

                        if (cropper) {
                            cropper.destroy();
                        }

                        cropper = new Cropper(cropImage, {
                            aspectRatio: 1,
                            viewMode: 1,
                            dragMode: 'move',
                            responsive: true,
                            autoCropArea: 1,
                            background: false,
                        });
                    };
                    reader.readAsDataURL(file);
                });

                if (submitButton) {
                    submitButton.addEventListener('click', function (event) {
                        if (!cropper || input.files.length === 0 || isProcessingCrop) {
                            return;
                        }

                        event.preventDefault();
                        isProcessingCrop = true;
                        submitButton.disabled = true;
                        submitButton.textContent = 'Processing...';

                        const canvas = cropper.getCroppedCanvas({
                            width: 300,
                            height: 300,
                            fillColor: '#ffffff'
                        });

                        if (!canvas) {
                            isProcessingCrop = false;
                            submitButton.disabled = false;
                            submitButton.textContent = 'Submit';
                            return;
                        }

                        canvas.toBlob(function (blob) {
                            if (!blob) {
                                isProcessingCrop = false;
                                submitButton.disabled = false;
                                submitButton.textContent = 'Submit';
                                return;
                            }

                            const reader = new FileReader();
                            reader.onload = function (e) {
                                hiddenInput.value = e.target.result;
                                isProcessingCrop = false;
                                submitButton.disabled = false;
                                submitButton.textContent = 'Submit';
                                form.requestSubmit();
                            };
                            reader.onerror = function () {
                                isProcessingCrop = false;
                                submitButton.disabled = false;
                                submitButton.textContent = 'Submit';
                            };
                            reader.readAsDataURL(blob);
                        }, 'image/png');
                    });
                }
            }
        });
    </script>
    
@endsection