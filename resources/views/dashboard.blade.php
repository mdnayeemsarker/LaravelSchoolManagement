
@extends('layouts.app')

@section('content')
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Dashboard ') . auth()->user()->type }}
    @if (auth()->user()->type == 1)
        {{-- {{ route('admin') }}   --}}
    @endif
</h2>
@endsection



{{-- <x-app-layout> --}}

{{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard ') . auth()->user()->type }}
        </h2>
         @if (auth()->user()->type == 1)
            {{ '/admindashboard' }}  
            {{ __('Dashboard') }}
        @endif
    </x-slot> --}}

    {{--     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
{{-- </x-app-layout> --}}
