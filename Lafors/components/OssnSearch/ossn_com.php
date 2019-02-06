<?php


define('__OSSN_SEARCH__', ossn_route()->com . 'OssnSearch/');
require_once(__OSSN_SEARCH__ . 'classes/OssnSearch.php');

function ossn_search() {
    ossn_register_page('search', 'ossn_search_page');
    ossn_add_hook('search', "left", 'search_menu_handler');

    ossn_extend_view('css/ossn.default', 'css/search');
}

function search_menu_handler($hook, $type, $return) {
    $return[] = ossn_view_menu('search');
    return $return;
}
/* Edited by sharp */
function ossn_search_page($pages) {
    $page = $pages[0];
    if (empty($page)) {
        $page = 'search';
    }
    
    switch ($page) {
        case 'search':
	// to get the input
           $query = input('q');
            $type = input('type');
			$pro = input('pro');	
			$loc = input('loc');
            $cors = input('cors');
			$sub = input('sub');
			$year = input('year');
            $exp = input('exp');
            $fun = input('fun');		
            $ind = input('ind');
			$will = implode(',',input('will'));
			//$des = input('des');
            $org = input('org');
			$col = input('col');
			$filter = input('filter');
			$lafors_category = input('lafors_category'); 
            			
				ossn_trigger_callback('page', 'load:search');
          
            if (empty($type)) {
                $params['type'] = 'users';
            } else {
                $params['type'] = $type;
            }
            $type = $params['type'];
			
            if (ossn_is_hook('search', "type:{$type}")) {
				if(input('lafors_category') != ""){
					
					$title = ossn_print("search:result", array($lafors_category));
					$type = "groups";
					$contents['contents'] = ossn_call_hook('search', "type:{$type}", array('q' => input('q'),'lafors_category'=> input('lafors_category')));
					 $contents = array('content' => ossn_plugin_view('search/pages/groupsearch', $contents),);
					$contents['lafors']=array('lafors_category'=> input('lafors_category'));
		
            $content = ossn_set_page_layout('groupsearch', $contents);
            echo ossn_view_page($title, $content);

				} 
			else if(input('q') != "")
				{
					  $title = ossn_print("search:result", array($query));
				$contents['contents'] = ossn_call_hook('search', "type:{$type}", array('q' => input('q')));
		
		
            $content = ossn_set_page_layout('search', $contents);
            echo ossn_view_page($title, $content);
				}
			
				  else
				  { 
			  
			  $title = ossn_print("search:result","Advance Search");
					  $contents['contents'] = ossn_call_hook('advancesearch', "type:{$type}", array('pro' =>input('pro'),'loc'=>input('loc'),'cors'=>input('cors'),'sub'=>input('sub'),'year'=>input('year'),'will'=>implode(',',input('will')),'exp'=>input('exp'),'fun'=>input('fun'),'ind'=>input('ind'),'org'=>input('org'),'col'=>input('col'),'filter'=>input('filter')));
				  
				  $contents = array('content' => ossn_plugin_view('search/pages/search', $contents),);
			$contents['inputvalue']=array('pro' =>input('pro'),'loc'=>input('loc'),'will'=>implode(',',input('will')),'cors'=>input('cors'),'sub'=>input('sub'),'year'=>input('year'),'exp'=>input('exp'),'fun'=>input('fun'),'ind'=>input('ind'),'des'=>input('des'),'org'=>input('org'),'col'=>input('col'),'filter'=>input('filter'));
			
			$users = new OssnUser;
			$contents['search']=$users->getUserlist();
			//print_r($contents['search']);
			//print_r($contents['inputvalue']);
			
			// set construct the value for search fields
		
            $content = ossn_set_page_layout('search', $contents);
            echo ossn_view_page($title, $content);
				  }
			  
				 // passing the parameter to search function
            }
			
           
            break;
        default:
            ossn_error_page();
            break;
    }
}

ossn_register_callback('ossn', 'init', 'ossn_search');

/* editing by sharp */




