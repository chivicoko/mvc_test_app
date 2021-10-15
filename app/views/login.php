<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Project | Login</title>
    <link href="<?= ASSET_PATH ."css/app.css"?>" rel="stylesheet">
</head>
<body class="bg-primary">
    <div class="container h100">
        <div class="row mt-5">
            <div class="mx-auto  my-auto col-md-5 col-sm-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center">MVC Project</h2>
                        <hr>
                        <h4 class="mt-3 mb-4"><strong><big><?=$loginUser?>!!!</big></strong></h4>  
                        <div>
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Email address</label>
                                            <input class="form-control" name="email_address">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Password</label>
                                            <input class="form-control" name="password">
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-primary btn-block" type="submit" value="Login">
                                        </div>
                                        <p>Don't have an account? <a href="<?=SR."register"?>">Register</a></p>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>