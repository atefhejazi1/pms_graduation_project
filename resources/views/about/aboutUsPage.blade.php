@include('layouts.header')


<div class="container my-5" dir="rtl">

    <img style="width:100%; height: 300px;" src={{ asset('images/about/' . $aboutUsData->aboutPhoto )  }} alt="">

    <h1>{{$aboutUsData->title}}</h1>

    <p>
        {{$aboutUsData->description}}
    </p>



</div>
@include('layouts.footer')