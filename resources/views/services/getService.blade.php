@extends('layouts.dashboardLayout')
@section('title' , 'PMS - Request services')


@section('main-section')

<div class="container text-center">
    <div class="row">
        @foreach($services as $service)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="bg-white p-4">
                <img style="width:90%; height: 150px;" src={{ asset('images/services/' . $service->servicePhoto )  }} alt="">
                <h2 class="mt-2 fs-5">{{$service->name}}</h2>
                <p>{{$service->description}}</p>
              <a href={{ url( 'service/requestService/' . $service->id )}} class="btn btn-primary w-100">إطلب الخدمة</a>

            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- DataTales Example -->
<!-- <div class="card shadow mb-4">
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
                        <th scope="col">Photo</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $x = 1;                     ?>

                    @foreach($services as $service)
                    <tr>
                        <td>{{ $x++}}</td>
                        <td>{{$service->name}}</td>
                        <td>{{$service->description}}</td>
                        <td><img style="width:100px; height: 100px;" src={{ asset('images/services/' . $service->servicePhoto )  }} alt=""></td>
                        <td> <a href={{ url( 'service/edit/' . $service->id )}} class="btn btn-success">Update</a> </td>
                        <td> <a href={{ url( 'service/delete/' . $service->id )}} class="btn btn-danger">Delete</a> </td>
                    </tr>
                    @endforeach
        {{ $services->links() }}

                </tbody>
            </table>
        </div>
    </div>
</div> -->
@endsection