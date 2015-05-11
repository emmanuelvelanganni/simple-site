		<header>
			<h1 id="xsysys-logo" class="xsysys-logo"><a href="index.php"><img src="images/xsysys-asset/xsysys-logo.png"/></a></h1>
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
			<div class="xsysys-top-nav">
				<ul>
					<li>
						<a id="home-nav" href="index.php">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home
						</a>
					</li>
					<li>
						<a id="alliances-nav" href="#">
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
						<a id="aboutus" href="#">About Us</a>
					</li>
					<li>
						<img src="images/xsysys-ui/main-nav/expertise_menu_icon.png"/>
						<a id="expertise" href="#">Expertise</a>
					</li>
					<li>
						<img src="images/xsysys-ui/main-nav/client_menu_icon.png"/>
						<a id="clients" href="#">Clients</a>
					</li>
					<li>
						<img src="images/xsysys-ui/main-nav/contact_menu_icon.png"/>
						<a id="contactus" href="#">Contact Us</a>
					</li>
					<li>
						<img src="images/xsysys-ui/main-nav/careers_menu_icon.png"/>
						<a id="careers" href="#">Careers</a>
					</li>
					<script>
						$(document).ready(function(){
							$('#xsysys-logo, #xsysys-top-nav').on('click', function(){
								$('#page-navigator ul li').find('a').removeClass('active');
								//$(this).addClass('active');
								setTimeout(function() { 
									//$('article #main-section').load('aboutus.php');	
									window.location.href="index.php";
								},500);
							});
							$('#aboutus').on('click', function(){
								$(this).closest('li').siblings('li').find('a').removeClass('active');
								//$(this).addClass('active');
								setTimeout(function() { 
									//$('article #main-section').load('aboutus.php');	
									window.location.href="aboutus.php";
								},500);
							});
							$('#expertise').on('click', function(){
								$(this).closest('li').siblings('li').find('a').removeClass('active');
								//$(this).addClass('active');
								setTimeout(function() { 
									//$('article #main-section').load('expertise.html');	
									window.location.href="expertise.php";
								},500);
							});
							$('#clients').on('click', function(){
								$(this).closest('li').siblings('li').find('a').removeClass('active');
								//$(this).addClass('active');
								setTimeout(function() { 
									//$('article #main-section').load('clients.html');	
									window.location.href="clients.php";
									sessionStorage.clickcount = 0;
								},500);
							});
							$('#contactus').on('click', function(){
								$(this).closest('li').siblings('li').find('a').removeClass('active');
								//$(this).addClass('active');
								setTimeout(function() { 
									//$('article #main-section').load('contactus.html');	
									window.location.href="contactus.php";
								},500);
							});
							$('#careers').on('click', function(){
								$(this).closest('li').siblings('li').find('a').removeClass('active');
								//$(this).addClass('active');
								setTimeout(function() { 
									//$('article #main-section').load('careers.html');	
									window.location.href="careers.php";
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