<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>																									
 <head>
  
  
   

  <title> ระบบสืบค้นหนังสือห้องสมุด </title>
	
	<link href="<?php echo base_url('asesst/css/bootstrap.min.css');?>" rel="stylesheet" >
	<link href="<?php echo base_url('asesst/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('asesst/css/freelancer.css');?>" rel="stylesheet">

	<script src="<?php echo base_url('asesst/js/jquery-1.11.2.min.js');?>"></script>
	<script src="<?php echo base_url('asesst/js/bootstrap.min.js');?>"></script>

 	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		/*

		* Based on Cover by https://twitter.com/mdo"  @mdo
		* added cover image and background color to match (green)
		*
		* Globals

		*/

		/* Links */
		a,
		a:focus,
		a:hover {
		  color: #fff;
		}

		/* Custom default button */
		.btn-default,
		.btn-default:hover,
		.btn-default:focus {
		  color: #333;
		  text-shadow: none; /* Prevent inheritence from `body` */
		  background-color: #fff;
		  border: 1px solid #fff;
		}


		/*
		 * Base structure
		 */

		html,
		body {
		/*css for full size background image*/
		  background: <?php echo base_url('img/55.jpg');?> no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		  
		  height: 100%;
		  background-color: #060;
		  color: #fff;
		  text-align: center;
		  text-shadow: 0 1px 3px rgba(0,0,0,.5);
		 
		}

		/* Extra markup and styles for table-esque vertical and horizontal centering */
		.site-wrapper {
		  display: table;
		  width: 100%;
		  height: 100%; /* For at least Firefox */
		  min-height: 100%;
		  -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
		          box-shadow: inset 0 0 100px rgba(0,0,0,.5);
		}
		.site-wrapper-inner {
		  display: table-cell;
		  vertical-align: top;
		}
		.cover-container {
		  margin-right: auto;
		  margin-left: auto;
		}

		/* Padding for spacing */
		.inner {

		  padding: 30px;
		}


		/*
		 * Header
		 */
		.masthead-brand {
		  margin-top: 10px;
		  margin-bottom: 10px;
		}

		.masthead-nav > li {
		  display: inline-block;
		}
		.masthead-nav > li + li {
		  margin-left: 20px;
		}
		.masthead-nav > li > a {
		  padding-right: 0;
		  padding-left: 0;
		  font-size: 16px;
		  font-weight: bold;
		  color: #fff; /* IE8 proofing */
		  color: rgba(255,255,255,.95);
		  border-bottom: 2px solid transparent;
		}
		.masthead-nav > li > a:hover,
		.masthead-nav > li > a:focus {
		  background-color: transparent;
		  border-bottom-color: #a9a9a9;
		  border-bottom-color: rgba(255,255,255,.25);
		}
		.masthead-nav > .active > a,
		.masthead-nav > .active > a:hover,
		.masthead-nav > .active > a:focus {
		  color: #fff;
		  border-bottom-color: #fff;
		}

		@media (min-width: 768px) {
		  .masthead-brand {
		    float: left;
		  }
		  .masthead-nav {
		    float: right;
		  }
		}


		/*
		 * Cover
		 */

		.cover {
		  padding: 0 20px;
		}
		.cover .btn-lg {
		  padding: 10px 20px;
		  font-weight: bold;
		}


		/*
		 * Footer
		 */

		.mastfoot {
		  color: #999; /* IE8 proofing */
		  color: rgba(255,255,255,.5);
		}


		/*
		 * Affix and center
		 */

		@media (min-width: 768px) {
		  /* Pull out the header and footer */
		  .masthead {
		    position: fixed;
		    top: 0;
		  }
		  .mastfoot {
		    position: fixed;
		    bottom: 0;
		  }
		  /* Start the vertical centering */
		  .site-wrapper-inner {
		    vertical-align: middle;
		  }
		  /* Handle the widths */
		  .masthead,
		  .mastfoot,
		  .cover-container {
		    width: 100%; /* Must be percentage or pixels for horizontal alignment */
		  }
		}

		@media (min-width: 992px) {
		  .masthead,
		  .mastfoot,
		  .cover-container {
		    width: 700px;
		  }
		}

		/*=========================
		  Icons
		 ================= */

		/* footer social icons */
		ul.social-network {
			list-style: none;
			display: inline;
			margin-left:0 !important;
			padding: 0;
		}
		ul.social-network li {
			display: inline;
			margin: 0 5px;
		}


		/* footer social icons */
		.social-network a.icoRss:hover {
			background-color: #F56505;
		}
		.social-network a.icoFacebook:hover {
			background-color:#3B5998;
		}
		.social-network a.icoTwitter:hover {
			background-color:#33ccff;
		}
		.social-network a.icoGoogle:hover {
			background-color:#BD3518;
		}
		.social-network a.icoVimeo:hover {
			background-color:#0590B8;
		}
		.social-network a.icoLinkedin:hover {
			background-color:#007bb7;
		}
		.social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
		.social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
			color:#fff;
		}
		a.socialIcon:hover, .socialHoverClass {
			color:#44BCDD;
		}

		.social-circle li a {
			display:inline-block;
			position:relative;
			margin:0 auto 0 auto;
			-moz-border-radius:50%;
			-webkit-border-radius:50%;
			border-radius:50%;
			text-align:center;
			width: 50px;
			height: 50px;
			font-size:20px;
		}
		.social-circle li i {
			margin:0;
			line-height:50px;
			text-align: center;
		}

		.social-circle li a:hover i, .triggeredHover {
			-moz-transform: rotate(360deg);
			-webkit-transform: rotate(360deg);
			-ms--transform: rotate(360deg);
			transform: rotate(360deg);
			-webkit-transition: all 0.2s;
			-moz-transition: all 0.2s;
			-o-transition: all 0.2s;
			-ms-transition: all 0.2s;
			transition: all 0.2s;
		}
		.social-circle i {
			color: #fff;
			-webkit-transition: all 0.8s;
			-moz-transition: all 0.8s;
			-o-transition: all 0.8s;
			-ms-transition: all 0.8s;
			transition: all 0.8s;
		}

		a {
		 background-color:;  
		} 
		
	</style>


	
 </head>

 <body>


 		<div class="site-wrapper" action="<?php echo base_url('index.php/adminzone');?>">
		  <div class="site-wrapper-inner">
		    <div class="cover-container">
		      <div class="masthead clearfix">
		        <div class="inner">
		          <h3 class="masthead-brand">Library</h3>

		          <ul class="nav masthead-nav">
		            <li class="active">
		              <a href="#">เพิ่มหนังสือ</a>
		            </li>

		            <li>
		              <a href="<?php echo base_url('index.php/login/logout');?>">ออกจากระบบ</a>
		            </li>

		          </ul>
		        </div>
		      </div>

		      <div class="inner cover">
		        <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/TestRegister/checkregister');?>">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">ชื่อหนังสือ</label>
				    <div class="col-sm-5">
				      <input type="text" name="bookname" class="form-control" id="inputEmail3" placeholder="ชื่อหนังสือ">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">ISBN</label>
				    <div class="col-sm-5">
				      <input type="text" name="ISBN" class="form-control" id="inputPassword3" placeholder="ISBN">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">ผู้แต่ง</label>
				    <div class="col-sm-5">
				      <input type="text" name="author" class="form-control" id="inputPassword3" placeholder="ผู้แต่ง">
				    </div>
				  </div>			
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-2">
				      <button type="submit" class="btn btn-default">เพิ่มหนังสือ</button>
				    </div>
				  </div>

				  
				</form>		      </div>

		      <div class="mastfoot">
		        <div class="inner">
		          <!-- Validation -->

		          <div class="col-md-12">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="www.facebook.com" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="www.twiter.com" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>				
				</div>




		          <p>Template by<a href=
		          "http://bootsnipp.com//"> bootsnipp</a></p>
		        </div>
		      </div>
		    </div>
		</div>
		</div>
 	

 </body>
</html>