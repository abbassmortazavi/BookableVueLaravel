<?php

namespace App\Http\Controllers\Admin;

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
}
