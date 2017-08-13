<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rent | Sell | Buy Properties</title>
	<link href="images/icon.png" rel="icon" type="image/x-icon"/>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Cantarell" rel="stylesheet">

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<!--    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">-->
    <nav id="mainNav" class="navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#links" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="140px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="links">
          <ul class="nav navbar-nav navbar-right">
            <button type="button" class="navbar-btn profilebtn" data-toggle="collapse" data-target="#" aria-expanded="false">
                <figure id="profilefig"><img id="profilethumbnail" src="images/profile-picture.png" alt=""></figure>
            </button>
            
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>



<div class="userdetail container-fluid">
    <div class="row">
        <div class="nomargin col-sm-9 col-xs-12">
                    <div id="user_profile" class="tab-content tab-panel">
                        <div class="page-header">
                          <h3 class="text-center">Profile Details</h3>
                        </div>
					<!--		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    
	<div class="panel-heading">
      <h4 class="panel-title">
        <span class="user_title">Name</span><span class="user_content">Sagar Mandia
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="glyphicon glyphicon-edit"></span>
			</a>
		</span>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
		<form class="form-horizontal">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="email">First Name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="email" placeholder="Enter email">
			</div>
		  </div>
		 <div class="form-group">
			<label class="control-label col-sm-2" for="email">Last Name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="email" placeholder="Enter email">
			</div>
		  </div>
		  <div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Save</button>
			</div>
		  </div>
		</form>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <span class="user_title">Email</span><span class="user_content">sagarmandia482@gmail.com
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="glyphicon glyphicon-edit"></span>
			</a>
		</span>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
		<form class="form-horizontal">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="email">Email</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control" id="email" placeholder="Enter email">
			</div>
		  </div>
		 
		  <div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Save</button>
			</div>
		  </div>
		</form>
		</div>
    </div>
  </div>
	<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <span class="user_title">Mobile</span><span class="user_content">9727027236
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a>
		</span>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
		<form class="form-horizontal">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="email">Mobile</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="email" placeholder="Enter email">
			</div>
		  </div>
		 
		  <div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Save</button>
			</div>
		  </div>
		</form>
	</div>
    </div>
  </div>
</div> -->
<ul class="detail-list list-unstyled">
    <script>
	   

    </script>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Name</strong></span><span class="user_content">Sagar Mandia
				<a id="btn2" data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="glyphicon glyphicon-edit"></span></a>
			</span>
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="fname">First Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="fname" placeholder="First Name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="lname">Last Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="lname" placeholder="Last Name">
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Email</strong></span><span class="user_content">sagarmandia482@gmail.com
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="glyphicon glyphicon-edit"></span>
			</a></span>
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Mobile</strong></span><span class="user_content">9727027236
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="mobile">Mobile</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="mobile" placeholder="Mobile">
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Property Type</strong></span><span class="user_content">Flat
				<a id="btn2" data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="glyphicon glyphicon-edit"></span></a>
			</span>
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="propertytype">Property Type</label>
					<div class="col-sm-10">
						<select class="form-control" id="sel1">
							<option value="0">Flat</option>
							<option value="1">House</option>                            
						</select>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>No. of Bedrooms/Rooms</strong></span><span class="user_content">3 BHK
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="glyphicon glyphicon-edit"></span>
			</a></span>
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="rooms">No. of Bedrooms/Rooms</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="rooms" placeholder="Bedrooms/Rooms">
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>No. of Bathrooms</strong></span><span class="user_content">2
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="bathroom">No. of Bathrooms</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="bathroom" placeholder="Bathrooms">
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>No. of Common Bathrooms</strong></span><span class="user_content">1
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="cbathroom">No. of Common Bathrooms</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cbathroom" placeholder="Bathrooms">
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Kitchen Available?</strong></span><span class="user_content">Yes
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="kitchen">Kitchen Available?</label>
					<div class="col-sm-10">
						<label><input type="radio" name="k"> Yes</label>
						<label><input type="radio" name="k"> No</label>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Area</strong></span><span class="user_content">1500 sqft.
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="kitchen">Area</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="" id=""><span class="tager">(in Sqft.)</span>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Furnishing Status</strong></span><span class="user_content">Semi Furnished
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="kitchen">Furnishing Status</label>
					<div class="col-sm-10">
						<select class="form-control" id="sel1">
                                    <option value="1">Semi Furnished</option>                            
                                    <option value="2">Fully Furnished</option>                            
                                    <option value="3">Not Furnished</option>
						</select>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Water Status</strong></span><span class="user_content">3 Hrs.
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="kitchen">Water Status</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="" id=""><span class="tager">(in Hrs.)</span>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Electricity Status</strong></span><span class="user_content">Available
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="kitchen">Electricity Status</label>
					<div class="col-sm-10">
						<select class="form-control" id="sel1">
							<option value="1">Available</option>                            
							<option value="2">Shortage</option>
						</select>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Parking</strong></span><span class="user_content">1500 sqft.
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="kitchen">Parking</label>
					<div class="col-sm-10">
						<label><input type="checkbox" name=""> Two-Wheel</label>
						<label><input type="checkbox" name=""> Four-Wheel</label>
						<label><input type="checkbox" name=""> Not Available</label>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Age of Building</strong></span><span class="user_content">50 Years
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="kitchen">Age of Building</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="" id=""><span class="tager">(in Years.)</span>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Prefered Tenant</strong></span><span class="user_content">Student
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="kitchen">Prefered Tenant</label>
					<div class="col-sm-10">
						<label><input type="checkbox" name=""> Family</label>
						<label><input type="checkbox" name=""> Student</label>
						<label><input type="checkbox" name=""> Employees</label>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Availability Status</strong></span><span class="user_content">Available
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="kitchen">Availability Status</label>
					<div class="col-sm-10">
						<select class="form-control" id="sel1">
							<option value="0">Available</option>
							<option value="1">Immediate Possession</option>
							<option value="0">Not Available</option>
						</select>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Floor No.</strong></span><span class="user_content">4
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="kitchen">Floor No.</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="" id="">
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Address</strong></span><span class="user_content">168, Shrinath Colony, Arad Road, Halol
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="kitchen">Address</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="5" id="address"></textarea>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
	<li class="list-group-item">
		<div class="userinfoheader">
			<span class="user_title"><strong>Description</strong></span><span class="user_content text-justify">
1 BHK apartment of 581 square feet Carpet Area is offered for sale in Kukreja Estate. Price of the property is Rs. 1.45Cr. Features within the apartment features ample car parking space, complete power backup, treated water supply, modular kitchen and designer flooring.
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-edit"></span>
			</a></span>  
		</div>
		<div id="collapse4" class="userinfoedit">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="kitchen">Description</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="5" id="address"></textarea>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Save</button>
						<button id="cncl" type="" class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</form>
		</div>
        <div class="clr"></div>
	</li>
</ul>
						
	</div>
</div>
        
    </div>
    
</div>

<?php require 'footer.php'?>