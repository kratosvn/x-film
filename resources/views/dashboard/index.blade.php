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
	<div class="col-md-4">
		<img onclick="editSrc('https://www.youtube.com/embed/dkFnNB-s-G4')"id="img" class="style-scope yt-img-shadow" alt="" width="100" src="https://i.ytimg.com/vi/sG3AmfvbNVk/hqdefault.jpg?sqp=-oaymwEYCKgBEF5IVfKriqkDCwgBFQAAiEIYAXAB&amp;rs=AOn4CLBeYRX8X8bWjv3iIzw5QLu6UZ0bZg">

		<img onclick="editSrc('https://www.youtube.com/embed/PJDtKo1VlTA')" id="img" class="style-scope yt-img-shadow" alt="" width="100" style="padding-top: 8px;"  src="https://i.ytimg.com/vi/sG3AmfvbNVk/hqdefault.jpg?sqp=-oaymwEYCKgBEF5IVfKriqkDCwgBFQAAiEIYAXAB&amp;rs=AOn4CLBeYRX8X8bWjv3iIzw5QLu6UZ0bZg">

		<img onclick="editSrc('https://www.youtube.com/embed/v6n_xndNH3k')" id="img" class="style-scope yt-img-shadow" alt="" width="100" style="padding-top: 10px;" src="https://i.ytimg.com/vi/sG3AmfvbNVk/hqdefault.jpg?sqp=-oaymwEYCKgBEF5IVfKriqkDCwgBFQAAiEIYAXAB&amp;rs=AOn4CLBeYRX8X8bWjv3iIzw5QLu6UZ0bZg">
		
		<img onclick="editSrc('https://www.youtube.com/embed/8x2NjwwHUbQ')" id="img" class="style-scope yt-img-shadow" alt="" width="100" style="padding-top: 10px;" src="https://i.ytimg.com/vi/sG3AmfvbNVk/hqdefault.jpg?sqp=-oaymwEYCKgBEF5IVfKriqkDCwgBFQAAiEIYAXAB&amp;rs=AOn4CLBeYRX8X8bWjv3iIzw5QLu6UZ0bZg">

	</div>

	<div class="col-md-8">
		<h4 class="style-scope ytd-playlist-panel-video-renderer">
			<ytd-badge-supported-renderer class="style-scope ytd-playlist-panel-video-renderer" disable-upgrade="">
			</ytd-badge-supported-renderer>

			<span id="video-title" class="style-scope ytd-playlist-panel-video-renderer" title="EM ƠI LÊN PHỐ | NGUYỄN ĐÌNH VŨ | MINH VƯƠNG M4U | LIVE LOOPING | COVER">
				EM ƠI LÊN PHỐ | NGUYỄN ĐÌNH VŨ | MINH VƯƠNG M4U | LIVE LOOPING | COVER
			</span>


		</h4>
		<div id="byline-containerz" class="style-scope ytd-playlist-panel-video-renderer">
			<span id="byline" class="style-scope ytd-playlist-panel-video-renderer">Nguyễn Đình Vũ Official</span>
			<ytd-badge-supported-renderer class="style-scope ytd-playlist-panel-video-renderer" disable-upgrade="">
			</ytd-badge-supported-renderer>
		</div>
	</div>
		<div class="col-md-8">
		<h4 class="style-scope ytd-playlist-panel-video-renderer">
			<ytd-badge-supported-renderer class="style-scope ytd-playlist-panel-video-renderer" disable-upgrade="">
			</ytd-badge-supported-renderer>

			<span id="video-title" class="style-scope ytd-playlist-panel-video-renderer" title="EM ƠI LÊN PHỐ | NGUYỄN ĐÌNH VŨ | MINH VƯƠNG M4U | LIVE LOOPING | COVER">
				EM ƠI LÊN PHỐ | NGUYỄN ĐÌNH VŨ | MINH VƯƠNG M4U | LIVE LOOPING | COVER
			</span>


		</h4>
		<div id="byline-containerz" class="style-scope ytd-playlist-panel-video-renderer">
			<span id="byline" class="style-scope ytd-playlist-panel-video-renderer">Nguyễn Đình Vũ Official</span>
			<ytd-badge-supported-renderer class="style-scope ytd-playlist-panel-video-renderer" disable-upgrade="">
			</ytd-badge-supported-renderer>
		</div>
	</div>
	
	<div class="col-md-8">
		<h4 class="style-scope ytd-playlist-panel-video-renderer">
			<ytd-badge-supported-renderer class="style-scope ytd-playlist-panel-video-renderer" disable-upgrade="">
			</ytd-badge-supported-renderer>

			<span id="video-title" class="style-scope ytd-playlist-panel-video-renderer" title="EM ƠI LÊN PHỐ | NGUYỄN ĐÌNH VŨ | MINH VƯƠNG M4U | LIVE LOOPING | COVER">
				EM ƠI LÊN PHỐ | NGUYỄN ĐÌNH VŨ | MINH VƯƠNG M4U | LIVE LOOPING | COVER
			</span>


		</h4>
		<div id="byline-containerz" class="style-scope ytd-playlist-panel-video-renderer">
			<span id="byline" class="style-scope ytd-playlist-panel-video-renderer">Nguyễn Đình Vũ Official</span>
			<ytd-badge-supported-renderer class="style-scope ytd-playlist-panel-video-renderer" disable-upgrade="">
			</ytd-badge-supported-renderer>
		</div>
	</div>

	<div class="col-md-8">
		<h4 class="style-scope ytd-playlist-panel-video-renderer">
			<ytd-badge-supported-renderer class="style-scope ytd-playlist-panel-video-renderer" disable-upgrade="">
			</ytd-badge-supported-renderer>

			<span id="video-title" class="style-scope ytd-playlist-panel-video-renderer" title="EM ƠI LÊN PHỐ | NGUYỄN ĐÌNH VŨ | MINH VƯƠNG M4U | LIVE LOOPING | COVER">
				EM ƠI LÊN PHỐ | NGUYỄN ĐÌNH VŨ | MINH VƯƠNG M4U | LIVE LOOPING | COVER
			</span>


		</h4>
		<div id="byline-containerz" class="style-scope ytd-playlist-panel-video-renderer">
			<span id="byline" class="style-scope ytd-playlist-panel-video-renderer">Nguyễn Đình Vũ Official</span>
			<ytd-badge-supported-renderer class="style-scope ytd-playlist-panel-video-renderer" disable-upgrade="">
			</ytd-badge-supported-renderer>
		</div>
	</div>

</div>


@endsection

