@extends('layouts.dashboardLayout')
@section('title' , 'PMS - All Users')


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
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $x = 1;                     ?>

                    @foreach($users as $user)
                    <tr>
                        <td>{{ $x++}}</td>
                        <td>{{$user->name}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection