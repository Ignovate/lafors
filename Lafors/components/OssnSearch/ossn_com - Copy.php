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
    ossn_trigger_callback('page', 'load:search');
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
            $expt = input('expt');		
            $dom = input('dom');
            $des = input('des');
            $org = input('org');
			$col = input('col');
			$filter = input('filter');
			
            			
						
            $title = ossn_print("search:result", array($query));
            if (empty($type)) {
                $params['type'] = 'users';
            } else {
                $params['type'] = $type;
            }
            $type = $params['type'];
			
            if (ossn_is_hook('search', "type:{$type}")) {
                if(input('q') != "" || input('type') !="")
				{
				$contents['contents'] = ossn_call_hook('search', "type:{$type}", array('q' => input('q') ));
				 
				}
				  else
				  { 
					  $contents['contents'] = ossn_call_hook('advancesearch', "type:{$type}", array('pro' =>input('pro'),'loc'=>input('loc'),'cors'=>input('cors'),'sub'=>input('sub'),'year'=>input('year'),'exp'=>input('exp'),'expt'=>input('expt'),'dom'=>input('dom'),'des'=>input('des'),'org'=>input('org'),'col'=>input('col'),'filter'=>input('filter')));
				  
				 
				  }
					  
				 // passing the parameter to search function
            }
			
            $contents = array('content' => ossn_plugin_view('search/pages/search', $contents),);
			$contents['inputvalue']=array('pro' =>input('pro'),'loc'=>input('loc'),'cors'=>input('cors'),'sub'=>input('sub'),'year'=>input('year'),'exp'=>input('exp'),'expt'=>input('expt'),'dom'=>input('dom'),'des'=>input('des'),'org'=>input('org'),'col'=>input('col'),'filter'=>input('filter'));
			$users = new OssnUser;
			$contents['search']=$users->getUserlist();
			//print_r($contents['inputvalue']);
			
			// set construct the value for search fields
		
            $content = ossn_set_page_layout('search', $contents);
            echo ossn_view_page($title, $content);
            break;
        default:
            ossn_error_page();
            break;
    }
}

ossn_register_callback('ossn', 'init', 'ossn_search');

/* editing by sharp */




