@extends('layouts.default')

@section('content')

<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                    <h2 class="h-bold">Gallery</h2>
                    <p></p>
                    </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                
            <div id="filters-container" class="cbp-l-filters-alignLeft">

                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (<div class="cbp-filter-counter"></div>)</div>

                <?php 
                                $nmb = DB::select("select * from jdl_galeri");
                                foreach ($nmb as $jd) {
                            ?>
                    <div data-filter=".{{$jd->id_jdl}}" class="cbp-filter-item">{{$jd->judul}} (<div class="cbp-filter-counter"></div>)</div>
                <?php } ?>
                
              
            </div>
        
            <div id="grid-container" class="cbp-l-grid-team">

                <ul>

                    @foreach($gal as $g)
                    <li class="cbp-item {{$g->id_jdl}}">
                        <a href="/gallerydetail/{{$g->id_gal}}" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="http://system.wknlink.com/galerifoto/{{$g->foto}}" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/gallerydetail/{{$g->id_gal}}" class="cbp-singlePage cbp-l-grid-team-name">{{$g->name}}</a>
                    </li>
                    @endforeach

                </ul>
            </div>
            </div>
            </div>
        </div>

    </section>

@stop