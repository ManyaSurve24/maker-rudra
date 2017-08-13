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

<script>
    $("#mainNav").addClass("navbar-fixed-top");
    
    
    function sidenavtab(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
//    tablinks = document.getElementsByClassName("tablinks");
//    for (i = 0; i < tablinks.length; i++) {
//        tablinks[i].className = tablinks[i].className.replace(" active", "");
//    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<div class="userdetail container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="container-fluid">
<!--                <div class="tab-content">-->
                    <div id="user_profile" class="tab-content tab-panel">
                        <div class="page-header">
                          <h3 class="text-center">Profile Details</h3>
                        </div>
                        <form class="form-horizontal">

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fname">First Name</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" placeholder="First Name" class="form-control" id="fname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="lname">Last Name</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" placeholder="Last Name" class="form-control" id="lname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email address</label>
                                <div class="input-group col-sm-10">
                                    <input type="email" placeholder="Email ID" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="mobile">Mobile Number</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" placeholder="Mobile Number" class="form-control" id="mobile">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div id="prop_detail" class="tab-content tab-panel">
                    <div class="page-header">
                        <h3 class="text-center">Property Details</h3>
                    </div>
                    <form class="form-horizontal">
                        <div class="page-header">
                            <h4 class="text-center">Infrastucture Details</h4>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="propertytype">Property Type</label>
                            <div class="input-group">
                                <select class="form-control" id="sel1">
                                    <option value="0">Flat</option>
                                    <option value="1">House</option>                            
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="roomtype">Room Type</label>
                            <div class="input-group">
                                <select class="form-control" id="sel1">
                                    <option value="0">RK</option>
                                    <option value="1">1 BHK</option>                            
                                    <option value="1">2 BHK</option>                            
                                    <option value="1">3 BHK</option>                            
                                    <option value="1">4 BHK</option>                            
                                    <option value="1">4+ BHK</option>                            
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nobedrooms">No. of Bedrooms</label>
                            <div class="input-group col-sm-10">
                                <input type="text" class="form-control" placeholder="" id="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nobathrooms">No. of Bathrooms</label>
                            <div class="input-group col-sm-10">
                                <input type="text" class="form-control" placeholder="" id="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nocbathrooms">No. of Common Bathrooms</label>
                            <div class="input-group col-sm-10">
                                <input type="text" class="form-control" placeholder="" id="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="kitchen">Kitchen Available?</label>
                            <div class="radio">
                                <label><input type="radio" name="k"> Yes</label>
                                <label><input type="radio" name="k"> No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="area">Area</label>
                            <div class="input-group col-sm-2">
                                <input type="text" class="form-control" placeholder="" id=""><span class="tager">(in Sqft.)</span>
                            </div>
                        </div>
                        <div class="page-header">
                            <h4 class="text-center">Facilities</h4>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="furnishing">Furnishing Status</label>
                            <div class="input-group">
                                <select class="form-control" id="sel1">
                                    <option value="1">Semi Furnished</option>                            
                                    <option value="1">Fully Furnished</option>                            
                                    <option value="0">Not Furnished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="water">Water Status</label>
                            <div class="input-group col-sm-10">
                                <input type="text" class="form-control" placeholder="" id=""><span class="tager">(in Hrs.)</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="electricity">Electricity Status</label>
                            <div class="input-group col-sm-10">
                                <input type="text" class="form-control" placeholder="" id=""><span class="tager">(in Hrs.)</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="parking">Parking</label>
                            <div class="checkbox">
                                <label><input type="checkbox" name=""> Two-Wheel</label>
                                <label><input type="checkbox" name=""> Four-Wheel</label>
                                <label><input type="checkbox" name=""> Not Available</label>
                            </div>
                        </div>
                        <div class="page-header">
                            <h4 class="text-center">Other Details</h4>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="buildingage">Age of Building</label>
                            <div class="input-group col-sm-2">
                                <input type="text" class="form-control" placeholder="" id=""><span class="tager">(in Years.)</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="preferedtenant">Prefered Tenant</label>
                            <div class="input-group">
                                <div class="checkbox">
                                    <label><input type="checkbox" name=""> Family</label>
                                    <label><input type="checkbox" name=""> Student</label>
                                    <label><input type="checkbox" name=""> Employees</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="status">Availability Status</label>
                            <div class="input-group">
                                <select class="form-control" id="sel1">
                                    <option value="0">Available</option>
                                    <option value="1">Immediate Possession</option>
                                    <option value="0">Not Available</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="floor">Floor No.</label>
                            <div class="input-group col-sm-10">
                                <input type="text" class="form-control" placeholder="" id="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="address">Address</label>
                            <div class="input-group col-sm-10">
                                <textarea class="form-control" rows="5" id="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="descrition">Description</label>
                            <div class="input-group col-sm-10">
                                <textarea class="form-control" rows="5" id="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                    </div>

<!--                </div>-->
            </div>
        </div>
        <div id="" class="col-md-3">
            <div class="sidenav">
                <button class="tablinks text-center col-md-12" onclick="sidenavtab(event, 'user_profile')">Profile Details</button>
                <button class="tablinks text-center col-md-12" onclick="sidenavtab(event, 'prop_detail')">Property Details</button>
                <button class="tablinks text-center col-md-12" onclick="sidenavtab(event, 'Tokyo')">My Wishlist</button>
				<button class="tablinks text-center col-md-12" onclick="sidenavtab(event, 'Tokyo')">Change Password</button>
                <button class="tablinks text-center col-md-12" onclick="sidenavtab(event, 'Tokyo')">Log Out</button>
            </div>
        </div>
    </div>
    
</div>

<?php require 'footer.php'?>