@extends('layouts.dashboardLayout')
@section('title' , 'PMS - All services')


@section('main-section')

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
                        <th scope="col">Photo</th>
                        @can('services-edit')
                        <th>Update</th>
                        @endcan
                        @can('services-delete')
                        <th>Delete</th>
                        @endcan
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
                        @can('services-edit')
                        <td> <a href={{ url( 'service/edit/' . $service->id )}} class="btn btn-success">Update</a> </td>
                        @endcan
                        @can('services-delete')
                        <td> <a href={{ url( 'service/delete/' . $service->id )}} class="btn btn-danger">Delete</a> </td>
                        @endcan
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{ $services->links() }}
    </div>
</div>
@endsection