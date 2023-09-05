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

              @foreach($posisi as $p)
              <form action="/EditPosisi/update" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id_c" value="{{ $p->id_pos }}"> 
                Name<input type="text" required="required" name="name" value="{{ $p->posisi }}"> <br/>
                Dept
                <select name="subposisi" >
                 <option value="">Select Potition</option>
                 <?php 
                  $posts = DB::select("select * from posisi where subposisi='-'");

                  foreach ($posts as $post) {

                    ?>
                 <option value="{{ $post->id_pos}}">{{ $post->posisi }}</option>
                 <?php } ?>
                </select>
                <br/>
                
                <input type="submit" value="Simpan Data">
              </form>
              @endforeach

            </div>



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