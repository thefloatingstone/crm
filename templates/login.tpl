<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Titre de la page</title>
        <link rel="stylesheet" href="/css/libs/bootstrap.min.css">
        <link rel="stylesheet" href="/css/libs/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="/css/libs/font-awesome.min.css">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body style="background-color: @grey">

        <div style="height: 300px"></div>
        
        <div class="container">
            
            <div class="row">
                <div class="span7 offset3" >
                    <div id="logo">CRM</div>
                    <form method="post" class="form-horizontal" action="dashboard.html">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Email</label>
                            <div class="controls">
                                <input type="text" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Password</label>
                            <div class="controls">
                                <input type="password" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <label class="checkbox">
                                    <input type="checkbox"> Remember me
                                </label>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </body>
</html>