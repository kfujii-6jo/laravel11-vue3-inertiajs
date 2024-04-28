<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InertiaTest;
use App\Http\Requests\StoreInertiaTestRequest;
use Inertia\Inertia;

class InertiaTestController extends Controller
{
    public function index()
    {
        return response()->json(
            [
                "status" => true,
                "inertia_test" => InertiaTest::all(),
            ],
            200
        );
    }
    public function store(Request $request)
    {
        $inertiaTest = new InertiaTest();
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();
        return response()->json(
            [
                "status" => true,
                "message" => "InertiaTest Created successfully",
            ],
            200
        );
    }
}
