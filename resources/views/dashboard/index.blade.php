@extends('app.layout')
@section('css')
<link rel="stylesheet" href="/css/home.css">

@endsection

@section('body')
<div class="col-md-8 container-flex">
	<iframe width="700" height="400" src="https://www.youtube.com/embed/E4K7sqFsQ-k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-md-4" style="border:solid 1px gray ">
	<h4>Danh sách phim</h4>
	<iframe width="100" height="50" src="https://www.youtube.com/embed/nPvImPRQE5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<span id="video-title" class="video-title.ytd-playlist-panel-video-renderer" title="Cô thắm không về (Thảo Phạm)">Cô thắm không về (Thảo Phạm)</span>
	<iframe width="100" height="50" src="https://www.youtube.com/embed/BMKco-BMBfo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>
@endsection

