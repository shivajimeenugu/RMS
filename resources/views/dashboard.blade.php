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
                         Transaction Summary</p>
                </div>
                <form action="AddTransaction" id="tform" method="POST">
                    @csrf
                <div class="mx-10 mt-5">
                    <input  type="number" name="amount" id="amount" placeholder="Amount" class="px-4 py-4  text-lg placeholder-gray-600 font-bold rounded-lg border text-bold border-blue-400 text-gray-600 w-full" required>
                </div>
                <div class="mt-4 mx-8 flex justify-center">
                    <input type="text" name="remarks" id="title" placeholder="Item Details" class="px-2 py-2 border border-blue-400 placeholder-gray-600 font-bold pl-5  rounded w-8/12" required>
                </div>
            </div>
            <div class="mx-5">
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

                <div class="px-3 overflow-y-auto" style="height: 350px">
                    @foreach ($users as $user)

                            {{-- <button id="{{$user->id}}btn" onclick="AddRoommetToCart({{$user->id}},this.id)" class="px-2  bg-yellow-400 py-1 rounded-xl text-white font-bold" style="background-color: #ff9d4e">button</button> --}}
                            @if (Auth::user()->id == $user->id)
                            <div class=" bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                            <div class="font-bold text-red-700">{{ $user->name }}<span class="text-xs ml-3 px-2 font-bold bg-blue-500 text-white rounded py-0.5">Owner</span></div>
                            <input type="checkbox" value="{{$user->id}}" name="members[]" class="lgcheck" checked>
                            </div>
                            @else
                            <div class="bg-white mx-1 py-2 items-center px-5 my-2 flex justify-between rounded-2xl border border-white">
                            <div class="font-bold text-gray-700">{{ $user->name }}</div>
                            <input type="checkbox" value="{{$user->id}}" name="members[]" class="lgcheck" />
                            </div>
                            @endif



                    @endforeach

                </div>

                <div class="" style="height: 100px">
                    {{-- <div class="flex justify-start">
                        <button class="rounded-full p-1 ml-10 mt-2 bg-white text-xs px-2 text-gray-700 font-bold border-2 border-gray-700">+ADD</button>
                        <button class="rounded-full p-1 ml-5 mt-2 bg-white text-xs px-2 text-gray-700 font-bold border-2 border-gray-700">-REMOVE</button>
                    </div> --}}
                    <div class="flex justify-center items-center mt-2">


                        <button id="subbtn" onclick="processme()" class="font-bold text-white text-xl p-2 border border-blue-600 rounded-full px-16 bg-gradient-to-r from-blue-700 to-blue-400 ...">
                            Submit
                        </button>
                    </div>
                </div>

            </div>
        </form>
        </div>

    </div>

    @if (session('status'))
    <script>
        swal('{{ session('status') }}', '', 'success');
    </script>
    @endif

    <script>


        function toggle(source) {
    var checkboxes = document.querySelectorAll('[name="members[]"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
        }
        }





        function processme()
        {
            //alert("hi");
            var btn=document.getElementById('subbtn');
            var h=`<span><div class="bg-white flex space-x-2 p-5 rounded-full justify-center items-center">
                                <div class="bg-blue-600 p-2  w-4 h-4 rounded-full animate-bounce blue-circle"></div>
                                <div class="bg-green-600 p-2 w-4 h-4 rounded-full animate-bounce green-circle"></div>
                                <div class="bg-red-600 p-2  w-4 h-4 rounded-full animate-bounce red-circle"></div>
                                </div></span>`;


            var amt=document.getElementById('amount').value;
            var rem=document.getElementById('title').value;
            if(amt !="" && rem !="")
            {
                btn.innerHTML=h;
                btn.disabled=true;
                btn.className ="";
                var f=document.getElementById('tform');
                f.submit();
            }
            else{
                swal('Please Fill All Required Fields', '', 'error');
            }



        }

    </script>



@endsection
