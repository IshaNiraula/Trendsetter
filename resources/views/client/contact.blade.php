@extends('client.layouts.master')
@section('content')
<div class="page-header black-overlay">
    <div class="container breadcrumb-section">
        <div class="row pad-s15">
            <div class="col-md-12">
                <h2>Contact</h2>
                <div class="clear"></div>
                <div class="breadcrumb-box">
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="contact text-center ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                        <!--//==Section Heading Start==//-->
                        <div class="centered-title">
                            <h2>Contact Info <span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <!--//==Section Heading End==//-->
                <div class="row">
                    <h1 class="section-header">Contact</h1>
  
                    <div class="contact-wrapper">
                    
                    <!-- Left contact page --> 
                      
                      <form id="contact-form" class="form-horizontal" role="form">
                         
                        <div class="form-group">
                          <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
                          </div>
                        </div>
                  
                        <div class="form-group">
                          <div class="col-sm-12">
                            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
                          </div>
                        </div>
                  
                        <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
                        
                        <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                          <div class="alt-send-button">
                            <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                          </div>
                        
                        </button>
                        
                      </form>
                      
                    <!-- Left contact page --> 
                      
                        <div class="direct-contact-container">
                  
                          <ul class="contact-list">
                            <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">City, State</span></i></li>
                            
                            <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a></span></i></li>
                            
                            <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">hitmeup@gmail.com</a></span></i></li>
                            
                          </ul>
                  
                          <hr>
                          <ul class="social-media-list">
                            <li><a href="#" target="_blank" class="contact-icon">
                              <i class="fa fa-github" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" target="_blank" class="contact-icon">
                              <i class="fa fa-codepen" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" target="_blank" class="contact-icon">
                              <i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" target="_blank" class="contact-icon">
                              <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>       
                          </ul>
                          <hr>
                  
                          <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>
                  
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Contact Section Start -->
    <div class="py-4">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.4121855187595!2d85.32024191438452!3d27.704557132222885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a83c4f4ed7%3A0xe57aead9ac5a9594!2sBJ%20Education%20Network!5e0!3m2!1sen!2snp!4v1677146127980!5m2!1sen!2snp"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
@push('scripts')
<script>
    document.querySelector('#contact-form').addEventListener('submit', (e) => {
    e.preventDefault();
    e.target.elements.name.value = '';
    e.target.elements.email.value = '';
    e.target.elements.message.value = '';
  });

</script>
@endpush
