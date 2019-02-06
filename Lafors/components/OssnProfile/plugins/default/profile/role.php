<?php

 
 echo "<div class='user-fullname ossn-profile-role'>";
 if($params['user']->isAdmin()){
	echo "<i class='fa fa-star'></i>".ossn_print('admin'); 
 }
 echo "</div>";