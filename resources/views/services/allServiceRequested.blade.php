@extends('layouts.dashboardLayout')
@section('title' , 'PMS - All services')


@section('main-section')
@if (session('statusServiceRequest'))
<div class="alert alert-success">
    {{ session('statusServiceRequest') }}
</div>
@endif


@if (session('active'))
<div class="alert alert-primary">
    {{ session('active') }}
</div>
@endif


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All services</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Service Requester</th>
                        <th scope="col">Service Provider</th>
                        <th scope="col">Active</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $x = 1;                     ?>

                    @foreach($requestServices as $requestService)
                    <tr>
                        <td>{{ $x++}}</td>
                        <td>{{$requestService->name}}</td>
                        <td>{{$requestService->description}}</td>
                        <td>{{$requestService->service_requester}}</td>
                        <td>{{$requestService->serviceProvider}}</td>

                        @if ($requestService->isActive === 1)
                        <td> <a href="{{ url( 'service/active/' . $requestService->id )}}" class="btn btn-primary">Active It</a> </td>
                        @else
                        <td> <a href="{{ url( 'service/active/' . $requestService->id )}}" class="btn btn-success">Activated</a> </td>
                        @endif

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection