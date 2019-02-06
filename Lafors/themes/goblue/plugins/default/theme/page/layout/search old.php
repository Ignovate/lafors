
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
//print_r($userlist);

?>

<script type='text/javascript'>
/* jQuery(function(){
	
			jQuery('.showSingle').click(function(){
				$('#will').show();
               $('.targetdivs').hide();
              jQuery('#div'+$(this).attr('target')).show();
			  jQuery('#divs'+$(this).attr('target')).show(); 
        });
			   
});   */




            /* function getsearch(id)
            {
                //alert('this id value :'+id);
                $.ajax({
                    type: "POST",
                    url: '<?php echo site_url('client/ajax_state_list').'/';?>'+id,
                    data: id='cat_id',
                    success: function(data){
                        //alert(data);
                        $('#old_state').html(data);
                },
});
            }

 */

















function advchange(){
	 $("#pro").hide();
		  $("#stud").hide();
		   $("#loc").hide();
		   $("#exp").hide();
		     $("#org").hide();
			  $("#col").hide();
			  $("#AvSearch").hide();
			  $("#year").hide();
			   
}

function advsearch()
{
	if(document.getElementById('prof').value == 'student'){
		 $("#loc").hide();
		    $("#col").hide();
		 $("#stud").show();
		  $("#pro").hide();
		   $("#org").hide();
		    $("#year").show();
			
		    $("#AvSearch").show();
		  
	}
	else if(document.getElementById('prof').value == 'professional'){
		 $("#pro").show();
		  $("#stud").hide();
		   $("#loc").hide();
		    $("#exp").hide();
			$("#org").hide();
			    $("#col").hide();
				 $("#year").hide();
				  $("#AvSearch").show();
	}
	else if(document.getElementById('prof').value == 'human resource'){
		  $("#pro").show();
		  $("#stud").hide();
		  $("#loc").hide();
		  $("#exp").hide();
		  $("#org").hide();
		   $("#year").hide();
			    $("#col").hide();
		     $("#AvSearch").show();
	}
	else if(document.getElementById('prof').value == 'placement officer'){
		 $("#pro").hide();
		  $("#stud").hide();
		   $("#loc").show();
		    $("#exp").show();
		   $("#org").show();
		    $("#year").hide();
		    $("#col").hide();
			  $("#AvSearch").show();
		  
		   
	}

	if(document.getElementById('prof').value == 'student'){
		 $("#loc").show();
		    $("#col").show();
		 $("#stud").show();
		  $("#year").show();
		  $("#pro").hide();
		   $("#org").hide();
		    
		  
	}
	else if(document.getElementById('prof').value == 'professional'){
		$("#loc").show();//modified
		    $("#exp").show();//modified
			 $("#org").show();//modified
			  $("#year").hide();
	}
	
	else if(document.getElementById('prof').value == 'human resource'){
		  $("#pro").show();
		  $("#stud").hide();
		  $("#loc").show();
		  $("#exp").show();
		   $("#year").hide();
		  $("#org").show();
			    $("#col").hide();
		    
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


<div class="container ossn-search">


  <div class="row">
  <div class="col-md-3">
  <form class="ossn-form ossn-search" autocomplete="off" method="post" action="<?php ossn_site_url("search")?>" enctype="multipart/form-data">
        </div>
	  </div>
	 
	  <div class="row">
	  <div class="col-md-3" >
			<select id="prof" class="select-full" onchange="advchange();" style="width: 149px;height: 24px;margin-left: 69px;margin-top: 6px;" name="pro">
			<option name="null" value="">-Select Profession-</option>
			
					
						<?php foreach($userlist['profession'] as $pros): ?>
						 <?php if($pros->profession !="" && $pros->profession !="0"):?>
							<option value="<?php echo $pros->profession; ?>"><?php echo $pros->profession; ?></option>
						 	<?php endif; endforeach ; ?>
									
			</select>
			<!--<//?php print_r(array_keys($params));?>-->
	</div>
	  <div class="col-md-2">
		<input type="text" class="" name="filter" style="width: 149px;height: 24px;margin-left: 69px;margin-top: 6px;" placeholder="<?php echo ossn_print('ossn:search');?>" />
		</div>
	 <div class="col-md-1">
     
	  </div>
	
		<div class="col-md-2">
           <a  style="float:left"  value="ASearch" name="" onclick="advsearch();" id="ASearch">Advance Search&nbsp;<i class="fa fa-search" aria-hidden="true"></i></a>
		</div>
		
	</div>
	</br>
	
	<div class="row">
	 <div id="pro" style="display:none;">
	
	 <div class="col-md-3" >
	
			<select  class="select-full"  style="width: 149px;height: 24px;margin-left: 66px;margin-top: 8px;" name="dom">
			<option name="null" value="">-Select Domain-</option>
						<?php foreach($userlist['domain'] as $pros): ?>
						 <?php if($pros->domain !="" && $pros->domain !="0"):?>
							<option value="<?php echo $pros->domain; ?>"><?php echo $pros->domain; ?></option>
						 	<?php endif; endforeach ; ?>
									
			</select>
			
	</div>
	
	       
	
			 <!--<div class="col-md-3">
			<select class="select-full" style="width: 149px;height: 24px;margin-left: 66px;margin-top: 8px;" name="des">
			<option name="null" value="">-Select Designation-</option>
						</?php foreach($userlist['designation'] as $pros): ?>
						 </?php if($pros->designation !="" && $pros->designation !="0"):?>
							<option value="</?php echo $pros->designation; ?>"></?php echo $pros->designation; ?></option>
						 	</?php endif; endforeach ; ?>
			</select>
			
	</div>-->
			<div class="col-md-3" >
			<select  class="select-full"  style="width: 149px;height: 24px;margin-left: 66px;margin-top: 8px;" name="expt">
			<option name="null" value="">-Select Expertise -</option>
						<?php foreach($userlist['expertise'] as $pros): ?>
						 <?php if($pros->expertise !="" && $pros->expertise !="0"):?>
							<option value="<?php echo $pros->expertise; ?>"><?php echo $pros->expertise; ?></option>
						 	<?php endif; endforeach ; ?>
									
			</select>
			
	</div>
			
		
			</div>
	</div>
	</br>

	<div class="row">
	<div id="stud" style="display:none;">
	
	
	     <div class="col-md-3">
			<select  class="select-full"  style="width: 149px;height: 24px;margin-left: 66px;margin-top: 8px;" onchange="return showSubCourse(this.value)" name="cors">
			<option name="null" value="">-Select Course-</option>
						<?php foreach($userlist['course'] as $pros): ?>
							<option value="<?php echo $pros->corname; ?>"><?php echo $pros->corname; ?></option>	
<?php endforeach; ?> 							
			</select>
			</div>
			
			
			
				 <div class="col-md-3">
				  
			<select  class="select-full"  style="width: 149px;height: 24px;margin-left: 66px;margin-top: 8px;"   name="sub">
			<option name="null" value="">-Select SubCourse-</option>
			<optgroup style="display:none;" label="Engineering" id="Engineering">
						<?php foreach($userlist['sub_course'] as $pros1 ): ?>
							<?php if($pros1->corid == '1'): ?>
							<option value=<?php echo $pros1->subname; ?>><?php echo $pros1->subname; ?></option>
						<?php endif; endforeach;?>
						</optgroup>
						<optgroup style="display:none;" label="Arts & Science" id="Arts">
						<?php foreach($userlist['sub_course'] as $pros1 ): ?>
							<?php if($pros1->corid == '2'): ?>
							<option value=<?php echo $pros1->subname; ?>><?php echo $pros1->subname; ?></option>
						<?php endif; endforeach; ?>
						</optgroup>
		
			<optgroup style="display:none;" label="Law" id="Law">
						<?php foreach($userlist['sub_course'] as $pros1 ): ?>
							<?php if($pros1->corid == '3'): ?>
							<option value=<?php echo $pros1->subname; ?>><?php echo $pros1->subname; ?></option>
						<?php endif; endforeach; ?>
						</optgroup>
							<optgroup style="display:none;" label="Medical" id="Medical">
						<?php foreach($userlist['sub_course'] as $pros1 ): ?>
							<?php if($pros1->corid == '4'): ?>
							<option value=<?php echo $pros1->subname; ?>><?php echo $pros1->subname; ?></option>
						<?php endif; endforeach; ?>
						</optgroup>
						<optgroup style="display:none;" label="Others" id="Others">
						<?php foreach($userlist['sub_course'] as $pros1 ): ?>
							<?php if($pros1->corid == '5'): ?>
							<option value=<?php echo $pros1->subname; ?>><?php echo $pros1->subname; ?></option>
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
	
	
	<div class="col-md-3 " id="loc"  style="display:none; ">
	
	<select class="select-full"  style="width: 149px;height: 24px;margin-left: 66px;margin-top: 8px;" name="loc">
			<option name="null" value="">-Select Location-</option>
			
					
						<?php foreach($userlist['location'] as $pros): ?>
						 <?php if($pros->location !="" && $pros->location !="0"):?>
							<option value="<?php echo $pros->location; ?>"><?php echo $pros->location; ?></option>
						 	<?php endif; endforeach ; ?>
									
			</select>
	</div>
	
	 <div class="col-md-3" id="year" style="display:none;">
			<select  class="select-full"  style="width: 149px;height: 24px;margin-left: 66px;margin-top: 8px;" name="year">
			<option name="null" value="">-Select Year in College-</option>
						<?php foreach($userlist['yearcollege'] as $pros): ?>
						 <?php if($pros->yearcollege !="" && $pros->yearcollege !="0"):?>
							<option value="<?php echo $pros->yearcollege; ?>"><?php echo $pros->yearcollege; ?></option>
						 	<?php endif; endforeach ; ?>
			</select>
			
	</div>
	 <!--<div class="col-md-3" id="org" style="display:none;" >
			<select class="select-full" style="width: 149px;height: 24px;margin-left: 66px;margin-top: 8px;" name="org">
			<option name="null" value="">-Select Organization-</option>
						<//?php foreach($userlist['organization'] as $pros): ?>
						 </?php if($pros->organization !="" && $pros->organization !="0"):?>
							<option value="</?php echo $pros->organization; ?>"></?php echo $pros->organization; ?></option>
						 	</?php endif; endforeach ; ?>
			</select>
			
	</div>-->
	
	
	 <div class="col-md-3"id="exp" style="display:none; " >
			<select  class="select-full"  style="width: 149px;height: 24px;margin-left: 66px;margin-top: 8px;" name="exp">
			<option name="null" value="">-Select Experience-</option>
						<?php foreach($userlist['experience'] as $pros): ?>
						 <?php if($pros->experience !="" && $pros->experience !="0"):?>
							<option value="<?php echo $pros->experience; ?>"><?php echo $pros->experience; ?></option>
						 	<?php endif; endforeach ; ?>
									
			</select>
			
	</div>
			
	
	     <!--<div class="col-md-3"id="col" style="display:none;" >
			<select  class="select-full"  style="width: 149px;height: 24px;margin-left: 66px;margin-top: 8px;" name="col">
			<option name="null" value="">-Select College-</option>
						</?php foreach($userlist['college'] as $pros): ?>
						 </?php if($pros->college !="" && $pros->college !="0"):?>
							<option value="</?php echo $pros->college; ?>"></?php echo $pros->college; ?></option>
						 	</?php endif; endforeach ; ?>
									
			</select>
			
	</div>-->
	
			
	</div>
	</br>
		<div class="row">
	<div class="col-md-6">
           
		</div>
		
		<!--<div class="col-md-2" style="display:none" id="AvSearch">
           <a  value="AdvSearch" name=""  onclick="advancesearch();" >Additional Search&nbsp;<i class="fa fa-search" aria-hidden="true"></i></a>
		</div>-->
		  <div class="col-md-3">
      <input type="submit" class="btn btn-primary" style="width: 75px;height: 24px; padding: 1px 8px;" value="<?php echo ossn_print('ossn:search'); ?>"/>
	  </div>
		</div>
	</br>
			
	</div>
	
	
	
	  </form>
	   </div>
	   
	   	
	<div class="row">
		<?php echo ossn_plugin_view('theme/page/elements/system_messages'); ?>    
		<div class="ossn-layout-newsfeed">
			<div class="col-md-2">
				<div class="coloum-left ossn-page-contents">
					<?php
						if (ossn_is_hook('search', "left")) {
						   	$searchleft = ossn_call_hook('search', "left", NULL, array());
						  		echo implode('', $searchleft);
						}
						?>   
				</div>
			</div>
			
			
			
			
			<div class="col-md-6">
				<div class="newsfeed-middle ossn-page-contents">
					<?php echo $params['content']; ?>
				</div>
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
	<?php echo ossn_plugin_view('theme/page/elements/footer');?>
</div>