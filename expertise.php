<!doctype html>
<html>
	<head>
		<?php
		$page_title = 'expertise.php';
		$pgDesc = 'Expertise Page';
		$keyWords = 'xsysys expertise';
		include ('head.php');
		?>
		<script>
			$(document).ready(function(){
				$('#page-navigator ul li').find('#expertise').addClass('active');
			});
		</script>
	</head>
	<body>
		<div id="main-aboubus" class="main">
			<?php
				include ('header.php');
			?>
			<article>
				<section id="expertise-main-section" class="main-section">
					<div class="xsysys-content-block" id="xsysys-content-block">
						<section>
							<h1 class="expertise-banner">Expertise</h1>
							<div class="silver-bg">
								<p>
									Proven strengths in specific domains, technology and process expertise is the foundation of our service offering. We have more than 8 years of experience in the offshore model and our robust management processes and automated metrics collection systems will ensure continuous improvement and so add value for the customer.
								</p>
								<p>
									Offshore development is as much about technical skills and quality as it is about a relationship based on compatibility, trust and mutual respect. In other words offshore development is communication driven. Frequent and efficient interactions are the basis for a successful offshore software development project. Our step by step project approach via our smart method interaction model ensures sufficient iterations in the process, guaranteeing world class efficiency in delivering in time in budget and in quality.
								</p>
								<p>
									Business executives need to understand and evaluate the potential risk and rewards of outsourcing to determine if it is right for their business. In order to best make this decision and to set and execute an effective outsourcing strategy you need to evaluate all of your outsourcing options, select what functions to outsource, negotiate your outsourcing contracts, choose between short term and long term outsourcing and decide whether to go offshore or not.
								</p>
								<p>
									<strong>Our <span class="xsysys_style">xsysys</span> domain experts will provide you with specific insights into the following matters thus helping you to realize your outsourcing strategy.</strong>
								</p>
								<ul class="details-list">
									<li>The different options to start your organization’s journey into sourcing</li>
									<li>The factors you need to consider when deciding what functions can be outsourced offshore</li>
									<li>The criteria to consider when deciding upon an offshore service provider</li>
									<li>How to determine your readiness for offshore sourcing</li>
									<li>Start-to-finish analysis for effective offshoring of business processes</li>
									<li>Winning strategies to dramatically increase productivity by outsourcing IT applications</li>
									<li>Best practices for minimizing the risks and hidden costs of software development</li>
									<li>How to build an offshore strategy that fits your business objectives and organizational culture</li>
									<li>How to determine the best financial model for your offshore outsourcing project</li>
									<li>How to manage the offshore outsourcing lifecycle</li>
									<li>How the offshore trends and issues of 2004 affect your decisions today</li>
								</ul>
								<p>
									If you want to know more about the essentials in offshore development and how it may help you to focus on your core business activities then send us an e-mail at <a href="mailto:info@xsysys.com">info@xsysys.com</a>
								</p>
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

