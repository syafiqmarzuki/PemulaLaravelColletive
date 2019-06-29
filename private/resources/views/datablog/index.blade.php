@extends('templates.default')
@section('main')
<div class="content">
	<div class="container-fluid">
				<div class="page-title-box">
					<div class="row align-items-center">
						<div class="col-sm-6">
							<h4 class="page-title">Data Blog</h4>
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
								<div class="text-right mb-4">
    								<button class="btn btn-primary" type="button" onclick="window.location='{{route("blog.create")}}'" name="button">Tambah</button>
  								</div>

  								@if($blogs->isEmpty())
		  						<div class="text-center">
		    						<h4>Tidak ada Blog</h4>
		  						</div>
		 						@else
		 						<div class="row">
		 							@foreach($blogs as $blog)
		 							<div class="col-4 mb-3">
		 								<div class="card" style="width: 18rem;">
		 									<img  class="card-img-top" src="{{asset('public/images/'.$blog->foto)}}" alt="Tidak ada gambar">
		 									<div class="card-body">
		 										<h3 class="card-title"><a href="{{route('blog.show', $blog)}}">{{$blog->judul}}</a></h3><p>{{str_limit($blog->isi_berita, 80)}}</p>
		 										<div class="text-right">
		 											<a href="{{route('blog.show', $blog)}}">Lihat Selengkapnya</a>
		 										</div>
		 									</div>

		 									<div class="card-footer text-right">
	          									<button type="button" onclick="window.location='{{route("blog.edit", $blog)}}'" class="btn btn-warning" name="button">Edit</button>
	          									<button type="button" data-toggle="modal" data-target="#hapus{{$blog->id}}" class="btn btn-danger" name="button">Hapus</button>
        									</div>
		 								</div>
		 							</div>

		 							<div class="modal fade" id="hapus{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		 								<div class="modal-dialog" role="document">
		 									<div class="modal-content">
		 										{!! Form::open(array('route' =>['blog.delete',$blog],'method'=>'DELETE')) !!}

		 										<div class="modal-header">
        												<h5 class="modal-title" id="exampleModalLabel">Hapus Blog</h5>
        												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          												<span aria-hidden="true">&times;</span>
        												</button>
      											</div>

      											<div class="modal-body">
      												<p>Apakah anda yakin akan menghapus blog <strong>{{$blog->judul}}</strong> </p>
      											</div>

      											<div class="modal-footer">
      												{{ Form::submit('Simpan',['class' => 'btn btn-secondary','data-dismiss' => 'modal'])}}

      												{{ Form::submit('Hapus',['class' => 'btn btn-danger'])}}
      											</div>
      											{{ Form::close()}}
		 									</div>
		 								</div>
		 							</div>
		 							@endforeach
		 							@endif
		 						</div>
							</div>
						</div>
					</div>
				</div>
	</div>
</div>
@endsection