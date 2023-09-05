@extends('layouts.default')

@section('content')

<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                    <h2>News Update of Weka Karya Nusa</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cum libero vitae quos eaque commodi.</p>
                    </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <!--End of row-->
            <div class="row">


                 @foreach($berita as $b)
                
               
                              <img src="{{url('http://103.82.241.23/beritafoto/large')}}/{{$b->foto}}" width="600" class="img-responsive">
                             
                              <br/>
                              <h4>{{ $b->name }}</h4><br/>
                              {!! $b->des !!}<br/>
                              
                        

                            @endforeach

                <div class="cta-btn">
                <a href="/news" class="btn btn-skin btn-lg">Back</a>  
                </div>


            </div>
            <!--End of row-->
        </div>

    </section>


@stop