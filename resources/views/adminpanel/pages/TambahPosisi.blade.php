@extends('adminpanel.layouts.default')

@section('content')

  <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->


            <div class="box-body">

              <form action="/TambahPosisi/store" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
               <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Potition</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" required="required">
                  </div>
                </div>
                
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Department</label>

                  <div class="col-sm-10"> 
                <select name="subposisi" >
                 <option value="">Select Department</option>
                 <option value="-">New Department</option>
                 <?php 
                  $posts = DB::select("select * from posisi where subposisi='-'");

                  foreach ($posts as $post) {

                    ?>
                 <option value="{{ $post->id_pos}}">{{ $post->posisi }}</option>
                 <?php } ?>
                </select>
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" value="Simpan Data" class="btn btn-default">
                <input type="button" value="Back" onClick="history.go(-1);" class="btn btn-default">
              </div>

              </form>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

@stop