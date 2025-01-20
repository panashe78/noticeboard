<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
    <style>
      .fixed-button {
    position: fixed; /* Fixes the position relative to the viewport */
    top: 20px; /* Adjusts the distance from the top */
    left: 20px; /* Adjusts the distance from the left */
    z-index: 1000; /* Ensures it stays above other elements */
}

.fixed-button button {
    background-color: #007bff; /* Button background color */
    color: white; /* Button text color */
    border: none; /* No border */
    padding: 10px 20px; /* Padding for the button */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
}

.fixed-button button:hover {
    background-color: #0056b3; /* Darker shade on hover */
}
      </style>
</head>
<body>
    
   <div class="fixed-button">
      <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-menu-app" viewBox="0 0 16 16">
            <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h2A1.5 1.5 0 0 1 5 1.5v2A1.5 1.5 0 0 1 3.5 5h-2A1.5 1.5 0 0 1 0 3.5zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5"/>
          </svg>
       </button>
  </div>

<!-- drawer init and show -->

 
 <!-- drawer component -->
 <div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-blue-950 w-64 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label" style="z-index: 1000;">
   <div class="shrink-0">
      <img class="w-10 rounded-full mx-auto" src="https://scontent.fhre2-2.fna.fbcdn.net/v/t39.30808-1/448316575_1226117918705352_3732932396581994997_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=108&ccb=1-7&_nc_sid=f4b9fd&_nc_ohc=IiHYk9Vsg5AQ7kNvgGXkhTT&_nc_zt=24&_nc_ht=scontent.fhre2-2.fna&_nc_gid=A4X5vrskVkhc_G20rcaS7hd&oh=00_AYBXs3VQjBahScdW3N-NagYvjdrThcqa4t8qybjgal-w8A&oe=675DD391" alt="Your Company">
  </div>
     <h5 id="drawer-navigation-label" class="text-base text-white uppercase dark:text-white/75 font-extrabold">Home</h5>
     <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-white/75 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
       <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
       </svg>
       <span class="sr-only">Close menu</span>
    </button>
   <div class="py-4 overflow-y-auto">
       <ul class="space-y-2 font-medium">
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-megaphone" viewBox="0 0 16 16">
                  <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z"/>
                </svg>
                <span class="ms-4 text-white">Auction</span>
             </a>
          </li>
          <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
               <span class="ms-4 text-white">Search</span>
            </a>
         </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z"/>
                </svg>
                <span class="flex-1 ms-4 whitespace-nowrap text-white">My Bids</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                <span class="flex-1 ms-4 whitespace-nowrap text-white">Watched Lots</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-cart" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                </svg>
                <span class="flex-1 ms-4 whitespace-nowrap text-white">Cart</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-bag" viewBox="0 0 16 16">
                  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                </svg>
                <span class="flex-1 ms-4 whitespace-nowrap text-white">Orders</span>
             </a>
          </li>
          <br>
          <br>
         
          
          
          <h1 class="text-white">{{ Auth::user()->name }}
         </h1>

          <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-white/75 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 20 20">
                  <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                  <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                  <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
               </svg>
               <span class="flex-1 ms-4 whitespace-nowrap text-white">Messages</span>
            </a>
         </li>

         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-white/75 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 20 20">
                  <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                  <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                  <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
               </svg>
               <span class="flex-1 ms-4 whitespace-nowrap text-white">Help</span>
            </a>
         </li>

         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-white/75 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 20 20">
                  <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                  <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                  <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
               </svg>
               <span class="flex-1 ms-4 whitespace-nowrap text-white">Terms and Conditions</span>
            </a>
         </li>

         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-white/75 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 20 20">
                  <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                  <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                  <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
               </svg>
               <span class="flex-1 ms-4 whitespace-nowrap text-white">My Account</span>
            </a>
         </li>
       </ul>
    </div>
 </div>
 <!-- Include your HTML structure here -->

