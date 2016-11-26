<?php    
include "index1.php";
include "connection.php";

$query = mysql_query("SELECT stud_ID, stud_name, stud_contact, stud_level, stud_section FROM tblstudent");
$row = mysql_fetch_array($query);

?>

  <div class="contentpanel">

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-inline">  
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Student</button>
          </form>
        </div><!-- panel-body -->
      </div><!-- panel -->


      <div class="panel panel-default">
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table" id="table1">
              <thead>
                 <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Level</th>
                    <th>Section</th>
                    <th>Action</th>
                 </tr>
              </thead>
              <tbody>
                 <?php if($row !='') {?>
                                            <?php do { 
                                              $studentID=$row['stud_ID'];
                                              $studentname= $row['stud_name'];
                                              $studentcontact= $row['stud_contact'];
                                              $studentlevel= $row['stud_level'];
                                              $studentsection= $row['stud_section'];


                                              ?>
                                              
                                                <td><?php echo $studentname;?></td>
                                                <td><?php echo $studentcontact;?></td>
                                                <td><?php echo $studentlevel;?></td>
                                                <td><?php echo $studentsection;?></td>
                                                <td align='center'><a class='btn btn-primary tooltips' data-rel='tooltip' data-original-title='Edit' href='edit_designation.php?id=$q'><i class='fa fa-pencil'></i></a><a class='btn btn-danger tooltips' data-rel='tooltip' data-original-title='Deactivate' href='deac_designation.php?id=$q'><i class='fa fa-times'></i></a></td>
                                                <?php } while($row = mysql_fetch_array($query)) ; ?>
                                                <?php } else {?>
                                                <div style="color: red">No records found</div>
                                                <?php } ?>
              </tbody>
           </table>
          </div><!-- table-responsive -->
      
      </div><!-- row -->
      
      
      <div class="row">
      
      </div><!-- row -->

      
    </div><!-- contentpanel -->

    
  </div><!-- mainpanel -->