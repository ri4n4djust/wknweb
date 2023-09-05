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
                        <p></p>
                    </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <!--End of row-->
            <div class="row">


                <?php 
                           $berita = DB::select('select * from berita ');
                           foreach ($berita as $ber) {
                           $short = substr($ber->des, 0, 200) ;
                           ?>
                <div class="col-md-4">
                    <div class="blog_news">
                        <div class="single_blog_item">
                            <div class="blog_img">
                                <img src="{{url('http://103.82.241.23/beritafoto')}}\{{ $ber->thumb }}" alt="" width="200" class="img-responsive">
                            </div>
                            <div class="blog_content">
                                <a href="detailnews\{{ $ber->id_art }}"><h4>{{ $ber->name }}</h4></a>
                                <div class="expert">
                                    <div class="left-side text-left">
                                        <p class="left_side">
                                            <span class="clock"><i class="fa fa-clock-o"></i></span>
                                            <span class="time">Aug 19, 2016</span>
                                            <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                        </p>
                                       
                                    </div>
                                </div>

                                <p class="blog_news_content">{!! $short !!}</p>
                                <a href="detailnews\{{ $ber->id_art }}" class="blog_link">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-4-->
            <?php } ?>

                
            </div>
            <!--End of row-->
        </div>

    </section>



@stop