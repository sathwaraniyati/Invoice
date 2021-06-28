@extends('layouts.master')

@section('title')
Add Product
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
    <div class="content-header">
        <div class="container-fluid">


            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Product Updated</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">

                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                                <form method="post" action="{{route('saveUpdatePostt')}}">
                                    <!-- add csrf field in every form -->
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$post->id}}"/>
                                    <div class="form-group">
                                        <label for="name"> Product Name:</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name"  value="{{$post->name}}" />
                                      </div>
                                      <div class="form-group">
                                        <label for="name">Product Description</label>
                                        <input type="text" class="form-control" id="description"  placeholder="Enter Product Description" name="description"  value="{{$post->description}}" />
                                      </div>
                                      <div class="form-group">
                                        <label for="name">Product Price </label>
                                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter Product Price" value="{{$post->price}}"/>
                                      </div>

                            </div>
                            <div class="modal-footer">

                                <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Update Invoice">
                            </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
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
