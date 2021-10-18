<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bookable;
use Illuminate\Http\Request;

class BookableController extends Controller
{
    public function all()
    {
        $bookables = Bookable::all();
        return $bookables;
    }
    public function getBookable($id)
    {
        $res = Bookable::findOrFail($id);
        if ($res){
            return $res;
        }
        return response()->json('Not Found' , 500);
    }
}
