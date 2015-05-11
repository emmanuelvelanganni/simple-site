<!doctype html>
<html>
	<head>
		<?php
		$page_title = 'clients.php';
		$pgDesc = 'clients Page';
		$keyWords = 'xsysys clients';
		include ('head.php');
		?>
		<script>
			$(document).ready(function(){
				$('#page-navigator ul li').find('#clients').addClass('active');
			});
		</script>
	</head>
	<body onload="checkTriggered()">
		<div id="main-aboubus" class="main">
			<?php
				include ('header.php');
			?>
			<article>
				<section id="clients-main-section" class="main-section">
					<div id="client_page_top"></div>
					<div class="xsysys-content-block" id="xsysys-content-block">
						<section>
							<h1 class="clients-banner">clients</h1>
							<div class="silver-bg">
								<div>
									<div class="xsysys_event_list" id="clientsmainpagelist">
										<ul class="clients_page_list">
											<li>
												<div class="client_title">KRAFT Foods Belgium - a division of KRAFT Foods (PHILIP MORRIS)</div>
												<img class="client_logo" src="images/xsysys-articles/home/clients/kraft.png" alt="Kraft Foods Logo"/>
												<div class="clearboth"></div>
												<p>
													Manufacturer and distributor of chocolate, dressings, spaghetti sauce, coffee... <br/>
													Headquarters: Deerfield, IL, United States of America, more
												</p>
												<p>
													 <strong>Belgian brands</strong> are Cote d'Or, Leo, Meurisse, Miracoli, Jacobs Carte Noire, Philadelphia, Toblerone...   
												</p>
												<ul class="case_study">
													<li><a id="clients_main_page_id1" href="#casedtls_page_ref" onclick="showEvent(this)">Case Study</a></li>	
												</ul>
											</li>
											<li>
												<div class="client_title">CAMPBELL Foods Belgium - a major player in the FMCG Market in Belgium</div>
												<img class="client_logo" src="images/xsysys-articles/home/clients/campbells.png" alt="Campbell Foods Logo"/>
												<div class="clearboth"></div>
												<p>
													Manufacturer and distributor of soups, instant soups, dressings...<br/>
													Headquarters: Camden, NJ, United States of America
												</p>
												<p>
													<strong>European brands</strong> are Campbell's, Chef René, De Blauwe Hand, Devos & Lemmens, Imperial, Lacroix, Liebig, Royco and V8... 
												</p>
												<ul class="case_study">
													<li><a id="clients_main_page_id2" href="#casedtls_page_ref" onclick="showEvent(this)">Case Study</a></li>
												</ul>
											</li>
											<li id="nestle">
												<div class="client_title">Nestlé S.A. is a Swiss multinational food and beverage company.</div>
												<img class="client_logo" src="images/xsysys-articles/home/clients/nestle.png" alt="Nestlé Logo"/>
												<div class="clearboth"></div>
												<p>
													Manufacturer and distributor of chocolate products, baby food, coffee, dairy products...<br/>
													Headquarters: Vevey, Canton of Vaud, Switzerland
												</p>
												<p>
													<strong>European brands</strong> After Eight, Beba, Buitoni, Carnation, Crunch, Galak, Herta, KitKat, Lion, Maggie, NAN, Nescafé, Nesquick, Nestea, Nestlé, Cornflakes, Quality Street, Smarties, Yes
												</p>
												<ul class="case_study">
													<li style="visibility:hidden;"><a id="clients_main_page_id3" href="#casedtls_page_ref" onclick="showEvent(this)">Case Study</a></li>
												</ul>
											</li>
											<li id="pernod_ricard">
												<div class="client_title">Pernod Ricard is a French company that produces distilled beverages.</div>
												<img class="client_logo" src="images/xsysys-articles/home/clients/pernod.png" alt="Pernod Ricard Logo"/>
												<div class="clearboth"></div>
												<p>
													Manufacturer and distributor of spirits and wines<br/>
													Headquarters: Paris, France
												</p>
												<p>
													<strong>European brands</strong> are Ricard, Chivas Regal, Jameson, Havana Club, Martell, Bisquit, Sandeman, Wyborowa, Disaronno, Jacob's Creek
												</p>
												<ul class="case_study">
													<li style="visibility:hidden;"><a id="clients_main_page_id4" href="#casedtls_page_ref" onclick="showEvent(this)">Case Study</a></li>
												</ul>
											</li>
											<li id="swedish_match">
												<div class="client_title">Swedish Match is a Swedish company that makes snus, moist snuff and chewing tobacco.</div>
												<img class="client_logo" src="images/xsysys-articles/home/clients/swedish.png" alt="Swedish Match Logo"/>
												<div class="clearboth"></div>
												<p>
													Manufacturer and distributor of cigars, snuff tobacco, chewing tobacco and lighters <br/>
													Headquarters: Stockholm, Sweden
												</p>
												<p>
													<strong>European brands</strong> are Borkum Riff, Corona, Cricket Lighters, Justus van Maurik, La Paz, Willem II
												</p>
												<ul class="case_study">
													<li style="visibility:hidden;"><a id="clients_main_page_id5" href="#casedtls_page_ref" onclick="showEvent(this)">Case Study</a></li>
												</ul>
											</li>
											<li id="loreal">
												<div class="client_title">The L'ORÉAL Group is a French cosmetics and beauty company.</div>
												<img class="client_logo" src="images/xsysys-articles/home/clients/loreal.png" alt="Loreal Logo"/>
												<div class="clearboth"></div>
												<p>
													Manufacturer and distributor of perfumes, skin and hair care products<br/>
													Headquarters: Paris, Île-de-France, France, Clichy, France
												</p>
												<p>
													<strong>European brands</strong> are Garnier, L'ORÉAL
												</p>
												<ul class="case_study">
													<li  style="visibility:hidden;"><a id="clients_main_page_id6" href="#casedtls_page_ref" onclick="showEvent(this)">Case Study</a></li>
												</ul>
											</li>
										</ul>
									</div>
									<div id="casedetails" class="casedetails">
										<div id="casedtls_page_ref"></div>
										<div id="client_main_page1" style="display:none;">
											<h1>Software development KRAFT FOODS BELGIUM order entry and stock management</h1>
											<div class="clients">
												<p>
													The sales team of KRAFT FOODS BELGIUM, the Belgian division of KRAFT FOODS (PHILIP MORRIS), has been using DeDuCo's SALESforce+ to manage its customers, contacts and visits since 1990. The company is manufacturer and distributor of brands such as Côte d'Or, Leo, Milka, Miracoli, Kraft… and visits mainly food outlets in Belgium.
												</p>
												<p>
													In order to work more efficiently, it was decided by the management to automate the stock- and the order flow-module. Consequently, additional software had to be developed, a task for which <span class="xsysys_style">xsysys</span> Technologies (Bangalore) has been selected.
												</p>
												<p>
													Before, representatives who were visiting their customers had to write order forms, deliver products from the stock in their car (and manage their own stock). All these tasks were processed on paper.
												</p>
												<p>
													The consequences of this methodology of working were not always easy to handle: the manual data had to be entered into the ERP system of KRAFT FOODS BELGIUM, which meant a fulltime job for 1 employee.
												</p>
												<p>
													And secondly, the stock management of each representative was an elaborate task, mainly due to the fact that the representatives sold entire boxes to their customers, but single products were given for free. In reality it was extremely difficult to maintain stock numbers in tune with the real situation.
												</p>
												<p>
													Consequently, the management of KRAFT FOODS was looking for software development that could automate these aspects: order entry, stock management and the entire stock flow. The criteria to choose for <span class="xsysys_style">xsysys</span> Technologies (Bangalore) were the efficient ISO 9001:2000 offshore processes, the short delivery time, the flexibility in their approach and the knowledge of the FMCG market.
												</p>
												<p>
													Representatives now have the possibility to register orders and manage their own stock on PC. By means of the stock management module the representatives can order goods for their own stock, they automatically send the order to corporate headquarters and when the goods are delivered they confirm the reception of these goods. As such they have an accurate real-time view on their stock.
												</p>
												<p>
													The orders entered at the customers’ end are now dealt with in the same way: the orders are entered into the order module of SALESforce+, a confirmation can be printed and the order is sent to corporate headquarters for further processing in the evening. Not only is the processing of these orders less time consuming, now they can even be processed the next morning, as no double input is needed. The error rate has fallen by more than 90%, not only because of the single input, but also due to the fact that the representatives have the flexibility to change the order data – a very useful feature in case a customer calls last minute to change the order or if he wants to add extra items to it.
												</p>
												<p>
													Moreover the software was adapted to an optimal use on Tablet Pen Pc, so that the application could be used in the field, face to face with the shelf.
												</p>
												<a href="#client_page_top" class="top_page_pointer">Top <span class="glyphicon glyphicon-arrow-up"></span></a>
												<span class="clearboth"></span>
											</div>
										</div>
										<div id="client_main_page2" style="display:none;">
											<h1>
												Software development CAMPBELL FOODS BELGIUM management of permanent and promotional conditions
											</h1>
											<div class="clients">
												<p>
													CAMPBELL FOODS BELGIUM is a major player on the Fast Moving Consumer Goods market in Belgium. Some of the products in its portfolio, such as Royco, Campbell’s and Liebig, are market leaders. Both the sales department and the marketing department are currently using automation tools developed by DeDuCo: the representatives use SALESforce+ in their tasks with the customers; the Key Account Managers and the marketing department use KEYaccount+, a product to manage the actions with their customers, their budgets and their conditions.
												</p>
												<p>
													Until the introduction of KEYaccount+, most Key Account Managers of CAMPBELL FOODS BELGIUM managed their customer conditions in a non standardized way, very often in Excel. This resulted in all sorts of different procedures developed by the different Key Account Managers, and ultimately did lead to the fact that no history of conditions was available for retrieval. As actions and conditions in the Fast Moving Consumer Goods sector may quite differ between the initial and final proposal (and the introduction in the ERP system) it is very useful for the Key Account Manager to have a view on the history of the action, on the profitability... This can only be achieved by setting up a central database of all actions and conditions.
												</p>
												<p>
													In order to solve this complex and important problem <span class="xsysys_style">xsysys</span> Technologies (Bangalore) was selected.The criteria to choose <span class="xsysys_style">xsysys</span> were the efficient ISO 9001:2000 offshore processes, the short delivery time, the flexibility in their approach and their domain expertise in the FMCG market.
												</p>
												<p>
													Now, each Key Account Manager can manage conditions at his customers' end, a complex matter of end of year reductions, permanent reductions, logistics reductions, introduction reductions... and still gauge the profitability of that customer. Moreover, he can now manage all his actions, including the management of budgets for each action (introductions, folders...), and the management of conditions for each action. Follow-up of invoices is made possible. He can manage all the quotations he sends to his customers and the dispatch of technical files and confirmations of actions in the document layouts that are imposed upon him by his customers (in Excel) is made possible. He can determine the profitability of actions and products for each individual customer.	
												</p>
												<p>
													All actions and objectives are dispatched to the sales team. Now the representatives have an overview of all actions agreed upon with the chain's head office which brings them into a much better position to negotiate and propose actions to their customers. Each Key Account Manager can now evaluate the result of his actions and undertake new actions in case the objectives aren’t met. For each action he now manages budgets, support above and below the line, invoices, periods (proposal period, order period, action period)... with history.
												</p>
												<p>
													The confirmation of the proposed customer actions - which formerly took about half an hour to complete – can now be finished in about 5 minutes. 
												</p>
												<a href="#client_page_top" class="top_page_pointer">Top <span class="glyphicon glyphicon-arrow-up"></span></a>
												<span class="clearboth"></span>
											</div>
										</div>
									</div>
								</div>
								<script>
									$(document).ready(function(){
										$('.top_page_pointer').on('click', function(){
											$(this).closest('.clients').parent('div').css('display','none');
										});
									});
								</script>
								<script>
									$(document).ready(function(){ 
										$('#clientsmainpagelist > ul > li> ul > li > a').on({
											mouseout: function() {$(this).closest('li').attr({'style':'list-style-image:url(images/xsysys-ui/links/bullet1.png);color:#999999;'})},
											mouseover: function(){$(this).closest('li').attr({'style':'list-style-image:url(images/xsysys-ui/links/bullet1_hover.png);color:#333333;'})},
											click: function() {$(this).closest('li').addClass('active_event');}
										});
									});  
								</script>
								<script>
									function showEvent(id) {
										//alert(id);
										$(id).closest('li').addClass('active_event');
										$(id).closest('ul').parent('li').siblings().find('li').removeClass('active_event');
										if($(id).attr('id') == "clients_main_page_id1") {
											$('#client_main_page1').css({'display':'block'});
											$('#client_main_page2').css({'display':'none'});
											$('#clients_main_page_id2').closest('li').attr({'style':'list-style-image:url(images/xsysys-ui/links/bullet1.png)!important;color:#999999;'});
											$('#clients_main_page_id1').closest('li').attr({'style':'list-style-image:url(images/xsysys-ui/links/bullet1_hover.png)!important;color:#999999;'});
										}
										else {
											$('#client_main_page1').css({'display':'none'});
											$('#client_main_page2').css({'display':'block'});
											$('#clients_main_page_id1').closest('li').attr({'style':'list-style-image:url(images/xsysys-ui/links/bullet1.png)!important;color:#999999;'});
											$('#clients_main_page_id2').closest('li').attr({'style':'list-style-image:url(images/xsysys-ui/links/bullet1_hover.png)!important!;color:#999999;'});
										}
									}
								</script>
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
<script>
	
</script>

