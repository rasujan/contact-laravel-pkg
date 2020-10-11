<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Contact Us</title>
</head>
<body class="container">
    <div class="d-flex justify-content-center">
    <header class="h3"> Contact Us </header>
    </div>
    <div class="col-md-6">
        <form action="{{route('contact')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
                
              </div>
              <div class="form-group">
                <label for="email" name="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="text-area">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3"> </textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>    
    </div>
    </div>
</body>
</html>