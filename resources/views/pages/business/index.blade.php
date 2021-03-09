<?php use \App\Http\Controllers\User; ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rstill.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 11:51:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Meta -->
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="VIMCare - Business Profile">
        <meta name="keywords" content="cv, resume, portfolio, creative, modern">
        <meta name="author" content="Hamza Gourram">
		<!-- Page Title -->
		<title>VIMCare - Business Profile</title>
		<!-- Styles -->
		{{-- <link rel="stylesheet" href="{{ asset('business/css/bootstrap.css') }}"> --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset('business/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('business/css/tootik.css') }}">
		<link rel="stylesheet" href="{{ asset('business/css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('business/css/swiper.css') }}">
		<link rel="stylesheet" href="{{ asset('business/css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('business/css/style.css') }}">
		<!-- Light & Dark Color -->
		<link rel="stylesheet" id="light-dark" href="{{ asset('business/css/colors/light.css') }}">
		<!-- Theme Color -->
		<link rel="stylesheet" id="colors" href="{{ asset('business/css/colors/color1-0487cc.css') }}">
		<!-- Responsive style -->
		<link rel="stylesheet" href="{{ asset('business/css/responsive.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/ico" href="https://upload.wikimedia.org/wikipedia/commons/a/a8/Ski_trail_rating_symbol_black_circle.png">
		<!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|PT+Sans+Narrow:400,700">
        <script src="https://kit.fontawesome.com/384ade21a6.js"></script>
        <style>
            .progress{
                margin-bottom: 0px !important;
            }
            .disp-0{
                display: none !important;
            }
            .comphotos{
                width: 100%;
                height: 200px;
            }
            .td-bold{
                font-weight: bold;

            }
        </style>
	</head>
	<body>

		<div class="content">
			<!-- #LOADER# --> <!-- other loader : http://tobiasahlin.com/spinkit/ -->
			<div class="loading-overlay">
				<div class="spinner">
				  <div class="rect1"></div>
				  <div class="rect2"></div>
				  <div class="rect3"></div>
				  <div class="rect4"></div>
				  <div class="rect5"></div>
				</div>
			</div>

			<!-- #MENU# -->
			<div class="menu">
				<h2 class="logo">{{ Str::substr(Auth::user()->station_name, 0, 2) }}</h2>
				<div class="menu-content">
					<ul>
						<li onclick="location.href='{{ route('home') }}'"><a href="{{ route('home') }}" data-value="about">HOME</a></li>
						<li><a class="active" href="#" data-value="about">ABOUT</a></li>
						{{-- <li><a href="#" data-value="skills">SKILLS</a></li> --}}
					</ul>
				</div>
				<div class="open-menu">
					<i class="fa fa-bars"></i>
				</div>
			</div>

			<!-- #SCROLL-TOP# -->
			<div class="scroll-top" data-tootik="TOP" data-tootik-conf="invert no-arrow no-fading">
				<i class="fa fa-arrow-up"></i>
			</div>
			<!-- #CONTAINER# -->
			<div class="container">
				<!-- #ABOUT# -->
				<section id="about" class="section section-about wow fadeInUp">

                    <br><br>
                    <center><h1 style="
                        font-weight: bold;
                    "><img src="https://img.icons8.com/ios/40/000000/facebook-like--v1.png"/> This is what your page looks like to a visitor</h1><hr></center>

					<div class="profile">
						<div class="row">
							<div class="col-sm-4">
								<div class="photo-profile">
                                    
									<img id="my_image" @if(Auth::user()->avatar != "") src="{{ Auth::user()->avatar }}" @else src="https://res.cloudinary.com/pilstech/image/upload/v1600186029/vimnewlogo_pndv6i.png" @endif alt="Business Image">
								</div>
								<a style="cursor: pointer;">
									<div class="download-resume" style="background-color: navy; color: #fff;">
										<i class="fa fa-cloud-download" aria-hidden="true"></i>
                                        <span class="text-download">UPDATE AVATAR</span><br>
                                        <input type="file" name="file" id="file" class="form-control" onchange="previewPicture()">
									</div>
                                </a>
								<a>
									<div class="download-resume">
										<i class="fa fa-eye" aria-hidden="true"></i>
										<span class="text-download">PROFILE VIEW - {{ Auth::user()->profile_view }}</span>
									</div>
                                </a>





                                <div class="professional-skills">
								<div class="title-skills">
									<h3>SPECIALITIES</h3>
								</div>
								<!-- single skill -->
                                @if(Auth::user()->mechanical_skill == "Yes")
                                <div class="skill">
									<div class="title-progress">
										<span class="skill-name">Mechanical Skill: </span>
										<span class="skill-value">Yes</span>
									</div>
									<div class="progress">
									 	<div class="progress-bar progress1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
									    </div>
									</div>
                                </div>

                                @else

                                <div class="skill">
									<div class="title-progress">
										<span class="skill-name">Mechanical Skill: </span>
										<span class="skill-value">No</span>
									</div>
									<div class="progress">
									 	<div class="progress-bar progress1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
									    </div>
									</div>
                                </div>

                                @endif
								<!-- / single skill -->
                                <!-- single skill -->
                                @if(Auth::user()->electrical_skill == "Yes")
								<div class="skill">
									<div class="title-progress">
										<span class="skill-name">Electrical Skill: </span>
										<span class="skill-value">Yes</span>
									</div>
									<div class="progress">
									 	<div class="progress-bar progress2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
									    </div>
									</div>
                                </div>

                                @else

                                <div class="skill">
									<div class="title-progress">
										<span class="skill-name">Electrical Skill: </span>
										<span class="skill-value">No</span>
									</div>
									<div class="progress">
									 	<div class="progress-bar progress2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
									    </div>
									</div>
                                </div>

                                @endif
								<!-- / single skill -->
                                <!-- single skill -->

                                @if(Auth::user()->transmission_skill == "Yes")
								<div class="skill">
									<div class="title-progress">
										<span class="skill-name">Transmission Skill: </span>
										<span class="skill-value">Yes</span>
									</div>
									<div class="progress">
									 	<div class="progress-bar progress3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
									    </div>
									</div>
                                </div>

                                @else

                                <div class="skill">
									<div class="title-progress">
										<span class="skill-name">Transmission Skill: </span>
										<span class="skill-value">No</span>
									</div>
									<div class="progress">
									 	<div class="progress-bar progress3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
									    </div>
									</div>
                                </div>

                                @endif
								<!-- / single skill -->
                                <!-- single skill -->
                                @if(Auth::user()->body_work_skill == "Yes")
								<div class="skill">
									<div class="title-progress">
										<span class="skill-name">Body Work Skill: </span>
										<span class="skill-value">Yes</span>
									</div>
									<div class="progress">
									 	<div class="progress-bar progress4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
									    </div>
									</div>
                                </div>
                                @else

                                <div class="skill">
									<div class="title-progress">
										<span class="skill-name">Body Work Skill: </span>
										<span class="skill-value">No</span>
									</div>
									<div class="progress">
									 	<div class="progress-bar progress4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
									    </div>
									</div>
                                </div>

                                @endif
								<!-- / single skill -->
                                <!-- single skill -->
                                @if(Auth::user()->other_skills == "Yes")

								<div class="skill">
									<div class="title-progress">
										<span class="skill-name">Other Skills: </span>
										<span class="skill-value">Yes</span>
									</div>
									<div class="progress">
									 	<div class="progress-bar progress5" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
									    </div>
									</div>
                                </div>

                                @else

                                <div class="skill">
									<div class="title-progress">
										<span class="skill-name">Other Skills: </span>
										<span class="skill-value">No</span>
									</div>
									<div class="progress">
									 	<div class="progress-bar progress5" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
									    </div>
									</div>
                                </div>

                                @endif
								<!-- / single skill -->
                            </div>
                                <br>
                                <div class="title-skills">
									<h3>SERVICE OFFERED</h3>
                                </div>
                                
                                <div class="skill">
									<b>{!! Auth::user()->service_offered !!}</b>
                                </div>

                                <br>
                                <div class="title-skills">
									<h3>HOURS OF OPERATION</h3>
                                </div>
                                
                                <div class="skill">
									<b>{!! Auth::user()->hours_of_operation !!}</b>
                                </div>
                                
                                <br>
                                <div class="title-skills">
									<h3>LOCATION</h3>
                                </div>
                                
                                <div class="skill">
                                    <iframe src="https://www.google.com/maps/embed?{{ Auth::user()->address }}" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    
                                    <a type="button" class="btn btn-primary btn-block" href="https://www.google.com/maps/place/{{ Auth::user()->address }}" target="_blank">Visit Address</a>
                                </div>


                            </div>
                            

							<div class="col-sm-8">
								<div class="info-profile">
									<h2>{{ Auth::user()->station_name }}</h2>
                                    <h3>{{ Auth::user()->specialization }} <i class="fa fa-check-circle" aria-hidden="true" style="color: green; font-size: 15px;"></i> <span class="text-available" style="font-size: 15px; font-weight: bold;">Claimed</span> </h3>



									<p>
                                        @if(Auth::user()->background != "" || Auth::user()->background != NULL)
                                        {!! Auth::user()->background !!}
                                        @else
                                            No background history
                                        @endif
                                    </p>




                                    <hr>
                                    <h2>Other Informations</h2>


                                    <div id="accordion">
                                        <div class="card">
                                          <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Basic Information
                                              </button>
                                            </h5>
                                          </div>
                                      
                                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                              <table class="table table-striped table-bordered">

                                                <tbody>


                                                @if (isset(Auth::user()->shopreg))

                                                    <tr>
                                                        <td>Years of shop or dealer repair experience</td>
                                                        <td class="td-bold">{{ Auth::user()->shopreg->repair_experience }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Full-time jobs have you had in the past five years</td>
                                                        <td class="td-bold">{{ Auth::user()->shopreg->fulltime_jobs }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hours per week are you willing to work</td>
                                                        <td class="td-bold">{{ Auth::user()->shopreg->hours_per_week }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>How far would you be willing to drive to an appointment?</td>
                                                        <td class="td-bold">{{ Auth::user()->shopreg->distance_to_drive }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cars I want to work on</td>
                                                        <td class="td-bold">@php $workon = json_decode(Auth::user()->shopreg->carsto_workon); @endphp {{ implode(", ", $workon) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>I want to work as:</td>
                                                        <td class="td-bold">{{ Auth::user()->shopreg->work_as }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Certifications I have obtained</td>
                                                        <td class="td-bold">@php $certifications = json_decode(Auth::user()->shopreg->certifications); @endphp {{ implode(", ", $certifications) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Services I can perform</td>
                                                        <td class="td-bold">@php $service_offer = json_decode(Auth::user()->shopreg->service_offer); @endphp {{ implode(", ", $service_offer) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>My Resume</td>
                                                        <td class="td-bold">
                                                            <a href="{{ Auth::user()->shopreg->resume }}" target="_blank" class="text-primary">View resume</a>
                                                        </td>
                                                    </tr>

                                                @else

                                                <tr>
                                                    <td align="center"><a href="{{ route('Basic') }}" type="button" class="btn btn-primary btn-block">Update your basic information</a></td>
                                                </tr>

                                                @endif


                                            </tbody>

                                                    

                                                  
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Skills
                                              </button>
                                            </h5>
                                          </div>
                                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Make</th>
                                                            <th>What's your skill level?</th>
                                                            <th>How good are you with diagnostics?</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (isset(Auth::user()->skillset))

                                                        <tr>
                                                            <td>Buick</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_buick }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_buick }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cadillac</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_cadillac }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_cadillac }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chevrolet</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_chevrolet }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_chevrolet }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chrysler</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_chrysler }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_chrysler }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Dodge</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_dodge }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_dodge }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ford</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_ford }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_ford }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>GMC</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_gmc }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_gmc }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>GEO</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_geo }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_geo }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Hummer</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_hummer }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_hummer }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Jeep</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_jeep }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_jeep }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Lincon</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_lincon }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_lincon }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Mercury</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_mercury }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_mercury }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Oldsmobile</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_oldsmobile }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_oldsmobile }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Plymouth</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_plymouth }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_plymouth }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Pontiac</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_pontiac }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_pontiac }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Ram</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_ram }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_ram }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Saturn</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_saturn }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_saturn }}
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Tesla</td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->skill_level_tesla }}
                                                            </td>
                                                            <td class="td-bold">
                                                                {{ Auth::user()->skillset->diagnostic_tesla }}
                                                            </td>
                                                            
                                                        </tr>
                                                            
                                                        @else

                                                        <tr>
                                                            <td align="center" colspan="3"><a href="{{ route('Skills') }}" type="button" class="btn btn-primary btn-block">Update your skills</a></td>
                                                        </tr>
                                                            
                                                        @endif
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Mandatory Tools
                                              </button>
                                            </h5>
                                          </div>
                                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                              <table class="table table-bordered">
                                                  <tbody>
                                                      @if (isset(Auth::user()->toolset))
                                                      <tr>
                                                        <td class="td-bold">@php $manadatory_tools = json_decode(Auth::user()->toolset->manadatory_tools); @endphp {!! implode(", ", $manadatory_tools) !!}</td>
                                                      </tr>
                                                      @else

                                                      <tr>
                                                        <td align="center"><a href="{{ route('Tools') }}" type="button" class="btn btn-primary btn-block">Update your tools</a></td>
                                                    </tr>
                                                          
                                                      @endif
                                                      

                                                      

                                                      

                                                  </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                                      </div>


                                    <hr>
                                    <h2>Value Added</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span class="title-infos"><i class="fas fa-percent"></i> Vimfile Discount</span>
                                        </div>
                                        <div class="col-md-6">
                                            @if(Auth::user()->vimfile_discount == "Yes")

                                            <span class="info"><i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i></span>
                                            @else
                                            <span class="info"><i class="fa fa-window-close" aria-hidden="true" style="color: red;"></i></span>

                                            @endif
                                        </div>
                                        <br><br>
                                        
                                        <div class="col-md-6">
                                            <span class="title-infos"><i class="fas fa-toolbox"></i> Repair Guaranteed</span>
                                        </div>
                                        <div class="col-md-6">
                                            @if(Auth::user()->repair_guaranteed == "Yes")

                                            <span class="info"><i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i></span>
                                            @else
                                            <span class="info"><i class="fa fa-window-close" aria-hidden="true" style="color: red;"></i></span>

                                            @endif
                                        </div>
                                        
                                        <br><br>
                                        <div class="col-md-6">
                                            <span class="title-infos"><i class="fas fa-file-word"></i> Free Estimates</span>
                                        </div>
                                        <div class="col-md-6">
                                            @if(Auth::user()->free_estimated == "Yes")

                                            <span class="info"><i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i></span>
                                            @else
                                            <span class="info"><i class="fa fa-window-close" aria-hidden="true" style="color: red;"></i></span>

                                            @endif
                                        </div>
                                        <br><br>
                                        
                                        
                                        <div class="col-md-6">
                                            <span class="title-infos"><i class="fas fa-walking"></i> Walks-in Welcome</span>
                                        </div>
                                        <div class="col-md-6">
                                            @if(Auth::user()->walk_in_specified == "Yes")

                                            <span class="info"><i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i></span>
                                            @else
                                            <span class="info"><i class="fa fa-window-close" aria-hidden="true" style="color: red;"></i></span>

                                            @endif
                                        </div>
                                        <br><br>
                                        
                                        
                                        <div class="col-md-6">
                                            <span class="title-infos"><i class="fas fa-heart"></i> Other Added Value</span>
                                        </div>
                                        <div class="col-md-6">
                                            {{ Auth::user()->other_value_added }}
                                        </div>
                                        <br><br>
                                        
                                        <div class="col-md-6">
                                            <span class="title-infos"><i class="fas fa-pause-circle"></i> Average Waiting Period</span>
                                        </div>
                                        <div class="col-md-6">
                                            {{ Auth::user()->average_waiting }}
                                        </div>



									</div>
                                    <br><br>

                                    <hr>
                                    <h2>Amenities</h2>
                                    <hr>

									<div class="row">


										<div class="col-sm-6">
											<ul class="ul-info">
												<li class="li-info">
                                                    <span class="title-info"><i class="fa fa-wifi"></i> Wi-Fi</span>
                                                    @if(Auth::user()->wifi == "Yes")

                                                    <span class="info"><i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i></span>
                                                    @else
                                                    <span class="info"><i class="fa fa-window-close" aria-hidden="true" style="color: red;"></i></span>

                                                    @endif

												</li>
												<li class="li-info">
                                                    <span class="title-info"><i class="fas fa-restroom" style="font-size: 14px;"></i> Restroom</span>
                                                    @if(Auth::user()->restroom == "Yes")
                                                    <span class="info"><i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i></span>
                                                    @else
                                                    <span class="info"><i class="fa fa-window-close" aria-hidden="true" style="color: red;"></i></span>


                                                    @endif
												</li>
												
											</ul>
										</div>
										<div class="col-sm-6">
											<ul class="ul-info">
                                                <li class="li-info">
                                                    <span class="title-info"><i class="fa fa-bed"></i> Lounge</span>
                                                    @if(Auth::user()->lounge == "Yes")

                                                    <span class="info"><i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i></span>
                                                    @else
                                                    <span class="info"><i class="fa fa-window-close" aria-hidden="true" style="color: red;"></i></span>
                                                    @endif
                                                </li>
                                                
												<li class="li-info">
                                                    <span class="title-info"><i class="fas fa-parking" style="font-size: 12px"></i> Park space</span>
                                                    @if(Auth::user()->parking_space == "Yes")
                                                    <span class="info"><i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i></span>
                                                    @else
                                                    <span class="info"><i class="fa fa-window-close" aria-hidden="true" style="color: red;"></i></span>
                                                    @endif
												</li>
												
											</ul>
                                        </div>


                                    </div>
                                    


                                    <hr>
                                    <h2>History</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span class="title-infos"><i class="fas fa-glass-cheers"></i> Year Established</span>
                                        </div>
                                        <div class="col-md-6">
                                            @if(Auth::user()->year_established == "Yes")

                                            @else
                                                <b>{{ date('F Y', strtotime(Auth::user()->year_established)) }}</b>
                                            @endif
                                            
                                        </div>
                                        <br><br>
                                        
                                        <div class="col-md-6">
                                            <span class="title-infos"><i class="fas fa-hourglass-start"></i> Year Started Since</span>
                                        </div>
                                        <div class="col-md-6">
                                            <b>{{ date('F Y', strtotime(Auth::user()->year_started_since)) }}</b>
                                        </div>
                                        <br><br>
                                        
                                        
                                        <div class="col-md-6">
                                            <span class="title-infos"><i class="fas fa-graduation-cap"></i> Year(s) of practical experience</span>
                                        </div>
                                        <div class="col-md-6">
                                            <b>{{ Auth::user()->year_of_practice }}</b>
                                        </div>
                                        <br><br>


                                    </div>

                                    <hr>
                                    <h2>Images & Photos</h2>
                                    <hr>
                                    <div class="row">
                                        @if(Auth::user()->photo_video != "")
                                        <?php $splitfile = explode(",", Auth::user()->photo_video);?>

                                            @foreach ($splitfile as $image)
                                                @if ($image != "")
                                                    <div class="col-md-4">
                                                        <a href="{{ $image }}" target="_blank"><img class="comphotos" src="{{ $image }}" alt="images"></a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        
                                        
                                        @else

                                        <div class="col-md-12">
                                            <span class="title-infos" style="text-align: center; font-weight: bold;"><i class="fas fa-images"></i> No images and photos yet</span>
                                        </div>

                                        @endif

                                        <br><br>


                                    </div>
                                    


                                    <br><br>

                                    @if(Auth::user()->facebook != "" || Auth::user()->twitter || Auth::user()->instagram)
                                    <div class="col-sm-12">
											<span class="title-links">Social Links</span>
											<ul class="ul-social-links">
                                                @if(Auth::user()->facebook)

                                                <li class="li-social-links">
													<a href="{{ Auth::user()->facebook }}" data-tootik="Facebook" data-tootik-conf="square" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                
                                                @endif
                                                
                                                
                                                @if(Auth::user()->twitter)

                                                <li class="li-social-links">
													<a href="{{ Auth::user()->twitter }}" data-tootik="Twitter" data-tootik-conf="square" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                
                                                @endif


                                                @if(Auth::user()->instagram)

                                                <li class="li-social-links">
													<a href="{{ Auth::user()->instagram }}" data-tootik="Instagram" data-tootik-conf="square" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                                </li>
                                                
                                                @endif

											</ul>
                                        </div>
                                        @endif








								</div>
							</div>
						</div>
					</div>
                </section>








			</div>
		</div>

		<!-- #JQUERY-PLUGINS# -->
        <script src="{{ asset('business/js/jquery.min.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		{{-- <script src="{{ asset('business/js/bootstrap.min.js') }}"></script> --}}
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="{{ asset('business/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('business/js/swiper.min.js') }}"></script>
		<script src="{{ asset('business/js/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('business/js/wow.min.js') }}"></script>
		<script src="{{ asset('business/js/validator.min.js') }}"></script>
    	<script src="{{ asset('business/js/form-scripts.js') }}"></script>
		<script src="{{ asset('business/js/script.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
		<script>
		/**** EasyPieChart Circle Progress ****/
		$(function() {
			//circle progress additional skills
		    $('.chart').easyPieChart({
		        barColor: '#757575',
		        trackColor: 'rgba(255,255,255,0)',
		        scaleColor: 'rgba(255,255,255,0)',
		        lineWidth: '10',
		        lineCap: 'square'
		    });
		});


        function comingSoon(){
            swal('Hey!', 'This feature is coming soon to your screen', 'info');
        }

        function previewPicture(){
            var formData = new FormData();
            var route = "{{ URL('Ajax/updatebusinessLogo') }}";
            var imageReader = new FileReader();
            imageReader.readAsDataURL(document.getElementById('file').files[0]);

            imageReader.onload = function(imageEvent){
                document.getElementById('my_image').src = imageEvent.target.result;
            };

            // Do Ajax Update Logo
            var fileSelect = document.getElementById("file");
            if(fileSelect.files && fileSelect.files.length == 1){
                var file = fileSelect.files[0]
                formData.set("file", file , file.name);
            }


                setHeaders();
                jQuery.ajax({
                url: route,
                method: 'post',
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                dataType: 'JSON',
                
                success: function(result){
                    $("#file").val('');

                    if(result.message == "success"){
                        iziToast.success({
                            title: 'Good',
                            message: 'Successfully uploaded',
                        });
                    }
                    else{
                        iziToast.error({
                            title: 'Oops!',
                            message: 'Cannot upload',
                        });
                    }

                    
                }

            });

        };

            //Set CSRF HEADERS
            function setHeaders(){
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
                }
                });
            }
		</script>

	</body>

<!-- Mirrored from rstill.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 11:52:26 GMT -->
</html>
