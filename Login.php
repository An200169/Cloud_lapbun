<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/jquery-3.2.0.min.js"/></script>
<script src="js/jquery.dataTables.min.js"/></script>
<script src="js/dataTables.bootstrap.min.js"/></script>
<?php
    include_once("connection.php");
    if(isset($_POST['btnLogin']))
    { 
        $us = $_POST['txtUsername'];
        $pa = $_POST['txtPass'];
        $err = "";
        if($us == "")
        {
            $err .= "Enter Username, please!</br>";
        }
        if($pa == "")
        {
            $err .= "Enter password, please!</br>";
        }
        if($err!=""){
            echo $err;
        }else{
            include_once("connection.php");
            $pass = md5($pa);
            $res = pg_query($conn," SELECT Username, Password, state FROM user WHERE Username = '$us' AND Password = '$pass'");
            $row = pg_fetch_array($res);
            if(pg_num_rows($res)==1){
                $_SESSION["us"] = $us;
                $_SESSION["admin"] = $row["state"];
                if($row["state"] == 1){
                    echo '<meta http-equiv="refresh" content="0;URL=indexadmin.php"/>';
                }else{
                    echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
                }
            }else{
                echo "Your're loged in fail";
            }
        }   
    }
?>
<h1>Login</h1>
<form id="f" name="f" method="POST" action="">
<div class="row">
    <div class="form-group">				    
        <label for="txtUsername" class="col-sm-2 control-label">Username(*):  </label>
		<div class="col-sm-10">
		      <input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Username" value=""/>
		</div>
      </div>  
      
    <div class="form-group">
		<label for="txtPass" class="col-sm-2 control-label">Password(*):  </label>			
		<div class="col-sm-10">
		      	<input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Password" value=""/>
		</div>
	</div> 
	<div class="form-group"> 
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
        	<input type="submit" name="btnLogin"  class="btn btn-primary" id="btnLogin" value="Login"/>
            <input type="submit" name="btnCancel"  class="btn btn-primary" id="btnLogin" value="Cancel"/>
		</div>  
	</div>
 </div>
    
</form>
   