@extends('templates.default')
@section('main')
<div class="content">
	<div class="container-fluid">
				<div class="page-title-box">
					<div class="row align-items-center">
						<div class="col-sm-6">
							<h4 class="page-title">Tambah Blog</h4>
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
								{!! Form::open(array('route' => 'blog.store','method'=>'POST', 'enctype' => 'multipart/form-data' )) !!}
          <div class="form-group">
              {!! Form::label('judul', 'Judul', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('judul', '', ['class' => 'form-control' . ( $errors->has('judul') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masuakan Judul', old('judul'), 'autofocus', 'required']) !!}
                  <!--  @error('judul')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror -->
              </div>
          </div>
          <div class="form-group">
              {!! Form::label('Isi Berita', 'Isi Berita', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::textarea('isi_berita', '', ['class' => 'form-control' . ( $errors->has('isi_berita') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masuakan Judul', 'required']) !!}
                   <!-- @error('isi_berita')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror -->
              </div>
          </div>
          <div class="form-group">
            {!! Form::label('Foto', 'Foto', ['class' => 'control-label col-md-3']) !!}
            <div class="col-md-12">
              {!!Form::file("foto",[ "class" => "form-group", 'required' ])!!}
            </div>
          </div>
          <div class="form-group">
              <div class="col-md-3">
                  {{ Form::submit('Simpan',['class' => 'btn btn-primary'])}}
              </div>
          </div>

          {{ Form::close()}}
								
							</div>
						</div>
					</div>
				</div>
	</div>
</div>
@endsection