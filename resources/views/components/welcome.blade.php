

 <div class="grid md:grid-cols-2 md:full p-5 bg-cover bg-center md:mx-auto" style="background-image: url(/storage/{{ Auth::user()->cover_photo }})">
    <div class=" h-96   md:p-2 w-full max-w-md mx-auto p-1 bg-white/0 border border-gray-200 rounded-lg shadow-lg sm:p-8 dark:bg-gray-800 dark:border-gray-700 bg-cover bg-center" style="background-image: url(/storage/{{ Auth::user()->national_id_photo }})"></div>

    <div class=" h-96   md:p-2 w-full max-w-md mx-auto p-1 bg-white/0 border border-gray-200 rounded-lg shadow-lg sm:p-8 dark:bg-gray-800 dark:border-gray-700 bg-cover bg-center" style="background-image: url(/storage/{{ Auth::user()->cover_photo }})"></div>
    <div class=" h-36 w-36  md:p-2  max-w-md ml-20 p-1 bg-white/0 border border-gray-200 rounded-full shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700 bg-cover bg-center  -mt-20" style="background-image: url(/storage/{{ Auth::user()->profile_photo }})"></div>

</div>

<div class="md:grid grid-cols-4 gap-5 gap-y-5 md:p-10 border-2 rounded-md border-gray-200 mt-5 mx-2">
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>User Name:</strong>{{ Auth::user()->name }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"> <p><strong>User Email:</strong> {{ Auth::user()->email }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"> <p><strong>Created At:</strong> {{ Auth::user()->created_at }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>User Id:</strong> {{ Auth::user()->id }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>National Id:</strong> {{ Auth::user()->national_id }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Phone Number:</strong>{{ Auth::user()->phone_number }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Address:</strong>{{ Auth::user()->address }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Role:</strong> {{ Auth::user()->role }}</p></div>
        
</div>



<?php

use Illuminate\Support\Facades\DB;

// Fetch bids along with the auction names
$bids = DB::table('bids')
    ->join('auctions', 'bids.auction_id', '=', 'auctions.id')
    ->select('bids.*', 'auctions.item as auction_item') // Select necessary fields
    ->get();

// Loop through the bids and display the auction names



?>


<fieldset class="border p-4 rounded-lg m-2">
    <legend class="text-lg font-semibold text-gray-700">My previous bids</legend>
<ul>


    <div class="grid md:grid-cols-3 gap-2">
    @foreach ($bids as $bid)
        
   
        <div class="w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white"></h5>
                
           </div>
           <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-6 h-10 rounded-full" src="/storage/{{ Auth::user()->cover_photo }}" alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Bid ID: {{ $bid->id }} 
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    Auction Name:  {{ $bid->auction_item }}
                                </p>
                            </div>
                            <div class="inline-flex items-center text-xs font-thin  text-gray-900 dark:text-white">
                                {{ $bid->created_at }}
                            </div>
                        </div>
                    </li>
                    
                </ul>
           </div>
        </div>
       
    @endforeach

</ul>
</fieldset>


</div>
</div>