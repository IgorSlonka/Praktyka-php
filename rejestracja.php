<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Rejestracja</title>
</head>

<body>
    <section class="vh-100 bg-primary bg-gradient">
        <div class="container h-100 py-4">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-5">
                    <div class="card bg-dark text-light">
                        <div class="card-body pt-3 text-center">
                            <h3 class="card-title fw-bolder my-3">Rejestracja</h3>
                            <h6 class="card-subtitle my-3">Podaj wymagane dane</h6>
                            <div class="card-text px-3">
                                <form action='includes/signup.inc.php' method="post">
                                    <div class="row col my-4">
                                        <div class="form-floating col">
                                            <input type="text" class="form-control bg-dark text-white"
                                                id="floatingInput" name="name" placeholder="imie" autofocus>
                                            <label class="text-white label-nobg" for="floatingInput">Imie</label>
                                        </div>
                                        <div class="form-floating col">
                                            <input type="text" class="form-control bg-dark text-white"
                                                id="floatingInput" name="surname" placeholder="nazwisko" autofocus>
                                            <label class="text-white label-nobg" for="floatingInput">Nazwisko</label>
                                        </div>
                                    </div>
                                    <div class="form-floating my-4">
                                        <input type="email" class="form-control bg-dark text-white" id="floatingInput"
                                            name="mail" placeholder="mail" autofocus>
                                        <label class="text-white label-nobg" for="floatingInput">Email</label>
                                    </div>
                                    <div class="form-floating my-4">
                                        <input type="tel" class="form-control bg-dark text-white" id="floatingInput" name="tel" placeholder="telefon">
                                        <label class="text-white label-nobg" for="floatingInput">Telefon</label>
                                    </div>
                                    <div class="form-floating mt-4 mb-2">
                                        <input type="password" class="form-control bg-dark text-white"
                                            id="floatingPassword" name="haslo" placeholder="password">
                                        <label class="text-white label-nobg" for="floatingPassword">Hasło</label>
                                    </div>
                                    <button class="btn btn-dark border-white border-1 spaced px-5 text-uppercase my-2"
                                        type="submit" name="submit">Zarejestruj</button>
                                </form>
                            </div>
                        </div>
                        <div class='card-footer text-center'>
                            <span>Masz juz konto? |
                                <a class="btn btn-dark btn-sm border-white border-1" href='logowanie.php'>Zaloguj
                                    sie</a>
                            </span>
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