<x-layout>

    <section class="panashe bg-blue-950 dark:bg-gray-900 bg-center bg-cover pt-40" style="background-image: url(images/ferari.jpg)">
    </section>
    <header class="bg-gray-100 border-b border-gray-300 w-4/5 mx-auto">
        <div class="max-w-7xl py-10">
            <h1 class="text-3xl font-bold tracking-tight text-blue-900">Sell</h1>
           

        </div>
    </header>
    <main class="panashe">
        <div class="bg-gray-100 w-full md:w-4/5 mx-auto pt-10">
            <!-- Your content -->
            
           

 <div class=" p-6 bg-white w-full">
     <div class="container mx-auto">
     
    <!--    <div class="flex -space-x-4 rtl:space-x-reverse">
            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="http://panashemwamadi.great-site.net/assets/img/team/team-1.jpg" alt="">
            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="http://panashemwamadi.great-site.net/assets/img/team/team-1.jpg" alt="">
            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="http://panashemwamadi.great-site.net/assets/img/team/team-1.jpg" alt="">
            <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+99</a>
        </div>
        -->

    </div>
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center py-10">What are you wanting to sell?</h5>
    </a>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 md:px-24">We understand that auctions can be quite da
        unting for first time attendees however we have taken every measure possible to make the process as easy and enjoya
        ble as possible. Any one of our members of staff will gladly walk you through the process or al
        ternatively you can simply follow the step by step guide detailed below.</p>
    
        <div class="md:flex">
            <ul class="flex flex-col space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
                <li>
                    <a href="#" class="tab-link inline-flex items-center px-4 py-3 text-white bg-blue-900 rounded-lg active w-full dark:bg-blue-900" data-tab="profile" aria-current="page">
                        BUY
                    </a>
                </li>
                <li>
                    <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" data-tab="dashboard">
                        SELL
                    </a>
                </li>
               
                <li>
                    <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" data-tab="contact">
                        Contact
                    </a>
                </li>
                
            </ul>
            <div class="tab-content p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full justify-items-center h-48">
                <div id="profile" class="tab-item">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">BUYING</h3>
                    <p class="mb-2">This is some placeholder content for the Buying tab.</p>
                    <p>The tab JavaScript swaps classes to control the content visibility and styling.</p> 
                </div>
                <div id="dashboard" class="tab-item hidden">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Dashboard Tab</h3>
                    <p class="mb-2">This is some placeholder content for the Dashboard tab.</p>
                </div>
                <div id="settings" class="tab-item hidden">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Settings Tab</h3>
                    <p class="mb-2">This is some placeholder content for the Settings tab.</p>
                </div>
                <div id="contact" class="tab-item hidden">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Contact Tab</h3>
                    <p class="mb-2">This is some placeholder content for the Contact tab.</p>
                </div>
            </div>
        </div>
        
        <script>
            document.querySelectorAll('.tab-link').forEach(tab => {
                tab.addEventListener('click', function(event) {
                    event.preventDefault();
                    const targetTab = this.getAttribute('data-tab');
        
                    // Hide all tab content
                    document.querySelectorAll('.tab-item').forEach(item => {
                        item.classList.add('hidden');
                    });
        
                    // Remove active class from all tabs
                    document.querySelectorAll('.tab-link').forEach(link => {
                        link.classList.remove('active', 'bg-blue-900', 'text-white');
                        link.classList.add('hover:bg-gray-100');
                    });
        
                    // Show the target tab content
                    document.getElementById(targetTab).classList.remove('hidden');
        
                    // Set the current tab as active
                    this.classList.add('active', 'bg-blue-900', 'text-white');
                    this.classList.remove('hover:bg-gray-100');
                });
            });
        </script>
    <div class="w-full mt-10">
        
      </div>
      </div>

         </div>
         
           </main>
           </div>


</x-layout>