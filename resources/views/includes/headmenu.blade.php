<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" >
        <div class="top-area" style="background-color: #09299f;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                    <p class="text-left">

    <!-- Menampilkan Jam (Aktif) -->
    <span id="clock"></span>


       
        <script type='text/javascript'>
            <!--
            var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            var myDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var thisDay = date.getDay(),
                thisDay = myDays[thisDay];
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;
            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
            //-->
        </script>

                <script type="text/javascript">
        <!--
        function showTime() {
            var a_p = "";
            var today = new Date();
            var curr_hour = today.getHours();
            var curr_minute = today.getMinutes();
            var curr_second = today.getSeconds();
            if (curr_hour < 12) {
                a_p = "AM";
            } else {
                a_p = "PM";
            }
            if (curr_hour == 0) {
                curr_hour = 12;
            }
            if (curr_hour > 12) {
                curr_hour = curr_hour - 12;
            }
            curr_hour = checkTime(curr_hour);
            curr_minute = checkTime(curr_minute);
            curr_second = checkTime(curr_second);
         document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
            }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
        setInterval(showTime, 500);
        //-->
        </script>

 </p>
                    </div>
                    <div class="col-sm-6 col-md-6">
                    <p class="text-right">
                        Email : <a href="mailto:info@wekakaryanusa.com"><span style="color: #FFF;"> info@wekakaryanusa.com</span></a> Call us now +62 361 9079 910</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container navigation">
        
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{{url('web/img/logo.png')}}" alt="" width="150" height="40" />
                    
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
              <ul class="nav navbar-nav">
                <li><a href="/"><strong>Home</strong></a></li>
                  <li><a href="/gallery"><strong>Gallery</strong></a></li>
                  <li><a href="/news"><strong>News</strong></a></li>
                  <li><a href="/contact-us"><strong>Contact Us</strong></a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>