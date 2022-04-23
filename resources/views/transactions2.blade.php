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


            <div class="mx-5 border-l-2 border-white rounded-xl bg-white  ">
                {{-- <div class="p-4 text-xl text-blue-700 font-bold ">
                        Sort
                </div> --}}
                <center>
                <label class=" ml-2 font-bold text-gray-700">Owner</label>
                <input onchange="window.location.href='{{route('transactions2',["show"=>"owner"])}}'" type="radio" @if ( app('request')->input('show')=="owner" )
                {{"checked"}}
                @endif>

                <label class="ml-2 font-bold text-gray-700">Party</label>
                <input onchange="window.location.href='{{route('transactions2',["show"=>"party"])}}'" type="radio" @if ( app('request')->input('show')=="party" )
                {{"checked"}}
                @endif>

                <label class="ml-2 font-bold text-gray-700">All</label>
                <input onchange="window.location.href='{{route('transactions2',["show"=>"all"])}}'" type="radio" @if ( app('request')->input('show')=="all" )
                {{"checked"}}
                @endif>
                </center>
            </div>

            <div class="mx-5 block bg-white rounded-lg mt-2" x-data="{selected:null}">
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
                <div class="px-1 overflow-y-auto pb-4" style="height: 550px" >
                    @foreach ($data as $d )
                    <div class="bg-white mx-4 border-b py-4 items-center font-bold  flex justify-between " @click="selected !== 1 ? selected = 1 : selected = null">
                        <div class="font-bold text-gray-700 w-6/12">{{$d['tdate']}}</div>


                        <div class=" w-6/12 border-r-2 border-gray-200   pl-6 pr-2 overflow-x-auto">
                            {{$d['tremarks']}}[{{$d['tamt']}}]
                        </div>

                        <div class=" w-4/12 pl-10">
                            {{$d['towner']}}
                        </div>





                    </div>
                    @php
                        $euid= Crypt::encrypt($d['tid']);
                    @endphp
                    <div class="overflow-hidden" >
                        <div class="p-6">
                         {{$d['uname']}}
                         @if (Auth::user()->name == $d['towner'] )
                         <button onclick="set_rmuser_id('{{$euid}}')" type="button" class="font-bold modal-open text-white bg-red-400 border border-red-700 px-2 py-1 rounded-full">Remove</button>
                         @endif
                            {{-- @php
                             $unames=explode(',',$d['uname']);
                             foreach($unames as $n)
                             {
                                 echo '<p>'.$n.'</p>';
                             }
                         @endphp --}}
                        </div>
                    </div>

                    @endforeach

                    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                        <div class="modal-container  w-11/12 md:max-w-md mx-auto z-50 ">


                            <div class=" flex flex-col p-4 bg-gray-300 bg-opacity-full shadow-md hover:shodow-lg rounded-2xl">
                                <div class="flex justify-end items-center pb-1">
                                    <div class="modal-close cursor-pointer z-50">
                                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="mx-5 p-2 w-full">
                                    <div class="flex justify-center ">
                                            <div class="p-2 bg-white mr-5 w-full rounded-xl border border-gray-200 text-center text-xl font-bold">Are You Sure? </div>
                                    </div>
                                    <div class="flex justify-between mx-5 mt-4">

                                        <button  class="modal-close bg-white px-3 py-2 border-2 rounded-md text-gray-700 font-bold  border-gray-500 text-xl">Cancel</button>

                                        <form id="rmform" action="{{route('RemoveTransaction')}}" method="POST">
                                        @csrf
                                        <input id="rmform_value" name="id" value="N" type="hidden">

                                        </form>
                                        <button  onclick="rmuser()" id="modelbtn" class="bg-red-500 mr-5 px-3 py-2 border-2 rounded-md text-white font-bold  border-red-800 text-xl">Yes Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>


    @if (session('status'))
    <script>
        swal('{{ session('status') }}', '', 'success');
    </script>
    @endif

    <script>
        function httpGet(theUrl)
    {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
        xmlHttp.send( null );
        return xmlHttp.responseText;
    }

        function set_rmuser_id(id)
        {
           var btn=document.getElementById("rmform_value");
           btn.value=id;
        }
        function rmuser()
        {
           var f=document.getElementById("rmform");
           f.submit();
        }
    </script>




<script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener('click', function(event){
        event.preventDefault()

        toggleModal()
    })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
        isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
    }
    };


    function toggleModal () {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
    }


</script>


@endsection
