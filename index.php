<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Homepage </title>
        <link rel = "stylesheet" href = "/css/homepage.css" type = "text/css" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
    </head>
    <body>
        <div class = "loader">
            <div class = "logo">
                <a href = "homepage.html">
                    <div class = "logo_img">
                        <img class = "logo_img" src = "/img/ungineering_logo.svg">
                    </div>
                </a>
                <div class = "text">
                    <h2>
                        <span class = "logo_un"; style = "color: #F04C4D">un</span>
                        <span class = "logo_gineering"; style = "color: black">gineering</span>
                    </h2>
                </div>
                <div class = "tagline"; style = "color: black"> 
                    <p> A bit of knowledge is good. A byte is better.</p>
                </div>
            </div>
        </div>
        <form id="update_status" method="POST" action="post_status.php">
            <?php
                if(!isset($_SESSION['id'])) {
                    ?>
                    <div class = "header">
                        <div class = "login_tab"; style = "color: rgb(240, 76, 77)">
                                <a class = "login_reference" href = "login_grid.html"> Login </a>
                        </div>
                        <div class = "new_user_tab"; style = "color: white">
                            <a class = "register_reference" href = "register_sm.html"> New user </a>
                        </div>
                    </div>
                    <?php
                }
                else {
                    ?>
                    <div class = "header">
                        <div class = "dashboard_tab"; style = "color: red">
                                <a href = "/"><b> My Dashboard </b></a>
                        </div>
                        <div class = "logout_tab"; style = "color: white">
                            <a href = "logout.php"> Logout </a>
                        </div>
                    </div>
                    <div class = "status">
                        <div> 
                            <p class = "write"; style = "color: #505050"> <b> Write something here </b> <p>
                        </div>
                        <input type = "textarea" class = "input" name = "status"
                        >
                        <input type = "submit" class = "submit" value = "POST" style = "color: white">
                    </div>
                    <?php
                }
            ?>
        </form>        
        <div class = "data">
            <div class = "a">
                <p><b> Name </b></p>
            </div>
            <div class = "b">
                <p> Hello, deleniti atque corrrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam nobis est et eligendi optio cumque nihil impedit quo minus id quod maxime placeat. </p>
            </div>
            <div class = "absolute">
                <p> Time: 24:40 Hrs IST | 26 Dec </p>
            </div>
        </div>
        <div class = "data">
            <div class = "a">
                <p><b> Name </b></p>
            </div>
            <div class = "b">
                <p> Hello, deleniti atque corrrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam nobis est et eligendi optio cumque nihil impedit quo minus id quod maxime placeat. </p>
            </div>
            <div class = "absolute">
                <p> Time: 24:40 Hrs IST |26 Dec </p>
            </div>
        </div>
        <div class = "data">
            <div class = "a">
                <p><b> Name </b></p>
            </div>
            <div class = "b">
                <p> Hello, deleniti atque corrrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam nobis est et eligendi optio cumque nihil impedit quo minus id quod maxime placeat. </p>
            </div>
            <div class = "absolute">
                <p> Time: 24:40 Hrs IST |26 Dec </p>
            </div>
        </div>
        <div class = "data">
            <div class = "a">
                <p><b> Name </b></p>
            </div>
            <div class = "b">
                <p> Hello, deleniti atque corrrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam nobis est et eligendi optio cumque nihil impedit quo minus id quod maxime placeat. </p>
            </div>
            <div class = "absolute">
                <p> Time: 24:40 Hrs IST |26 Dec </p>
            </div>
        </div>
        <div class = "data">
            <div class = "a">
                <p><b> Name </b></p>
            </div>
            <div class = "b">
                <p> Hello, deleniti atque corrrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam nobis est et eligendi optio cumque nihil impedit quo minus id quod maxime placeat. </p>
            </div>
            <div class = "absolute">
                <p> Time: 24:40 Hrs IST |26 Dec </p>
            </div>
        </div>
        <div class = "footer">
            <div class = "rel"; style = "color: #B5B4B5">Connect with us at</div>
            <div class = "abso"; style = "color: #B5B4B5"> For any questions / doubts, write us at- <br/> <b> queries@ungineering.com </b> </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/post_status.js"></script>
    </body>
</html>
