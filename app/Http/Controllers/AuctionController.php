<?php

// app/Http/Controllers/AuctionController.php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuctionController extends Controller
{

    // app/Http/Controllers/AuctionController.php

public function show(Auction $auction)
{
    return view('auctions.show', compact('auction'));
}

    public function index()
{
    $auctions = Auction::where('is_active', true)->get();
    return view('auctions.inddex', compact('auctions'));
}
    public function create()
    {
        return view('auctions.create'); // View for creating an auction
    }

    public function store(Request $request)
    {
        $logo = $request->file('logo')->store('uploads','public');
        $image = $request->file('images')->store('uploads','public');
        $coverphoto = $request->file('coverphoto')->store('uploads','public');

        $request->validate([
            'item' => 'required|string|max:255',
             'item_type' => 'required|string|max:255',
            'starting_bid' => 'required|numeric|min:0',
            'deadline' => 'required|date|after:now',
            'images' => 'required|file|mimes:jpeg,png,jpg,gif|max:20480', // 20 MB
            'logo' => 'required|file|mimes:jpeg,png,jpg,gif|max:20480', // 20 MB
            'coverphoto' => 'required|file|mimes:jpeg,png,jpg,gif|max:20480', // 20 MB
        ]);

        Auction::create([
            'item' => $request->item,
            'item_type' => $request->item_type,
            'starting_bid' => $request->starting_bid,
            'current_bid' => $request->starting_bid, // Set current bid to starting bid
            'user_id' => Auth::id(),
            'deadline' => $request->deadline,
            'coverphoto' => $coverphoto,
            'logo' => $logo,
            'images' => $image,
            'product' => $request->product,
            'address' => $request->address,
            'phonenumber' => $request->phonenumber,
            'condition' => $request->condition,
            'Vat' => $request->vat,
            'transport' => $request->transport,
            'quantity' => $request->quantity,
            'lifespan' => $request->lifespan,
            'lowner' => $request->lowner,
        ]);

        return redirect()->route('auctions.index')->with('success', 'Auction created successfully!');
    }
}


