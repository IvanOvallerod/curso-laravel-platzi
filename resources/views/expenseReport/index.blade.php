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
            <h1>Reports</h1>
            <table class="table">
                @foreach($ExpenseReports as $expenseReport)
                    <tr>
                        <td> {{ $expenseReport->title }} </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
@endsection