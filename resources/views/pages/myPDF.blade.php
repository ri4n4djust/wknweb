
<!DOCTYPE html>
<html>
<head>
<title>Bali Paradise Crews - Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script type="text/javascript" >
	body {
    font-size: 9; /* That is your text's default font size. Here i chose 12px */
	}
</script>
</head>
<body>

<div style="width: 700px">
				<table border="0" cellspacing="0" width="100%" style="font-size: 11px;">
					<tr >
                      <td colspan="4"><img src="images/kopcv.jpg"></td>
                    </tr>
                 	
                    <tr bgcolor="#93c9eb">
                      <td colspan="4"><b>Personal Information</b></td>
                    </tr>

                 
                  <?php 
                  //$id_m = $data1->id_m ;
                  $posts = DB::select("select * from applicant where id_m='$id_m'");
                  foreach ($posts as $post) {
                      ?>
                  <tr >
                    <td width="170">Surname (s) / First name(s)</td>
                    <td >: {{$post->firstname}} {{$post->lastname}}</td>
                    <td>No Reg : {{$post->id_m}}</td>
                  </tr>
                  <tr>
                    <td>Position applied for</td>
                    <td >: {{$post->id_pos}}</td>
                    <td>Foto</td>
                  </tr>
                  <tr>
                    <td>Address (es)</td>
                    <td >: {{$post->address}}</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Birthplace</td>
                    <td >: {{$post->birthplace}}</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mobile</td>
                    <td >: {{$post->phone}}</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td >: {{$post->email}}</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Nationality</td>
                    <td >: {{$post->country}}</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Date Of Birth</td>
                    <td >: {{$post->dob}}</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td >: {{$post->gender}}</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Height </td>
                    <td >: {{$post->tinggi}}</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Weight </td>
                    <td >: {{$post->berat}}</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Marital Status</td>
                    <td >: {{$post->status}}</td>
                    
                    <td >Number of Children: {{$post->nochild}} children’s</td>
                  </tr>

                  <?php } ?>
                </table>

				
</div>

</body>
</html>
