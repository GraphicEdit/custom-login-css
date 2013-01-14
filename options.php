<div class="wrap">
	<h2>Custom Login Css</h2>
	  <div style="margin-left:0px;">
	<form method="POST" action="options.php"><?php wp_nonce_field('update-options'); ?>
			<div class="inside">
				<table class="form-table">
		<tr>
					
					<label for="custom_login_css_style">Set Css Style:</label>
					
				<td>
				
	<textarea name="custom_login_css_style" id="custom_login_css_style" rows="10" cols="110"><?php 

	$custom_login_css_style = get_option('custom_login_css_style'); 

	if($custom_login_css_style == ''){
	
	echo '&lt;style type="text/css"&gt;
		
	body:after {
	height: 60px;
    content: "Custom Login Css";
	position: absolute;
	top: 0; left: 0; bottom: 0; right: 0;
    background-color:yellow;
	}

	&lt;/style&gt;';
	}
	else{
	echo $custom_login_css_style;
	}

	?></textarea>
				</td>
			</tr></table>
			</div>
    	<input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="custom_login_css_style" />
		<p class="submit"><input type="submit" name="Submit" value="<?php _e('Update Options') ?>" /></p>
		</form>      
	</div>
</div>