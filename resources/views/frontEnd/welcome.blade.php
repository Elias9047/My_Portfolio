@extends('frontEnd.master')
@section('content')
    <section id="home-section" class="hero">
        @foreach($banners as $banner)
        <div class="home-slider owl-carousel">
            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container-fluid px-md-0">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                        <div class="one-third order-md-last img" style="background-image:url({{ $banner->image }})" >
                            <div class="overlay"></div>
                            <div class="overlay-1"></div>
                        </div>
                        <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <br>
                                <span style="font-size: 30px">{{ $banner->sub_title }}</span>
                                <h1 class="mb-4 mt-3">{{ $banner->title }}</h1>
                                <p><a href="#contact-section" class="btn btn-primary">Hire me</a> <a href="#" class="btn btn-primary btn-outline-primary">Download CV</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <section class="ftco-counter img bg-light" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-suitcase"></span>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="750">0</strong>
                            <span>Project Complete</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-loyalty"></span>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="568">0</strong>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-coffee"></span>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="478">0</strong>
                            <span>Cups of coffee</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-calendar"></span>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="780">0</strong>
                            <span>Years experienced</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            @foreach($abouts as $about)
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{  asset($about->image) }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">

                            <div class="col-md-12 heading-section ftco-animate">
                                <span class="subheading">My Intro</span>
                                <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">About Me</h2>
                                <p>{{ $about->description }}</p>

                                <ul class="about-info mt-4 px-md-0 px-2">
                                    <li class="d-flex"><span>Name:</span> <span>{{ $about->name }}</span></li>
                                    <li class="d-flex"><span>Date of birth:</span> <span>{{ $about->date_of_birth }}</span></li>
                                    <li class="d-flex"><span>Address:</span> <span>{{ $about->address }}</span></li>
                                    <li class="d-flex"><span>Email:</span> <span>{{ $about->email }}</span></li>
                                    <li class="d-flex"><span>Phone: </span> <span>{{ $about->phone }}</span></li>
                                </ul>
                            </div>

                            <div class="col-md-12">
                                <div class="my-interest d-lg-flex w-100">
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-listening"></span>
                                        </div>
                                        <div class="text">Music</div>
                                    </div>
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-suitcases"></span>
                                        </div>
                                        <div class="text">Travel</div>
                                    </div>
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-video-player"></span>
                                        </div>
                                        <div class="text">Movie</div>
                                    </div>
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-football"></span>
                                        </div>
                                        <div class="text">Sports</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="ftco-section bg-light" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Skills</span>
                    <h2 class="mb-4">My Skills</h2>
                    <p>This is my skill of language</p>
                </div>
            </div>
            <div class="row progress-circle mb-5">
                @foreach($skills as $skill)
                    <div class="col-lg-4 mb-4">
                    <div class="bg-white rounded-lg shadow p-4">
                        <h2 class="h5 font-weight-bold text-center mb-4">{{ $skill->skill_name }}</h2>

                        <!-- Progress bar 1 -->
                        <div class="progress mx-auto" data-value='{{ $skill->percent }}'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
                            <span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
                            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="h2 font-weight-bold">{{ $skill->percent }}<sup class="small">%</sup></div>
                            </div>
                        </div>
                        <!-- END -->

                        <!-- Demo info -->
                        <div class="row text-center mt-4">
                            <div class="col-6 border-right">
                                <div class="h4 font-weight-bold mb-0">{{ $skill->last_week }}%</div><span class="small text-gray">Last week</span>
                            </div>
                            <div class="col-6">
                                <div class="h4 font-weight-bold mb-0">{{ $skill->last_month }}%</div><span class="small text-gray">Last month</span>
                            </div>
                        </div>
                        <!-- END -->
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">I am grat at</span>
                    <h2 class="mb-4">We do awesome services for our clients</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-3d-design"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Web Design</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-app-development"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Web Application</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-web-programming"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Web Development</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-branding"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Banner Design</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-computer"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Branding</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-vector"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Icon Design</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-vector"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Graphic Design</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-zoom"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">SEO</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-hireme">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-8 col-lg-8 d-flex align-items-center">
                    <div class="w-100 py-4">
                        <h2>Have a project on your mind.</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly.</p>
                        <p class="mb-0"><a href="#" class="btn btn-white py-3 px-4">Contact me</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex align-items-end">
                    <img src="{{ asset('frontAsset') }}/images/author.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container-fluid px-md-4">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Accomplishments</span>
                    <h2 class="mb-4">Our Projects</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                @foreach($projects as $project)
                <div class="col-md-3">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset($project->image) }});">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">{{ $project->project_title }}</a></h3>
                            <span>{{ $project->project_name }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-primary">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
                    <span class="subheading">Testimonies</span>
                    <h2 class="mb-4">What client says about?</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{ asset('frontAsset') }}/images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{ asset('frontAsset') }}/images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{ asset('frontAsset') }}/images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{ asset('frontAsset') }}/images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{ asset('frontAsset') }}/images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2 class="mb-4">Our Blog</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="single.html" class="block-20" style="background-image: url('{{ asset('frontAsset') }}/images/image_1.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">July 03, 2020</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="single.html" class="block-20" style="background-image: url('{{ asset('frontAsset') }}/images/image_2.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">July 03, 2020</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="single.html" class="block-20" style="background-image: url('{{ asset('frontAsset') }}/images/image_3.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">July 03, 2020</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Contact us</span>
                    <h2 class="mb-4">Have a Project?</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    @if(session('session'))
                        <p class="alert alert-success">{{ session('session') }}</p>
                    @endif
                </div>
            </div>

            <div class="row block-9">
                <div class="col-md-8">
                    <form action="{{ route('clientContact') }}" method="post" class="bg-light p-4 p-md-5 contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 d-flex pl-md-5">
                    <div class="row">
                        @foreach($addresses as $address)
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="text">
                                <p><span>Address:</span>{{ $address->address }}</p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="text">
                                <p><span>Phone:</span> <a href="tel://1234567920">{{ $address->phone }}</a></p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-paper-plane"></span>
                            </div>
                            <div class="text">
                                <p><span>Email:</span> <a href="mailto:info@yoursite.com">{{ $address->email }}</a></p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-globe"></span>
                            </div>
                            <div class="text">
                                <p><span>Website</span> <a href="#">{{ $address->website }}</a></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- <div id="map" class="map"></div> -->
                </div>
            </div>
        </div>
    </section>
@endsection
