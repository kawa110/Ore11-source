<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" id="www-roblox-com" xmlns:fb="http://www.facebook.com/2008/fbml"><head id="ctl00_Head1">








    <!--[if lte IE 7]>
    <style>
    .Navigation .dropdownnavcontainer
    {
        margin-left:121px;
    }
    </style>
    <![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=7"><title>
  Free Games at ROBLOX.com
</title>
    <link id="ctl00_Imports" rel="stylesheet" type="text/css" href="https://web.archive.org/web/20110227000428cs_/http://www.roblox.com/CSS/Base/CSS/AllCSS.ashx?v=20110222qrwef&amp;t=RBX2"><link id="ctl00_Link1" rel="icon" type="image/vnd.microsoft.icon" href="https://web.archive.org/web/20110227000428im_/http://www.roblox.com/favicon.ico"><link rel="Stylesheet" type="text/css" href="https://web.archive.org/web/20110227000428cs_/http://www.roblox.com/chat/css/party.css"><link rel="Stylesheet" type="text/css" href="https://web.archive.org/web/20110227000428cs_/http://www.roblox.com/chat/css/party_leader.css"><link rel="Stylesheet" type="text/css" href="https://web.archive.org/web/20110227000428cs_/http://www.roblox.com/chat/css/party_invite.css"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="Content-Language" content="en-us"><meta name="author" content="ROBLOX Corporation"><meta id="ctl00_metadescription" name="description" content="Free Games and Building Games!  A virtual world for kids with user-created castles, cars, spaceships, swords, battles, trucks, zombies and awesome destruction.  Build, battle, chat, or just hang out online."><meta id="ctl00_metakeywords" name="keywords" content="free games, online games, building games, virtual world">
<script type="text/javascript" async="" src="http://web.archive.org/web/20110227000428/http://www.google-analytics.com/ga.js"></script><script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-11419793-1']);
    _gaq.push(['_setCampSourceKey', 'rbx_source']);
    _gaq.push(['_setCampMediumKey', 'rbx_medium']);
    _gaq.push(['_setCampContentKey', 'rbx_campaign']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'http://web.archive.org/web/20110227000428/https://ssl' : 'http://web.archive.org/web/20110227000428/http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
<meta name="google-site-verification" content="alM52ZeUABx_edKTvoawL3_tQ4VVr49r7IjWdBFMKPA"></head>



<body>





<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE4MTY5MDEzMzUPZBYCZg9kFgRmD2QWBAIEDxYCHgRocmVmBTAvQ1NTL0Jhc2UvQ1NTL0FsbENTUy5hc2h4P3Y9MjAxMTAyMjJxcndlZiZ0PVJCWDJkAgUPFgQfAAUXfi9UZXN0aW5nL1JCWDJTdHlsZS5jc3MeB1Zpc2libGVoZAIBD2QWBAICDw8WAh8BaGRkAgsPZBYCAgkPZBYQAgEPDxYCHgRUZXh0BSFMaXZlIEluIEEgRml2ZSBTdGFyIElzbGFuZCBSZXMuLi5kZAIDDw8WCB4KSXNVcmxGaW5hbGceCEltYWdlVXJsBTdodHRwOi8vdDJiZy5yb2Jsb3guY29tL2YwNTNkOTE4ODIxNWYxNTNiNTUwYzUwMTQyYTFjNzdmHgtDb21tYW5kTmFtZWUeD0NvbW1hbmRBcmd1bWVudGRkZAIFDw8WAh4LTmF2aWdhdGVVcmwFMi9MaXZlLUluLUEtRml2ZS1TdGFyLUlzbGFuZC1SZXNvcnQtaXRlbT9pZD02MzI4MjAyZGQCBw8WAh8CBQozIGRheXMgYWdvZAIJDxYCHwIFDTExNiwyNTkgdGltZXNkAgsPZBYCZg8WAh8CBQ8zLDgwMiwxMTAgdGltZXNkAg0PDxYIHwNnHwQFN2h0dHA6Ly90NWJnLnJvYmxveC5jb20vMWJkMzQxMjAwODVhOWI3OTExMDRlZTM0NTVmZjE1NjEfBWUfBmRkZAIPDw8WBB8HBRZ+L1VzZXIuYXNweD9JRD0xMTM0OTk0HwIFElNPTklDVEhFSEVER0VIT0dYWGRkGAgFI2N0bDAwJExlZnRHdXR0ZXJBZCRBc3luY0FkTXVsdGlWaWV3Dw9kZmQFLGN0bDAwJGNwaFJvYmxveCRMYXJnZVJlY3RBZCRBc3luY0FkTXVsdGlWaWV3Dw9kZmQFNWN0bDAwJGNwaFJvYmxveCRIb21lUGFnZUJvdHRvbUJhbm5lciRBc3luY0FkTXVsdGlWaWV3Dw9kZmQFJ2N0bDAwJGNwaFJvYmxveCRNb25leU1hY2hpbmUkTXVsdGlWaWV3MQ8PZGZkBTJjdGwwMCRjcGhCYW5uZXJBZCRIb21lVG9wQmFubmVyQWQkQXN5bmNBZE11bHRpVmlldw8PZGZkBSRjdGwwMCRSaWdodEd1dHRlckFkJEFzeW5jQWRNdWx0aVZpZXcPD2RmZAUZY3RsMDAkY3BoUm9ibG94JFZpZGVvVGVzdA8PZGZkBSNjdGwwMCRyYnhHb29nbGVBbmFseXRpY3MkTXVsdGlWaWV3MQ8PZGZkSAjMymnrY3ofdIPiB1SgydJ25Dc=">


<script type="text/javascript">
//<![CDATA[
function checkRobloxInstall(){window.location="/Install/Unsupported.aspx"; return false;}//]]>
</script>

<script src="/web/20110227000428js_/http://www.roblox.com/ScriptResource.axd?d=SkvMjlWerxMdBZyuoUvELxwhhZk_JnM2-39mQFWdLLgkss62C3-ueU2UNKDSt2ae5Mrvl86CDqKb18-70N32f0ExFsw41oWPKFJqGfdD3jYRdZOJdJfwH9lOA6aQOXQ_l78U9B1P7kiUkJmfG-4I6y_b-juql0D9uWONxaATJKu6SdsbMH11y97LikxowgPyOli-Ezq7TfcXklVuf0cT3yw0mAP3DH41rpEK5ovpHweL_t3kF1DjVZ1G1n4DSJi2rw1s7hC2IncUdoY2h2QItW06OEM4Z7UhXizaHQZWuXoHPMkwuvSvdJIZUO2aRfPC1TURuuJosoxQANkbD-5FiWF4HkgxV2mYXY1yhwHjCvqVEU20ew_S0GtVOGMSztbMJFfbFL7TjXz6HXUi-8apjsyUcp1UyeyF1iOdNwkLBvWwy4Z9d6HjGemmvs8TMAcpzWwz8h6Fc_vAUlg3-8tWJHROca5iPdWQx5hODpzOEaZSM841bgPH1TAyq2hloMEs3RjUDgw8IMs5H4EEG0-sXnVxIkVbN-MeNmLjS-iP3D-uH41o0" type="text/javascript"></script>
<script src="/web/20110227000428js_/http://www.roblox.com/js/jquery.cookies.2.2.0.1.js" type="text/javascript"></script>
<script src="/web/20110227000428js_/http://www.roblox.com/js/jquery.jsoncookie.js" type="text/javascript"></script>
<script src="/web/20110227000428js_/http://www.roblox.com/js/jquery-extensions.js" type="text/javascript"></script>
<script src="/web/20110227000428js_/http://www.roblox.com/Game/PlaceLauncher.js" type="text/javascript"></script>
<script src="/web/20110227000428js_/http://www.roblox.com/Install/ClientInstaller.js" type="text/javascript"></script>
<script src="/web/20110227000428js_/http://www.roblox.com/js/jquery.cookie.js" type="text/javascript"></script>
<script src="/web/20110227000428js_/http://www.roblox.com/ScriptResource.axd?d=Z1r-GSyX1rdNTMFXFk-ZYLehqbznf1SZKpdSECIBRkCuTON3fAFbFJZk2Mt1G8rek2MR8wKvUwofD6KTBfivBCL2UG0lTrfHFCpFvxF30x61RWXEKSg1YXgXdNV_Nj-Cyw35Ysvnc8yfw5IrZUFQEJoHncB-b76A9WyPydKwJsKDBqdS0" type="text/javascript"></script>
<script src="/web/20110227000428js_/http://www.roblox.com/Thumbs/Asset.asmx/js" type="text/javascript"></script>
<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBAKln9/+AgLjvtEjArL5/PEFAsHjqsEPdeSsTSRmXNVMPGt+we9ueU7uwXk=">

    
        <!-- Used for execution that must happen before page load -->
    

    
    
    
    
    <div id="MasterContainer">
     <!-- Begin chat bar -->
        <div style="width: 100%">
        
        </div>
    <!-- End chat bar -->
    
        <div id="Container">
            <div id="HeaderContainer">
            
    <div id="ctl00_cphBannerAd_topAdPanel">
  
    <div id="AdvertisingLeaderboard">
        
            <div id="ctl00_cphBannerAd_HomeTopBannerAd_OutsideAdPanel" class="AdPanel">
    
            <iframe id="ctl00_cphBannerAd_HomeTopBannerAd_AsyncAdIFrame" allowtransparency="true" frameborder="0" scrolling="no" height="90" src="/web/20110227000428if_/http://www.roblox.com/Ads/IFrameAdContent.aspx?v=2&amp;slot=Roblox_Home_Only_Top_728x90&amp;format=banner&amp;v=2" width="728"></iframe>
            
  </div>
            <a id="ctl00_cphBannerAd_HomeTopBannerAd_ReportAdButton" title="click to report an offensive ad" class="BadAdButton" href="javascript:__doPostBack('ctl00$cphBannerAd$HomeTopBannerAd$ReportAdButton','')">[ report ]</a>
              <script type="text/javascript">
          $(function()
                {
                  $(".AdPanel").css("z-index", 9998);
                });
            </script>
        
    

    </div>
    
</div>

             
            <div id="Header">
                <div id="Banner">
                    
                            

<div id="Options">
  <div id="Authentication">
    <span id="AuthenticationBannerSpan" style="width: 40px;">
        <a id="ctl00_BannerOptionsLoginView_BannerOptions_Anonymous_LoginHyperLink" href="Login/Default.aspx">Login</a>
    </span>
  </div>
  <div id="Settings"></div>
</div>
                            <a id="Logo" href="/web/20110227000428/http://www.roblox.com/Default.aspx" style="cursor: pointer; border: none;"></a>
                        
                    
                            
<div style="float: right; width: 203px;">
    <a id="ctl00_BannerAlertsLoginView_BannerAlerts_Anonymous_rbxAlerts_SignupAndPlayHyperLink" class="SignUpAndPlay" text="Sign-up and Play!" href="/web/20110227000428/http://www.roblox.com/Games.aspx" style="display:inline-block;cursor:pointer;"><img src="/web/20110227000428im_/http://www.roblox.com/images/Holiday3Button.png" border="0" onerror="return Roblox.Controls.Image.OnError(this)" blankurl="http://t1bg.roblox.com/blank-210x40.gif"></a>


</div>

                        
                </div>
                

<script type="text/javascript" language="javascript">
    function toggleDropDownNav()
    {
        if ($(".dropdownnavcontainer:visible").size() > 0)
        {
            $(".dropdownnavcontainer").hide();
            $("#gamesMenuToggle").css("background-position", "0 0");
        }
        else
        {
            $(".dropdownnavcontainer").show();
            $("#gamesMenuToggle").css("background-position", "0 -6px");
        }
    }
</script>

<div class="Navigation">
    <div class="dropdownnavcontainer">
        <div class="dropdownmainnav" style="z-index:1023;">
            
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/all-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/Classic.png">
                        <a href="/web/20110227000428/http://www.roblox.com/all-games" title="All" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">All</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/town-and-city-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/City.png">
                        <a href="/web/20110227000428/http://www.roblox.com/town-and-city-games" title="Town and City" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Town and City</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/medieval-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/Castle.png">
                        <a href="/web/20110227000428/http://www.roblox.com/medieval-games" title="Fantasy" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Fantasy</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/sci-fi-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/SciFi.png">
                        <a href="/web/20110227000428/http://www.roblox.com/sci-fi-games" title="Sci-Fi" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Sci-Fi</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/ninja-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/Ninja.png">
                        <a href="/web/20110227000428/http://www.roblox.com/ninja-games" title="Ninja" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Ninja</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/scary-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/Cthulu.png">
                        <a href="/web/20110227000428/http://www.roblox.com/scary-games" title="Scary" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Scary</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/pirate-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/Pirate.png">
                        <a href="/web/20110227000428/http://www.roblox.com/pirate-games" title="Pirate" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Pirate</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/adventure-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/Adventure.png">
                        <a href="/web/20110227000428/http://www.roblox.com/adventure-games" title="Adventure" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Adventure</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/sports-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/Sports.png">
                        <a href="/web/20110227000428/http://www.roblox.com/sports-games" title="Sports" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Sports</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/funny-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/LOL.png">
                        <a href="/web/20110227000428/http://www.roblox.com/funny-games" title="Funny" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Funny</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/wild-west-cowboy-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/WildWest.png">
                        <a href="/web/20110227000428/http://www.roblox.com/wild-west-cowboy-games" title="Wild West" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Wild West</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/war-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/ModernMilitary.png">
                        <a href="/web/20110227000428/http://www.roblox.com/war-games" title="War" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">War</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/skatepark-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/Skatepark.png">
                        <a href="/web/20110227000428/http://www.roblox.com/skatepark-games" title="Skate Park" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Skate Park</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/gametutorials-games'">
                        <img src="/web/20110227000428im_/http://www.roblox.com/images/GenreIconsInverted/Tutorial.gif">
                        <a href="/web/20110227000428/http://www.roblox.com/gametutorials-games" title="Tutorial" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Tutorial</a>
                    </div>
                
        </div>
        <div class="dropdownmainnav" style="width:145px;border-left:0px;z-index:1023">
            <div onclick="window.location = '/games.aspx'"><a href="/web/20110227000428/http://www.roblox.com/games.aspx" style="font-size:15px;"><b>Most Popular</b></a><br></div>
            <div onclick="window.location = '/games.aspx?m=TopFavorites'"><a href="/web/20110227000428/http://www.roblox.com/games.aspx?t=PastWeek&amp;m=TopFavorites" style="font-size:15px;">Top Favorites</a><br></div>
            <div onclick="window.location = '/games.aspx?m=Featured'"><a href="/web/20110227000428/http://www.roblox.com/games.aspx?m=Featured" style="font-size:15px;">Featured Games</a><br></div>
            <div onclick="window.location = '/Catalog.aspx?m=TopFavorites&amp;c=9&amp;t=AllTime&amp;d=All&amp;q='"><a href="/web/20110227000428/http://www.roblox.com/Catalog.aspx?m=TopFavorites&amp;c=9&amp;t=AllTime&amp;d=All&amp;q=" style="font-size:15px;">Search Games</a></div>
        </div>
    </div>
    <ul id="ctl00_Menu_MenuUL">
        
                <li><a id="ctl00_Menu_hlMyRobloxLink_hlMyRoblox" href="My/Home.php" style=""><h2>My ROBLOX</h2></a></li>
            
        
        <li class="gamesLink"><a id="hlGames" href="/Games.php" style="" title="Games"><h2>Games</h2></a> <a id="gamesMenuToggle" onclick="toggleDropDownNav();" style="padding:0 2px;cursor:pointer;border:none;background:url(/web/20110227000428im_/http://www.roblox.com/images/topNav_arrow_white.png) no-repeat;height:6px;width:10px;display:inline-block;*margin-bottom:5px;"></a></li>
        <li><a id="hlCatalog" href="/Catalog.php" style="" title="Catalog"><h2>Catalog</h2></a></li>
        <li><a id="hlBrowse" href="/Browse.php" style="" title="People"><h2>People</h2></a></li>
        <li><a id="hlBuildersClub" href="/web/20110227000428/http://www.roblox.com/Upgrades/BuildersClub.aspx" style="" title="Builders Club"><h2>Builders Club</h2></a></li>
        <li id="ctl00_Menu_ContestsMenuTab"><a id="hlContests" href="/web/20110227000428/http://www.roblox.com/Contests/" style="" title="Contests"><h2>Contests</h2></a></li>
        <li><a id="hlForum" onclick="" href="/web/20110227000428/http://www.roblox.com/Forum/Default.aspx" style="" title="Forum"><h2>Forum</h2></a></li>
        <li><a id="hlNews" href="http://web.archive.org/web/20110227000428/http://blog.roblox.com/" target="_blank" title="News"><h2>News</h2></a><a id="hlNewsFeed" href="http://web.archive.org/web/20110227000428/http://blog.roblox.com/?feed=rss" title="RSS" class="icons rss_icon" style="padding: 0; margin: 0 4px 0 0; border: none;"></a> <a style="display:none;" id="h1Twitter" href="http://web.archive.org/web/20110227000428/http://www.twitter.com/roblox" target="_blank" title="The ROBLOX Twitter Feed" class="icons twitter_icon"></a></li>
        <li><a id="hlParents" href="/web/20110227000428/http://www.roblox.com/Parents.aspx" style="" title="Parents"><h2>Parents</h2></a></li>
        <li><a id="hlHelp" href="/web/20110227000428/http://www.roblox.com/Help/Builderman.aspx" style="" title="Help"><h2>Help</h2></a></li>
    </ul>
</div>
            </div>
            </div>
            
            
           
            
   
     <div id="Body">
                    
    
    <div class="MyRobloxContainer">



        <script type="text/javascript">
            $(function() {
                var $username = $("#ctl00_cphRoblox_lRobloxLogin_UserName");
                var $password = $("#ctl00_cphRoblox_lRobloxLogin_Password");

                $username.focus(function() {
                    $(this).css("border-color", "#A5D0FF");
                });
                $username.blur(function() {
                    $(this).css("border-color", "#CCCCCC");
                });
                $password.focus(function() {
                    $(this).css("border-color", "#A5D0FF");
                });
                $password.blur(function() {
                    $(this).css("border-color", "#CCCCCC");
                });
            });
        </script>

        
        <div style="clear: both;"></div>
        <div class="Column1a">
            <div class="StandardBoxHeader" id="newLoginHeader" style="width:300px;">
               
               <span id="ctl00_cphRoblox_LoginHeader2">Sign Up to ORE11</span>
            </div>
            <div class="StandardBox" id="newLogin" style="height: 137px;width:300px;">
                <div id="ctl00_cphRoblox_LOLOLOLOL">
  
                    
  <div class="AspNet-Login">
                            <div class="wrapper">
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="MediumButton" value="Sign Up">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
  </div>
                
</div>
            </div>
        </div>
        
        <div style="clear: both;"></div>
        
        
    </div>
    <div style="clear: both"></div>

    <script type="text/javascript">
        function CheckDate() {
            $('#lblError').attr('style', 'display: none');
            var lyears = document.getElementById("ctl00_cphRoblox_lstYears");
            var year = lyears.options[lyears.selectedIndex].value;
            var lmonths = document.getElementById("ctl00_cphRoblox_lstMonths");
            var month = lmonths.options[lmonths.selectedIndex].text;
            if (year == "" || year == "Select Year" || month == "" || month == "Select Month") {
                $('#lblError').attr('style', 'color: Red;');
            }
            else {
                $('#ChooseBirthdate').slideToggle();
                $('#ChooseGender').slideToggle();
            }
        }
    </script>


                </div>      
           
            
            
<div id="Footer">
    <div class="FooterNav">
        <a id="ctl00_rbxFooter_PrivacyHyperLink" href="/web/20110227000428/http://www.roblox.com/info/Privacy.aspx"><b>Privacy Policy</b></a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_AdvertiseHyperLink" href="http://web.archive.org/web/20110227000428/http://sales.roblox.com/">Advertise with Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_ContactHyperLink" href="/web/20110227000428/http://www.roblox.com/info/ContactUs.aspx">Contact Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_AboutHyperLink" href="/web/20110227000428/http://www.roblox.com/info/About.aspx">About Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_FreeGamesHyperLink" href="/web/20110227000428/http://www.roblox.com/FreeGames.aspx">Free Games</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_JobsHyperLink" href="http://web.archive.org/web/20110227000428/http://jobs.roblox.com/">Jobs</a>
    </div>
    <div class="FooterNav">
        <div id="ctl00_rbxFooter_SEOGenreLinks" class="SEOGenreLinks"><a href="/web/20110227000428/http://www.roblox.com/town-and-city-games" title="Town and City Games">Town and City</a>&nbsp;|&nbsp;<a href="/web/20110227000428/http://www.roblox.com/medieval-games" title="Fantasy Games">Fantasy</a>&nbsp;|&nbsp;<a href="/web/20110227000428/http://www.roblox.com/sci-fi-games" title="Sci-Fi Games">Sci-Fi</a>&nbsp;|&nbsp;<a href="/web/20110227000428/http://www.roblox.com/ninja-games" title="Ninja Games">Ninja</a>&nbsp;|&nbsp;<a href="/web/20110227000428/http://www.roblox.com/scary-games" title="Scary Games">Scary</a>&nbsp;|&nbsp;<a href="/web/20110227000428/http://www.roblox.com/pirate-games" title="Pirate Games">Pirate</a>&nbsp;|&nbsp;<a href="/web/20110227000428/http://www.roblox.com/adventure-games" title="Adventure Games">Adventure</a>&nbsp;|&nbsp;<a href="/web/20110227000428/http://www.roblox.com/sports-games" title="Sports Games">Sports</a>&nbsp;|&nbsp;<a href="/web/20110227000428/http://www.roblox.com/funny-games" title="Funny Games">Funny</a>&nbsp;|&nbsp;<a href="/web/20110227000428/http://www.roblox.com/wild-west-cowboy-games" title="Wild West Games">Wild West</a>&nbsp;|&nbsp;<a href="/web/20110227000428/http://www.roblox.com/war-games" title="War Games">War</a>&nbsp;|&nbsp;<a href="/web/20110227000428/http://www.roblox.com/skatepark-games" title="Skate Park Games">Skate Park</a>&nbsp;|&nbsp;<a href="/web/20110227000428/http://www.roblox.com/gametutorials-games" title="Tutorial Games">Tutorial</a></div>
    </div>
    <p class="Legalese">
        ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a id="ctl00_rbxFooter_hlRobloxCorporation" href="/web/20110227000428/http://www.roblox.com/info/About.aspx">ROBLOX Corporation</a>, ©2011. Patents pending.
        <br>
        ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex,<br> and no resemblance to the products of these companies is intended.<br>Use of this site signifies your acceptance of the <a id="ctl00_rbxFooter_hlTermsOfService" href="/web/20110227000428/http://www.roblox.com/info/TermsOfService.aspx">Terms and Conditions</a>.
        <br>
    </p>
</div>
   
        </div>
    </div>
    
    
        <script src="http://web.archive.org/web/20110227000428js_/http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
        <script type="text/javascript">            _uacct = "UA-486632-1"; _udn = "roblox.com"; urchinTracker(); __utmSetVar('Visitor/Spider');</script>
    

    
    
    


</form>
    
<form id="LoginForm" action="http://web.archive.org/web/20110227000428/https://www.roblox.com/login/dologin.aspx" method="post">
<input type="hidden" id="username" name="username">
<input type="hidden" id="password" name="password">
</form>



</body></html>
