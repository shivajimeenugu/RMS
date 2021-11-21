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
            <div class="pb-8 mt-4">
                <div class="p-2 px-2 mt-2 ml-4 mr-4 text-2xl  items-center flex justify-between">
                    <button class="mobile-menu-button "><i class="fas fa-align-left"></i></button>
                    <a onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" href="{{route('logout')}}" class="text-xl font-bold text-gray-700">
                    Sign Out</a>
                </div>
                <div class="mx-8 mt-8 font-bold text-gray-700">
                    <p class="text-xl">Welcome</p>
                    <p class="text-2xl">{{Auth::user()->name}}</p>
                </div>
            </div>
            <div class="mx-5 bg-opacity-50 border-l-2 border-white rounded-xl bg-white  ">
                <div class="p-4 text-xl text-blue-700 font-bold ">
                        Portfolio
                </div>
                <div class="p-4 text-xl text-gray-900 font-bold ">
                    <p>Your</p>
                    <p>Total Assets</p>
                    <p class="bg-blue-600 mt-2 rounded-lg px-2 py-1 text-2xl w-6/12 text-white">{{  $AssetSum}}</p>
                </div>
                <div class="p-4 text-xl text-gray-900 font-bold ">
                    <p>Your</p>
                    <p>Total Liabalities</p>
                    <p class="bg-blue-600 mt-2 mb-4 rounded-lg px-2 py-1 text-2xl w-6/12 text-white">{{$LibsSum}}</p>
                </div>
            </div>
            <br/>

            <div class="mx-5 bg-opacity-50 border-l-2 border-white rounded-xl bg-white  ">
                <div class="p-4 text-xl text-blue-700 font-bold ">
                        Updates
                </div>

                <div class="p-4 text-xl text-red-900 font-bold animate-pulse ">
                    <a href="{{route('rules')}}" >*Rules</a><br/>
                    <a href="{{route('transactions')}}" >Now You Can Delete your transactions.. </a>
                </div>
                {{-- <div class="p-4 text-xl text-gray-900 font-bold ">
                    <p>Your</p>
                    <p>Total Assets</p>
                    <p class="bg-blue-600 mt-2 rounded-lg px-2 py-1 text-2xl w-6/12 text-white">{{  $AssetSum}}</p>
                </div>
                <div class="p-4 text-xl text-gray-900 font-bold ">
                    <p>Your</p>
                    <p>Total Liabalities</p>
                    <p class="bg-blue-600 mt-2 mb-4 rounded-lg px-2 py-1 text-2xl w-6/12 text-white">{{$LibsSum}}</p>
                </div> --}}


            </div>


        </div>

    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
@endsection
