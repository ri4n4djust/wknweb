@extends('adminpanel.layouts.default')

@section('content')

  <section class="content-header">
      
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit News</h3>
            </div>
            <!-- /.box-header -->


            <div class="box-body">

              @foreach($berita as $p)
              <form action="/EditBerita/update" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}

                <input type="hidden" name="id_c" value="{{ $p->id_art }}">
                
                <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">News Tittle</label>

                  <div class="col-sm-10">
                    <input type="text" required="required" name="name" value="{{ $p->name }}" size="100">
                  </div>
                </div>

                <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">News Des</label>

                  <div class="col-sm-10">
                    <textarea name="des" id="des" >{{ $p->des }}</textarea>
                  </div>
                </div>
                

                <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">News Foto</label>

                  <div class="col-sm-10">
                    <input type="file" name="photo" id="photo" >
                  </div>
                </div>
                <div class="box-footer">
                <input type="submit" value="Save Data" class="btn btn-default">
                <input type="button" value="Back" onClick="history.go(-1);" class="btn btn-default">
              </div>
              </form>
              @endforeach

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