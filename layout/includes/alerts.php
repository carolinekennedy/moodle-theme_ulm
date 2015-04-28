<!-- Start Alerts -->

<?php if ($PAGE->pagelayout == 'frontpage') { ?>

<!-- Alert #1 -->
<?php if ($hasalert1) { ?>
	<div class="useralerts alert alert-<?php echo $PAGE->theme->settings->alert1type ?>">
		<a class="close" data-dismiss="alert" href="#">×</a>
		<?php
		if ($PAGE->theme->settings->alert1type == 'info') {
			$alert1icon = $alertinfo;
	    } else if ($PAGE->theme->settings->alert1type == 'error') {
	    	$alert1icon = $alertwarning;
	   	} else {
	   		$alert1icon = $alertsuccess;
	   	}
	   	echo $alert1icon.'<span class="title">'.$PAGE->theme->settings->alert1title.'</span>'.$PAGE->theme->settings->alert1text; ?>
	</div>
<?php } ?>

<!-- Alert #2 -->
<?php if ($hasalert2) { ?>
	<div class="useralerts alert alert-<?php echo $PAGE->theme->settings->alert2type ?>">
		<a class="close" data-dismiss="alert" href="#">×</a>
		<?php
		if ($PAGE->theme->settings->alert2type == 'info') {
			$alert2icon = $alertinfo;
	    } else if ($PAGE->theme->settings->alert2type == 'error') {
	    	$alert2icon = $alertwarning;
	   	} else {
	   		$alert2icon = $alertsuccess;
	   	}
	   	echo $alert2icon.'<span class="title">'.$PAGE->theme->settings->alert2title.'</span>'.$PAGE->theme->settings->alert2text; ?>
	</div>
<?php } ?>

<!-- Alert #3 -->
<?php if ($hasalert3) { ?>
	<div class="useralerts alert alert-<?php echo $PAGE->theme->settings->alert3type ?>">
		<a class="close" data-dismiss="alert" href="#">×</a>
		<?php
		if ($PAGE->theme->settings->alert3type == 'info') {
			$alert3icon = $alertinfo;
	    } else if ($PAGE->theme->settings->alert3type == 'error') {
	    	$alert3icon = $alertwarning;
	   	} else {
	   		$alert3icon = $alertsuccess;
	   	}
	   	echo $alert3icon.'<span class="title">'.$PAGE->theme->settings->alert3title.'</span>'.$PAGE->theme->settings->alert3text; ?>
	</div>
<?php } ?>

<?php } ?>

<!-- End Alerts -->