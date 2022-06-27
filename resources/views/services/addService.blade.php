@extends('layouts.dashboardLayout')
@section('title' , 'PMS - Add Service')


@section('main-section')
<form action={{ url('service/store') }} method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-2">
        <input class="form-control form-control-sm" type="text" name="name" placeholder="Service Name">
    </div>
  
    <div class="mb-3">
        <label for="ServiceDescription" class="form-label">Service Description</label>
        <textarea class="form-control" name="description" id="ServiceDescription" rows="8"></textarea>
    </div>

    <div class="mb-2">
        <input class="form-control form-control-sm" name="servicePhoto" type="file">
    </div>

    <div class="mb-2">
        <input class="btn btn-success" type="submit">
    </div>
</form>
@endsection