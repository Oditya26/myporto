<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>MyPorto</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{asset('depan2')}}/css/base.css">  
   <link rel="stylesheet" href="{{asset('depan2')}}/css/main.css">
   <link rel="stylesheet" href="{{asset('depan2')}}/css/vendor.css">


   <!-- script
   ================================================== -->   
	<script src="{{asset('depan2')}}/js/modernizr.js"></script>
	<script src="{{asset('depan2')}}/js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/x-icon" href="{{asset('depan2')}}/favicon.png">

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
	

	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>
			
	   		<div class="logo">
		         <a href="{{url('/')}}">MENU</a>
				
		    </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Interest</a></li>
						<li><a class="smoothscroll"  href="#cta" title="">Award</a></li>					
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>			
					</ul>
					<a class="button"  href="{{url('/auth')}}" title="">Login as Admin</a>	
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Hello, World.</h5>
	   			<h1>I'm {!!getFirstName($about->judul)!!}.</h1>

	   			<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">  
         <li><a href="https://www.linkedin.com/in/{{get_meta_value('_linkedin')}}/"><i class="fa fa-linkedin"></i></a></li>
         <li><a href="https://www.github.com/{{get_meta_value('_github')}}"><i class="fa fa-github"></i></a></li>
         <li><a href="https://www.twitter.com/{{get_meta_value('_twitter')}}"><i class="fa fa-twitter"></i></a></li>
         <li><a href="https://www.facebook.com/{{get_meta_value('_facebook')}}"><i class="fa fa-facebook"></i></a></li>
         <li><a href="https://www.instagram.com/{{get_meta_value('_instagram')}}"><i class="fa fa-instagram"></i></a></li>
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1>Let me introduce myself.</h1>

   			<div class="intro-info">

   				<img src="{{asset('foto'."/".get_meta_value('_foto'))}}" alt="Profile Picture">

   				<div class="lead">{!!$about->isi!!}</div>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full" style="margin-top: 5px;">
   			<h3>Profile</h3>
   			

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<br>{{$about->judul}}
   				</li>
   				<li>
   					<strong>City:</strong>
   					<br>{{get_meta_value('_kota')}}
   				</li>
   				<li>
   					<strong>Province:</strong>
   					<br>{{get_meta_value('_provinsi')}}
   				</li>
   				<li>
   					<strong>Phone Number:</strong>
   					<br>{{get_meta_value('_nohp')}}
   				</li>
   				<li>
   					<strong>Email:</strong>
   					<br>
					<span>
						<a href="mailto:{{get_meta_value('_email')}}">{{get_meta_value('_email')}}</a>
					</span>
					
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">
			<h3>Skills</h3>
			<div class="icon-container">
				@foreach (explode(', ', get_meta_value('_language')) as $item)
					<div class="devicon-{{ strtolower($item) }}-plain" style="font-size: 3em;"></div>
				@endforeach
			</div>
			<br>
			<h3>Workflow</h3>
			<div>
				<span>
					{!!set_list_workflow(get_meta_value('_workflow'))!!}
				</span>
			</div>    
		</div>
   	</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resume</h5>
   			<h1>More of my credentials.</h1>


   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Experience</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">
				@foreach ($experience as $item)
				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-briefcase "></i>
					</div>

					<div class="timeline-header">
						<h3>{{$item->judul}}</h3>
						<p>{{$item->tgl_mulai_indo}} - {{$item->tgl_akhir_indo}}</p>
					</div>

					<div class="timeline-content">
						<h4>{{$item->info1}}</h4>
						<p style="margin-bottom: 10px;">{!!$item->isi!!}</p>
					</div>

				</div> <!-- /timeline-block -->
				@endforeach

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
   	
   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Education</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">
				@foreach ($education as $item)
				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-graduation-cap"></i>
					</div>

					<div class="timeline-header">
						<h3>{{$item->judul}}</h3>
						<p>{{$item->tgl_mulai_indo}} - {{$item->tgl_akhir_indo}}</p>
					</div>

					<div class="timeline-content">
						<h4>{{$item->info1}}</h4>
						<p>{{$item->info2}}<br>GPA: {{$item->info3}}</p>
						
					</div>

				</div> <!-- /timeline-block -->
				@endforeach
   				



   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
		
	</section> <!-- /features -->


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
			<div class="col-twelve">
				<h5>{{$interest->judul}}</h5>
   				<h1>These are some of my words about my interests.</h1>
			 <div>
				<aside class="pull-quote">
					<blockquote>
						<p>{{set_list_award($interest->isi)}}</p>
						<p>~ {!!getFirstName($about->judul)!!} ~</p>
					</blockquote>
				 </aside>
				
				
			 </div>
		</div>  

   	</div> <!-- /portfolio-content --> 
		
	</section> <!-- /portfolio --> 


	<!-- CTA Section
   ================================================== -->
	<section id="cta" class="grey-section">

   	<div class="row cta-content">

   		<div class="col-twelve section-ads">  
			<div class="row section-intro">
				<div class="col-twelve">
					<h5>{{$award->judul}}</h5>
   					<h1>This is some of my awards.</h1>
					<div class="lead">
						{!!set_list_award($award->isi)!!}
					</div>
				</div>   		
			   </div>
   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 

	
   <!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1>I'd Love To Hear From You.</h1>

   			<p class="lead">You can contact me with the following contact.</p>

   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
				{{get_meta_value('_kota')}},
				<br>{{get_meta_value('_provinsi')}}.
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>{{get_meta_value('_email')}}</p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>Phone: {{get_meta_value('_nohp')}}
			   </p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->

	<footer>
		<div class="row">

			<div class="col-six tab-full pull-right social">

				<ul class="footer-social">        
					<li><a href="https://www.linkedin.com/in/{{get_meta_value('_linkedin')}}/"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://www.github.com/{{get_meta_value('_github')}}"><i class="fa fa-github"></i></a></li>
					<li><a href="https://www.twitter.com/{{get_meta_value('_twitter')}}"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.facebook.com/{{get_meta_value('_facebook')}}"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/{{get_meta_value('_instagram')}}"><i class="fa fa-instagram"></i></a></li>
			  </ul> 
				 
		 </div>

		 <div class="col-six tab-full">
			 <div class="copyright">
				   <span>© Copyright Oditya 2024.</span> 
				   <span>Design by <a href="https://www.instagram.com/oditya.rdh">Oditya</a></span>	         	
				</div>		                  
			 </div>

			 <div id="go-top">
				<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
			 </div>

		 </div> <!-- /row -->     	
  </footer>    
 

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="{{asset('depan2')}}/js/jquery-2.1.3.min.js"></script>
   <script src="{{asset('depan2')}}/js/plugins.js"></script>
   <script src="{{asset('depan2')}}/js/main.js"></script>
   
   

</body>

</html>