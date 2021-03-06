<?php

namespace App\Http\Controllers;

use App\Seller;
use App\City;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Seller\StoreRequest;
use App\Http\Requests\Seller\UpdateRequest;
use Exception;
use Illuminate\Support\Facades\Cache;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $type = $request->input('type');
        $search = $request->input('search');

        $sellers = Seller::with(['city'])
            ->searchfor($type, $search)->paginate(10);

        return view('sellers.index', compact( 'sellers', 'type', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Seller $seller
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Seller $seller)
    {
        $cities = City::all();
        $seller = new Seller();

        return view('sellers.create', compact('cities', 'seller'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $seller = new Seller();
        $seller->name = $request->input('name');
        $seller->last_name = $request->input('last_name');
        $seller->full_name = $seller->name . ' ' . $seller->last_name;
        $seller->document_type = $request->input('document_type');
        $seller->document = $request->input('document');
        $seller->email = $request->input('email');
        $seller->phone = $request->input('phone');
        $seller->city_id = $request->input('city_id');
        $seller->address = $request->input('address');

        $seller->save();

        Cache::forget('sellers');

        return redirect()->route('sellers.index')->with('info', 'Seller successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param Seller $seller
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Seller $seller, Product $product)
    {
        $cities = City::all();

        return view('sellers.show',  compact('cities', 'seller', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Seller $seller
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Seller $seller)
    {
        $cities = City::all();

        return view('sellers.edit',  compact('cities', 'seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Seller $seller
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRequest $request, Seller $seller)
    {
        $seller->name = $request->input('name');
        $seller->last_name = $request->input('last_name');
        $seller->full_name = $seller->name . ' ' . $seller->last_name;
        $seller->document_type = $request->input('document_type');
        $seller->document = $request->input('document');
        $seller->email = $request->input('email');
        $seller->phone = $request->input('phone');
        $seller->city_id = $request->input('city_id');
        $seller->address = $request->input('address');

        $seller->save();

        Cache::forget('sellers');

        return redirect()->route('sellers.index')->with('info', 'Seller successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Seller $seller
     * @return \Illuminate\Http\RedirectResponse
     * @throws Exception
     */
    public function destroy(Seller $seller)
    {
        $seller->delete();

        Cache::forget('sellers');

        return redirect()->route('sellers.index')->with('info', 'Seller successfully deleted.');
    }
}

