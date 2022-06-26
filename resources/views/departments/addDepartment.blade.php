@extends('layouts.dashboardLayout')
@section('title' , 'PMS - Add Department')


@section('main-section')

<form action="{{ url('department/store') }}" method="POST">

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
        <label for="departmentName" class="form-label">Department Name</label>
        <input type="text" name="name" class="form-control" id="departmentName" placeholder="Department Name">
    </div>

    <div class="mb-3">
        <label for="departmentDescription" class="form-label">Department Description</label>
        <textarea class="form-control" name="description" id="departmentDescription" rows="8"></textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-location-arrow"></i> Add New Department </button>
    </div>
</form>
@endsection