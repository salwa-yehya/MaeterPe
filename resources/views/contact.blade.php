@extends('user.layouts.Master')

@section('title')
     Contact
@endsection

@section ('css')

 <!-- Link contact CSS -->
 <link rel="stylesheet" href="{{asset('css/contact.css')}}">

@endsection


@section('pages')
<div class="pages-title">
    <h1> Contact Us</h1>
</div>
    <!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-m1">
  <div class="container" data-aos="fade-up">

    <div class="section-title" >
    <div class="row" data-aos="fade-up" data-aos-delay="100">
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
          <p>Reflection@example.com</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
        <i class="fa-solid fa-phone"></i>
          <h3>Call Us</h3>
          <p>+1 5588 55885 55</p>
        </div>
      </div>

    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-6 ">
        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8578.539952748562!2d35.00780972121779!3d29.53359351764154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15007039ff2efa81%3A0x595faa556d2e6acc!2sAqaba!5e0!3m2!1sen!2sjo!4v1675266178509!5m2!1sen!2sjo" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
      </div>
      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section> <!-- ======= End Contact Section ======= -->


@endsection