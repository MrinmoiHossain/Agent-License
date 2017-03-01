<?php
include_once('header.php');
?>
        <h1 class="app">New Admin Form</h1>
        <div class="container" style="padding-top: 30px;">
            <form class="form-horizontal" action="store.php" method="post">
                <div class="form-group">
                    <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Name</label>
                    <div class="col-md-9">
                        <input name = "name" type="text" class="form-control" placeholder="Full Name" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Password</label>
                    <div class="col-md-9">
                        <input name = "pass" type="password" class="form-control" placeholder="Password" required="required">
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