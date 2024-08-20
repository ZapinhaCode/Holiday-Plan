@extends('layouts.app')

@section('content')
    <div class="container-md">
        <h1 class="title-screen"><b>Show Holiday Plan  <i class="fa-solid fa-calendar"></i></b></h1>

        <div class="custom-table">
            <table class="table-style">
                <tbody>
                    <tr>
                        <th class="text-center">Title  <i class="fa-solid fa-file-lines"></i></th>
                        <td class="text-center">{{ $holidayPlan->title }}</td>
                    </tr>
    
                    <tr>
                        <th class="text-center">Location  <i class="fa-solid fa-map-location-dot"></i></th>
                        <td class="text-center">{{ $holidayPlan->location }}</td>
                    </tr>
    
                    <tr>
                        <th class="text-center">Date  <i class="fa-solid fa-plane-departure"></i></th>
                        <td class="text-center">{{ \Carbon\Carbon::parse($holidayPlan->date)->format('Y-m-d') }}</td>
                    </tr>
    
                    <tr>
                        <th class="text-center">Participants  <i class="fa-solid fa-users"></i></th>
                        <td class="text-center">{{ $holidayPlan->participants == null ? 'No participant has been registered.' : $holidayPlan->participants }}</td>
                    </tr>
    
                    <tr>
                        <th class="text-center">Description  <i class="fa-solid fa-comment-medical"></i></th>
                        <td class="text-center">{{ $holidayPlan->description }}</td>
                    </tr>
                </tbody>
            </table>            
        </div>

        <div class="form-group row button-save-cancel">
            <div class="col-sm-12" style="text-align: right">
                <a href="{{ route('index') }}" class="btn btn-effect-ripple btn-lg"><i class="fa-solid fa-arrow-right"></i> Back</a>
            </div>
        </div>    
    </div>
@endsection