<script>
   document.addEventListener('DOMContentLoaded', function () {
       const drawer = document.getElementById('drawer-navigation');
       const showButton = document.querySelector('[data-drawer-show]');
       const hideButton = document.querySelector('[data-drawer-hide]');
   
       // Function to show the drawer
       showButton.addEventListener('click', function () {
           drawer.classList.remove('-translate-x-full'); // Show the drawer
           drawer.classList.add('translate-x-0'); // Remove the hidden state
       });
   
       // Function to hide the drawer
       hideButton.addEventListener('click', function () {
           drawer.classList.remove('translate-x-0'); // Hide the drawer
           drawer.classList.add('-translate-x-full'); // Add the hidden state
       });
   });
   </script>


<nav class="bg-blue-900 h-24 p-5 fixed w-full navbar shadow-md" style="background: linear-gradient(135deg, white 21%, white 21%); z-index: 900;" >
   <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
       <div class="flex h-16 items-center justify-between">
           <div class="flex items-center">
              <a href="/" ><div class="shrink-0">
                   <img class="w-16 rounded-full" src="https://scontent.fhre2-2.fna.fbcdn.net/v/t39.30808-1/448316575_1226117918705352_3732932396581994997_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=108&ccb=1-7&_nc_sid=f4b9fd&_nc_ohc=IiHYk9Vsg5AQ7kNvgGXkhTT&_nc_zt=24&_nc_ht=scontent.fhre2-2.fna&_nc_gid=A4X5vrskVkhc_G20rcaS7hd&oh=00_AYBXs3VQjBahScdW3N-NagYvjdrThcqa4t8qybjgal-w8A&oe=675DD391" alt="Your Company">
               </div></a>
               <div class="hidden md:block">
                   <div class="ml-10 flex items-baseline space-x-96">
                       <x-navbar-link href="/buy" :active="request()->is('buy')"><input type="text" placeholder="search here" class="rounded-md "> </x-navbar-link>
                       
                       <x-navbar-link href="/help" :active="request()->is('help')"><div class="text-red-700"> {{ Auth::user()->name }}</div></x-navbar-link>
                   </div>
               </div>
           </div>
           
           <div class="-mr-2 flex md:hidden">
               <button type="button" id="mobile-menu-toggle" class="relative inline-flex items-center justify-center rounded-md bg-transparent p-2 text-white  hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                   <span class="sr-only">Open main menu</span>
                   <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                   </svg>
                   <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                   </svg>
               </button>
           </div>
       </div>
   </div>
   <div class="sm:hidden xs:hidden md:hidden bg-blue-900/65 rounded-md" id="mobile-menu" class="hidden" >
       <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3" style="z-index: 1000px;">

           <a href="/user/profile" class="block rounded-md  px-3 py-2 text-xs  text-red-700  font-extrabold" aria-current="page">{{ Auth::user()->name }}</a>
           <a href="/user/profile" class="block rounded-md  px-3 py-2 text-xs font-medium text-white" aria-current="page"><input type="text" placeholder="search here" class="rounded-md "></a>
         
       </div>
   </div>
</nav>

<script>
   document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.remove('hidden'); // Make it visible
    } else {
        mobileMenu.classList.add('hidden'); // Hide it
    }
});
</script>


 <div class="grid md:grid-cols-5 md:gap-5 md:mx-auto md:w-3/4 pt-28 ">
   <div class="max-w-sm bg-white border border-gray-200 md:rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 animate__animated animate__fadeIn">
    <div class="h-36 bg-center bg-cover rounded-t-md" style="background-image: url(images/mans1.jpg)">
    
    </div>
      <div class="p-5 justify-items-center">
          
          <p class="mb-3 text-red-700  font-semibold text-xs">FURNITURE</p>
          <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-transparent shadow-md border-t border-red-900 md:rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx-auto">
              more
               <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
          </a>
      </div>
  </div>

  

<div class="max-w-sm bg-white border border-gray-200 md:rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 animate__animated animate__fadeIn">
    <div class="h-36 bg-center bg-cover rounded-t-md" style="background-image: url(images/ferari.jpg)">
    
    </div>
   <div class="p-5">
       
       <p class="mb-3 text-red-700 text-xs font-semibold">VEHICLES</p>
       <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-transparent shadow-md border-t border-red-900 md:rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
         more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
           </svg>
       </a>
   </div>
