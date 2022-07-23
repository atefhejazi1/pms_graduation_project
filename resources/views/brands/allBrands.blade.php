@extends('layouts.dashboardLayout')
@section('title' , 'PMS - All Brands')


@section('main-section')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Brands</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        @can('brands-edit')
                        <th>Update</th>
                        @endcan

                        @can('brands-delete')
                        <th>Delete</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $x = 1;                     ?>

                    @foreach($brands as $brand)
                    <tr>
                        <td>{{ $x++}}</td>
                        <td>{{ $brand->name}}</td>
                        <td>{{ $brand->description}}</td>
                        @can('brands-edit')
                        <td> <a href={{ url( 'brand/edit/' . $brand->id )}} class="btn btn-success">Update</a> </td>
                        @endcan

                        @can('brands-delete')
                        <td> <a href={{ url( 'brand/delete/' . $brand->id )}} class="btn btn-danger">Delete</a> </td>
                        @endcan
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{ $brands->links() }}
    </div>
</div>
@endsection