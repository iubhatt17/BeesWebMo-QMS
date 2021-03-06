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
        <div id="page_content_inner">
            <h2>Dashboard</h2>
            <!-- statistics (small charts) -->
            <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span><a href="#">More Info</a></span></div>
                            <span class="uk-text-muted uk-text-small">Today Queue</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>12456</noscript></span></h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span><a href="#">More Info</a></span></div>
                            <span class="uk-text-muted uk-text-small">Today Missed</span>
                            <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>142384</noscript></span></h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span><a href="#">More Info</a></span></div>
                            <span class="uk-text-muted uk-text-small">Today Served</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>64</noscript></span>%</h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span><a href="#">More Info</a></span></div>
                            <span class="uk-text-muted uk-text-small">Over Time</span>
                            <h2 class="uk-margin-remove" id="peity_live_text">46</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2 Charts chart -->
             <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div><h3>Queue Details</h3></div>
                            <div id="mg_chart_confidence_band" class="mGraph"></div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div><h3>Today Vs Yesterday</h3></div>
                             <div id="ct-chart" class="chartist"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Notifications Area -->
            <div class="md-card">
                <div class="md-card-content">
                    <div><h3>Notification</h3></div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <div class="uk-form-row">
                                    <label>Notification Text</label>
                                    <input type="text" class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-3">
                                <div class="uk-form-row">
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <label>Font Size</label>
                                                <input type="text" class="md-input" />
                                        </div>
                                        <div class="uk-width-medium-1-2">
                                            <label>Color</label>
                                            <input type="text" class="md-input" />
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class="uk-width-medium-1-3">
                                <div class="uk-form-row">
                                   <a class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" href="#">Go</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="container" style="background-color: #444; height: 45px;">
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