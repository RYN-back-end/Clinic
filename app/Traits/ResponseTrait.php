<?php
namespace App\Traits;

trait ResponseTrait
{

    public function addResponse($message = "Data Added Successfully")
    {
        return [
            'message' => $message,
            'status'  => 200,
        ];
    }

    public function updateResponse($message = "Data Updated Successfully")
    {
        return [
            'message' => $message,
            'status'  => 200,
        ];
    }

    public function deleteResponse($message = "Data Deleted Successfully")
    {
        return [
            'message' => $message,
            'status'  => 200,
        ];
    }


}
