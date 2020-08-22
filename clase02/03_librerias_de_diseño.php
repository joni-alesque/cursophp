<?php
    require '01_funciones.php';
    // validamos si enviamos el post    
    if(isset($_POST['submit'])){
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';       
    }else{
        echo '';
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Diseño con Bootstrap</title>
  </head>
  <style>
    body{
        padding: 50px;
    }
    form{
        margin: 0 auto;
        padding: 30px;
        width: 700px;
        height: auto;
        border-radius:10px;
        -webkit-box-shadow: -10px 13px 27px -6px rgba(0,0,0,0.75);
        -moz-box-shadow: -10px 13px 27px -6px rgba(0,0,0,0.75);
        box-shadow: -10px 13px 27px -6px rgba(0,0,0,0.75);
    }
  </style>
  <body>
    <form method="POST">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" name="email" class="form-control" id="inputEmail3">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="inputPassword3">
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
        <div class="col-sm-10">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">
                First radio
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">
                Second radio
            </label>
            </div>
            <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            <label class="form-check-label" for="gridRadios3">
                Third disabled radio
            </label>
            </div>
        </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <div class="col-sm-2">Checkbox</div>
        <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
            Example checkbox
            </label>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>