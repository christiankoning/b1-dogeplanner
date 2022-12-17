<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Product;
use App\Models\PunchCard;
use App\Models\User;
use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Cashier\Charge\ChargeItemBuilder;
use Laravel\Cashier\Http\RedirectToCheckoutResponse;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all(['*', DB::raw('price - (price * (discount / 100)) as new_price')]);
        return view('/orders.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('orders/create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreorderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderRequest $request)
    {
        $user = User::find(Auth::id());
        /** This code has been commented out due to the inability to actually test the outcome
        of the transaction. In theory this should work. */

        $ceilValue = ceil((float)$request->Price);

        $item = new ChargeItemBuilder($user);
        $item->unitPrice(money(intval($ceilValue), 'EUR'));
        $item->description($request->Description);
        $chargeItem = $item->make();

        $result = $user->newCharge()
            ->addItem($chargeItem)
            ->create();

        if(is_a($result,RedirectToCheckoutResponse::class)){
            $punchCard = new PunchCard();
            $punchCard -> progress = 0;
            $punchCard->limit=10;
            $punchCard->id_user = $user->Id;

            $punchCard->Save();
            return $result;
        }

        $punchCard = new PunchCard();
        $punchCard -> progress = 0;
        $punchCard->limit=10;
        $punchCard->id_user = $user->Id;

        $punchCard->Save();

        return back()->with('status', 'Bedankt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderRequest  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderRequest $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
