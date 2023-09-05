@extends('adminpanel.layouts.default')

@section('content')

  <section class="content-header">
      <h1>List News </h1>

    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="/TambahBerita">Add New</a></h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Tittle</th>
                  <th>Thumb</th>
                  <th>Action</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($berita as $n)
                <tr id="tr_{{$n->id_art}}">
                  <td>{{ $n->id_art }}</td>
                  <td>{{ $n->name }}</td>
                  <td>
                    <img src="{{url('http://103.82.241.23/beritafoto')}}/{{ $n->foto }}" height="50" >
                  </td>
                  <td>
                    <a href="/EditBerita/{{ $n->id_art }}">
                    <i class="fa fa-edit"></i>Edit</a>

              

                    <a href="/berita/hapus/{{ $n->id_art }}" id="del">
                      <i class="fa fa-trash"></i>hapus</a>
                    
                              

                  </td>
                </tr>
                @endforeach


                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Tittle</th>
                  <th>Thumb</th>
                  <th>Action</th>
                  
                  
                </tr>
                </tfoot>
              </table>
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