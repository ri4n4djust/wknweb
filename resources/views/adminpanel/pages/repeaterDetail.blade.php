@extends('adminpanel.layouts.default')

@section('content')

@foreach($tm as $t)

<section class="content-header">
      
    </section>


              <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">

                <?php 
                  $rep = DB::select("select * from document where id_m='$t->id_m'");
                  foreach ($rep as $rpt) {
                                      
                      $imagepath = $rpt->passport ;
                      $directoryPath = 'docapplicant/'.$imagepath;

                      if(File::exists($directoryPath)){
                         
                          $bgpass = "Green" ;
                      } else {  
                        
                          $bgpass = "red" ;
                      }

                    }
                      ?>
               

                <div class="table-responsive">
                <form action="/uploadpassport" method="post" enctype="multipart/form-data">
                  @csrf
                <table >
                  <tr bgcolor="{{$bgpass}}">
                    <td colspan="3">
                      <span style="color: #FFF;"><strong>Passport</strong> </span> 
                      <input id="id_m" type="hidden"  name="id_m" value="{{$t->id_m}}"  >
                    </td>
                  </tr>
                  <tr>
                    <td><input id="isuedatepassport" type="text"  name="isuedatepassport" placeholder="Isue Date" value="{{$rpt->pasporstart}}"></td>
                    <td><input id="expdatepassport" type="text"  name="expdatepassport" placeholder="Expired Date" value="{{$rpt->pasporValid}}" ></td>
                    <td><input type="file" id="filepassport" name="filepassport"  accept="application/pdf"></td>
                  </tr>
                  <tr >
                    <td ><input id="nopassport" type="text"  name="nopassport" placeholder="No. Passport" value="{{$rpt->pasporNo}}" ></td>
                    <td ><input id="isueatpassport" type="text"  name="isueatpassport" placeholder="Isue At" value="{{$rpt->isuatp}}" ></td>
                    <td>
                      <button>upload</button> | 
                      

                      @if(File::exists($directoryPath))
                      <a href='#'>
                      <i class="fa fa-trash"></i></a> | 
                      <a href='/{{$directoryPath}}'' target='_blank'><i class="fa fa-file-pdf-o"></i></a>
                      @else
                      None
                      @endif
                    </td>
                    
                  </tr>
                </table>
                </form>
                </div>



                <div class="table-responsive">
                <table >
                  <tr bgcolor="red">
                    <td colspan="3">
                      <span style="color: #FFF;"><strong>Seamenbook</strong> </span> 
                    </td>
                  </tr>
                  <tr>
                    <td><input id="isuedatepassport" type="text"  name="isuedatepassport" placeholder="Isue Date" ></td>
                    <td><input id="expdatepassport" type="text"  name="expdatepassport" placeholder="Expired Date" ></td>
                    <td><input type="file" id="filepassport" name="filepassport"></td>
                  </tr>
                  <tr>
                    <td ><input id="nopassport" type="text"  name="nopassport" placeholder="No Seamenbook" ></td>
                    <td ><input id="isueatpassport" type="text"  name="isueatpassport" placeholder="Isue At" ></td>
                    <td><button>upload</button><a href="#">Del</a> | <a href="#">View</a></td>
                    
                  </tr>
                </table>
                </div>

                <div class="table-responsive">
                <table >
                  <tr bgcolor="green">
                    <td colspan="3">
                      <span style="color: #FFF;"><strong>BST</strong> </span> 
                    </td>
                  </tr>
                  <tr>
                    <td><input id="isuedatepassport" type="text"  name="isuedatepassport" placeholder="Isue Date" ></td>
                    <td><input id="expdatepassport" type="text"  name="expdatepassport" placeholder="Expired Date" ></td>
                    <td><input type="file" id="filepassport" name="filepassport"></td>
                  </tr>
                  <tr>
                    <td ><input id="nopassport" type="text"  name="nopassport" ></td>
                    <td ><input id="isueatpassport" type="text"  name="isueatpassport" ></td>
                    <td><button>upload</button><a href="#">Del</a> | <a href="#">View</a></td>
                    
                  </tr>
                </table>
                </div>

                <div class="table-responsive">
                <table >
                  <tr bgcolor="green">
                    <td colspan="3">
                      <span style="color: #FFF;"><strong>CROWD</strong> </span> 
                    </td>
                  </tr>
                  <tr>
                    <td><input id="isuedatepassport" type="text"  name="isuedatepassport" placeholder="Isue Date" ></td>
                    <td><input id="expdatepassport" type="text"  name="expdatepassport" placeholder="Expired Date" ></td>
                    <td><input type="file" id="filepassport" name="filepassport"></td>
                  </tr>
                  <tr>
                    <td ><input id="nopassport" type="text"  name="nopassport" ></td>
                    <td ><input id="isueatpassport" type="text"  name="isueatpassport" ></td>
                    <td><button>upload</button><a href="#">Del</a> | <a href="#">View</a></td>
                    
                  </tr>
                </table>
                </div>

                <div class="table-responsive">
                <table >
                  <tr bgcolor="green">
                    <td colspan="3">
                      <span style="color: #FFF;"><strong>Chrisis</strong> </span> 
                    </td>
                  </tr>
                  <tr>
                    <td><input id="isuedatepassport" type="text"  name="isuedatepassport" placeholder="Isue Date" ></td>
                    <td><input id="expdatepassport" type="text"  name="expdatepassport" placeholder="Expired Date" ></td>
                    <td><input type="file" id="filepassport" name="filepassport"></td>
                  </tr>
                  <tr>
                    <td ><input id="nopassport" type="text"  name="nopassport" ></td>
                    <td ><input id="isueatpassport" type="text"  name="isueatpassport" ></td>
                    <td><button>upload</button><a href="#">Del</a> | <a href="#">View</a></td>
                    
                  </tr>
                </table>
                </div>

                <div class="table-responsive">
                <table >
                  <tr bgcolor="green">
                    <td colspan="3">
                      <span style="color: #FFF;"><strong>SSAT</strong> </span> 
                    </td>
                  </tr>
                  <tr>
                    <td><input id="isuedatepassport" type="text"  name="isuedatepassport" placeholder="Isue Date" ></td>
                    <td><input id="expdatepassport" type="text"  name="expdatepassport" placeholder="Expired Date" ></td>
                    <td><input type="file" id="filepassport" name="filepassport"></td>
                  </tr>
                  <tr>
                    <td ><input id="nopassport" type="text"  name="nopassport" ></td>
                    <td ><input id="isueatpassport" type="text"  name="isueatpassport" ></td>
                    <td><button>upload</button><a href="#">Del</a> | <a href="#">View</a></td>
                    
                  </tr>
                </table>
                </div>

                <div class="table-responsive">
                <table >
                  <tr>
                    <td colspan="3">Seamenbook</td>
                  </tr>
                  <tr>
                    <td><input id="isuedatepassport" type="text"  name="isuedatepassport" placeholder="Isue Date" ></td>
                    <td><input id="expdatepassport" type="text"  name="expdatepassport" placeholder="Expired Date" ></td>
                    <td><input type="file" id="filepassport" name="filepassport"></td>
                  </tr>
                  <tr>
                    <td ><input id="nopassport" type="text"  name="nopassport" ></td>
                    <td ><input id="isueatpassport" type="text"  name="isueatpassport" ></td>
                    <td><button>upload</button><a href="#">Del</a> | <a href="#">View</a></td>
                    
                  </tr>
                </table>
                </div>

                <div class="table-responsive">
                <table >
                  <tr>
                    <td colspan="3">Seamenbook</td>
                  </tr>
                  <tr>
                    <td><input id="isuedatepassport" type="text"  name="isuedatepassport" placeholder="Isue Date" ></td>
                    <td><input id="expdatepassport" type="text"  name="expdatepassport" placeholder="Expired Date" ></td>
                    <td><input type="file" id="filepassport" name="filepassport"></td>
                  </tr>
                  <tr>
                    <td ><input id="nopassport" type="text"  name="nopassport" ></td>
                    <td ><input id="isueatpassport" type="text"  name="isueatpassport" ></td>
                    <td><button>upload</button><a href="#">Del</a> | <a href="#">View</a></td>
                    
                  </tr>
                </table>
                </div>

                
              </div>
              <!-- /.box-body -->

          </div>
          <!-- /.box -->


          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-4">
          <!-- Horizontal Form -->


                
              <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              
              <img class="profile-user-img img-responsive img-square" src="/foto/{{$t->thumb}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{$t->firstname}} {{$t->lastname}}</h3>

              <p class="text-muted text-center">{{$t->posisi}}</p>
              

              <span>Add Foto <input type="file" id="exampleInputFile"></span>
              <button>Upload</button><br>
              <button>Edit</button>
              <button>Delete</button>
              <button>Change Password</button>
              <a href="/closerepeater/{{$t->id_m}}" class="btn btn-xs btn-info pull-right">CLOSE</a>


             
            </div>


            <div class="box-body box-profile">
            <div class="table-responsive">
                <table >
                  <tr>
                    <td >Document</td>
                  </tr>
                  <tr>
                    <td>
                        <div class="form-group">
                          <select class="form-control" name="doc" >
                            <option value="">Documents</option>
                            <option value="1">Visa</option>
                            <option value="2">Ok to Board</option>
                            <option value="3">Kwitansi</option>
                          </select>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td >
                      <div class="form-group">
                        <input id="doc" type="text"  name="doc" placeholder="Doc Type" >
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td >
                      <div class="form-group">
                        <input id="nopassport" type="text"  name="nopassport" placeholder="Start Date" >
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td >
                      <div class="form-group">
                        <input id="nopassport" type="text"  name="nopassport" placeholder="End Date" >
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td >
                      <div class="form-group">
                        <input id="nopassport" type="text"  name="nopassport" >
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td >
                      <div class="form-group">
                        <input id="filedocplus" type="file"  name="filedocplus" >
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td >
                      <div class="form-group">
                        <button>Upload</button>
                      </div>
                    </td>
                    
                  </tr>

                </table>
                </div>


                <div class="table-responsive">
                <table width="100%" >
                  <tr>
                    <td >Doc</td>
                    <td >Doc Type</td>
                    <td>Start Date</td>
                    <td>End Date</td>
                    <td>Country</td>
                    
                  </tr>
                  <tr>
                    <td>Visa</td>
                    <td>Visa</td>
                    <td>12-08-2019<</td>
                    <td>12-09-2019</td>
                    <td>Amerika</td>
                    
                  </tr>
                  
                </table>
              </div>



                

            </div>
            </div>


            
      

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">STCW-95 Data
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
                


            </div>
          
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      
      <!-- ./row -->
    </section>
    <!-- /.content -->
@endforeach


@stop