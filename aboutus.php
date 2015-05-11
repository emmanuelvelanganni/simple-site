<!doctype html>
<html>
	<head>
		<?php
		$page_title = 'index.php';
		$pgDesc = 'Main Page';
		$keyWords = 'xsysys website';
		include ('head.php');
		?>
		<script>
			$(document).ready(function(){
				$('#page-navigator ul li').find('#aboutus').addClass('active');
			});
		</script>
	</head>
	<body>
		<div id="main-aboubus" class="main">
			<?php
				include ('header.php');
			?>
			<article>
				<section id="aboutus-main-section" class="main-section">
					<div class="xsysys-aboutus-content-block" id="xsysys-aboutus-content-block">
						<div class="clearboth"></div>
						<div class="xsysys-content-row row1">
							<div class="xsysys-box no-left-right-border">
								<section class="xsysys-box-content">
									<h3>
										<img src="images/xsysys-articles/aboutus/history.png"/>&nbsp;&nbsp;History
									</h3>
									<p>
										The company was established in 1996 as an offshore development center for the parent company in Belgium...
									</p>
									<a id="history-link" href="#"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Discover</a>	
								</section>	
							</div>
							<div class="xsysys-box">
								<section class="xsysys-box-content">
									<h3>
										<img src="images/xsysys-articles/aboutus/vmission.png"/>&nbsp;&nbsp;Vision & Mission
									</h3>
									<p>
										We believe that life on our planet and therefore in the universe is about evolution, it is about survival within...
									</p>
									<a id="vmision-link" href="#"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Discover</a>	
								</section>	
							</div>
							<div class="xsysys-box no-left-right-border">
								<section class="xsysys-box-content">
									<h3>
										<img src="images/xsysys-articles/aboutus/technology.png"/>&nbsp;&nbsp;Technology
									</h3>
									<p>
										Technology leadership is a critical driver for hi-tech companies. New market entrants rely on technology leadership...
									</p>
									<a id="technology-link" href="#"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Discover</a>
								</section>	
							</div>
						</div>
						<div class="clearboth"></div>
						<div class="xsysys-content-row row2">
							<div class="xsysys-box no-left-right-border">
								<section class="xsysys-box-content">
									<h3>
										<img src="images/xsysys-articles/aboutus/team.png"/>&nbsp;&nbsp;Team
									</h3>
									<p>
										Day by day our Indo - European management team inspires an exceptional group of people delivering...
									</p>
									<a id="team-link" href="#"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Discover</a>	
								</section>	
							</div>
							<div class="xsysys-box">
								<section class="xsysys-box-content">
									<img src="images/xsysys-asset/xsysys-logo-180.png"/>
								</section>	
							</div>
							<div class="xsysys-box no-left-right-border">
								<section class="xsysys-box-content">
									<h3>
										<img src="images/xsysys-articles/aboutus/brand.png"/>&nbsp;&nbsp;Brand
									</h3>
									<p>
										Our brand represents LIFE, a journey through space. It is all about survival and when doing so learning...
									</p>
									<a id="brand-link" href="#"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Discover</a>	
								</section>	
							</div>
						</div>
						<div class="clearboth"></div>
						<div class="xsysys-content-row row3">
							<div class="xsysys-box no-left-right-border">
								<section class="xsysys-box-content">
									<h3>
										<img src="images/xsysys-articles/aboutus/gateway.png"/>&nbsp;&nbsp;Gateway
									</h3>
									<p>
										BELINDA<sup>TM</sup> is our IT-Services gateway between India and Belgium...
									</p>
									<a id="gateway-link" href="#"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Discover</a>	
								</section>	
							</div>
							<div class="xsysys-box">
								<section class="xsysys-box-content">
									<h3>
										<img src="images/xsysys-articles/aboutus/news.png"/>&nbsp;&nbsp;News
									</h3>
									<p>
										HRH Prince Philippe of Belgium, leading a high level Belgian Trade Mission to India...
									</p>
									<a id="news-link" href="#"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Discover</a>	
								</section>	
							</div>
							<div class="xsysys-box no-left-right-border">
								<section class="xsysys-box-content">
									<h3>
										<img src="images/xsysys-articles/aboutus/qualitysystems.png"/>&nbsp;&nbsp;Quality Systems
									</h3>
									<p>
										The quality systems at <span class="xsysys_style">xsysys</span> match the best in the  world. We benchmark ourselves against international...
									</p>
									<a id="qsystems-link" href="#"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Discover</a>	
								</section>	
							</div>
						</div>
						<div class="clearboth"></div>
								<script>
									$(document).ready(function(){
										$('#history-link').on('click',function(){
												var xmlhttp;
												if(window.XMLHttpRequest){
													xmlhttp= new XMLHttpRequest();
												}
												else{
													xmlhttp= new ActiveXObject("Microsoft.XMLHTTP")
												}
												xmlhttp.onreadystatechange=function(){
													if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
														document.getElementById('xsysys-aboutus-content-block').innerHTML= xmlhttp.responseText;
													}
												}	
												xmlhttp.open("GET","aboutus-pages/history.php",true);
												//xmlhttp.setRequestHeader("Content-type","history.html");
												//window.location.hash="history.html";
												//window.history.pushState('aboutus', 'Title', './history.html');
												xmlhttp.send();
										});
										$('#vmision-link').on('click',function(){
												var xmlhttp;
												if(window.XMLHttpRequest){
													xmlhttp= new XMLHttpRequest();
												}
												else{
													xmlhttp= new ActiveXObject("Microsoft.XMLHTTP")
												}
												xmlhttp.onreadystatechange=function(){
													if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
														document.getElementById('xsysys-aboutus-content-block').innerHTML= xmlhttp.responseText;
													}
												}	
												xmlhttp.open("GET","aboutus-pages/vision-mission.php",true);
												xmlhttp.send();
										});
										$('#technology-link').on('click',function(){
												var xmlhttp;
												if(window.XMLHttpRequest){
													xmlhttp= new XMLHttpRequest();
												}
												else{
													xmlhttp= new ActiveXObject("Microsoft.XMLHTTP")
												}
												xmlhttp.onreadystatechange=function(){
													if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
														document.getElementById('xsysys-aboutus-content-block').innerHTML= xmlhttp.responseText;
													}
												}	
												xmlhttp.open("GET","aboutus-pages/technology.php",true);
												xmlhttp.send();
										});
										$('#team-link').on('click',function(){
												var xmlhttp;
												if(window.XMLHttpRequest){
													xmlhttp= new XMLHttpRequest();
												}
												else{
													xmlhttp= new ActiveXObject("Microsoft.XMLHTTP")
												}
												xmlhttp.onreadystatechange=function(){
													if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
														document.getElementById('xsysys-aboutus-content-block').innerHTML= xmlhttp.responseText;
													}
												}	
												xmlhttp.open("GET","aboutus-pages/team.php",true);
												xmlhttp.send();
										});
										$('#brand-link').on('click',function(){
												var xmlhttp;
												if(window.XMLHttpRequest){
													xmlhttp= new XMLHttpRequest();
												}
												else{
													xmlhttp= new ActiveXObject("Microsoft.XMLHTTP")
												}
												xmlhttp.onreadystatechange=function(){
													if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
														document.getElementById('xsysys-aboutus-content-block').innerHTML= xmlhttp.responseText;
													}
												}	
												xmlhttp.open("GET","aboutus-pages/brand.php",true);
												xmlhttp.send();
										});
										$('#gateway-link').on('click',function(){
												var xmlhttp;
												if(window.XMLHttpRequest){
													xmlhttp= new XMLHttpRequest();
												}
												else{
													xmlhttp= new ActiveXObject("Microsoft.XMLHTTP")
												}
												xmlhttp.onreadystatechange=function(){
													if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
														document.getElementById('xsysys-aboutus-content-block').innerHTML= xmlhttp.responseText;
													}
												}	
												xmlhttp.open("GET","aboutus-pages/gateway.php",true);
												xmlhttp.send();
										});
										$('#news-link').on('click',function(){
												var xmlhttp;
												if(window.XMLHttpRequest){
													xmlhttp= new XMLHttpRequest();
												}
												else{
													xmlhttp= new ActiveXObject("Microsoft.XMLHTTP")
												}
												xmlhttp.onreadystatechange=function(){
													if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
														document.getElementById('xsysys-aboutus-content-block').innerHTML= xmlhttp.responseText;
														$("#newstabs").find("li").on("click", "a", function(){
															$(this).closest("li").addClass("xsysys_active");
															$(this).closest("li").siblings("li").removeClass("xsysys_active");
														});
														$("#newstabs").find(".xsysys_active > a").trigger("click");
													}
												}	
												xmlhttp.open("GET","aboutus-pages/news.php",true);
												xmlhttp.send();
										});
										$('#qsystems-link').on('click',function(){
												var xmlhttp;
												if(window.XMLHttpRequest){
													xmlhttp= new XMLHttpRequest();
												}
												else{
													xmlhttp= new ActiveXObject("Microsoft.XMLHTTP")
												}
												xmlhttp.onreadystatechange=function(){
													if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
														document.getElementById('xsysys-aboutus-content-block').innerHTML= xmlhttp.responseText;
													}
												}	
												xmlhttp.open("GET","aboutus-pages/qsystems.php",true);
												xmlhttp.send();
										});
									});
								</script>
					</div>
				</section>
			</article>
			<aside>
				<?php
					include('aside.php');
				?> 
			</aside>
			<footer>
				<?php
					include('footer.php');
				?> 
			</footer>
		</div>
	</body>
</html>
<script>
	function load_internalnews(){
		$("#session_body").unload("aboutus-pages/pressreleases.php");
		$("#session_body").unload("aboutus-pages/presscoverage.php");
		$("#session_body").load("aboutus-pages/internalnews.php");
	}
	function load_pressreleases(){
		$("#session_body").unload("aboutus-pages/internalnews.php");
		$("#session_body").unload("aboutus-pages/presscoverage.php");
		$("#session_body").load("aboutus-pages/pressreleases.php");
	}
	function load_presscoverage(){
		$("#session_body").unload("aboutus-pages/internalnews.php");
		$("#session_body").unload("aboutus-pages/pressreleases.php");
		$("#session_body").load("aboutus-pages/presscoverage.php");
	}
</script>
