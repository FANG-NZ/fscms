<!DOCTYPE html>
<html lang="$Locale.RFC1766">
<head>
    <% base_tag %>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <title>$Title</title>
</head>

<body class="loading cms" 
    data-frameworkpath="$ModulePath(silverstripe/framework)"
    data-member-tempid="$CurrentMember.TempIDHash.ATT"
>

    <!-- Using FS CMS loading screen template -->
    <% include FSCMS\\Includes\\FSCMS_LoadingScreen %>

    <div class="cms-container fill-width" data-layout-type="custom">
        <!-- Using FS Menu -->
        $FSCMSMenu
	$Content
	$PreviewPanel
    </div>

    <% include SilverStripe\\Admin\\BrowserWarning %>
</body>
</html>
