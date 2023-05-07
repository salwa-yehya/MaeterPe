<style>
     .info-box {
    color: #444444;
    text-align: center;
    box-shadow: 0 0 30px rgba(214, 215, 216, 0.3);
    padding: 20px 0 30px 0;
   
  }
     .info-box:hover {
    color: #444444;
    text-align: center;
    box-shadow: 0 0 30px rgba(139, 139, 139, 0.3);
    padding: 20px 0 30px 0;
  }
  
   .info-box i {
    font-size: 30px;
    color: #333;
    border-radius: 50%;
    padding: 8px;
  }
  
   .info-box h3 {
    font-size: 20px;
    color: #777777;
    font-weight: 700;
    margin: 10px 0;
  }
  
   .info-box p {
    padding: 0;
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 0;
  }
</style>



@extends('frontend.masterD')
@section('main')
    <div class="page-header mt-30 mb-50">
        <div class="container">
            <div class="archive-header">
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <h1 class="mb-15">Contact</h1>
                        <div class="breadcrumb">
                            <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                            <span></span>Contact
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100" style="margin: 0 80px">
        <div class="col-lg-6">
          <div class="info-box mb-4">
          <i class="fa-solid fa-location-dot"></i>
            <h3>Our Address</h3>
            <p>Jorden , Aqaba </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="fa-solid fa-envelope"></i>
            <h3>Email Us</h3>
            <p>Reflection@gmail.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
          <i class="fa-solid fa-phone"></i>
            <h3>Call Us</h3>
            <p>0778079514</p>
          </div>
        </div>

      </div>
   
    <div class="page-content pt-50">
       
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <section class="mb-50">
                        
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="contact-from-area padding-20-row-col">
                             
                                    <form class="contact-form-style mt-30" id="contact-form" method="POST" action="{{route('store.contact')}}">
                                        @csrf
                                      
                                            <div class="col-lg-10 ">
                                                <div class="input-style mb-20">
                                                    <input name="name" placeholder="First Name"  type="text" />
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="input-style mb-20">
                                                    <input name="email" placeholder="Your Email"  type="email" />
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="input-style mb-20">
                                                    <input name="phone" placeholder="Your Phone"  type="tel" />
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>

                                            </div>
                                            <input class="button col-lg-5" style="margin-top: 20px " type="submit" value="Send Message">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-5 pl-40 d-lg-block d-none">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1162.654975540051!2d35.02754150331149!3d29.55766646767156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15006fbd600e4b8b%3A0x618cb419b929889d!2z2YXYrdiv2K_YqSDZitit2YrZiSDYp9io2Ygg2LnZgdi0IC0geWVoeWEgYWJ1IEFmYXNo!5e1!3m2!1sen!2sjo!4v1683472102344!5m2!1sen!2sjo" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection