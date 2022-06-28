@include('layouts.header')

<section class="form_contact">
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-7">
          <div class="data_contact">
            <h2>
              يرجى ملء النموذج التالي
            </h2>
            <form action="{{ url('contact/store') }}" method="POST">
              @csrf
              <input type="text" name="name" placeholder="الاسم"> <br>
              <input type="text" name="email" placeholder="الايميل"> <br>
              <input type="text" name="subject" placeholder="الموضوع">
              <input type="text" name="description" class="input_message" placeholder="الرسالة">
              <button type="submit">ارسال</button>
            </form>
          </div>
        </div>


        <div class="col-sm-12 col-md-12 col-lg-5">
          <div class="item_contact">
            <div class="offices">
              <h3><i class="fa-solid fa-location-dot"></i>مكتبنا</h3>
              <p>لا يوجد مكتب فعلي على ارض الواضع ولكن يمكن ان يكون بالمستقبل</p>
            </div>
            <hr>


            <div class="email">
              <h3><i class="fa-solid fa-envelope"></i>البريد الإلكتروني</h3>
              <p>atefhejazi10@gmail.com</p>
            </div>
            <hr>


            <div class="whatsapp">
              <h3><i class="fa-solid fa-phone"></i>رقم التواصل</h3>
              <p>+972592748747</p>
            </div>

            <hr>

            <div class="icon">
              <h3>Social Media</h3>
              <i class="fa-brands fa-facebook-f"></i></>
              <h6 class="twitter"><i class="fa-brands fa-twitter"></i></h6>
              <i class="fa-brands fa-instagram"></i></h6>
              <i class="fa-brands fa-linkedin-in"></i></h6>
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@include('layouts.footer')