</div>

      

<div class="max-w-sm bg-white border border-gray-200 md:rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 animate__animated animate__fadeIn">
   <div class="h-36 bg-center bg-cover rounded-t-md" style="background-image: url(images/mans2.jpg)">
    
   </div>
   <div class="p-5">
      
       <p class="mb-3 text-red-700 text-xs  font-semibold">REAL ESTATE</p>
       <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-transparent shadow-md border-t border-red-900 md:rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
           more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
           </svg>
       </a>
   </div>
</div>


<div class="max-w-sm bg-white border border-gray-200 md:rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 animate__animated animate__fadeIn">
    <div class="h-36 bg-center bg-cover rounded-t-md" style="background-image: url(images/elect2.jpg)">
    
    </div>
   <div class="p-5">
      
       <p class="mb-3 text-red-700 text-xs font-semibold">ELECTRONICS</p>
       <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-transparent shadow-md border-t border-red-900 md:rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
           more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
           </svg>
       </a>
   </div>
</div>



<div class="max-w-sm bg-white border border-gray-200 md:rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 animate__animated animate__fadeIn">
    <div class="h-36 bg-center bg-cover rounded-t-md" style="background-image: url(images/more.png)">
    
    </div>
   <div class="p-5">
      
       <p class="mb-3  text-red-700 text-xs font-semibold">OTHER</p>
       <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-transparent shadow-md border-t border-red-900 md:rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
           more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
           </svg>
       </a>
   </div>
