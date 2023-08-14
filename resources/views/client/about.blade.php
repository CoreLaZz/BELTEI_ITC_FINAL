@extends('client.layout.extendmain')
@section('title','BELTEI Internation Test Center')
@section('main')
<!--MAIN HEADER AREA END -->
<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
  <div class="overlay dark-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
        <div class="banner-content content-padding">
          <h1 class="text-white">Check our story</h1>
          <p>BELTEI International University and BELTEI International Test Center</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--  SECTION TEAM  -->
<section class="section-padding bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div>
          <h3 class="mb-2">Our Expert Members do the magical</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, dignissimos?</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mt-5">
        <img src="{{asset('client/images/team/team-1.jpg')}}" alt="" class="img-fluid rounded w-100">

        <ul class="list-unstyled list-inline team-social mt-4">
          <li class="list-inline-item"><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="#!"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#!"><i class="fab fa-pinterest"></i></a></li>
          <li class="list-inline-item"><a href="#!"><i class="fab fa-linkedin"></i></a></li>
          <li class="list-inline-item"><a href="#!"><i class="fab fa-google-plus"></i></a></li>
        </ul>
        <h4 class="mt-3">Ly Chheng</h4>
        <p class="mb-0">PR BELTEI</p>

      </div>
      <div class="col-lg-3 col-md-6 mt-5">
        <img src="{{asset('client/images/team/team-2.jpg')}}" alt="" class="img-fluid rounded w-100">

        <ul class="list-unstyled list-inline team-social mt-4">
          <li class="list-inline-item"><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="#!"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#!"><i class="fab fa-pinterest"></i></a></li>
          <li class="list-inline-item"><a href="#!"><i class="fab fa-linkedin"></i></a></li>
          <li class="list-inline-item"><a href="#!"><i class="fab fa-google-plus"></i></a></li>
        </ul>
        <h4 class="mt-3">ly Navuth</h4>
        <p class="mb-0">PR BELTEI</p>
      </div>

    </div>
  </div>
</section>
<!--  SECTION TEAM END  -->
 <!--  PARTNER START  -->
 <section class="section-padding ">
   <div class="container">
     <div class="row">
       <div class="col-lg-8 text-center text-lg-left">
         <div class="mb-5">
           <h3 class="mb-2">Trusted by hundred over years</h3>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, dignissimos?</p>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-lg-3 col-sm-6 col-md-3 text-center">
         <img src="{{asset('client/images/clients/client01.png')}}" alt="partner" style="height:100px" class="img-fluid">
       </div>
       <div class="col-lg-3 col-sm-6 col-md-3 text-center">
         <img src="{{asset('client/images/clients/client03.png')}}" alt="partner" style="height:100px" class="img-fluid">
       </div>
       <div class="col-lg-3 col-sm-6 col-md-3 text-center">
         <img src="{{asset('client/images/clients/client04.png')}}" alt="partner" style="height:100px" class="img-fluid">
       </div>
       <div class="col-lg-3 col-sm-6 col-md-3 text-center">
         <img src="{{asset('client/images/clients/client05.png')}}" alt="partner" style="height:100px" class="img-fluid">
       </div>
     </div>
   </div>
 </section>
 <!--  PARTNER END  -->
@endsection