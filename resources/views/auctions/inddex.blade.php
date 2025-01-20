<!-- resources/views/auctions/index.blade.php -->




<!-- resources/views/auctions/index.blade.php -->
<x-layout>
<!-- Button to be fixed on the screen -->
@if(Auth::check() && Auth::user()->role === 'admin')
<a href="{{ route('auctions.create') }}" class="btn btn-primary mb-3"><button class="floating-button">Create New Auction</button></a>
@endif
<style>
    .floating-button {
    position: fixed; /* Fixes the button in place */
    bottom: 20px; /* Distance from the bottom */
    right: 20px; /* Distance from the right */
    background-color: #007bff; /* Button background color */
    color: white; /* Text color */
    border: none; /* No border */
    border-radius: 5px; /* Rounded corners */
    padding: 10px 20px; /* Padding */
    font-size: 16px; /* Font size */
    cursor: pointer; /* Change cursor to pointer on hover */
    z-index: 1000; /* Ensure the button is above other content */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Optional shadow for effect */
}

.floating-button:hover {
    background-color: #0056b3; /* Darker shade on hover */
}
    </style>
    <script>
        document.querySelector('.floating-button').addEventListener('click', function() {
            window.location.href = '/admin/items/create'; // Change URL to your desired link
        });
    </script>
    <div class="container md:mx-auto mt-36 md:text-center md:p-10">
        <h1 class="font-bold text-center">Active Auctions</h1>
        
        <div class="grid grid-cols-1 gap-4">
            @foreach ($auctions as $auction)
                <div class="shadow-md border-t-2 border-blue-500 p-1">
                    
                    
                       
                    <a href="{{ route('auctions.show', $auction) }}" class=" font-sans text-lg font-extrabold text-blue-600 px-4"><div class="h-20 w-20 rounded-full bg-cover bg-center" style="background-image: url(storage/{{ $auction->logo }})"></div><div><p>View Item</p></div></a>

                    <div class="grid grid-cols-1 md:grid-cols-3 ">
                       

                        <div class="px-4 font-medium rounded-full"><p><b>Starting Bid</b><br> {{ $auction->starting_bid }}</p></div>
                        <div  class="px-4 font-bold rounded-full"><p><b>Current Bid</b><br> {{ $auction->current_bid }}</p></div>
                        <div  class="px-4 font-bold rounded-full"><p><b>Deadline   </b><br> {{ $auction->deadline }}</p></div>
                        <div></div>
                        <div>
                           
                        </div>
                        <div> </div>
                        <div></div>
                        <div>
                            @if ($auction->is_active && now()->isBefore($auction->deadline))
                                <div class="countdown font-extrabold py-5 text-red-900 px-5" data-deadline="{{ $auction->deadline }}"></div>
                                <div class="bidding-form">
                                    
                                </div>
                              
                           
                             
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

            
        </div>
    </div>   


   
</x-layout>

    <script>
        document.querySelectorAll('.countdown').forEach(function(element) {
            const deadline = new Date(element.getAttribute('data-deadline')).getTime();
            const biddingForm = element.closest('.grid').querySelector('.bidding-form'); // Locate the bidding form
    
            const countdownInterval = setInterval(function() {
                const now = new Date().getTime();
                const distance = deadline - now;
    
                // Calculate time components
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
                // Display result
                element.innerHTML = `<div class="bg-black inline-block rounded-md px-2 text-white text-xs">${days}days</div> <div class="bg-gray-200 inline-block rounded-md px-2 text-xs">${hours}hrs</div> <div class="bg-black inline-block rounded-md px-2 text-white text-xs">${minutes}min</div> <div class="bg-gray-200 inline-block rounded-md px-2 text-xs">${seconds}secs</div>`;
    
                // If the countdown is finished, hide the bidding form and show auction ended message
                if (distance < 0) {
                    clearInterval(countdownInterval);
                    element.innerHTML = "Auction has ended.";
                    if (biddingForm) {
                        biddingForm.style.display = 'none'; // Hide the bidding form
                    }
                }
            }, 1000);
        });
    </script>