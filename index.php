<?php

    include "logique.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOTSRTAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- BOOTSRTRAP JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>

    <!--GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">

    <!-- font awesome kit -->
    <script src="https://use.fontawesome.com/ef2f45084e.js"></script>


    <!-- My StyleSheet -->
    <link href="style.css" type="text/css" rel="stylesheet">
    

    <title>Suivi de l'épidémie de COVID-19</title>
</head>
<body>
<div id="bg">
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1>COVID 19</h1>
        <h5 class="text-muted">Suivi de l'épidémie de COVID-19</h5>
    </div>
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmé</h5>
                <?php echo $total_confirmed;?>
            </div>
            <div class="col-4 text-success">
                <h5>Rétabli</h5>
                <?php echo $total_recovered;?>
            </div>
            <div class="col-4 text-danger">
                <h5>Décédé</h5>
                <?php echo $total_deaths;?>
            </div>
            
        </div>
    </div>
    <div class="container bg-light p-3 my-3 text-center">
        <h5 class="text-info">la prévention est le seul remède.</h5>
        <p class="text-muted">rester à l'intérieur, rester en sécurité</p>
    </div>
    </div>
    <div class="container-fluid">
        <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Les Pays</th>
                    <th scope="col">Confirmé</th>
                    <th scope="col">Rétabli</th>
                    <th scope="col">Décédé</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data as $key => $value){
                        $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
                ?>
                    <tr>
                        <th><?php echo $key;?></th>
                        <td>
                        <?php echo $value[$days_count]['confirmed'];?>
                            <?php if($increase != 0) {?>
                            <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase?></small>
                            <?php }?>
                        </td>
                        <td>
                             <?php echo $value[$days_count]['recovered'];?>
                        </td>
                        <td>
                        <?php echo $value[$days_count]['deaths'];?>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
        </div>
    </div>
    <footer class="footer mt-auto py-3 bg-light bg-light">
  <div class="container text-center">
    <span class="text-muted">Copyright &copy; 2021 Said Bboudkhil.</span>
  </div>
</footer>
</body>
</html>