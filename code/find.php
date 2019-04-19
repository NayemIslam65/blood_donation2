<?php
   include "header.php";

?>
    
        <!--    banner part starts   -->
    <div class="col-md-12 banner";>
    <span id="info1">Find Donors Near You</span>
	<div id="info" class="col-md-12">

        <div class="wrap-contact100 button_home">
            <form autocomplete="off" action="seedonorsSearch.php" class="contact100-form validate-form" method="post">

                <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                    <input class="input100" type="text" name="location" placeholder="Enter your Location" required="" style="border: 2px solid lightblue;">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button name="submit-location" class="contact100-form-btn">See Donors</button>
                </div> 
            </form>
        </div>
	</div>
    </div>
    <!--    banner part ends   -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
