<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    
    <nav id="topNav" class="navbar">        
    
        <a class="navbar-brand" href="index.php" title="Home">
            <img src="img/nav-logo.png" alt="BookReplacer">
        </a>
        
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="registration.php" class="nav-link">Registrati</a>
            </li>
        </ul>
            
    </nav>

    <main class="container-fluid d-flex">

        <div class="container-fluid d-flex justify-content-center align-self-center">
        
            <form action="php/login.php" method="POST" class=" d-flex flex-column p-5 border border-2 rounded">
        
                <div class="form-group">
                    <input type="text" name="username" id="username" placeholder="Inserisci username" required ="required" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Inserisci password" required ="required" class="form-control">
                </div>
                <div class="form-group d-flex justify-content-center">
                    <button type="submit" id="submit" name="submit" class="btn btn-primary btn-form">Accedi</button>
                </div>

                <?php 
                    if (isset($_GET['message'])) { ?>
     		        <div class="d-flex justify-content-center"><?php echo $_GET['message']; ?></div>
     	        <?php } ?>

            </form>
        
        </div>

    </main>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>