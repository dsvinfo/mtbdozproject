
<!-- Header Section End -->
<div id='signup' style='padding:5px; background:#fff; ; ' >
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 style="text-align:center;"> Clients Sign up </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="padding-top:20px;">
                <form id="" method="post" action="" class="form-style" >
                    <!-- Start name -->
                    <div class="col-sm-12" >
                        <div class="col-sm-2 col-sm-offset-4">
                            <label> First Name: </label>
                        </div>
                        <div class="col-sm-2 hidden-sm hidden-xs visible-md visible-lg"  >
                            <label> Second Name: </label>
                        </div>
                    </div>
                    <div class="col-sm-12" >
                        <div class="col-sm-2 col-sm-offset-4">
                            <input name="first_name" required=""  id="firstname" type="text" placeholder="First Name" />
                        </div>
                        <div class="col-sm-2 hidden-md hidden-lg visible-sm visible-xs " style="margin-top:5px;" >
                            <label> Second Name: </label>
                        </div>
                        <div class="col-sm-2">
                            <input name="last_name" required=""  id="secondname" type="text" placeholder="Second Name" />
                        </div>
                    </div>

                    <!-- end name -->

                    <!-- email start -->
                    <div class="col-sm-12 block-padding-top" >
                        <div class="col-sm-4 col-sm-offset-4">
                            <label> Email Address: </label>
                        </div>
                    </div>
                    <div class="col-sm-12" >
                        <div class="col-sm-4 col-sm-offset-4">
                            <input name="email" id="mail"  required=""  type="text" placeholder="Email" />
                        </div>
                    </div>

                    <!-- end email -->

                    <!-- start password -->
                    <div class="col-sm-12" style="padding-top:15px;">
                        <div class="col-sm-4 col-sm-offset-4">
                            <label> Password: </label>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4">
                            <input name="password" id="password"  required=""  type="password" placeholder="Password" />
                        </div>
                    </div>
                    <!-- end password -->

                    <div class="col-sm-12 block-padding-top">
                        <div class="col-sm-2 col-sm-offset-4">
                            <label> Phone Number: </label>
                        </div>
                        <div class="col-sm-2 hidden-sm hidden-xs visible-md visible-lg"  >
                            <label> Mobile Number:</label>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-2 col-sm-offset-4">
                            <input name="phone" required=""  id="phonenumber" type="text" placeholder="Your Phone" />
                        </div>
                        <div class="col-sm-2 hidden-md hidden-lg visible-sm visible-xs " style="margin-top:5px;" >
                            <label> Mobile Number:</label>
                        </div>
                        <div class="col-sm-2">
                            <input name="mobile" required=""  id="mobilenumber" type="text" placeholder="Your Mobile" />
                        </div>
                    </div>
                    <!-- end phone number -->

                    <!-- start password -->
                    <div class="col-sm-12 block-padding-top">
                        <div class="col-sm-4 col-sm-offset-4">
                            <label> Home Address: </label>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4">
                            <input name="address" id="homeaddress"  required=""  type="text" placeholder="Type your Address:" />
                        </div>
                    </div>
                    <!-- end address -->

                    <div class="col-sm-12 block-padding-top">
                        <div class="col-sm-4 col-sm-offset-4">
                            <label> Preffered Ride Type: </label>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-8 col-sm-offset-4">
                            <input type="radio" value="CROSS_COUNTRY" id="Cross" name="CROSS_COUNTRY"  checked/>
                            <label for="Cross" class="radio" chec> Cross Country &nbsp;&nbsp;</label>
                            <input type="radio" value="ALL_MOUNTAIN" id="Mountain" name="ALL_MOUNTAIN" />
                            <label for="Mountain" class="radio">All-Mountain &nbsp;&nbsp;</label>
                            <input type="radio" value="DOWNHILL" id="Downhill" name="DOWNHILL" />
                            <label for="Downhill" class="radio">Downhill</label>
                        </div>
                    </div>
                    <div class="col-sm-12" style="padding:20px;">
                        <div class="col-sm-2 col-sm-offset-4">
                            <button type="submit" name="submit" class="btn2 btn-common btn-block"><strong>Sign up</strong></button>
                        </div>
                        <div class="col-sm-6" style="padding-top:13px;"> If you already have an account, <br/>
                            please try <a class='' href="http://192.254.152.84/~mtbdoz/client-login" style="text-decoration:underline;">Log in</a> </div>
                    </div>

                    <!-- end address -->
                </form>
            </div>
        </div>
    </div>
</div>