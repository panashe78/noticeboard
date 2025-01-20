<x-layout>
    
    <div class="container mx-auto p-6 mt-20 md:w-1/3">
        <h1 class="text-2xl font-bold mb-6">Edit Profile</h1>
        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('POST')
    
            <div class="form-group">
                <label for="profile_photo" class="block text-sm font-medium text-gray-700">Profile Picture</label>
                <input type="file" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500" id="profile_photo" name="profile_photo">
            </div>
    
            <div class="form-group">
                <label for="cover_photo" class="block text-sm font-medium text-gray-700">Cover Photo</label>
                <input type="file" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500" id="cover_photo" name="cover_photo">
            </div>

            <div class="form-group">
                <label for="national_id_photo" class="block text-sm font-medium text-gray-700">National id Photo</label>
                <input type="file" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500" id="national_id_photo" name="national_id_photo">
            </div>
    
            <div class="form-group">
                <label for="national_id" class="block text-sm font-medium text-gray-700">National ID</label>
                <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500" id="national_id" name="national_id" value="{{ old('national_id', Auth::user()->national_id) }}">
            </div>
    
            <div class="form-group">
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500" id="address" name="address" value="{{ old('address', Auth::user()->address) }}">
            </div>
    
            <div class="form-group">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500" id="phone" name="phone_number" value="{{ old('phone_number', Auth::user()->phone_number) }}">
            </div>
    
            <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Update Profile</button>
        </form>
    </div>
    
</x-layout>