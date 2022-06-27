@extends('layouts.dashboardLayout')
@section('title' , 'PMS - Add Offer')


@section('main-section')

<form action="{{ url('offer/store') }}" method="POST">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    @csrf
    <div class="mb-3">
        <label for="departmentName" class="form-label">Offer Name</label>
        <input type="text" name="name" class="form-control" id="departmentName" placeholder="Offer Name">
    </div>

    <div class="mb-3">
        <label for="offerDescription" class="form-label">Offer Description</label>
        <textarea class="form-control" name="description" id="offerDescription" rows="8"></textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-location-arrow"></i> Add New Offer </button>
    </div>
</form>
@endsection