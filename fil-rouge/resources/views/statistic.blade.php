@extends('dashboard')
@section('content-statistic')

<!-- Remove class [ h-64 ] when adding a card block -->
<div class="container mx-auto py-10 h-64 md:w-4/5 w-11/12 px-6">
    <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
    <div class="w-full h-full rounded ">
        <!-- Place your content here -->
        <div class="grid lg:grid-cols-3 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-1 xl:grid-cols-4 ">
            <div class="w-30 h-20 rounded-lg bg-indigo-400">50</div>
            <div class="w-30 h-20 rounded-lg bg-emerald-700">50</div>
            <div class="w-30 h-20 rounded-lg bg-lime-600">50</div>
            



        </div>
    </div>
</div>
@endsection