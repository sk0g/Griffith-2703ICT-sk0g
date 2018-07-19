<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple Bootstrap Example</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class = "row" id="navbar">
                <div class="col-sm-9">Social Network</div>
                <div class="col-sm-1">Photos</div>
                <div class="col-sm-1">Friends</div>
                <div class="col-sm-1">Login</div>
            </div>
            
            <br> <br>
            
            <div class = "row">
                <div class="col-sm-3" id="left-nav-bar">
                    <form>
                        Name: <input type="text" name="name">
                    </form><br>
                    
                    <form>
                        Message: <input type="text" placeholder="Enter new message..." name="message">
                    </form>
                </div>
                
                <div class="col-sm-9" id="right-post-list">
                    Firstname Lastname <br> <br> <br>
                    
                    <div class=row id="content">
                        <span class="pull-left">
                            <image src="https://i.imgur.com/0u6dOqz.png" width=64 height=64></image>
                        </span>
                        
                        <span class="pull-right">
                            21/09/2007 11:46:59<br>
                            Cras ac ipsum id orci fermentum dictum sodales laoreet felis. Maecenas non.
                        </span>
                    </div> <br>
                    
                <div class=row id="content">
                    <span class="pull-left">
                        <image src="https://i.imgur.com/WPjA12S.png" width=64 height=64></image>
                    </span>
                    
                    <span class="pull-right">
                        16/05/2008 12:28:38<br>
                        Curabitur tincidunt diam eu urna lobortis, at convallis ante elementum. Morbi eu.
                    </span>
                </div> <br>
                
                <div class=row id="content">
                    <span class="pull-left">
                        <image src="https://i.imgur.com/SwX5v3I.png" width=64 height=64></image>
                    </span>
                    
                    <span class="pull-right">
                        17/09/2005 10:53:01<br>
                        Nam eleifend iaculis nunc, non posuere ante vehicula a. Morbi dictum tincidunt.
                    </span>
                </div> <br>
            </div>
        </div>
    </body>
</html>