@extends('client.layout.extendmain')
@section('title', 'BELTEI Internation Test Center')
@section('main')

    <!--  SERVICE PARTNER START  -->
    <section id="service-head" class="service-style-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12 m-auto">
                    <div class="heading text-white text-center">
                        <h4 class="section-title text-white">Our Service</h4>
                        <p>Bridging Cambodian students to the world which is full of high technology in accordance with the
                            globe’s tendency and circumstance nowadays.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  SERVICE PARTNER END  -->
    <!--  SERVICE AREA START  -->
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="service-box">
                        <div class="service-img-ion">
                            <img style="height:100px" src="{{asset('client/images/clients/client01.png')}}" alt="service-icon" class="img-fluid">
                        </div>
                        <div class="service-inner">
                            <h4>TEOFL</h4>
                            <p>Programs at BELTEI IU offer a wide range of majors in the filed of study, ranging from education to business, to international
                               development and policy and to international/global studies.</span>
                                solution.</p>
                        </div>
                        <a href="">
                          <button class="btn btn-primary">Enrollment</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="service-box ">
                        <div class="service-img-ion">
                            <img style="max-height:100px" src="{{asset('client/images/clients/client03.png')}}" alt="service-icon" class="img-fluid">
                        </div>
                        <div class="service-inner">
                          <h4>IELTS</h4>
                          <p>Programs at BELTEI IU offer a wide range of majors in the filed of study, ranging from education to business, to international
                             development and policy and to international/global studies.</span>
                              solution.</p>
                        </div>
                        <a href="">
                          <button class="btn btn-primary">Enrollment</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="service-box">
                        <div class="service-img-ion">
                            <img style="max-height:100px" src="{{asset('client/images/clients/client04.png')}}" alt="service-icon" class="img-fluid">
                        </div>
                        <div class="service-inner">
                          <h4>SIMCC</h4>
                          <p>Programs at BELTEI IU offer a wide range of majors in the filed of study, ranging from education to business, to international
                             development and policy and to international/global studies.</span>
                              solution.</p>
                        </div>
                        <a href="">
                          <button class="btn btn-primary">Enrollment</button>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--  SERVICE AREA END  -->
@endsection
