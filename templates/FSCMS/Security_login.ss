<!DOCTYPE html>
<html>
<head>
    <% base_tag %>

    <title>CMS login &raquo; $SiteConfig.Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    $MetaTags(false)

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>

    <div class="container">

        <div id="logo-box">
            <img src="{$logoImage}">
        </div>

        <div class="container-inner">
        
            <div class="header">
                <h1>Login to CMS</h1>
            </div>

            <div class="form-box">
                $Form
            </div>

        </div>

    </div>

</body>
</html>