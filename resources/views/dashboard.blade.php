@extends('layouts.app')


@section('style')
<style>

.bag{
    background-image: url("{{asset('images/Decoration.svg')}}");
    background-repeat: no-repeat;
background-size: cover;
}
</style>
@stop

@section('content')
    <div class="h-screen flex justify-center bg-gray-100">
        <div class="w-full mx-2 h-screen bag  rounded-md">
            <div class="p-2">
                <p class="text-xl font-bold text-gray-700">
                    <i class="fas fa-arrow-left"></i>
                     Transaction Summary</p>
            </div>
            <div class="mx-5 mt-5">
                <input type="Int" name="amount" id="" placeholder="Amount" class="p-2 text-lg rounded border-2 text-bold border-blue-400 text-blue-600 w-full pl-5">  
            </div>
            <div class="mt-2 mx-5 p-5 flex justify-center">
                <input type="text" name="title" id="title" placeholder="Item Details" class="p-1 pl-5 text-bold rounded w-10/12">
            </div>
            <div class=" mx-5">
                <div class="top flex justify-center items-center ml-80 mr-40 p-2  mb-1"> 
                    <div class="flex justify-between w-full ">
                        <p class="text-lg font-bold text-gray-100">Roommates</p>
                        <div class="">
                            <Label for="all" class="text-gray-100 font-bold">ALL</Label>
                            <input type="checkbox" name="all" id="all">
                        </div>
                    </div>
                </div>
                <div class="container bg-gray-200 p-2 rounded-md border-2 border-blue-300">
                    <div class=" p-2 m-2 overflow-x-auto h-80">
                        <div class="flex justify-between border-2 rounded-md  border-white">
                            <!-- <div class="bg-blue-500 p-2 rounded">
                                hi
                            </div>
                            <div class="p-2 bg-red-900">
                                <button class="bg-red-300 p-1 text-white">
                                    ADD
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
@endsection