<div class="xsysys-slider-container">
	<div class="xsysys-slider" id="slider">
		<img class="main-article-picture" src="images/xsysys-articles/home/slides/slide1.png" alt="Slide1"/>
		<img data-src="images/xsysys-articles/home/slides/slide2.png" src="" alt="Slide2" class="hide-slide-ie">
		<img data-src="images/xsysys-articles/home/slides/slide3.gif" src="" alt="Slide3" class="hide-slide-ie">
	</div>
</div>
<script>
	//new IdealImageSlider.Slider('#slider');
	var slider = new IdealImageSlider.Slider({
		selector: '#slider',
		height: 232, // Required but can be set by CSS
		interval: 4000,
	});
	slider.start();
</script>
<div class="xsysys-bg-gradient">	
	<div class="xsysys-slogan">
		"inspiring human endeavour"
	</div>
</div>
<script>
	$(document).ready(function(){
		var xsysysSlogan= $('.xsysys-slogan');
		arrayMe(xsysysSlogan);
		animateInspire();
	});
	function arrayMe(string) {
		$(string).each(function() {
			var myStr = $(this).text();
			myStr = myStr.split("");
			var myContents = "";
			for (var i = 0, len = myStr.length; i < len; i++) {
				myContents += '<span class="single-char">'+ myStr[i] +'</span>';
				$(this).html(myContents);
			}
		});	
	};
	function animateInspire() {
		$(".single-char").each(function(){
			//var singlechar= $(this).not(':empty');
			//$(singlechar).addClass('single-char-active');
			//$(singlechar).siblings('.single-char-active').removeClass('single-char-active');
			 var that = $(this);
				setTimeout(function() { 
					that.animate({ color: "#999999" }, 1500 )
						.animate({ color: "#cb1e0c" }, 1500 );
				},that.index()*100);
		});
	}
	setInterval("animateInspire()", 1000);
</script>
<div class="golden-bg" style="padding:0px;">	
	<div class="xsysys-keywords">
		<strong>expert service</strong>
		<strong>strategic solutions</strong>
		<strong>technology driven</strong>
	</div>
</div>
<div class="golden-bg" style="padding:0px;">
	<div class="xsysys-content-table">
		<section class="xsysys-column1">
			<h1>
				<img src="images/xsysys-articles/home/publications1.png"/>
				Publications
			</h1>
			<p>
				<strong>European IT Companies in India</strong><br/><br/>
				The Value Leadership Group,an international management consultancy, conducted comprehensive research on the offshore activities and strategies of European IT companies in India. The Value Leadership Group shows how...
				<a onclick="loadPublications()"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Discover</a>	
			</p>
		</section>
		<section class="xsysys-column2">
			<h1>
				<img src="images/xsysys-articles/home/clients1.png"/>
				Clients
			</h1>
			<p>
				  <strong><span class="xsysys_style">xsysys</span> Technologies (Bengaluru)</strong> was selected by KRAFT Foods Belgium a division of KRAFT Foods (PHILIP MORRIS) to develop...
				  <a id="discoverClient1" onclick="triggerClient(id)"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Discover</a>	
				  <strong>CAMPBELL Foods Belgium,</strong> a major player in the FMCG Market in Belgium selected <span class="xsysys_style">xsysys</span> Technologies for offshore development...
				  <a id="discoverClient2" onclick="triggerClient(id)"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Discover</a>	
			</p>
		</section>
		<div class="clearboth"></div>
	</div>
</div>