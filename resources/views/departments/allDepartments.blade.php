@extends('layouts.dashboardLayout')
@section('title' , 'PMS - All Departments')


@section('main-section')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Departments</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        @can('departments-edit')
                        <th>Update</th>
                        @endcan
                        @can('departments-delete')
                        <th>Delete</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $x = 0;                     ?>

                    @foreach($departments as $dept)
                    <tr>
                        <td>{{ $x++}}</td>
                        <td>{{ $dept->name}}</td>
                        <td>{{ $dept->description}}</td>
                        @can('departments-edit')
                        <td> <a href={{ url( 'department/edit/' . $dept->id )}} class="btn btn-success">Update</a> </td>
                        @endcan
                        @can('departments-delete')
                        <td> <a href={{ url( 'department/delete/' . $dept->id )}} class="btn btn-danger">Delete</a> </td>
                        @endcan
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{ $departments->links() }}
    </div>
</div>
@endsection