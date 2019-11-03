<?php
/*
    This page displays a form for trademan to fill a bid form
*/
session_start();

$_SESSION['job_id'] = $_GET['job_id'];
$_SESSION['job_status'] = $_GET['job_status'];
$job_id = $_SESSION['job_id'];
 //var_dump($job_id);
?>
<!DOCTYPE html>
<html lang="en">

<body>  
	<div class="container mt-4">
			<!-- registration form -->

		<div class="row">
			<div class="col-lg-4 offset-lg-4 bg-light rounded" id="register-box">
				<h2 class="text-center mt-2">Create a bid</h2>
				<form action="form_action_files/bid.php" method="post" role="form" class="p-2" id="register-frm">
                
						<p>Material Estimating cost?</p>

                    <div class="input-group mb-3"> $
                        <input name="material_price" type="text" class="form-control">
                        
                    </div>

                    <p>Labor Estimating cost</p>

                        <div class="input-group mb-3">$
                           
                            <input name="labor_price" type="text" class="form-control" >
                           
                        </div>

                    <p>Total Estimated cost :</p>

                        <div class="input-group mb-3">$
                            <input name="toal_price" type="text" class="form-control">
                        </div>

					<div class="form-group">
                    <p>Job Start date</p>
						<input type="date" name="start_time" class="form-control" placeholder="Job Start Date" required>
					</div>
					<div class="form-group">
                    <p>Job end date</p>
						<input type="date" name="expire_time" class="form-control" placeholder="Estimate Expire Date" required>
					</div>
					<div class="form-group">
						<input type="submit" name="create_bid" class="btn btn-primary btn-block">
					</div>
					<div class="form-group"> 
						<p class="text-center"><a href="trademan_job.php" id="login-btn"> Go back</a></p>
						
					</div>


				</form>

			</div>
		</div>


			


	</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonyous"></script>
	<script src="http://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>

  	<!-- form validation by using jQuery -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
	<script>

		  // validate the form
		   	$("#register-frm").validate();


	</script>



</body>
</html>