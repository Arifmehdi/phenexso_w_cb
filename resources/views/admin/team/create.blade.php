@extends('admin.master')

@section('title')
   Admin Dashboard | Add Team Member
@endsection

@section('body')
<section class="content py-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-header px-2 py-2 d-flex justify-content-between align-items-center">
                    <h3 class="card-title w3-small text-bold text-muted pt-1">
                        <i class="fas fa-plus-circle text-primary"></i> Add New Team Member
                    </h3>
                    <a href="{{ route('team.index') }}" class="btn btn-outline-secondary btn-xs py-1">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="w3-small">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="Enter name" required value="{{ old('name') }}">
                                    @error('name')<span class="text-danger w3-tiny">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="designation" class="w3-small">Designation <span class="text-danger">*</span></label>
                                    <input type="text" name="designation" class="form-control form-control-sm" id="designation" placeholder="Enter designation" required value="{{ old('designation') }}">
                                    @error('designation')<span class="text-danger w3-tiny">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company" class="w3-small">Company / Organization</label>
                                    <input type="text" name="company" class="form-control form-control-sm" id="company" placeholder="Enter company" value="{{ old('company') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="order" class="w3-small">Display Order</label>
                                    <input type="number" name="order" class="form-control form-control-sm" id="order" placeholder="0" value="{{ old('order', 0) }}">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="image" class="w3-small">Member Image</label>
                                    <input type="file" name="image" class="form-control-file w3-small" id="image">
                                    <small class="text-muted">Recommended size: 400x450px</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="image-preview" class="border text-center p-1" style="height: 120px; width: 100px; margin: auto;">
                                    <img src="" id="preview" style="max-width: 100%; max-height: 100%; display: none;">
                                    <span id="no-image" class="w3-tiny text-muted" style="line-height: 110px;">No Image</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="status" name="status" checked>
                                <label class="custom-control-label w3-small" for="status">Active Status</label>
                            </div>
                        </div>

                        <div class="mt-4 text-right">
                            <button type="submit" class="btn btn-primary btn-sm px-4">Save Member</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script>
    $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#preview').attr('src', e.target.result).show();
            $('#no-image').hide();
        }
        reader.readAsDataURL(e.target.files[0]);
    });
</script>
@endpush
