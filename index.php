<?php
include_once('header.php');
?>
    <div class="form">
        <ul class="tab-group">
            <li class="tab active"><a href="#admin">Admin</a></li>
            <li class="tab"><a href="#visitor">Employee</a></li>
        </ul>

        <div class="tab-content">
            <div id="admin">
                <h1>Welcome Back!</h1>
                <form action="Views/Login/Admin/login.php" method="post">
                    <div class="field-wrap">
                        <label>User Name<span class="req">*</span></label>
                        <input name="user" type="text" required="required"/>
                    </div>
                    <div class="field-wrap">
                        <label>Password<span class="req">*</span></label>
                        <input name="pass" type="password" required="required"/>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-large">Let Me IN....</button>
                </form>
            </div>

            <div id="visitor">
                <h1>Welcome Back !!!</h1>
                <form action="Views/Login/Employee/login.php" method="post">
                    <div class="field-wrap">
                        <label>User Name<span class="req">*</span></label>
                        <input name="user" type="text" required autocomplete="off"/>
                    </div>
                    <div class="field-wrap">
                        <label>Password<span class="req">*</span></label>
                        <input name="pass" type="password" required autocomplete="off"/>
                    </div>

                    <button class="btn btn-primary btn-block btn-large">Let Me IN....</button>
                </form>
            </div>
        </div>
    </div> <!-- /form -->


<?php
include_once('footer.php');
?>