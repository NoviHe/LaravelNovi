@extends('admin.main')
@section('title','User Tambah')
@section('content')
<h1>User <small class="text-muted">Tambah</small></h1>
<hr>
@if(session('result') == 'fail')
<div class="alert alert-danger alert-dismissible fade show">
	<strong>Failed!</strong> Gagal Disimpan.
	<button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif
<div class="row">
	<div class="col-md-6">
		<form method="POST" action="{{ route('admin.user.add') }}">
			{{ csrf_field()}}
			<div class="card">
				<div class="card-header">
					<h5>Buat User Baru</h5>
				</div>

				<div class="card-body"> 
					<div class="form-group form-label-group">
						<input type="text" name="name" 
						class="form-control {{ $errors->has('name')?'is-invalid':'' }}"
						value="{{ old('name') }}"
						id="iName" placeholder="Name" required>
						<label for="iName">Name</label>
						@if($errors->has('name'))
						<div class="invalid-feedback">{{ $errors->first('name') }}</div>
						@endif
					</div>	

					<div class="form-group form-label-group">
						<input type="email" name="email" 
						class="form-control {{ $errors->has('email')?'is-invalid':'' }}"
						value="{{ old('email') }}"
						id="iEmail" placeholder="Email" required>
						<label for="iEmail">Email</label>
						@if($errors->has('email'))
						<div class="invalid-feedback">{{ $errors->first('email') }}</div>
						@endif
					</div>	

					<div class="form-group form-label-group">
						<input type="password" name="password" 
						class="form-control {{ $errors->has('password')?'is-invalid':'' }}"
						id="iPassword" placeholder="Password" required>
						<label for="iPassword">Password</label>
						@if($errors->has('password'))
						<div class="invalid-feedback">{{ $errors->first('password') }}</div>
						@endif
					</div>	

					<div class="form-group form-label-group">
						<input type="password" name="repassword" 
						class="form-control {{ $errors->has('repassword')?'is-invalid':'' }}"
						id="iRePassword" placeholder="Re Password" required>
						<label for="iRePassword">Re Password</label>
						@if($errors->has('repassword'))
						<div class="invalid-feedback">{{ $errors->first('repassword') }}</div>
						@endif
					</div>	

					<div class="form-group form-label-group {{ $errors->has('akses')?'is-invalid':'' }}">
						<?php 
							$val = old('akses');
						?>
						<select class="form-control" name="akses">
							<option value="" {{ $val==""?'selected':''}}>Pilih Akses Sebagai :</option>
							<option value="operator" {{ $val=="opearator"?'selected':''}}>Operator</option>
							<option value="admin" {{ $val=="admin"?'selected':''}}>Admin</option>
						</select>
						@if($errors->has('akses'))
						<div class="invalid-feedback">{{ $errors->first('akses') }}</div>
						@endif
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div>

			</div>
		</form>
	</div>
</div>





@endsection