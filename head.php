	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta content="xsysys Technologies is working with our clients to focus on delivering world class customer specific solutions." name="Abstract">
	<meta content="software solutions, innovation, explore, software services, mobile applications, desktop applications, design, intelligent technologies, systematic change" name="Keywords">
	<meta content="xsysys Technologies is working with our clients to focus on delivering world class customer specific solutions." name="Description">
	<meta content="index, follow" name="Robots">
	<meta content="Public" name="Security">
	<meta content="IN" name="xsysys.Country">
	<meta content="xsysys Technologies Pvt Ltd" name="Publisher">
	<meta content="© Copyright xsysys Technologies 2015" name="CopyRights">
	<meta content="Carl Dujardin/India/xsysys Technologies" name="Owner">
	<meta content="3" name="menu_max_cycles">
	<meta name="author" content="Emmanuel V">
	<link rel="SHORTCUT ICON" href="images/xsysys-asset/xsysys_favico.png">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bower_components/bootstrap/less/scaffolding.less">
	<link rel="stylesheet" href="bower_components/normalize.css/normalize.css">
	<link rel="stylesheet" href="css/min/mystyle.min.css">
	<!--link rel="stylesheet" href="css/mystyle.css"-->
	<link rel="stylesheet" href="js/vendor/Ideal-Image-Slider-1.4.0/ideal-image-slider.css">
	<link rel="stylesheet" href="js/vendor/Ideal-Image-Slider-1.4.0/themes/default/default.css">
	<!--script src="bower_components/jquery/dist/jquery.min.js"></script-->
	<script src="js/vendor/jquery/jquery-1.11.2.min.js"></script>
	<script src="js/vendor/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
	<script src="js/vendor/Ideal-Image-Slider-1.4.0/ideal-image-slider.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="js/vendor/curvycorners-2.1/curvycorners.js"></script> 
	<script src="js/vendor/css-browser-selector/css-browser-selector.js"></script>
	<!--[if lt IE 9]>
			<script src="js/vendor/htmlshiv/dist/html5shiv.min.js"></script>
			<script src="js/myscript/ie-curvycorners.js"></script>	
			<link rel="stylesheet" href="css/min/only-ie.min.css"> 
	<![endif]-->
	
	<!--[if gte IE 9]>
	  <style type="text/css">
		.gradient {
		   filter: none;
		}
		</style>
	<![endif]-->
	<title>Web Page Layout</title>
	<script>
		/*var offset = $("article section").offset(); 
		var w = $(window);
		alert("(x,y): ("+(offset.left-w.scrollLeft())+","+(offset.top-w.scrollTop())+")");*/
	</script>
	<script>
		function triggerClient(id){
			if(id == "discoverClient1"){
				if(typeof(Storage) !== "undefined") {
					if (sessionStorage.clickcount) {
						sessionStorage.clickcount = 1;
					} 
				}
				window.location.href= "clients.php#casedtls_page_ref";
				//document.getElementById("clients_main_page_id1")[0].onclick();
				//$("#clients_main_page_id1").trigger("click");
				//$("#clients_main_page_id1")[0].onclick();
			}
			if(id == "discoverClient2"){
				if(typeof(Storage) !== "undefined") {
					if (sessionStorage.clickcount) {
						sessionStorage.clickcount = 2;
					} 
				}
				window.location.href= "clients.php#casedtls_page_ref";
				//$("#clients_main_page_id2").trigger("click");
				//$("#clients_main_page_id2")[0].onclick();
				//document.getElementById("clients_main_page_id2")[0].onclick();
			}
		}
		function checkTriggered(){
			//alert(sessionStorage.clickcount);
			if(sessionStorage.clickcount == 1){
				$('#clients_main_page_id1').trigger('click');
			}
			else if(sessionStorage.clickcount == 2){
				$('#clients_main_page_id2').trigger('click');
			}
			else {
				sessionStorage.clickcount = 0;
			}
		}
		function toggleAside(id){
			//alert(id);
			var asideWidth= $('#'+id).closest('aside').css('width');
			asideWidth= parseInt(asideWidth);
			//alert(asideWidth);
			if(asideWidth > 50){
				$('#'+id).closest('aside').siblings('article').find('section.main-section').addClass('ie-main-sec-tog-width');
				$('#'+id).closest('aside').siblings('article').css('width','96%');
				$('#'+id).closest('#aside-toggle-btn-block').siblings('.main-section').css({'visibility':'hidden', 'width':'50px', 'opacity':'0','overflow':'hidden'});
				$('#'+id).closest('#aside-toggle-btn-block').siblings('.main-section').find('h1').css({'overflow':'hidden'});
				$('#'+id).closest('aside').css({'width':'50px','margin-left':'0px'});
				$('#'+id).find('img').attr('src','images/xsysys-ui/aside-toggle/aside-toggle-left.png');
				$('#'+id).removeClass('aside-btn-right').addClass('aside-btn-left');
			}
			else {
				$('#'+id).closest('aside').siblings('article').find('section.main-section').removeClass('ie-main-sec-tog-width');
				$('#'+id).closest('aside').siblings('article').css('width','75%');
				$('#'+id).closest('#aside-toggle-btn-block').siblings('.main-section').css({'visibility':'visible', 'width':'100%','width':'calc(100% + 20px)', 'opacity':'1', 'overflow-x':'hidden','overflow-y':'scroll'});
				$('#'+id).closest('#aside-toggle-btn-block').siblings('.main-section').find('h1').css({'overflow':'visible'});
				$('#'+id).closest('aside').css({'width':'25%', 'margin-left':'75%'});
				$('#'+id).find('img').attr('src','images/xsysys-ui/aside-toggle/aside-toggle-right.png');
				$('#'+id).removeClass('aside-btn-left').addClass('aside-btn-right');
			}
		}
		$(document).ready(function(){
			$('#aside-toggle-btn-block > #aside-toggle-btn').on({
				mouseover: function(){
								if($(this).hasClass('aside-btn-right') == true)
								{
									$(this).find('img').attr('src','images/xsysys-ui/aside-toggle/aside-toggle-right-hovered.png');
								}
								if($(this).hasClass('aside-btn-left') == true)
								{
									$(this).find('img').attr('src','images/xsysys-ui/aside-toggle/aside-toggle-left-hovered.png');
								}
							},
				mouseout: function(){
								if($(this).hasClass('aside-btn-right') == true)
								{
									$(this).find('img').attr('src','images/xsysys-ui/aside-toggle/aside-toggle-right.png');
								}
								if($(this).hasClass('aside-btn-left') == true)
								{
									$(this).find('img').attr('src','images/xsysys-ui/aside-toggle/aside-toggle-left.png');
								}
							},
				click: function(){
								if($(this).hasClass('aside-btn-right') == true)
								{
									$(this).find('img').attr('src','images/xsysys-ui/aside-toggle/aside-toggle-right.png');
								}
								if($(this).hasClass('aside-btn-left') == true)
								{
									$(this).find('img').attr('src','images/xsysys-ui/aside-toggle/aside-toggle-left.png');
								}
							}
			});
		});
	</script>
	<script>
			function loadHistory(){
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
			}
			
			function loadVisionMission(){
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
			}
			
			function loadTechnology(){
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
			}
			
			function loadTeam(){
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
			}
			
			function loadBrand(){
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
			}
			function loadGateway(){
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
			}
			function loadNews(){
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
			}
			function loadQualitySystems(){
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
			}
			function loadAboutUs(){
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
					xmlhttp.open("GET","aboutus-pages/aboutus-main-content.php",true);
					xmlhttp.send();
			}
	</script>
