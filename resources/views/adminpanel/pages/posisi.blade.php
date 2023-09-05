@extends('adminpanel.layouts.default')

@section('content')



	<section class="content-header">
      <h1>List Potition <a href="/TambahPosisi">Add New</a></h1>
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Potition List</h3>
            </div>
            <!-- /.box-header -->


            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Potition</th>
                  <th>Action</th>
     
                </tr>
                </thead>
                <tbody>
                @foreach($posisi as $n)
                <tr id="tr_{{$n->id_pos}}">
                  <td>{{ $n->id_pos }}</td>
                  <td>{{ $n->posisi }}</td>
                  <td>
                    <a href="/EditPosisi/{{ $n->id_pos }}">
                    <i class="fa fa-edit"></i>Edit</a>

                    <a onclick="return confirm('Are you sure?')" href="/posisi/hapus/{{ $n->id_pos }}" id="del">
                      <i class="fa fa-trash"></i>hapus</a>

                  </td>
                </tr>
                @endforeach


                </tbody>
                <tfoot>
                <tr>
                 <th>Id</th>
                  <th>Potition</th>
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