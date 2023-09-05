@foreach($jdgal as $jd)
<div class="cbp-l-member-img">
	<img src="http://system.wknlink.com/galerifoto/{{$jd->foto}}" alt="" class="img-responsive">
</div>
<div class="cbp-l-member-info">
	<div class="cbp-l-member-name">{{$jd->name}}</div>
	<div class="cbp-l-member-position"></div>
	<div class="cbp-l-member-desc">
	</div>
</div>
@endforeach