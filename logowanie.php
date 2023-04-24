<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Logowanie</title>
</head>

<body>
    <section class="vh-100 bg-primary bg-gradient">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-5">
                    <div class="card bg-dark text-light radius-1r">
                        <div class="card-body pt-3 text-center">
                            <h3 class="card-title fw-bolder my-4">Logowanie</h3>
                            <h6 class="card-subtitle my-4">Podaj login i haslo</h6>
                            <div class="card-text px-3">
                                <form method="post">
                                    <div class="form-floating my-4">
                                        <input type="text" class="form-control bg-dark text-white" id="floatingInput"
                                            name="login" placeholder="login" autofocus>
                                        <label class="text-white label-nobg" for="floatingInput">Login</label>
                                    </div>
                                    <div class="form-floating my-4">
                                        <input type="password" class="form-control bg-dark text-white"
                                            id="floatingPassword" name="haslo" placeholder="password">
                                        <label class="text-white label-nobg" for="floatingPassword">Hasło</label>
                                    </div>
                                    <button class="btn btn-dark border-white border-1 my-4 mx-3"
                                        type="submit">Zaloguj</button>
                                </form>
                            </div>
                        </div>
                        <div class='card-footer text-center'>
                            <small class=''>Nie masz konta? | <a href="rejestracja.php">Kliknij by sie zarejestrowac</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>