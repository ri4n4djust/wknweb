@extends('adminpanel.layouts.default')

@section('content')

	<section class="content-header">
      <h1>List Ship <a href="/TambahShip">Add New</a></h1>
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
                  <th>Foto</th>
                  <th>Action</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($ship as $n)
                <tr id="tr_{{$n->id_ship}}">
                  <td>{{ $n->id_ship }}</td>
                  <td>{{ $n->name }}</td>
                  <td>
                    <img src="{{url('/ship')}}/{{ $n->foto }}" height="50" >
                  </td>
                  <td>
                   

                    <a onclick="return confirm('Are you sure?')" href="/ship/hapus/{{ $n->id_ship }}" id="del">
                      <i class="fa fa-trash"></i>hapus</a>
                    
                              

                  </td>
                </tr>
                @endforeach


                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Platform(s)</th>
                  
                  
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