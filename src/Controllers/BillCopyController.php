<?php

namespace BillCopy\BillCopy\Controllers;

use Illuminate\Http\Request;

class BillCopyController
{

    public function getCopyBill(Request $request, $id)
    {
    	$token = config('bill_copy.auth_token');
        if(isset($request['token']) and $request['token'] == $token){
            $model = config('bill_copy.model');
            $primaryKey = config('bill_copy.primary_column');
            $obj = $model::where($primaryKey, $id)->first();
            if($obj){
                $useFunction = config('bill_copy.use_function_for_getter');
                if($useFunction){
                    $useFunction = config('bill_copy.function_name');
                    $functionIsStatic = config('bill_copy.function_is_static');
                    if($functionIsStatic){
                        $path = $model::$useFunction($id);
                    }else{
                        $path = $obj->$useFunction();
                    }
                }
                if(!$path){
                    return 'not found';
                }
                $results = [
                    'result'    => $path
                ];
                $statusCode=200;
                $response = \Response::make($results, $statusCode);
                $response->header('Content-Type', 'application/json');
                return $response;
            }
        }
        return 'token not found';
    }

}
