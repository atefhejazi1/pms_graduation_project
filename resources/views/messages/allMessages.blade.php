@extends('layouts.dashboardLayout')
@section('title' , 'PMS - All Messages')


@section('main-section')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Messages</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Second Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $x = 1;                     ?>

                    @foreach($messages as $message)
                    <tr>
                        <td>{{ $x++}}</td>
                        <td>{{ $message->firstName}}</td>
                        <td>{{ $message->secondName}}</td>
                        <td>{{ $message->email}}</td>
                        <td>{{ $message->phoneNumber}}</td>
                        <td>{{ $message->subject}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{ $messages->links() }}
    </div>
</div>
@endsection