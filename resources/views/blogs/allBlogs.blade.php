@extends('layouts.dashboardLayout')
@section('title' , 'PMS - All Blogs')


@section('main-section')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Blogs</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">id_dept</th>
                        <th scope="col">Photo</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $x = 0;                     ?>

                    @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $x++}}</td>
                        <td>{{$blog->name}}</td>
                        <td>{{$blog->description}}</td>
                        <td>{{ $blog->departments->name }}</td>
                        <td><img style="width:100px; height: 100px;" src={{ asset('images/blogs/' . $blog->blogPhoto )  }} alt=""></td>
                        <td> <a href={{ url( 'blog/edit/' . $blog->id )}} class="btn btn-success">Update</a> </td>
                        <td> <a href={{ url( 'blog/delete/' . $blog->id )}} class="btn btn-danger">Delete</a> </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{ $blogs->links() }}
    </div>
</div>
@endsection