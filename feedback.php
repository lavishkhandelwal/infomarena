<?php
require_once("adomo/connection.php");
extract($_REQUEST);
if(isset($submit))
{
	mysql_query("insert into feedback set name='".$name."',email='".$email."',feedback='".$comments."'");
}
?>
<div class="container-fluid bg-grey">
  		<h2 class="text-center contact">CONTACT</h2>
  			<div class="row">
    			<div class="col-sm-5">
			      <p>Contact us and we'll get back to you within 24 hours.</p>
			      <p><span class="glyphicon glyphicon-envelope"></span> infomarenalearn@gmail.com</p> 
			    </div>
			    <div class="col-sm-7">
				<form method="post" name="form" onSubmit="return valid()">
			      <div class="row">
			        <div class="col-sm-6 form-group">
			          <input class="form-control" id="name" name="name" placeholder="Name" type="text">
			        </div>
			        <div class="col-sm-6 form-group">
			          <input class="form-control" id="email" name="email" placeholder="Email" type="email">
			        </div>
			      </div>
			      <textarea class="form-control" id="comments" name="comments" placeholder="Feedback" rows="5"></textarea><br>
			      <div class="row">
			        <div class="col-sm-12 form-group">
			          <button class="btn btn-default pull-right" type="submit" name="submit">Send</button>
			        </div>
			      </div> 
				  </form>
			    </div>
  			</div>
	</div>
