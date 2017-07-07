@extends('layouts.master')
@section('title')
    <title>Seeking Dawn Multiverse Inc.</title>
@endsection
@section('other')
    <link href="{{url('css/sk.css')}}" rel="stylesheet">
    @endsection
@section('content')
	<div id="banner" class="">
		<video  preload="auto" autoplay controls="controls" width="100%" height="auto" id="banner_video" muted="true" poster="/img/SeekingDawn_Banner.png" >
			<source src="/video/seekingDawnPlay.mp4">
		</video>
		<div id="banner_shadow"></div>
		<div id="banner_des"  class="hidden-sm hidden-xs">
			<img id="video_title" src="/img/SeekingDawn_logo.png"></img>
			<p id="video_despriction" class="des">
                Seeking Dawn is a grand-scaled VR game that blends together Survival, exploration, FPS and RPG elements.  The game puts its players in an immersive alien world filled with interesting creatures, unknown dangers, and many other surprises still to be discovered.
                <br>
                Seeking Dawn is complete with an epic story and characters whose unique personalities shape the world around you. With hundreds of hours of gameplay, you can expect to scavenge, craft, build, explore, fight and so much more as you unfold the mysteries that lay within our game.
            </p>
			<div id="status">
				COMING SOON
			</div>
		</div>
	</div>
    <div class="hidden-lg hidden-md sm-despriction">
        <p id="video_despriction" class="des">
            Seeking Dawn is a grand-scaled VR game that blends together Survival, exploration, FPS and RPG elements.  The game puts its players in an immersive alien world filled with interesting creatures, unknown dangers, and many other surprises still to be discovered.
            <br>
            Seeking Dawn is complete with an epic story and characters whose unique personalities shape the world around you. With hundreds of hours of gameplay, you can expect to scavenge, craft, build, explore, fight and so much more as you unfold the mysteries that lay within our game.
        </p>
        <div class="status">
            COMING SOON
        </div>
    </div>
	<div class="poster poster1 section">
		<div class="shadow"></div>
        <div class="hidden-xs hidden-sm hidden-md height-100px"></div>
		<div class="title col-md-6 col-md-offset-6 col-sm-12">GAME FEATURES</div>
        
		<div class="des col-md-6 col-md-offset-6 col-sm-12">
			<p>
                -	CO-OP Campaign<br>
                -	Hundreds of equipment pieces to craft<br>
                -	 Various different Tech Trees to explore<br>
                -	Survival aspects such as hunger, oxygen. And more<br>
                -	Base building, including an arsenal of defense construction options<br>
                -	A variety of newly discovered creatures<br>
                -	RPG elements such as “Gear Rarity Tiers” & combinations of equipment<br>
                -	Unique and impactful use of abilities<br>
                -	Realistic climbing, swimming, and rope swinging elements<br>
                -	And much more!</p>
		</div>
	</div>
	<div class="poster poster2 section">
		<!-- <img src="/img/poster2.png" alt="poster1" > -->
		<div class="shadow"></div>
        <div class="hidden-xs hidden-sm hidden-md height-100px"></div>
		<div class="title col-md-6 col-md-offset-6 col-sm-12">STORY</div>
		<div class="des col-md-6 col-md-offset-6 col-sm-12">
			<p>In the year 2097, several planets in our system and nearby star systems, including Alpha Centauri, have been colonized by humanity. An entire solar system is in the grips of a corrupt political entity called “The United Federation of Sol” (UFS).<br>
                The people of this time are violently oppressed and live in fear and despair due to the malicious intent of the UFS.<br>
                Humanities only hope for freedom lies in the hands of Lt. James Murphy, a newborn of  the first settlers of the Alpha Centauri system.  Murphy joined what is known as “The Republic of Alpha Centauri” (RAC) at a very young age. His intent was to prove himself in battle during our first attempt at regaining independence. We like to call this our “independence War”. We have lost many battles, and worse yet, many young men and women. RAC is currently on the verge of being completely overrun by the UFS Armada.<br>
                The war has leaded us here; Donovan Crater. Will we ever see the light at the end of this tunnel?

            </p>
		</div>
	</div>
	<!-- Footer -->
@endsection
@section('script')
    <script>
        var _video = document.getElementById('banner_video');
        _video.controls = false;
        _video.autoplay = true;
        _video.loop = true;
        _video.preload = true;
        _video.muned = true;
    </script>
@endsection