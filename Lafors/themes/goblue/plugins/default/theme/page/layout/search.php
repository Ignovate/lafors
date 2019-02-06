
<html>
<head>
<!--<link href="<//?php echo ossn_theme_url();?>vendors/jquery.multiselect.css" rel="stylesheet" type="text/css"> -->
<?php
			 
   			  $check_css=ossn_html_css(array('href' =>  ossn_theme_url() . 'vendors/jquery.multiselect.css'));
			  print_r($check_css);
?>
<style>
	body { font-family:"PT Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","NotoColorEmoji","Segoe UI Symbol","Android Emoji","EmojiSymbols"}
ul,li { margin:0; padding:0; list-style:none;}
ul li label {margin-left:10px;}
.label { color:#666; font-size:16px;}
.ms-options-wrap  .ms-options  ul label { padding-top: 8px!important; padding-left: 21px!important; }
</style>
<script type='text/javascript'>
 jQuery(function(){
	
			jQuery('#prof').change(function(){
				 $("#s1").show();
				 $("#s4").show();
		   $("#s2").hide();
				$("#ASearch").show();
				$("#ASearch1").show();
				 $("#will").hide();
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
		   $("#will").show();
		   $("#s4").hide();
		    $("#s3").hide();
		   $("#ASearch").hide();
		     $("#ASearch1").hide();
	}
	}
	if(document.getElementById('prof').value == 'SME'){
	if(document.getElementById('indid').value !="" || document.getElementById('locid').value !="" || document.getElementById('expid').value !="" || document.getElementById('funid').value !="" ){
	  $("#pro").show();
		  $("#stud").hide();
		   $("#loc").show();
		    $("#exp").show();
			$("#will").show();
			 $("#year").hide();
			   $("#s1").hide();
		   $("#s2").show();
		   $("#s3").hide();
		   $("#s4").hide();
			$("#ASearch").hide();
			  $("#ASearch1").hide();
	}
	}
	if(document.getElementById('prof').value == 'human resource'){
		if(document.getElementById('indid').value !="" || document.getElementById('locid').value !="" || document.getElementById('expid').value !="" || document.getElementById('funid').value !="" ){
	 $("#pro").show();
		  $("#stud").hide();
		   $("#loc").show();
		    $("#exp").show();
			 $("#year").hide();
			 $("#will").show();
			   $("#s1").hide();
			   $("#s4").hide();
			   $("#s3").hide();
		   $("#s2").show();
			$("#ASearch").hide();
			$("#ASearch1").hide();
			
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
		   $("#s3").hide();
		   $("#s4").hide();
		   $("#will").show();
		 $("#ASearch").hide();
		 $("#ASearch1").hide();
	}
	}
}

 
function advchange(){
	 $("#pro").hide();
		  $("#stud").hide();
		   $("#loc").hide();
		   $("#exp").hide();
		   $("#year").hide();
		   $("#will").show();
		
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
		    $("#s4").hide();
			$("#s3").hide();
		   $("#ASearch").hide();
		   $("#ASearch1").hide();
		  $("#stu1").show();
		  $("#will").show();
	}
	else if(document.getElementById('prof').value == 'SME'){
		 $("#pro").show();
		  $("#stud").hide();
		   $("#loc").show();
		    $("#exp").show();
			 $("#year").hide();
			   $("#s1").hide();
			   $("#s3").hide();
		   $("#s2").show();
		    $("#s4").hide();
			$("#ASearch").hide();
			$("#ASearch1").hide();
			$("#sme1").show();
			$("#will").show();
	}
	else if(document.getElementById('prof').value == 'human resource'){
		  $("#pro").show();
		  $("#stud").hide();
		   $("#loc").show();
		    $("#exp").show();
			 $("#year").hide();
			 $("#s3").hide();
			   $("#s1").hide();
		   $("#s2").show();
		    $("#s4").hide();
			$("#ASearch").hide();
			$("#ASearch1").hide();
			$("#human1").show();
			$("#will").show();
		   
	}
	else if(document.getElementById('prof').value == 'placement officer'){
		 $("#pro").hide();
		  $("#stud").hide();
		    $("#year").hide();
		   $("#loc").show();
		   $("#exp").show();
		     $("#s1").hide();
			 $("#s3").hide();
		   $("#s2").show();
		    $("#s4").hide();
		 $("#ASearch").hide();
		 $("#ASearch1").hide();
		   $("#place1").show();
		   $("#will").show();
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

$(document).ready(function(){
	/* Onload Hide */
			$("#wille").hide();
			$("#willj").hide();
			$("#willt").hide();
			$("#willt").hide();
			$("#willd").hide();
			$("#willl").hide();
			$("#willn").hide();
			$("#willo").hide();
			$("#willp").hide();
			$("#willi").hide();
			$("#willm").hide();
			$("#willq").hide();
			$("#willr").hide();
			$("#wills").hide();
			$("#willa").hide();
			$("#willb").hide();
			$("#willc").hide();
			$("#willf").hide();
			$("#willg").hide();
			$("#willh").hide();
			$("#willk").hide();
			$("#willu").hide();
			$("#willv").hide();
			/* Onload Hide */
	$('#prof').change(function(){
		if($('#prof').val() == "student"){
			
			if('<?php echo ossn_loggedin_user()->profession == "human resource"?>'){
			$("#wille").show();
			$("#willu").show();
			}
			else if('<?php echo ossn_loggedin_user()->profession == "SME"?>'){
			$("#willj").show();
			$("#willv").show();
			}
			else if('<?php echo ossn_loggedin_user()->profession == "placement officer"?>'){
			$("#willt").show();
			}
			//professional
			$("#willd").hide();
			$("#willl").hide();
			$("#willn").hide();
			$("#willo").hide();
			$("#willp").hide();
			
			//professional end
			//human resource 
			 $("#willi").hide();
			$("#willm").hide();
			$("#willq").hide();
			$("#willr").hide();
			$("#wills").hide();
		
			//human resource end
			//placement officer
			$("#willa").hide();
			$("#willb").hide();
			$("#willc").hide();
			$("#willf").hide();
			$("#willg").hide();
			$("#willh").hide();
			$("#willk").hide();
			//placement officer end
		}
		else if($('#prof').val() == "SME"){
			if('<?php echo ossn_loggedin_user()->profession == "student" ?>'){
			$("#willl").show();
			
			}else if('<?php echo ossn_loggedin_user()->profession == "human resource"?>'){
			$("#willd").show();
			}
			else if('<?php echo ossn_loggedin_user()->profession == "placement officer"?>'){
			$("#willn").show();
			$("#willo").show();
			$("#willp").show();
			}
			//Stud
			$("#wille").hide();
			$("#willj").hide();
			$("#willt").hide();
			//Stud end
			//human resource 
			 $("#willi").hide();
			$("#willm").hide();
			$("#willq").hide();
			$("#willr").hide();
			$("#wills").hide();
			//human resource end
			//placement officer
			 $("#willa").hide();
			$("#willb").hide();
			$("#willc").hide();
			$("#willf").hide();
			$("#willg").hide();
			$("#willh").hide();
			$("#willk").hide();
			//placement officer end
			$("#willu").hide();
			$("#willv").hide();
		}
		 else if($('#prof').val() == "human resource"){
			 if('<?php echo ossn_loggedin_user()->profession == "student" ?>'){
				 $("#willm").show();
			 }
			 else if('<?php echo ossn_loggedin_user()->profession == "SME" ?>'){ 
			 $("#willi").show();
			 }
			 else if('<?php echo ossn_loggedin_user()->profession == "placement officer" ?>'){ 
			$("#willq").show();
			$("#willr").show();
			$("#wills").show();
			 }
			//Stud
			$("#wille").hide();
			$("#willj").hide();
			$("#willt").hide();
			//Stud end
			//professional
			$("#willd").hide();
			$("#willl").hide();
			$("#willn").hide();
			$("#willo").hide();
			$("#willp").hide();
			//professional end
			//placement officer
			$("#willa").hide();
			$("#willb").hide();
			$("#willc").hide();
			$("#willg").hide();
			$("#willh").hide();
			$("#willk").hide();
			//placement officer end
			$("#willu").hide();
			$("#willv").hide();
			
		 }
		 else if($('#prof').val() == "placement officer"){
			 if('<?php echo ossn_loggedin_user()->profession == "student" ?>'){
			 $("#willk").show();
			 }
			  else if('<?php echo ossn_loggedin_user()->profession == "SME" ?>'){ 
			  $("#willf").show();
			 $("#willg").show();
			 $("#willh").show();
			  }
			  else if('<?php echo ossn_loggedin_user()->profession == "human resource"?>'){
			 $("#willa").show();
			 $("#willb").show();
			 $("#willc").show();
			  }
			//Stud
			$("#wille").hide();
			$("#willj").hide();
			$("#willt").hide();
			//Stud end
			//professional
			$("#willd").hide();
			$("#willl").hide();
			$("#willn").hide();
			$("#willo").hide();
			$("#willp").hide();
			$("#willv").hide();
			//professional end
			//human resource 
			 $("#willi").hide();
			$("#willm").hide();
			$("#willq").hide();
			$("#willr").hide();
			$("#wills").hide();
			$("#willu").hide();
			//human resource end
			$("#willu").hide();
			$("#willv").hide();
		 }
	});
});

</script>
<script type="text/javascript">
$(function(){
      $('#willid').change(function(){
		  for($i=0;$i<#willid;$i++){
			 alert ($i);
		  }
        var val = [];
        var val1;
		$("#willidinput").val($('#willid').val());
        $(':checkbox:checked').each(function(i){
          val1 = $(this).val();
			val = val1.split(',');
		  
		 document.getElementById(val).style.display = 'block';
		 document.getElementById(val+"2").style.display = 'block';
		 return true;
		}); 
				  
      }); 
	  $("#willid").change(function(){
        var value = [];
        var value1;
       $(':checkbox:not(:checked)').each(function(i){
          value1 = $(this).val();
		  value = value1.split(',');
		 
		 document.getElementById(value).style.display = 'none';
		 document.getElementById(value+"2").style.display = 'none';
		 return true;
		  }); 		  
      }); 
    });
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
	</div>
	<div class="col-md-2">
		<input type="text" id="filterid" class="form-control" style="width:100%;" name="filter" value="<?php echo $user[filter] ?>" placeholder="<?php echo ossn_print('ossn:search');?>" />
		</div>
		<div class="col-md-1 search1 " id="s1" >
		<input type="submit" value="Search" style="margin-top: -7px;" class="btn btn-primary"  />
		</div>
		<div class="col-md-2" >
	</div>
	</div>
	<div class="row">
		 <div class="col-md-3 search1">
		 </div>
		 
		 <div class="col-md-12 search2 text-center" id="s3">
		<input id="s4" type="submit" value="Search" style="margin-top: -7px;" class="btn btn-primary"  />&emsp;
		 <a value="ASearch" name="" class="color1" onclick="advsearch();" style="color: white;" id="ASearch">Advance Search&nbsp;<i class="fa fa-search" aria-hidden="true"></i></a>
		</div>
		 <div class="col-md-6 search3" >
		 <a  value="ASearch" name="" class="color1" onclick="advsearch();" style="color: white;" id="ASearch1">Advance Search&nbsp;<i class="fa fa-search" aria-hidden="true"></i></a>
		 </div>
		 <div class="col-md-3 search1" >
		 </div>
	</div>
	<div class="row sam2">
	 <div id="pro" style="display:none;">
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
		<div class="row mar1" >
	<div id="stud" style="display:none;">
	
	<div class="col-md-3" >
	</div>
	     <div class="col-md-2">
		<select id="corsid" class="select form-control"  onchange="return showSubCourse(this.value)" name="cors" style="margin-top: -1px;">
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
			</select>
			</div>
		</div>	
	</div>
	<div class="row">
	<div class="col-md-3" >
	</div>
	<div class="col-md-2 " id="loc"  style="display:none;margin-top: -1px;">
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
	<!--Add willing master details-->
				 <div class="col-md-2" id="exp" style="display:none;" >
			<select id="expid" class="select form-control" name="exp">
			<option name="null" value="">-Select Experience-</option>
						<?php foreach($userlist['year'] as $pros): ?>
						 <?php if($pros->years !="" && $pros->years !="0"):?>
							<option value="<?php echo $pros->years; ?>"<?php echo ($user[exp] == $pros->years)? 'selected': '' ?>><?php echo $pros->years; ?></option>
						 	<?php endif; endforeach ; ?>
			</select>
	</div>
			</div> 
				<?php foreach($userlist['willing']as $b):
						$a =explode(',',$b->willing);
					  endforeach;?>	
				<div class="row">
<div class="col-md-3">
	</div>				
	 <div class="col-md-4" id="will" style="display:none;" >
	 <select  id="willid" name="will[]" multiple="multiple">
	 	<!--<///?php foreach($userlist['willing'] as $pros): ?> -->
		 <?php foreach($userlist['human1']as $pros1):?>
		 
		 <?php if($pros1->search_role=="HR" && $pros1->search_for=="SME"):?>
		<option value="<?php echo $pros1->id;?>" id=""><?php echo $pros1->name; ?></option>
		<?php endif; //endforeach; ?>
		
		 <?php if($pros1->search_role=="HR" && $pros1->search_for=="Student"):?>
		<option value="<?php echo $pros1->id;?>" id=""><?php echo $pros1->name; ?></option>
		<?php endif; //endforeach; ?>
		
		 <?php if($pros1->search_role=="HR" && $pros1->search_for=="PO"):?>
		<option value="<?php echo $pros1->id;?>" id=""><?php echo $pros1->name; ?></option>
		<?php endif; //endforeach; ?>
		
		<?php if($pros1->search_role=="Student" && $pros1->search_for=="SME"):?>
		<option value="<?php echo $pros1->id;?>" id=""><?php echo $pros1->name; ?></option>
		<?php endif; //endforeach; ?>
		
		<?php if($pros1->search_role=="Student" && $pros1->search_for=="HR"):?>
		<option value="<?php echo $pros1->id;?>" id=""><?php echo $pros1->name; ?></option>
		<?php endif; //endforeach; ?>
		
		<?php if($pros1->search_role=="Student" && $pros1->search_for=="PO"):?>
		<option value="<?php echo $pros1->id;?>" id=""><?php echo $pros1->name; ?></option>
		<?php endif; //endforeach; ?>
		
		<?php if($pros1->search_role=="SME" && $pros1->search_for=="Student"):?>
		<option value="<?php echo $pros1->id;?>" id=""><?php echo $pros1->name; ?></option>
		<?php endif; //endforeach; ?>
		
		<?php if($pros1->search_role=="SME" && $pros1->search_for=="PO"):?>
		<option value="<?php echo $pros1->id;?>" id=""><?php echo $pros1->name; ?></option>
		<?php endif; //endforeach; ?>
		
		<?php if($pros1->search_role=="SME" && $pros1->search_for=="HR"):?>
		<option value="<?php echo $pros1->id;?>" id=""><?php echo $pros1->name; ?></option>
		<?php endif; //endforeach; ?>
		
		<?php if($pros1->search_role=="PO" && $pros1->search_for=="Student"):?>
		<option value="<?php echo $pros1->id;?>" id=""><?php echo $pros1->name; ?></option>
		<?php endif; //endforeach; ?>
		
		<?php if($pros1->search_role=="PO" && $pros1->search_for=="SME"):?>
		<option value="<?php echo $pros1->id;?>" id=""><?php echo $pros1->name; ?></option>
		<?php endif; //endforeach; ?>
		
		<?php if($pros1->search_role=="PO" && $pros1->search_for=="HR"):?>
		<option value="<?php echo $pros1->id;?>" id=""><?php echo $pros1->name; ?></option>
		<?php endif;endforeach; //endforeach; ?>
		
	</select>
		<?php $check=ossn_html_js(array('src' => ossn_theme_url() . 'vendors/jquery.multiselect.js'));  print_r($check);?>
		<script type="text/javascript">
		 /* $(document).ready(function(){ */
			$('select[multiple]').multiselect({
				columns: 1,
				placeholder: 'Select Willingness'
			}); 
		/* }); */
		</script>
	</div> 
	</div>
		 <div class="row">
	<div class="col-md-5" id="s2" style="display:none;margin-left: 38%;margin-top:1%;margin-bottom:3%;">
<input type="submit" value="Search" style="margin-top: 3px;" class="btn btn-primary"  />
		</div>
		 <div class="col-md-2">
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