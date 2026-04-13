<?php

namespace VendorName\PackageName\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PackageController extends Controller
{
    /**
     * Display the package index page.
     */
    public function index(Request $request)
    {
        return view('package-name::index');
    }
}
