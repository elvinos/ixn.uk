{{--
	Template Name: Contact Template
	--}}

	@extends('layouts.app')

	@section('content')

	@include('partials.page-header')


		<div class="container-fluid" id="contact-container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                                
                                
                                <div id="mapbox">
                                    <span>Get in touch.</span>
                                    <a href="https://www.google.co.uk/maps/place/The+UCL:+Department+of+Computer+Science/@51.5230695,-0.13318,18z/data=!4m5!3m4!1s0x48761b2f06cd24d9:0x921db3ae5ef57ce7!8m2!3d51.523188!4d-0.1324129">
                                    <div id="map"></div>
                                </a>

                                <span class= "contactText"> Department of Computer Science <br/>University College London<br/>Gower Street<br/>London, WC1E 6BT<br/>United Kingdom </span>
                                </div>


							
                            
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 aboutBox">
                            <div class="profile" id="contactProfile">
                                <div class="spacer"></div>
                                <a href="http://www.cs.ucl.ac.uk/people/Yun.Fu.html/">
                                <div class="img1"></div>
                            </a>
                                <span class="aboutText">Dr. Yun Fu<br/>App Project Manager<br/>Teaching Fellow<br/>University College London<br/>
                            </span>
                                <a href="mailto:y.fu@cs.ucl.ac.uk" class="fa fa-envelope-o fa-lg" aria-hidden="true" id="faHome"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 aboutBox">
                            <div class="profile" id="contactProfile">
                                <div class="spacer"></div>
                                <a href="http://www0.cs.ucl.ac.uk/staff/D.Mohamedally/">
                                <div class="img2"></div>
                            </a>
                                <span class="aboutText">Dr. Dean Mohamedally<br/>
                                Teaching Fellow<br/>
                                Director for Apps Engineering<br/>
                                University College London<br/>
                            </span>
                                <a href="mailto:d.mohamedally@cs.ucl.ac.uk" class="fa fa-envelope-o fa-lg" aria-hidden="true" id="faHome"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




	@endsection