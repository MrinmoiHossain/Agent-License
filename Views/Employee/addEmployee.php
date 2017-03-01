
<?php
include_once('header.php');
?>

<h1 class="app">New Employee Add Form</h1>
<div class="container" style="padding-top: 30px;">
    <form class="form-horizontal" action="store.php" method="post">
        <div class="form-group">
            <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Name</label>
            <div class="col-md-9">
                <input name = "name" type="text" class="form-control" placeholder="Full Name">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">ID-Number</label>
            <div class="col-md-9">
                <input name = "idNum" type="text" class="form-control" placeholder="Full ID Number">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">E-mail</label>
            <div class="col-md-9">
                <input name = "email" type="email" class="form-control" placeholder="ex: abcdefgh@xyz.com">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Contact Number</label>
            <div class="col-md-9">
                <input name = "contact" type="number" class="form-control" placeholder="Contact Number">
            </div>
        </div>

        <br/>
        <br/>

        <div class="form-group">
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
