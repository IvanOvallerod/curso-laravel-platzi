@extends('layout.base')

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
            <h1>Report {{ $report->title }}</h1>
        </div>
    </div>        
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="{!! url('/expense_reports') !!}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-warning" href="{!! url('/expense_reports/'. $report->id.'/confirmSendMail') !!}">Send mail</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Detalles...</h3>
            <table class="table">
                @foreach($report->expenses as $expense)
                    <tr>
                        <td>{{ $expense->description }}</td>
                        <td>{{ $expense->created_at }}</td>
                        <td>{{ $expense->amount }}</td>
                        
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="{{ url("/expense_reports/".$report->id."/expenses/create") }}">Add new expense</a>
        </div>
    </div>
</body>
</html>
@endsection