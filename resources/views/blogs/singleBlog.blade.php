@include('layouts.header')


<div class="container my-5" dir="rtl">

    <img style="width:100%; height: 300px;" src={{ asset('images/blogs/' . $blog->blogPhoto )  }} alt="">
    <h2>{{ $blog->name }}</h2>


    <p>
        {{ $blog->description}}
    </p>




</div>
@include('layouts.footer')