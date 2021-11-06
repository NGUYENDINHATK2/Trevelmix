<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GG driver</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col-12">

                <br> <br>

                <form action="admin/searchtour" method="get" enctype="multipart/form-data">
                
                    @csrf
                    <input type="text" name="keyword" class="form-control">

                    <br> <br>

                    <input type="submit" class="btn btn-warning" value="Upload">

                </form>
            </div>
        </div>
    </div>
    <br>
    <br>

    <img src="https://docs.google.com/uc?id=1D8I19QqoTmyWXknHAS3Idn9FeY05Iy_S" alt="ss">

</body>
</html>