<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidationController;
use Illuminate\Http\Request;
use DB;
use view;
use Input;
use Sentinel;
use App\Models\InqueryMessage;
use App\Models\SupplierQuery;


class AllActionController extends Controller
{
     public function manage_action(Request $request, $action_name)
    {
    	/*
        Status list
        ------------
            0 = all status
            1 = Pending
            2 = Approved
            3 = Rejected
            4 = Completed
            5 = Closed
        */
        
        if($action_name == 'post_again'){
        	if(SupplierQuery::where('id',$request->inqID)->update(['status'=>1])){
        		return 1;
        	}else{
        		return 0;
        	}
        }
        if($action_name == 'query_close'){
        	if(SupplierQuery::where('id',$request->inqID)->update(['status'=>5])){
        		return 1;
        	}else{
        		return 0;
        	}
        }
    }
}
