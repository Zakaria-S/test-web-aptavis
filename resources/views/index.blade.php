<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Klasemen</title>
</head>
<body>
    <div class="p-2 d-flex justify-content-center align-items-center">
        <div class="w-25 d-flex justify-content-between align-items-center">
            <a href="/create-team" class="btn btn-primary">Tambah Klub</a>
            <a href="/create-pertandingan" class="btn btn-success">Tambah Pertandingan</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr class="table-dark">
                <th>No</th>
                <th>Klub</th>
                <th>Ma</th>
                <th>Me</th>
                <th>S</th>
                <th>K</th>                
                <th>GM</th>                
                <th>GK</th>            
                <th>Point</th>            
            </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{$team->nama}}</td>
            <td>{{$team->jumlah_main}}</td>
            <td>{{$team->menang}}</td>
            <td>{{$team->seri}}</td>
            <td>{{$team->kalah}}</td>
            <td>{{$team->goal_menang}}</td>
            <td>{{$team->goal_kalah}}</td>
            <td>{{$team->point}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>