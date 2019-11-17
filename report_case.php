<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Report Case</title>
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
                
                <a href="#" style="border-top: thin #fff solid;">Report Case</a>
                <a href="#">Last reports</a>
                <a href="#">Action</a>
            
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
            
            
            <h3>Report Case form</h3>
            <form id="report_case" action="#" method="post" style="width:calc(90%-10px);padding:5px; margin:0 5%;">
                <h5>You can attach a photo by selecting one from phone gallery or take it using your phone camera</h5>
                <img src="img/take-picture-icon-7.jpg" style="margin:3% 25%;width:50%;height:calc(width-50%);background-color:#f8f9fa;border-radius:50%;"/>
                
                <textarea id="incident" style="display:block;text-align:left;margin:2% 5%;padding:2%;background:none;outline:none;border-bottom:medium solid #6c757d;width:86%;height:40px;resize: none;" placeholder="Enter details of the incident such as such as the location names of the offender etc">
                </textarea>
                
                <textarea id="address" style="display:block;text-align:left;margin:5%;padding:2%;background:none;outline:none;border-bottom:medium solid #6c757d;width:86%;height:40px;resize: none;" placeholder="Enter details" >
                    
                </textarea>
            
                <textarea id="add_info" style="display:block;text-align:left;margin:5%;padding:2%;background:none;outline:none;border-bottom:medium solid #6c757d;width:86%;height:40px;resize: none;" placeholder="Enter details of the incident such as such as the location names of the offender etc">
                </textarea>
                
                <input type="submit" style="width:90%;Height:30%;margin:0 5%;padding:5%;background-color:#5533ff;color:#f8f9fa;font-size:1.7em;pointer:cursor;font-weight:500;" value="Report Case">
            
            </form>                
            </section>
            
            
        </div>
        
    </body>
</html>