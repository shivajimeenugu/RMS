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
                        <button class="mobile-menu-button"><i class="fas fa-align-left"></i></button>
                         Time Table</p>
                </div>
                <div class="flex justify-center mt-4 font-bold text-2xl text-gray-700">
                    <div class="">
                        Today Time Table
                    </div>
                </div>

            </div>
            <div class="mx-5 rounded-md mt-2">
                <div class="px-4 pb-3 overflow-y-auto" style="height: 500px">
                    @foreach ($users as $user)

                    @if (array_key_exists($user->name,$dut))
                    <div class="bg-white   mb-4 mt-2 shadow-lg  border-b py-4 rounded-2xl  items-center  flex justify-between px-4 ">
                        <div class="font-bold text-gray-700 text-2xl ">{{$user->name}}</div>
                        <button type="button" class="font-bold disabled:opacity-90  text-white bg-red-400 border border-red-700 px-2 py-1 rounded-full" disabled>{{$dut[$user->name]}}</button>
                    </div>



                    @else

                    {{-- <div class="bg-white   mb-4 mt-2 shadow-lg  border-b py-4 rounded-2xl  items-center  flex justify-between px-4 ">
                        <div class="font-bold text-gray-700 text-2xl ">{{$user->name}}</div>
                        <button  type="button" class="font-bold text-white bg-red-400 border border-red-700 px-2 py-1 rounded-full">Remove</button>
                    </div> --}}
                    @endif

                    @endforeach

                </div>
            </div>
        </div>

    </div>


    {{-- <button type="button" class="text-white modal-open text-center text-xl hover:bg-red-700 bg-red-500 cursor-pointer rounded-md p-1 px-12 my-2 text-center"  data-toggle="modal" data-target="#exampleModalCenter">
        Exit Team
    </button> --}}

<!--Modal-->
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

                    <form id="rmform" action="{{route('test')}}" method="POST">
                    @csrf
                    <input id="rmform_value" name="id" value="N" type="hidden">

                    </form>
                    <button  onclick="" id="modelbtn" class="bg-red-500 mr-5 px-3 py-2 border-2 rounded-md text-white font-bold  border-red-800 text-xl">Yes Remove</button>
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
