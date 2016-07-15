<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8" />
    <title>Comcast On-boarding portal</title>
    <!-- The stylesheet -->
    <link rel="stylesheet" href="dashboard.css"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
	<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'>	
    </script>
    <script src="dashboardOn.js"></script>
</head>
<body>
	
<div id = "container">
  <div class = "header">
    <h1> On-boarding Portal    </h1>
  </div>
  <form>
    <div class = "pad-header"></div>
    <div class = "pad">
      <div class = "page">
        <fieldset class = "list">
          <ul class = "pad-container">
            <li>
              <h2 class = "top"><span class = "exp-complete complete"></span><a href="#" class="toggle_exp"><span class = "exp-icon"></span>Funding</a></h2>
              <ul class = "exp">
                <li>
                  <input name="exp1" type="checkbox" id="exp1" />
                  <label for = "exp1">Secure funding from project owner</label>
                  <span class="tt-caution hover-tt-right" data-hover="* Send an email to Kristin@comcast.com">(Note)</span>
                  <span class = "exp1-na">N/A</span>
                  <div class = "exp1-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp1-comment-textbox" maxlength="250"></textarea>
					<span class="exp1-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                <li>
                  <input id="exp2" name="exp2" type="checkbox" />
                  <label for = "exp2">Beeline</label>
                  <label class="tt-default hover-tt-left" data-hover="Request for a picture from employee">(Note)</label>
                  <span class = "exp2-na">N/A</span>
                  <div class = "exp2-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp2-comment-textbox" maxlength="250"></textarea>
					<span class="exp2-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                <li>
                  <input id="exp3" name="exp3" type="checkbox" />
                  <label for = "exp3">PO</label>
          <span class="tt-caution hover-tt-right" data-hover="* Some text goes here">(Note)</span>
                  <span class = "exp3-na">N/A</span>
                  <div class = "exp3-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp3-comment-textbox" maxlength="250"></textarea>
					<span class="exp3-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                <li>
                  <input id="exp4" name="exp4" type="checkbox" />
                  <label for = "exp4">Salesforce access (if staff aug)</label>
                  <label class="tt-default hover-tt-left" data-hover="Some hint goes here">(Note)</label>
                  <span class = "exp4-na">N/A</span>
                  <div class = "exp4-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp4-comment-textbox" maxlength="250"></textarea>
					<span class="exp4-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
              </ul>
              <h2><span class = "content-complete complete"></span><a href="#" class="toggle_content"><span class = "content-icon"></span>Export Control</a></h2>
              <ul class = "content">
                <li>
                  <input id="exp5" name="content1" type="checkbox" />
                  <label for = "exp5">Approvals from Legal</label>
                  <span class = "exp5-na">N/A</span>
                  <div class = "exp5-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp5-comment-textbox" maxlength="250"></textarea>
					<span class="exp5-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
               </ul>
              <h2><span class = "brand-complete complete"></span><a href="#" class="toggle_brand"><span class = "brand-icon"></span>Access</a></h2>
              <ul class = "brand">
                <li>
                  <input id="exp6" name="brand1" type="checkbox" />
                  <label for = "exp6">IDM (NTID)</label>
                  <span class = "exp6-na">N/A</span>
                  <div class = "exp6-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp6-comment-textbox" maxlength="250"></textarea>
					<span class="exp6-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                <li>
                  <input id="exp7" name="brand2" type="checkbox" />
                  <label for = "exp7">VPN</label>
                  <span class = "exp7-na">N/A</span>
                  <div class = "exp7-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp7-comment-textbox" maxlength="250"></textarea>
					<span class="exp7-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
               </ul>
              <h2><span class = "seo-complete complete"></span><a href="#" class="toggle_seo"><span class = "seo-icon"></span>Security</a></h2>
              <ul class ="seo">
                <li>
                  <input id="exp8" name="seo1" type="checkbox" />
                  <label for = "exp8">Photo</label>
                  <span class = "exp8-na">N/A</span>
                  <div class = "exp8-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp8-comment-textbox" maxlength="250"></textarea>
					<span class="exp8-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                <li>
                  <input id="exp9" name="seo2" type="checkbox" />
                  <label for = "exp9">Badge</label>
                  <span class = "exp9-na">N/A</span>
                  <div class = "exp9-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp9-comment-textbox" maxlength="250"></textarea>
					<span class="exp9-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                
              </ul>
              <h2><span class = "val-complete complete"></span><a href="#" class="toggle_val"><span class = "val-icon"></span>HR Documentation</a></h2>
              <ul class = "val">
                <li>
                  <input id="exp10" name="val1" type="checkbox" />
                  <label for = "exp10">I9</label>
                  <span class = "exp10-na">N/A</span>
                  <div class = "exp10-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp10-comment-textbox" maxlength="250"></textarea>
					<span class="exp10-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                <li>
                  <input id="exp11" name="val2" type="checkbox" />
                  <label for = "exp11">Visa</label>
                  <span class = "exp11-na">N/A</span>
                  <div class = "exp11-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box"> <label>Comments:</label> <textarea></textarea> </div>
                  </div>
                </li>
				<li>
                  <input id="exp12" name="val3" type="checkbox" />
                  <label for = "exp12">Passport</label>
                  <span class = "exp12-na">N/A</span>
                  <div class = "exp12-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box"> <label>Comments:</label> <textarea></textarea> </div>
                  </div>
                </li>
                <li>
                  <input id="exp13" name="val4" type="checkbox" />
                  <label for = "exp13">W-2</label>
                  <span class = "exp13-na">N/A</span>
                  <div class = "exp13-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box"> <label>Comments:</label> <textarea></textarea> </div>
                  </div>
                </li>
                
              </ul>
              <h2><span class = "testing-complete complete"></span><a href="#" class="toggle_testing"><span class = "testing-icon"></span>Cubicle</a></h2>
              <ul class = "testing">
                <li>
                  <input id="exp14" name="testing1" type="checkbox" />
                  <label for = "exp14">seat assignment</label>
                  <span class = "exp14-na">N/A</span>
                  <div class = "exp14-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="testing1-comment-textbox" maxlength="250"></textarea>
					<span class="testing1-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                </ul>
              <h2><span class = "rwd-complete complete"></span><a href="#" class="toggle_rwd"><span class = "rwd-icon"></span>Hardware</a></h2>
              <ul class = "rwd">
                <li>
                  <input id="exp15" name="rwd1" type="checkbox" />
                  <label for = "exp15">Laptop with monitor</label>
                  <span class = "exp15-na">N/A</span>
                  <div class = "exp15-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp15-comment-textbox" maxlength="250"></textarea>
					<span class="exp15-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                <li>
                  <input id="exp16" name="rwd2" type="checkbox" />
                  <label for = "exp16">dock</label>
                  <span class = "exp16-na">N/A</span>
                  <div class = "exp16-comment">
                    <span class = "exp16-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp16-comment-textbox" maxlength="250"></textarea>
					<span class="exp16-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                  <li>
                  <input id="exp17" name="rwd3" type="checkbox" />
                  <label for = "exp17">keyboard</label>
                  <span class = "exp17-na">N/A</span>
                  <div class = "exp17-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp17-comment-textbox" maxlength="250"></textarea>
					<span class="exp17-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                 <li>
                  <input id="exp18" name="rwd4" type="checkbox" />
                  <label for = "exp18">mouse</label>
                  <span class = "exp18-na">N/A</span>
                  <div class = "exp18-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp18-comment-textbox" maxlength="250"></textarea>
					<span class="exp18-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                 <li>
                  <input id="exp19" name="rwd5" type="checkbox" />
                  <label for = "exp19">desk phone</label>
                  <span class = "exp19-na">N/A</span>
                  <div class = "exp19-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp19-comment-textbox" maxlength="250"></textarea>
					<span class="exp19-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
    			<li>
                  <input id="exp20" name="rwd6" type="checkbox" />
                  <label for = "exp20">Headset</label>
                  <span class = "exp20-na">N/A</span>
                  <div class = "exp20-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp20-comment-textbox" maxlength="250"></textarea>
					<span class="exp20-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
              </ul>
              <h2><span class = "perf-complete complete"></span><a href="#" class="toggle_perf"><span class = "perf-icon"></span>Organization</a></h2>
              <ul class = "perf">
                <li>
                  <input id="exp21" name="perf1" type="checkbox" />
                  <label for="exp21">DLS</label>
                  <span class = "exp21-na">N/A</span>
                  <div class = "exp21-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp21-comment-textbox" maxlength="250"></textarea>
					<span class="exp21-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                <li>
                  <input id="exp22" name="perf2" type="checkbox" />
                  <label for="exp22">Org charts</label>
                  <span class = "exp22-na">N/A</span>
                  <div class = "exp22-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp22-comment-textbox" maxlength="250"></textarea>
					<span class="exp22-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
 			     <li>
                  <input id="exp23" name="perf3" type="checkbox" />
                  <label for="exp23">Send out intros</label>
                  <span class = "exp23-na">N/A</span>
                  <div class = "exp23-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp23-comment-textbox" maxlength="250"></textarea>
					<span class="exp23-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                <li>
                  <input id="exp24" name="perf4" type="checkbox" />
                  <label for="exp24">Capacity Tool</label>
                  <span class = "exp24-na">N/A</span>
                  <div class = "exp24-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="exp24-comment-textbox" maxlength="250"></textarea>
					<span class="exp24-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
              </ul>
 <!--             <h2><span class = "worst-complete complete"></span><a href="#" class="toggle_worst"><span class = "worst-icon"></span>Contractor Related</a></h2>
              <ul class = "worst">
                <li>
                  <input id="worst1" name="worst1" type="checkbox" />
                  <label for="worst1">Task 1</label>
                  <span class = "worst1-na">N/A</span>
                  <div class = "worst1-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="worst1-comment-textbox" maxlength="250"></textarea>
					<span class="worst1-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                <li>
                  <input id="worst2" name="worst2" type="checkbox" />
                  <label for="worst2">Task 2</label>
                  <span class = "worst2-na">N/A</span>
                  <div class = "worst2-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="worst2-comment-textbox" maxlength="250"></textarea>
					<span class="worst2-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
              </ul>
              <h2><span class = "forms-complete complete"></span><a href="#" class="toggle_forms"><span class = "forms-icon"></span>Comcast Employee</a></h2>
              <ul class = "forms">
                <li>
                  <input id="forms1" name="forms1" type="checkbox" />
                  <label for="forms1">Task 1</label>
                  <span class = "forms1-na">N/A</span>
                  <div class = "forms1-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="forms1-comment-textbox" maxlength="250"></textarea>
					<span class="forms1-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                <li>
                  <input id="forms2" name="forms2" type="checkbox" />
                  <label for="forms2">Task 2</label>
                <span class = "forms2-na">N/A</span></li>
              </ul>
              <h2><span class = "contact-complete complete"></span><a href="#" class="toggle_contact"><span class = "contact-icon"></span>Domain Related</a></h2>
              <ul class = "contact">
                <li>
                  <input id="contact1" name="contact1" type="checkbox" />
                  <label for="contact1">Task 1</label>
                  <span class = "contact1-na">N/A</span>
                  <div class = "contact1-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="contact1-comment-textbox" maxlength="250"></textarea>
					<span class="contact1-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
                <li>
                  <input id="contact2" name="contact2" type="checkbox" />
                  <label for="contact2">Task 2</label>
                  <span class = "contact2-na">N/A</span>
                  <div class = "contact2-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="contact2-comment-textbox" maxlength="250"></textarea>
					<span class="contact2-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
              </ul>
              <h2><span class = "error-complete complete"></span><a href="#" class="toggle_error"><span class = "error-icon"></span>Error Messages</a></h2>
              <ul class = "error">
                <li>
                  <input id="error1" name="error1" type="checkbox" />
                  <label for = "error1">T1</label>
                  <span class = "error1-na">N/A</span>
                  <div class = "error1-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="error1-comment-textbox" maxlength="250"></textarea>
					<span class="error1-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
			 <li>
			   <input id="error2" name="error2" type="checkbox" />
			   <label for = "error2">T2</label>
			   <span class = "error2-na">N/A</span>
			   <div class = "error2-comment">
			     <span class = "icon-comment"></span>
			     <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="error2-comment-textbox" maxlength="250"></textarea>
					<span class="error2-comment-characterLeft">250 Characters Max</span>
				</div>
			   </div>
			 </li>
                <li>
                  <input id="error3" name="error5" type="checkbox" />
                  <label for = "error3">T3</label>
                  <span class = "error3-na">N/A</span>
                  <div class = "error3-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="error3-comment-textbox" maxlength="250"></textarea>
					<span class="error3-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
              </ul>
              <h2><span class = "prod-complete complete"></span><a href="#" class="toggle_prod"><span class = "prod-icon"></span>Miscellaneous</a></h2>
              <ul class = "prod">
                <li>
                  <input id="prod1" name="prod1" type="checkbox" />
                  <label for = "prod1">Task 1</label>
                  <span class = "prod1-na">N/A</span>
                  <div class = "prod1-comment">
                    <span class = "icon-comment"></span>
                    <div class = "comment-box">
					<label>Comments:</label>
					<textarea class="prod1-comment-textbox" maxlength="250"></textarea>
					<span class="prod1-comment-characterLeft">250 Characters Max</span>
				</div>
                  </div>
                </li>
              </ul>
            </li>-->
          </ul>
        </fieldset>
      </div>
    </div>
  </form>
  <div class = "footer">
    <a class="pure-button reset" href="#">Reset</a>
    <div class = "ready"></div>
    <div class="progressbar-container">
      <div class="progressbar-bar"></div>
      <div class="progressbar-label"></div>
    </div>
  </div>
</div>
<div id="fade" class="black_overlay"></div>
</body>

</html