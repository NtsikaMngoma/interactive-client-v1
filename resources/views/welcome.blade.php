<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body id="homepage" class="custom-bg-1">
    <div id="wrapper">
        @include('layouts.navbar')

        <!-- content begin -->
        <div id="content" class="no-bg no-bottom no-top text-light">
            <div id="particles-js" class="fixed"></div>
            <div id="top"></div>

            <!-- section begin -->
            <section id="section-hero" class="no-bg full-height relative no-top no-bottom text-white" data-stellar-background-ratio=".2">
                <div class="overlay-bg t30">
                    <div class="center-y fadeScroll relative" data-scroll-speed="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="spacer-double"></div>
                                    <h3 class="mb20">We are Mergisa, the Business Informatics Specialists</h3>

                                    <div class="h1_big text-white">The<br> Data
                                        <div class="typed-strings">
                                            <p>Enthusiasts</p>
                                            <p>Experts</p>
                                            <p>Miners</p>
                                            <p>Engineers</p>
                                            <p>Specialists</p>
                                        </div>
                                        <div class="typed"></div>
                                    </div>

                                    <div class="spacer-double"></div>
                                    <a href="#section-portfolio" class="btn btn-custom color-2" style="font-family: 'Nunito'">See Our Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="section-about" class="no-bg no-top no-bottom">
                <div class="overlay-bg t30">
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h5><span class="id-color">About Us</span></h5>
                                <h2>Welcome the Data Centre</h2>
                            </div>
                            <div class="col-md-8 col-md-offset-2 text-center" style="color: cornsilk">
{{--                                @foreach($listAllPersons as $persons)--}}
{{--                                    <p>{{$persons}} </p>--}}
{{--                                @endforeach--}}
                            </div>
                        </div>

                        <div class="spacer-single"></div>

                        <!--                    <div class="row">-->
                        <!--                        <div class="col-md-4">-->
                        <!--                            <div class="skill-bar style-2">-->
                        <!--                                <h5>Informatics</h5>-->
                        <!--                                <div class="de-progress">-->
                        <!--                                    <div class="value"></div>-->
                        <!--                                    <div class="progress-bar" data-value="80%">-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <!--                            <div class="skill-bar style-2">-->
                        <!--                                <h5>Analytics</h5>-->
                        <!--                                <div class="de-progress">-->
                        <!--                                    <div class="value"></div>-->
                        <!--                                    <div class="progress-bar" data-value="70%">-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <!--                        </div>-->

                        <!--                        <div class="col-md-4">-->
                        <!--                            <div class="skill-bar style-2">-->
                        <!--                                <h5>Marketing</h5>-->
                        <!--                                <div class="de-progress">-->
                        <!--                                    <div class="value"></div>-->
                        <!--                                    <div class="progress-bar" data-value="70%">-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <!--                            <div class="skill-bar style-2">-->
                        <!--                                <h5>Development</h5>-->
                        <!--                                <div class="de-progress">-->
                        <!--                                    <div class="value"></div>-->
                        <!--                                    <div class="progress-bar" data-value="90%">-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <!--                        </div>-->

                        <!--                        <div class="col-md-4">-->
                        <!--                            <div class="skill-bar style-2">-->
                        <!--                                <h5>Photography</h5>-->
                        <!--                                <div class="de-progress">-->
                        <!--                                    <div class="value"></div>-->
                        <!--                                    <div class="progress-bar" data-value="90%">-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <!--                            <div class="skill-bar style-2">-->
                        <!--                                <h5>SEO</h5>-->
                        <!--                                <div class="de-progress">-->
                        <!--                                    <div class="value"></div>-->
                        <!--                                    <div class="progress-bar" data-value="75%">-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <!--                        </div>-->
                        <!--                    </div>-->
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-services" class="no-bg no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="overlay-bg t30">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h5><span class="id-color">Our Services</span></h5>
                                <h2>We are always here to assist you!</h2>

                                <div id="carousel-3" class="sequence" data-anim="fadeInUp">

                                    <!-- feature box begin -->
                                    <div class="feature-box col-md-4 carousel-item sq-item wow">
                                        <div class="inner">
                                            <i class="icon_lightbulb_alt id-color"></i>
                                            <div class="text">
                                                <h3>Organizational Informatics</h3>
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- feature box close -->

                                    <!-- feature box begin -->
                                    <div class="feature-box col-md-4 carousel-item sq-item wow">
                                        <div class="inner">
                                            <i class="icon_datareport id-color"></i>
                                            <div class="text">
                                                <h3>Analytics</h3>
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- feature box close -->

                                    <!-- feature box begin -->
                                    <div class="feature-box col-md-4 carousel-item sq-item wow">
                                        <div class="inner">
                                            <i class="icon_bag_alt id-color"></i>
                                            <div class="text">
                                                <h3>Big Data</h3>
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- feature box close -->

                                    <!-- feature box begin -->
                                    <div class="feature-box col-md-4 carousel-item sq-item wow">
                                        <div class="inner">
                                            <i class="icon_calculator_alt id-color"></i>
                                            <div class="text">
                                                <h3>Quantitative Management</h3>
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- feature box close -->

                                    <!-- feature box begin -->
                                    <div class="feature-box col-md-4 carousel-item sq-item wow">
                                        <div class="inner">
                                            <i class="icon_pencil-edit id-color"></i>
                                            <div class="text">
                                                <h3>Social Informatics</h3>
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- feature box close -->

                                    <!-- feature box begin -->
                                    <div class="feature-box col-md-4 carousel-item sq-item wow">
                                        <div class="inner">
                                            <i class="icon_datareport_alt id-color"></i>
                                            <div class="text">
                                                <h3>Economics</h3>
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- feature box close -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-portfolio" class="no-bg no-top no-bottom">
                <div class="overlay-bg t30">
                    <div class="container">

                        <!-- portfolio filter begin -->
                        <div class="row">

                            <div class="col-md-12 text-center">
                                <h5><span class="id-color">Portfolio</span></h5>
                                <h2>We empower businesses</h2>
                            </div>

                            <div class="col-md-12 text-center mt50">
                                <ul id="filters">
                                    <li><a href="#" data-filter="*" class="selected">all projects</a></li>
                                    <li><a href="#" data-filter=".illustration">illustration</a></li>
                                    <li><a href="#" data-filter=".mobile">mobile</a></li>
                                    <li><a href="#" data-filter=".photography">photography</a></li>
                                    <li><a href="#" data-filter=".website">website</a></li>
                                </ul>




                                <div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_3_cols grid sequence">

                                    <!-- gallery item -->
                                    <div class="item illustration website gallery-item">
                                        <div class="picframe wow">
                                            <a class="image-popup" href="{{asset('images/portfolio-bw/pf%20(1).jpg')}}">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
                                                <img src="{{asset('images/portfolio-bw/pf%20(1).jpg')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- close gallery item -->

                                    <!-- gallery item -->
                                    <div class="item photography gallery-item">
                                        <div class="picframe wow">
                                            <a class="image-popup" href="{{'images/portfolio-bw/pf%20(2).jpg'}}">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
                                                <img src="{{'images/portfolio-bw/pf%20(2).jpg'}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- close gallery item -->

                                    <!-- gallery item -->
                                    <div class="item illustration gallery-item">
                                        <div class="picframe wow">
                                            <a class="image-popup" href="{{'images/portfolio-bw/pf%20(3).jpg'}}">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
                                                <img src="{{'images/portfolio-bw/pf%20(3).jpg'}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- close gallery item -->

                                    <!-- gallery item -->
                                    <div class="item photography illustration mobile gallery-item">
                                        <div class="picframe wow">
                                            <a class="image-popup" href="{{'images/portfolio-bw/pf%20(4).jpg'}}">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
                                                <img src="{{'images/portfolio-bw/pf%20(4).jpg'}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- close gallery item -->

                                    <!-- gallery item -->
                                    <div class="item photography mobile website gallery-item">
                                        <div class="picframe wow">
                                            <a class="image-popup" href="{{'images/portfolio-bw/pf%20(5).jpg'}}">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
                                                <img src="{{'images/portfolio-bw/pf%20(5).jpg'}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- close gallery item -->

                                    <!-- gallery item -->
                                    <div class="item mobile website gallery-item">
                                        <div class="picframe wow">
                                            <a class="image-popup" href="{{'images/portfolio-bw/pf%20(6).jpg'}}">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
                                                <img src="{{'images/portfolio-bw/pf%20(6).jpg'}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- close gallery item -->

                                </div>
                            </div>
                            <!-- portfolio filter close -->

                        </div>
                    </div>
                </div>


            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-experiences" class="no-bg no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="overlay-bg t30">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="padding20 wow fadeInRight">
                                    <h2>Experiences</h2>
                                    <div class="exp-box">
                                        <h5>2014 - now</h5>
                                        <h3>Fulltime Freelancer</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                                    </div>
                                    <div class="exp-box">
                                        <h5>2010 - 2014</h5>
                                        <h3>Creative Director at Pixar Studio</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                    </div>
                                    <div class="exp-box">
                                        <h5>2006 - 2010</h5>
                                        <h3>Web Designer at Microsoft</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="padding20 wow fadeInRight" data-wow-delay=".25s">
                                    <h2>Education</h2>
                                    <div class="exp-box">
                                        <h5>2014</h5>
                                        <h3>Specialize App Design, Harvard University</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                                    </div>
                                    <div class="exp-box">
                                        <h5>2010</h5>
                                        <h3>Master of Design, University of California</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                    </div>
                                    <div class="exp-box">
                                        <h5>2006</h5>
                                        <h3>Bachelor of Arts, Standford University</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-testimonial" class="no-bg no-top no-bottom">
                <div class="overlay-bg t30">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h5><span class="id-color">Testimonials</span></h5>
                                <h2>What they say!</h2>
                            </div>


                            <div id="testimonial-carousel" class="de_carousel sequence" data-wow-delay=".3s">

                                <div class="col-md-6 item sq-item wow">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <div class="de_testi_by">
                                                <img src="{{'images/people/1.jpg'}}" class="img-circle" alt="">
                                                <span>John, Pixar Studio</span>
                                            </div>
                                            <p>"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"</p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="col-md-6 item sq-item wow">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <div class="de_testi_by">
                                                <img src="{{'images/people/2.jpg'}}" class="img-circle" alt="">
                                                <span>Sarah, Microsoft</span>
                                            </div>
                                            <p>"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"</p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="col-md-6 item sq-item wow">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <div class="de_testi_by">
                                                <img src="{{'images/people/3.jpg'}}" class="img-circle" alt="">
                                                <span>Michael, Apple</span>
                                            </div>
                                            <p>"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"</p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="col-md-6 item sq-item wow">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <div class="de_testi_by">
                                                <img src="{{'images/people/4.jpg'}}" class="img-circle" alt="">
                                                <span>Thomas, Samsung</span>
                                            </div>
                                            <p>"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-fun-facts" class="pt60 pb60 text-light bg-gradient">
                <div class="container">

                    <div class="row">
                        <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                            <div class="de_count">
                                <h3 class="timer" data-to="8240" data-speed="2500">0</h3>
                                <span>Hours of Works</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                            <div class="de_count">
                                <h3 class="timer" data-to="315" data-speed="2500">0</h3>
                                <span>Projects Done</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                            <div class="de_count">
                                <h3 class="timer" data-to="250" data-speed="2500">0</h3>
                                <span>Satisfied Customers</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                            <div class="de_count">
                                <h3 class="timer" data-to="32" data-speed="2500">0</h3>
                                <span>Awards Winning</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-contact" class="no-bg no-top no-bottom">
                <div class="overlay-bg t30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h5><span class="id-color">Have Question?</span></h5>
                                <h2>Contact Us</h2>
                            </div>

                            <div class="col-md-8 col-md-offset-2 wow fadeInUp">
                                <div class="row">
                                    <form name="contactForm" id='contact_form' method="post" action='email.php'>
                                        <div class="col-md-6">
                                            <div class="field-set">
                                                <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                                <div class="line-fx"></div>
                                            </div>

                                            <div class="field-set">
                                                <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                                <div class="line-fx"></div>
                                            </div>

                                            <div class="field-set">
                                                <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                                <div class="line-fx"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="field-set">
                                                <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                                <div class="line-fx"></div>
                                            </div>
                                        </div>

                                        <div class="spacer-single"></div>

                                        <div class="col-md-12 text-center">
                                            <div id='submit'>
                                                <input style="font-family: 'Nunito'" type='submit' id='send_message' value='Submit Form' class="btn btn-custom color-2">
                                            </div>
                                            <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                            <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                        </div>
                                    </form>
                                </div>

                                <div class="spacer-double"></div>

                                <div class="row text-center wow fadeInUp">
                                    <div class="col-md-4">
                                        <div class="wm-1"></div>
                                        <i class="icon_mobile id-color size40 mb20"></i>
                                        <h6 class="id-color">Call Us</h6>
                                        <h4 style="font-family: 'Nunito'">(031) 100 8096</h4>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="wm-1"></div>
                                        <i class="icon_house_alt id-color size40 mb20"></i>
                                        <h6 class="id-color">Address</h6>
                                        <h4 style="font-family: 'Nunito'">1 Old Main Road, Kloof</h4>
                                    </div>

                                    <div class="col-md-4">

                                        <div class="wm-1"></div>
                                        <i class="icon_mail_alt id-color size40 mb20"></i>
                                        <h6 class="id-color">Email Us</h6>
                                        <h4 style="font-family: 'Nunito'">info@mergisa.com</h4>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>


        </div>
        <!-- content close -->

        @include('layouts.footer')
    </div>
</body>
</html>
