@extends('app.layout')
@section('css')
<link rel="stylesheet" href="/css/home.css">

@endsection

@section('body')
<div class="col-md-8 container-flex" style="width: 560px">
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<iframe width="560" height="350" src="https://www.youtube.com/embed/E4K7sqFsQ-k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4">
<!-- 	<h4>Danh sách phim</h4>
	<iframe width="100" height="50" src="https://www.youtube.com/embed/nPvImPRQE5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<p><strong>Cô thắm không về</strong></p> -->

</div>
@endsection

