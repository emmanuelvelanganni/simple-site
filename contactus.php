<!doctype html>
<html>
	<head>
		<?php
		$page_title = 'contactus.php';
		$pgDesc = 'contactus Page';
		$keyWords = 'xsysys contactus';
		include ('head.php');
		?>
		<script>
			$(document).ready(function(){
				$('#page-navigator ul li').find('#contactus').addClass('active');
			});
		</script>
	</head>
	<body>
		<div id="main-aboubus" class="main">
			<?php
				include ('header.php');
			?>
			<article>
				<section id="contactus-main-section" class="main-section">
					<div class="xsysys-content-block" id="xsysys-content-block">
						<section>
							<h1 class="contactus-banner">Contact us</h1>
							<div class="silver-bg">
								<p style="float:left; width:auto;">
									<strong>Address:</strong><br/><br/>
									<span class="xsysys_style">xsysys</span><strong> Technologies Pvt. Ltd</strong> <br/>
									92/1A Doddathogur,<br/>
									EC Entrance No.2 / HP Entrance,<br/>
									Electronics City Post,<br/>
									Bangalore - 560 100, INDIA.<br/>
									e-mail: info@xsysys.com<br/><br/>
									<strong>Tel.</strong><span style="display: inline-block; text-indent: 11px;">+91-80-2852 32 32</span><br/>
									<strong>Fax.</strong><span style="display: inline-block; text-indent: 5px;">+91-80-2852 32 33</span><br/><br/>
								</p>
								<div class="xsysys_route_map">
									<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden; height:500px; width:600px; float:right; overflow:hidden; border:1px solid #333333; box-shadow:0 0 5px rgba(0, 0, 255, 0.5), 0 0 5px 2px rgba(153, 204, 255, 0.7); margin-top:6px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.mapstcode.com" id="get-map-data">mapstcode.com</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(12.85469150463108,77.66239847825705),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(12.85469150463108, 77.66239847825705)});infowindow = new google.maps.InfoWindow({content:"<b>Xsysys Technologies Pvt Ltd</b><br/>92/1a, Doddathogur Mn Road, Electronics City<br/>560100 bengaluru" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
								</div>
								<img src="images/xsysys-articles/home/xsysys_infrastructure.jpg" alt="XSYSYS_Infrastructure" style="border:1px solid #333333;  width:336px; height:226px; vertical-align:baseline;"/>								
								<div class="clearboth"></div>
							</div>
							<strong class="inspire">inspiring human endeavour</strong>
						</section>
						<a class="back-button" href="javascript:window.location.href='index.php';"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Back</a>
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

