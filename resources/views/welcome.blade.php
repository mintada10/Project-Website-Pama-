<!DOCTYPE html>
<html lang="en">

@include('layouts.fontend.head')


<body>


  <!-- ====== Header ======-->
  @include('layouts.fontend.header')
  <!-- ====== Endheader ======-->



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h3>ยินดีต้อนรับสู่ร้านค้าออนไลน์ของเรา</h3>
      <h1>ร้านขายของชำป้ามา</h1>
      <img src="{{asset('fontend/img/logo_pama3.png')}}" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

  </section>
  <!-- End Hero -->



  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="{{asset('fontend/img/logo_pama2.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h2>ร้านขายของชำป้ามา</h2>
            <p class="fst-italic">
              ร้านขายของชำป้ามา เป็นร้านที่มีสินค้าเยอะ<br>
              เช่น อาหารกระป๋อง น้ำอัดลม ขนมขบเคี้ยว<br>
              สินค้าทุกอย่าจะสะอาด และราคาถูก
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->



    <!-- ======= Features Section ======= -->
    <section id="features" class="features" data-aos="fade-up">
      <div class="container">



        <div class="row content">
          <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
          @foreach($backgrounds as $background)
            <img src="{{asset('/admin/imagebackground/' . $background->image)}}" class="img-fluid" alt="">
            @endforeach
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
            <h3>ร้านขายของชำคือ</h3>
            <p>
              ร้านขายของชำหรือร้านโชห่วย (Grocery Store)<br>
              เป็นร้านค้าปลีกแบบดั้งเดิมที่เก่าแก่ที่สุดมีขนาดเล็ก<br>
              จำหน่ายสินค้าอุปโภคบริโภคให้แก่ลูกค้าที่อาศัยอยู่<br>
              บริเวณใกล้เคียงกับร้านค้า ใช้เงินทุนต่ำ ใช้แรงงานภายในครอบครัวเป็นหลัก<br>
              ระบบการจัดการไม่มีมาตรฐาน ไม่มีการจัดทำสต๊อก หรือ ทำบัญชีสินค้า<br>
              จะสั่งซื้อสินค้าเพิ่มเติมเมื่อขายสินค้าหมด<br>
              การตั้งราคาจะกำหนดตามป้ายที่ตีพิมพ์ไว้ข้าง ห่อหรือบรรจุภัณฑ์<br>
              เวลาปิด-เปิดร้านไม่แน่นอน ขึ้นอยู่กับความสะดวกของเจ้าของร้าน<br>
              และสภาพแวดล้อมเป็นสำคัญ<br>
            </p>
          </div>
        </div>

        <!--<div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/features-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>-->

        <!--<div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/img/features-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>-->

        <!-- <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/features-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div> -->

      </div>
    </section>
    <!-- End Features Section -->



    <!-- ======= Clients Section ======= -->
    <!--<section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

      <div class="section-title">
          <h2>สินค้าขายดี</h2>
        </div>

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section>-->
    <!-- End Clients Section -->



    <!-- ======= Steps Section ======= -->
    <section id="steps" class="steps">
      <div class="container">
        <div class="section-title">
          <h2>สินค้าขายดี</h2>
        </div>

        <div class="row no-gutters" data-aos="fade-up">

        @foreach($contents as $content)
          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            
            <img src="{{asset('/admin/imagecontent/' . $content->image)}}" class="img-fluid" alt="" style="width:250px">
            <h4>{{ $content->name }}</h4>
            <p>{{ $content->price }} บาท</p>
          </div>
          @endforeach

          

        </div>

      </div>
    </section><!-- End Steps Section -->



    <!-- ======= Services Section ======= -->
    <!--<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div> 

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section>-->
    <!-- End Services Section -->



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>สินค้า</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">ทั้งหมด</li>
              @foreach($types as $type)
              <li data-filter=".filter-{{ $type->id_pt }}">{{ $type->name_manu }}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          @foreach($products as $product)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $product->id_pt }}">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/images/'.$product->image)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->price }} บาท</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/images/'.$product->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $product->name }}"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->



    <!-- ======= Testimonials Section ======= -->
    <!--<section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>-->
    <!-- End testimonial item -->

    <!--<div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>-->
    <!-- End testimonial item -->

    <!--<div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div>-->
    <!-- End testimonial item -->

    <!--<div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>-->
    <!-- End testimonial item -->

    <!--<div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>-->
    <!-- End testimonial item -->

    </div>
    <div class="swiper-pagination"></div>
    </div>

    </div>
    </section>
    <!-- End Testimonials Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ช่องทางการติดต่อ</h2>
        </div>
        <div class="row">

          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class='bx bxs-watch'></i>
              <h3>วันเวลาเปิดปิด</h3>
              <p>จันทร์ - ศุกร์ 06:00 - 22:00<br>
                เสาร์ - อาทิตย์ 10:00 - 22:00</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-phone-call"></i>
              <h3>เบอร์โทรศัพท์</h3>
              <p>Phone 065-868-4878<br>
                Phone 098-594-1660</p>
            </div>
          </div>

          <div class="col-md-12">
            <div class="info-box mt-4">
              <i class="bx bx-map"></i>
              <h3>ที่อยู่</h3>
              <p>124 ซ.นนทบุรี 33 ถ.สนามบินน้ำ<br>
                ต.ท่าทราย อ.เมือง จ.นนทบุรี 11000</p>
            </div>
          </div>

          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6514.012516136118!2d100.49226692401672!3d13.883694159545481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e284dbb29a6a21%3A0x1fce3f46f4507d7c!2zMTI0IOC4i-C4reC4oiDguJnguJnguJfguJrguLjguKPguLUgMzMg4LiX4LmI4Liy4LiX4Lij4Liy4LiiIOC4reC4s-C5gOC4oOC4reC5gOC4oeC4t-C4reC4h-C4meC4meC4l-C4muC4uOC4o-C4tSDguJnguJnguJfguJrguLjguKPguLUgMTEwMDA!5e0!3m2!1sth!2sth!4v1629565696657!5m2!1sth!2sth" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>เกี่ยวกับ</h2>

          <img src="{{asset('fontend/img/logo_pamae.png')}}" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="">

          <p>
          <h4>ร้านขายของชำป้ามา<br>เป็นร้านที่บริการลูกค้ามาอย่างต่อเนื่อง และสินค้าหน้าร้านมีราคาที่ถูก
            และ คุณภาพดีความพิถีพิถันในการเลืกสินค้าทำให้สินค้าออกมาใหม่ สะอาดแน่นอน ขอบคุณครับ</h4>
          </p>
        </div>


        <div class="row">

          <div class="section-title">
            <h2>ผู้จัดทำ</h2>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{asset('fontend/img/team/tester.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sahayod Boonyoo</h4>
                  <span>Tester</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/mosszshb"><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{asset('fontend/img/team/backend.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Thanakorn Kaytang</h4>
                  <span>Font End</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/thanakorn.kawthang.1"><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{asset('fontend/img/team/fontend.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mintada Monta</h4>
                  <span>Back End</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Team Section -->



    <!-- ======= Pricing Section ======= -->
    <!--<section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>-->
    <!-- End Pricing Section -->



    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">


        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">อาหารกระป๋องอาหารสำเร็จรูป<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                เช่น ปลากระป๋อง ทูน่ากระป๋อง บะหมี่กึ่งสำเร็จรูป โจ็กคัพ เป็นต้น
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">เครื่องดื่ม<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                เช่น น้ำอัดลม น้ำเปล่า เครื่องดื่มชูกำลัง นมเปรี้ยว
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">ของใช้ประจำวัน<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                เช่น น้ำยาล้างจาน แป้ง สบู่
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">ส่วนผสมในการปรุงอาหาร<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                เช่น น้ำปลา น้ำตาล เกลือ น้ำมันพืช พริกป่น ซอสถั่วเหลือง
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->



  @include('layouts.fontend.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('fontend/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('fontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('fontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('fontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('fontend/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('fontend/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('fontend/js/main.js')}}"></script>

</body>

</html>