<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-lg-6 col-md-6 mb-2 mt-5">             
        <div class="card">
            <div class="card-body">
                <p><b>Message :</b>{{$clientmessages->message}}</p>
                <h5>Name : {{$clientmessages->name}}</h5>
                <h6 class=""><b>Email :</b> <span class="brand">{{$clientmessages->email}}</span></h6>
                <h6 class=""><b>Phone :</b> <span class="Model">{{$clientmessages->phone}}</span></h6>
            </div>
        </div>                   
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</html>