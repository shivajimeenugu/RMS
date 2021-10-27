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
                    <a href="{{route('transactions')}}" class="border-2  mr-2 border-blue-800 text-white font-bold text-lg rounded-md px-4 py-1 bg-blue-600">Transactions</a>

                </div>
            </div>
            <div class="mx-5 bg-white rounded-md mt-2" x-data="{selected:null}">
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
                        <div class="flex items-center justify-between" >
                            <div class="w-6/12 text-gray-400">
                                Date
                            </div>
                            <div class="flex justify-between w-4/12 ml-20 mr-4">
                                <div class="text-gray-400">Item</div>
                                <div class="text-gray-400 ml-5">Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-1 overflow-y-auto" style="height: 450px" >
                    @foreach ($data as $d )
                    <div class="bg-white mx-4 border-b py-4 items-center font-bold  flex justify-between " @click="selected !== 1 ? selected = 1 : selected = null">
                        <div class="font-bold text-gray-700 w-6/12">{{$d['tdate']}}</div>


                        <div class=" w-4/12 pl-10">
                            {{$d['tremarks']}}[{{$d['tamt']}}]
                        </div>

                        <div class=" w-4/12 pl-10">
                            {{$d['towner']}}
                        </div>





                    </div>
                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                        <div class="p-6">
                         @php
                             $unames=explode(',',$d['uname']);
                             foreach($unames as $n)
                             {
                                 echo '<p>'.$n.'</p>';
                             }
                         @endphp
                        </div>
                    </div>

                    @endforeach




                </div>
            </div>
        </div>

    </div>




@endsection
