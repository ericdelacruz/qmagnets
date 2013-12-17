<?php include("admin/includes/include.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<?php include("includes/common_script.php"); ?>
<?php
if(file_exists("includes/metatags/meta-".basename($_SERVER['PHP_SELF']))) {
	include("includes/metatags/meta-".basename($_SERVER['PHP_SELF'])); 
} else {
	// ONCE META TAG NOT FOUND USE THE DEFAULT TITLE TAG
	echo '<title>Qmagnets</title>';
}
?>
</head>
<body>
<div id="main_area">
  <div class="main"> 
    <!--===================start header part===================-->
    <header>
      <div class="header_area">
        <?php include("includes/currency.php");  ?>
        <div class="nav_bg"> 
          <!--====================start nav part====================-->
          <?php include("includes/menu.php");  ?>
          <!--====================start nav part====================-->
           <?php include("includes/search.php");?>
        </div>
         <?php // include("includes/banner.php");  ?>
      </div>
    </header>
    <!--===================end header part===================--> 
    <!--===================Start section part===================-->
    <section>
    <div class="body_area">
         <div class="body_box">
          <div class="body_left_area">
          <div class="body_text_area">
            <div class="body_heading_bg">
              <h1>Natural Pain Relief</h1>
            </div>
             <!-- Start About body text -->
            <div class="about_body_text_box">
              <p class="contentWrapper">
                It is a tragedy that the modern lifestyles we have adopted in developed countries is so detrimental to our health. Although there have been many surgical and pharmacological advances in decades past, the truth is there have been <a href="http://qmagnets.com/blog/magnetic-therapy-2/new-treatments-for-chronic-pain-have-not-been-forthcoming-but-q-magnets-are-providing-answers-for-many.html" target="_blank">few advances in the treatment of chronic pain in the last 20 years</a> as Turk recently described in the Lancet. Still there is no silver bullet and it is the responsibility of every individual to take care of and invest in their own health. They just need to know how and why and where they can get the best return on their efforts.
              </p>
              <p class="contentWrapper">
                Q magnets are one of the best value for money, simple and effective methods to provide natural pain relief for chronic and persistent pain sufferers.
              </p>
              <p class="contentWrapper">
                The following is an excerpt from the ebook, Natural Pain Relief. If you haven't yet seen the book, simply enter your first name and email address in the box below, click <strong>"Send me my free ebook"</strong> and you'll be able to download it within a few minutes!
              </p>
              <div class="contentWrapper">
                <span class="strongUnder">Note: We hate spam as much as you do! We will NEVER abuse, share, sell or rent your details.</span>
				
				
				<style>

				.painreliefform { width:300px; padding:20px; border:3px solid #151515; background:#1C1C1C; margin:20px auto; }
				.painreliefform .fields { padding:0px; margin:0px 0px 5px; }
				.painreliefform .fields label { width:65px; display:block; float:left; line-height:28px; }
				.painreliefform .fields select,.painreliefform .fields input,.painreliefform .fields textarea { width:200px; }
				.painreliefform .fields textarea { background:#222; border:1px solid #2f2f2f; width:200px; padding:5px; color:#999; }
				.painreliefform .fields select { background:#222222; color:#888; border:1px solid #2f2f2f; padding:2px; vertical-align:middle;  }
				.painreliefform .fields select:focus,.painreliefform .fields input:focus { background:#333 }
				.painreliefform .infusion-captcha { text-align:center; padding-top:15px }
				.painreliefform .infusion-submit { text-align:center; padding-top:15px }
				
				</style>
				
				
				
				<div class="painreliefform">
				
<form accept-charset="UTF-8" action="https://pj139.infusionsoft.com/app/form/process/8d2f4f1581df16a75b5f76ada9745db0" class="infusion-form" method="POST">
    <input name="inf_form_xid" type="hidden" value="8d2f4f1581df16a75b5f76ada9745db0" />
    <input name="inf_form_name" type="hidden" value="Indicate interest" />
    <input name="infusionsoft_version" type="hidden" value="1.29.8.45" />
	
	<p class="fields"><label for="inf_field_FirstName">First Name * </label> <input required="" class="infusion-field-input-container" type="text" id="inf_field_FirstName" name="inf_field_FirstName" /></p>
	<p class="fields"><label for="inf_field_Email">Email * </label> <input required="" class="infusion-field-input-container" type="text" id="inf_field_Email" name="inf_field_Email" /></p>

    <div class="infusion-captcha">
        <div>
            <img alt="captcha" border="0px" name="captcha" onclick="reloadJcaptcha();" src="https://pj139.infusionsoft.com/Jcaptcha/img.jsp" title="If you can't read the image, click it to get another one." />
            <script type="text/javascript">function reloadJcaptcha() {var now = new Date();if (document.images) {document.images.captcha.src = 'https://pj139.infusionsoft.com/Jcaptcha/img.jsp?reload=' + now}}</script>
        </div>
        <div>
            <label for="captcha.typed">Enter the above code:</label>
        </div>
        <div>
            <input required="" class="infusion-field-input-container" id="captcha.typed" name="captcha.typed" type="text" />
        </div>
    </div>
    <div class="infusion-submit">
        <input type="submit" value="Sign Me Up" />
    </div>
	
</form>
				
					<!--form name="form1" method="post" action="https://www.mcssl.com/app/contactsave.asp">
					<input name="merchantid" type="hidden" id="merchantid" value="96291" />
					<input name="ARThankyouURL" type="hidden" id="ARThankyouURL" value="http://www.qmagnets.com/thankyou.php" />
					<input name="copyarresponse" type="hidden" id="copyarresponse" value="1" />
					<input name="custom" type="hidden" id="custom" value="0" />
					<input name="defaultar" type="hidden" id="defaultar" value="220099" />
					<input name="allowmulti" type="hidden" id="allowmulti" value="0" />
					<input name="visiblefields" type="hidden" id="visiblefields" value="Name,Email1" /> 
					<input name="requiredfields" type="hidden" id="requiredfields" value="Email1" />
					<div class="formwrappers">
					<div><label>Name: </label><input name="Name" type="text" size="40" class="news_textfield" required="" /></div>
					<div><label>Email: </label><input name="Email1" type="text" size="40" class="news_textfield" required="" /></div>
					<div style="padding-left:80px"><input type="Submit" name="cmdSubmit" value="Submit" /></div>
					</div>
					</form-->
					<div class="clearfix"></div>
				</div>
				

              </div>
              <p class="contentWrapper">
                Our thirst for convenience is one of the main contributors to our current health crisis. A crisis that is made up of increasing rates of obesity, diabetes, dementia and chronic health conditions including pain. Even the incidence of stroke, heart disease, arthritis, osteoporosis and cancer are much higher than they need be.
              </p>
              <p class="contentWrapper">
                Social and technological changes such as stranger danger, city living, computers and computer games have reduced activity levels and contributed greatly to childhood obesity which if sustained will have a considerable impact on pain. As adults, our take up of passive transport, particularly the motor car, convenience tools such as remote controls and portable devices to name a few have drastically reduced our need for physical exertion. Our busy work schedules and lifestyles and constant cries to attend to the urgent, often crowds our life so we neglect important activities such as family, rest and exercise.
              </p>
              <p class="contentWrapper">
                The increased value of a mother’s time has given rise to packaged and highly processed foods, takeaway fast foods and extended food storage times as food marketers exploit the desire to avoid time intensive chores such as food preparation with fresh produce. All of which have contributed to pain as we shall soon see. This in turn compromises the quality of the food we consume so our body does not receive the nutrients it requires for high performance and to rebuild and repair growing or damaged tissue.
              </p>
              <p class="contentWrapper">
                It is going to take a change of thinking, actions and habits if we are going to invest in our health and reduce our risk of contracting chronic conditions such as severe joint pain. Take courage however, as you will soon learn, <span class="strong">you don’t pay the price of discipline or perceived sacrifice for good health, you enjoy the
                benefits.</span>
              </p>
              <p class="contentWrapper">
                1. NATURAL PAIN RELIEF:
                <div id="contentList"> 
                  <div id="listTitle">
                    For the purpose of this article and simplicity, we have separated the causes of pain into two main categories:
                  </div>
                  <ol>
                    <li><strong>Injury</strong>, such as…
                      <ol type="a" class="listIndent">
                        <li>Lower back strain</li>
                        <li>Whiplash</li>
                        <li>Tennis Elbow</li>
                      </ol>
                    <li><strong>Dis-ease</strong>, conditions such as…
                      <ol type="a" class="listIndent">
                        <li>Arthritis</li>
                        <li>Degeneration</li>
                       <li>Fibromyalgia</li>
                      </ol>
                    </li>
                  </ol>
                </div>
              </p>
              <p class="contentWrapper">
                Injuries generally occur after an impact, after a sprain or a strain on a joint or muscle group. The resultant structural damage causes inflammation and nerve irritation which is a source of pain. Such injuries generally respond best to assessment, accurate diagnosis and treatment from a health professional such as a physiotherapist. Response to quality treatment should be noticed immediately.
              </p>
              <p class="contentWrapper">
                Dis-ease is a description for a condition, a disruption or imbalance in our natural state, that of ease. These conditions are typically a result of a combination of family history or genetics, early childhood and most importantly lifestyle factors such as diet, stress and activity levels. As such, pain stemming from dis-ease is best treated with professional advice and lifestyle change. Therapy, be it drug, physiotherapy or massage can provide relief from pain during the transition to wellbeing. However, the results from lifestyle change may take many weeks or even months depending on the nature and severity of the condition.
              </p>
              <p class="contentWrapper">
                Imagine…It’s night time, everyone in the family is peacefully sleeping. You are suddenly awakened by the shriek of a smoke detector alarm, what do you do next? Turn off the alarm and go back to sleep? NO, you investigate what set it off, locate the fire and put it out. Then why do we turn off our bodies alarm signals without investigating the triggers?
              </p>
              <p class="contentWrapper">
                For instance joint pain and arthritis are commonly treated with antiinflammatory drugs, but doesn’t it make more sense to investigate the cause? Is your diet and lifestyle producing inflammatory chemicals that attack your tissues? Specific corrective advice and where appropriate, nutritional supplements can treat the cause, not only fixing the painful symptoms but strengthening your whole immune system. Arthritis, joint pain and tissue damage are not simply unavoidable symptoms of aging. They are signals from our body that something is not right, we are out of balance. There are many options available to halt the progression of these symptoms that you will soon discover as you read on.
              </p>
              <p class="contentWrapper">
                So I hope that by the time you have finished reading this, you can see pain as a friend and to recognise it as an important messenger. A message from your body, that treatment is required and/or lifestyle changes are necessary to address the cause. You will also come to realise that in addressing the causes of your condition, you will likely be minimising the risks of developing all of the major lifestyle diseases such as diabetes, heart attack, stroke, cancer and dementia.
              </p>
              <p class="contentWrapper">
                In most cases, no one avenue of treatment or therapy will fully resolve your condition; unfortunately there is no silver bullet. However, used in combination and under professional supervision, one has the best chance of a successful healthy outcome. Pain is mostly an alarm, it’s your body’s natural way of telling you there is dysfunction. There are some very effective drugs designed to turn off your alarms (pain), but is this the best course of action for your long term health?
              </p>
              <p class="contentWrapper">
                Especially if the drug needs to be taken indefinitely. All drugs have side effects, with the recent withdrawal of the popular drug Vioxx® and concerns with Celebrex® due to increased risk of cardiovascular disease now is the time more than ever to start putting out the fire and not just turn off the alarm, time to address the cause and not just apply a bandaid.
              </p>
              <p class="contentWrapper">
                Even the ibuprofen class of non-steroid anti-inflammatory drugs (NSAID) sold under various trademarks such as Nurofen, Brufen, Actfree and Heron Blue have had their fair share of adverse publicity due to the potential damage they cause to the digestive system. Recent research suggested as many as 1 in 5 Australians could be vulnerable to side effects, including heart trouble, ulcers or asthma attacks in asthma sufferers if they take the drug.
              </p>
              <p class="contentWrapper">
                We can will investigate how these drugs work and the problems they cause. We will also investigate the many healthy choices and natural remedies for preventing and treating arthritis and joint pain. Prescription pain killers, which may provide effective short term pain relief mainly serve to turn off the alarm without addressing the root cause of the pain.
              </p>
              <p class="contentWrapper">
                 <p>“Two roads diverged in a wood</p>
                 <p>And I took the one less traveled by</p>
                 <p>And that has made all the difference.”</p>
                 <p>Robert Frost</p>
              </p>
              <p class="contentWrapper">
                 Much has been written about Robert Frost’s poem, especially made famous by psychiatrist M. Scott Peck’s book “The Road Less Traveled”. With regard to our health, we live in a culture where too many people want the easy option. To just take a pill and have all their problems solved, but clearly the road less traveled, even though it requires discipline, work and sacrifice is the best path. This path is made easier through treatment, education, accountability and motivation.
              </p>
              <p class="contentWrapper">
                 <span class="strong">Remember, the pain of discipline or sacrifice is always easier to bear than the pain of regret.</span> Can you imagine yourself saying you would prefer to live with the realities of Type II Diabetes which may include daily insulin injections, severe nerve pain, blindness, limb amputation and a possible early death all because we wanted to live an undisciplined, so-called easy life with little or no exercise and a diet that consisted mostly of junk food and soft drink with very little fresh produce? Surely if one was educated on the consequences our eating and exercise habits has on our health, the pain of regret would be greatest.
              </p>
              <p class="contentWrapper">
                 Constantly remind yourself, you don’t pay the price for good health, you enjoy the benefits. The benefits of increased energy to spend time with your children or grand children, less sickness and disease, greater confidence and slim sexy body. Always count your blessings, focus on what you have or are going to have and not what you think you are missing out on.
              </p>
              <p class="contentWrapper">
                Q magnets are a great adjunct to help provide natural pain relief.
              </p>
            </div>
             <!-- End About body text -->
            <div class="left_bottom_img"><img src="images/body_left_bottom_img.jpg" alt="" border="0"></div>
            </div>
          </div>
          
          <div class="body_right_area">
          <?php include("includes/yourpain.php");  ?>
          <?php include("includes/blog.php");      ?>
          </div>
        </div>
        </div>
    </section>
    <!--===================end section part===================--> 
    <!--===================Start footer part===================-->
    <footer>
      <?php include("includes/footer.php"); ?>
    </footer>
    <!--===================end footer part===================--> 
  </div>
</div>
</body>
</html>
