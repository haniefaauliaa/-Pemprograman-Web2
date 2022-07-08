<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div id="body" class="col-md-12">
        <h3>Edit users</h3>
        
        <?php echo form_open("users/update/$users->id")?>
          <div class="form-group row">
            <label for="username" class="col-4 col-form-label">Username</label> 
            <div class="col-8">
                <input id="username" name="username" placeholder="Masukkan username" type="text" class="form-control" value="<?php echo $users->username ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-4 col-form-label">password</label> 
            <div class="col-8">
                <input id="password" name="password" placeholder="Masukkan password" type="password" class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
                <input id="email" name="email" placeholder="Masukkan email" type="text" class="form-control" value="<?php echo $users->email ?>">
            </div>
          </div>