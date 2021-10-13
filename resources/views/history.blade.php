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
            <div class="pb-8 bg-white bg-opacity-25 shadow-sm rounded-xl">
                <div class="p-2 mt-2 ml-4">
                    <p class="text-xl font-bold text-gray-700">
                        <button class="mobile-menu-button"><i class="fas fa-align-left"></i></button>
                         Transaction Summary</p>
                </div>

                <div class="mx-10 mt-5 w-6/12 flex justify-end">
                    <div class="px-2 text-lg bg-white w-7/12 font-bold rounded-full border-2 text-bold border-yellow-400 text-gray-700">04/10/2021</div>
                </div>
                <div class="mt-4 mx-8 flex justify-center">
                    <div class="bg-yellow-400">
                        <input type="date" name="" id="">
                        <p>Select Date</p>
                    </div>
                </div>
            </div>
            <div class="mx-2 mt-2">

                <div class="px-3 overflow-y-auto" style="height: 475px">
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <button class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold modal-open" type="button" style="background-color: #ff9d4e">Edit</button>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
                    <div class="bg-white mx-1 py-2 shadow-md items-center px-6 my-4 flex justify-between rounded-2xl border border-white">
                        <div class="font-bold text-gray-700">Room Mate-1</div>
                        <div class="text-gray-700 font-bold">Rs.70.0</div>
                        <div class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">Edit</div>
                    </div>
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
            <div class="mx-2 p-2 w-full">
                <div class="pb-2">
                    <div class="p-2 mt-2">
                        <p class="text-xl font-bold text-gray-700">
                            Edit Transaction</p>
                    </div>
                    <form action="AddTransaction" method="POST">
                        @csrf
                    <div class="mt-5 mr-4">
                        <input type="Int" name="amount" id="" placeholder="Amount" class="px-4 py-2  text-lg placeholder-gray-600 font-bold rounded-lg border text-bold border-blue-400 text-gray-600 w-full">
                    </div>
                    <div class="mt-4 flex justify-center">
                        <input type="text" name="remarks" id="title" placeholder="Item Details" class="px-2 py-2 border border-blue-400 placeholder-gray-600 font-bold   rounded w-8/12">
                    </div>

                </div>
                <div class="mx-2">
                    <div class="">
                        <div class="flex justify-between p-3">
                            <div class="flex items-center justify-center">
                                <img src="{{asset('images/Vector.svg')}}" alt="" class="mr-2">
                                <p class="text-lg font-bold">Roommates</p>
                            </div>
                            <div class="flex items-center">
                                <Label for="check" class="text-lg font-bold mr-1">ALL</Label>
                                <input type="checkbox" onclick="toggle(this);" name="all" id="all" class="lgcheck">
                            </div>
                        </div>
                    </div>

                    <div class="px-3 overflow-y-auto" style="height: 200px">
                        <div class="bg-white mx-1 py-2 items-center shadow-lg px-5 my-2 flex justify-between rounded-2xl border border-white">
                            <div class="font-bold text-gray-700">Room MAte</div>
                            <input type="checkbox" name="members[]" class="lgcheck" />
                        </div>
                        <div class="bg-white mx-1 py-2 items-center shadow-lg px-5 my-2 flex justify-between rounded-2xl border border-white">
                            <div class="font-bold text-gray-700">Room MAte</div>
                            <input type="checkbox" name="members[]" class="lgcheck" />
                        </div>
                        <div class="bg-white mx-1 py-2 items-center shadow-lg px-5 my-2 flex justify-between rounded-2xl border border-white">
                            <div class="font-bold text-gray-700">Room MAte</div>
                            <input type="checkbox" name="members[]" class="lgcheck" />
                        </div>
                        <div class="bg-white mx-1 py-2 items-center shadow-lg px-5 my-2 flex justify-between rounded-2xl border border-white">
                            <div class="font-bold text-gray-700">Room MAte</div>
                            <input type="checkbox" name="members[]" class="lgcheck" />
                        </div>
                        <div class="bg-white mx-1 py-2 items-center shadow-lg px-5 my-2 flex justify-between rounded-2xl border border-white">
                            <div class="font-bold text-gray-700">Room MAte</div>
                            <input type="checkbox" name="members[]" class="lgcheck" />
                        </div>
                        <div class="bg-white mx-1 py-2 items-center shadow-lg px-5 my-2 flex justify-between rounded-2xl border border-white">
                            <div class="font-bold text-gray-700">Room MAte</div>
                            <input type="checkbox" name="members[]" class="lgcheck" />
                        </div>
                        <div class="bg-white mx-1 py-2 items-center shadow-lg px-5 my-2 flex justify-between rounded-2xl border border-white">
                            <div class="font-bold text-gray-700">Room MAte</div>
                            <input type="checkbox" name="members[]" class="lgcheck" />
                        </div>
                        <div class="bg-white mx-1 py-2 items-center shadow-lg px-5 my-2 flex justify-between rounded-2xl border border-white">
                            <div class="font-bold text-gray-700">Room MAte</div>
                            <input type="checkbox" name="members[]" class="lgcheck" />
                        </div>
                        <div class="bg-white mx-1 py-2 items-center shadow-lg px-5 my-2 flex justify-between rounded-2xl border border-white">
                            <div class="font-bold text-gray-700">Room MAte</div>
                            <input type="checkbox" name="members[]" class="lgcheck" />
                        </div>
                    </div>
                    <div class="mt-4 mb-2">
                        <div class="flex justify-center items-center mt-2">
                            <button class="font-bold text-white text-xl p-2 border border-blue-600 rounded-full px-16 bg-gradient-to-r from-blue-700 to-blue-500 ...">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>

    <script>


        function toggle(source) {
    var checkboxes = document.querySelectorAll('[name="members[]"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
        }
        }




    </script>

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


</script>

















@endsection
