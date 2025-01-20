<!-- resources/views/auctions/show.blade.php -->



<x-layout>
    <div class=" h-16 floating-button">  
    
    @if ($auction->is_active && now()->isBefore($auction->deadline))
      
    <form action="{{ route('bids.store', $auction) }}" method="POST" class="m-5 inline-block">
        @csrf
        <div class="input-group mb-3">
            <input type="number" class="rounded-md px-3 text-red-900 w-full" name="amount" min="{{ $auction->current_bid + 0.01 }}" step="0.01" required>
            <button class="bg-red-900 rounded-md px-3 text-white w-full" type="submit">Place Bid</button>
        </div>
    </form>

@else
    <p>auction  has ended. No more bids are accepted.</p>
@endif
    </div>
    <style>
        .floating-button {
        position: fixed; /* Fixes the button in place */
        bottom: 50px; /* Distance from the bottom */
        right: 20px; /* Distance from the right */
   
        color: white; /* Text color */
        border: none; /* No border */
        border-radius: 5px; /* Rounded corners */
        padding: 10px 20px; /* Padding */
        font-size: 16px; /* Font size */
        cursor: pointer; /* Change cursor to pointer on hover */
        z-index: 1000; /* Ensure the button is above other content */
  
    }
    
    
        </style>
<div class="container pt-36">
    <h1 class="text-3xl font-extrabold text-blue-500 text-center">{{ $auction->item }}</h1>
</div>
<div class="grid md:grid-cols-3 md:w-4/5 mx-auto">
    <div class=" h-96   md:p-2 w-full max-w-md mx-auto p-1 bg-white/0 border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 bg-cover bg-center" style="background-image: url(/storage/{{ $auction->logo }})"></div>
    <div class=" h-96   md:p-2 w-full max-w-md mx-auto p-1 bg-white/0 border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 bg-cover bg-center" style="background-image: url(/storage/{{ $auction->images }})"></div>
    <div class=" h-96   md:p-2 w-full max-w-md mx-auto p-1 bg-white/0 border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 bg-cover bg-center" style="background-image: url(/storage/{{ $auction->coverphoto }})"></div>

</div>

<div class="md:grid grid-cols-4 gap-5 gap-y-5 md:p-10 border-2 border-blue-500 mt-5">
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Starting Bids:</strong> {{ $auction->starting_bid }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"> <p><strong>Current Bid:</strong> {{ $auction->current_bid }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"> <p><strong>Deadline:</strong> {{ $auction->deadline }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Status:</strong> {{ $auction->is_active ? 'Active' : 'Ended' }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Condition:</strong> {{ $auction->condition }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Owners Number:</strong> {{ $auction->phonenumber }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Vat:</strong> {{ $auction->vat }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Transport Fee:</strong> {{ $auction->transport }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Owner"s Address:</strong> {{ $auction->address }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Name of Owner:</strong> {{ $auction->lowner }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Type of product:</strong> {{ $auction->product }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Estimated Lifespan:</strong> {{ $auction->lifespan }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Quantity:</strong> {{ $auction->quantity }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Created At:</strong> {{ $auction->created_at }}</p></div>
    <div class=" h-20   md:p-2 w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"><p><strong>Deadline:</strong> {{ $auction->deadline }}</p></div>
    <div class=" h-16  border-red-800/0 md:p-5 w-full max-w-md mx-auto p-4 bg-white/0 border border-gray-200 rounded-lg  sm:p-8 dark:bg-gray-800 dark:border-gray-700">  
        
</div>



</div>
<fieldset class="border p-4 rounded-lg">
    <legend class="text-lg font-semibold text-gray-700">Recent Bids</legend>
<ul>


    <div class="grid grid-cols-3">
    @foreach ($auction->bids as $bid)
        
   
        <div class="w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white"></h5>
                
           </div>
           <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="/images/mans1.jpg" alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    {{ $bid->amount }}
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    {{ $bid->user->name }} 
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ $bid->created_at }}
                            </div>
                        </div>
                    </li>
                    
                </ul>
           </div>
        </div>
       
    @endforeach
    </div>
</ul>
</fieldset>

</x-layout>