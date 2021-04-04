<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap 4 Navbar with Logo Image</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css\proj.css">

</head>

<body>
    <div class="bs-example">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a href="#" class="navbar-brand"> MealPlanner </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Add Recipe</a>
                    <a href="#" class="nav-item nav-link">Plan Weekly Meal</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="register.php" class="nav-item nav-link">Sign Up</a>
                    <a href="#" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid h-100 p-5 fruit">
        <div class="row justify-content-start ">
            <div class="col-6 col-lg-4">
                <h1 class="display-4"> Planning Made Easy</h1>
                <h4> Welcome to MealPlanner</h4><br>
                <lead > A step in the right direction to a healthy lifestyle. Use this app to plan your meals weekly. No
                    more skipping meals because you're missing ingredients. Review your meals for the week and the
                    grocery list automatically updates.</lead>

                <br> <br>
                <h4>Start Planning</h4><br>
                <button type="button" class="btn btn-danger btn-lg">Sign Up</button>
                <button type="button" class="btn btn-danger btn-lg">Login</button>
            </div>
        </div>

    </div>




</body>

</html>