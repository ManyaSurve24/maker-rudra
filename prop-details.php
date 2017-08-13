<?php require 'header.php'?>

<div class="container">
    
    
    <div class="row">
        <div class="col-md-10">
            <div class="page-header">
      <h3 class="text-center">Property Details</h3>
    </div>
            <form class="form-horizontal">
        
                <div class="form-group">
                    <label class="control-label col-sm-2" for="propertytype">Property Type:</label>
                    <div class="input-group">
                        <select class="form-control" id="sel1">
                            <option value="0">Flat</option>
                            <option value="1">House</option>                            
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="roomtype">Room Type:</label>
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
                    <label class="control-label col-sm-2" for="address">Address</label>
                    <div class="input-group col-sm-10">
                        <textarea class="form-control" rows="5" id="address"></textarea>
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
                <div class="form-group">
                    <label class="control-label col-sm-2" for="buildingage">Age of Building</label>
                    <div class="input-group col-sm-2">
                        <input type="text" class="form-control" placeholder="" id=""><span class="tager">(in Years.)</span>
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
    </div>
    
</div>


<?php require 'footer.php'?>