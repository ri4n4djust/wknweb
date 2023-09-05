@extends('adminpanel.layouts.default')

@section('content')

<section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">

            <a href="#">
            <img src="{{url('img/cmv.png')}}">
            </a> 
           
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
          <a href="#">
            <img src="{{url('img/costa.png')}}">
            </a> 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
          <a href="#">
            <img src="{{url('img/ics.png')}}">
            </a> 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
          <a href="#">
            <img src="{{url('img/1.png')}}">
            </a> 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>


  <section class="content-header">
      <h1>List Repeater</h1>

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
              <table id="example1" class="table responsive display nowrap">
                <thead>
                <tr>
                  <th>No. Reg</th>
                  <th>Full Name</th>
                  <th>Position</th>
                  <th>Mobile</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Act</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($repeater as $n)
                <tr id="tr_{{$n->id_m}}">
                  <td>{{ $n->id_m }}</td>
                  <td>{{ $n->firstname }} {{ $n->lastname }}</td>
                  <td>{{ $n->posisi }}</td>
                  <td>{{ $n->phone }}</td>
                  


                  @if($n->status_m == "0" )
                  <td bgcolor="black" style="color: #FFF;">Unset</td>
                  @elseif($n->status_m == "1")
                  <td bgcolor="green" style="color: #FFF;">Holiday</td>
                  @elseif($n->status_m == "2")
                  <td bgcolor="red" style="color: #FFF;">Resign</td>
                  @elseif($n->status_m == "3")
                  <td bgcolor="yellow" style="color: #FFF;">Pending</td>
                  @elseif($n->status_m == "4")
                  <td bgcolor="blue" style="color: #FFF;">New Applicant</td>
                  @elseif($n->status_m == "5")
                  <td bgcolor="black" style="color: #FFF;">On Board</td>                  
                  @endif

                  <td></td>

                  <td>
                  <a onclick="return confirm('Are you sure?')" href="/applicant/hapus/{{ $n->id_m }}" id="del">
                      <i class="fa fa-trash"></i></a>
                    
                       <a href="/download/{{$n->id_m}}" target="_blank" ><i class="fa fa-save"></i></a> 
                  <a href="/detailrepeater/{{$n->id_m}}">det</a>      

                  </td>
                </tr>
                @endforeach


                </tbody>
                <tfoot>
                <tr>
                 <th>No. Reg</th>
                  <th>Surname (s) / First name(s)</th>
                  <th>Position applied for</th>
                  <th>Mobile</th>
                  <th>Status</th>
                  <th>Edit</th>
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