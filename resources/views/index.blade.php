@extends('layout')

@section('content')
    <div class="container-md">
        <div class="container-fluid">
            @if(session('sucesso'))
                <div class="alert alert-success">
                    <b class="text-body-secondary">{{ session('sucesso') }}</b>
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger">
                    <b class="text-body-secondary">{{ session('error') }}</b>
                </div>
            @endif

            <div class="align-button-right">
                <a href="{{ route('holiday.add') }}">
                    <button class="btn btn-lg style-button" type="button">
                        <i class="fa-solid fa-calendar-plus"></i> Create Plan
                    </button>
                </a>
            </div>
        </div>

        <div class="container">
            <table class="table table-striped table-hover style-table">
                <thead>
                    <tr>
                        <th class="text-center" width="20%">Title</th>
                        <th class="text-center" width="35%">Description</th>
                        <th class="text-center" width="15%">Date</th>
                        <th class="text-center" width="30%">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection