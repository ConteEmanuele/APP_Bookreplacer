<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Ricerca libri</title>
</head>
<body>
    
    <nav id="topNav" class="navbar">
        
        <a class="navbar-brand" href="dashboard.php" title="Home">
            <img src="img/nav-logo.png" alt="BookReplacer">
        </a>

        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a href="reservation.php" class="nav-link">Le tue prenotazioni</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">Logout</a>
            </li>
        </ul>
        
    </nav>

    <main class="container-fluid">

        <div id="info" class="m-3">
            <h2>Ricerca</h2>

            <p>
                Inserisci il titolo del libro che vuoi cercare e clicca sul bottone "cerca" per trovare il libro che desideri.
            </p>

        </div>

        <div id="searchBar" class="d-flex justify-content-between searchBar p-2">
            <div class="input-group">
                <input id="inputField" type="text" class="form-control" placeholder="Cerca il titolo del libro">
                <div class="input-group-append">
                    <button id="searchButton" class="btn btn-outline-secondary btn-research" type="button">Cerca</button>
                </div>
            </div>
        </div>

        <div id="books" class="container-fluid mt-4">

            <div class="row justify-content-between">

                <div id="title_0" class="col p-3 font-weight-bold d-flex justify-content-center">Titolo</div>
                <div id="author_0" class="col p-3 font-weight-bold d-flex justify-content-center">Autore</div>
                <div id="publisher_0" class="col p-3 font-weight-bold d-flex justify-content-center">Casa Editrice</div>
                <div id="year_0" class="col p-3 font-weight-bold d-flex justify-content-center">Anno di pubblicazione</div>
                <div id="conditions_0" class="col p-3 font-weight-bold d-flex justify-content-center">Condizioni</div>

            </div>

            <div id="results"></div>
            
            <template id="templateRow">
                <div class="row justify-content-between">

                    <div id="title_" class="col p-3 d-flex justify-content-center"></div>
                    <div id="author_" class="col p-3 d-flex justify-content-center"></div>
                    <div id="publisher_" class="col p-3 d-flex justify-content-center"></div>
                    <div id="year_" class="col p-3 d-flex justify-content-center"></div>
                    <div id="conditions_" class="col p-3 d-flex justify-content-center"></div>

                </div>    
            </template>

        </div>
    </main>


<script src="js/search.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>