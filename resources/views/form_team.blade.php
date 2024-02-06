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
    <form action="/create-team" method="post" class="p-5 mt-5 d-flex bg-white flex-column justify-content-center align-items-center">
        @csrf
        @if(session('msg'))
            <script>alert({session('msg')})</script>
        @endif
        <h1>Input Klub</h1>
            <div class="d-flex flex-column justify-content-center align-items-center">
                @error('nama')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                <div class="form-control">
                    <label>Nama Klub</label>
                    <input type="text" name="nama">
                </div>
                
                @error('kota')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                <div class="form-control">
                    
                    <label>Kota Klub</label>
                    <input type="text" name="kota">
                
                </div>
            </div>

            <button type="submit" class="btn btn-primary mb-2">Save</button>
            <a href="/" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</body>
</html>