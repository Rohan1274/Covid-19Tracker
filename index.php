<?php

include "logic.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Tracker</title>
    <?php include 'link.php' ?>
    <?php include 'style.php' ?>


</head>

<body>
    <?php include 'navbar.php' ?>
    



     <div class="card-panel center-align" style="background-color: #F4B400">
    <div class="black-text center-align"><b><i class="fa fa-ambulance" aria-hidden="true"></i>

                Helpline Number</b> :+91-11-23978046</div>
        <div class="black-text center-align" ><b><i class="fa fa-phone-square" aria-hidden="true"></i>
                Toll Free</b> : 1075</div>
        <div class="black-text center-align" ><b><i class="fa fa-envelope" aria-hidden="true"></i>
                Helpline Email ID</b> : ncov2019@gov.in</div>
  </div>










    <div class="container center-align ">
        <h2 class="">COVID-19 CORONAVIRUS PANDEMIC</h2>
        <h5 class="">The coronavirus COVID-19 is affecting 213 countries and territories around the world </h5>
    </div>



    <!-- world wide once -->

   




<section>
        <div class="container">
            
            <div class="row mt-5">
                <div class="col s12 m4   ">
                    <div class="services-container center-align newsty">
                        <i class="large material-icons fa fa-snowflake-o "></i>
                        <h3><?php echo $total_confirmed ?></h3>
                        <p>Total Confirmed Cases</p>
                        
                    </div>

                </div>

                <div class="col s12 m4">
                    <div class="services-container center-align newsty">
                        <i class="large material-icons fa fa-snowflake-o "></i>
                        <h3><?php echo $total_recovered ?></h3>
                        <p>Total Recovered </p>
                        
                    </div>

                </div>

                <div class="col s12 m4">
                    <div class="services-container center-align newsty">
                        <i class="large material-icons fa fa-snowflake-o "></i>
                        <h3><?php echo $total_deaths ?></h3>
                        <p>Total Death Cases</p>
                        
                    </div>

                </div>

            </div>
        </div>



    </section>









    <!-- inquery -->
    

     <div class="card-panel center-align" style="background-color: #F4B400">
    <span class="black-text ">For any technical enquiry with respect to COVID19, you may kindly email on <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <b> <a href="technicalquery.covid19@gov.in">technicalquery.covid19@gov.in</a> </b></span>
  </div>



    <!-- corona latest update -->
    <!-- <?php include 'covid_front_state.php' ?> -->

    <!-- covid About Section -->
    <?php include 'aboutcovid.php' ?>
    <!-- symtoms -->
    <?php include 'symtoms.php' ?>

    <!-- prevention -->
    <?php include 'prevention.php' ?>
    <!-- contact page -->
    <?php include 'contactus.php' ?>

    <!-- livetracker -->







    <!-- footer -->

    <?php include 'footer.php' ?>


</body>

</html>