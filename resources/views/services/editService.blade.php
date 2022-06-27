@extends('layouts.dashboardLayout')
@section('title' , 'PMS - Edit Service')


@section('main-section')
<form action={{ url('service/update') }} method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-2">
        <input type="hidden" name="service_id" value={{ $service->id}}>

        <input class="form-control form-control-sm"  type="text" name="name" value="{{ $service->name }}" placeholder="service Name">
    </div>

    <div class="mb-3">
        <label for="serviceDescription" class="form-label">service Description</label>
        <textarea class="form-control" name="description" id="serviceDescription" rows="8">{{ $service->description}}</textarea>
    </div>

    <div class="mb-2">
        <img style="width:100px; height: 100px;" src={{ asset('images/services/' . $service->servicePhoto )  }} alt="">
        <input class="form-control form-control-sm" name="servicePhoto" type="file">
    </div>


    <div class="mb-2">
        <input class="btn btn-success" type="submit">
    </div>
</form>
@endsection