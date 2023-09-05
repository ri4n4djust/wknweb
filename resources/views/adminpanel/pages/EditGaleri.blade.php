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

              @foreach($galeri as $p)
              <form action="/EditGaleri/update" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="text" name="id_c" value="{{ $p->id_gal }}"> <br/>
                Nama <input type="text" required="required" name="country" value="{{ $p->name }}"> <br/>
                <textarea name="des" id="des"></textarea>
                Bendera <input type="file" name="photo" id="photo">
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