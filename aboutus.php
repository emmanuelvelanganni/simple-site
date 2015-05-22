<script>
	$(document).ready(function(){
		$('#page-navigator ul li').find('#aboutus').addClass('active');
	});
</script>
<div class="xsysys-aboutus-content-block" id="xsysys-aboutus-content-block">
	<script>
		$(document).ready(function(){
			$('#xsysys-aboutus-content-block').load('aboutus-pages/aboutus-main-content.php');
		});
	</script>
</div>
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
