
	<div class="row">
		<div class="col-md-3">
<!-- 			<div class="form-group">
				{!! Form::label('registration_number', 'Nomor induk', ['class'=>'control-label']) !!}
				{!! Form::text('registration_number', null, ['class' => 'form-control', 'id'=>'registration_number']) !!}
				<div control-labelss="help-block registration_number" style="display:none" ></div>
			</div>	 -->
<!-- 			<div class="form-group">
				@if (isset($student->image))
					<img filename="{{ $student->image }}" src="/imagecache/medium_sq/{{ $student->image }}" alt="" class="img-responsive img-circle" id="dataimage">
				@else
					<img filename="default.jpg" src="/imagecache/medium_sq/default.jpg" alt="" class="img-responsive img-circle " id="dataimage">
				@endif
			</div>
			<div class="form-group">
				{!! Form::label('image', 'Upload Foto', ['class'=>'btn btn-primary btn-block']) !!}
				{!! Form::file('image' , ['id'=>'image', 'class'=>'hidden']) !!}
				<div class="help-block image" style='display:none'></div>				
			</div> -->







			<div class="fileinput" data-provides="fileinput" id="jasny">
			  
			  <div class="fileinput-new form-group">
			    <img src="/imagecache/medium_sq/default.jpg" alt="" class="img-responsive img-circle">
			  </div>
			  <div class="fileinput-preview fileinput-exists text-center form-group" style="max-width: 200px; max-height: 200px;overflow:hidden">			  	
			  </div>
			  
			  <div class="text-center form-group">
			    <div class="btn btn-primary btn-file">
			    	<div class="fileinput-new">Upload Foto</div>
			    	<div class="fileinput-exists">Ganti</div>
			    	<input type="file" name="image">
			    </div>
			    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Hapus</a>
			  </div>
			</div>



		</div>
		 
		<div class="col-md-4">
			<div class="form-group">
				{!! Form::label('registered_date', 'Tanggal terdaftar', ['class'=>'control-label']) !!}
				{!! Form::text('registered_date', null, ['class' => 'form-control', 'id'=>'registered_date']) !!}
				<div class="help-block registered_date" style="display:none"></div>
			</div>
			<div class="form-group">
				{!! Form::text('birth_date', null, ['class' => 'form-control', 'id'=>'birth_date', 'placeholder'=>'Tanggal lahir']) !!}
				<div class="help-block birth_date" style="display:none"></div>
			</div>			
			<div class="form-group">
				{!! Form::text('birth_place', null, ['class' => 'form-control', 'id'=>'birth_place', 'placeholder'=>'Tempat lahir']) !!}
				<div class="help-block birth_place" style="display:none"></div>
			</div>			
			<div class="form-group">
				{!! Form::label('institution_id', 'Lembaga', ['class'=>'control-label']) !!}
				@if(count($institutions) == 1)
					{!! Form::select('institution_id', $institutions, false, ['class' => 'form-control', 'id'=>'institution_id']) !!}				
				@else
					{!! Form::select('institution_id',array('' => '-Silakan Pilih-') + $institutions, false, ['class' => 'form-control', 'id'=>'institution_id']) !!}				
				@endif
				<div class="help-block institution_id" style='display:none'></div>
			</div>

		</div>
		<div class="col-md-5">
			
			<div class="form-group icheck">				
				{!! Form::label('Jenis kelamin') !!}<br>
				{!! Form::radio('gender', 'L', false,  ['class' => 'form-control', 'id'=>'male']) !!}
				{!! Form::label('male', 'Laki-laki', ['class'=>'control-label']) !!}<br>
				{!! Form::radio('gender', 'P', false, ['class' => 'form-control', 'id'=>'female']) !!}
				{!! Form::label('female', 'Perempuan', ['class'=>'control-label']) !!}				
				<br>
				<div class="help-block gender" style='display:none'></div>
			</div>	
			<div class="form-group icheck">				
				{!! Form::label('Kelompok') !!}<br>
				@foreach($groups as $group)
					{!! Form::radio('group_id', $group->id, false,  ['class' => 'form-control', 'id'=>strtolower($group->name)]) !!}
					{!! Form::label( strtolower($group->name), $group->name , ['class'=>'control-label']) !!}<br>
				@endforeach
				<br>
				<div class="help-block  group_id" style='display:none'></div>
			</div>			
			
				<div class="form-group icheck status_wrapper">				
					{!! Form::checkbox('status', null, false,  ['class' => 'form-control', 'id'=>'status']) !!}
					{!! Form::label('datastatus', 'Non Aktif', ['class'=>'control-label text-orange']) !!}
				</div>
				<div class="form-group stop_date_wrapper" style="display:none;">
					{!! Form::label('datastop_date', 'Mulai tanggal:', ['class'=>'control-label']) !!}
					{!! Form::text('stop_date', null, ['class' => 'form-control', 'id'=>'stop_date']) !!}
								
			</div>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::text('fullname', null, ['class' => 'form-control', 'id'=>'fullname', 'placeholder'=>'Nama Lengkap']) !!}
				<div class="help-block  fullname" style="display:none"></div>
			</div>
			<div class="form-group">
				{!! Form::text('nickname', null, ['class' => 'form-control', 'id'=>'nickname', 'placeholder'=>'Nama Panggilan']) !!}
				<div class="help-block  nickname" style="display:none"></div>
			</div>
			<div class="form-group parent_wrapper">
				{!! Form::text('parent', null, ['class' => 'form-control', 'id'=>'parent', 'placeholder'=>'Nama orang tua (ayah+ibu)']) !!}
				<div class="help-block parent" style="display:none"></div>
			</div>			
			<div class="form-group">
				{!! Form::textarea('address', null, ['class' => 'form-control', 'id'=>'address', 'rows'=>'2', 'placeholder'=>'Alamat']) !!}
				<div class="help-block address" style="display:none"></div>
			</div>	
		</div>
		
		<div class="col-md-6">
			<div class="form-group job_wrapper">
				{!! Form::text('job', null, ['class' => 'form-control', 'id'=>'job', 'placeholder'=>'Pekerjaan orang tua']) !!}
				<div class="help-block job" style="display:none"></div>
			</div>						
			<div class="form-group phone_wrapper">
				{!! Form::text('phone', null, ['class' => 'form-control', 'id'=>'phone', 'placeholder'=>'Nomor telepon/HP']) !!}
				<div class="help-block phone" style="display:none"></div>
			</div>			
			<div class="form-group">
				{!! Form::number('tuition', null, ['class' => 'form-control', 'id'=>'tuition', 'placeholder'=>'Syahriyah/SPP']) !!}
				<div class="help-block tuition" style="display:none"></div>
			</div>		
			<div class="form-group">
				{!! Form::number('infrastructure_fee', null, ['class' => 'form-control', 'id'=>'infrastructure_fee', 'placeholder'=>'Kesanggupan uang gedung']) !!}
				<div class="help-block infrastructure_fee" style="display:none"></div>
			</div>					
		</div>
	</div>
{!! Form::hidden('id', null, ['id'=>'id']) !!}