@extends('templates.default')
@section('main')
<div class="content">
	<div class="container-fluid">
				<div class="page-title-box">
					<div class="row align-items-center">
						<div class="col-sm-6">
							<h4 class="page-title">Detail Blog</h4>
							<ol class="breadcrumb">		
							</ol>
						</div>
						
					</div>
				</div>
				<!-- end row -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								
								<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mb-3" style="width: 68rem;">
  <img class="card-img-top" src="{{asset('public/images/'.$blog->foto)}}" alt="Card image cap">
  <div class="card-body">
    <h2 class="card-title">{{$blog->judul}}</h2>
    <p class="card-text"> <h5> {{$blog->isi_berita}} </h5></p>
    <p class="card-text mb-4"><small class="text-muted">{{$blog->created_at->diffForHumans()}}</small></p>
    <div class="text-right">
      <button type="button" onclick="window.location='{{route("blog")}}'" class="btn btn-secondary">Kembali</button>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
							</div>
						</div>
					</div>
				</div>
	</div>
</div>
@endsection