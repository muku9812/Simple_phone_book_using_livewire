@extends('layouts.app')

@section('content')
<div class="container">

        <div class="col-8">
{{--            <div class="card">--}}
                <h1 class="p-lg-4">Phone Book</h1>
                    @livewire('phone')
                </div>
{{--            </div>--}}
</div>
@endsection
