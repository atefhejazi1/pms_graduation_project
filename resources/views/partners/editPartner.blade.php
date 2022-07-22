@extends('layouts.dashboardLayout')
@section('title' , 'PMS - All Departments')


@section('main-section')
<form action={{ url('partner/update') }} method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-2">
        <input type="hidden" name="partner_id" value={{ $partner->id}}>

        <input class="form-control form-control-sm"  type="text" name="name" value="{{ $partner->name }}" placeholder="Partner Name">
    </div>



    <div class="mb-3">
        <label for="partnerDescription" class="form-label">Partner Description</label>
        <textarea class="form-control" name="description" id="partnerDescription" rows="8">{{ $partner->description}}</textarea>
    </div>

    <div class="mb-2">
        <img style="width:100px; height: 100px;" src={{ asset('images/partners/' . $partner->partnerPhoto )  }} alt="">
        <input class="form-control form-control-sm" name="partnerPhoto" type="file">
    </div>


    <div class="mb-2">
        <input class="btn btn-success" type="submit">
    </div>
</form>
@endsection