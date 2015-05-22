<script>
	$(document).ready(function(){
		$('#page-navigator ul li').find('#careers').addClass('active');
	});
</script>
<div class="xsysys-content-block" id="xsysys-content-block">
	<section id="careers-desc-section">
		<h1 class="careers-banner">Careers</h1>
		<div class="silver-bg">
			<div id="careers_desc_block" class="careers_desc_block">
				<p>
					<span class="xsysys_style">xsysys</span> is a technology driven, people and processes oriented company, specializing in domain specific solutions leveraging on the globalization model thus delivering its customers a substantial added value at the lowest possible cost. Our Indo-european management inspires a culture of high performance by setting challenging internal company standards. Our teams constantly strive to deliver on time, defect free software solutions and services to our customers to enable them to have a competitive edge in the market, by establishing and reviewing quality objectives and continually improving our quality management system.
				</p>
				<p>
					Domain expertise, team work, ethical practices, commitment to comply with requirements and maintaining a long term relationship with customers and suppliers are our guiding principles.
				</p>
				<p>
					If you are looking for a rewarding career at <span class="xsysys_style">xsysys</span> Technologies, please send an e-mail to <a href="mailto:hr@xsysys.com">hr@<span class="xsysys_style">xsysys</span>.com</a> or if you want to find out more about the current openings, we welcome you to click on the job opportunities link.
				</p>
				<ul class="page_ref_link">
					<li><a id="careers_main_page_id1" href="#top_content_block_ref" onclick="showJobOpBlock(this.id)">Job Opportunities</a></li>	
				</ul>
			</div>
		</div>
		<a id="careers-back-btn-to-home" class="back-button" onclick="loadHome()"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Back</a>
	</section>
	<section id="job-op-section" style="display:none;">
		<div class="silver-bg">
			<div id="job_op_block" class="job_op_block">
				<h1>Apply now online or send your details to <a href="mailto:hr@xsysys.com" target="_top">hr@<span class="xsysys_style">xsysys</span>.com</a></h1>
				<ol class="ordered_list">
					<li>
						<strong>QA Engineer - Job Code : QAEIA 001</strong>
						<ul>
							<li>Preferably a Bachelor’s degree or equivalent with at least 2 years of experience in a similar position</li>
							<li>Sound knowledge of software engineering practices</li>
							<li>Sound knowledge of metrics management</li>
							<li>Internal audit skills in various quality standards like ISO, CMM etc</li>
							<li>Good oral and written English communication skills and presentation skills</li>
							<li>Certification in quality assurance (CQA) is a added advantage</li>
						</ul>
						<div class="btn_container">
							<a class="red_primary_btn" href="mailto:hr@xsysys.com?Subject=Job%20Code%20:%20QAEIA%20001" target="_top">Apply Now</a>
						</div>
						<div class="clearboth"></div>
					</li>                    
					<li>
						<strong>Software Engineer (PB) - Job Code : SE-PBIA 001</strong>
						<ul>
							<li>BSc/ BE/ B.Tech/ MSc/ M.Tech/ MS/ MCA in Computer Science</li>
							<li>Minimum 2 years experience in PowerBuilder, Sybase ASA, SQLServer</li>
							<li>Good in Database Design and writing Stored Procedures</li>
							<li>Good in documentation</li>
							<li>Knowledge in .Net / Embedded VB would be an added advantage</li>
							<li>SDLC & ISO skills would be an added advantage</li>
						</ul>
						<div class="btn_container">
							<a class="red_primary_btn" href="mailto:hr@xsysys.com?Subject=Job%20Code%20:%20SE-PBIA%20001" target="_top">Apply Now</a>
						</div>
					</li>                    
					<li>
						<strong>Trainee Software Engineer – Job Code : SE-TRIA 001</strong>
						<ul>
							<li>BSc/ BE/ B.Tech/ MSc/ M.Tech/ MS/ MCA in Computer Science</li>
							<li>Knowledge in Sybase ASA / SQLServer would be an added advantage</li>
							<li>Worked on any real time project would be an added advantage</li>
						</ul>
						<div class="btn_container">
							<a class="red_primary_btn" href="mailto:hr@xsysys.com?Subject=Job%20Code%20:%20SE-TRIA%20001" target="_top">Apply Now</a>
						</div>
					</li>                    
				</ol>
			</div>
		</div>
		<strong class="inspire">inspiring human endeavour</strong>
		<a id="backBtn-to-careers-section" class="back-button" onclick="showCareersBlock(this.id)"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Back</a>
	</section>
	<!--a class="back-button" href="javascript:window.location.href='careers.php';"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Back</a-->
</div>
			<script>
				$(document).ready(function(){
					$('#careers_main_page_id1').on({
							mouseover: function(){
								$(this).closest('li').addClass('active_link');
							},
							mouseout: 
								function(){
								$(this).closest('li').removeClass('active_link');
							},
							click: function(){
								$(this).closest('li').addClass('active_link');
							} 
					});
				});
				function showJobOpBlock(id) {
					$('#'+id).closest('#careers-desc-section').css({'display':'none'});
					$('#'+id).closest('#careers-desc-section').siblings('#job-op-section').css({'display':'block'});
				}
				function showCareersBlock(id) {
					$('#'+id).closest('#job-op-section').css({'display':'none'});
					$('#'+id).closest('#job-op-section').siblings('#careers-desc-section').css({'display':'block'});
				}
			</script>