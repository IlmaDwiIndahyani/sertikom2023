@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-users fa-3x text-white"></i>
                <div class="ms-3 text-white">
                    <p class="mb-2">User</p>
                    <h6 class="mb-0">0</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-box fa-3x text-white"></i>
                <div class="ms-3 text-white">
                    <p class="mb-2">Product</p>
                    <h6 class="mb-0">0</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-upload fa-3x text-white"></i>
                <div class="ms-3 text-white">
                    <p class="mb-2">Publish</p>
                    <h6 class="mb-0">0</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-download fa-compact-disc fa-3x text-white"></i>
                <div class="ms-3 text-white">
                    <p class="mb-2">Unpublish</p>
                    <h6 class="mb-0">0</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
