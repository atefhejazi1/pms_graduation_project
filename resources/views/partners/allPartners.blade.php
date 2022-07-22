@extends('layouts.dashboardLayout')
@section('title' , 'PMS - All Partners')


@section('main-section')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Partners</h6>
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

                    @foreach($partners as $partner)
                    <tr>
                        <td>{{ $x++}}</td>
                        <td>{{$partner->name}}</td>
                        <td>{{$partner->description}}</td>
                        <td><img style="width:100px; height: 100px;" src={{ asset('images/partners/' . $partner->partnerPhoto )  }} alt=""></td>
                        <td> <a href={{ url( 'partner/edit/' . $partner->id )}} class="btn btn-success">Update</a> </td>
                        <td> <a href={{ url( 'partner/delete/' . $partner->id )}} class="btn btn-danger">Delete</a> </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{ $partners->links() }}
    </div>
</div>
@endsection