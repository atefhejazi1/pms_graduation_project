@extends('layouts.dashboardLayout')
@section('title' , 'PMS - Request Service')


@section('main-section')
<form action={{ url('service/RequestServiceStore') }} method="post">
    @csrf

    <div class="mb-3">
        <div class="alert alert-primary" role="alert">
            الرد على طلبك للخدمة قد يأخد بعض من  الوقت .. انتظر 
        </div>
    </div>

    <div class="mb-2">
        <img style="width:100%; height: auto" src={{ asset('images/services/' . $service->servicePhoto )  }} alt="">
    </div>
    <div class="mb-2">
        <input type="hidden" name="service_id" value={{ $service->id}}>

        <input class="form-control form-control-sm" type="hidden" name="name" value="{{ $service->name }}" placeholder="service Name">
        <label for="serviceDescription" class="form-label" style="font-size: 18px; font-weight: bold;">اسم الخدمة</label>
        <p>
            {{ $service->name }}
        </p>
    </div>

    <div class="mb-3">
        <label for="serviceDescription" class="form-label" style="font-size: 18px; font-weight: bold;">وصف الخدمة</label>
        <input type="hidden" name="description" value="{{ $service->description}}">
        <p>
            {{ $service->description}}
        </p>
    </div>

    <div class="mb-3">
        <label for="" style="font-size: 18px; font-weight: bold;">طالب الخدمة</label>
        <input type="hidden" name="service_requester" value="{{ Auth::user()->name }}" id="">

        <p>{{ Auth::user()->name }}</p>
    </div>

    <div class="mb-3">
        <label for="" style="font-size: 18px; font-weight: bold;">جهة تقديم الخدمة</label>
        <br>
        <select class="form-select" name="serviceProvider" aria-label="Default select example">
            <option value="وزارة النقل والمواصلات" selected>وزارة النقل والمواصلات</option>
            <option value="وزارة الاقتصاد">وزارة الاقتصاد</option>
            <option value="الدفاع المدني">الدفاع المدني</option>
        </select>
    </div>

   

    <div class="mb-2">
        <input class="btn btn-primary w-100" type="submit" value="أطلب الخدمة">
    </div>
</form>
@endsection