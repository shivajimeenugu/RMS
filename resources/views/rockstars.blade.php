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
        <div class="lg:w-4/12 w-full h-screen h-full grid grid-row-3 bg-blue-700">
            <div class="pb-4">
                <div class="p-2 mt-2 ml-4">
                    <p class="text-xl font-bold text-white">
                        {{-- <i class="fas fa-arrow-left"></i> --}}
                        <button class="mobile-menu-button"><i class="fas fa-align-left"></i></button>
                         Made By</p>
                </div>


            </div>
            <div class="row-span-4">
                <div class="flex justify-center mb-5">
                    <h1 class="text-white font-bold text-5xl">RMS</h1>
                </div>

                <div class="flex justify-center mb-5">
                    <h1 class="text-white font-bold text-4xl">---</h1>
                </div>

                <div class="flex justify-center mb-5">

                    <h1 onclick="swal('Designer!', 'Akula Prudhvi Srinivas', 'success')" class="text-white font-bold text-2xl">Akula Prudhvi Srinivas</h1>
                         </div>
                <div class="flex justify-center mb-5">

                       <h1 onclick="swal('Frontend Dev!', 'Mohammad Firoz Khan', 'success')" class="text-white font-bold text-2xl">Mohammad Firoz Khan</h1>
                         </div>
                <div class="flex justify-center mb-5">

                         <h1 onclick="swal('Backend Dev!', 'Meenugu Sivaji', 'success')" class="text-white font-bold text-2xl">Meenugu Sivaji</h1>
                          </div>
                <div class="flex justify-center mb-5">


                           <h1 onclick="swal('Designer!', 'Panchala Karthik', 'success')" class="text-white font-bold text-2xl">Panchala Karthik</h1>
                </div>


            </div>
            <div class=" row-span-1">
            </div>
        </div>
    </div>
@endsection
