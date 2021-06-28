@extends('layouts.master')

@section('title')
Add Image
@endsection

@section('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


<div class="container">
    @if ($message = Session::get('success'))
      <div class="row">
          <div class="col-lg-12">
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-6">
              <strong>Original Image:</strong>
              <br/>
              <img src="/image/{{ Session::get('imageName') }}" />
          </div>
          <div class="col-lg-1">&nbsp;</div>
          <div class="col-lg-5">
              <strong>Thumbnail Image:</strong>
              <br/>
              <img src="/thumbnail/{{ Session::get('imageName') }}" />
          </div>
      </div>
      @endif
    <form action="{{url('resize-image')}}" enctype="multipart/form-data" method="post">
     <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <div class="form-group">
        <label for="image">Choose Image:</label>
        <input required type="file" class="form-control" id="image" name="image">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
    <!-- Main content -->

    <!-- /.content -->
</div>
@endsection


@section('scripts')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>




@endsection
