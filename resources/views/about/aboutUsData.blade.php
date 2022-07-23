@extends('layouts.dashboardLayout')
@section('title' , 'PMS - About Us')


@section('main-section')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">About Us</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Photo</th>
                        @can('about-edit')
                        <th>Update</th>
                        @endcan
                        @can('about-delete')
                        <th>Delete</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $x = 1;                     ?>

                    @foreach($aboutUsData as $aboutData)
                    <tr>
                        <td>{{ $x++}}</td>
                        <td>{{ $aboutData->title}}</td>
                        <td>{{ $aboutData->description}}</td>
                        <td><img style="width:100px; height: 100px;" src={{ asset('images/about/' . $aboutData->aboutPhoto )  }} alt=""></td>
                        @can('about-edit')
                        <td> <a href={{ url( 'about/edit/' . $aboutData->id )}} class="btn btn-success">Update</a> </td>
                        @endcan
                        @can('about-delete')
                        <td> <a href={{ url( 'about/delete/' . $aboutData->id )}} class="btn btn-danger">Delete</a> </td>
                        @endcan
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{ $aboutUsData->links() }}
    </div>
</div>
@endsection