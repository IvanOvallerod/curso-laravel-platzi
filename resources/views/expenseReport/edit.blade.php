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
            <h1>Edit Report {{ $report->id }}</h1>
        </div>
    </div>        
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="{!! url('/expense_reports') !!}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{!! url('/expense_reports/'. $report->id) !!}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Type a title" value="{{ old('title') }}">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
@endsection