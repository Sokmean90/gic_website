@extends('layouts.main')
@section('container')
    <main>
      <!-- Promo Block -->
    <section class="container text-center g-pt-120 g-pb-30">
      <h2 class="g-color-black g-font-weight-600 g-font-size-50 g-mb-70">Frequently Asked Questions</h2>
      
    </section>
    <!-- End Promo Block -->
    <!-- Accordion -->
    <section class="container g-pb-100">
      <!-- Accordion -->
      <div id="purchase" class="u-shadow-v11 rounded g-py-30 g-mb-100">
        <div class="row justify-content-center">
          <div class="col-lg-10">
        
            <div id="accordion" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
              <!-- Card -->
               @foreach($list_faq as $post)
              <div class="card g-brd-none rounded-0 g-mb-20">
                <div id="accordion-heading-01" class="g-brd-bottom g-brd-gray-light-v4 g-pa-0" role="tab">
                  <h5 class="mb-0">
                      <a class="collapsed d-flex justify-content-between g-color-main g-text-underline--none--hover rounded-0 g-px-30 g-py-20" href="#accordion-body-01" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="accordion-body-01">
                        {{ $post->question }}
                        <span class="u-accordion__control-icon">
                          <i class="fa fa-angle-down"></i>
                          <i class="fa fa-angle-up"></i>
                        </span>
                      </a>
                    </h5>
                </div>
                <div id="accordion-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-heading-01" data-parent="#accordion">
                  <div class="u-accordion__body g-color-gray-dark-v4 g-pa-30">
                   {{ $post->answer }}
                  </div>
                </div>
              </div>
              @endforeach
              <!-- End Card -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Accordion -->
    </main>
@endsection
