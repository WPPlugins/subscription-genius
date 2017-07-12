
	<h2>Forgot Password</h2><br>
	
	<?
	if($forgotMessage)
	{
		?><div style="color:#C00;">Email could not be found. Please try again.</div><?
	}
	?>
	
	
	<table style="width:100%;" border="0">
		<tr>
			<td valign="top">
				<form name="loginform" id="loginform" action="" method="post">
					<input type="hidden" name="sg_login_user_method" value="forgot" />
					<p>
						<label>Email<br />
							<input type="text" name="email" id="user_login" class="input" value="" size="20" tabindex="10" />
						</label>
					</p>
					
					<p class="submit">
						<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Email Password" tabindex="100" />
					</p>
				</form>
			</td>
		</tr>
	</table>