<div class="well well-sm">
	<ul class="nav nav-pills nav-stacked">
	  <li<?php if($mod_page == 'index'){ ?> class="active"<?php } ?>><a href="/mod"><?php echo $mod_language['overview']; ?></a></li>
	  <li<?php if($mod_page == 'reports'){ ?> class="active"<?php } ?>><a href="/mod/reports"><?php echo $mod_language['reports']; ?><?php if($reports == true){ ?> <span class="glyphicon glyphicon-exclamation-sign"></span><?php } ?></a></li>
	  <li<?php if($mod_page == 'punishments'){ ?> class="active"<?php } ?>><a href="/mod/punishments"><?php echo $mod_language['punishments']; ?></a></li>
	  <?php //if($allow_moderators === "true" || $user->data()->group_id == 2){ ?><!--<li><a href="/mod/applications"><?php //echo $mod_language['staff_apps']; ?><?php //if($open_apps === true){ ?> <span class="glyphicon glyphicon-exclamation-sign"></span><?php //} ?></a></li><?php //} ?>-->
	</ul>
</div>