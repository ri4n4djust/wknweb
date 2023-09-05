@extends('layouts.default')

@section('content')

        <!--Start of contact-->
        <section id="doctor" class="home-section bg-gray paddingbot-60">
            <div class="container marginbot-50">
                <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                    <h2 class="h-bold">Contact US</h2>
                   
                    </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="office">
                            <div class="title">
                                <h5>our office info</h5>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15778.768802540364!2d115.1417324!3d-8.6255193!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32599f7944440c1e!2sPT.+WEKA+KARYA+NUSA!5e0!3m2!1sid!2sid!4v1565393895861!5m2!1sid!2sid" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="office_location">
                                <div class="address">
                        <p>Jln. Tumbak Bayuh Gang Kepundung No.5<br>
                Mengwi, Badung 80351, Bali - Indonesia.<br> </p>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone"><span> +62 361 9079 910</span></i>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope"><span><a href="mailto:info@wekakaryanusa.com">info@wekakaryanusa.com</a></span></i>
                                </div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="msg">
                            <div class="msg_title">
                                <h5>Drop A Message</h5>
                            </div>
                            <div class="form_area">
                                <!-- CONTACT FORM -->
                                @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif

                <form action="/contact" method="post">

                    {{ csrf_field() }}

                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="you name" />
                    
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="you email address" />
                    
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" placeholder="your message" cols="30" rows="10"></textarea>

                    <br><br>
                    <script src='https://www.google.com/recaptcha/api.js'></script>
                    {!! app('captcha')->display() !!}
                    
                    
                    <button class="btn btn-success btn-block">Send</button>
                <form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-6-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of contact-->


        



@stop