@extends('adminpanel.layouts.default')

@section('content')

	<section class="content-header">
      
    </section>


              <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">

                <div class="form-group">
                  <select class="form-control" >
                    <option>Mr.</option>
                    <option>Mrs.</option>
                    <option>Ms.</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="ktp" placeholder="No. KTP">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="firstname" placeholder="First Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="dob" placeholder="Date Of Birth">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="birthplace" placeholder="Birth Place">
                </div>
                <div class="form-group">
                  <select class="form-control" >
                    <option>Gender</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" >
                    <option>Religion</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" >
                    <option>Marital Status</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nochild" placeholder="Number Of Child">
                </div>


                
                
              </div>
              <!-- /.box-body -->

          </div>
          <!-- /.box -->

         

          

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">

                <div class="form-group">
                  <select class="form-control" >
                    <option>Position</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="tinggi" placeholder="Height">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="berat" placeholder="Weight">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="alamat" placeholder="Address">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="kota" placeholder="City">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="provinsi" placeholder="State">
                </div>
                <div class="form-group">
                  <select class="form-control" >
                    <option>Country</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="kodepos" placeholder="PosCode">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="airport" placeholder="Nearest Airport">
                </div>
                <div class="form-group">
                  <input type="file" id="exampleInputFile">
                </div>


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


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Passport
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
                <div class="form-group">
                  <input type="file" id="exampleInputFile">
                </div>
                <div class="form-group">
                <div class="col-sm-2">
                  <input type="text" class="form-control" name="tinggi" placeholder="Date Isue">
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-2">
                  <input type="text" class="form-control" name="tinggi" placeholder="Expired Date">
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="tinggi" placeholder="Place Isue">
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="tinggi" placeholder="No. Passport">
                </div>
                </div>

            </div>
          
          <!-- /.box -->



          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
  
      
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">STCW-95 Data
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              

              <div class="table-responsive">
                <table >
                  
                    <td>Personal Survival Technic</td>
                    <td>
                      <div class="form-group">
                        <select class="form-control" >
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi" placeholder="Date Isue">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi" placeholder="Expired Date">
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control" >
                          <option>English Score</option>
                          <option>Native</option>
                          <option>Advance</option>
                          <option>Intermediet</option>
                          <option>Basic</option>
                        </select>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Fire prefention & Fire fighting</td>
                    <td>
                      <div class="form-group">
                        <select class="form-control" >
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi" placeholder="Date Isue">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi" placeholder="Expired Date">
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control" >
                          <option>Spanish Score</option>
                          <option>Native</option>
                          <option>Advance</option>
                          <option>Intermediet</option>
                          <option>Basic</option>
                        </select>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Elemtary First Aid</td>
                    <td>
                      <div class="form-group">
                        <select class="form-control" >
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi" placeholder="Date Isue">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi" placeholder="Expired Date">
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control" >
                          <option>Portuguese Score</option>
                          <option>Native</option>
                          <option>Advance</option>
                          <option>Intermediet</option>
                          <option>Basic</option>
                        </select>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>S SAT</td>
                    <td>
                      <div class="form-group">
                        <select class="form-control" >
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi" placeholder="Date">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi" placeholder="Expired Date">
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control" >
                          <option>Italian Score</option>
                          <option>Native</option>
                          <option>Advance</option>
                          <option>Intermediet</option>
                          <option>Basic</option>
                        </select>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Crowd & Chrisis Management</td>
                    <td>
                      <div class="form-group">
                        <select class="form-control" >
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi" placeholder="Date Isue">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi" placeholder="Expired Date">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi" placeholder="Other">
                      </div>
                    </td>
                  </tr>
                </table>
              </div>

            </div>
          
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      
      <!-- ./row -->
    </section>
    <!-- /.content -->

@stop