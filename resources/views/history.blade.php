@extends('layouts.app')


@section('style')
<style>
    .bag{
        background-image: url("{{asset('images/Summary.png')}}");
        background-repeat: no-repeat;
    background-size: cover;
    }
    input.lgcheck{
    width:20px;
    height: 20px;
    }
</style>
@stop

@section('content')
    <div class="h-screen flex justify-center bg-gray-100">
        <div class="lg:w-4/12 w-full h-screen bag">
            <div class="pb-8 bg-white bg-opacity-25 shadow-sm rounded-xl">
                <div class="p-2 mt-2 ml-4">
                    <p class="text-xl font-bold text-gray-700">
                        <i class="fas fa-align-left"></i>
                         Transaction Summary</p>
                </div>
                
                <div class="mx-10 mt-5 w-6/12 flex justify-end">
                    <div class="px-2 text-lg bg-white w-7/12 font-bold rounded-full border-2 text-bold border-yellow-400 text-gray-700">04/10/2021</div>
                </div>
                <div class="mt-4 mx-8 flex justify-center">
                    <div class="bg-yellow-400">
                        <input type="date" name="" id="">
                        <p>Select Date</p>
                    </div>
                </div>
            </div>
            <div class="mx-2 mt-2">
                

                <div class="px-3 overflow-y-auto" style="height: 475px">
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    
                </div>

            </div>
        </div>

    </div>

    

       



@endsection