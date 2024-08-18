@extends('layout')

@section('content')
<div class="container-md">
    <h1 class="title-screen"><b>Register Holiday  <i class="fa-solid fa-calendar-plus"></i></b></h1>

    @if(session('error'))
        <div class="alert alert-danger">
            <b>{{ session('error') }}</b>
        </div>
    @endif

    <div class="container-fluid">
        <form action="{{ route('holiday.save') }}" method="POST">
            @csrf
            @include('form_holiday_plan')
        </form>
    </div>
</div>
@endsection