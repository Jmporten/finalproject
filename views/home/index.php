<?php
include('views/elements/header.php');?>
<div class="container">
    <div class="page-header">
        <h1>IUPUI CIT313 Final Project</h1>
    </div>
</div>
<div class="container">
    <div id="image">
        <img src="views/img/Banner3.png" width="100%" class="img  no-repeat center top">
    </div>
    <div id="text">
        <h2>This is my final project</h2>
        <h4>My project should have its own look and feel.</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
    <?php if(!$u->isRegistered()){?>
    <h5>Register For My Page</h5>
    <button>
        <a href="http://corsair.cs.iupui.edu:22771/CIT313/SP2018/final/register/">Register</a>
    </button>
    <?php }?>
    </div>
    <div id="weather">
        <h4>Get your local weather</h4>
        <h6>Enter your zip code below</h6>


        <form id="weather_form" method="post" action="<?php echo BASE_URL?>weather/getresults">

            <input type="text" name="zip" id="zip" required="zip">
            <br>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">View Weather</button>

        </form>
    </div>
</div>
<?php include('views/elements/footer.php');?>