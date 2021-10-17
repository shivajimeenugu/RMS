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
    <div class="h-full flex justify-center bg-gray-100">
        <div class="lg:w-4/12 w-full  h-screen bag">
            <div class="pb-8 bg-white  bg-opacity-25 shadow-sm rounded-xl">
                <div class="p-2 mt-2 ml-4">
                    <p class="text-xl font-bold text-gray-700">
                        <button class="mobile-menu-button"><i class="fas fa-align-left"></i></button>
                         Transaction History</p>
                </div>
                <div class="mx-5 mt-5 flex justify-start">
                    <a href="#" class="border-2  mr-2 border-blue-800 text-white font-bold text-lg rounded-md px-4 py-1 bg-blue-600">History of all Transactions</a>
                </div>
            </div>
            <div class="mx-2 mt-2 py-2 bg-white rounded-md">
                <div class="w-full flex justify-center">
                    <div class="w-6/12 mx-2">
                        <button onclick="paid()" id="pb" class="w-full pb h-full bg-white  font-bold border-2 bg-blue-600 text-white border-blue-800 shadow-lg text-lg rounded-md px-4 py-1 "> paid</button>
                    </div>
                    <div class="w-6/12 mx-2">
                        <button onclick="rec()" id="rb" class="w-full rb h-full bg-white text-blue-800 font-bold border-2 border-blue-800  text-lg rounded-md px-4 py-1 "> Received</button>
                    </div>
                </div>

                <div class="px-1" id="paid" style="display:block;">
                    <div class="">
                        <div class="p-3">
                            <div class="flex items-center justify-between">
                                <div class="w-6/12 text-gray-400 text-center">
                                    To
                                </div>
                                <div class="flex justify-between w-6/12 ml-20 mr-4">
                                    <div class="text-gray-400 mr-10">Amount</div>
                                    <div class="text-gray-400 ml-5">Date</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-1 overflow-y-auto" style="height: 400px;">
                        <div class="bg-white mx-4 border-b py-4 items-center font-bold  flex justify-between ">

                            @foreach ($PData as $p )
                            @if (array_key_exists($p->ltremarks,$users))
                            <div class="bg-white mx-4 border-b py-4 items-center font-bold  flex justify-between ">
                                <div class="font-bold text-gray-700 w-6/12">{{$users[$p->ltremarks]}}</div>
                                <div class=" w-4/12 pl-10">{{$p->ltamt}}</div>
                                <div class=" w-4/12 pl-10">{{$p->ltdate}}</div>
                                </div>
                            @else
                            <div class="bg-white mx-4 border-b py-4 items-center font-bold  flex justify-between ">
                                <div class="font-bold text-gray-700 w-6/12">User Not Found</div>
                                <div class=" w-4/12 pl-10">{{$p->ltamt}}</div>
                                <div class=" w-4/12 pl-10">{{$p->ltdate}}</div>
                                </div>
                            @endif

                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- ##################################### --}}
                <div class="" id="rec" style="display:none;">
                    <div class="">
                        <div class="p-3">
                            <div class="flex items-center justify-between">
                                <div class="w-6/12 text-gray-400 text-center">
                                    From
                                </div>
                                <div class="flex justify-between w-6/12 ml-20 mr-4">
                                    <div class="text-gray-400 mr-10">Amount</div>
                                    <div class="text-gray-400 ml-5">Date</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-1 overflow-y-auto " style="height: 400px;">

                            @foreach ($RData as $p )
                            @if (array_key_exists($p->ltremarks,$users))
                            <div class="bg-white mx-4 border-b py-4 items-center font-bold  flex justify-between ">
                                <div class="font-bold text-gray-700 w-6/12">{{$users[$p->ltremarks]}}</div>
                                <div class=" w-4/12 pl-10">{{$p->ltamt}}</div>
                                <div class=" w-4/12 pl-10">{{$p->ltdate}}</div>
                                </div>
                            @else
                            <div class="bg-white mx-4 border-b py-4 items-center font-bold  flex justify-between ">
                                <div class="font-bold text-gray-700 w-6/12">User Not Found</div>
                                <div class=" w-4/12 pl-10">{{$p->ltamt}}</div>
                                <div class=" w-4/12 pl-10">{{$p->ltdate}}</div>
                                </div>
                            @endif

                            @endforeach

                    </div>
                </div>
            </div>
        </div>

    </div>



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

    function paid() {
        var x = document.getElementById("paid");
        var pb = document.getElementById("pb");
        var rb = document.getElementById('rb');
        if (x.style.display === "none") {
            x.style.display = "block";
            pb.classList.add('shadow-lg');
            pb.classList.add('text-white');
            pb.classList.add('bg-blue-600');
            pb.classList.remove('text-blue-800');
        }

        var y = document.getElementById('rec')

        if(y.style.display == "block"){
            y.style.display = "none";
            rb.classList.remove('shadow-lg');
            rb.classList.remove('text-white');
            rb.classList.remove('bg-blue-600');
            rb.classList.add('text-blue-800');
        }
    }
    function rec() {
        var x = document.getElementById("rec");
        var y = document.getElementById('paid');
        var pb = document.getElementById("pb");
        var rb = document.getElementById('rb');
        if(y.style.display == "block"){
            y.style.display = "none";
            pb.classList.remove('shadow-lg');
            pb.classList.remove('text-white');
            pb.classList.remove('bg-blue-600');
            pb.classList.add('text-blue-800');
        }
        if (x.style.display === "none") {
            x.style.display = "block";
            rb.classList.add('shadow-lg');
            rb.classList.add('text-white');
            rb.classList.add('bg-blue-600');
            rb.classList.remove('text-blue-800');
        }


    }




</script>

















@endsection
