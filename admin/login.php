<?php  
session_start();
?>        
<html>  
<head lang="en">  
    <meta charset="UTF-8">	    
    <title>Login</title> 

<script type="text/javascript">
	function validasi() {
		if(document.formLogin.username.value == "")
	   {
		 alert( "Masukkan nama!" );
		 document.formLogin.username.focus() ;
		 return false;
	   }
	   
	   if(document.formLogin.password.value == "")
	   {
		 alert( "Masukkan password!" );
		 document.formLogin.password.focus() ;
		 return false;
	   }
	}
</script>
	
</head>  
    
<body>	
<div class="container">  
    <div class="row">  
        <div class="col-md-5 col-md-offset-2">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Sign In</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" action="index.php?target=terimalogin" method="post" name="formLogin" onsubmit="return(validasi());" >  
                        <fieldset>  
                            
							<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-email" type="text" class="form-control" name="username" class="required" value="" placeholder="name" autofocus>                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" class="required" placeholder="password">
                            </div>
							<input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                            
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>   
</body>   
</html>  
  
