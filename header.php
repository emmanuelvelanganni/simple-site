		<header>
			<h1 id="xsysys-logo" class="xsysys-logo"><a><img src="images/xsysys-asset/xsysys-logo.png"/></a></h1>
			<script>
				$(document).ready(function(){
					$('.xsysys-logo img').on({
						mouseover:function(){
							$(this).attr({'src':'images/xsysys-asset/xsysys-logo-hover.png'});
						},
						mouseout:function(){
							$(this).attr({'src':'images/xsysys-asset/xsysys-logo.png'});
						},
						click:function(){
							$(this).attr({'src':'images/xsysys-asset/xsysys-logo-hover.png'});
						}
					});
				});
			</script>
			<div class="xsysys-top-nav" id="xsysys-top-nav">
				<ul>
					<li>
						<a id="home-nav">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home
						</a>
					</li>
					<li>
						<a id="alliances-nav">
							<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>&nbsp;Alliances
						</a>
					</li>
					<li>
						<a id="webmaster-nav" href="#">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;Webmaster
						</a>
					</li>
				</ul>
			</div>
			<div class="clearboth"></div>
		</header>
			<nav id="page-navigator">
				<ul>
					<li>
						<img src="images/xsysys-ui/main-nav/xsysys_menu_icon.png"/>
						<a id="aboutus">About Us</a>
					</li>
					<li>
						<img src="images/xsysys-ui/main-nav/expertise_menu_icon.png"/>
						<a id="expertise">Expertise</a>
					</li>
					<li>
						<img src="images/xsysys-ui/main-nav/client_menu_icon.png"/>
						<a id="clients">Clients</a>
					</li>
					<li>
						<img src="images/xsysys-ui/main-nav/contact_menu_icon.png"/>
						<a id="contactus">Contact Us</a>
					</li>
					<li>
						<img src="images/xsysys-ui/main-nav/careers_menu_icon.png"/>
						<a id="careers">Careers</a>
					</li>
					<script>
						$(document).ready(function(){
							$('#xsysys-logo, #xsysys-top-nav > ul > li > a#home-nav').on('click', function(){
								$('#page-navigator ul li').find('a').removeClass('active');
								$(this).closest('li').siblings().find('a').removeClass('active');
								$(this).addClass('active');
								setTimeout(function() { 
									$('article #main-section').load('home-pages/index-main-content.php',function(){$('#main-section').scrollTop(0)});
									//window.location.href="index.php";
								},500);
							});
							$('#xsysys-top-nav > ul > li > a#alliances-nav').on('click', function(){
								$('#page-navigator ul li').find('a').removeClass('active');
								$(this).closest('li').siblings().find('a').removeClass('active');
								$(this).addClass('active');
								setTimeout(function() { 
									$('article #main-section').load('home-pages/alliances.php',function(){$('#main-section').scrollTop(0)});
									//window.location.href="index.php";
								},500);
							});
							$('#xsysys-top-nav > ul > li > a#webmaster-nav').on('click', function(){
								$('#page-navigator ul li').find('a').removeClass('active');
								$(this).closest('li').siblings().find('a').removeClass('active');
								$(this).addClass('active');
								$('#footer-links ul li').find('#f-feedback').addClass('active');
								setTimeout(function() { 
									$('article #main-section').load('home-pages/webmaster.php',function(){$('#main-section').scrollTop(0)});
									//window.location.href="index.php";
								},500);
							});
							$('#aboutus').on('click', function(){
								$(this).closest('li').siblings('li').find('a').removeClass('active');
								$(this).addClass('active');
								setTimeout(function() { 
									$('article #main-section').load('aboutus.php',function(){$('#main-section').scrollTop(0)});
									//window.location.href="aboutus.php";
								},500);
							});
							$('#expertise').on('click', function(){
								$(this).closest('li').siblings('li').find('a').removeClass('active');
								$(this).addClass('active');
								setTimeout(function() { 
									$('article #main-section').load('home-pages/expertise.php',function(){$('#main-section').scrollTop(0)});
									//window.location.href="expertise.php";
								},500);
							});
							$('#clients').on('click', function(){
								$(this).closest('li').siblings('li').find('a').removeClass('active');
								$(this).addClass('active');
								setTimeout(function() { 
									$('article #main-section').load('home-pages/clients.php',function(){$('#main-section').scrollTop(0)});
									//$('#main-section').scrollTop($('#client_page_top').offset().top);
									//window.location.href="clients.php";
								},500);
							});
							$('#contactus').on('click', function(){
								$(this).closest('li').siblings('li').find('a').removeClass('active');
								$(this).addClass('active');
								$('#footer-links ul li').find('#f-contactus').addClass('active');
								setTimeout(function() { 
									$('article #main-section').load('home-pages/contactus.php',function(){$('#main-section').scrollTop(0)});
									//window.location.href="contactus.php";
								},500);
							});
							$('#careers').on('click', function(){
								$(this).closest('li').siblings('li').find('a').removeClass('active');
								$(this).addClass('active');
								setTimeout(function() { 
									$('article #main-section').load('home-pages/careers.php',function(){$('#main-section').scrollTop(0)});
									//window.location.href="careers.php";
								},500);
							});
							$('#f-contactus').on('click', function(){
								$(this).closest('li').siblings('li').find('a').removeClass('active');
								$(this).addClass('active');
								$('#page-navigator ul li').find('a').removeClass('active').find('#contactus').addClass('active');
								$('#xsysys-top-nav ul li').find('a').removeClass('active');
								setTimeout(function() { 
									$('article #main-section').load('home-pages/contactus.php',function(){$('#main-section').scrollTop(0)});
									//window.location.href="f-contactus.php";
								},500);
							});
							$('#f-feedback').on('click', function(){
								$(this).closest('li').siblings('li').find('a').removeClass('active');
								$(this).addClass('active');
								$('#page-navigator ul li').find('a').removeClass('active');
								$('#xsysys-top-nav ul li').find('a').removeClass('active').find('#webmaster-nav').addClass('active');
								setTimeout(function() { 
									$('article #main-section').load('home-pages/webmaster.php',function(){$('#main-section').scrollTop(0)});
									//window.location.href="f-feedback.php";
								},500);
							});
						});
					</script>
				</ul>
					<!--ul class="block-menu">
						<li><a href="#" class="three-d">
							Home
							<span aria-hidden="true" class="three-d-box">
								<span class="front">Home</span>
								<span class="back">Home</span>
							</span>
						</a></li>
						<li><a href="/demos" class="three-d">
							Demos
							<span aria-hidden="true" class="three-d-box">
								<span class="front">Demos</span>
								<span class="back">Demos</span>
							</span>
						</a></li>
					</ul-->
				<div class="clearboth"></div>
			</nav>	