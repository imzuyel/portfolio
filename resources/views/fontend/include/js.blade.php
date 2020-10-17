<!-- Js files -->
<!-- JavaScript -->
<script src="{{ asset('/') }}fontend/js/jquery-2.2.3.min.js"></script>
<!-- Default-JavaScript-File -->

<!-- scripts required  for particle effect -->
<script src="{{ asset('/') }}fontend/js/particles.min.js"></script>
<script src="{{ asset('/') }}fontend/js/particles.js"></script>
<!-- //scripts required for particle effect -->

<!-- chart -->
<script src="{{ asset('/') }}fontend/js/amcharts.js"></script>
<script src="{{ asset('/') }}fontend/js/chart.js"></script>
<!-- //chart -->
<!-- //gallery-js -->

<!-- stats -->
<script src="{{ asset('/') }}fontend/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('/') }}fontend/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

<!-- flexSlider (for testimonials) -->
<link rel="stylesheet" href="{{ asset('/') }}fontend/css/flexslider.css" type="text/css" media="screen" property="" />
<script defer src="{{ asset('/') }}fontend/js/jquery.flexslider.js"></script>
<script>
    $(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
</script>
<!-- //flexSlider (for testimonials) -->

<!-- animation js -->
<script src="{{ asset('/') }}fontend/js/aos.js"></script>
<script>
    AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });

</script>
<!-- //animation js -->

<!-- smooth scrolling -->
<script src="{{ asset('/') }}fontend/js/SmoothScroll.min.js"></script>
<!-- move-top -->
<script src="{{ asset('/') }}fontend/js/move-top.js"></script>
<!-- easing -->
<script src="{{ asset('/') }}fontend/js/easing.js"></script>
<!--  necessary snippets for few javascript files -->
<script src="{{ asset('/') }}fontend/js/online-resume.js"></script>

<script src="{{ asset('/') }}fontend/js/bootstrap.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->

<!-- gallery -->
<script src="{{ asset('/') }}fontend/js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="{{ asset('/') }}fontend/css/chocolat.css" type="text/css" media="screen">
<!-- light-box -->
<script>
    $(function () {
			$('.gallery a').Chocolat();

		});
</script>
<!-- //light-box -->
<!-- //gallery -->
<!-- //Js files -->
<script>
    var chart;
    var legend;
    var chartData = [
    @if (count($skill)>0)
    @foreach ($skill as $item)
      {
     skill: "{{ $item->skill_name }}",
     value: {{ $item->value }}
     },
    @endforeach
    @endif
    ];

    AmCharts.ready(function () {
    // PIE CHART
    chart = new AmCharts.AmPieChart();
    chart.dataProvider = chartData;
    chart.titleField = "skill";
    chart.valueField = "value";
    chart.outlineColor = "";
    chart.outlineAlpha = 0.8;
    chart.outlineThickness = 2;
    // this makes the chart 3D
    chart.angle = 20;
    chart.depth3D = 10;


      $(window).resize(function(){
    if ($(window).width() <= 500){
        chart.angle = 10;
      chart.depth3D = 1;
    }
   });
    // WRITE
    chart.write("chartdiv");
    });
</script>


{{--  Toastr  --}}
<script src="{{ asset('/') }}fontend/js/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>



{{--  //All Erros  --}}
<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
{{--  End Toastr  --}}


