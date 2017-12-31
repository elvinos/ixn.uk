{{--
	Template Name: Contact Template
	--}}

	@extends('layouts.app')

	@section('content')

	@include('partials.page-header')


		<div class="container-fluid" id="contact-container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 aboutBox">
                            <div class="profile-box">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-12">
                                        <div class="img1"></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-12">
                                        <span class="aboutText">Dr. Yun Fu<br/>App Project Manager<br/>Teaching Fellow<br/>University College London<br/></span>
                                        <a href="mailto:y.fu@cs.ucl.ac.uk" class="fa fa-envelope-o fa-lg" aria-hidden="true" id="faHome"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 aboutBox">
                            <div class="profile-box">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-12">
                                        <div class="img2"></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-12">
                                        <span class="aboutText">Dr. Dean Mohamedally<br/> Teaching Fellow<br/> Director for Apps Engineering<br/> University College London<br/></span><a href="mailto:d.mohamedally@cs.ucl.ac.uk" class="fa fa-envelope-o fa-lg"
                                                                                                                                                                                          aria-hidden="true" id="faHome"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="mapbox">
                                <a href="https://www.ucl.ac.uk/maps/66-72-gower-street">
                                    <div id="map"></div>
                                </a>
                                <span class= "contactText"> Department of Computer Science <br/>University College London<br/>66-72 Gower Street<br/>London, WC1E 6BT<br/>United Kingdom </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script>
        var map;
        function initMap() {
            var myLatLng = {lat:  51.52212634 , lng: -0.132063458};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8cL3UGV7o9Yg7JU5jcHMhksbLhKvQ8Ik&callback=initMap"
            async defer></script>

	@endsection