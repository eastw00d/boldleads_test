<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- TABLE -->
<section class="ptb ptb-sm-80">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
				<?php 
					// instantiate model Data and get all records for the Dashboard 
					$record = new Data;
					$records = $record->get_all_records();
					$record_number = 0;
				?>
	            <table class="table checkout table-border">
	                <tr class="gray-bg">
	                    <th></th>
	                    <th class="text-center">Customer</th>
	                    <th class="text-center">Email</th>
	                    <th class="text-center">Date Created</th>
						<th class="text-center">Info</th>
	                </tr>
					<?php foreach ($records as $k => $v) : ?>
						<?php $record_number++; ?>
	                    <tr>
							<td class="text-center">
								<h6><?=$record_number;?></h6>
							</td>
	                        <td class="text-center">
	                            <h6><?=$v['fname'] . ' ' . $v['lname'];?></h6>
	                        </td>
	                        <td class="text-center"><?=$v['email'];?></td>
							<td class="text-center"><?=$v['date_created'];?></td>
	                        <td>
								<a>
									<i id="show_<?=$record_number;?>"  onClick="show_info(<?=$record_number;?>);" class="fa fa-info"></i>
								</a>
							</td>
	                    </tr>
					<?php endforeach; ?>
					<tr class="shop-Cart-totalprice">					
	                    <td colspan="6" class="total">
							Total : 
	                    	<b id="total"><?=count($records);?></b>
						</td>
	                </tr>
	            </table>
	        </div>
	    </div>
	</div>
</section>
<!-- INFO MODAL -->
<div id="info_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Not Registered Alert Form">
	<div class="modal-dialog">
    	<div class="modal-content">
			<div class="panel-group checkout" id="accordion in">
				<div class="panel panel-default">
					<div class="panel-heading heading-iconed" align="center">
						<h4 class="panel-title">Customer Information:</h4>
					</div>
					<form name="customer_info">
						<div id="collapseOne" class="panel-collapse">
							<div class="panel-body">							
							   <div class="row">
									<div class="col-md-6">
										 <div class="form-group">Customer Name:
											  <input type="text" name="customer_name" id="customer_name" class="form-control field">
										 </div>
									</div>
								</div>
								<div class="col-md-4">
							        <div class="form-group">Email:
							           	<input type="text" id="email_address" name="email_address" class="form-control field"/>
							        </div>
							    </div>
								<div class="col-md-4">
									<div class="form-group">Phone:
										<input type="text" name="phone_number" id="phone_number" class="form-control field">
									</div>
								</div>
								<div class="col-md-4">
							        <div class="form-group">Footage:
							           	<input type="text" id="square_footage" name="square_footage" class="form-control field"/>
							        </div>
							    </div>
								<div class="form-group">Address:
									<input type="text" name="mailing_address" id="mailing_address" class="form-control field">
						   		</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">City:
											<input type="text" name="city_name" id="city_name" class="form-control field">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">State:
											<input type="text" name="state_name" id="state_name" class="form-control field">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">Zip:
											<input type="text" name="zip_code" id="zip_code" class="form-control field">
										</div>
									</div>
							   	</div>
							</div>
						</div>
					</form>
			   	</div>
			</div>				
    	</div>
  	</div>
</div>
<!-- END OF INFO MODAL -->