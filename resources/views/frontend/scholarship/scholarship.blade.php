@extends("layouts.main")
@section('container')
    <!-- Our Recent Projects -->
    <section class="g-py-100">
    <!-- Carousel Slider -->
      <div class="js-carousel u-carousel-v5"
        style="background-color:grey"
        data-infinite="true"
        data-autoplay="true"
        data-speed="8000"
        data-pagi-classes="u-carousel-indicators-v34 g-absolute-centered--y g-left-auto g-right-30 g-right-100--md"
        data-calc-target="#js-header">
      </div>
      <!-- Carousel Slides -->

      <!-- Nav tabs -->
      <ul class="nav justify-content-end u-nav-v1-1 u-nav-dark g-mb-20" role="tablist" data-target="nav-1-1-dark-hor-right" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-darkgray g-mb-20">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#nav-1-1-dark-hor-right--1" role="tab">Scholarship</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#nav-1-1-dark-hor-right--2" role="tab">Sholarship Alumni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#nav-1-1-dark-hor-right--3" role="tab">Scholarship Advisor</a>
        </li>
      </ul>
      <!-- End Nav tabs -->

      <!-- start scholarship -->
        <div id="nav-1-1-dark-hor-right" class="tab-content">
          <div class="tab-pane fade show active" id="nav-1-1-dark-hor-right--1" role="tabpanel">
            <div class="container">
          
            <header class="g-mb-50">
              <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
                <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">Scholarship Programe</h2>
              </div>
              <p class="g-font-size-16">Included Over 2000+ UI Components tvero eos et accusamus et iusto odio dignissimos 
                ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
                quas moles.
                Included Over 2000+ UI Components tvero eos et accusamus et iusto odio dignissimos 
                ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
                quas moles.
                Included Over 2000+ UI <a> Components tvero eos et accusamus</a> et iusto odio dignissimos 
                ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
                quas moles.</p>
            </header>

            <div class="u-heading-v1-1 g-brd-gray-light-v2 g-mb-20" style="background-color: #ffffff !important;">
              <h2 class="h3 u-heading-v1__title"><Strong>Up Comming Scholarship</Strong></h2>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 g-mb-30 g-mb-0--lg">
              <article class="u-block-hover u-shadow-v21 rounded">
                <figure class="u-bg-overlay g-bg-black-opacity-0_4--after">
                  <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="{{$img}}" alt="Image description">
                </figure>

                <header class="u-bg-overlay__inner g-pos-abs g-top-30 g-right-30 g-left-30 g-color-white">
                  <h3 class="h4">
                      <a class="g-color-white" href="#">Unify Template</a>
                    </h3>
                  <p>Consectetur adipiscing elitut eleifend nisl</p>
                </header>

                <ul class="list-inline u-bg-overlay__inner g-pos-abs g-bottom-10 g-left-30 g-opacity-0_8">
                  <li class="list-inline-item">
                    <div class="g-brd-around g-brd-2 g-brd-white rounded-circle">
                      <img class="g-width-30 g-height-30 rounded-circle" src="../../assets/img-temp/100x100/img12.jpg" alt="Image description">
                    </div>
                  </li>
                  <li class="list-inline-item g-ml-minus-20">
                    <div class="g-brd-around g-brd-2 g-brd-white rounded-circle">
                      <img class="g-width-30 g-height-30 rounded-circle" src="../../assets/img-temp/100x100/img5.jpg" alt="Image description">
                    </div>
                  </li>
                  <li class="list-inline-item g-ml-minus-20">
                    <div class="g-brd-around g-brd-2 g-brd-white rounded-circle">
                      <img class="g-width-30 g-height-30 rounded-circle" src="../../assets/img-temp/100x100/img7.jpg" alt="Image description">
                    </div>
                  </li>
                  <li class="list-inline-item g-font-weight-600 g-color-white">+21</li>
                </ul>
              </article>
            </div>

            <div class="col-lg-4 col-md-6 g-mb-30 g-mb-0--lg">
              <article class="u-block-hover u-shadow-v21 rounded">
                <figure class="u-bg-overlay g-bg-black-opacity-0_4--after">
                  <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="{{$img}}" alt="Image description">
                </figure>

                <header class="u-bg-overlay__inner g-pos-abs g-top-30 g-right-30 g-left-30 g-color-white">
                  <h3 class="h4">
                      <a class="g-color-white" href="#">Htmlstream Freebies</a>
                    </h3>
                  <p>Consectetur adipiscing elitut eleifend nisl</p>
                </header>

                <ul class="list-inline u-bg-overlay__inner g-pos-abs g-bottom-10 g-left-30 g-opacity-0_8">
                  <li class="list-inline-item">
                    <div class="g-brd-around g-brd-2 g-brd-white rounded-circle">
                      <img class="g-width-30 g-height-30 rounded-circle" src="/assets/img-temp/100x100/img7.jpg" alt="Image description">
                    </div>
                  </li>
                  <li class="list-inline-item g-ml-minus-20">
                    <div class="g-brd-around g-brd-2 g-brd-white rounded-circle">
                      <img class="g-width-30 g-height-30 rounded-circle" src="/assets/img-temp/100x100/img4.jpg" alt="Image description">
                    </div>
                  </li>
                  <li class="list-inline-item g-ml-minus-20">
                    <div class="g-brd-around g-brd-2 g-brd-white rounded-circle">
                      <img class="g-width-30 g-height-30 rounded-circle" src="/assets/img-temp/100x100/img5.jpg" alt="Image description">
                    </div>
                  </li>
                  <li class="list-inline-item g-font-weight-600 g-color-white">+42</li>
                </ul>
              </article>
            </div>

            <div class="col-lg-4 col-md-6">
              <article class="u-block-hover u-shadow-v21 rounded">
                <figure class="u-bg-overlay g-bg-black-opacity-0_4--after">
                  <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="{{$img}}" alt="Image description">
                </figure>

                <header class="u-bg-overlay__inner g-pos-abs g-top-30 g-right-30 g-left-30 g-color-white">
                  <h3 class="h4">
                      <a class="g-color-white" href="#">Pixeel Ltd.</a>
                    </h3>
                  <p>Consectetur adipiscing elitut eleifend nisl</p>
                </header>

                <ul class="list-inline u-bg-overlay__inner g-pos-abs g-bottom-10 g-left-30 g-opacity-0_8">
                  <li class="list-inline-item">
                    <div class="g-brd-around g-brd-2 g-brd-white rounded-circle">
                      <img class="g-width-30 g-height-30 rounded-circle" src="/assets/img-temp/100x100/img5.jpg" alt="Image description">
                    </div>
                  </li>
                  <li class="list-inline-item g-ml-minus-20">
                    <div class="g-brd-around g-brd-2 g-brd-white rounded-circle">
                      <img class="g-width-30 g-height-30 rounded-circle" src="../../assets/img-temp/100x100/img7.jpg" alt="Image description">
                    </div>
                  </li>
                  <li class="list-inline-item g-ml-minus-20">
                    <div class="g-brd-around g-brd-2 g-brd-white rounded-circle">
                      <img class="g-width-30 g-height-30 rounded-circle" src="../../assets/img-temp/100x100/img6.jpg" alt="Image description">
                    </div>
                  </li>
                  <li class="list-inline-item g-font-weight-600 g-color-white">+15</li>
                </ul>
              </article>
            </div>
          </div>
          </div>
        </div>
      <!-- end scholarship -->

      <!-- start scholarshihp alumni -->
        <div class="tab-pane fade" id="nav-1-1-dark-hor-right--2" role="tabpanel">

          <!-- alumni_scholar_pro -->
          <div class="container">
            <div class="row">
              <div class="col-6 col-md-4 g-mb-0">
                <!-- Search Form -->
                  <form>
                    <select class="form-control form-control-md form-control-lg rounded-0 g-mb-25">
                      <option>Large select</option>
                      <option value="1">Value One</option>
                      <option value="3">Value Two</option>
                      <option value="3">Value Three</option>
                    </select>
                  </form>
                <!-- End Search Form -->
              </div>
            </div>
            <div class="row">
              <div class="col-4 col-md-4 g-mb-0">
                <figure class="u-bg-overlay g-bg-black-opacity-0_4--after">
                  <img class="rounded-circle g-width-50 g-height-50" src="../../assets/img-temp/100x100/img4.jpg" alt="Image Description">  
                </figure>
              </div>
              <div class="col-8 col-md-8 g-mb-0">
                <!-- Default Outline Panel-->
                <div class="card card-outline-info rounded-0 ">
                  <h3 class="card-header h5 rounded-0">
                    <i class="fa fa-tasks g-font-size-default g-mr-5"></i>
                    Scholarship Award
                  </h3>
                  <div class="row">
                    <div class="col-4 col-md-4 g-mb-0" style="height:100%">

                      <!-- Figure -->
                        <figure class="u-block-hover u-shadow-v19 g-bg-white g-rounded-4 g-pa-15">
                          <img class="rounded-circle g-width-100 g-height-100" src="../../assets/img-temp/100x100/img4.jpg" alt="Image Description">
                          <div class="d-flex justify-content-start">
                            <!-- Figure Image -->
                            
                            <!-- Figure Image -->

                            <!-- Figure Info -->
                            <div class="d-block">
                              <div class="g-mb-5">
                                <h4 class="h5 g-mb-0">Natasha Kolnikova</h4>
                                <em class="d-block g-color-primary g-font-style-normal g-font-size-default">Employee</em>
                              </div>
                              <em class="d-block g-color-gray-dark-v5 g-font-style-normal g-font-size-13 g-mb-2">natasha@gmail.com</em>
                            </div>
                            <!-- End Figure Info -->
                            
                            <!-- Figure Caption -->
                              <figcaption class="u-block-hover__additional--fade g-bg-white-opacity-0_9 g-pa-30">
                                <div class="u-block-hover__additional--fade u-block-hover__additional--fade-down g-flex-middle">
                                  <!-- Figure Social Icons -->
                                  <ul class="list-inline text-center g-flex-middle-item">
                                    <li class="list-inline-item align-middle g-mx-7">
                                      <a class="u-icon-v1 u-icon-size--md g-color-gray-dark-v5 g-color-primary--hover" href="#">
                                        <i class="icon-finance-067 u-line-icon-pro"></i>
                                      </a>
                                    </li>
                                    <li class="list-inline-item align-middle g-mx-7">
                                      <a class="u-icon-v1 u-icon-size--md g-color-gray-dark-v5 g-color-primary--hover" href="#">
                                        <i class="icon-finance-206 u-line-icon-pro"></i>
                                      </a>
                                    </li>
                                    <li class="list-inline-item align-middle g-mx-7">
                                      <a class="u-icon-v1 u-icon-size--md g-color-gray-dark-v5 g-color-primary--hover" href="#">
                                        <i class="icon-communication-062 u-line-icon-pro"></i>
                                      </a>
                                    </li>
                                    <li class="list-inline-item align-middle g-mx-7">
                                      <a class="u-icon-v1 u-icon-size--md g-color-gray-dark-v5 g-color-primary--hover" href="#">
                                        <i class="icon-electronics-005 u-line-icon-pro"></i>
                                      </a>
                                    </li>
                                  </ul>
                                  <!-- End Figure Social Icons -->
                                </div>
                              </figcaption>
                            <!-- End Figure Caption -->
                          </div>
                        </figure>
                     <!-- End Figure -->

                    </div>
                    <div class="card-block col-8 col-md-8 g-mb-0">
                      <strong><h3 class="h3">Australia Scholarship</h3></strong>
                      <p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    </div>
                  </div>
                </div>
              <!-- End Default Outline Panel-->
              </div>
            </div>
            <div class="contain">
              <header class="g-mb-50">
                <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
                  <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">Scholarship Programe</h2>
                </div>
                <span class="g-font-size-16">
                Included Over 2000+ UI Components tvero eos et accusamus et iusto odio dignissimos 
                ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
                quas moles.
                Included Over 2000+ UI Components tvero eos et accusamus et iusto odio dignissimos 
                ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
                quas moles.
                Included Over 2000+ UI <a> Components tvero eos et accusamus</a> et iusto odio dignissimos 
                ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
                quas moles.
                
                </span>
              </header>

              <header class="g-mb-50">
                <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
                  <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">Life overthere</h2>
                </div>
                <span class="g-font-size-16">
                Included Over 2000+ UI Components tvero eos et accusamus et iusto odio dignissimos 
                ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
                quas moles.
                Included Over 2000+ UI Components tvero eos et accusamus et iusto odio dignissimos 
                ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
                quas moles.
                Included Over 2000+ UI <a> Components tvero eos et accusamus</a> et iusto odio dignissimos 
                ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
                quas moles.
                
                </span>
              </header>
              <div class="float-right">
              <!-- Pagination -->
                <nav id="stickyblock-end" class="text-center" aria-label="Page Navigation">
                  <ul class="list-inline">
                    <li class="list-inline-item float-left g-hidden-xs-down">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16" href="#" aria-label="Previous">
                        <span aria-hidden="true">
                          <i class="fa fa-angle-left g-mr-5"></i> Previous
                        </span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14" href="#">1</a>
                    </li>
                    <li class="list-inline-item">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="#">2</a>
                    </li>
                    <li class="list-inline-item float-right g-hidden-xs-down">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16" href="#" aria-label="Next">
                        <span aria-hidden="true">
                          Next <i class="fa fa-angle-right g-ml-5"></i>
                        </span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              <!-- End Pagination -->
            </div>
            </div>
          </div>
          <!-- alumni_scholar_pro -->

        </div>
      <!-- end scholarshihp alumni -->

      <!-- start scholarship_advisor -->
        <div class="tab-pane fade" id="nav-1-1-dark-hor-right--3" role="tabpanel">
          <!-- User Block -->
          <div class="container" style="background-color:grey">
            <div class="u-heading-v1-1 g-brd-gray-light-v2 g-mb-20" style="background-color: #ffffff !important;">
                <h2 class="h3 u-heading-v1__title text-center"><Strong>Scholarship Advisor</Strong></h2>
            </div>
            <div class="col-12 col-md-12 g-mb-0">
              <!-- Team Block -->
              <div class="row">

                <div class="col-lg-4 g-mb-30">
                  <!-- Figure -->
                  <figure class="u-shadow-v19 g-bg-white g-rounded-4 g-pa-25">
                    <div class="media g-mb-20">
                      <div class="d-flex g-mr-20">
                        <!-- Figure Image -->
                        <div class="g-brd-around g-brd-3 g-brd-gray-light-v3 rounded-circle">
                          <img class="rounded-circle g-width-50 g-height-50" src="../../assets/img-temp/100x100/img4.jpg" alt="Image Description">
                        </div>
                        <!-- Figure Image -->
                      </div>
                      <div class="media-body">
                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-2">Mikel Andrews</h4>
                        <div class="d-block">
                          <i class="g-color-primary g-font-size-default icon-location-pin"></i>
                          <span class="g-color-gray-dark-v4 g-font-size-13">California, US</span>
                        </div>
                        <!-- End Figure Info -->
                      </div>
                    </div>

                    <p>Finding ways to help tell your story through video is a powerful tool to make your branded content stand out from the rest.</p>

                    <hr class="g-brd-gray-light-v4 g-my-20">

                    <!-- Figure List -->
                    <ul class="d-flex justify-content-between list-inline g-mb-0">
                      <li class="list-inline-item">
                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-text-underline--none--hover" href="#">
                          <i class="icon-finance-206 u-line-icon-pro"></i>
                          <span class="g-ml-5">Comment</span>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-text-underline--none--hover" href="#">
                          <i class="icon-finance-175 u-line-icon-pro"></i>
                          <span class="g-ml-5">Pin</span>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-text-underline--none--hover" href="#">
                          <i class="icon-christmas-043 u-line-icon-pro"></i>
                          <span class="g-ml-5">Notification</span>
                        </a>
                      </li>
                    </ul>
                    <!-- End Figure List -->
                  </figure>
                  <!-- End Figure -->
                </div>

                <div class="col-lg-4 g-mb-30">
                  <!-- Figure -->
                  <figure class="u-shadow-v19 g-bg-white g-rounded-4 g-pa-25">
                    <div class="media g-mb-20">
                      <div class="d-flex g-mr-20">
                        <!-- Figure Image -->
                        <div class="g-brd-around g-brd-3 g-brd-gray-light-v3 rounded-circle">
                          <img class="rounded-circle g-width-50 g-height-50" src="../../assets/img-temp/100x100/img4.jpg" alt="Image Description">
                        </div>
                        <!-- Figure Image -->
                      </div>
                      <div class="media-body">
                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-2">Natasha Kolnikova</h4>
                        <div class="d-block">
                          <i class="g-color-primary g-font-size-default icon-location-pin"></i>
                          <span class="g-color-gray-dark-v4 g-font-size-13">Moscor, Russia</span>
                        </div>
                        <!-- End Figure Info -->
                      </div>
                    </div>

                    <p>Finding ways to help tell your story through video is a powerful tool to make your branded content stand out from the rest.</p>

                    <hr class="g-brd-gray-light-v4 g-my-20">

                    <!-- Figure List -->
                    <ul class="d-flex justify-content-between list-inline g-mb-0">
                      <li class="list-inline-item">
                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-text-underline--none--hover" href="#">
                          <i class="icon-finance-206 u-line-icon-pro"></i>
                          <span class="g-ml-5">Comment</span>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-text-underline--none--hover" href="#">
                          <i class="icon-finance-175 u-line-icon-pro"></i>
                          <span class="g-ml-5">Pin</span>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-text-underline--none--hover" href="#">
                          <i class="icon-christmas-043 u-line-icon-pro"></i>
                          <span class="g-ml-5">Notification</span>
                        </a>
                      </li>
                    </ul>
                    <!-- End Figure List -->
                  </figure>
                  <!-- End Figure -->
                </div>

                <div class="col-lg-4 g-mb-30">
                  <!-- Figure -->
                  <figure class="u-shadow-v19 g-bg-white g-rounded-4 g-pa-25">
                    <div class="media g-mb-20">
                      <div class="d-flex g-mr-20">
                        <!-- Figure Image -->
                        <div class="g-brd-around g-brd-3 g-brd-gray-light-v3 rounded-circle">
                          <img class="rounded-circle g-width-50 g-height-50" src="../../assets/img-temp/100x100/img4.jpg" alt="Image Description">
                        </div>
                        <!-- Figure Image -->
                      </div>
                      <div class="media-body">
                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-2">Frank Heller</h4>
                        <div class="d-block">
                          <i class="g-color-primary g-font-size-default icon-location-pin"></i>
                          <span class="g-color-gray-dark-v4 g-font-size-13">Stockholm, Sweden</span>
                        </div>
                        <!-- End Figure Info -->
                      </div>
                    </div>

                    <p>Finding ways to help tell your story through video is a powerful tool to make your branded content stand out from the rest.</p>

                    <hr class="g-brd-gray-light-v4 g-my-20">

                    <!-- Figure List -->
                    <ul class="d-flex justify-content-between list-inline g-mb-0">
                      <li class="list-inline-item">
                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-text-underline--none--hover" href="#">
                          <i class="icon-finance-206 u-line-icon-pro"></i>
                          <span class="g-ml-5">Comment</span>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-text-underline--none--hover" href="#">
                          <i class="icon-finance-175 u-line-icon-pro"></i>
                          <span class="g-ml-5">Pin</span>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-text-underline--none--hover" href="#">
                          <i class="icon-christmas-043 u-line-icon-pro"></i>
                          <span class="g-ml-5">Notification</span>
                        </a>
                      </li>
                    </ul>
                    <!-- End Figure List -->
                  </figure>
                  <!-- End Figure -->
                </div>

              </div>
              <!-- End Team Block -->
            </div>
            <div class="float-right">
              <!-- Pagination -->
                <nav id="stickyblock-end" class="text-center" aria-label="Page Navigation">
                  <ul class="list-inline">
                    <li class="list-inline-item float-left g-hidden-xs-down">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16" href="#" aria-label="Previous">
                        <span aria-hidden="true">
                          <i class="fa fa-angle-left g-mr-5"></i> Previous
                        </span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14" href="#">1</a>
                    </li>
                    <li class="list-inline-item">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="#">2</a>
                    </li>
                    <li class="list-inline-item float-right g-hidden-xs-down">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16" href="#" aria-label="Next">
                        <span aria-hidden="true">
                          Next <i class="fa fa-angle-right g-ml-5"></i>
                        </span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              <!-- End Pagination -->
            </div>
          </div>
            
        </div>
      <!-- end scholarship_advisor -->
    
    </section>
    <!-- End Our Recent Projects -->
@endsection