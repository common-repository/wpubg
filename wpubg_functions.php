<?php
function wpubg_getData ($url, $apikey) {
	$params = array(
		'sslverify' => false, 
        	'headers' => array(
        		'Authorization' => $apikey,
			'Accept' => 'application/json'
        	)
	);
	$response = wp_remote_get($url, $params);
	$result = wp_remote_retrieve_body($response);
    return $result;
}

function wpubg_getRank ($rankPointsTitle) {
	
	$titles = array("","Beginner","Novice","Experienced","Skilled","Specialist","Expert","Survivor");
	$levels = array("","I","II","III","IV","V");


	$rank = explode("-",$rankPointsTitle);
	$playerTitle = $rank[0];
	$playerLevel = $rank[1];
	
	$rank = $titles[$playerTitle]." ".$levels[$playerLevel];


	return $rank;
}


function wpubg_error ($msg) {
	// WordPress core before_widget hook (always include )
	echo $before_widget;

	//open widget div
	echo '<div class="widget-text wp_widget_plugin_box">';
                
	//show widget title
	if ( $title ) {
		echo $before_title . $title . $after_title;
	}

	echo '<div style="background-color:#FFBF00; padding:10px;">
                    <div><strong>Whoops!</strong></div>
          </div>
          <div style="text-align:center;">
	          <p style="padding:5px;"><h3 style="margin:0px;padding:0px;">PUBG Stats Error</h3></p>
    	      <p style="padding:5px;"><strong>'.$msg.'</strong></p>
          </div>';

	//close widget div
	echo '</div>';
	  
	// WordPress core after_widget hook (always include )
	echo $after_widget;

}

?>
