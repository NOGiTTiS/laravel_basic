<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list()
    {
        return response()->json(['customers' => 'Customer list']);
    }

    public function detail($id)
    {
        return response()->json(['customer' => 'Customer detail' . $id]);
    }

    public function create(Request $requset)
    {
        return response()->json(['customer' => 'Customer create' . $requset->name]);
    }

    public function update(Request $requset, $id)
    {
        return response()->json(['customer' => 'Customer update' . $id . '' . $requset->name]);
    }

    public function delete($id)
    {
        return response()->json(['customer' => 'Customer delete' . $id]);
    }
}