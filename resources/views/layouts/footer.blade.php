<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <h3>تواصل معنا</h3>
                <p><span><i class="fa-solid fa-phone"></i></span><a href="#">+972 592748747</a></p>
                <p><span><i class="fa-solid fa-location-dot"></i></span><a href="#">رفح , شارع الاًمام علي .</a></p>
                <p><span><i class="fa-solid fa-envelope"></i></span><a href="#">atefhejazi10@gmail.com</a></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <h3>الشركات</h3>
                <p><a href="{{url('/')}}">الرئيسية</a></p>
                <p><a href="{{url('/')}}#about">من نحن</a></p>
                <p><a href="{{url('/')}}#our-news">اخبارنا</a></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <h3>الخدمات</h3>
                @foreach($services as $service)
                <p><a href="{{ url('service/all' )}}">{{$service->name}}</a></p>
                @endforeach
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <h3>اخر الاخبار</h3>
                @foreach($blogs as $blog)
                <div class="row">

                    <div class="col=sm-12">
                        <div class="item">

                            <p><a href={{url('blog/show/' . $blog->id )}}>{{$blog->name}}</a></p>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js
    "></script>

<script src="{{ asset('js/script.js')}}"></script>
</body>

</html>