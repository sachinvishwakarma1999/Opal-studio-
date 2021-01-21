@include('Header');
<div class="container" >

    	
			@if(count($errors)>0)
			<div style="background-color: red" class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">x</button>
			<ul>
				@foreach($errors->all() as $error)
				<h3><li>{{ $error }}</li></h3>
				@endforeach
			</ul>
			</div>
			@endif


			@if($message = Session::get('success'))
			<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">x</button>
			<ul>
				
				<h2><li>{{ $message }}</li></h2>
			
			</ul>
			</div>
			@endif
</div>
<div class="container-fluid contact_back_img">

	<div class="row">
	
			<!-- <img src="images/contact-banner.jpg" class="img-fluid contact_back_img"> -->
		
			 <div class="col-lg-12 animate seven">
       <span>C</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span>&nbsp;
       <span>U</span><span>s</span>
           <!--  <span>m</span>
            <span>a</span>
            <span>t</span>
            <span>i</span>
            <span>o</span>
            <span>n</span>
            <span>s</span> -->
      
    
        </div>
		</div>
	</div>

<div class="container" >
	<div class="row">
		<div class="col-lg-12 theme-heading  animatable fadeInDown" id="popup1">
			<h1>Contact Us</h1>
			<h3><span class="heading-shape">contact<strong> us</strong></span></h3>
		</div>
		
	</div>
</div>

<div class="container container_get_in_touch" >
	<div class="row">
		<div class="col-lg-8 bg_back_address">
			<section class="content bgcolor-4">

				<form method="POST" action="{{ action('SendEmailController@send') }}">
					{{csrf_field()}}
				<h2>Get in touch</h2>
			<div class="row">
				<div class="col-lg-6">
				<span class="input input--ruri">
					<input class="input__field input__field--ruri" type="text" name="name" id="input-26" />
					<label class="input__label input__label--ruri" for="input-26">
						<span class="input__label-content input__label-content--ruri">First Name</span>
					</label>
				</span>
			    </div>
			    <div class="col-lg-6">
				<span class="input input--ruri">
					<input class="input__field input__field--ruri" type="text" name="lastname" id="input-27" />
					<label class="input__label input__label--ruri" for="input-27">
						<span class="input__label-content input__label-content--ruri">Last Name</span>
					</label>
				</span>
			    </div>
			</div>
			<div class="row">
				<div class="col-lg-6">
				<span class="input input--ruri">
					<input class="input__field input__field--ruri" type="text" name="email" id="input-28" />
					<label class="input__label input__label--ruri" for="input-28">
						<span class="input__label-content input__label-content--ruri">Email Id</span>
					</label>
				</span>
			    </div>
			    <div class="col-lg-6">
				<span class="input input--ruri">
					<input class="input__field input__field--ruri" type="text" name="mobile" id="input-29" />
					<label class="input__label input__label--ruri" for="input-29">
						<span class="input__label-content input__label-content--ruri">Mobile No.</span>
					</label>
				</span>
			    </div>
			</div>
			<div class="row">
				<div class="col-lg-12">
				<span class="input input--ruri">
					<input class="input__field input__field--ruri" type="text" name="message" id="input-30" />
					<label class="input__label input__label--ruri" for="input-30">
						<span class="input__label-content input__label-content--ruri">Message</span>
					</label>
				</span>
			    </div>
			    
			</div>	
			<div class="row">
				<div class="col-lg-12">
				<input type="submit" name="send" value="send" class="btn btn_submit_contact">
			    </div>
			    
			</div>
			</form>	
			</section>
			
		</div>
		<div class="col-lg-4 animatable fadeInRight" id="comment_bubble" >
			<!-- <h2>Contact Info</h2> -->
			
                     <div class="single-contact">
                        <i class="fa fa-map-marker-alt"></i>
                        <h5>Address</h5>
                        <p>Indore, MP, India 452010</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-phone"></i>
                        <h5>Phone</h5>
                        <p>(+91) 9926069923</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-envelope"></i>
                        <h5>Email</h5>
                        <p>Studiosopal@gmail.com</p>
                     </div>
                
		</div>
		
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d58882.97329944205!2d75.870436791808!3d22.721333292849902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1592978002449!5m2!1sen!2sin" width="1200" height="450" frameborder="0" style="border:1;margin-top: 20px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		
	</div>

</div>

<script type="text/javascript">
    // Trigger CSS animations on scroll.
// Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/

// Looking for a version that also reverses the animation when
// elements scroll below the fold again?
// --> Check https://codepen.io/bramus/pen/vKpjNP

jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.length == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
        $animatables.each(function(i) {
       var $animatable = $(this);
            if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
            }
    });

    };
  
  // Hook doAnimations on scroll, and trigger a scroll
    $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});
</script>
