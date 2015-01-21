<?php
require 'admin/dbQuery.php';
$m = new dbQuery();
$admin="";
$showAdmin = false;
if(isset($_GET['admin'])){
	$showAdmin = true;
	$admin = '?admin';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>News</title>
		<link href="css/s.css" rel="stylesheet" type="text/css" />
		<link href="css/boots.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/news_event.css">

		<style type="text/css">
            #loading{
                width: 100%;
                position: absolute;
                top: 100px;
                left: 100px;
				margin-top:200px;
            }
            .p_con .pagination ul li.inactive,
            .p_con .pagination ul li.inactive:hover{
                background-color:#ededed;
                color:#bababa;
                border:1px solid #bababa;
                cursor: default;
            }
            .p_con .data ul li{
                list-style: none;
                font-family: verdana;
                margin: 5px 0 5px 0;
                color: #000;
                font-size: 13px;
            }

            .p_con .pagination{
                width: 800px;
                height: 25px;
            }
            .p_con .pagination ul li{
                list-style: none;
                float: left;
                border: 1px solid #006699;
                padding: 2px 6px 2px 6px;
                margin: 0 3px 0 3px;
                font-family: arial;
                font-size: 14px;
                color: #006699;
                font-weight: bold;
                background-color: #f2f2f2;
            }
            .p_con .pagination ul li:hover{
                color: #fff;
                background-color: #006699;
                cursor: pointer;
            }
			.go_button
			{
			background-color:#f2f2f2;border:1px solid #006699;color:#cc0000;padding:2px 6px 2px 6px;cursor:pointer;position:absolute;margin-top:-1px;
			}
			.total
			{
			float:right;font-family:arial;color:#999;
			}

        </style>
	</head>
	<body>
		<div id="wrapper">
			<p>
			<div class='container'>
				<div class="navbar navbar">
					<div class='row' style='padding:5px;'>
						<div class='col-md-2'>
							<span class='left'><img src="images/logo.png" alt="Webo CMS" title="Webo CMS" border="0" align="left" class='img' /></span>
						</div>
						<div class='left col-md-9'>
							<div class='center'><h3><center><?php $m->getLayout('dept_name'); ?></center></h3><h4><center> OBAFEMI AWOLOWO UNIVERSITY</center></h4><h5><center> ILE-IFE, OSUN STATE, NIGERIA</center></h5></div>
						</div>   	
		            </div>
		              <div class="navbar-collapse">
		              <?php
			              		if($showAdmin){
			              			echo "<ul class='nav navbar-nav navbar-left'>";
			              			echo "<li><a href='admin/settings.php'>Back to Settings</a></li>";
			              			echo "</ul>";
			              		}
			              	?>
		                <?php $m->getPages($admin);?>
		              </div>
	            </div><!-- END NAV -->
				<p>
				<div class='jumbotron'>
					<h2>NEWS&nbsp|</h2>
					<div id="title_div">
						<h2 id="newstitle">&nbsp Four Eyed Student, found on OAU campus.</h2>
					</div>
				</div>
				</p>

				<h1>hello everyybody</h1>
				<!--<div class='row'>-->
					<!--<div class='col-md-12'>-->
						<!--<div class="well">-->
							<!--<div class="news_wrapper">-->
									<div id="news_wrapper" class='panel panel-default' style="display:<?php echo $m->getVisibility('in_the_media'); ?>;">

								<div id="title_div1">
									<h2 id="newstitle">Four Eyed Student, found on OAU campus.</h2>
								</div>
							
									<div id="con_div">
										<h2 id="news_con">Every everbodyA student whom our sources named Mcqueen Pius can be termed the biggest discovery to mankind since the invention of fire. The boy unbelievably has four eyes, two on the face, and the other two on his stomach. He managed to hide the lower pair of eyes for a considerable number of years, until he was caught shirtless by some of his classmates who then reported this to the authorithies.Every everbodyA student whom our sources named Mcqueen Pius can be termed the biggest discovery to mankind since the invention of fire. The boy unbelievably has four eyes, two on the face, and the other two on his stomach. He managed to hide the lower pair of eyes for a considerable number of years, until he was caught shirtless by some of his classmates who then reported this to the authorithies</h4>
									</div>
									<div id="source_div">
										<h2 id="source">by:General Leye</h2>
									</div>
							</div>
						</div>	
					</div>
				</div>
		
				
			</div><!--End of Container-->
			</p>
			<div class='push'></div>
		</div><!-- close wrapper -->
		<div class="footer">
	      <div class="container">
	      	<p class="text-muted"><?php $m->getLayout('dept_name'); ?> &copy; 2014</p>
	      </div>
	    </div>
		<!-- close footer -->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/paginator.js" type="text/javascript"></script>
		<script src="js/rearrange.js" type="text/javascript"></script>
		<script type="text/javascript">
		

		</script>
	</body>
</html>