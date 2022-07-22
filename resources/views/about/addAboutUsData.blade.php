@extends('layouts.dashboardLayout')
@section('title' , 'PMS - Add About Us Data')


@section('main-section')
<form action={{ url('about/store') }} method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-2">
        <input class="form-control form-control-sm" type="text" name="title" placeholder="about Name">
    </div>

  

    <div class="mb-3">
        <label for="aboutDescription" class="form-label">about Description</label>
        <textarea class="form-control" name="description" id="aboutDescription" rows="8"></textarea>
    </div>

    <div class="mb-2">
        <input class="form-control form-control-sm" name="aboutPhoto" type="file">
    </div>


    <div class="mb-2">
        <input class="btn btn-success" type="submit">
    </div>
</form>
@endsection