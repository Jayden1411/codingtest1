<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
if(!isset($_GET['p'])){$_GET['p'] = "home_content";}
	function menuActiveStyle($p,$p1,$c="#ffffff",$c1="#053b6a"){if($p == $p1) return "style=\"color:$c\""; else  return "style=\"color:$c1\"";}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JOB | Portal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
     <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="img/icons/icon01.png" alt="" /></a>                                       
                    <strong><font color="#fff">ADM</font></strong>
		  
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
		    <li align="center"><img src="" alt="JOB | Portal" /></li>
                        <li class="nav-item">
                            <a href="?p=home_content&user=<?php echo $user?>"  class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> </a>
                         </li>
                                      
                    </ul>
		    
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="" alt="" />
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                   <li class="nav-item">
				    <a href="login.php"  class="nav-link dropdown-toggle"><span class="">Login</span> </a>
				 </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <!-- Breadcome End-->
                  <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- welcome Project, sale area start-->
            <div class="welcome-adminpro-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="welcome-wrapper shadow-reset res-mg-t mg-b-30">
                                <div class="adminpro-message-list">
                                  
			  <div class="row justify-content-center">
	 <div class="col-sm-12">
            <div class="card">
           
		 <div class="card-body">	
				<?php
				    include "common.php";
				    $dbh = Db::db_connect();
				    $vacancies= ApiData::getData('getAdverts', "");
				     if($vacancies=='error found')
				    {
				      //echo"<tr><td>An error has occured<br> Please cleck your connection</td></tr>";
				    }else{
				     for($x = 0; $x < count($vacancies); $x++){
				     ?>				 
				 <div class="card" style="">
					  <div class="card-body">
					    <h5 class="card-title"><a href="#"class="click-call"data-id="<?php echo $vacancies[$x]->vacancy_ref; ?>"><?php echo $vacancies[$x]->vacancy_ref; ?></a></h5>
					    <h6 class="card-title">Ref:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vacancies[$x]->vacancy_ref ?></h6>
					    <h6 class="card-title">Title:&nbsp;&nbsp;&nbsp;&nbsp;
					    <a href="https://webapp.placementpartner.com/wi/application_form.php?id=<?php echo$vacancies[$x]->company_ref ?>&vacancy_ref=<?php echo $vacancies[$x]->vacancy_ref ?>&source=assessment"target="blank"data-id="<?php echo $vacancies[$x]->vacancy_ref; ?>"class="click-call">
					    <?php echo $vacancies[$x]->job_title;  ?></a></h6>
					    <h6 class="card-title">Expiry:&nbsp;&nbsp;<?php echo $vacancies[$x]->expiry_date;  ?></h6>
					    <p class="card-text"><?php echo html_entity_decode($vacancies[$x]->brief_description ) ?>
							<?php echo html_entity_decode($vacancies[$x]->brief_description)   ?></p>											 
						<a href="https://webapp.placementpartner.com/wi/application_form.php?id=<?php echo $vacancies[$x]->company_ref ?>&vacancy_ref=<?php echo $vacancies[$x]->vacancy_ref ?>&source=assessment"target="blank"data-id="<?php echo $vacancies[$x]->vacancy_ref; ?>"class="click-call btn btn-info btn-sm">
						   Apply 
						</a>
					  </div>
				</div>
				   <?php 
				   } 
				  } 
				  ?>
	   
		</div>

           </div>
        </div>
    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>

        </div>
    </div>
    
      <script>
	$(document).ready(function () {
		 $('.click-call').on('click', function (e) {
		 var ref = $(this).attr("data-id");
		 $.ajax({
			method: "POST",
			url: "addclick.php",
			 data: {
				ref: $(this).attr("data-id")
			    },success: function(data){
				if(data.statusCode==200){
					console.log('RESPONSE '+data);
				}
			}
		});
		});		
	});
</script>

</body>
</html>
