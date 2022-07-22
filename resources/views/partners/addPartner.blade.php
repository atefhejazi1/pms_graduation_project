@extends('layouts.dashboardLayout')
@section('title' , 'PMS - All Partners')


@section('main-section')
<form action={{ url('partner/store') }} method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-2">
        <input class="form-control form-control-sm" type="text" name="name" placeholder="Partner Name">
    </div>



    <div class="mb-3">
        <label for="partnerDescription" class="form-label">Partner Description</label>
        <textarea class="form-control" name="description" id="partnerDescription" rows="8"></textarea>
    </div>

    <div class="mb-2">
        <input class="form-control form-control-sm" name="partnerPhoto" type="file">
    </div>

    <div class="mb-2">
        <input class="btn btn-primary" type="submit" value="Add New Partner">
    </div>
</form>
@endsection