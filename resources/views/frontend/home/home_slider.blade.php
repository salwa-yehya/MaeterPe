@php
$slider = App\Models\Slider::orderBy('slider_title','ASC')->get();
@endphp


<section class="home-slider position-relative mb-30">
    <div class="container">
        <div class="home-slide-cover mt-30">
            <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">

            @foreach($slider as $item)
            <div class="single-hero-slider single-animation-wrap" style="background-image:linear-gradient(to bottom, rgba(55, 77, 61, 0.1), rgba(33, 39, 37, 0.04)),
            url({{ asset($item->slider_image ) }}) ">
                                    <div class="slider-content">
                                    <h1 class="display-2 mb-40">
                                        {{$item->slider_title}}
                                    </h1>
                                    <p class="mb-65 display-22"> {{$item->short_title}}</p>
                                    <form class="form-subcriber d-flex">
                                      
                                        <a href="{{url ('/mirror_shop')}}" class="btn" type="submit">Shop Now</a>
                                    </form>
                                </div>
                            </div>
            @endforeach

           
                
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </div>
    </div>
</section>