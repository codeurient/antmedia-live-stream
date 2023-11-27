<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Home Page</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a type="button" class="btn btn-dark">logout</a>
        </div>
    </header>

<div class="col-md-12">
    <h1>Add Stream</h1>
    <br>
    <form method="post" action="{{ route('stream.store') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="input-group row">
                <label for="name" class="col-sm-2 col-form-label">Name: </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" id="name" value="">
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="description" class="col-sm-2 col-form-label">Description: </label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="description" id="description" cols="72" rows="7"></textarea>
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="preview" class="col-sm-2 col-form-label">Preview: </label>
                <div class="col-sm-10">
                    <label class="btn btn-default btn-file">
                        Upload <input type="file" style="display: none" name="preview" id="preview">
                    </label>
                </div>
            </div>
            <br>
            <button class="btn btn-success">Save</button>
        </div>
    </form>
</div>
</div>






<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
