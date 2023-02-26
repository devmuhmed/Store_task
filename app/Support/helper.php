<?php

function apiResponse($data = null, $status = 200)
{
    $response = [
        'status' => true,
        'message' => 'success',
        'data' => $data
    ];
    if(!$data == null){
        return response()->json($response,$status);
    }else{
        $status = 400;
        $response = [
            'status' => false,
            'message' => 'Failur'
        ];
        return response()->json($response,$status);
    }
}