</div>

         </div>

         <div class="grid grid-cols-1 md:w-3/4 shadow my-10 mx-auto p-5 h-full">
            <div class="md:flex">
               <ul class="flex flex-col space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
                   <li>
                       <a href="#" class="tab-link inline-flex items-center px-4 py-3 text-white bg-blue-900 rounded-lg active w-full dark:bg-blue-900" data-tab="profile" aria-current="page">
                           Vehicles
                       </a>
                   </li>
                  
                  
                   <li>
                       <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" data-tab="contact1">
                           Electronics
                       </a>
                   </li>
                   <li>
                     <a href="#" class="tab-link inline-flex text-xs items-center px-4 py-3 rounded-lg hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" data-tab="contact2">
                         Real estate
                     </a>
                 </li>
                 <li>
                  <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" data-tab="contact3">
                      Furniture
                  </a>
              </li>
              <li>
               <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" data-tab="contact4">
                  Stationary
               </a>
           </li>
           <li>
            <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" data-tab="contact5">
                Other
            </a>
        </li>
                   
               </ul>
               <div class="tab-content p-6 bg-gray-50 text-medium text-white dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full justify-items-center overflow-scroll bg-cover bg-center" style="background-image: url(images/more.png)">
                   <div id="profile" class="tab-item">
                       <!--tab1-->


                       <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg animate__animated animate__fadeIn" id="profiles-tab" data-tabs-target="#profiles" type="button" role="tab" aria-controls="profile" aria-selected="false">Cars</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg animate__animated animate__fadeIn hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Trucks</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg animate__animated animate__fadeIn hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Car Parts</button>
                            </li>
                            <li role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg animate__animated animate__fadeIn hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Other</button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-tab-content">
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="profiles" role="tabpanel" aria-labelledby="profiles-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the<strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                    </div>
                    <script>
                    document.addEventListener('DOMContentLoaded', function () {
                     const tabs = document.querySelectorAll('[role="tab"]');
                     const tabContents = document.querySelectorAll('[role="tabpanel"]');
                 
                     tabs.forEach(tab => {
                         tab.addEventListener('click', () => {
                             const target = tab.getAttribute('data-tabs-target');
                 
                             // Remove active classes from all tabs and hide all tab contents
                             tabs.forEach(t => {
                                 t.classList.remove('border-b-2', 'border-blue-500', 'text-blue-600');
                                 t.setAttribute('aria-selected', 'false');
                             });
                             tabContents.forEach(content => {
                                 content.classList.add('hidden');
                             });
                 
                             // Add active classes to the clicked tab and show its content
                             tab.classList.add('border-b-2', 'border-blue-500', 'text-blue-600');
                             tab.setAttribute('aria-selected', 'true');
                             document.querySelector(target).classList.remove('hidden');
                         });
                     });
                 });
                 </script>
                       <!--end of tab1-->
                   </div>
                   <div id="contact1" class="tab-item hidden">
               <!--tab2-->

               <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                  <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="new-tab" data-tabs-toggle="#new-tab-content" role="tablist">
                      <li class="me-2" role="presentation">
                          <button class="inline-block p-4 border-b-2 rounded-t-lg animate__animated animate__fadeIn" id="new-profile-tab" data-tabs-target="#new-profile" type="button" role="tab" aria-controls="new-profile" aria-selected="false">Laptops</button>
                      </li>
                      <li class="me-2" role="presentation">
                          <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="new-dashboard-tab" data-tabs-target="#new-dashboard" type="button" role="tab" aria-controls="new-dashboard" aria-selected="false">Mobile Phones</button>
                      </li>
                      <li class="me-2" role="presentation">
                          <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="new-settings-tab" data-tabs-target="#new-settings" type="button" role="tab" aria-controls="new-settings" aria-selected="false">Electronic accessories</button>
                      </li>
                      <li role="presentation">
                          <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="new-contacts-tab" data-tabs-target="#new-contacts" type="button" role="tab" aria-controls="new-contacts" aria-selected="false">Other</button>
                      </li>
                  </ul>
              </div>
              <div id="new-tab-content">
                  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="new-profile" role="tabpanel" aria-labelledby="new-profile-tab">
                      <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">New Profile tab's associated content</strong>.</p>
                  </div>
                  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="new-dashboard" role="tabpanel" aria-labelledby="new-dashboard-tab">
                      <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">New Dashboard tab's associated content</strong>.</p>
                  </div>
                  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="new-settings" role="tabpanel" aria-labelledby="new-settings-tab">
                      <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">New Settings tab's associated content</strong>.</p>
                  </div>
                  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="new-contacts" role="tabpanel" aria-labelledby="new-contacts-tab">
                      <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">New Contacts tab's associated content</strong>.</p>
                  </div>
              </div>

              <script>
              document.addEventListener('DOMContentLoaded', function () {
               const tabs = document.querySelectorAll('#new-tab [role="tab"]');
               const tabContents = document.querySelectorAll('#new-tab-content [role="tabpanel"]');
           
               tabs.forEach(tab => {
                   tab.addEventListener('click', () => {
                       const target = tab.getAttribute('data-tabs-target');
           
                       // Remove active classes from all tabs and hide all tab contents
                       tabs.forEach(t => {
                           t.classList.remove('border-b-2', 'border-blue-500', 'text-blue-600');
                           t.setAttribute('aria-selected', 'false');
                       });
                       tabContents.forEach(content => {
                           content.classList.add('hidden');
                       });
           
                       // Add active classes to the clicked tab and show its content
                       tab.classList.add('border-b-2', 'border-blue-500', 'text-blue-600');
                       tab.setAttribute('aria-selected', 'true');
                       document.querySelector(target).classList.remove('hidden');
                   });
               });
           });

                   </script>    
                       <!--end of tab2-->
                   </div>
                   <div id="contact2" class="tab-item hidden">
                     <!--end of tab3-->
                     <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-cente r" id="second-tab" data-tabs-toggle="#second-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg animate__animated animate__fadeIn" id="second-profile-tab" data-tabs-target="#second-profile" type="button" role="tab" aria-controls="second-profile" aria-selected="false">Houses</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="second-dashboard-tab" data-tabs-target="#second-dashboard" type="button" role="tab" aria-controls="second-dashboard" aria-selected="false">Building Material</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="second-settings-tab" data-tabs-target="#second-settings" type="button" role="tab" aria-controls="second-settings" aria-selected="false">Renting</button>
                            </li>
                            <li role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="second-contacts-tab" data-tabs-target="#second-contacts" type="button" role="tab" aria-controls="second-contacts" aria-selected="false">Other</button>
                            </li>
                        </ul>
                    </div>
                    <div id="second-tab-content">
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="second-profile" role="tabpanel" aria-labelledby="second-profile-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Second Profile tab's associated content</strong>.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="second-dashboard" role="tabpanel" aria-labelledby="second-dashboard-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Second Dashboard tab's associated content</strong>.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="second-settings" role="tabpanel" aria-labelledby="second-settings-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Second Settings tab's associated content</strong>.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="second-contacts" role="tabpanel" aria-labelledby="second-contacts-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Second Contacts tab's associated content</strong>.</p>
                        </div>
                    </div>

                    <script>
                    document.addEventListener('DOMContentLoaded', function () {
                     const tabs = document.querySelectorAll('#second-tab [role="tab"]');
                     const tabContents = document.querySelectorAll('#second-tab-content [role="tabpanel"]');
                 
                     tabs.forEach(tab => {
                         tab.addEventListener('click', () => {
                             const target = tab.getAttribute('data-tabs-target');
                 
                             // Remove active classes from all tabs and hide all tab contents
                             tabs.forEach(t => {
                                 t.classList.remove('border-b-2', 'border-blue-500', 'text-blue-600');
                                 t.setAttribute('aria-selected', 'false');
                             });
                             tabContents.forEach(content => {
                                 content.classList.add('hidden');
                             });
                 
                             // Add active classes to the clicked tab and show its content
                             tab.classList.add('border-b-2', 'border-blue-500', 'text-blue-600');
                             tab.setAttribute('aria-selected', 'true');
                             document.querySelector(target).classList.remove('hidden');
                         });
                     });
                 });
