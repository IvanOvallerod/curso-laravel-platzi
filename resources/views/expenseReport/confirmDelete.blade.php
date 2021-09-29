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
            <h1>Delete Report {{ $report->id }}</h1>
        </div>
    </div>        
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="{!! url('/expense_reports') !!}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{!! url('/expense_reports/'. $report->id) !!}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-primary" type="submit">Delete</button>
            </form>
        </div>
    </div>
</body>
</html>
@endsection