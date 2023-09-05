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
              <h3 class="box-title">Add News</h3>
            </div>
            <!-- /.box-header -->


            <div class="box-body">



              <form action="/TambahBerita/store" method="post" enctype="multipart/form-data" class="form-horizontal" name="tambah" id="tambah">
                {{ csrf_field() }}
               <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">News Tittle</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" required="required" size="100">
                  </div>
                </div>

               <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10"> 
                    <textarea name="des" id="des" ></textarea>
                  </div>
                </div>


                

                <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Foto Size 800 X 400 </label>

                  <div class="col-sm-10"> 
                    <input type="hidden" name="thumb" >
                    <input type="file" name="photo" id="photo" required="required">
                  </div>
                </div>

                <div class="input-group control-group increment" >
                <input type="file" name="filename[]" class="form-control">
                <div class="input-group-btn"> 
                  <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                </div>
              </div>
              <div class="clone hide">
                <div class="control-group input-group" style="margin-top:10px">
                  <input type="file" name="filename[]" class="form-control">
                  <div class="input-group-btn"> 
                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                  </div>
                </div>
              </div>

               <div class="box-footer">
                <input type="submit" value="Save Data" class="btn btn-default">
                <input type="button" value="Back" onClick="history.go(-1);" class="btn btn-default">
              </div>
              </form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>




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