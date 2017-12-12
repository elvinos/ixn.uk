{{--
	Template Name: Contact Template
	--}}

	@extends('layouts.app')

	@section('content')

	@include('partials.page-header')

		<div class="container-fluid">
            <div class="row">
                <div class=" offset-lg-1 col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-md-12 section-divider-row">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        	<div class="mapouter">
							<div style='overflow:hidden;height:308px;width:535px;'><div id='gmap_canvas' style='height:308px;width:535px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://mapswebsite.org/'>google widgets</a>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 aboutBox">
                            <div class="profile">
                                <div class="spacer"></div>
                                <div class="img1"></div>
                                <span class="aboutText">Dr. Yun Fu<br/>App Project Manager<br/>Teaching Fellow<br/>University College London<br/>
                            </span>
                                <a href="mailto:y.fu@cs.ucl.ac.uk" class="fa fa-envelope-o fa-lg" aria-hidden="true" id="faHome"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 aboutBox">
                            <div class="profile" id=>
                                <div class="spacer"></div>
                                <div class="img2"></div>
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


    <script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBoLXay-MnkvRMUI_g3ZUvguyvqvpOPstg'></script>
     <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=6d9dec0cb673457d2c02ab0662f7a7989f0e8566'></script>
     <script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(51.52455920000001,-0.1340400999999929),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.52455920000001,-0.1340400999999929)});infowindow = new google.maps.InfoWindow({content:'<strong>UCL Computer Science</strong><br>University College London, Gower St, Bloomsbury, London WC1E 6BT<br> London<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
    </script>


	@endsection