@extends('layouts.dashboardLayout')
@section('title' , 'PMS - Add Brand')


@section('main-section')

<form action="{{ url('brand/store') }}" method="POST">
    @csrf

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="mb-3">
        <label for="companyBrandName" class="form-label">Brand Name</label>
        <input type="text" name="name" class="form-control" id="companyBrandName" placeholder="Brand Name">
    </div>

    <div class="mb-3">
        <label for="companyBrandDescription" class="form-label"> Brand Description</label>
        <textarea class="form-control" name="description" id="companyBrandDescription" rows="8"></textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-location-arrow"></i> Add New Brand </button>
    </div>
</form>
@endsection