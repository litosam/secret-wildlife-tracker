<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Profile</title>
<link type="text/css" rel="stylesheet" href="css/main.css"/>
    <link type="text/css" rel="stylesheet" href="css/test.css"/>
<style>
    .logout {
        background-image: url(img/logout_escaping_business_man.png);
        background-position: center;
        background-size: cover;
    }    
    
    .logout:after {
        content: "";
        vertical-align: bottom;
        vertical-align: text-bottom !important;
    }
    
    .monthly {
        background-image: url(img/monthly_icon.svg);
        background-color:lawngreen;
        background-position: center;
        background-size: cover;
    }    
    
    .monthly:after {
        content: "";
        vertical-align: bottom;
        vertical-align: text-bottom !important;
    }
    
     .quarterly {
        background-image: url(img/quarterly_icon.jpg);
        background-color: orange;
        background-position: center;
        background-size: cover;
    }    
    
    .quarterly:after {
        content: "";
        vertical-align: bottom;
        vertical-align: text-bottom !important;
    }


.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #343a40;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top:0;
}

.user_info {
  position: relative;
  padding-top:5%;
  margin: 0 0 5% 0;
  width: 100%;
  height: 30%;
  background-color: #fff;
}

.user_info img {
    width: 70px;
    height: 70px;
    margin: 5%;
    float: left;
    
    }
    
.user_info h3 {
  margin-top: 5%;
  text-overflow: ellipsis;
  float: left !important;
  overflow: hidden;
}

.user_info hr {
  width: 100%;
  float: left;
  border: 1px solid red;
}

.sidenav a:link{
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 1em;
  color: #818181;
  display: block;
  transition: 0.3s;
  border-bottom: thin #fff solid;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 15px;
  font-size: 36px;
  margin-left: 50px;
  border-bottom: 0 !important;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 1em;}
}
</style> 
    
</head>
    <body>
        <div id="container">
            
            
            <div class="banner" style="color:#f8f9fa !important;">
            <span style="font-size:30px;float:left;cursor:pointer;margin-left%;:5" onclick="openNav()">&#9776;</span>
            
                <h2 style="float:left;padding-top:0;color:#f8f9fa;margin-left:10px;">Pangolin Path</h2>
                <img src="img/pangolin.png" Style="width:50px;height:50px;float:left;background-color:#f8f9fa;padding:5px;border-radius:50%;"/>
            </div>
            <div id="mySidenav" class="sidenav">
                
 	
 	<div class ="user_info">
 		<a href="javascript:void(0)" style="font-size:2em !important;" class="closebtn" onclick="closeNav()">&times;</a>
     		<img src="img/account-icon-5.jpg">
     		<h3>Hello Admin!</h3>
     		<hr>     		
 	</div>
                
                <a href="#" style="border-top: thin #fff solid;">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
            
            </div>
        
        

        <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
        </script>

            <h4>
                Welcome, <span>Admin</span>  
            </h4>
            
            <h5 style="margin-top:5%;">
                <span class ='VHT_labels VHT_time'> From:</span> 01 Nov 2019
                <span class='VHT_labels'> To:</span>  31 Nov 2019
                
            </h5>
            
            <h3>Case Reports</h3>
            
            <div style="border:thin solid red;">
             One
            </div>
            <div style="border:thin solid red;">
                Two
            </div>
            <div style="border:thin solid red;">
             Three
            </div>
            </section>
            
            
        </div>
        
    </body>
</html>