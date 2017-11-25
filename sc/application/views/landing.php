<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="intro" class="intro">
    <div class="bg-image overlay-dark dark-bg bg-fixed" style="max-height:91px;">
        <div class="js-fullscreen-height container"></div>
    </div>
</section>
<section class="ptb ptb-sm-80">
	<div class="container">
	    <hr />
		<form id="info_form" name="info_form" autocomplete="on" method="POST">
			<div class="panel-group checkout" id="accordion in">
				<div class="panel panel-default">
					<div class="panel-heading heading-iconed" align="center">
						<h4 class="panel-title">Please Enter Your Information:</h4>
						</div>
						<div id="collapseOne" class="panel-collapse">
							<div class="panel-body">							
							   <div class="row">
									<div class="col-md-6">
										 <div class="form-group">
											  <input type="text" name="fname" id="fname" value="" placeholder="First Name" class="form-control field validate[required]">
										 </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="lname" id="lname" value="" placeholder="Last Name" class="form-control field validate[required]">
										</div>
									</div>
								</div>
								<div class="col-md-4">
							        <div class="form-group">
							           	<input type="text" placeholder="Email Address" id="email" name="email" class="form-control validate[required]" />
							        </div>
							    </div>
								<div class="col-md-4">
									<div class="form-group">
										<input type="tel" maxlength="10" name="phone" id="phone" value="" placeholder="Phone" class="form-control field validate[required]" >
									</div>
								</div>
								<div class="col-md-4">
							        <div class="form-group">
							           	<input type="text" placeholder="Home square footage" id="footage" name="footage" class="form-control validate[required]" />
							        </div>
							    </div>
								<div class="form-group">
									<input type="text" name="address" id="address" value="" placeholder="Address" class="form-control field validate[required]">
						   		</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" name="city" id="city" value="" placeholder="City" class="form-control field validate[required]">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<select name="state" id="state" class="form-control field validate[required]" >
												<option value="">Select State</option>
												<option value="AL">Alabama (AL)</option>
												<option value="AK">Alaska (AK)</option>
												<option value="AZ">Arizona (AZ)</option>
												<option value="AR">Arkansas (AR)</option>
												<option value="CA">California (CA)</option>
												<option value="CO">Colorado (CO)</option>
												<option value="CT">Connecticut (CT)</option>
												<option value="DE">Delaware (DE)</option>
												<option value="DC">District of Columbia (DC)</option>
												<option value="FL">Florida (FL)</option>
												<option value="GA">Georgia (GA)</option>
												<option value="HI">Hawaii (HI)</option>
												<option value="ID">Idaho (ID)</option>
												<option value="IL">Illinois (IL)</option>
												<option value="IN">Indiana (IN)</option>
												<option value="IA">Iowa (IA)</option>
												<option value="KS">Kansas (KS)</option>
												<option value="KY">Kentucky (KY)</option>
												<option value="LA">Louisiana (LA)</option>
												<option value="ME">Maine (ME)</option>
												<option value="MD">Maryland (MD)</option>
												<option value="MA">Massachusetts (MA)</option>
												<option value="MI">Michigan (MI)</option>
												<option value="MN">Minnesota (MN)</option>
												<option value="MS">Mississippi (MS)</option>
												<option value="MO">Missouri (MO)</option>
												<option value="MT">Montana (MT)</option>
												<option value="NE">Nebraska (NE)</option>
												<option value="NV">Nevada (NV)</option>
												<option value="NH">New Hampshire (NH)</option>
												<option value="NJ">New Jersey (NJ)</option>
												<option value="NM">New Mexico (NM)</option>
												<option value="NY">New York (NY)</option>
												<option value="NC">North Carolina (NC)</option>
												<option value="ND">North Dakota (ND)</option>
												<option value="OH">Ohio (OH)</option>
												<option value="OK">Oklahoma (OK)</option>
												<option value="OR">Oregon (OR)</option>
												<option value="PA">Pennsylvania (PA)</option>
												<option value="PR">Puerto Rico (PR)</option>
												<option value="RI">Rhode Island (RI)</option>
												<option value="SC">South Carolina (SC)</option>
												<option value="SD">South Dakota (SD)</option>
												<option value="TN">Tennessee (TN)</option>
												<option value="TX">Texas (TX)</option>
												<option value="UT">Utah (UT)</option>
												<option value="VT">Vermont (VT)</option>
												<option value="VA">Virginia (VA)</option>
												<option value="WA">Washington (WA)</option>
												<option value="WV">West Virginia (WV)</option>
												<option value="WI">Wisconsin (WI)</option>
												<option value="WY">Wyoming (WY)</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="tel" maxlength="5" name="zip" id="zip" value="" placeholder="ZIP" class="form-control field validate[required]">
										</div>
									</div>
							   	</div>
							</div>
						</div>
				   	</div>
				</div>
			</form>
			<div class="panel-group checkout" id="accordion in">
				<div align="center">
					<a id="submit" class="btn btn-lg btn-lblue pulse">Submit</a>
				</div>
			</div>
		</div>
		<p id="loading-indicator" style="display:none;">Processing...</p>
		<div id="notification_modal" class="modal fade" align="center" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="Notification Form">
			<div class="modal-dialog">
		    	<div class="modal-content ">
		      		<div class="row">
		        		<div class="col-xs-12">
							<div class="form-group text-center" id="note"></div>
		        		</div>
		      		</div>
		    	</div>
		  	</div>
		</div>
	</div>
</section>