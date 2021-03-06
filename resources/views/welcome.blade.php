<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hospital Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">-->


    </head>
    <body>

          <!--  @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
          -->
          <header>
           <div class="head-row container">
               <div class="container">
                  <div class="row">
                      <div class="col-md-3 logocol">
                           <img src="{{URL::asset('/images/logo.jpg')}}" alt="">
                           <a class="navbar-toggler d-block d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                             <i class="bi bi-list"></i>
                         </a>
                       </div>
                       <div id="navbarNav" class="col-md-9 d-none d-md-block infocol">
                           <div class="row d-none d-sm-block float-end info-row">
                               <ul>
                                   <li><i class="far fa-envelope"></i> support@smarteyeapps.com</li>
                                   <li><i class="fas fa-mobile-alt"></i> +91 9159669599</li>
                               </ul>
                           </div>
                           <div class="nav-row ">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="/login">Login</a></li>
                                    <li><a href="/register">Register</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                           </div>
                       </div>
                  </div>

               </div>
           </div>
       </header>

    <!--     Slider Code-->

    <div class="slider container-fluid">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{URL::asset('/images/s3.jpg')}}" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                <h3 class="animate__animated animate__backInLeft">Care with Most Advanced Technology</h3>
                <p class="animate__animated animate__backInRight">Some representative placeholder content for the first slide. The implant fixture is first placed, so that it is likely to osseointegrate</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{URL::asset('/images/s2.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h3 class="animate__animated animate__backInLeft">Care with Most Advanced Technology</h3>
                <p class="animate__animated animate__backInRight">Some representative placeholder content for the first slide. The implant fixture is first placed, so that it is likely to osseointegrate</p>
              </div>
            </div>

          </div><a href="about.html" title="about"></a>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>

    <!--     Appointment Booking Bos-->

    <div class="container-fluid booking-container">
        <div class="container">
            <div class="col-md-10 mx-auto">
                <form class="form-control" method="post" action="/appoinmentaddprocess">
                  @csrf
                  <div class="booking-box row">
                      <div class="col-md-4">
                          <input type="text" name="name" placeholder="Enter Name" class="form-control">
                      </div>
                      <div class="col-md-4">
                          <input type="text" name="pemail" placeholder="Enter Email Address" class="form-control">
                      </div>
                      <div class="col-md-4">
                          <input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control">
                      </div>
                      <div class="col-md-4">
                          <input type="text" name="address" placeholder="Enter Address" class="form-control">
                      </div>
                      <div class="col-md-4">
                          <input type="date" name="date" placeholder="Select Date" class="form-control">
                      </div>
                      <div class="col-md-4">
                         <button class="btn btn-primary w-100" type="submit" name="submit">Add Apointmetn</button>
                      </div>
                  </div>
                </form>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>


<!--    Services Starts Here   -->

<section class="services container-fluid">
    <div class="container">
        <div class="row section-title">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper in magna quis tincidunt. Donec at nisi et eros blandit elementum fermentum eget augue</p>
        </div>
        <div class="servic-row row">
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="{{URL::asset('/images/001.png')}}" alt="">
                    <h4>Dental Implants</h4>
                    <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                </div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="{{URL::asset('/images/002.png')}}" alt="">
                    <h4>Maxillofacial Surgery</h4>
                    <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                </div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="{{URL::asset('/images/003.png')}}" alt="">
                    <h4>Endodontics</h4>
                    <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                </div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="{{URL::asset('/images/004.png')}}" alt="">
                    <h4>Intervention Dentistry</h4>
                    <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                </div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="{{URL::asset('/images/005.png')}}" alt="">
                    <h4>Braces</h4>
                    <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                </div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="{{URL::asset('/images/006.png')}}" alt="">
                    <h4>Teeth Whitening</h4>
                    <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--    Team Member Starts Here   -->


<section id="teacher" class="team-member pt-5 contaienr-fluid">
        <div class="container">
             <div class="session-title">
                <h2>Our Team</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod <br> tempor invidunt ut labore et dolore magna aliquyam.</p>
            </div>
             <div class="team-row team row">
              <div class="team-col col-md-3">
                <div class="teamdiv">
                   <div class="image-part">
                        <img src="{{URL::asset('/images/d4.jpg')}}" alt="">
                   </div>
                   <div class="detail-part">
                     <h3>Joney James</h3>
                     <span>Team Leader</span>
                     <p>Various versions have evolved over the years,  purpose (injected humour and the like).</p>
                     <div class="social-links">
                        <a href="#" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" tabindex="-1"><i class="fab fa-twitter"></i></a>
                        <a href="#" tabindex="-1"><i class="fab fa-google"></i></a>
                        <a href="#" tabindex="-1"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                   </div>
                </div>
              </div>
              <div class=" team-col col-md-3">
                <div class="teamdiv">
                   <div class="image-part">
                        <img src="{{URL::asset('/images/d3.jpg')}}" alt="">
                   </div>
                   <div class="detail-part">
                     <h3>James Anderson</h3>
                     <span>Team Leader</span>
                     <p>Various versions have evolved over the years,  on purpose (injected humour and the like).</p>
                     <div class="social-links">
                        <a href="#" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" tabindex="-1"><i class="fab fa-twitter"></i></a>
                        <a href="#" tabindex="-1"><i class="fab fa-google"></i></a>
                        <a href="#" tabindex="-1"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                   </div>
                </div>
              </div>
              <div class=" team-col col-md-3">
                <div class="teamdiv">
                   <div class="image-part">
                        <img src="{{URL::asset('/images/d2.jpg')}}" alt="">
                   </div>
                   <div class="detail-part">
                     <h3>James Anderson</h3>
                     <span>Team Leader</span>
                     <p>Various versions have evolved over the years,  on purpose (injected humour and the like).</p>
                     <div class="social-links">
                        <a href="#" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" tabindex="-1"><i class="fab fa-twitter"></i></a>
                        <a href="#" tabindex="-1"><i class="fab fa-google"></i></a>
                        <a href="#" tabindex="-1"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                   </div>
                </div>
              </div>
               <div class=" team-col col-md-3">
                <div class="teamdiv">
                   <div class="image-part">
                        <img src="{{URL::asset('/images/d1.jpg')}}" alt="">
                   </div>
                   <div class="detail-part">
                     <h3>James Anderson</h3>
                     <span>Team Leader</span>
                     <p>Various versions have evolved over the years,  on purpose (injected humour and the like).</p>
                     <div class="social-links">
                        <a href="#" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" tabindex="-1"><i class="fab fa-twitter"></i></a>
                        <a href="#" tabindex="-1"><i class="fab fa-google"></i></a>
                        <a href="#" tabindex="-1"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                   </div>
                </div>
              </div>
            </div>
        </div>
 </section>

<section class="bg-06">
    <div class="container">
        <div class="row">
             <div class="session-title">
                <h2>Our Blog</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod <br> tempor invidunt ut labore et dolore magna aliquyam.</p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <article class="blog-sub">
                    <div class="blog-content">
                        <img src="{{URL::asset('/images/b1.jpg')}}">
                    </div>
                    <div class="blog-content-section">
                        <div class="blo-content-title">
                            <h4>The National Minimum Wage Is An Important Part</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut
                                praesentium
                                facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo
                                fugit
                                animi assumenda.</p>
                        </div>
                        <div class="blog-admin">
                            <ol>
                                <li><i class="far fa-user"></i> By Admin</li>
                                <li><i class="far fa-calendar-alt"></i> july 28, 2020</li>
                            </ol>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <article class="blog-sub">
                    <div class="blog-content">
                        <img src="{{URL::asset('/images/b2.jpg')}}">
                    </div>
                    <div class="blog-content-section">
                        <div class="blo-content-title">
                            <h4>The National Minimum Wage Is An Important Part</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut
                                praesentium
                                facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo
                                fugit
                                animi assumenda.</p>
                        </div>
                        <div class="blog-admin">
                            <ol>
                                <li><i class="far fa-user"></i> By Admin</li>
                                <li><i class="far fa-calendar-alt"></i> july 28, 2020</li>
                            </ol>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <article class="blog-sub">
                    <div class="blog-content">
                        <img src="{{URL::asset('/images/b3.jpg')}}">
                    </div>
                    <div class="blog-content-section">
                        <div class="blo-content-title">
                            <h4>The National Minimum Wage Is An Important Part</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores aut
                                praesentium
                                facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in blanditiis, nemo
                                fugit
                                animi assumenda.</p>
                        </div>
                        <div class="blog-admin">
                            <ol>
                                <li><i class="far fa-user"></i> By Admin</li>
                                <li><i class="far fa-calendar-alt"></i> july 28, 2020</li>
                            </ol>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 about">
                <h2>About Us</h2>
                <p>Phasellus scelerisque ornare nisl sit amet pulvinar. Nunc non scelerisque augue. Proin et sollicitudin velit. </p>

                <div class="foot-address">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="addet">
                        BlueDart
                        Marthandam (K.K District)
                        Tamil Nadu, IND
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                        <i class="far fa-envelope-open"></i>
                    </div>
                    <div class="addet">
                        info@smarteyeapps.com <br>
                        sales@smarteyeapps.com
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                       <i class="fas fa-mobile-alt"></i>
                   </div>
                   <div class="addet">
                    +23 323 43434 <br>
                    +1 3232 434 55
                </div>
            </div>
        </div>
        <div class="col-md-3 fotblog">
            <h2>From latest Blog</h2>
            <div class="blohjb">
                <p>dignissim. Integer tempor facilisis malesuada. Proin ac varius velit, tincidunt condimentum</p>
                <span>22-1-2019</span>
            </div>
            <div class="blohjb">
                <p>dignissim. Integer tempor facilisis malesuada. Proin ac varius velit, tincidunt condimentum</p>
                <span>22-1-2019</span>
            </div>
            <div class="blohjb">
                <p>dignissim. Integer tempor facilisis malesuada. Proin ac varius velit, tincidunt condimentum</p>
                <span>22-1-2019</span>
            </div>
        </div>
        <div class="col-md-3 glink">
            <ul>
                <li><a href="index.html"><i class="fas fa-angle-double-right"></i>Home</a></li>
                <li><a href="about_us.html"><i class="fas fa-angle-double-right"></i>About Us</a></li>
                <li><a href="services.html"><i class="fas fa-angle-double-right"></i>Services</a></li>
                <li><a href="blog.html"><i class="fas fa-angle-double-right"></i>Blog</a></li>
                <li><a href="pricing.html"><i class="fas fa-angle-double-right"></i>Gallery</a></li>
                <li><a href="contact_us.html"><i class="fas fa-angle-double-right"></i>Contact Us</a></li>
            </ul>
        </div>
        <div class="col-md-3 tags">
            <h2>Easy Tags</h2>
            <ul>
                <li>Finance</li>
                <li>Web Design</li>
                <li>Internet Pro</li>
                <li>Node Js</li>
                <li>Java Swing</li>
                <li>Angular Js</li>
                <li>Vue Js</li>
            </ul>
        </div>
    </div>
</div>
</footer>
<div class="copy">
    <div class="container">
        <a href="https://www.smarteyeapps.com/">2015 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps</a>
        <span>
            <a><i class="fab fa-github"></i></a>
            <a><i class="fab fa-google-plus-g"></i></a>
            <a><i class="fab fa-pinterest-p"></i></a>
            <a><i class="fab fa-twitter"></i></a>
            <a><i class="fab fa-facebook-f"></i></a>
        </span>
    </div>
</div>
    </body>
</html>
