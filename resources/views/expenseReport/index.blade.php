@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col">
            <h1>Reports</h1>
        </div>
    </div>        
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="{!! url('/expense_reports/create') !!}">Create a new report</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach($ExpenseReports as $expenseReport)
                    <tr>
                        <!-- <td> {{ $expenseReport->title }} </td> -->
                        <td><a href="{{ url("/expense_reports/".$expenseReport->id) }}" >{{$expenseReport->title}}</a></td>
                        <td><a href="{{ url("/expense_reports/".$expenseReport->id."/edit") }}" >EDIT</a></td>
                        <td><a href="{{ url("/expense_reports/".$expenseReport->id."/confirmDelete") }}" >DELETE</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
@endsection