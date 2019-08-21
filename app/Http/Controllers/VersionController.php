<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Version;

use App\Http\Resources\VersionResource as VersionResource;

class VersionController extends Controller
{
    public function index()
    {
    	$version = Version::first();

    	return new VersionResource($version);
    }
}
