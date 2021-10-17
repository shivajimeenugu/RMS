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
                    <a href="{{route('liabalities')}}" class="border-2  mr-2 border-blue-800  text-blue-900  font-bold text-lg rounded-md px-4 py-1 bg-white">Assets / Liabalities</a>
                    <a href="{{route('balancesheet')}}" class="border-2 px-1  border-blue-800  text-white font-bold text-lg rounded-md  py-1  bg-blue-600">Balance Sheet</a>
                </div>
            </div>
            <div class="mx-5 bg-white rounded-md mt-2">
                <div class="">
                    <div class="flex justify-start p-3">
                        <div class="flex items-center justify-center mt-1">
                            <img src="{{asset('images/Filter.svg')}}" alt="" class="mr-2 pl-2">
                            <a href="#" class="border-2 ml-5 border-blue-800 text-white font-bold text-md  rounded-md px-2 py-1 bg-blue-600">Balance Sheet</a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="p-3">
                        <div class="flex items-center justify-between">
                            <div class="w-6/12 text-gray-400">
                                Name
                            </div>
                            <div class="flex justify-between w-6/12 ml-10 mr-4">
                                <div class="text-gray-400">Assets</div>
                                <div class="text-gray-400">Action</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-1 overflow-y-auto" style="height: 450px">

                    @foreach ($users as $user )
                    <div class="bg-white mx-1 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12 pl-2">{{$user->name}}</div>
                        <div class=" w-3/12 pl-5">
                            @php
                                if(array_key_exists($user->id,$BalSheet))
                                {
                                    $CurrentAsset=$BalSheet[$user->id]['bal'];
                                }
                                else
                                {
                                    $CurrentAsset=0;
                                }
                            @endphp
                            {{$CurrentAsset}}

                        </div>

                            @php
                            if($CurrentAsset<0 and $CurrentAsset!='-')
                            {
                                //<button class="px-2 bg-yellow-400 py-1 text-sm mr-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Pay</button>
                                //<a href="upi://pay?pa=UPIID@oksbi&amp;pn=JOHN BRITAS AK &amp;cu=INR" class="px-2 bg-yellow-400 py-1 text-sm mr-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Pay Now !</a>
                                //upi://pay?pa=BHARATPE.9042651644@icici&pn=BharatPe%20Merchant&cu=INR&tn=Verified%20Merchant
                                $CurrentAction='<a href="upi://pay?pa='.$user->upiid.'&pn='.str_replace(" ","",$user->name).'&am='.(-1*$CurrentAsset).'&cu=INR&tn=RoomBill " class="px-2 bg-yellow-400 py-1 text-sm mr-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Pay Now !</a>';
                            }
                            else if($CurrentAsset!="-" && $CurrentAsset!=0 && $CurrentAsset!='0' )
                            {
                                $euid= Crypt::encrypt($user->id);
                                $CurrentAction='<a href="'.route('DoneRecive').'?id='.$euid.'" class="px-2 bg-yellow-400 py-1 text-sm mr-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Recived</a>';

                            }
                            else{
                                $CurrentAction='<button class="px-2 bg-yellow-400 py-1 text-sm mr-2 rounded-xl text-white font-bold disabled:opacity-50"  disabled>NO</button>';

                            }

                        @endphp
                        {!! $CurrentAction !!}


                    </div>

                    @endforeach



                    {{-- <div class="bg-white mx-1 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12 pl-2">Room Mate-1</div>
                        <div class=" w-3/12 pl-5">70.0</div>
                        <button class="px-2 bg-yellow-400 py-1 text-sm mr-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Recieved</button>
                    </div>
                    <div class="bg-gray-50 px-1 border-b py-2 items-center flex justify-between">
                        <div class="font-bold text-gray-700 w-6/12 pl-2">Room Mate-1</div>
                        <div class=" w-3/12 pl-3">120.0</div>
                        <button class="px-5 bg-yellow-400 py-1 text-sm mr-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Pay</button>
                    </div> --}}


                </div>
            </div>
        </div>

    </div>
    @if (session('status'))
    <script>
        swal('{{ session('status') }}', '', 'success');
    </script>
    @endif
@endsection
