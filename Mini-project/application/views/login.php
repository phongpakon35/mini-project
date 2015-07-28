<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>                                                                                                  
 <head>
  
   <meta charset="UTF-8">
  <title> เข้าสู่ระบบ </title>
    <link href="<?php echo base_url('asesst/css/bootstrap.min.css');?>" rel="stylesheet" >
    <script src="<?php echo base_url('asesst/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('asesst/js/jquery-1.11.2.min.js');?>"></script>

<style>


    .header {
             height:100%;
             width:100%;
             background: url(img/22.jpg);
             background-size: cover;
        }

        .container {
             margin-top: 0px;
             
        }


  </style>



  
 </head>

 <body>
 

    <div class="row co-md-12 co-mx-12  header">
        <div class="container">
                <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/login');?>">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <h4>  <label for="inputEmail3" class="col-sm-4 control-label">กรุณา Login เข้าสู่ระบบ</label></br></br>     </h4> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-5">
                             <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-5">
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Sign in</button> 
                            <a href="<?php echo base_url('index.php/testregister');?>"></a>
                        </div>
                    </div>

     
                </form>
        </div>
    </div>



 </body>
</html>
