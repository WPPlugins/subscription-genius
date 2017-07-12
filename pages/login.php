
	<h2>Subscribers Only</h2><br>
	
	<?
	if($loginFailedMessage)
	{
		?><div style="color:#C00;">Login Failed. Please try again.</div><?
	}
	?>
	
	
	<div style="float:left; margin-right:150px;">
				<strong>Option 1</strong><br>
				<form  action="" method="post">
					<input type="hidden" name="sg_login_user_method" value="email" />
					<p>
						<label>Email<br />
							<input type="text" name="email" id="user_login" class="input" value="" size="20" tabindex="10" />
						</label>
					</p>
					<p>
						<label>Password<br />
							<input type="password" name="password" id="user_pass" class="input" value="" size="20" tabindex="20" />
						</label>
					</p>
					
					<p class="submit">
						<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" tabindex="100" />
					</p>
				</form>
				<p id="nav"> <a href="?lostpassword=true&returnURL=<?=urlencode('http://'.$_SERVER['HTTP_HOST'].'/'.$_SERVER['REQUEST_URI'])?>" title="Password Lost and Found">Lost your password?</a> </p>
		</div>
			
		<div style="float:left; margin-right:150px;">
		
				<strong>Option 2</strong><br>
				<form action="" method="post">
					<input type="hidden" name="sg_login_user_method" value="code" />
					<p>
						<label>Renewal Code<br />
							<input type="text" name="renewalCode" id="user_login" class="input" value="" size="20" tabindex="10" />
						</label>
					</p>
					<p>
						<label>Zip Code<br />
							<input type="password" name="zipCode" id="user_pass" class="input" value="" size="20" tabindex="20" />
						</label>
					</p>
					
					<p class="submit">
						<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" tabindex="100" />
					</p>
				</form>
		</div>
		
		<div style="float:left;">
			Where to find your renewal code<br />
			<img  src="/wp-content/plugins/subscriptionGenius/img/locateCodeLabel.gif" />
		</div>