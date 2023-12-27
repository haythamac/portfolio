<div class="flex flex-col justify-center items-center w-full pl-64">
    @include('home.home')
    @include('home.about')
    @include('home.skills')
    @include('home.portfolio')
    @include('home.contact')
</div>

@if (session()->has('message'))
    @livewire('show-popup-message', ['message' => session()->get('message')])
@endif
