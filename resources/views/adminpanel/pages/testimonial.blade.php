@extends('adminpanel.layouts.default')

@section('content')

	<section class="content-header">
      <h1>List Testimonial </h1>
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
                  <th>Date</th>
                  <th>Nama</th>
                  <th>Comment</th>
                  <th>Topik</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($testi as $n)
                <tr id="tr_{{$n->id}}">
                  <td>{{ $n->date }}</td>
                  <td>{{ $n->nama }}</td>
                  <td>{{ $n->komentar }}</td>
                  <td>{{ $n->name }}</td>
                  <td>
                    @if ($n->terima=="0")
                      {{ "Pending" }}
                    @elseif ($n->terima=="1")
                      {{ "Accept" }}
                    @else
                      {{ "Denied" }}
                    @endif
                    </td>
                  <td>
                  <a href="/EditTestimonial/{{ $n->id }}">
                    <i class="fa fa-edit"></i>Edit</a>

                     <a href="/testimonial/hapus/{{ $n->id }}" id="del">
                      <i class="fa fa-trash"></i>Hapus</a>
                  </td>
                </tr>
                @endforeach


                </tbody>
                <tfoot>
                <tr>
                  <th>Date</th>
                  <th>Nama</th>
                  <th>Comment</th>
                  <th>Topik</th>
                  <th>Status</th>
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