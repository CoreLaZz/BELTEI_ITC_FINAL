@extends('client.layout.extendmain')
@section('title', 'BELTEI Internation Test Center')
@section('main')
    <!--MAIN BANNER AREA START -->
    <div class="page-banner-area page-contact" id="page-banner">
        <div class="overlay dark-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                    <div class="banner-content content-padding">
                        <h1 class="text-white">Latest news</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, perferendis?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MAIN HEADER AREA END -->

    <section class="section blog-wrap ">
        <div class="container">
          <div class="col-lg-12">
            <div class="row mt-5 mt-lg-0">
                <div class="col-lg-12">
                    <div class="sidebar-widget search">
                        <div class="form-group">
                            <input type="text" placeholder="search" class="form-control">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post">
                                <img src="{{asset('client/images/blog/blog-1.jpg')}}" alt="" class="w-100">
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase">BELTEI</span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span>19 jun 18</span>
                                    </div>
                                </div>
                                <a href="{{route('mainnews')}}" class="h4 ">online meeting with the management of Secure English Languages Test (SELT)</a>
                                <p class="mt-3">H.E. LY Navuth, Deputy Director-General of BELTEI Group and Manager of BELTEI International Test Center attended the online meeting with the management
                                     of Secure English Languages Test (SELT), which originated in the United Kingdom to discuss the possibility of having SELT at BELTEI International Test Center to provide 
                                     the testing services to the students or test takers who aim to measure their English proficiency, apply for overseas studies and apply for Visa to the UK. This meeting
                                      was held on Thursday, August 03, 2023.</p>
                                <a href="{{route('mainnews')}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post">
                                <img src="{{asset('client/images/blog/blog-2.jpg')}}" alt="" class="w-100">
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase">BELTEI</span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span>19 jun 18</span>
                                    </div>
                                </div>
                                <a href="{{route('mainnews')}}" class="h4 ">cooperation with Singapore International Mastery Contests Centre</a>
                                <p class="mt-3">BELTEI International University and BELTEI International Test Center in cooperation with Singapore International Mastery Contests Centre,
                                     organized Design Thinking with Robotics and Computational Thinking International Competition 2023 (DrCT 2023) for 15 students from 9 Schools in 
                                     Phnom Penh, Cambodia. The competition is held on July 29, 2023 at BELTEI International University Campus 1 (Tuol Sleng).</p>
                                <a href="{{route('mainnews')}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <img src="{{asset('client/images/blog/blog-lg.jp')}}g" alt="" class="w-100">
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase">BELTEI</span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span>19 jun 18</span>
                                    </div>
                                </div>
                                <a href="{{route('mainnews')}}" class="h4 ">Robotics and Computational Thinking International Competition 2023 (DrCT 2023)</a>
                                <p class="mt-3">Announcement on Design Thinking with Robotics and Computational Thinking International Competition 2023 (DrCT 2023) for students from 
                                    grade 1-12 which will be held on July 29, 2023 at BELTEI International University Campus 1 (Tuol Sleng).
                                    ចុះឈ្មោះឥឡូវនេះ / Register NOW!</p>
                                <a href="{{route('mainnews')}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post">
                                <img src="{{asset('client/images/blog/blog-3.jpg')}}" alt="" class="w-100">
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase">BELTEI</span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span>19 jun 18</span>
                                    </div>
                                </div>
                                <a href="{{route('mainnews')}}" class="h4 ">Singapore & Asian Schools Math Olympiad 2023 (SASMO 2023)</a>
                                <p class="mt-3">Result of Singapore & Asian Schools Math Olympiad 2023 (SASMO 2023). The competition was held on Saturday, March 25, 2023 at BELTEI
                                     International University Campus 2 (Chom Chao Flyover).
                                    Congratulations 🎉✨👏</p>
                                <a href="{{route('mainnews')}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post">
                                <img src="{{asset('client/images/blog/blog-4.jpg')}}" alt="" class="w-100">
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase">BELTEI</span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span>19 jun 18</span>
                                    </div>
                                </div>
                                <a href="{{route('mainnews')}}" class="h4 ">Birthday Celebration of Her Royal Highness Queen Mother Norodom Monineath Sihanouk</a>
                                <p class="mt-3">On the auspicious occasion of the 88th Birthday Celebration of Her Royal Highness Queen Mother Norodom Monineath Sihanouk,
                                     we sincerely offer our prayers to the sacred objects, the soul of the former King, to bestow upon Her Majesty many blessings, prosperity,
                                      long life and reign over the citizens of Cambodia.</p>
                                <a href="{{route('mainnews')}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
