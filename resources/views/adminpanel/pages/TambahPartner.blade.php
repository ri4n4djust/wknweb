@extends('adminpanel.layouts.default')

@section('content')

	<section class="content-header">
      <h1>
       Add Partner
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

              <form action="/TambahPartner/store" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                 <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10"> 
                   <input type="text" name="name" required="required">
                 </div>
               </div>
                 <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10"> 
                    <textarea name="des" id="des" ></textarea>
                  </div>
                </div>
                 <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Foto</label>

                  <div class="col-sm-10"> 
                    <input type="file" name="photo" id="photo">
                  </div>
                </div>
               <div class="box-footer">
                <input type="submit" value="Simpan Data" class="btn btn-default">
                <input type="button" value="Back" onClick="history.go(-1);" class="btn btn-default">
              </div>
              </form>

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