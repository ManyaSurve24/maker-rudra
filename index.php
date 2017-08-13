<?php require 'header.php'?>
<script>
    $("#mainNav").addClass("navbar-fixed-top");
    $('#mainNav').css('background','none');
    $('#mainNav').css('border-bottom','none');
    
    $(document).ready(function(){
    $("#mainNav a").css("color", "white");
    $("a").css("font-weight", "bold");
    });
    
    function findshelter(cityName, elmnt) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(cityName).style.display = "block";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

    <header>
        <div class="header-content">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                <div class="tab">
                  <button class="tablinks" onclick="rentorbuy(event, 'London')">Rent</button>
                  <button class="tablinks" onclick="rentorbuy(event, 'Paris')">Buy</button>
                </div>
				<div id="rent" class="rentbuy">
					<form class="form-inline">
						<div class="form-group">
							<input type="text" class="form-control" id="exampleInputlocation" placeholder="Location">
						</div>
						<div class="dropdown form-group">
							<button class="btn btnstyle dropdown-toggle" type="button" data-toggle="dropdown" data-target="">-Select BHK-
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><input type="checkbox" autocomplete="off">RK</li>
								<li><input type="checkbox" autocomplete="off">1 BHK</li>
								<li><input type="checkbox" autocomplete="off">2 BHK</li>
							</ul>
						</div>
						<button type="submit" class="btn btnstyle">Search</button>
					</form>
				</div>
                </div>
            </div>
        </div>
    </header>
    <section class="features">
    <div class="container">
		<div class="text-center">
			<h2 class="page-header">Why ApunkaGhar?</h2>
		</div>
	</div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <h3>No Brokerage</h3>
                <p class="text-muted">no brokerage is taken for this site to make the price effective.</p>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <h3>Easy Access</h3>
                <p class="text-muted">Easy to use. It is User friendly</p>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <h3>No Brokerage</h3>
                <p class="text-muted">no brokerage is taken for this site to make the price effective.</p>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <h3>No Brokerage</h3>
                <p class="text-muted">no brokerage is taken for this site to make the price effective.</p>
            </div>
        </div>
    </div>
    </section>

<?php require 'footer.php'?>