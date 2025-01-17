<?php 
session_start();
$page_title="Rel Info";
include('includes/header.php'); 
?>

<script type="text/javascript" src="https://ofa.iiti.ac.in/facrec_che_2023_july_02/ckeditor/ckeditor.js"></script>

<style type="text/css">
body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
.floating-box {
    display: inline-block;
    width: 150px;
    height: 75px;
    margin: 10px;
    border: 3px solid #73AD21;  
}
</style>
<style type="text/css">
body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
label{
  padding: 0 !important;
}
hr{
  border-top: 1px solid #025198 !important;
  border-style: dashed!important;
  border-width: 1.2px;
}

.panel-heading{
  font-size: 1.3em;
  font-family: 'Oswald', sans-serif!important;
  letter-spacing: .5px;
}
.btn-primary {
  padding: 9px;
}

.Acae_data
{
  font-size: 1.1em;
  font-weight: bold;
  color: #414002;
}
p
{
  padding-top: 10px;
}
</style>

<!-- all bootstrap buttons classes -->
<!-- 
  class="btn btn-sm, btn-lg, "
  color - btn-success, btn-primary, btn-default, btn-danger, btn-info, btn-warning
-->



<a href='includes/layout.php'></a>

<div class="container">
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 well">
            
              
            <fieldset>
             
                 <legend>
                  <div class="row">
                    <div class="col-md-10">
                        <h4>Welcome : <font color="#025198"><strong><?=$_SESSION['auth_user']['username'];?></strong></font></h4>
                    </div>
                    <div class="col-md-2">
                      <a href="index.php" class="btn btn-sm btn-success  pull-right">Logout</a>
                    </div>
                  </div>
                
                
        </legend>
  
<form class="form-horizontal" action="page7_code.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="email" value="<?=$_SESSION['auth_user']['email'];?>">


<div class="row">
      <div class="col-md-12">
        <div class="panel panel-success ">
        <div class="panel-heading">14. Significant research contribution and future plans *<small class="pull-right">(not more than 500 words)</small> <br /><small>(Please provide a Research Statement describing your research plans and one or two specific research projects to be conducted at IIT Indore in 2-3 years time frame)</small></div>
          <div class="panel-body">
            <textarea style="height:150px" placeholder="Significant research contribution and future plans" class="form-control input-md" name="research_statement" maxlength="3500" required=""></textarea>

          <script>
              // CKEDITOR.replace($_POST['conf_details']);
              CKEDITOR.replace('research_statement');

           

              
          </script>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading">15. Significant teaching contribution and future plans * <small>(Please list UG/PG courses that you would like to develop and/or teach at IIT Indore)</small> <small class="pull-right"> (not more than 500 words)</small></div>
        <div class="panel-body">
          <textarea style="height:150px" placeholder="Significant teaching contribution and future plans" class="form-control input-md" name="teaching_statement" maxlength="3500" required=""></textarea>

         <script>
             // CKEDITOR.replace($_POST['conf_details']);
             CKEDITOR.replace('teaching_statement');

          

             
         </script>
      </div>
    </div>
    </div>

<!-- <div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading"> Awards and recognition <small class="pull-right">(not more 500 words)</small></div>
        <div class="panel-body">
          <textarea style="height:150px" placeholder="Any other relevant information you may like to furnish" class="form-control input-md" name="award_recg" maxlength="3500" required=""></textarea>
      </div>
    </div>
    </div> -->

<!-- 
<div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading">27. Contribution to Continuing Education Programs  <small class="pull-right">(not more than 500 words)</small></div>
        <div class="panel-body">
          <textarea style="height:150px" placeholder="Contribution to Continuing Education Programs" class="form-control input-md" name="cep" maxlength="3500" ></textarea>
      </div>
    </div>
    </div> -->

<!-- <div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading">28. Short-term Courses/Workshop/Seminars/Conference etc. organized  <small class="pull-right">(not more than 500 words)</small></div>
        <div class="panel-body">
          <textarea style="height:150px" placeholder="Short-term Courses/Workshop/Seminars etc. organized" class="form-control input-md" name="short_course" maxlength="3500"></textarea>
      </div>
    </div>
    </div> -->

<div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading">16. Any other relevant information. <small class="pull-right">(not more than 500 words)</small></div>
        <div class="panel-body">
          <textarea style="height:150px" placeholder="Any other relevant information you may like to furnish" class="form-control input-md" name="rel_in" maxlength="3500"></textarea>

         <script>
             // CKEDITOR.replace($_POST['conf_details']);
             CKEDITOR.replace('rel_in');

          

             
         </script>
      </div>
    </div>
    </div>

<!-- <div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading">27. Highlighting how your work fits with  the overall research activities of the department/institute.<small class="pull-right">(Research plan 500 Words)</small></div>
        <div class="panel-body">
          <textarea style="height:150px" placeholder="Any other relevant information you may like to furnish" class="form-control input-md" name="highlights" maxlength="3000"></textarea>
      </div>
    </div>
    </div>

<div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading">28. Courses you have taught earlier if any/ Your plan for new courses/ What kind of novel teaching methodologies you can include.<small class="pull-right">(Research plan 500 Words)</small></div>
        <div class="panel-body">
          <textarea style="height:150px" placeholder="Any other relevant information you may like to furnish" class="form-control input-md" name="novel_teching" maxlength="3000"></textarea>
      </div>
    </div>
    </div> -->


    <div class="col-md-12">
          <div class="panel panel-success ">
          <div class="panel-heading">17. Professional Service : Editorship/Reviewership <small class="pull-right">(not more than 500 words)</small></div>
            <div class="panel-body">
              <textarea style="height:150px" placeholder="Professional Service as Reviewer/Editor etc" class="form-control input-md" name="prof_serv" maxlength="3500"></textarea>

              <script>
                  // CKEDITOR.replace($_POST['conf_details']);
                  CKEDITOR.replace('prof_serv');

               

                  
              </script>
            
          </div>
        </div>
        </div>

<div class="col-md-12">
  <div class="panel panel-success ">
  <div class="panel-heading">18. Detailed List of Journal Publications <br />(Including Sr. No., Author's Names, Paper Title, Volume, Issue, Year, Page Nos., Impact Factor (if any), DOI, Status[Published/Accepted] )</div>
    <div class="panel-body">


      <textarea style="height:15px!important" placeholder="Detailed List of Journal Publications" id="jour_details" class="form-control input-md" name="jour_details"></textarea>

      <script>
          // CKEDITOR.replace($_POST['conf_details']);
          CKEDITOR.replace('jour_details');

       

          
      </script>
  </div>
</div>
</div>


<div class="col-md-12">
  <div class="panel panel-success ">
  <div class="panel-heading">19. Detailed List of Conference Publications<br />(Including Sr. No.,  Author's Names, Paper Title, Name of the conference, Year, Page Nos., DOI [If any] )</div>
    <div class="panel-body">
      <textarea style="height:150px" placeholder="Detailed List of Conference Publications" id="conf_details" class="form-control input-md" name="conf_details"></textarea>

      <script>
          CKEDITOR.replace('conf_details');
          
      </script>

  </div>
</div>
</div>



 </div>      
 
<div class="form-group">
<div class="col-md-10">
  <!-- <a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/acde" class="btn btn-primary pull-left">BACK</a> -->
  <a href="page6.php" class="btn btn-primary pull-left"><div>&#9664;</div></a>


</div>

<div class="col-md-2">

   <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right">SAVE & NEXT</button>

</div>


</div>
 

</div> 
            




</fieldset>
</form>



<?php include('includes/footer.php');?>