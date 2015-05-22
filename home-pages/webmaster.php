<div id="alliances_page_top"></div>
<div class="xsysys-content-block" id="xsysys-content-block">
	<section>
		<h1 class="webmaster-banner">Webmaster</h1>
		<div class="silver-bg">
		<h4 id="result">Send in your feedback or queries</h4>
		<form name="xsysys-feedback" id="xsysys-feedback" class="xsysys-forms" action="feedback.php" method="post" onsubmit="return validateForm()" target="_blank">
			<fieldset>
				<?/*=$thankYou*/?>
				<legend>Enter your details here:</legend>
				<table> 
					<tr>
						<td class="first-column">
							<label for="to">To:</label>
						</td>
						<td class="add_border_right second-column">
							<input tabindex="1" name="recipient" id="recipient" type="text" value="emmanuel@xsysys.com"/>
						</td>
						<td colspan="3" class="lable_title_color1 full-column">
							<strong class="strong-plate">Please rate the <span class="xsysys_style">xsysys</span>.com home page</strong> <br/>
						</td>
					</tr>
					<tr>
						<td class="first-column">
							<label for="name">Name:</label>
						</td>
						<td class="add_border_right second-column">
							<input tabindex="2" name="sender" id="sender" type="text" value="" placeholder="Please enter your name"/>
						</td>
						<td style="width:100px;" class="third-column">
							<label for="content">Content:</label>
						</td>
						<td colspan="2" class="fourth-column">
							<input tabindex="6" id="con_minmin"  type="radio" name="content"/>&nbsp;<input tabindex="7" id="con_min" type="radio" name="content"/>&nbsp;<input tabindex="8" id="con_plusmin"  type="radio" name="content"/>&nbsp;<input tabindex="9" id="con_plus"  type="radio" name="content"/>&nbsp;<input tabindex="10" id="con_plusplus"  type="radio" name="content"/><br/>
							<strong class="radiolabel">--</strong><strong class="radiolabel">-</strong><strong class="radiolabel">+-</strong><strong class="radiolabel">+</strong><strong class="radiolabel">++</strong>
						</td>
					</tr>
					<tr>
						<td class="first-column">
							<label for="email">Email:</label>
						</td>
						<td class="add_border_right second-column">
							<input tabindex="3" type="email" value="" name="senderEmail" placeholder="Please enter your email address"/>
						</td>
						<td style="width:100px;" class="third-column">
							<label for="design">Design:</label>
						</td>
						<td colspan="2" class="fourth-column">
							<input tabindex="11" id="dsgn_minmin"  type="radio" name="design"/>&nbsp;<input tabindex="12" id="dsgn_min" type="radio" name="design"/>&nbsp;<input tabindex="13" id="dsgn_plusmin"  type="radio" name="design"/>&nbsp;<input tabindex="14" id="dsgn_plus"  type="radio" name="design"/>&nbsp;<input tabindex="15" id="dsgn_plusplus"  type="radio" name="design"/><br/>
							<strong class="radiolabel">--</strong><strong class="radiolabel">-</strong><strong class="radiolabel">+-</strong><strong class="radiolabel">+</strong><strong class="radiolabel">++</strong>
						</td>
					</tr>
					<tr>
						<td class="first-column">
							<label for="subject">Subject:</label>
						</td>
						<td class="add_border_right second-column">
							<input tabindex="4" type="text" value="" name="subject" placeholder="Please enter subject"/>
						</td>
						<td style="width:100px;" class="third-column">
							<label for="usability">Usability:</label>
						</td>
						<td colspan="2" class="fourth-column">
							<input tabindex="16" id="usb_minmin"  type="radio" name="usability"/>&nbsp;<input tabindex="17" id="usb_min"   type="radio" name="usability"/>&nbsp;<input tabindex="18" id="usb_plusmin"  type="radio" name="usability"/>&nbsp;<input tabindex="19" id="usb_plus"  type="radio" name="usability"/>&nbsp;<input tabindex="20" id="usb_plusplus"  type="radio" name="usability"/><br/>
							<strong class="radiolabel">--</strong><strong class="radiolabel">-</strong><strong class="radiolabel">+-</strong><strong class="radiolabel">+</strong><strong class="radiolabel">++</strong>
						</td>
					</tr>
					<tr>
						<td colspan="2" rowspan="4" class="add_border_right full-column" style="border-bottom:1px solid #d1d1d1;">
							<label for="remarks">Write your feedback here:</label><br/>
							<textarea tabindex="5" name="message" style="height:258px;" rows="8" cols="20" placeholder="input your comments / queries here."></textarea>
						</td>
						<td style="width:100px;" class="third-column">
							<label for="overall">Overall:</label>
						</td>
						<td colspan="2" class="fourth-column">
							<input tabindex="21" id="ovral_minmin"  type="radio" name="overall"/>&nbsp;<input tabindex="22" id="ovral_min" type="radio" name="overall"/>&nbsp;<input tabindex="23" id="ovral_plusmin"  type="radio" name="overall"/>&nbsp;<input tabindex="24" id="ovral_plus"  type="radio" name="overall"/>&nbsp;<input tabindex="25" id="ovral_plusplus"  type="radio" name="overall"/><br/>
							<strong class="radiolabel">--</strong><strong class="radiolabel">-</strong><strong class="radiolabel">+-</strong><strong class="radiolabel">+</strong><strong class="radiolabel">++</strong>
						</td>
					</tr>
					<tr>
						<td colspan="3" class="lable_title_color2  full-column">
							<strong class="strong-plate">Please also tell us...</strong>
						</td>
					</tr>
					<tr>
						<td colspan="3" class="full-column add-steel">
							<label for="expectation">How well does this web site meet your expectations?</label><br/>
							<input tabindex="26" id="exp_minmin"  type="radio" name="expectation"/>&nbsp;<input tabindex="27" id="exp_min"   type="radio" name="expectation"/>&nbsp;<input tabindex="28" id="exp_plusmin"  type="radio" name="expectation"/>&nbsp;<input tabindex="29" id="exp_plus"  type="radio" name="expectation"/>&nbsp;<input tabindex="30" id="exp_plusplus"  type="radio" name="expectation"/><br/>
							<strong class="radiolabel">--</strong><strong class="radiolabel">-</strong><strong class="radiolabel">+-</strong><strong class="radiolabel">+</strong><strong class="radiolabel">++</strong>
						</td>
					</tr>
					<tr>
						<td colspan="3" style="border-bottom:1px solid #d1d1d1;" class="full-column add-steel">
							<label for="improvement">What change could we make, if any, to improve your experience?</label><br/>
							<textarea tabindex="31" name="improveMessage" cols="5" rows="2" style="width:100%;"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2"></td>
						<td colspan="3" class="button_sytle full-column">
							<input tabindex="32" type="submit" value="Submit" name="emman" class="btn btn-success"/>&nbsp;&nbsp;
							<input tabindex="33" type="button" value="cancel" class="btn btn-primary"/>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>	
		<script>
			function validateForm(){
				//event.preventDefault();
				var emman= document.forms["xsysys-feedback"]["emman"];
				var recipient = document.forms["xsysys-feedback"]["recipient"].value;
				var sender = document.forms["xsysys-feedback"]["sender"].value;
				var senderemail = document.forms["xsysys-feedback"]["senderEmail"].value;
				var subject = document.forms["xsysys-feedback"]["subject"].value;
				var message = document.forms["xsysys-feedback"]["message"].value;
				var content = document.forms["xsysys-feedback"]["content"].value;
				var design = document.forms["xsysys-feedback"]["design"].value;
				var usability = document.forms["xsysys-feedback"]["usability"].value;
				var overall = document.forms["xsysys-feedback"]["overall"].value;
				var expectation = document.forms["xsysys-feedback"]["expectation"].value;
				var improvemessage = document.forms["xsysys-feedback"]["improveMessage"].value;
				
					if (recipient == null || recipient == "") {
						alert("Please fill in the recipient's email id ");
						return false;
					}
					if (sender == null || sender == "") {
						alert("Please fill in your Name");
						return false;
					}
					if (senderemail == null || senderemail == "") {
						alert("Please fill in your mail id");
						return false;
					}
					if (subject == null || subject == "") {
						alert("Please fill in the subject");
						return false;
					}
					if (message == null || message == "") {
						alert("Please fill in your Message");
						return false;
					}
					if (content == null || content == "") {
						alert("Please rate the content");
						return false;
					}
					if (design == null || design == "") {
						alert("Please rate the design");
						return false;
					}
					if (usability == null || usability == "") {
						alert("Please rate the usability");
						return false;
					}
					if (overall == null || overall == "") {
						alert("Please rate overall");
						return false;
					}
					if (expectation == null || expectation == "") {
						alert("Please rate how does our site met your expectations so far!");
						return false;
					}
					if (improvemessage == null || improvemessage == "") {
						alert("Please tell us how we can imporve our xsysys site.");
						return false;
					}
				/*$.ajax({
					type:'post',
					url:'feedback.php',
					data:$('#xsysys-feedback').serialize()
					//data: recipient, sender, senderemail, subject, message, content, design, usability, overall, expectation, improvemessage, emman
				}).done(function(data, status){
					$("#result").html(data+"  Status is "+status);
				});*/
				//return false;
			}
		</script>
		</div>
		<strong class="inspire">inspiring human endeavour</strong>
	</section>
	<!--a class="back-button" href="javascript:window.location.href='aboutus.php';"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Back</a-->
	<a id="back-btn-to-home" class="back-button" onclick="loadHome()"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Back</a>
</div>
		
<script>
	/* $(function(){
        $("#xsysys-feedback").submit(function(event){
			//event.preventDefault();
            var xmlhttp;
			if(window.XMLHttpRequest){
				xmlhttp= new XMLHttpRequest();
			}
			else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					document.getElementById('response').innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET", "feedback.php", true);
			xmlhttp.send();
        });
    });*/
	
	$(function () {
    var frm = $('#xsysys-feedback');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                document.getElementById('result').innerHTML = data;
            }
        });
        ev.preventDefault();
    });
	});
</script>		

