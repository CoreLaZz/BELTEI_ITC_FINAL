@extends('client.layout.extendmain')
@section('title','BELTEI Internation Test Center')
@section('main')

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
  <div class="overlay dark-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
        <div class="banner-content content-padding">
          <h1 class="text-white">Let's Connect with us</h1>
          {{-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, perferendis?</p> --}}
        </div>
      </div>
    </div>
  </div>
</div>
<!--MAIN HEADER AREA END -->
<!--  Contact START  -->
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-12 col-md-12">
        <div class="mb-5">
          <h2 class="mb-2">Get in touch</h2>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 col-sm-12">
        <form class="contact__form" method="post" action="mail.php">
          <!-- form message -->
          <div class="row">
            <div class="col-12">
              <div class="alert alert-success contact__msg" style="display: none" role="alert">
                Your message was sent successfully.
              </div>
            </div>
          </div>
          <!-- end message -->
          <div class="row">
            <div class="col-md-6 form-group">
              <input name="name" type="text" class="form-control" placeholder="Name" required>
            </div>
            <div class="col-md-6 form-group">
              <input name="email" type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="col-md-12 form-group">
              <input name="subject" type="text" class="form-control" placeholder="Subject" required>
            </div>
            <div class="col-12 form-group">
              <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
            </div>
            <div class="col-12 mt-4">
              <input name="submit" type="submit" class=" btn btn-hero btn-circled" value="Send Message">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-5 pl-4 mt-4 mt-lg-0">
        <h4>Office Address</h4>
        <p class="mb-3">BELTEI International University (Campus 1, Tuol Sleng)</p>
        <h4>Contact Info</h4>
        <p class="mb-3">
          078 555 507</p>
        <h4>Contact Mail</h4>
        <p class="mb-3">info@beltei.edu.kh</p>
        <h4>Website</h4>
        <p>www.belteigroup.com.kh</p>
      </div>
    </div>
  </div>
</section>
<!--  CONTACT END  -->

<!--  Google Map START  -->
<div id="map" data-latitude="11.5476849" data-longitude="104.9162692" ></div>
<!--  Google Map END  -->
@endsection