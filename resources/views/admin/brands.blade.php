@extends('layouts.app')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Leading Brands</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Leading Brands</li>
                    </ol>
                </div>
            </div>

        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <x-search-component />
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Create</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Leading Brands</h5>
                </div>
                <form action="{{ route('leading-brands.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">

                        <div class="form-group mb-3">
                            <label for="">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Brand name" name="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Logo</label>
                            <div class="d-flex align-items-end">
                                <div class="">
                                    <img id="preview" src="#" alt="Preview" class="img-thumbnail"
                                        style="max-height:150px;min-height:150px;width:150px;border-radius:50%;object-fit:cover">
                                </div>
                                <!-- Input group -->
                                {{-- <div class="input-group" style="width: 150px"> --}}
                                    <input type="hidden" class="form-control" placeholder="Choose file..." id="fileName"
                                        readonly>

                                    <button class="btn btn-info btn-outline-secondary" style="height:35px" type="button"
                                        onclick="document.getElementById('logoInput').click()">
                                        Browse
                                    </button>
                                {{-- </div> --}}

                            </div>
                            <!-- Hidden file input -->
                            <input type="file" name="logo" id="logoInput" accept="image/*" class="d-none"
                                onchange="handleFile(this)">

                            <!-- Image Preview -->


                            @error('logo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@if ($errors->any())
<script>
    document.addEventListener("DOMContentLoaded", function () {
        $('#exampleModal').modal('show');
    });
</script>
@endif

<script id="z7m4qp">
    function handleFile(input) {
        const file = input.files[0];

        // Show file name
        document.getElementById('fileName').value = file ? file.name : '';

        // Show preview
        if (file) {
            const preview = document.getElementById('preview');
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    }
</script>
