<div class="xsysys-content-block" id="xsysys-content-block">
	<section>
		<h1 class="publications-banner">Publications</h1>
			<p>
				<strong>European IT Companies in India</strong>
			</p>
			<p>
				The Value Leadership Group, an international management consultancy, conducted comprehensive research on the offshore activities and strategies of European IT companies in India.The Value Leadership Group shows how European IT companies are leveraging offshore capabilities to reignite growth,improve financial performance,and capture new markets. DeDuCo and <span class="xsysys_style">xsysys</span> Technologies are profiled in this report. The report is available for download on our website. 
			</p>
			<p>
				DeDuCo offers its customers company-wide software solutions and a wide range of related services. Its CRM software suite contains five integrated products (KEYaccount+, SALESforce+, SECtor+, CALLcenter+ and FIELDservice+), all of them ensuring the customers’ competitive edge. For more information, please visit <a href="http://www.deduco.com" target="_blank">www.deduco.com</a>
			</p>
			<div class="xsysys_event_list" id="publicationslist">
				<ul>
					<li>Publications - 2006 <a target="_blank" href="http://get.adobe.com/reader/?promoid=HRZAC">[Publications are available in PDF format, if adobe reader is not installed, please click this link to install it!]</a><br/>
						<ul>
							<li>
								<a id="publications_id1" style="cursor:pointer!important;" onclick="openPressReleaseWin(this,'pdf/publications/IT_professional_Belgium_Sept_28_2006_European_SMEs_Leverage_Offshore_for_Advantage.pdf','IT professional Belgium Sept 28 2006 European SMEs Leverage Offshore for Advantage (Dutch)',800,540);return false;">IT professional Belgium Sept 28 2006 European SMEs Leverage Offshore for Advantage (Dutch)</a>
							</li>	
							<li>
								<a id="publications_id2" style="cursor:pointer!important;" onclick="openPressReleaseWin(this,'pdf/publications/OutsourceDec2006.pdf','Outsource - December 2006 (Dutch)',800,540);return false;">Outsource December 2006 (Dutch)</a>
							</li>
							<li>
								<a id="publications_id3" style="cursor:pointer!important;" onclick="openPressReleaseWin(this,'pdf/publications/VLG_European_IT_companies_in_India.pdf','European IT companies in India',800,540);return false;">European IT companies in India</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<script>
				function openPressReleaseWin(id, bigurl, winName, width, height)
				{
					var thisID= $(id).attr('id');
					if($('#'+thisID).css('cursor') == 'pointer')
					{
						var newWindow = window.open('', winName, 
						"location=no, directories=no, fullscreen=no, " + 
						"menubar=no, status=no, toolbar=no, width=" + 
						width + ", height=" + height + ", scrollbars=yes");
						if (newWindow)
						{
							newWindow.focus();
						}
						newWindow.document.writeln("<!doctype HTML>");
						newWindow.document.writeln("<html>");
						newWindow.document.writeln("<head>");
						newWindow.document.writeln("<title>"+winName+"</title>");
						newWindow.document.writeln('<script src="js/vendor/jquery/jquery-1.11.2.min.js"></scr'+'ipt>');
						//newWindow.document.writeln('<script src="jQuery/newsscript.js"></scr'+'ipt>');
						newWindow.document.writeln("</head>");
						newWindow.document.writeln("<body onload='loadpublications()' style='margin: 0 0 0 0;'>");
						newWindow.document.writeln("<a href='javascript:window.close();'>");
						newWindow.document.writeln("<script>");
						newWindow.document.writeln("function loadpublications() {");
						newWindow.document.writeln("location.assign('"+bigurl+"');");
						//newWindow.document.writeln("window.open('"+bigurl+"', '_self');");
						newWindow.document.writeln("}");
						newWindow.document.writeln("</scr"+"ipt>");
						newWindow.document.writeln("</a>");
						newWindow.document.writeln("</body></html>");
						newWindow.document.close();
						//newWindow.onbeforeunload = function() {
							//return "Did you save your stuff?"
						//} 
						newWindow.onunload=function() {
							$('#'+thisID).attr({'style':'cursor:pointer!important'});
							$('#'+thisID).closest('li').addClass('active_event');
						};
						//newWindow.onfocus = function("in focus");
						//newWindow.onblur = function("not in focus");
						/*You then can set state with this method of window:*/
					}
				}
			</script>
			<script>
				$(document).ready(function(){ 
					$('#publicationslist > ul > li> ul > li > a').on({
						mouseout: function() {$(this).closest('li').attr({'style':'list-style-image:url(images/xsysys-ui/links/bullet1.png);color:#999999;'});},
						mouseover: function(){$(this).closest('li').attr({'style':'list-style-image:url(images/xsysys-ui/links/bullet1_hover.png);color:#333333;'});},
						click: function() {$(this).closest('li').addClass('active_event');}
					});
				});
			</script>
		<strong class="inspire">inspiring human endeavour</strong>
	</section>
	<!--a class="back-button" href="javascript:window.location.href='aboutus.php';"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Back</a-->
	<a id="back-btn-to-home" class="back-button" onclick="loadHome()"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Back</a>
</div>