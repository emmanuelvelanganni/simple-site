<!doctype html>
<html lang="en">
	<head>
		<?php
		$page_title = 'index.php';
		$pgDesc = 'Main Page';
		$keyWords = 'xsysys website';
		include ('head.php');
		?>
	</head>
	<body onload="checkTriggered()">
		<div id="main" class="main">
			<?php
				include ('header.php');
			?>
			<article>
				<section id="main-section" class="main-section">
					<script>
							$(document).ready(function(){
								$('#main-section').load('home-pages/index-main-content.php',function(){$('#main-section').scrollTop(0)});
								
							});
					</script>
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