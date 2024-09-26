<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">

    <div class="container mt-5">
        <h1 class="text-center mb-4">Main Menu</h1>

        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Members</h5>
                        <p class="card-text">View and manage members.</p>
                        <a href="members.php" class="btn btn-primary">Go to Members</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Movies</h5>
                        <p class="card-text">View and manage movies.</p>
                        <a href="movies.php" class="btn btn-success">Go to Movies</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Actors</h5>
                        <p class="card-text">View and manage actors.</p>
                        <a href="actors.php" class="btn btn-warning">Go to Actors</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Movie Actors</h5>
                        <p class="card-text">View and manage movie actors relationships.</p>
                        <a href="movieactors.php" class="btn btn-info">Go to Movie Actors</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Purchases</h5>
                        <p class="card-text">View and manage purchases records.</p>
                        <a href="purchases.php" class="btn btn-danger">Go to Purchases</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
