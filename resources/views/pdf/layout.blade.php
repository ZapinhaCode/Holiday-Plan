<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Holiday Plan PDF</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 12px;
                line-height: 1.5;
                color: #333;
                margin: 0;
                padding: 0;
            }
            h1 {
                background-color: #ff0000;
                color: white;
                padding: 10px;
                text-align: center;
                font-size: 24px;
                margin-bottom: 20px;
            }
            p {
                margin: 10px 0;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            th, td {
                padding: 10px;
                border: 1px solid #ddd;
                text-align: left;
            }
            th {
                background-color: #ff0000;
                color: white;
            }
        </style>
    </head>
    <body>
        <h1>{{ 'Holiday Plan: ' . $holidayPlan->title }}</h1>
        <p><strong>Date Created PDF:</strong> {{ $date }}</p>
        <p>Planning a holiday is an exciting process that allows you to take a break from the routine and explore new destinations, cultures, and experiences. Whether you’re dreaming of a relaxing beach vacation, an adventurous mountain trek, or a cultural city tour, careful planning ensures that your holiday is both enjoyable and memorable.</p>
    
        <table>
            <thead>
                <tr>
                    <th width="20%">Title</th>
                    <th width="20%">Location</th>
                    <th width="20%">Date</th>
                    <th width="20%">Participants</th>
                    <th width="20%">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">{{ $holidayPlan->title }}</td>
                    <td class="text-center">{{ $holidayPlan->location }}</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($holidayPlan->date)->format('Y-m-d') }}</td>
                    <td class="text-center">
                        @if(is_array($holidayPlan->participants))
                            {{ implode(', ', $holidayPlan->participants) }}
                        @else
                            {{ $holidayPlan->participants == null ? 'No participant has been registered.' : $holidayPlan->participants }}
                        @endif
                    </td>
                    <td class="text-center">{{ $holidayPlan->description }}</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
