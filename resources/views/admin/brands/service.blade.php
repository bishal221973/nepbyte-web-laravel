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
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Leading Brands</button>
            </div>

            <div class="card mb-4">

                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px;background-color: #789EC3">#</th>
                                <th style="background-color: #789EC3">Logo</th>
                                <th style="background-color: #789EC3">Name</th>
                                <th style="background-color: #789EC3">URL</th>
                                <th style="width: 40px;background-color: #789EC3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

    
@endsection

<style>
    .brows-button{
        position: relative;
    }
</style>
@if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
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
