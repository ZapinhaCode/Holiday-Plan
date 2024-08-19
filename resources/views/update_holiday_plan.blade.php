@extends('layout')

@section('content')
<div class="container-md">
    <h1 class="title-screen"><b>Update Holiday Plan  <i class="fa-solid fa-calendar"></i></b></h1>

    @if(session('error'))
        <div class="alert alert-danger">
            <b>{{ session('error') }}</b>
        </div>
    @endif

    <div class="container-fluid">
        <form action="{{ route('holiday.update', $holidayPlan->id) }}" method="POST">
            @method('PUT')
            @csrf
            @include('form_holiday_plan')
        </form>
    </div>
</div>
@endsection