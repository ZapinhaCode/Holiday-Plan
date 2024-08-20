@extends('navbar.layout')

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
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center" width="20%">Title</th>
                        <th class="text-center" width="35%">Description</th>
                        <th class="text-center" width="15%">Date</th>
                        <th class="text-center" width="30%">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @if (!empty($holidayPlans))
                        @foreach ($holidayPlans as $holidayPlan)
                            <tr>
                                <td class="text-center">{{ $holidayPlan->title }}</td>
                                <td class="text-center">{{ $holidayPlan->description }}</td>
                                <td class="text-center">{{ \Carbon\Carbon::parse($holidayPlan->date)->format('Y-m-d') }}</td>
                                <td class="text-center">
                                    <a class="d-inline-block" href="{{ route('holiday.edit', $holidayPlan->id) }}">
                                        <button class="btn btn-warning btn-sm" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                                    </a>

                                    <a class="d-inline-block" href="{{ route('holiday.show', $holidayPlan->id) }}">
                                        <button class="btn btn-primary btn-sm" title="Show"><i class="fa-solid fa-circle-exclamation"></i></button>
                                    </a>

                                    <a class="d-inline-block" href="{{ route('holiday.generatePDF', $holidayPlan->id) }}">
                                        <button class="btn btn-secondary btn-sm" title="Generate PDF"><i class="fa-solid fa-file-pdf"></i></button>
                                    </a>

                                    <form action="{{ route('holiday.destroy', $holidayPlan->id) }}" method="POST" class="d-inline" onsubmit="return confirmDelete()">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" title="Delete"><i class="fa-regular fa-calendar-xmark"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="4">No records were found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection