<html>
<head>
<script type='text/javascript'>
 jQuery(function(){
	
			jQuery('#prof').change(function(){
				 $("#s1").show();
		   $("#s2").hide();
				$("#ASearch").show();
				$('#filterid').val("");
				$('#indid').val("");
				$("#funid").val("");
				$("#corsid").val("");
				$("#subid").val("");
				$("#locid").val("");
				$("#yearid").val("");
				$("#expid").val("");
        });
			   
});  

function load(){
	if(document.getElementById('prof').value == 'student'){
	if(document.getElementById('corsid').value !="" || document.getElementById('subid').value !="" || document.getElementById('locid').value !="" || document.getElementById('yearid').value !="" ){
	 $("#year").show();
		 $("#loc").show();
		 $("#stud").show();
		  $("#pro").hide();
		   $("#s1").hide();
		   $("#s2").show();
		   $("#ASearch").hide();
	}
	}
	if(document.getElementById('prof').value == 'professional'){
	if(document.getElementById('indid').value !="" || document.getElementById('locid').value !="" || document.getElementById('expid').value !="" || document.getElementById('funid').value !="" ){
	  $("#pro").show();
		  $("#stud").hide();
		   $("#loc").show();
		    $("#exp").show();
			 $("#year").hide();
			   $("#s1").hide();
		   $("#s2").show();
			$("#ASearch").hide();
	}
	}
	if(document.getElementById('prof').value == 'human resource'){
		if(document.getElementById('indid').value !="" || document.getElementById('locid').value !="" || document.getElementById('expid').value !="" || document.getElementById('funid').value !="" ){
	 $("#pro").show();
		  $("#stud").hide();
		   $("#loc").show();
		    $("#exp").show();
			 $("#year").hide();
			   $("#s1").hide();
		   $("#s2").show();
			$("#ASearch").hide();
	}
	}
	if(document.getElementById('prof').value == 'placement officer'){
	if(document.getElementById('locid').value !="" || document.getElementById('expid').value !="" ){
	 $("#pro").hide();
		  $("#stud").hide();
		    $("#year").hide();
		   $("#loc").show();
		   $("#exp").show();
		     $("#s1").hide();
		   $("#s2").show();
		 $("#ASearch").hide();
	}
	}
}

 
function advchange(){
	 $("#pro").hide();
		  $("#stud").hide();
		   $("#loc").hide();
		   $("#exp").hide();
		   $("#year").hide();
		
}

function advsearch()
{
	if(document.getElementById('prof').value == 'student'){
		 $("#year").show();
		 $("#loc").show();
		 $("#stud").show();
		  $("#pro").hide();
		   $("#s1").hide();
		   $("#s2").show();
		   $("#ASearch").hide();
		  
	}
	else if(document.getElementById('prof').value == 'professional'){
		 $("#pro").show();
		  $("#stud").hide();
		   $("#loc").show();
		    $("#exp").show();
			 $("#year").hide();
			   $("#s1").hide();
		   $("#s2").show();
			$("#ASearch").hide();
	}
	else if(document.getElementById('prof').value == 'human resource'){
		  $("#pro").show();
		  $("#stud").hide();
		   $("#loc").show();
		    $("#exp").show();
			 $("#year").hide();
			   $("#s1").hide();
		   $("#s2").show();
			$("#ASearch").hide();
		   
	}
	else if(document.getElementById('prof').value == 'placement officer'){
		 $("#pro").hide();
		  $("#stud").hide();
		    $("#year").hide();
		   $("#loc").show();
		   $("#exp").show();
		     $("#s1").hide();
		   $("#s2").show();
		 $("#ASearch").hide();
		   
	}
	
}
function showSubCourse(value){
	//alert(value);
if(value == "Engineering"){
	$("#Engineering").show();
	$("#Arts").hide();
	$("#Law").hide();
	$("#Medical").hide();
	$("#Others").hide();
}else if(value == "Arts and Science"){
	$("#Arts").show();
	$("#Engineering").hide();
	$("#Law").hide();
	$("#Medical").hide();
	$("#Others").hide();
}
else if(value == "Law"){
	$("#Arts").hide();
	$("#Engineering").hide();
	$("#Law").show();
	$("#Medical").hide();
	$("#Others").hide();
}
else if(value == "Medical"){
	$("#Arts").hide();
	$("#Engineering").hide();
	$("#Law").hide();
	$("#Medical").show();
	$("#Others").hide();
}
else if(value == "Others"){
	$("#Arts").hide();
	$("#Engineering").hide();
	$("#Law").hide();
	$("#Medical").hide();
	$("#Others").show();
}
else{
	$("#Engineering").hide();
	$("#Arts").hide();
	$("#Law").hide();
	$("#Medical").hide();
	$("#Others").hide();
}
	
}

