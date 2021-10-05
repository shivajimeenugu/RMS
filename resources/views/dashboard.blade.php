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
            <div class="pb-4">
                <div class="p-2 mt-2 ml-4">
                    <p class="text-xl font-bold text-gray-700">
                        {{-- <i class="fas fa-arrow-left"></i> --}}
                        <i class="fas fa-align-left"></i>
                         Transaction Summary</p>
                </div>
                <div class="mx-10 mt-5">
                    <input type="Int" name="amount" id="" placeholder="Amount" class="px-4 py-4  text-lg placeholder-gray-600 font-bold rounded-lg border text-bold border-blue-400 text-gray-600 w-full">  
                </div>
                <div class="mt-4 mx-8 flex justify-center">
                    <input type="text" name="title" id="title" placeholder="Item Details" class="px-2 py-2 border border-blue-400 placeholder-gray-600 font-bold pl-5  rounded w-8/12">
                </div>
            </div>
            <div class="mx-5">
                <div class="">
                    <div class="flex justify-between p-3">
                        <div class="flex items-center justify-center">
                            <img src="{{asset('images/Vector.svg')}}" alt="" class="mr-2">
                            <p class="text-lg font-bold">Roommates</p>
                        </div>
                        <div class="flex items-center">
                            <Label for="check" class="text-lg font-bold mr-1">ALL</Label>
                            <input type="checkbox" name="all" id="all" class="lgcheck">
                        </div>
                    </div>
                </div>
                <div class="px-3 overflow-y-auto" style="height: 300px">
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                    <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</div>
                    </div>
                </div>
                <div class="" style="height: 100px">
                    <div class="">
                        <div class="bg-white rounded-2xl border border-blue-600 p-3 text-xl  w-full flex jutify-start mt-2 overflow-x-auto">
                            <div class="rounded-full bg-green-300 p-2 mx-2 my-2 flex justify-between">
                                <div class="pl-2 text-sm text-gray-700 font-bold mr-4">Name</div>
                                <button class="bg-red-400 rounded-full px-2 py-1 text-sm font-bold">X</button>
                            </div>
                        </div>
                        {{-- <button class="rounded-full p-1 ml-10 mt-2 bg-white text-xs px-2 text-gray-700 font-bold border-2 border-gray-700">+ADD</button>
                        <button class="rounded-full p-1 ml-5 mt-2 bg-white text-xs px-2 text-gray-700 font-bold border-2 border-gray-700">-REMOVE</button> --}}
                    </div>
                    <div class="flex justify-center items-center mt-1">
                        <button class="font-bold text-white text-xl p-2 border border-blue-600 rounded-full px-16 bg-gradient-to-r from-blue-700 to-blue-400 ...">
                            Submit
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection