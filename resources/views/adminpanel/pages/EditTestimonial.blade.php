@extends('adminpanel.layouts.default')

@section('content')

  <section class="content-header">
      <h1>
        Data Tables
      </h1>
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

              @foreach($testi as $p)
              <form action="/EditTestimonial/update" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
               
                <input type="hidden" name="id_c" value="{{ $p->id }}">
                 
                <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">News Tittle</label>

                  <div class="col-sm-10">
                    <input type="text" required="required" name="country" value="{{ $p->nama }}">
                  </div>
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Testimonial</label>

                  <div class="col-sm-10">
                <textarea name="komentar" id="des" disabled="disabled">{{ $p->komentar }}</textarea>
                  </div>
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                <select name="terima">
                  <option value="0">Pending</option>
                  <option value="1">Accept</option>
                  <option value="2">Denied</option>
                </select>
                  </div>
                </div>
                <div class="box-footer">
                <input type="submit" value="Simpan Data" class="btn btn-default">
                <input type="button" value="Back" onClick="history.go(-1);" class="btn btn-default">
              </div>
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