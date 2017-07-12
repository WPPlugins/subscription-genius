<?php

	if($_REQUEST['subgen_hidden'] == 'Y') 
	{
		update_option('subgen_apilogin', $_REQUEST['subgen_apilogin']);
		update_option('subgen_apikey', $_REQUEST['subgen_apikey']);
		update_option('subgen_members_area_page_id', $_REQUEST['membersArea_pageID']);
		update_option('subgen_members_area_page_lock', ($_REQUEST['membersArea_lock']) ? 1:0);

		?>
		<div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
		<?php
		
	}

	//Normal page display
	$apilogin = get_option('subgen_apilogin');
	$apikey = get_option('subgen_apikey');
	$membersAreaPageID = get_option('subgen_members_area_page_id');
	$membersAreaPageLock = get_option('subgen_members_area_page_lock');
	

	
	$args = array(
    'depth'            => 0,
    'child_of'         => 0,
    'selected'         => $membersAreaPageID,
    'echo'             => 1,
    'name'             => 'membersArea_pageID'); 
?>
	



<div class="wrap">
	<?php    echo "<h2>" . __( 'Subscription Genius', 'subgen_trdom' ) . "</h2>"; ?>

	<form name="subgen_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<input type="hidden" name="subgen_hidden" value="Y">
		
		<?php    echo "<h4>" . __( 'API Credentials', 'subgen_trdom' ) . "</h4>"; ?>
		<p><?php _e("API Login: " ); ?><input type="text" name="subgen_apilogin" value="<?php echo $apilogin; ?>" size="20"></p>
		<p><?php _e("API Key: " ); ?><input type="text" name="subgen_apikey" value="<?php echo $apikey; ?>" size="20"></p>
		<hr />
		<?php    echo "<h4>" . __( 'Members Area Settings', 'subgen_trdom' ) . "</h4>"; ?>
		
		
		<p><input type="checkbox" value="1" <?=($membersAreaPageLock) ? 'checked="checked"':''?> name="membersArea_lock" id="memberAreaLock" /> <label for="memberAreaLock">Require an active subscription to view the member's area.</label></p>
		
		<p><?php _e("Members Only Area: " ); ?><?php wp_dropdown_pages( $args ); ?></p>
		

		<p class="submit">
		<input type="submit" name="Submit" value="<?php _e('Update Options', 'subgen_trdom' ) ?>" />
		</p>
	</form>
</div>