</script>
                     <!--end of tab3-->
                   </div>
                   <div id="contact" class="tab-item hidden">
                        <!--end of tab4-->
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                           <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="third-tab" data-tabs-toggle="#third-tab-content" role="tablist">
                               <li class="me-2" role="presentation">
                                   <button class="inline-block p-4 border-b-2 rounded-t-lg animate__animated animate__fadeIn" id="third-profile-tab" data-tabs-target="#third-profile" type="button" role="tab" aria-controls="third-profile" aria-selected="false">Chairs</button>
                               </li>
                               <li class="me-2" role="presentation">
                                   <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="third-dashboard-tab" data-tabs-target="#third-dashboard" type="button" role="tab" aria-controls="third-dashboard" aria-selected="false">Tables</button>
                               </li>
                               <li class="me-2" role="presentation">
                                   <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="third-settings-tab" data-tabs-target="#third-settings" type="button" role="tab" aria-controls="third-settings" aria-selected="false">Beds</button>
                               </li>
                               <li role="presentation">
                                   <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="third-contacts-tab" data-tabs-target="#third-contacts" type="button" role="tab" aria-controls="third-contacts" aria-selected="false">Other</button>
                               </li>
                           </ul>
                       </div>
                       <div id="third-tab-content">
                           <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="third-profile" role="tabpanel" aria-labelledby="third-profile-tab">
                               <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Third Profile tab's associated content</strong>.</p>
                           </div>
                           <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="third-dashboard" role="tabpanel" aria-labelledby="third-dashboard-tab">
                               <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Third Dashboard tab's associated content</strong>.</p>
                           </div>
                           <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="third-settings" role="tabpanel" aria-labelledby="third-settings-tab">
                               <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Third Settings tab's associated content</strong>.</p>
                           </div>
                           <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="third-contacts" role="tabpanel" aria-labelledby="third-contacts-tab">
                               <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Third Contacts tab's associated content</strong>.</p>
                           </div>
                       </div>
                         <!--end of tab4-->
                   </div>
                   <div id="contact3" class="tab-item hidden">
                        <!--end of tab5-->
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                           <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="fourth-tab" data-tabs-toggle="#fourth-tab-content" role="tablist">
                               <li class="me-2" role="presentation">
                                   <button class="inline-block p-4 border-b-2 rounded-t-lg animate__animated animate__fadeIn" id="fourth-profile-tab" data-tabs-target="#fourth-profile" type="button" role="tab" aria-controls="fourth-profile" aria-selected="false">Chairs</button>
                               </li>
                               <li class="me-2" role="presentation">
                                   <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="fourth-dashboard-tab" data-tabs-target="#fourth-dashboard" type="button" role="tab" aria-controls="fourth-dashboard" aria-selected="false">Tables</button>
                               </li>
                               <li class="me-2" role="presentation">
                                   <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="fourth-settings-tab" data-tabs-target="#fourth-settings" type="button" role="tab" aria-controls="fourth-settings" aria-selected="false">Beds</button>
                               </li>
                               <li role="presentation">
                                   <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="fourth-contacts-tab" data-tabs-target="#fourth-contacts" type="button" role="tab" aria-controls="fourth-contacts" aria-selected="false">Other</button>
                               </li>
                           </ul>
                       </div>
                       <div id="fourth-tab-content">
                           <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="fourth-profile" role="tabpanel" aria-labelledby="fourth-profile-tab">
                               <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Fourth Profile tab's associated content</strong>.</p>
                           </div>
                           <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="fourth-dashboard" role="tabpanel" aria-labelledby="fourth-dashboard-tab">
                               <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Fourth Dashboard tab's associated content</strong>.</p>
                           </div>
                           <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="fourth-settings" role="tabpanel" aria-labelledby="fourth-settings-tab">
                               <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Fourth Settings tab's associated content</strong>.</p>
                           </div>
                           <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="fourth-contacts" role="tabpanel" aria-labelledby="fourth-contacts-tab">
                               <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Fourth Contacts tab's associated content</strong>.</p>
                           </div>
                       </div>

                       <script>
                       document.addEventListener('DOMContentLoaded', function () {
                        const tabs = document.querySelectorAll('#fourth-tab [role="tab"]');
                        const tabContents = document.querySelectorAll('#fourth-tab-content [role="tabpanel"]');
                    
                        tabs.forEach(tab => {
                            tab.addEventListener('click', () => {
                                const target = tab.getAttribute('data-tabs-target');
                    
                                // Remove active classes from all tabs and hide all tab contents
                                tabs.forEach(t => {
                                    t.classList.remove('border-b-2', 'border-blue-500', 'text-blue-600');
                                    t.setAttribute('aria-selected', 'false');
                                });
                                tabContents.forEach(content => {
                                    content.classList.add('hidden');
                                });
                    
                                // Add active classes to the clicked tab and show its content
                                tab.classList.add('border-b-2', 'border-blue-500', 'text-blue-600');
                                tab.setAttribute('aria-selected', 'true');
                                document.querySelector(target).classList.remove('hidden');
                            });
                        });
                    });
                    </script>
                         <!--end of tab5-->
                 </div>
                 <div id="contact4" class="tab-item hidden">
                <!--end of tab6-->
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                  <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="fifth-tab" data-tabs-toggle="#fifth-tab-content" role="tablist">
                      <li class="me-2" role="presentation">
                          <button class="inline-block p-4 border-b-2 rounded-t-lg animate__animated animate__fadeIn" id="fifth-profile-tab" data-tabs-target="#fifth-profile" type="button" role="tab" aria-controls="fifth-profile" aria-selected="false">School Stationary</button>
                      </li>
                      <li class="me-2" role="presentation">
                          <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="fifth-dashboard-tab" data-tabs-target="#fifth-dashboard" type="button" role="tab" aria-controls="fifth-dashboard" aria-selected="false">Office Stationary</button>
                      </li>
                      <li class="me-2" role="presentation">
                          <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="fifth-settings-tab" data-tabs-target="#fifth-settings" type="button" role="tab" aria-controls="fifth-settings" aria-selected="false">Art Stationary</button>
                      </li>
                      <li role="presentation">
                          <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="fifth-contacts-tab" data-tabs-target="#fifth-contacts" type="button" role="tab" aria-controls="fifth-contacts" aria-selected="false">More</button>
                      </li>
                  </ul>
              </div>
              <div id="fifth-tab-content">
                  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="fifth-profile" role="tabpanel" aria-labelledby="fifth-profile-tab">
                      <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Fifth Profile tab's associated content</strong>.</p>
                  </div>
                  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="fifth-dashboard" role="tabpanel" aria-labelledby="fifth-dashboard-tab">
                      <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Fifth Dashboard tab's associated content</strong>.</p>
                  </div>
                  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="fifth-settings" role="tabpanel" aria-labelledby="fifth-settings-tab">
                      <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Fifth Settings tab's associated content</strong>.</p>
                  </div>
                  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="fifth-contacts" role="tabpanel" aria-labelledby="fifth-contacts-tab">
                      <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Fifth Contacts tab's associated content</strong>.</p>
                  </div>
              </div>

              <script>
               document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('#fifth-tab [role="tab"]');
    const tabContents = document.querySelectorAll('#fifth-tab-content [role="tabpanel"]');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-tabs-target');

            // Remove active classes from all tabs and hide all tab contents
            tabs.forEach(t => {
                t.classList.remove('border-b-2', 'border-blue-500', 'text-blue-600');
                t.setAttribute('aria-selected', 'false');
            });
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });

            // Add active classes to the clicked tab and show its content
            tab.classList.add('border-b-2', 'border-blue-500', 'text-blue-600');
            tab.setAttribute('aria-selected', 'true');
            document.querySelector(target).classList.remove('hidden');
        });
    });
});

               </script>
                <!--end of tab6-->
              </div>
              <div id="contact5" class="tab-item hidden">
           <!--end of tab7-->
           <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="sixth-tab" data-tabs-toggle="#sixth-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg animate__animated animate__fadeIn" id="sixth-profile-tab" data-tabs-target="#sixth-profile" type="button" role="tab" aria-controls="sixth-profile" aria-selected="false">Goods</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="sixth-dashboard-tab" data-tabs-target="#sixth-dashboard" type="button" role="tab" aria-controls="sixth-dashboard" aria-selected="false">Home Supplys</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="sixth-settings-tab" data-tabs-target="#sixth-settings" type="button" role="tab" aria-controls="sixth-settings" aria-selected="false">Office Supplys</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 animate__animated animate__fadeIn" id="sixth-contacts-tab" data-tabs-target="#sixth-contacts" type="button" role="tab" aria-controls="sixth-contacts" aria-selected="false">Other</button>
                </li>
            </ul>
        </div>
        <div id="sixth-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="sixth-profile" role="tabpanel" aria-labelledby="sixth-profile-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Sixth Profile tab's associated content</strong>.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="sixth-dashboard" role="tabpanel" aria-labelledby="sixth-dashboard-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Sixth Dashboard tab's associated content</strong>.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="sixth-settings" role="tabpanel" aria-labelledby="sixth-settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Sixth Settings tab's associated content</strong>.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 h-96" id="sixth-contacts" role="tabpanel" aria-labelledby="sixth-contacts-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the <strong class="font-medium text-gray-800 dark:text-white">Sixth Contacts tab's associated content</strong>.</p>
            </div>
        </div>

        <script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('#sixth-tab [role="tab"]');
    const tabContents = document.querySelectorAll('#sixth-tab-content [role="tabpanel"]');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-tabs-target');

            // Remove active classes from all tabs and hide all tab contents
            tabs.forEach(t => {
                t.classList.remove('border-b-2', 'border-blue-500', 'text-blue-600');
                t.setAttribute('aria-selected', 'false');
            });
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });

            // Add active classes to the clicked tab and show its content
            tab.classList.add('border-b-2', 'border-blue-500', 'text-blue-600');
            tab.setAttribute('aria-selected', 'true');
            document.querySelector(target).classList.remove('hidden');
        });
    });
});
         </script>
            <!--end of tab7-->
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
   
         </div>
         
</body>
</html>