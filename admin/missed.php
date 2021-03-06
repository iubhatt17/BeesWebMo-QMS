<?php
	$page_name = 'index';	
	
	include_once '../config.php';
	
?>

<!doctype html>

<html lang="en">

<head>

	<?php include_once 'head.php'; ?>
	
    

</head>
<body class="disable_transitions sidebar_main_open sidebar_main_swipe">
    
    <!-- main header -->    
    <?php include 'header.php'; ?>    
    <!-- main header end -->
    
    <!-- main sidebar -->
    <?php include 'side_bar.php'; ?>
    <!-- main sidebar end -->

    <div id="page_content">
        <div id="top_bar"> 
            <ul id="breadcrumbs">
                <li><a href="index.php">Dashboard</a></li>
                <li><span>Reports</span></li>
                <li><span>User Reports</span></li>    
            </ul>
        </div>
        <div id="page_content_inner">
            <h2>Missed / Overtime Report</h2>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-medium-1-5">
                            <label>Date</label>
                            <input type="text"  name="tipster_dob" class="md-input" data-uk-datepicker="{format:'DD-MM-YYYY'}" required>
                        </div>
                        <div class="uk-width-medium-1-5">
                           <select id="select_demo_4" data-md-selectize>
                                <option value="">Select User</option>
                                <option value="a1">Item A1</option>
                                <option value="b1">Item B1</option>
                                <option value="c1">Item C1</option>   
                            </select>
                        </div>
                        <div class="uk-width-medium-1-5">
                           <select id="select_demo_4" data-md-selectize>
                                <option value="">Select Counter</option>
                                <option value="a1">Item A1</option>
                                <option value="b1">Item B1</option>
                                <option value="c1">Item C1</option>   
                            </select>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <select id="select_demo_4" data-md-selectize>
                                <option value="">Select Types</option>
                                <option value="a1">Item A1</option>
                                <option value="b1">Item B1</option>
                                <option value="c1">Item C1</option>   
                            </select>
                        </div>
                        <div class="uk-width-medium-1-5 uk-text-center">
                            <a href="#" class="md-btn md-btn-primary uk-margin-small-top">GO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <footer>
            <div class="container" style="background-color: #368f8b; height: 45px;">
                <span style="color: white;">Powered by BeesWebmo. All rights reserved.</span>
                <span class="right" style="color: white;"> <span class="grey-text text-lighten-3">Version</span> 0.0.1</span>
            </div>
        </footer>

    </div>

    <!-- ======================= Theme Support =========================== -->
    <?php include_once 'theme_support.php'; ?>
    <!-- ======================= End Theme Support =========================== -->

      <!-- ======================= JQuery libs =========================== -->
     <?php include_once 'footer_script.php'; ?>
     <!-- ======================= End JQuery libs =========================== -->
</body>
</html>