@extends('adminpanel.layouts.default')

@section('content')

	<section class="content-header">
      <h1>Galery Tittle   <a href="/TambahJdlg">Add New</a></h1>
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
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Judul</th>
                  <th>Nama</th>
                  <th>Action</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($jdlgaleri as $n)
                <tr id="tr_{{$n->id_jdl}}">
                  <td>{{ $n->id_jdl }}</td>
                  <td>{{ $n->judul }}</td>
                  <td>
                   

                    <a onclick="return confirm('Are you sure?')" href="/jdlgaleri/hapus/{{ $n->id_jdl }}" id="del">
                      <i class="fa fa-trash"></i>hapus</a>
                    
                              

                  </td>
                </tr>
                @endforeach


                </tbody>
                <tfoot>
                <tr>
                 <th>Judul</th>
                  <th>Nama</th>
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