</script>
</head>
<body onload="load();">
<?php

//unused pagebar skeleton when ads are disabled #628 
if(ossn_is_hook('newsfeed', "sidebar:right")) {
	$newsfeed_right = ossn_call_hook('newsfeed', "sidebar:right", NULL, array());
	$sidebar = implode('', $newsfeed_right);
	$isempty = trim($sidebar);
	
} 
?>

<?php 

$userlist = $params['search'];

$user =$params['inputvalue'];
//print_r($user);
?>



<div class="newsfeed-middle" style="line-height:3.2">

 <form class="ossn-form" autocomplete="off" method="post" action="<?php ossn_site_url("search")?>"   enctype="multipart/form-data">
 
 <div class="form-group search_banner" style="padding-top:4%;background-color:white !important;">
 
<br>
<br>
 <div class="row ">
	<div class="col-md-3" >
	</div>
	
 	  <div class="col-md-2" >
	  
			<select id="prof" class="select form-control" onchange="advchange();"  name="pro">
			<option name="null" value="">-Select Profession-</option>
			
					
						<?php foreach($userlist['profession'] as $pros): ?>
						 <?php if($pros->profession !="" && $pros->profession !="0"):?>
							<option value="<?php echo $pros->profession; ?>"<?php echo ($user[pro] == $pros->profession)? 'selected': '' ?>><?php echo ucfirst($pros->profession); ?></option>
						 	<?php endif; endforeach ; ?>
									
			</select>
			
			<!--<//?php print_r(array_keys($params));?>    value="<//?php echo ossn_print('ossn:search'); ?>"-->
	</div>
	
	<div class="col-md-2">
		<input type="text" id="filterid" class="form-control" style="width:100%;" name="filter" value="<?php echo $user[filter] ?>" placeholder="<?php echo ossn_print('ossn:search');?>" />
		</div>
		<div class="col-md-1" id="s1">
		 <input type="submit" value="Search" style="margin-top: 3px;" class="btn btn-primary"  />
		</div>
		
		<div class="col-md-2" >
	</div>
	</div>
	
	 <div class="row">
	 <div class="col-md-3" >
	</div>
	  <div class="col-md-6">
	  
		<!-- <input type="text" placeholder="City" name="city">	&emsp; -->
		
