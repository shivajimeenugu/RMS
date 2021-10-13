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
                        <button class=" mobile-menu-button"><i class="fas fa-align-left"></i></button>
                         Balance Sheet</p>
                </div>
                <div class="mx-5 mt-5 flex justify-start">
                    <a href="{{route('liabalities')}}" class="border-2  mr-2 border-blue-800 text-white font-bold text-lg rounded-md px-4 py-1 bg-blue-600">Assets / Liabalities</a>
                    <a href="{{route('balancesheet')}}" class="border-2 px-1  border-blue-800 text-blue-900 font-bold text-lg rounded-md  py-1 bg-white ">Balance Sheet</a>
                </div>
            </div>
            <div class="mx-5 bg-white rounded-md mt-2">
                <div class="">
                    <div class="flex justify-start py-2 px-2 ">
                        <div class="flex items-center justify-center mt-4">
                            <img src="{{asset('images/Filter.svg')}}" alt="" class="mr-2 pl-2">
                            <a href="#" class="border-2  border-blue-800 text-white font-bold text-md  rounded-md px-4 py-1 bg-blue-600">Assets / Liabalities</a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="p-3">
                        <div class="flex items-center justify-between">
                            <div class="w-6/12 text-gray-400">
                                Name
                            </div>
                            <div class="flex justify-between w-6/12 ml-20 mr-4">
                                <div class="text-gray-400">Assets</div>
                                <div class="text-gray-400 ml-5">Liabalities</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-1 overflow-y-auto" style="height: 450px">
                    @foreach ($users as $user )
                    <div class="bg-white mx-4 border-b py-4 items-center font-bold  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">{{$user->name}}</div>
                        <div class=" w-4/12 pl-10">
                            @php
                                if(array_key_exists($user->id,$data))
                                {
                                    $CurrentAsset=$data[$user->id]['myasset'];
                                }
                                else
                                {
                                    $CurrentAsset="0";
                                }
                            @endphp
                            {{$CurrentAsset}}

                        </div>
                        <div class=" w-4/12 pl-10">
                            @php
                            if(array_key_exists($user->id,$data))
                            {
                                $CurrentLibs=$data[$user->id]['mylib'];
                            }
                            else
                            {
                                $CurrentLibs="0";
                            }
                        @endphp
                        {{$CurrentLibs}}
                        </div>
                    </div>

                    @endforeach




                </div>
            </div>
        </div>

    </div>




@endsection
