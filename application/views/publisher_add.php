      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?=$title?></h3>
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"> Form</h4>
					  <?php 
						if($this->session->flashdata('notif')): 
							$notif = $this->session->flashdata('notif');
							if($notif == "success") :
						?>
								<div class="panel-body">
									<div class="alert alert-success">
										Publisher saved successfully.
									</div>
								</div>
							<?php else: ?>
								<div class="panel-body">
									<div class="alert alert-danger">
										Error in saving user.
									</div>
								</div>
							<?php endif; ?>
					  <?php endif; ?>
                      <?php $attributes = array('class' => 'form-horizontal style-form'); echo form_open('publisher/add', $attributes);?>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="name" style="width:30%" required>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact Number</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="contact" style="width:30%" required>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gender</label>
                              <div class="col-sm-10">
								  <select name="gender" class="form-control" style="width:30%">
									<option value="M">Male</option>
									<option value="F">Female</option>
								  </select>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Address</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="address" style="width:70%" required>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Privileged</label>
                              <div class="col-sm-10 checkbox-group required">
							  <?php foreach ($privileged as $privileged_item): ?>
								<label class="checkbox-inline">
									<input name="privileged[]" type="checkbox" value="<?=$privileged_item['id']?>"> <?=$privileged_item['privileged']?>
								</label>
							  <?php endforeach; ?>
								<label class="checkbox-inline">
								  <input name="privileged[]" type="checkbox" value="N/A"> N/A
								</label>
								<label class="checkbox-inline" style="color:red; display:none" id="error">
									<span>Choose atleast one in Privileged choices!
								</label>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
								  <button type="submit" class="btn btn-success" onclick="return checkbox()">Submit</button>
								  <button type="button" class="btn btn-default">Cancel</button>
                              </div>
                          </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
	  <script type="text/javascript">
			function checkbox() {
				var check = $('div.checkbox-group.required :checkbox:checked').length > 0;
				if(!check) {
					$("#error").show();
					return false;
				} else {
					return true;
				}
			}
	  </script>