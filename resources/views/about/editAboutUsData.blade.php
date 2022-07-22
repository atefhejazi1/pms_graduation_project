@extends('layouts.dashboardLayout')
@section('title' , 'PMS - All Departments')


@section('main-section')
<form action={{ url('about/update') }} method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-2">
        <input type="hidden" name="about_id" value={{ $about->id}}>

        <input class="form-control form-control-sm" type="text" name="title" value="{{ $about->title }}" placeholder="about Name">
    </div>



    <div class="mb-3">
        <label for="aboutDescription" class="form-label">about Description</label>
        <textarea class="form-control" name="description" id="aboutDescription" rows="8">{{ $about->description}}</textarea>
    </div>

    <div class="mb-2">
        <img style="width:100px; height: 100px;" src={{ asset('images/about/' . $about->aboutPhoto )  }} alt="">
        <input class="form-control form-control-sm" name="aboutPhoto" type="file">
    </div>


    <div class="mb-2">
        <input class="btn btn-success" type="submit" value="Edit About">
    </div>
</form>
@endsection