<div class="footer_link_area">
              <div class="footer_link_heading">News<span>letter</span></div>
			  
			  
              <div class="newsletter_field_area">
			  
<script src="https://pj139.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=97f8e1a4349c6ae3acac63fc6c9e9519" type="text/javascript"></script>
<script>
jQuery(document).ready(function(){
	var java = navigator.javaEnabled();
	var resolutionString = screen.width + 'x' + screen.height;
	var pluginString = '';
	if (window.ActiveXObject) {
		var activeXNames = {'AcroPDF.PDF':'Adobe Reader',
			'ShockwaveFlash.ShockwaveFlash':'Flash',
			'QuickTime.QuickTime':'Quick Time',
			'SWCtl':'Shockwave',
			'WMPLayer.OCX':'Windows Media Player',
			'AgControl.AgControl':'Silverlight'};
		var plugin = null;
		for (var activeKey in activeXNames) {
			try {
				plugin = null;
				plugin = new ActiveXObject(activeKey);
			} catch (e) {
				// do nothing, the plugin is not installed
			}
			pluginString += activeXNames[activeKey] + ',';
		}
		var realPlayerNames = ['rmockx.RealPlayer G2 Control',
			'rmocx.RealPlayer G2 Control.1',
			'RealPlayer.RealPlayer(tm) ActiveX Control (32-bit)',
			'RealVideo.RealVideo(tm) ActiveX Control (32-bit)',
			'RealPlayer'];
		for (var index = 0; index < realPlayerNames.length; index++) {
			try {
				plugin = new ActiveXObject(realPlayerNames[index]);
			} catch (e) {
				continue;
			}
			if (plugin) {
				break;
			}
		}
		if (plugin) {
			pluginString += 'RealPlayer,';
		}
	} else {
		for (var i = 0; i < navigator.plugins.length; i++) {
			pluginString += navigator.plugins[i].name + ',';
		}
	}
	pluginString = pluginString.substring(0, pluginString.lastIndexOf(','));
	
	jQuery('.infusion-form').submit(function(){
		jQuery('#screenResolution', this).val(resolutionString);jQuery('#pluginList', this).val(pluginString);jQuery('#javaEnabled', this).val(java);
	});
});
</script>
<form accept-charset="UTF-8" action="https://pj139.infusionsoft.com/app/form/process/2efaf27fbf8d88652634aca2c0bf3895" class="infusion-form" method="POST" name="Sign up for newsletter">
<input type="hidden" value="" name="screenResolution" id="screenResolution" />
<input type="hidden" value="" name="pluginList" id="pluginList" />
<input type="hidden" value="" name="javaEnabled" id="javaEnabled" />
<input name="inf_form_xid" type="hidden" value="2efaf27fbf8d88652634aca2c0bf3895" />
<input name="inf_form_name" type="hidden" value="Sign up for newsletter" />
<input name="infusionsoft_version" type="hidden" value="1.29.8.42" />
<input type="hidden" name="inf-3JwkwyvKbIhPmmg6" class="inf-d2e3e2b6f6946880265856166a29bbf6" />
<p><label for="inf_field_FirstName">First Name *</label><br /><input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" value="" placeholder="Name"/></p>
<p><label for="inf_field_Email">Email *</label><br /><input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" value="" placeholder="Email" /></p>
<img alt="captcha" border="0px" name="captcha" onclick="reloadJcaptcha();" src="https://pj139.infusionsoft.com/Jcaptcha/img.jsp" title="If you can't read the image, click it to get another one." width="100" />
<script type="text/javascript">function reloadJcaptcha() {var now = new Date();if (document.images) {document.images.captcha.src = 'https://pj139.infusionsoft.com/Jcaptcha/img.jsp?reload=' + now}}</script>
<p><label for="captcha.typed">Enter the above code:</label><br />
<input class="infusion-field-input-container" id="captcha.typed" name="captcha.typed" type="text" /></p>
<p><input type="image" src="images/signup_button.png" /></p>
</form>
<style>
.infusion-form { color:#AAA; }
.infusion-form p { padding-bottom:12px; }
.infusion-form input.infusion-field-input-container { border:1px solid #444; color:#DDD; background:#222; padding:4px; }
</style>
              </div>
              <div class="pay_area">
              We Accept
                <div class="pay_icon_box">
                  <div class="pay_icon_img"><a href="#"><img src="images/pay_icon_img1.jpg" alt="" width="35" height="25" border="0"></a></div>
                  <div class="pay_icon_img"><a href="#"><img src="images/pay_icon_img2.jpg" alt="" width="35" height="25" border="0"></a></div>
                  <div class="pay_icon_img"><a href="#"><img src="images/pay_icon_img3.jpg" alt="" width="35" height="25" border="0"></a></div>
                  <div class="pay_icon_img"><a href="#"><img src="images/pay_icon_img4.jpg" alt="" width="35" height="25" border="0"></a></div>
                </div>
              </div>
</div>