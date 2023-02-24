<?php

function successResponse($data = null, $message = 'Success', $status = 200)
{
    $response = [
        'status' => true,
        'message' => $message,
        'data' => $data
    ];
    return response()->json($response,$status);
}

function failedResponse($message='Failure', $status = 400)
{
    $response = [
        'status' => false,
        'message' => $message
    ];
    return response()->json($response,$status);
}
