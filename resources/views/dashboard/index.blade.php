@extends('app.layout')
@section('css')

<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" type="text/css" href="/css/fontawesome.css">
<link rel="stylesheet" type="text/css" href="/css/fontawesome.min.css">
<script src="https://code.jquery.com/jquery-latest.js"></script>
@endsection

@section('body')
<script>
	function editSrc(url){
		document.getElementById("video").src = url;

	}
</script>
<script>
$(function(){
    $('div').scrollTop(600);
});
</script>
<div class="col-md-8 container-flex">
	<iframe id="video" width="700" height="400" src="https://www.youtube.com/embed/E4K7sqFsQ-k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-md-4" id="container">
	<h4>Danh sách phim</h4>
	@foreach($new_eposide as $eps)
	<div class="item-video">
		<div onclick="editSrc('https://www.youtube.com/embed/{{$eps->id_youtobe}}')" class="col-md-4">
			<img onclick="editSrc('https://www.youtube.com/embed/dkFnNB-s-G4')"id="img" class="style-scope yt-img-shadow" alt="" width="100" src="{{$eps->image}}">
		</div>
		<div class="col-md-8">
			<h4 class="style-scope ytd-playlist-panel-video-renderer">
				<span onclick="editSrc" id="video-title" class="style-scope ytd-playlist-panel-video-renderer" title="">
					{{$eps->name}}
				</span>
			</h4>
			<div id="byline-containerz" class="style-scope ytd-playlist-panel-video-renderer">
				<span id="byline" class="style-scope ytd-playlist-panel-video-renderer">{{$eps->singer}}</span>
			</div>
		</div>
	</div>
	@endforeach
</div>


@endsection

