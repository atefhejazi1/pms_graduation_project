@extends('layouts.dashboardLayout')
@section('title' , 'PMS - All Departments')


@section('main-section')
<form action={{ url('blog/update') }} method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-2">
        <input type="hidden" name="blog_id" value={{ $blog->id}}>

        <input class="form-control form-control-sm"  type="text" name="name" value="{{ $blog->name }}" placeholder="Blog Name">
    </div>



    <div class="mb-3">
        <label for="blogDescription" class="form-label">Blog Description</label>
        <textarea class="form-control" name="description" id="blogDescription" rows="8">{{ $blog->description}}</textarea>
    </div>

    <div class="mb-2">
        <img style="width:100px; height: 100px;" src={{ asset('images/blogs/' . $blog->blogPhoto )  }} alt="">
        <input class="form-control form-control-sm" name="blogPhoto" type="file">
    </div>

    <div class="mb-2">
        <select name="id_dept">
            @foreach($departments as $department)
            <option value={{$department->id}}> {{$department->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-2">
        <input class="btn btn-success" type="submit">
    </div>
</form>
@endsection