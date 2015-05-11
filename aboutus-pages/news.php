<section class="news">
	<h1 class="news-banner">News</h1>
	<div id="xsysys_content_nav" class="xsysys_content_nav">
		<div id="xsysys_primary_tabs" class="xsysys_primary_tabs" role="navigation" aria-label="Tab Navigation">
			<!-- <span class="xsysys_access">Primary tab navigation</span> -->
			<ul id="newstabs" class="xsysys_tabs" role="tablist">
				<li class="xsysys_active " role="presentation">
					<a onclick="load_internalnews()" role="tab" aria-selected="true" aria-label="Internal News">Internal News</a>
						<!-- <span class="ibm-access"> - selected tab, </span> -->
				</li>
				<li role="presentation">
					<a onclick="load_pressreleases()" role="tab" aria-selected="false" aria-label="Press Releases">Press Releases</a>
				</li>
				<li role="presentation">
					<a onclick="load_presscoverage()" role="tab" aria-selected="false" aria-label="Press Coverage">Press Coverage</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="xsysys-news-content-block">
		<div class="content pagecontent">
			<div class="silver-bg">
				<div class="xsysys_container_body">
					<div class="session_page">
						<div id="session_body">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<strong class="inspire">inspiring human endeavour</strong>
</section>
<a class="back-button" href="javascript:window.location.href='aboutus.php';"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Back</a>
<script>
	/*$(document).ready(function(){
		$("#newstabs").find("li").on("click", "a", function(){
			$(this).closest("li").addClass("xsysys_active");
			$(this).closest("li").siblings("li").removeClass("xsysys_active");
		});
		$("#newstabs").find(".xsysys_active > a").trigger("click");
	});*/
</script>
								