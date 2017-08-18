@extends('layouts.master')
@section('title')
    <title>Contact</title>
    @endsection
@section('content')
    <div class="banner contact-banner">
        <div class="container">
            <div class="title">CONTACT US</div>
            <div class="des">Fill out the information below and we will be sure to contact you back either by email or phone</div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
        </div>
    @endif
    @if(Session::has('message'))
        <div class="alert alert-info"> {{Session::get('message')}}
        </div>
    @endif
    <div class="container contact-form">
        <h2 class="text-center">Got a question for us?</h2>
        <form action="{{ url('contact', true) }}" class="" method="post">
            {{ csrf_field() }}
            <div class="contact-input col-lg-6">
                <div class="form-group">
                    <label for="name" class="sr-only"></label>
                    <input type="text" placeholder="Your Name" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="organization" class="sr-only"></label>
                    <input type="text" placeholder="Organization" name="organization"  class="form-control" id="organization">
                </div>
                <div class="form-group">
                    <label for="email" class="sr-only"></label>
                    <input type="email" placeholder="Email" name="email"  class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="tel" class="sr-only"></label>
                    <input type="tel" placeholder="Phone" name="phone"  class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="message" class="sr-only"></label>
                    <textarea name="message" placeholder="Message" id="message" rows="3"  class="form-control" style="width: 100%"></textarea>
                </div>
                <div class="btn-block text-center">

                    <button type="submit" class="btn btn-danger">SEND</button>
                </div>
            </div>
        </form>
    </div>
    {{--<div class="contact-partners text-center">
        <div class="title ">PARTNERS</div>
        <ul class="container">
            <li class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img src="{{url('img/vive.png')}}" alt=""></li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img src="{{url('img/vive.png')}}" alt=""></li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img src="{{url('img/vive.png')}}" alt=""></li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img src="{{url('img/vive.png')}}" alt=""></li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img src="{{url('img/vive.png')}}" alt=""></li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img src="{{url('img/vive.png')}}" alt=""></li>
        </ul>
    </div>--}}
    <div class="clear_fix"></div>
    <div class="contact-link">
        <div class="title text-center">CONTACT</div>
        <div class="container">
            <ul class="col-lg-6 col-md-6 col-sm-6 col-md-12">
                <li><a href="mailto:contact@multiverseinc.com" target="_blank">General:contact@multiverseinc.com</a></li>
                <li><a href="mailto:bo.liu@multiverseinc.com" target="_blank">Public Relations:bo.liu@multiverseinc.com</a></li>
                <li><a href="mailto:lilian.chen@multiverseinc.com" target="_blank">Careers:lilian.chen@multiverseinc.com</a></li>
                <li><a href="mailto:chenjun.li@multiverseinc.com" target="_blank">Business:chenjun.li@multiverseinc.com</a></li>
            </ul>
            <ul class="col-lg-6 col-md-6 col-sm-6 col-md-12">
                <li><a href="https://www.facebook.com/MultiverseVR" target="_blank">facebook.com/MultiverseVR</a></li>
                <li><a href="https://twitter.com/VRmultiverse" target="_blank">twitter.com/VRmultiverse</a></li>
                <li><a href="https://www.instagram.com/vrmultiverse/" target="_blank">instagram.com//vrmultiverse</a></li>
                <li><a href="https://linkedin.com/company/multiverse-entertainment" target="_blank">linkedin.com/company/multiverse-entertainment</a></li>
            </ul>
        </div>

    </div>
    {{--<div id="googleMap" style="width: 100%;height: 30rem">

    </div>--}}
    @endsection
@section('other')
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCWrXFcigxn4wV3r1vKeX-k6GUorhCgQhY&sensor=false"></script>
@endsection
@section('script')
<script>
    var uluru = {lat: 22.5169188860, lng: 113.9212878783};
    var marker;

    function initialize()
    {
        var mapProp = {
            center:uluru,
            zoom:10,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        marker=new google.maps.Marker({
            position:uluru,
            animation:google.maps.Animation.BOUNCE
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection