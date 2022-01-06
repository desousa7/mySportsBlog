@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Posts
        </h1>
    </div>
</div>


<div class ="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2017/01/06/22/48/old-trafford-1959155_960_720.jpg" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
        Manchester United Slump...agian!
        </h2>

        <span class="text-gray-500">
            By&nbsp;<span class="font-bold italic text-gray-800">Reuben De Sousa</span>&nbsp;,1 day ago
        </span>

        <p class="text-xl text-gray-700 pt-8 leading-8 font-light">
            Manchester United have slumped to another defeat in the Premier League as they lose at
            home to Wolverhampton Wanderers 0-1. New interim boss Ralf Rangnick said that, "Performances
            need to get better and we need to be more physically present." Fans at Old Trafford have been 
            unhappy with performances under the new boss and his tactics are already being questioned.
        </p>


    </div>
</div>

@endsection