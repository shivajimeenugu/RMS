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
            <div class="p-2 px-2 mt-2 ml-4 mr-4 text-2xl  items-center flex justify-between">
                <button class="mobile-menu-button "><i class="fas fa-align-left"></i></button>

            </div>
            {{-- <div class="mx-5 bg-opacity-50 border-l-2 border-white rounded-xl bg-white  ">
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
            </div> --}}

            <iframe src="https://onedrive.live.com/embed?cid=E060CD28C01D18B1&resid=E060CD28C01D18B1%215078&authkey=ADeDS5NCDS5EEWY&em=2" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
        </div>

    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
@endsection
