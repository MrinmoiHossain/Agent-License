<?php
include_once('../../vendor/autoload.php');
$faker = Faker\Factory::create();
?>
<?php
include_once('header.php');
?>

        <h1 class="app">Application for Licence of Insurance Agent</h1>
        <div class="container" style="padding-top: 30px;">
            <form class="form-horizontal" action="store.php" method="post">
                <div class="form-group">
                    <label class="col-md-2 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Company Name</label>
                    <div class="col-md-4">
                        <input name = "companyName" type="text" class="form-control" placeholder="Company Name" value="<?php echo $faker->company;?>" autofocus>
                    </div>

                    <label class="col-md-2 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Licence Number</label>
                    <div class="col-md-4">
                        <input name = "licenceNum" type="text" class="form-control" placeholder="Licence Number" value="<?php echo $faker->countryCode.$faker->buildingNumber;?>">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Name</label>
                    <div class="col-md-4">
                        <input name = "name" type="text" class="form-control" placeholder="Full Name" value="<?php echo $faker->name;?>">
                    </div>

                    <label class="col-md-2 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Fathers Name</label>
                    <div class="col-md-4">
                        <input name = "fatherName" type="text" class="form-control" placeholder="Fathers Name / Husband Name" value="<?php echo $faker->name;?>">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Date of Birth</label>
                    <div class="col-md-4">
                        <input name = "birth" type="date" id="datepicker" class="form-control" placeholder="Date of Birth">
                    </div>

                    <label class="col-md-2 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Education</label>
                    <div class="col-md-4">
                        <input name = "education" type="text" class="form-control" placeholder="Educational Qualification">
                        <h5>(Photocopy of Certificate to be duly attested by any First Class Gazetted Officer)</h5>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Nationality</label>
                    <div class="col-md-4">
                        <input name = "nation" type="text" class="form-control" value="Bangladeshi" placeholder="Nationality">
                    </div>

                    <label class="col-md-2 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Religion</label>
                    <div class="col-md-4">
                        <select class="form-control" name="religion">
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Christian">Christian</option>
                            <option value="Buddhism">Buddhism</option>
                            <option value="Other">Others</option>
                        </select>
                        <!--<input name = "religion" type="text" class="form-control" placeholder="Religion">-->
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Bank Name</label>
                    <div class="col-md-4">
                        <input name = "bank" type="text" class="form-control" placeholder="Bank Name" value="<?php echo $faker->name;?>">
                    </div>

                    <label class="col-md-2 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Branch</label>
                    <div class="col-md-4">
                        <input name = "branch" type="text" class="form-control" placeholder="Branch Name" value="<?php echo $faker->address;?>">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Account No</label>
                    <div class="col-md-4">
                        <input name = "acNo" type="text" class="form-control" placeholder="Account Number" value="<?php echo $faker->bankAccountNumber;?>">
                    </div>

                    <label class="col-md-2 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Date</label>
                    <div class="col-md-4">
                        <input name = "date" id="dateCount" type="date" class="form-control" placeholder="Date">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Residential Address</label>
                    <div class="col-md-9">
                        <input name = "redAddress" type="text" class="form-control" placeholder="Residential Address" value="<?php echo $faker->address;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Permanent Address</label>

                    <div class="col-md-3">
                        <input name = "village" type="text" class="form-control" placeholder="Village Name" value="<?php echo $faker->streetName;?>">
                    </div>
                    <div class="col-md-2">
                        <input name = "postOffice" type="text" class="form-control" placeholder="Post Office" value="<?php echo $faker->buildingNumber;?>">
                    </div>
                    <div class="col-md-2">
                        <input name = "station" type="text" class="form-control" placeholder="Police Station" value="<?php echo $faker->streetName;?>">
                    </div>
                    <div class="col-md-2">
                        <input name = "district" type="text" class="form-control" placeholder="District" value="<?php echo $faker->city;?>">
                    </div>
                </div>


                <div class="form-group">
                    <h4 class="col-md-12"><input name="photoCheck" value="yes" class="col-md-1" type="checkbox">Two Passport size recent photos (duly attested by any First Class Gazetted Officer)</h4>
                </div>

                <div class="form-group col-md-12">
                    <div class="col-md-1">
                        <input name="declareCheck" type="checkbox" value="yes" >
                    </div>
                    <div class="col-md-10">

                        <h4>Thereby declare that the particulars given above and declaration given below are true and that Licence for which I hereby apply shell be used only by myself for soliciting of procuring General Insurance Business.</h4>
                    </div>
                </div>

                <div class="form-group">
                    <h4 class="col-md-12"><input name="lawCheck" class="col-md-1" type="checkbox" value="yes">I also declare that I don't suffer from any of the disqualification mentioned in subsection(42) of section 42 of the Act.</h4>
                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg active" style="height: 54px;width: 132px;">Submit</button>
                        <button type="reset" class="btn btn-primary btn-lg active" style="height: 54px;width: 132px;">Reset</button>
                    </div>
                </div>
            </form>
        </div>

<?php
include_once('footer.php');
?>
