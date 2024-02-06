<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-primary-subtle d-flex justify-content-center align-items-center">
    <form action="/create-pertandingan" method="post" class="p-5 mt-5 d-flex bg-white flex-column justify-content-center align-items-center ">
        @csrf
        <h1>Input Skor</h1>
        <div class="d-flex flex-column align-items-center">
            @if(Session::has('team'))
                <div class="alert alert-danger">
                    {{Session::get('team')}}
                </div>
            @enderror
            @error('home_id')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
            <div class="d-flex justify-content-between">
                <select name="home_id" class="form-select">
                    @foreach($teams as $team)
                        <option value="{{$team->id}}">{{$team->nama}}</option>
                    @endforeach
                </select>
                -
                <select name="away_id" class="form-select">
                    @foreach($teams as $team)
                        <option value="{{$team->id}}">{{$team->nama}}</option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-between">
                @error('home_score')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                <div class="form-control">
                    <input type="number" name="home_score">
                </div>
                @error('away_score')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                <div class="form-control">
                    <input type="number" name="away_score">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mb-2">Save</button>
            <a href="/" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</body>
</html>