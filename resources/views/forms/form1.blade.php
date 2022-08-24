<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container" my-5>
       <h1>Basic form</h1>
       <form action="{{ route('form1_data') }}" method="post">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input class="form-control" type="text" placeholder="Name" name="name">
        </div>
        <div class="mb-3">
            <label>age</label>
            <input class="form-control" type="number" placeholder="age" name="age">
        </div>
        <div class="text-center">
        <button class="btn btn-primary w-25">Send</button>
        </div>
    </form>

    </div>
</body>
</html>
