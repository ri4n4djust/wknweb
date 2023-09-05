@extends('adminpanel.layouts.default')

@section('content')

  <section class="content-header">
      <h1>List Applicant</h1>

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
                  <th>No. Reg</th>
                  <th>Full Name</th>
                  <th>Position applied for</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Download</th>
                  <th>Act</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($applicant as $n)
                <tr id="tr_{{$n->id_m}}">
                  <td>{{ $n->id_m }}</td>
                  <td>{{ $n->firstname }} {{ $n->lastname }}</td>
                  <td>{{ $n->posisi }}</td>
                  <td>{{ $n->phone }}</td>
                  <td>{{ $n->email }}</td>
                  <td><a href="/download/{{$n->id_m}}" target="_blank" >download</a></td>
                  <td>
                  

                    <a onclick="return confirm('Are you sure?')" href="/applicant/hapus/{{ $n->id_m }}" id="del">
                      <i class="fa fa-trash"></i>hapus</a>
                    
                              

                  </td>
                </tr>
                @endforeach


                </tbody>
                <tfoot>
                <tr>
                 <th>No. Reg</th>
                  <th>Full Name</th>
                  <th>Position applied for</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Download</th>
                  <th>Act</th>
                  
                  
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