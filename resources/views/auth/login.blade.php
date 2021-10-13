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
            <div class=" row-span-4">
            </div>
            <div class="row-span-4">
                <div class="flex justify-center mb-5">
                    <h1 class="text-white font-bold text-5xl">RMS</h1>
                </div>
                <form class="" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex justify-center  text-white p-2 ">
                        <div class="flex sm:justify-start lg:justify-between items-center  w-10/12 py-2  px-4 border-2 border-white rounded-md @error('email') is-invalid border-2 border-red-700 @enderror">
                            <i class="far fa-user text-2xl mr-4"></i>
                            <div class="text-xl">
                                <input type="email" name="email" class="bg-blue-700  lg:w-10/12 lg:mr-10 focus:outline-none border-0 placeholder-white text-center w-40" placeholder="email">
                            </div>
                        </div>
                    </div>
                    <div class="mx-10">
                        @error('email')
                            <span class="text-white" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="flex justify-center mt-5 text-white p-2 ">
                        <div class="flex sm:justify-start lg:justify-between items-center  w-10/12 py-2 px-4 border-2 border-white rounded-md @error('password') is-invalid border-2 border-red-700 @enderror">
                            <i class="far fa-lock text-2xl mr-4"></i>
                            <div class="text-xl">
                                <input type="password" name="password" class="bg-blue-700 ml-5 lg:w-10/12 lg:mr-10  focus:outline-none border-0 placeholder-white text-center w-40" placeholder="password">
                            </div>
                        </div>
                    </div>
                    <div class="mx-10">
                        @error('password')
                            <span class="text-white" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="flex justify-center mb-2 mt-5 ">
                        <button type="submit" class="bg-white text-blue-800 shadow-xl border border-gray-800 text-xl rounded-md w-full py-2 font-bold mx-10">LOGIN</button>
                    </div>
                </form>
                <div class="flex justify-between mx-10 text-white text-lg  font-bold">
                    <a href="#">Forgot password?</a>
                    <a href="{{route('register')}}">Register Now</a>
                </div>
            </div>
            <div class=" row-span-1">
            </div>
        </div>
    </div>
@endsection
