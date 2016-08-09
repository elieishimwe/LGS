 @extends('master')

 @section('content')


	<!-- -->
			<section>
				<div class="container">
					
					<div class="row">

						<!-- FORM -->
						<div class="col-md-8 col-sm-8">

							<h3>Drop us an email</h3>

							
							<!--
								MESSAGES
								
									How it works?
									The form data is posted to php/contact.php where the fields are verified!
									php.contact.php will redirect back here and will add a hash to the end of the URL:
										#alert_success 		= email sent
										#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
										#alert_mandatory	= email not sent - required fields empty
										Hashes are handled by assets/js/contact.js

									Form data: required to be an array. Example:
										contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
										Also, add `required` to input fields if is a mandatory field. 
										Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

									PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
												 ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

									WARNING! Do not change the `email` and `name`!
												contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
												contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
							-->

							<!-- Alert Success -->
							<div id="alert_success" class="alert alert-success margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Thank You!</strong> Your message successfully sent!
							</div><!-- /Alert Success -->


							<!-- Alert Failed -->
							<div id="alert_failed" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>[SMTP] Error!</strong> Internal server error!
							</div><!-- /Alert Failed -->


							<!-- Alert Mandatory -->
							<div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
							</div><!-- /Alert Mandatory -->

            
                       

							{!! Form::open(['url'=>'send_contact','method'=>'post']) !!}
							
								<fieldset>
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="contact:name">Full Name *</label>
												<input required type="text" value="" class="form-control" name="name" id="contact:name">
											</div>
											<div class="col-md-4">
												<label for="contact:email">E-mail Address *</label>
												<input required type="email" value="" class="form-control" name="email" id="contact:email">
											</div>
											<div class="col-md-4">
												<label for="contact:phone">Phone</label>
												<input type="text" value="" class="form-control" name="phone" id="contact:phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-8">
												<label for="contact:subject">Subject</label>
												<input required type="text" value="" class="form-control" name="subject" id="contact:subject">
											</div>
											
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:message">Message *</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="message" id="contact:message"></textarea>
											</div>
										</div>
									</div>
									

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
									</div>
								</div>
							{!! Form::close() !!}

						</div>
						<!-- /FORM -->


						<!-- INFO -->
						<div class="col-md-4 col-sm-4">

							

							<hr />

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong>Office 19F, 320 building,        West Street,Durban,4001</span>
								<span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:+27812991782">+27812991782 / +27313012555</a></span>
								<span class="block"><strong><i class="fa fa-phone"></i> Fax:</strong> <a href="tel:+27313012556">+27313012556</a></span>
								<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:info@lgsedu.co.za ">info@lgsedu.co.za </a></span>
							</p>

							<hr />

							

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- / -->


  @endsection