<a href="#"  value="ASearch" name="" style="color:white;" onclick="advsearch();" id="ASearch">Advance Search&nbsp;<i class="fa fa-search" aria-hidden="true"></i></a>
		</div>
		<div class="col-md-3" >
	</div>
	</div><br>
	<div class="row">
	 <div id="pro" style="display:none;" >
	<div class="col-md-3" >
	</div>
	 <div class="col-md-2" >
	
			<select id="indid"  class="select form-control" name="ind">
			<option name="null" value="">-Select Industry-</option>
						<?php foreach($userlist['industry'] as $pros): ?>
						 <?php if($pros->iname !="" && $pros->iname !="0"):?>
							<option value="<?php echo $pros->iname; ?>"<?php echo ($user[ind] == $pros->iname)? 'selected': '' ?>><?php echo $pros->iname; ?></option>
						 	<?php endif; endforeach ; ?>
									
			</select>
			
	</div>
	
			<div class="col-md-2" >
			<select id="funid" class="select form-control" name="fun">
			<option name="null" value="">-Select Functional -</option>
						<?php foreach($userlist['functional'] as $pros): ?>
						 <?php if($pros->fname !="" && $pros->fname !="0"):?>
							<option value="<?php echo $pros->fname; ?>"<?php echo ($user[fun] == $pros->fname)? 'selected': '' ?>><?php echo $pros->fname; ?></option>
						 	<?php endif; endforeach ; ?>
									
			</select>
			
	</div>
			
		
			</div>
	</div>
		
	
	
	<div class="row">
	<div id="stud" style="display:none;">
	
	<div class="col-md-3" >
	</div>
	     <div class="col-md-2">
		<select id="corsid" class="select form-control"  onchange="return showSubCourse(this.value)" name="cors">
			<option name="null" value="">-Select Course-</option>
						<?php foreach($userlist['course'] as $pros): ?>
							<option value="<?php echo $pros->corname; ?>"<?php echo ($user[cors] == $pros->corname)? 'selected': '' ?>><?php echo $pros->corname; ?></option>	
							<?php endforeach; ?> 							
		</select>
			</div>
			
			
			
				 <div class="col-md-2">
				  
			<select id="subid" class="select form-control" name="sub">
			<option name="null" value="">-Select SubCourse-</option>
			<optgroup style="display:none;" label="Engineering" id="Engineering">
						<?php foreach($userlist['sub_course'] as $pros1 ): ?>
							<?php if($pros1->corid == '1'): ?>
							<option value="<?php echo $pros1->subname; ?>"<?php echo ($user[sub] == $pros1->subname)? 'selected': '' ?>><?php echo $pros1->subname; ?></option>
						<?php endif; endforeach;?>
						</optgroup>
						<optgroup style="display:none;" label="Arts & Science" id="Arts">
						<?php foreach($userlist['sub_course'] as $pros1 ): ?>
							<?php if($pros1->corid == '2'): ?>
							<option value="<?php echo $pros1->subname; ?>"<?php echo ($user[sub] == $pros1->subname)? 'selected': '' ?>><?php echo $pros1->subname; ?></option>
						<?php endif; endforeach; ?>
						</optgroup>
		
			<optgroup style="display:none;" label="Law" id="Law">
						<?php foreach($userlist['sub_course'] as $pros1 ): ?>
							<?php if($pros1->corid == '3'): ?>
							<option value="<?php echo $pros1->subname; ?>"<?php echo ($user[sub] == $pros1->subname)? 'selected': '' ?>><?php echo $pros1->subname; ?></option>
						<?php endif; endforeach; ?>
						</optgroup>
							<optgroup style="display:none;" label="Medical" id="Medical">
						<?php foreach($userlist['sub_course'] as $pros1 ): ?>
							<?php if($pros1->corid == '4'): ?>
							<option value="<?php echo $pros1->subname; ?>"<?php echo ($user[sub] == $pros1->subname)? 'selected': '' ?>><?php echo $pros1->subname; ?></option>
						<?php endif; endforeach; ?>
						</optgroup>
						<optgroup style="display:none;" label="Others" id="Others">
						<?php foreach($userlist['sub_course'] as $pros1 ): ?>
							<?php if($pros1->corid == '5'): ?>
							<option value="<?php echo $pros1->subname; ?>"<?php echo ($user[sub] == $pros1->subname)? 'selected': '' ?>><?php echo $pros1->subname; ?></option>
						<?php endif; endforeach; ?>
						</optgroup>
						<!-- <//?php foreach($userlist['sub_course'] as $pros1): ?>	
							<option value="<//?php echo $pros1->subcoursename; ?>"><//?php echo $pros1->subcoursename; ?></option>
						 	<//?php endforeach ; ?> -->
									
			</select>
			</div>
			
		
		</div>	
	</div>
		
	</br>
	<div class="row">
	<div class="col-md-3" >
	</div>
	
	<div class="col-md-2 " id="loc"  style="display:none">
	
	<select id="locid"class="select form-control" name="loc">
			<option name="null" value="">-Select Location-</option>
			
					
						<?php foreach($userlist['state'] as $pros): ?>
						 <?php if($pros->states !="" && $pros->states !="0"):?>
							<option value="<?php echo $pros->states; ?>"<?php echo ($user[loc] == $pros->states)? 'selected': '' ?>><?php echo $pros->states; ?></option>
						 	<?php endif; endforeach ; ?>
									
			</select>
	</div>
	
	 <div class="col-md-2"  id="year"  style="display:none" >
			<select id="yearid" class="select form-control" name="year">
			<option name="null" value="">-Select Year in College-</option>
						<?php foreach($userlist['yearcollege'] as $pros): ?>
						 <?php if($pros->yearcollege !="" && $pros->yearcollege !="0"):?>
							<option value="<?php echo $pros->yearcollege; ?>"<?php echo ($user[year] == $pros->yearcollege)? 'selected': '' ?>><?php echo $pros->yearcollege; ?></option>
						 	<?php endif; endforeach ; ?>
			</select>
			
	</div>
	
	
	
	 <div class="col-md-2" id="exp" style="display:none;" >
			<select id="expid" class="select form-control" name="exp">
			<option name="null" value="">-Select Experience-</option>
						<?php foreach($userlist['experience'] as $pros): ?>
						 <?php if($pros->experience !="" && $pros->experience !="0"):?>
							<option value="<?php echo $pros->experience; ?>"<?php echo ($user[exp] == $pros->experience)? 'selected': '' ?>><?php echo $pros->experience; ?></option>
						 	<?php endif; endforeach ; ?>
									
			</select>
			
	</div>
