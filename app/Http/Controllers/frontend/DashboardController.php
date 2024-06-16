<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $food = Menu::where('category', 'food')->paginate(10);
        $drink = Menu::where('category', 'drink')->paginate(10);
        return view('frontend.index', compact('food', 'drink'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login()
    {
        return view('auth.login');
    }

    public function about()
    {
        $about = 'active';
        return view('frontend.about', compact('about'));
    }

    public function menu()
    {
        $food = Menu::where('category', 'food')->paginate(10);
        $drink = Menu::where('category', 'drink')->paginate(10);
        $menu = 'active';
        return view('frontend.menu', compact('menu','food','drink'));
    }

    public function detail($id)
    {
        $detailId = Crypt::decrypt($id);
        $detail = Menu::find($detailId);
        return view('frontend.detail', compact('detail'));
    }

    public function comment()
    {
        return view('frontend.comment');
    }
}
