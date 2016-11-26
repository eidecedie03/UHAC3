<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Student Performance Monitoring System</title>

  <link href="css/style.default.css" rel="stylesheet">
  <link href="css/jquery.datatables.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <h1><span><center>SPMS</center></span></h1>
    </div><!-- logopanel -->
        
    <div class="leftpanelinner">    

      
      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li class="active"><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
         <li class=""><a href="form_student.php"><i class="fa fa-edit"></i> <span>Student</span></a></li>
          <li class=""><a href="form_event.php"><i class="fa fa-calendar"></i> <span>Event</span></a></li>
      </ul>

    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  
  <div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="" alt="" />
                Mrs. Perry
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="signin.html"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div><!-- header-right -->
      
    </div><!-- headerbar -->
    
    <div class="pageheader">
      <h2><i class="fa fa-home"></i> Manage Events <span>...</span></h2>
      <div class="breadcrumb-wrapper">
      </div>
    </div>
    
    <div class="contentpanel">
          <div class="panel panel-default">
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table" id="table1">
              <thead>
                 <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>
                 </tr>
              </thead>
              <tbody>
                 <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 4.0</td>
                    <td>Win 95+</td>
                    <td align='center'><a class='btn btn-primary tooltips' data-rel='tooltip' data-original-title='Edit' href='edit_designation.php?id=$q'><i class='fa fa-pencil'></i></a>
                    <a class='btn btn-danger tooltips' data-rel='tooltip' data-original-title='Deactivate' href='deac_designation.php?id=$q'><i class='fa fa-times'></i></a>
                    </td>
                 </tr>
              </tbody>
           </table>
          </div><!-- table-responsive -->
      
      </div><!-- row -->
      
      
      <div class="row">
      
      </div><!-- row -->
      
    </div><!-- contentpanel -->
    
  </div><!-- mainpanel -->
 
</section>


<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/jquery.datatables.min.js"></script>
<script src="js/chosen.jquery.min.js"></script>

<script src="js/custom.js"></script>
<script>
  jQuery(document).ready(function() {
    
    jQuery('#table1').dataTable();
    
    jQuery('#table2').dataTable({
      "sPaginationType": "full_numbers"
    });
    
    // Chosen Select
    jQuery("select").chosen({
      'min-width': '100px',
      'white-space': 'nowrap',
      disable_search_threshold: 10
    });
    
    // Delete row in a table
    jQuery('.delete-row').click(function(){
      var c = confirm("Continue delete?");
      if(c)
        jQuery(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
        });
        
        return false;
    });
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });
  
  
  });
</script>

</body>
</html>
