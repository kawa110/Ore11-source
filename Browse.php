<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml"><head id="ctl00_Head1">








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
    <link id="ctl00_Imports" rel="stylesheet" type="text/css" href="https://web.archive.org/web/20110429090438cs_/http://www.roblox.com/CSS/Base/CSS/AllCSS.ashx?v=20110416qrwef&amp;t=RBX2"><link id="ctl00_Link1" rel="icon" type="image/vnd.microsoft.icon" href="https://web.archive.org/web/20110429090438im_/http://www.roblox.com/favicon.ico"><link rel="Stylesheet" type="text/css" href="https://web.archive.org/web/20110429090438cs_/http://www.roblox.com/css/Base/CSS/party.css"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="Content-Language" content="en-us"><meta name="author" content="ROBLOX Corporation"><meta id="ctl00_metadescription" name="description" content="Free Games and Building Games!  A virtual world for kids with user-created castles, cars, spaceships, swords, battles, trucks, zombies and awesome destruction.  Build, battle, chat, or just hang out online."><meta id="ctl00_metakeywords" name="keywords" content="free games, online games, building games, virtual world">
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-11419793-1']);
    _gaq.push(['_setCampSourceKey', 'rbx_source']);
    _gaq.push(['_setCampMediumKey', 'rbx_medium']);
    _gaq.push(['_setCampContentKey', 'rbx_campaign']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://web.archive.org/web/20110429090438/https://ssl' : 'https://web.archive.org/web/20110429090438/http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</head>



<body>






<form name="aspnetForm" method="post" action="/web/20110429090438/http://www.roblox.com/Browse.aspx" id="aspnetForm">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="0uwfDHcjn71CXLVufwNSH12nW4QP/5whx/9Sab2Y6ZMp7t+e9/HKeNedx5a+WU3E2l4jOCeApfPpjSPaRXBdDa4m8uWpPvx0ScJ/1yQ34krwUwkamJSIBzaXzvbqgR2N3nfFBSinf58kvAO7xwppJZP3r/l4xYx9BOFmTPHgZ9LZWT4H0jgEH3jh+9ktZhBPunBatIb4aOCL9D2JQEGuSd1/aPXgMNPMDjKV6+ysIdwB02BgJg2N8v7G46MBK/AoWu75henXNx1Ox6r0S7c0xmu+MKydDVsmDppnEjcyJKdtmZ/MvjwUStluEznLv65h0NqNgdj2cmsA9cXA6gI8wdmDpIKHqryjGNvBjNTqFQLt98bYAJ/t237HWzU8oXUmhL3HzkmAL52QcHrfzIYAcIvMHBOdRfSLn9gIJMxgmQcVHu/L3K4m6grW4rnXxkrPTavg1ilVtqV2ubADt6ggZUrA2EJS5W8kkjLGM7XlUJtOj4kUwUd/vj5wyvwYj+d/IV9rQ1hhTZ5G9F2s8A+HpIo1tHoDpbzKFpk1YmGByp3dfBb54exwpfeX6M+t1QAYPS+fUYOhdVtbfv26Eiwldkf07m/l6eGuCoug0rjyReqwSuB6TX/zlT6WJGqqSX8eZV8TEBGKZzB+iWd94hZ2hjpoB//vst+FwRVhyUUqdb619BS6cqSAKEwP85tIZ+DTdOX1CLyvgxthgmqqBSZMhsUyUJ3Y4L2mYL/Tqf4Yia5t7vk5">
</div>


<script type="text/javascript">
//<![CDATA[
function checkRobloxInstall(){window.location="/Install/Unsupported.aspx"; return false;}//]]>
</script>

<script src="/web/20110429090438js_/http://www.roblox.com/ScriptResource.axd?d=eZvqsAL4AmRtzbnaOB80MwARwIXA35e6JuOLMiAlP9W1rWcRwURTMQJygdcxRc17gmy45yPPNs3fSF-OQCCbshEcoWzalc2tkuLEHVNguDpKuvkuf2ckpsiMNWsXuyNk3zHoiMr9A0BAmkqMtvsw5oRWV51MNf9k5FwPMPe9Aj14FzsGEUiMWRfVjNMqcHy_T3nnwzRuBNwLGu8SwUuXgy_w5X4pN09llwWTY8pCZ89ATcZPBKYz3iVCXosZQTai2vpoadsf-jI3UeM4mmgxFBY8YsGQDqhTMNn2H2YAxMFydy0uHV1gUY7QgDAXlNhWcIvrY_FImWak9BhbatTubSO1TyzbMHzb-Rbxur4xFrO7UilTrkWIMY927lgtoPQ5c-fmOtDeseqq2BaN_as3jd-CItEzcyZSPD8yaIcAybyaC8Pg6a5AV3QIcZmnkngnkf9TlYeIbkBg342kivZg2TkZP_hHBSxgWEXhy2537fo01zOqDysnMzv7FUW6NdA8ik8RSAAVm8XumxAEaKvjMMdwaPvh4y-uwMtwMrfCIGuFmjWFNq0x0wTomkoUH0ahBUdg4qSEXMoNI7AVMX2F8IocBBl4MWQcAzAlgpRDimtjLxfvOwmnZP-f2vRzqY-KVj5cpw2" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="/web/20110429090438js_/http://www.roblox.com/js/jquery.cookies.2.2.0.1.js" type="text/javascript"></script>
<script src="/web/20110429090438js_/http://www.roblox.com/js/jquery.jsoncookie.js" type="text/javascript"></script>
<script src="/web/20110429090438js_/http://www.roblox.com/js/jquery-extensions.js" type="text/javascript"></script>
<script src="/web/20110429090438js_/http://www.roblox.com/Game/PlaceLauncher.js" type="text/javascript"></script>
<script src="/web/20110429090438js_/http://www.roblox.com/Install/ClientInstaller.js" type="text/javascript"></script>
<script src="/web/20110429090438js_/http://www.roblox.com/js/MadStatus.js" type="text/javascript"></script>
<script src="/web/20110429090438js_/http://www.roblox.com/js/jquery.cookie.js" type="text/javascript"></script>
<div>

  <input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="">
  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="4WjJo0ZZ0G6WmYIYE5sxsRUOxzcXkGfocXaxlNerrZwWry6C9fkKnSUgAyph6H4tbqNxZoZGHbFRKX2zsic00rkwHMjNTCqWTziHa+ZVHs8jqTLkXlzXRDFXMTRfzoWd2KdL/g==">
</div>
<div id="fb-root"></div>

    
        <!-- Used for execution that must happen before page load -->
    

    
    
    
    
    <div id="MasterContainer">
      <!-- Begin chat bar -->
        <div style="width: 100%">
        
        </div>
    <!-- End chat bar -->
    
        <div id="Container">
            <div id="HeaderContainer">
            
                <div id="AdvertisingLeaderboard">
                    
            <iframe id="ctl00_cphBannerAd_BannerAds_AsyncUserAdIFrame" allowtransparency="true" frameborder="0" scrolling="no" height="102" src="/web/20110429090438if_/http://www.roblox.com/Ads/IFrameUserAdContent.aspx?userAdTypeId=1&amp;forceAdToShow=False" width="728"></iframe>
        
    

                </div>
            
             
            <div id="Header">
                <div id="Banner">
                    
                            

<div id="Options">
  <div id="Authentication">
    <span id="AuthenticationBannerSpan" style="width: 100px;">
    Hi <?php echo htmlspecialchars($_SESSION["username"]); ?>
        <a id="ctl00_BannerOptionsLoginView_BannerOptions_Anonymous_LoginHyperLink" href="logout.php">Logout</a>
    </span>
  </div>
  <div id="Settings"></div>
</div>
                            <a id="Logo" href="/web/20110429090438/http://www.roblox.com/Default.aspx" style="cursor: pointer; border: none;"></a>
                        
                    
                            


                        
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
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/Classic.png">
                        <a href="/web/20110429090438/http://www.roblox.com/all-games" title="All" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">All</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/town-and-city-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/City.png">
                        <a href="/web/20110429090438/http://www.roblox.com/town-and-city-games" title="Town and City" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Town and City</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/medieval-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/Castle.png">
                        <a href="/web/20110429090438/http://www.roblox.com/medieval-games" title="Fantasy" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Fantasy</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/sci-fi-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/SciFi.png">
                        <a href="/web/20110429090438/http://www.roblox.com/sci-fi-games" title="Sci-Fi" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Sci-Fi</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/ninja-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/Ninja.png">
                        <a href="/web/20110429090438/http://www.roblox.com/ninja-games" title="Ninja" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Ninja</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/scary-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/Cthulu.png">
                        <a href="/web/20110429090438/http://www.roblox.com/scary-games" title="Scary" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Scary</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/pirate-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/Pirate.png">
                        <a href="/web/20110429090438/http://www.roblox.com/pirate-games" title="Pirate" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Pirate</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/adventure-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/Adventure.png">
                        <a href="/web/20110429090438/http://www.roblox.com/adventure-games" title="Adventure" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Adventure</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/sports-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/Sports.png">
                        <a href="/web/20110429090438/http://www.roblox.com/sports-games" title="Sports" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Sports</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/funny-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/LOL.png">
                        <a href="/web/20110429090438/http://www.roblox.com/funny-games" title="Funny" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Funny</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/wild-west-cowboy-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/WildWest.png">
                        <a href="/web/20110429090438/http://www.roblox.com/wild-west-cowboy-games" title="Wild West" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Wild West</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/war-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/ModernMilitary.png">
                        <a href="/web/20110429090438/http://www.roblox.com/war-games" title="War" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">War</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/skatepark-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/Skatepark.png">
                        <a href="/web/20110429090438/http://www.roblox.com/skatepark-games" title="Skate Park" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Skate Park</a>
                    </div>
                
                    <div style="float: left; width: 50%; text-align: left;" onclick="window.location = '/gametutorials-games'">
                        <img src="/web/20110429090438im_/http://www.roblox.com/images/GenreIconsInverted/Tutorial.gif">
                        <a href="/web/20110429090438/http://www.roblox.com/gametutorials-games" title="Tutorial" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">Tutorial</a>
                    </div>
                
        </div>
        <div class="dropdownmainnav" style="width:145px;border-left:0px;z-index:1023">
            <div onclick="window.location = '/games.aspx'"><a href="/web/20110429090438/http://www.roblox.com/games.aspx" style="font-size:15px;"><b>Most Popular</b></a><br></div>
            <div onclick="window.location = '/games.aspx?m=TopFavorites'"><a href="/web/20110429090438/http://www.roblox.com/games.aspx?t=PastWeek&amp;m=TopFavorites" style="font-size:15px;">Top Favorites</a><br></div>
            <div onclick="window.location = '/games.aspx?m=Featured'"><a href="/web/20110429090438/http://www.roblox.com/games.aspx?m=Featured" style="font-size:15px;">Featured Games</a><br></div>
            <div onclick="window.location = '/Catalog.aspx?m=TopFavorites&amp;c=9&amp;t=AllTime&amp;d=All&amp;q='"><a href="/web/20110429090438/http://www.roblox.com/Catalog.aspx?m=TopFavorites&amp;c=9&amp;t=AllTime&amp;d=All&amp;q=" style="font-size:15px;">Search Games</a></div>
        </div>
    </div>
    <ul id="ctl00_Menu_MenuUL">
        
                <li><a id="ctl00_Menu_hlMyRobloxLink_hlMyRoblox" href="My/Home.php" style="">My ROBLOX</a></li>
            
        
        <li class="gamesLink"><a id="hlGames" href="/Games.php" style="" title="Games">Games</a> <a id="gamesMenuToggle" onclick="toggleDropDownNav();" style="padding:0 2px;cursor:pointer;border:none;background:url(https://web.archive.org/web/20110429090438im_/http://www.roblox.com/images/topNav_arrow_white.png) no-repeat;height:6px;width:10px;display:inline-block;*margin-bottom:5px;"></a></li>
        <li><a id="hlCatalog" href="/Catalog.php" style="" title="Catalog">Catalog</a></li>
        <li><a id="hlBrowse" href="/Browse.php" style="font-weight: bold" title="People"><h1>People</h1></a></li>
        <li><a id="hlBuildersClub" href="/web/20110429090438/http://www.roblox.com/Upgrades/BuildersClub.aspx" style="" title="Builders Club">Builders Club</a></li>
        <li id="ctl00_Menu_ContestsMenuTab"><a id="hlContests" href="/web/20110429090438/http://www.roblox.com/Contests/" style="" title="Contests">Contests</a></li>
        <li><a id="hlForum" onclick="" href="/web/20110429090438/http://www.roblox.com/Forum/Default.aspx" style="" title="Forum">Forum</a></li>
        <li><a id="hlNews" href="https://web.archive.org/web/20110429090438/http://blog.roblox.com/" target="_blank" title="News">News</a><a id="hlNewsFeed" href="https://web.archive.org/web/20110429090438/http://blog.roblox.com/?feed=rss" title="RSS" class="icons rss_icon" style="padding: 0; margin: 0 4px 0 0; border: none;"></a> <a style="display:none;" id="h1Twitter" href="https://web.archive.org/web/20110429090438/http://www.twitter.com/roblox" target="_blank" title="The ROBLOX Twitter Feed" class="icons twitter_icon"></a></li>
        <li><a id="hlParents" href="/web/20110429090438/http://www.roblox.com/Parents.aspx" style="" title="Parents">Parents</a></li>
        <li><a id="hlHelp" href="/web/20110429090438/http://www.roblox.com/Help/Builderman.aspx" style="" title="Help">Help</a></li>
    </ul>
</div>
            </div>
            </div>
            
            
           
            
   
           
           
            <div id="Body">
                
    

    <script type="text/javascript">
        function GroupsSearch() {
            var search_text = $("#ctl00_cphRoblox_SearchTextBox").val();
            window.location.href = "Groups/Search.aspx?sort=Member+Count&filter=All&val=" + search_text;
        }
    </script>

    <div id="ctl00_cphRoblox_ContainerPanel">
  
        <div id="BrowseContainer" style="font-family: Verdana, Sans-Serif; text-align: left">
            <div style="width: 876px; height: 28px; clear: both; display: block; background-color: #006699;" class="StandardBox">
                <table width="876px" border="0">
                    <tbody><tr>
                        <td style="font-family: Verdana, Helvetica, Sans-Serif; font-size: 12pt; color: Black;
                            font-weight: bold; text-align: left;">
                            Search:
                        </td>
                        <td style="text-align: right;">
                            <span class="SearchBox">
                                <input name="ctl00$cphRoblox$SearchTextBox" type="text" maxlength="100" id="ctl00_cphRoblox_SearchTextBox" style="width: 400px;"></span>
                            <span class="SearchButton">
                                <input type="submit" name="ctl00$cphRoblox$SearchButton" value="Search Users" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$SearchButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_cphRoblox_SearchButton"></span>
                            <input name="ctl00$cphRoblox$Button1" type="button" id="ctl00_cphRoblox_Button1" value="Search Groups" onclick="GroupsSearch()" onkeypress="GroupsSearch()">
                            <input type="text" style="visibility: hidden; position: absolute">
                            <!-- Enter key submission hack - IE -->
                            <span class="SearchLinks"><sup>&nbsp;|&nbsp;</sup><a href="#" style="color: #FFFFFF"><sup>Tips</sup>
                                <span>Exact Phrase: "red brick"<br>
                                    Find ALL Terms: red and brick =OR= red + brick<br>
                                    Find ANY Term: red or brick =OR= red | brick<br>
                                    Wildcard Suffix: tel* (Finds teleport, telamon, telephone, etc.)<br>
                                    Terms Near each other: red near brick =OR= red ~ brick<br>
                                    Excluding Terms: red and not brick =OR= red - brick<br>
                                    Grouping operations: brick and (red or blue) =OR= brick + (red | blue)<br>
                                    Combinations: "red brick" and not (tele* or tower) =OR= "red brick" - (tele* | tower)<br>
                                    Wildcard Prefix is NOT supported: *port will not find teleport, airport, etc.
                                
                                
                                </span></a></span>
                        </td>
                    </tr>
                </tbody></table>
            </div>
            <div class="SearchError">
                </div>
            <div style="float:left;min-height:600px">
            
                    
                    <div>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM users";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Username</th>";
                                        echo "<th>Description</th>";
                                        echo "<th>Join Date</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['username'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['created_at'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
  </div>
                
            </div>  
            <div style="float:right">
                
            </div>
            <br style="clear:both">
        </div>
    
</div>

            </div>
            
<div id="Footer">
    <div class="FooterNav">
        <a id="ctl00_rbxFooter_PrivacyHyperLink" href="/web/20110429090438/http://www.roblox.com/info/Privacy.aspx"><b>Privacy Policy</b></a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_AdvertiseHyperLink" href="https://web.archive.org/web/20110429090438/http://sales.roblox.com/">Advertise with Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_ContactHyperLink" href="/web/20110429090438/http://www.roblox.com/info/ContactUs.aspx">Contact Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_AboutHyperLink" href="/web/20110429090438/http://www.roblox.com/info/About.aspx">About Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_FreeGamesHyperLink" href="/web/20110429090438/http://www.roblox.com/FreeGames.aspx">Free Games</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_JobsHyperLink" href="https://web.archive.org/web/20110429090438/http://jobs.roblox.com/">Jobs</a>
    </div>
    <div class="FooterNav">
        <div id="ctl00_rbxFooter_SEOGenreLinks" class="SEOGenreLinks"><a href="/web/20110429090438/http://www.roblox.com/town-and-city-games" title="Town and City Games">Town and City</a>&nbsp;|&nbsp;<a href="/web/20110429090438/http://www.roblox.com/medieval-games" title="Fantasy Games">Fantasy</a>&nbsp;|&nbsp;<a href="/web/20110429090438/http://www.roblox.com/sci-fi-games" title="Sci-Fi Games">Sci-Fi</a>&nbsp;|&nbsp;<a href="/web/20110429090438/http://www.roblox.com/ninja-games" title="Ninja Games">Ninja</a>&nbsp;|&nbsp;<a href="/web/20110429090438/http://www.roblox.com/scary-games" title="Scary Games">Scary</a>&nbsp;|&nbsp;<a href="/web/20110429090438/http://www.roblox.com/pirate-games" title="Pirate Games">Pirate</a>&nbsp;|&nbsp;<a href="/web/20110429090438/http://www.roblox.com/adventure-games" title="Adventure Games">Adventure</a>&nbsp;|&nbsp;<a href="/web/20110429090438/http://www.roblox.com/sports-games" title="Sports Games">Sports</a>&nbsp;|&nbsp;<a href="/web/20110429090438/http://www.roblox.com/funny-games" title="Funny Games">Funny</a>&nbsp;|&nbsp;<a href="/web/20110429090438/http://www.roblox.com/wild-west-cowboy-games" title="Wild West Games">Wild West</a>&nbsp;|&nbsp;<a href="/web/20110429090438/http://www.roblox.com/war-games" title="War Games">War</a>&nbsp;|&nbsp;<a href="/web/20110429090438/http://www.roblox.com/skatepark-games" title="Skate Park Games">Skate Park</a>&nbsp;|&nbsp;<a href="/web/20110429090438/http://www.roblox.com/gametutorials-games" title="Tutorial Games">Tutorial</a></div>
    </div>
    <p class="Legalese">
        ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a id="ctl00_rbxFooter_hlRobloxCorporation" href="/web/20110429090438/http://www.roblox.com/info/About.aspx">ROBLOX Corporation</a>, ©2011. Patents pending.
        <br>
        ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex,<br> and no resemblance to the products of these companies is intended.<br>Use of this site signifies your acceptance of the <a id="ctl00_rbxFooter_hlTermsOfService" href="/web/20110429090438/http://www.roblox.com/info/TermsOfService.aspx">Terms and Conditions</a>.
        <br>
    </p>
</div>
   
        </div>
    </div>
    
    
        <script src="https://web.archive.org/web/20110429090438js_/http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
        <script type="text/javascript">            _uacct = "UA-486632-1"; _udn = "roblox.com"; urchinTracker(); __utmSetVar('Visitor/Spider');</script>
    

    
    
    

<script type="text/javascript">
//<![CDATA[
(function() {var fn = function() {RobloxLaunch._LaunchGamePage = "/Install/Download.aspx";Sys.Application.remove_load(fn);};Sys.Application.add_load(fn);})();__utmSetVar('ROBLOX_Home_Skin_Left_400x1180');__utmSetVar('ROBLOX_Home_Skin_Right_400x1180');__utmSetVar('Roblox_Default_Top_728x90');Roblox.Controls.Image.ErrorUrl = "https://web.archive.org/web/20110429090438/http://www.roblox.com/Analytics/BadHtmlImage.ashx";Roblox.Controls.Image.IE6Hack($get('ctl00_BannerAlertsLoginView_BannerAlerts_Anonymous_rbxAlerts_SignupAndPlayHyperLink'));//]]>
</script>
</form>
    
    



</body></html>
