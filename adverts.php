	<div class="container">
	<div class="row justify-content-center">
	 <div class="col-sm-10">
	 
            <div class="card-header"style="text-align:right;">
		<a href="index.php"  class="nav-link dropdown-toggle"><span class="">Logout</span> </a>
	  </div>
            <div class="card">
           
		<div class="card-body">
                   <table class="table table-sm">
		  <thead>
		  <tr>
		      <th scope="col"></th>					
			<th scope="col"colspan="4"style="text-align:right;">  
			<a href="?p=make_pdf" target="_blank"  class="btn btn-sm btn-primary me-1">Advert Clicks</a>		
			<div class="btn-group pull-right">
				  <button type="button" class="btn btn-info">Action</button>
				  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
				    <span class="caret"></span>
				    <span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu" role="menu" id="export-menu">
				    <li id="export-to-excel"><a href="#">Export to excel</a></li>
				    <li id="export-to-csv"><a href="#">Export to csv</a></li>
				  </ul>
			</div>
			<form action="export_data.php" method="post" id="export-form">
				<input type="hidden" value='' id='hidden-type' name='ExportType'/>
			</form>
			
			</th>
		    </tr>
		     <tr>
		      <th scope="col"></th>					
			<th scope="col"></th>					
			<th scope="col"></th>
			<th scope="col"></th>
			<th scope="col"style="text-align:center">  
			</th>
		    </tr>
		    <tr>
		      <th scope="col">Vacancy Ref</th>					
			<th scope="col">Job Title</th>					
			<th scope="col">Salary Max</th>
			<th scope="col">ExpiryDate</th>
			<th scope="col"style="text-align:center">Views</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		    <?php
		    $company=$_REQUEST['user'];
		    $dbh = Db::db_connect();
		    $vacancies= ApiData::getData('getAdverts', $company);
		    $clicks= ApiData::getData('getAdverts', $company);
	
		     for($x = 0; $x < count($vacancies); $x++){
		       $clicks= Clicks::getClicks2($dbh,$vacancies[$x]->vacancy_ref);
		     ?>
		      <td><?php echo $vacancies[$x]->vacancy_ref; ?> </td>
		      <td><?php echo $vacancies[$x]->job_title;  ?></td>
		      <td><?php echo $vacancies[$x]->salary_max;  ?></td>
		      <td><?php echo $vacancies[$x]->expiry_date;  ?></td>
		      <td style="text-align:center">
				<?php echo $clicks['clicks'];?>
		      </td>
		    </tr>
		   <?php } ?>
		  </tbody>
		</table>
	
           </div>
           </div>
        </div>
    </div>
</div>
	
	