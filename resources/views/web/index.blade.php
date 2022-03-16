@extends('web.layout.template')

@section('title', 'Home')

@section('content')
      <section class="home-slide d-flex align-items-center">
        <div class="container">
          <div class="row ">
            <div class="col-md-6 d-flex align-items-center">
              <div class="home-slide-face aos" data-aos="fade-up">
                <div class="home-slide-text ">
                  <a href="dashboard.html" class="btn bg-stop-learn">Never Stop Learning</a>
                  <h1>Online Courses <br>to <span>Learn</span></h1>
                  <p>Own your future learning new skills online</p>
                </div>
                <div class="search-box">
                  <form action="https://cpeakup.com/">
                    <div class="form-group search-info location-search">
                      <input type="text" class="form-control text-truncate" placeholder="Search Location | Search School, Online educational centers, etc">
                      <a href="search.html" class="btn bg-search search-btn align-items-center d-flex justify-content-center">Search now</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-end">
              <div class="girl-slide-img aos" data-aos="fade-up">
                <img src="{{ asset(env('ASSETS_PATH').'assets/web/img/girl.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="most-popular">
        <div class="container">
          <div class="section-header section-head-one text-center aos " data-aos="fade-up">
            <h2>Most Populer Categories</h2>
            <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
          </div>
          <div class="popular-categories aos" data-aos="fade-up">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6">
                <a href="search.html">
                  <div class="sub-categories d-flex align-items-center">
                    <div class="categories-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/web/img/categories/rec-1.png') }}" alt="">
                    </div>
                    <div class="categories-text ">
                      <h4>Design</h4>
                      <span>Over <b>2,500</b> Courses</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="search.html">
                  <div class="sub-categories d-flex align-items-center">
                    <div class="categories-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/web/img/categories/rec-2.png') }}" alt="">
                    </div>
                    <div class="categories-text ">
                      <h4>Digital Marketer</h4>
                      <span>Over <b>5,500</b> Courses</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="search.html">
                  <div class="sub-categories d-flex align-items-center">
                    <div class="categories-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/categories/rec-3.png') }}" alt="">
                    </div>
                    <div class="categories-text ">
                      <h4>Photography</h4>
                      <span>Over <b>2,540</b> Courses</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="search.html">
                  <div class="sub-categories d-flex align-items-center">
                    <div class="categories-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/categories/rec-4.png') }}" alt="">
                    </div>
                    <div class="categories-text ">
                      <h4>IT Security</h4>
                      <span>Over <b>2,750</b> Courses</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="search.html">
                  <div class="sub-categories d-flex align-items-center">
                    <div class="categories-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/categories/rec-5.png') }}" alt="">
                    </div>
                    <div class="categories-text ">
                      <h4>Research</h4>
                      <span>Over <b>2,150</b> Courses</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="search.html">
                  <div class="sub-categories d-flex align-items-center">
                    <div class="categories-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/categories/rec-6.png') }}" alt="">
                    </div>
                    <div class="categories-text ">
                      <h4>Finance</h4>
                      <span>Over <b>2,840</b> Courses</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="search.html">
                  <div class="sub-categories d-flex align-items-center">
                    <div class="categories-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/categories/rec-7.png') }}" alt="">
                    </div>
                    <div class="categories-text ">
                      <h4>Business</h4>
                      <span>Over <b>2,500</b> Courses</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="search.html">
                  <div class="sub-categories d-flex align-items-center">
                    <div class="categories-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/categories/rec-8.png') }}" alt="">
                    </div>
                    <div class="categories-text ">
                      <h4>Computer Science</h4>
                      <span>Over <b>5,500</b> Courses</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="search.html">
                  <div class="sub-categories d-flex align-items-center">
                    <div class="categories-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/categories/rec-9.png') }}" alt="">
                    </div>
                    <div class="categories-text ">
                      <h4>Maths & logics</h4>
                      <span>Over <b>2,540</b> Courses</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="explore-more text-center">
              <a href="search.html" class="btn bg-explore">Explore More</a>
            </div>
          </div>
        </div>
      </section>
      <section class="section trending-courses">
        <div class="container">
          <div class="section-header section-head-one text-center aos " data-aos="fade-up">
            <h2>Most Trending Courses</h2>
            <p class="sub-title">They are highly qualified and trained in their areas</p>
          </div>
          <div class="owl-carousel mentoring-course trending-course owl-theme aos " data-aos="fade-up">
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-06.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">Introduction Learn – LMS plugin</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      $200
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>85</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>85</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user2.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-04.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">From Zero to Hero with Nodejs</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      Free
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>75</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>75</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user3.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">3.3<span class="rate-star-point">(12)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-05.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">Learn Python – Interactive Free Tu...</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      $100
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>80</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>80</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user4.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">4.3<span class="rate-star-point">(13)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-02.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">Your Guide to Photography And Free</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      Free
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>90</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>90</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user5.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">4.5<span class="rate-star-point">(18)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-01.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">Learn Javascript – Interactive Tu...</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      $100
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>80</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>80</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user6.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">4.3<span class="rate-star-point">(13)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-02.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">From Zero to Hero with Angular</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      $300
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>85</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>85</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user7.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-03.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">Learn Angular – Interactive Tu...</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      Free
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>75</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>75</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user8.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">3.3<span class="rate-star-point">(12)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-04.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">From Zero to Hero with Web Developer</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      $200
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>85</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>85</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user9.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-05.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">Learn NodeJs – Interactive Free Tu...</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      Free
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>90</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>90</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user10.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">4.5<span class="rate-star-point">(18)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-06.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">From Zero to Hero with Angular</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      $200
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>75</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>75</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user11.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">3.3<span class="rate-star-point">(12)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-02.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">Your Guide to Photoshop Learn</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      $300
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>95</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>95</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user12.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">4.5<span class="rate-star-point">(18)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-03.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">Learn CorelDraw – Interactive Tu...</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      $200
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>85</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>85</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user13.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-box">
              <div class="product">
                <div class="product-img">
                  <a href="search.html">
                  <img class="img-fluid" alt="" src="{{ asset(env('ASSETS_PATH').'assets/img/course/img-04.jpg') }}" width="600" height="300">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="search.html">Your Guide to Frendend Developer</a></h3>
                  <div class="course-info d-flex align-items-center">
                    <div class="course-price">
                      $300
                    </div>
                    <div class="course-view">
                      <i class="fas fa-file-alt"></i>
                      <div class="course-point">
                        <span>80</span>
                      </div>
                      <i class="fas fa-user-graduate"></i>
                      <div class="graduate-point">
                        <span>80</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating rating-star">
                    <div class="rating-img">
                      <img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user14.jpg') }}" alt="">
                    </div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star"></i>
                    <span class="d-inline-block average-rating rate-point ">4.3<span class="rate-star-point">(13)</span></span>
                  </div>
                  <div class="author-join">
                    <a href="login.html" class="btn join-now">Join Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="trend-explore-more text-center aos " data-aos="fade-up">
            <a href="search.html" class="btn bg-explore">Explore More</a>
          </div>
        </div>
      </section>
      <section class="featured-instructor">
        <div class="container">
          <div class="section-header section-head-one text-center aos " data-aos="fade-up">
            <h2>Featured Instructor</h2>
            <p class="sub-title">They are highly qualified and trained in their areas</p>
          </div>
          <div class="featured-instructor-head aos " data-aos="fade-up">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="large-team">
                  <div class="student-img">
                    <a href="profile.html"><img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user16.png') }}" alt=""></a>
                  </div>
                  <div class="view-student">
                    <ul class="view-student-list justify-content-center">
                      <li><i class="fas fa-users"></i></li>
                      <li>50 Students</li>
                      <li><i class="fas fa-file-alt"></i></li>
                      <li>85</li>
                    </ul>
                  </div>
                  <div class="team-name text-center">
                    <h4>
                      <a href="profile.html">David Lee</a>
                    </h4>
                    <span class="designation">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="large-team">
                  <div class="student-img">
                    <a href="profile.html"><img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user17.png') }}" alt=""></a>
                  </div>
                  <div class="view-student">
                    <ul class="view-student-list justify-content-center">
                      <li><i class="fas fa-users"></i></li>
                      <li>60 Students</li>
                      <li><i class="fas fa-file-alt"></i></li>
                      <li>95</li>
                    </ul>
                  </div>
                  <div class="team-name text-center">
                    <h4>
                      <a href="profile.html">Daziy Millar</a>
                    </h4>
                    <span class="designation">PHP Expert</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="large-team">
                  <div class="student-img">
                    <a href="profile.html"><img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user18.png') }}" alt=""></a>
                  </div>
                  <div class="view-student">
                    <ul class="view-student-list justify-content-center">
                      <li><i class="fas fa-users"></i></li>
                      <li>45 Students</li>
                      <li><i class="fas fa-file-alt"></i></li>
                      <li>75</li>
                    </ul>
                  </div>
                  <div class="team-name text-center">
                    <h4>
                      <a href="profile.html">James</a>
                    </h4>
                    <span class="designation">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="large-team">
                  <div class="student-img">
                    <a href="profile.html"><img src="{{ asset(env('ASSETS_PATH').'assets/img/user/user19.png') }}" alt=""></a>
                  </div>
                  <div class="view-student">
                    <ul class="view-student-list justify-content-center">
                      <li><i class="fas fa-users"></i></li>
                      <li>70 Students</li>
                      <li><i class="fas fa-file-alt"></i></li>
                      <li>95</li>
                    </ul>
                  </div>
                  <div class="team-name text-center">
                    <h4>
                      <a href="profile.html">David Lee</a>
                    </h4>
                    <span class="designation">UI Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="become-instructor text-center aos " data-aos="fade-up">
            <a href="profile.html" class="btn become-instructor-bg">Become an Instructor</a>
          </div>
        </div>
      </section>
      <section class="join-mentor">
        <div class="container">
          <div class="row">
            <div class="col-lg-6  d-flex align-items-end">
              <div class="join-mentor-img aos " data-aos="fade-up">
                <img src="assets/img/join.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 ">
              <div class="head-join-us aos " data-aos="fade-up">
                <div class="join-mentor-detail">
                  <h2>Want to share your knowledge? Join us a Mentor</h2>
                  <p class="join-sub-text">High-definition video is video of higher resolution and quality than standard-definition. While there is no standardized meaning for high-definition, generally any video.</p>
                  <div class="find-more ">
                    <a href="search.html" class="btn bg-find">Find More</a>
                  </div>
                </div>
                <div class="best-course-detail">
                  <h2>Best Courses</h2>
                  <p class="join-sub-text">Courses for all levels cover technical skills, creative techniques, business strategies, and more. We have collected all of the necessary effective study.</p>
                  <div class="find-more ">
                    <a href="search.html" class="btn bg-find">Find More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="student-say-about testimonial-section">
        <div class="container">
          <div class="section-header section-head-one text-center about-space aos " data-aos="fade-up">
            <h2>What our happy Students say about us</h2>
            <p class="sub-title">They are highly qualified and trained in their areas</p>
          </div>
          <div class="col-lg-12 col-md-12 text-center d-flex justify-content-center">
            <div id="myCarousel" class="carousel slide student-slide-testimoni aos " data-aos="fade-up" data-bs-interval="5000" data-bs-ride="carousel">
              <div class="student-bg-fix">
                <img src="assets/img/testi-bg-3.png" alt="">
              </div>
              <div class="carousel-inner">
                <div class="carousel-item testi-item say-us active" data-color="#fb9c9a" data-img="img/testimonial/1.html">
                  <div class="student-group">
                    <div class="student-about-img">
                      <img src="assets/img/user/user20.png" alt="">
                    </div>
                    <h3>Hannah Schmitt</h3>
                    <span>Lead designer</span>
                    <p class="say-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim </p>
                    <div class="rating">
                      <i class="fa fa-star filled"></i>
                      <i class="fa fa-star filled"></i>
                      <i class="fa fa-star filled"></i>
                      <i class="fa fa-star filled"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="carousel-item testi-item say-us" data-color="#fbd39a" data-img="img/testimonial/2.html">
                  <div class="student-group">
                    <div class="student-about-img">
                      <img src="assets/img/user/user21.png" alt="">
                    </div>
                    <h3>John Doe</h3>
                    <span>Web Developer</span>
                    <p class="say-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim </p>
                    <div class="rating">
                      <i class="fa fa-star filled"></i>
                      <i class="fa fa-star filled"></i>
                      <i class="fa fa-star filled"></i>
                      <i class="fa fa-star filled"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="carousel-item testi-item say-us" data-color="#9ab0fb" data-img="img/testimonial/3.html">
                  <div class="student-group">
                    <div class="student-about-img">
                      <img src="assets/img/user/user20.png" alt="">
                    </div>
                    <h3>Mark Huff</h3>
                    <span>UI designer</span>
                    <p class="say-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim </p>
                    <div class="rating">
                      <i class="fa fa-star filled"></i>
                      <i class="fa fa-star filled"></i>
                      <i class="fa fa-star filled"></i>
                      <i class="fa fa-star filled"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev student-testimonial-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
              <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next student-testimonial-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <i class="fa fa-angle-right" aria-hidden="true"></i>
              <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </section>
      <section class="new-course">
        <div class="container">
          <div class="new-course-background">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="new-course-img aos " data-aos="fade-up">
                  <img src="assets/img/course.png" alt="new course">
                </div>
              </div>
              <div class="col-lg-8 col-md-6 d-flex align-items-center">
                <div class="every-new-course aos " data-aos="fade-up">
                  <div class="new-course-text">
                    <h1>For Get Update <br>Every New Courses</h1>
                    <p class="page-sub-text ">20k+ students daily learn with Mentoring. Subscribe for new courses.</p>
                  </div>
                  <div class="course-mail">
                    <form action="#">
                      <div class="input-group mb-3 subscribe-form">
                        <input type="text" class="form-control course-text-bg" placeholder="Enter your mail">
                        <a href="search.html" class="btn bg-course-subscribe">
                        Subscribe
                        </a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@stop
