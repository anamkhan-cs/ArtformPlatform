<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

  #footer .copyright {
            color: #bbb;
            font-size: 0.9rem;
            margin: 0 0 2rem 0;
            padding: 0 1rem;
            text-align: center;
        }


#main{
     position:absolute; 
     top:10px;
     left:10px;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 15px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

.log a{
  position:absolute;
  margin-top:100%;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

#imagic{
padding-left:20px;

}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body >
  <link rel="icon" href="logo/logo.png">


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img id="imagic" src="logo/logowhite.png" width='50%'> 
  <a href="home.php">Home</a>
  <a href="artists.php">Artist</a>
  <a href="about.php">About</a>
  <a href="contact.php">Contact</a>
<div class="log">
  <a href="login2.php">Login</a>
</div>
</div>



<div id="main" >

  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
           <footer id="footer">
                <div class="copyright">
                    &copy; ArtformPlatform. All rights reserved. 
                </div>
            </footer>


     
</body>
</html> 
