@if (Session::has('error'))
    
<div class="bg-red-500 rounded-sm p-4 mb-4 shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)]">
    <h1 class="text-lg text-white font-semibold">Error!</h1>
    <p class="text-white font-semibold">{{ Session::get('error') }}</p>
</div>
@endif

@if (Session::has('success'))
    
<div class="bg-green-500 rounded-sm p-4 shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)]">
    <h1 class="text-lg text-white font-semibold">Success!</h1>
    <p class="text-white font-semibold">{{ Session::get('success') }}</p>
</div>
@endif