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
                         Balance Sheet</p>
                </div>
                <div class="mx-10 mt-5 flex justify-start">
                    <a href="#" class="border-2 mr-4 border-blue-800 text-purple-900 font-bold text-xl rounded-md px-4 py-1 bg-white ">Assets</a>
                    <a href="#" class="border-2  border-blue-800 text-white font-bold text-xl rounded-md px-4 py-1 bg-blue-600">Liabalities</a>
                </div>
            </div>
            <div class="mx-5 bg-white rounded-md mt-2">
                <div class="">
                    <div class="flex justify-start p-3">
                        <div class="flex items-center justify-center mt-1">
                            <img src="{{asset('images/Filter.svg')}}" alt="" class="mr-2 pl-2">
                            <a href="#" class="border-2 ml-5 border-blue-800 text-white font-bold text-md  rounded-md px-16 py-1 bg-blue-600">Assets</a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="p-3">
                        <div class="flex items-center justify-between">
                            <div class="w-6/12 text-gray-400">
                                Name
                            </div>
                            <div class="flex justify-between w-6/12 ml-20">
                                <div class="text-gray-400">Rate</div>
                                <div class="text-gray-400">Status</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-1 overflow-y-auto" style="height: 450px">
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                    <div class="bg-white mx-4 border-b py-2 items-center  flex justify-between ">
                        <div class="font-bold text-gray-700 w-6/12">Room Mate-1</div>
                        <div class=" w-4/12 pl-10">70.0</div>
                        <button class="px-4 bg-yellow-400 py-2 rounded-xl text-white font-bold" style="background-color: #0A65FF">Paid</button>
                    </div>
                </div>
            </div>
        </div>

    </div>



    
<script>

    mobiscroll.setOptions({
        locale: mobiscroll.localeEn,  // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios',                 // Specify theme like: theme: 'ios' or omit setting to use default
            themeVariant: 'light'     // More info about themeVariant: https://docs.mobiscroll.com/5-10-1/datetime#opt-themeVariant
    });
    
    $(function () {
    
        // Mobiscroll Date & Time initialization
        $('#demo-mobile-picker-input').mobiscroll().datepicker({
            
            controls: ['date'],
            touchUi: true             // More info about touchUi: https://docs.mobiscroll.com/5-10-1/datetime#opt-touchUi
        });
    
        var instance = $('#demo-mobile-picker-button').mobiscroll().datepicker({
            
            controls: ['date'],
            touchUi: true,            // More info about touchUi: https://docs.mobiscroll.com/5-10-1/datetime#opt-touchUi
            showOnClick: false,       // More info about showOnClick: https://docs.mobiscroll.com/5-10-1/datetime#opt-showOnClick
            showOnFocus: false,       // More info about showOnFocus: https://docs.mobiscroll.com/5-10-1/datetime#opt-showOnFocus
        }).mobiscroll('getInst');
        
        instance.setVal(new Date(), true);
    
        // Mobiscroll Date & Time initialization
        $('#demo-mobile-picker-mobiscroll').mobiscroll().datepicker({
            
            controls: ['date'],
            touchUi: true             // More info about touchUi: https://docs.mobiscroll.com/5-10-1/datetime#opt-touchUi
        });
    
        // Mobiscroll Date & Time initialization
        $('#demo-mobile-picker-inline').mobiscroll().datepicker({
            
            controls: ['date'],
            touchUi: true,            // More info about touchUi: https://docs.mobiscroll.com/5-10-1/datetime#opt-touchUi
            display: 'inline'         // Specify display mode like: display: 'bottom' or omit setting to use default
        });
    
        $('#show-mobile-date-picker').click(function () {
            instance.open();
            return false;
        });
    
    });
</script>

@endsection