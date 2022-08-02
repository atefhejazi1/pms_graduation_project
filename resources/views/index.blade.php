@include('layouts.header')




<section class="carousel">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/petrol-stations/04.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/petrol-stations/08.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/petrol-stations/03.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<section class="hero_section">
    <div class="data">
        <div class="container">
            <div class="row">
                <?php
                $i = 0;
                ?>
                @foreach($brands as $brand)
                <?php $i++; ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    @if ($i === 2)
                    <div class="item item1">
                        @else
                        <div class="item">
                            @endif

                            <h4>{{$brand->name}}</h4>
                            <h5 class="h5_word">
                                {{$brand->description}}
                            </h5>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
</section>

@foreach($aboutUsData as $aboutData)
<section class="About" id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img src={{ asset('images/about/' . $aboutData->aboutPhoto )  }} alt="">
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="grid_data">
                    <h1>{{$aboutData->title}}</h1>
                    <p>
                        {{ Str::limit($aboutData->description, 500) }}
                    </p>
                    <a href={{ url('about/show/' .$aboutData->id )}} class="btn1">قراءة المزيد</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach

<section class="Services" id="our-services">

    <div class="container">
        <h1>خدماتنا</h1>
        <h2></h2>
        <center>
            <div class="row">
                @foreach($services as $service)
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="{{url('service/all')}}">
                        <div class="data_inner">
                            <center>
                                <img src={{ asset('images/services/' . $service->servicePhoto )  }} alt="">
                                <h3>{{$service->name}}</h3>
                                <!-- <p> {{$service->description}}</p> -->
                                <p> {{ Str::limit($service->description, 170) }}</p>

                            </center>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
    </div>
    </center>

</section>


<marquee>
    <div class="container">
        <div class="row">
            @foreach ($partners as $partner)
            <div class="col-sm">
                <img class="d-block w-100" src={{ asset('images/partners/' . $partner->partnerPhoto )  }}>

            </div>
            @endforeach
        </div>
    </div>
</marquee>




<section class="item_inner" id="our-news">

    <div class="container">
        <h1>اخبارنا</h1>
        <h2></h2>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col=sm-12 col-md-6 col-lg-4">
                <a href={{ url('blog/show/' . $blog->id )}}>
                    <div class="item">
                        <center>
                            <img src={{ asset('images/blogs/' . $blog->blogPhoto )  }}>
                            <h5>{{$blog->name}}</h5>
                            <!-- <p>{{$blog->description}}</p> -->
                            <p> {{ Str::limit($blog->description, 100) }}</p>
                        </center>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>


<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d54411.061168327025!2d34.48504323552029!3d31.53263685884611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z2K7YsdmK2LfYqSDZhdit2LfYp9iqINin2YTZiNmC2YjYryDZgdmKINi62LLYqQ!5e0!3m2!1sar!2s!4v1656347956190!5m2!1sar!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<section class="offers" id="offers">

    <div class="container">
        <h1>العروض</h1>
        <h2></h2>
        <div class="row">
            <?php $i = 1 ?>
            <div class="data_inner">
                @foreach($offers as $offer)
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-2">
                            <h4>{{ $i++}}</h4>
                        </div>
                        <div class="col-sm-10">
                            <h3>{{$offer->name}}</h3>
                            <p> {{$offer->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</section>


<section class="contact" id="contact">

    <div class="container">
        <h1>تواصل معنا </h1>
        <h2></h2>
        @if (session('contactMsg'))
        <div class="alert alert-primary" style="direction: rtl;">
            {{ session('contactMsg') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <center>
            <div class="form_contact">
                <form action="{{ url('/contact/store')}}" method="POST" class="row g-3">
                    @csrf

                    <div class="col-md-6">
                        <input type="text" name="firstName" placeholder="الأسم الأول" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="secondName" placeholder="الأسم الثاني" class="form-control " id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <input type="email" name="email" class="form-control" placeholder="البريد الألكتروني">
                    </div>
                    <div class="col-12">
                        <input type="text" name="phoneNumber" class="form-control" placeholder="رقم الهاتف">
                    </div>
                    <div class="col-md-12">
                        <input type="text" name="subject" class="form-control w-100" id="inputCity" placeholder="الموضوع" style="padding-bottom:100px; width: 100%;">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn send-message w-100">أرسل الرسالة</button>
                    </div>
                </form>
            </div>
        </center>
    </div>
</section>


@include('layouts.footer')