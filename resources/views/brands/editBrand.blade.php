@extends('layouts.dashboardLayout')
@section('title' , 'PMS - Add Department')


@section('main-section')
<form action="{{ url('brand/update') }}" method="POST">

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
        <input type="hidden" name="dept_id" value={{ $brand->id}}>

        <label for="brandName" class="form-label">Brand Name</label>
        <input type="text" name="name" value="{{ $brand->name}}" class="form-control" id="brandName" placeholder="Department Name">
    </div>

    <div class="mb-3">
        <label for="brandDescription" class="form-label">Brand Description</label>
        <textarea class="form-control" name="description" id="brandDescription" rows="8">{{$brand->description}}</textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-file-pen"></i> Update Brand </button>
    </div>
</form>
@endsection