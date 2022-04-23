<div class="lg:hidden sidebar bg-blue-800 text-blue-100 w-80 space-y-6 py-7 px-2 lg:fixed lg:w-4/12 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out" style="background-color: #0A65FF">
<div class="">
        <div class="pb-14 text-white">
            <div class="p-2 px-2  ml-4 mr-4 mb-8 text-3xl   items-center flex justify-between">
                <button class="close"><i class="far fa-times-circle"></i></button>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-home"></i>
                <a href="{{route('portfolio')}}" class="ml-6">Home</a>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-book"></i>
                <a href="{{route('rules')}}" class="ml-6">Rules</a>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-file-medical"></i>
                <a href="{{route('dashboard')}}" class="ml-9">Add Transaction</a>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-business-time"></i>
                <a  href="{{route('history')}}" class="ml-6">Bill History</a>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-business-time"></i>
                <a  href="{{route('transactions')}}" class="ml-6">Transaction History</a>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-file-alt"></i>
                <a href="{{route('balancesheet')}}"  class="ml-10">Bills</a>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-users"></i>
                <a  href="{{route('add_roommates')}}"  class="ml-7">Roommates</a>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-address-card"></i>
                <a  href="{{route('rockstars')}}" class="ml-7" > About App</a>
            </div>




            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-door-open"></i>
                <a  href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"  class="ml-7">Logout</a>
            </div>

        </div>
    </div>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
{{-- <div class="lg:hidden sidebar bg-blue-800 text-blue-100 w-80 space-y-6 py-7 px-2 lg:fixed lg:w-4/12 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out" style="background-color: #0A65FF">
    <div class="">
        <div class="pb-14 text-white">
            <div class="p-2 px-2  ml-4 mr-4 mb-8 text-3xl   items-center flex justify-between">
                <button class="close"><i class="far fa-times-circle"></i></button>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-home"></i>
                <p class="ml-6">Home</p>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-file-medical"></i>
                <p class="ml-9">Add Transaction</p>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-business-time"></i>
                <p class="ml-6">Transaction History</p>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-file-alt"></i>
                <p class="ml-10">Balance Sheet</p>
            </div>
            <div class="p-2 px-2 mt-4 ml-5 text-xl font-bold  flex justify-start">
                <i class="far fa-users"></i>
                <p class="ml-7">Roommates</p>
            </div>
        </div>
    </div>
</div> --}}
