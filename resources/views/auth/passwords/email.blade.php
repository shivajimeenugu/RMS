



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
            <div class=" row-span-3">
            </div>
            <div class="row-span-4">
                <div class="flex justify-center mb-20 mt-10">
                    <h1 class="text-white font-bold text-5xl">RMS</h1>
                </div>

                @if (session('status'))
                        <div class="text-white" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="flex justify-center  text-white p-2 ">
                        <div class="flex justify-start items-center  w-10/12 py-2 px-4 border-2 border-white rounded-md @error('email') is-invalid border-3 border-red-700 @enderror">
                            <i class="far fa-envelope text-2xl mr-4"></i>
                            <div class="text-xl">
                                <input type="email" name="email" class="bg-blue-700 ml-5 focus:outline-none border-0 placeholder-white text-center w-40" placeholder="Email">
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


                    <div class="flex justify-center mb-2 ">
                        <button type="submit" class="bg-white text-blue-800 shadow-xl border border-gray-800 text-xl rounded-md w-full py-2 font-bold mx-10">Send Password Reset Link</button>
                    </div>
                    <div class="flex justify-center mx-10 text-white text-lg  font-bold">
                        <a href="{{route('login')}}" class="mr-2">Go Back</a>
                        {{-- <a href="{{route('login')}}">.</a> --}}
                    </div>
                </form>
            </div>
            <div class=" row-span-1">
            </div>
        </div>
    </div>
@endsection

