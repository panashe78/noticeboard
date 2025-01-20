<!-- resources/views/auctions/create.blade.php -->



<x-layout>
<div class="container mx-auto mt-10">
    <div class="mx-auto">
    <h1>Create Auction</h1>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <fieldset class="border-2 border-t border-red-950 rounded-lg p-4 shadow-md mt-10">
        <legend class="font-bold text-black shadow-md">Add Auction</legend>
    <form action="{{ route('auctions.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
<div class="grid md:grid-cols-3 p-5 w-full gap-4">
        <div class="mb-3">
            <label for="logo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item</label>
            <input type="file" id="logo" name="logo" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="coverphoto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item</label>
            <input type="file" id="coverphoto" name="coverphoto" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="item" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item</label>
            <input type="text" id="item" name="item" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="item" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Type</label>
            <input type="text" id="item" name="item_type" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="starting_bid" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Starting Bid</label>
            <input type="number" id="starting_bid" name="starting_bid" step="0.01" min="0" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="deadline" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
            <input type="datetime-local" id="deadline" name="deadline" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="owner" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Owner</label>
            <input type="text" id="lowner" name="lowner" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="product" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product</label>
            <input type="text" id="product" name="product" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="address" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
            <input type="text" id="address" name="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="phonenumber" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phonenumber</label>
            <input type="text" id="phonenumber" name="phonenumber" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="condition" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">condition</label>
            <input type="text" id="condition" name="condition" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="image" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">image</label>
            <input type="file" id="image" name="images" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="transport" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">transport</label>
            <input type="text" id="transport" name="transport" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">quantity</label>
            <input type="text" id="quantity" name="quantity" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="lifespan" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">lifespan</label>
            <input type="text" id="lifespan" name="lifespan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div class="mb-3">
            <label for="vat" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">vat</label>
            <input type="text" id="lifespan" name="vat" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>

        <div><button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create Auction</button></div>
    </legend>
</fieldset>
</div>

    </form>





  
</div>
</x-layout>