<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Loan Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include_once('includes/header.php');?>

    <div class="container">
        <div class="card register">
            <div class="card-body">
                <form>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Phone Number</label>
                       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"                     placeholder="Enter Phone Number">
                       <small id="emailHelp" class="form-text text-muted">We'll never share your phone number with anyone            else.</small>
                     </div>
                     <div class="form-group">
                       <label for="exampleInputPassword1">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                     </div>

                     <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
            </div>
        </div>
    </div>
</body>
</html>