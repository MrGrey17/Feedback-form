<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <form class="form-horizontal" method="POST" action="/contact">
            {{ csrf_field() }}
                
            <div class="form-group">
                <label for="Name">You're Name and Surname: </label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">You're Email: </label>
                <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
            </div>
                
            <div class="form-group">
                <button type="submit" class="btn btn-primary" value="Send">Send</button>
            </div>
        
        </form>
    </div>
</body>
</html>