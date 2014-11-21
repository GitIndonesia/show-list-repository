<?php require_once('curl.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Timex Studio on GitHub</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="microsoft.github.io/css/main.css"/>
    <link rel="stylesheet" href="microsoft.github.io/css/mscom.css"/>
    <link rel="stylesheet" href="microsoft.github.io/css/site.css"/>
</head>

<body>
    <div class="row-fluid" data-view4="1" data-view3="1" data-view2="1" data-view1="1" data-cols="1">
        <div class="span bp0-col-1-1 bp1-col-1-1 bp2-col-1-1 bp3-col-1-1 sortable-control" >
            <div id="ctl00_HeaderControl" class="CSPvNext CMSvNextComp mscom-header">
                <div id="ctl00_HeaderControlGrid" >
                    <div class="row-fluid mscom-container-maxwidth mscom-grid-container mscom-fullwidth-view-1">
                        <div class="row-fluid mscom-header-row-0" data-view4="1" data-view3="1" data-view2="1" data-view1="1" data-cols="1">
                            <div class="span bp0-col-1-1 bp1-col-1-1 bp2-col-1-1 bp3-col-1-0 mscom-textalign-right mscom-header-storelink-section-topbar"></div>
                        </div>
                    </div>
                    <div class="row-fluid mscom-container-maxwidth mscom-grid-container">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid dlc-body" data-cols="1" data-view1="1" data-view2="1"
         data-view3="1" data-view4="1">
        <div class="span bp0-col-1-1 bp1-col-1-1 bp2-col-1-1 bp3-col-1-1 sortable-control">
            <div class="main-content">     
                <div class="all-projects">
                    <h3>All Repo</h3>
                    <div class="row">
					<?php if (!empty($output)) { foreach ($output as $repo) { ?>
                        <div class="col-md-4 col-md-offset-0 col-xs-6 col-xs-offset-0">
                            <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="<?php echo $repo->html_url; ?>">
                                            <div class="panel-title-area"><?php echo $repo->name; ?></div>
                                        </a>
                                    </div>
                                <div class="panel-body description"><span><?php echo $repo->description; ?></span></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="center">
                                            <span class="span-stars-group"><?php echo $repo->stargazers_count; ?><span class="glyphicon glyphicon-star"></span>stars</span>
                                            <span class="span-forks-group"><?php echo $repo->forks_count; ?><span class="glyphicon glyphicon-random"></span>forks</span>
		
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer style="">
        <div class="row-fluid" data-cols="1" data-view1="1" data-view2="1" data-view3="1"
         data-view4="1">
            <div class="span bp0-col-1-1 bp1-col-1-1 bp2-col-1-1 bp3-col-1-1 sortable-control">
                <div>

                    <div class="CSPvNext CMSvNextComp mscom-footer mscom-footer2"  >
                        <div class="row-fluid mscom-footer-row-3 mscom-container-maxwidth mscom-grid-container mscom-grid-container"
                             data-cols="1" data-view1="1" data-view2="1" data-view3="1" data-view4="1">
                            <div class="span  bp0-col-1-1 bp1-col-1-1 bp2-col-1-1 bp3-col-1-1 mscom-footer-defaultlink">
                                <div class="container">
                                    <div class="row">
                                        <div class="credits">This open sourced site is <a href="https://github.com/" target="_blank">hosted on GitHub</a>. Patches, suggestions and comments are welcome. 
                                        Built with love... and  <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a>, <a href="http://pages.github.com/" target="_blank">GitHub Pages</a>, and <a href="http://developer.github.com/v3/" target="_blank">API</a>.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="CSPvNext CMSvNextComp mscom-footer mscom-footer2"  >
                        <div class="row-fluid mscom-footer-row-3 mscom-container-maxwidth mscom-grid-container mscom-grid-container"
                             data-cols="1" data-view1="1" data-view2="1" data-view3="1" data-view4="1">
                            <div class="span  bp0-col-1-1 bp1-col-1-1 bp2-col-1-1 bp3-col-1-1 mscom-footer-defaultlink">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6" style="height:40px;position:relative;">

                                        </div>
                                        <div class="col-md-6" style="height:40px; position:relative;">
                                            <div style="bottom:0;right:0; width:100%;">
                                                <div class="list2" style="text-align: right;">
                                                    <ul style="list-style-type: none;">
                                                        <li style="margin-left:25px;">&copy; 2014 Yudi Purwanto</li>
                                                    </ul>
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
    </footer>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.2.0.js"></script>
</body>
</html>