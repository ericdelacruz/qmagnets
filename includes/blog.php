
<div class="body_right_feild_area">
	<div class="body_right_blog_heading_bg">
		<div class="heading_text">Latest Blog Posts</div>
		<div class="blog_view"><a href="http://qmagnets.com/blog/">View All</a></div>
	</div>
	
	<div class="right_box_blog_body_bg">
	
		<?php
			$content = file_get_contents("http://qmagnets.com/blog/latest");
			echo $content;
		?>
		
		
	</div>

	<div class="body_right_bottom_img"><img src="images/body_right_bottom_img.jpg" alt="" width="324" height="36" border="0" /></div>
</div>

<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Neuromagnetics"  data-widget-id="410974762848878592">Tweets by @Neuromagnetics</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