<!--	<div class="row">
	 <div class="col-md-2" >
		<input type="radio" value="Student" name="lafors_category"/>student 	
			
	</div>
	<div class="col-md-2" >
		<input type="radio" value="Placement Officer" name="lafors_category"/>placement Officer 	
			
	</div>
	<div class="col-md-2" >
		<input type="radio" value="Professional" name="lafors_category"/>professional 	
			
	</div>
	<div class="col-md-2" >
		<input type="radio" value="Human resource" name="lafors_category"/>human resource 	
			
	</div>
	</div>-->
	
	<div class="col-md-3" id="" style="display:none;">
		 
		</div>
	

	</div>
		 <div class="row">
	 <div class="col-md-5" >
	</div>
	 
	<div class="col-md-5" id="s2" style="display:none;margin-left: 38%;margin-top:1%;margin-bottom:3%;">
		 
<input type="submit" value="Search" style="margin-top: 3px;" class="btn btn-primary"  />
		</div>
		 <div class="col-md-2">
	  
		<!-- <input type="text" placeholder="City" name="city">	&emsp; -->
	</div>	
		
	</div>
	</div>
	
	
			
	</form>
</div>
	
	</div>
	
	 
	   
	   	
	<div class="row">
		<?php echo ossn_plugin_view('theme/page/elements/system_messages'); ?>    
		<div class="ossn-layout-newsfeed">
			<div class="col-md-2">
				<!-- <div class="coloum-left ossn-page-contents">
					<//?php
						if (ossn_is_hook('search', "left")) {
						   	$searchleft = ossn_call_hook('search', "left", NULL, array());
						  		echo implode('', $searchleft);
						}
						?>   
				</div>-->
			</div>
			
			
				
			<div class="col-md-6">
			
				<div class="newsfeed-middle ossn-page-contents" style="width: 90%;margin-left: 15px;">
					<?php echo $params['content']; ?>
				</div>
			
			<div class="col-md-3">
            	<?php if(!empty($isempty)){ ?>
				<div class="newsfeed-right">
					<?php
						echo $sidebar;
						?>                            
				</div>
                <?php } ?>
			</div>
			</div>
		</div>
	</div>
	<?php echo ossn_plugin_view('theme/page/elements/footer');?>

</body>
</html>