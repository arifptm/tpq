@extends('template.layout')

@section('header-scripts')
  <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/iCheck/flat/purple.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"/>


  <link rel="stylesheet" href="/bower_components/jquery.calendars-2.1.0/css/ui.calendars.picker.css">
  <link rel="stylesheet" href="/bower_components/jquery.calendars-2.1.0/css/jquery.calendars.picker.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css"/>
  
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

  <link rel="stylesheet" href="/plugins/datepicker/css/bootstrap-datepicker3.css">

@endsection

@section('footer-scripts')
  <script src="/bower_components/AdminLTE/plugins/iCheck/icheck.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>

  <script src="/bower_components/jquery.calendars-2.1.0/js/jquery.plugin.js"></script>
  <script src="/bower_components/jquery.calendars-2.1.0/js/jquery.calendars.min.js"></script>
  <script src="/bower_components/jquery.calendars-2.1.0/js/jquery.calendars.plus.min.js"></script>
  <script src="/bower_components/jquery.calendars-2.1.0/js/jquery.calendars.picker.js"></script>
  <script src="/bower_components/jquery.calendars-2.1.0/js/jquery.calendars.islamic.js"></script>
  <script src="/bower_components/jquery.calendars-2.1.0/js/jquery.calendars.picker-id.js"></script>  
  
  <script src="/plugins/datepicker/js/bootstrap-datepicker.js"></script>
  <script src="/plugins/datepicker/locales/bootstrap-datepicker.id.min.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

  <script src="/js/custom.js"></script>
  
  @include('admin.student.datatable')
  @include('admin.student.ajax')
    <script>
     $('#birth_date').datepicker({
        format: 'dd-mm-yyyy',
        language:'id',
        autoclose:'true',
        endDate:'-730d',
        minViewMode: '2',
     });

$('#registered_date').datepicker({
        format: 'dd-mm-yyyy',
        language:'id',
        autoclose:'true',
        endDate:'+0d',
        minViewMode: '2',
     });

$('#stop_date').datepicker({
        format: 'dd-mm-yyyy',
        language:'id',
        autoclose:'true',
        endDate:'+0d',
        minViewMode: '2',
     });

    </script>
  
  @endsection

@section('content-top')
  <div class="alert bg-green lead" style='display:none;'><i class="icon fa fa-check"></i> <span id="ajaxmessage"></span></div>
  <h1>Santri
    <button id='btn-modal-create' class='btn btn-primary'><i class="fa fa-plus-circle"></i> Tambah Santri</button>
  </h1>
@endsection

@section('content-main')

<!--
<div class="row">
   <div class="col-md-12">
    <div class="box box-default collapsed-box box-solid">
      
      <div class="box-header with-border" style="padding:5px;">              
        <button type="button" class="btn bg-olive" data-widget="collapse">
          <i class="fa fa-plus"></i> &nbsp; &nbsp;<h3 class="box-title"> Pilih lembaga untuk ditampilkan</h3>
        </button>
      </div>
      
      <div class="box-body">
        <div class="form-group icheck">             
          @foreach ($institutions_filter->chunk(5) as $chunk)
            <div class="col-md-3">
              @foreach ($chunk as $institution)
                @if (in_array($institution->id, $userInstitutions))
                  {!! Form::checkbox('chosen_institution[]', $institution->id, false,  ['id'=>$institution->slug, 'checked'=>'checked']) !!}
                @else
                  {!! Form::checkbox('chosen_institution[]', $institution->id, false,  ['id'=>$institution->slug]) !!}
                @endif
                {!! Form::label( $institution->slug, $institution->name , ['class'=>'control-label']) !!}<br>
              @endforeach
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div> -->

<div class="row">
  <div class="col-md-8">
    <div class="box">    
      <div class="box-body">  
        <table class="table table-bordered" id="students-data">
          <thead>
          <tr>
            <th>ID</th>
            <th class="hidden-sm hidden-xs">Terdaftar</th>          
            <th>Lembaga</th>
            <th>Foto</th>
            <th>Nama</th>
            <!-- <th>Jenis Kelamin</th> -->
            <th class="hidden-sm hidden-xs">Status</th>
            <th>Aksi</th>          
          </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
  

  <div class="col-md-4">
    <div class="box box-primary" style="min-height: 100px;">
        <section id="student-stat">     
          <div class="overlay">
            <i class="fa fa-refresh fa-spin"></i>
          </div>
        </section>        
    </div>
  </div>

</div>  

@include('/admin/student/modal')

@endsection


