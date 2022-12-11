@extends('layouts.web.app')
@section('page_title', 'Ebala Ji Services')

@section('content')
<div class="inner-banner">
<div class="container">
<div class="inner-title text-center">
<h3>Contact Us</h3>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>
<i class='bx bx-chevrons-right'></i>
</li>
<li>Contact Us</li>
</ul>
</div>
</div>
<div class="inner-shape">
<img src="assets/images/shape/inner-shape.png" alt="Images">
</div>
</div>
<div class="contact-form-area pt-100 pb-70">
<div class="container">
 <div class="section-title text-center">
<h2>Let's Send Us a Message Below</h2>
</div>
<div class="row pt-45">
<div class="col-lg-4">
<div class="contact-info mr-20">
<span>Contact Info</span>
<h2>Let's Connect With Us</h2>
<p>EBalaji provides services to Pan India and has been authorized to apply for PAN CARD across India. </p>
<ul>
<li>
<div class="content">
<i class='bx bx-phone-call'></i>
<h3>Phone Number</h3>
<a href="tel:+91 - 89560-76979">+91 - 89560-76979</a>
</div>
</li>
<li>
<div class="content">
<i class='bx bxs-map'></i>
<h3>Address</h3>
<span>Main Road, Near Swari Dargha ,Behind Kamptee Vachnalaya, Kamptee, Nagpur, Maharashtra, 441002</span>
</div>
</li>
<li>
    <div class="content">
        <i class='bx bx-message'></i>
        <h3>Contact Info</h3>
        <span>support@ebalajipay.com</span>
</div>
</li>
</ul>
</div>
</div>
<div class="col-lg-8">
<div class="contact-form">
<form id="contactForm">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label>Your Name <span>*</span></label>
<input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Your Email <span>*</span></label>
<input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Phone Number <span>*</span></label>
<input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Your Subject <span>*</span></label>
<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Your Message <span>*</span></label>
<textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="agree-label">
<input type="checkbox" id="chb1">
<label for="chb1">
Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
</label>
</div>
</div>
<div class="col-lg-12 col-md-12 text-center">
<button type="submit" class="default-btn btn-bg-two border-radius-50">
Send Message <i class='bx bx-chevron-right'></i>
</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>


<div class="map-area">
<div class="container-fluid m-0 p-0">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59508.821812066184!2d79.13149330077411!3d21.219895050612912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c602015fee4d%3A0x8f8c187398dd57af!2sKamptee%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1670692394274!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
@endsection