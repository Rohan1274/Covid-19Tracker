<?php

include "logic.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'link.php' ?>
    <?php include 'style.php' ?>


</head>

<body>
    <?php include 'navbar.php' ?>
    


<div class="container-fluid mt-5 text-justify col-12">
        <h1 class="font-weight-bold display-4 center-align" >COVID-19 CORONAVIRUS PANDEMIC</h1>
        <h5 class="center-align text-primary">The coronavirus COVID-19 is affecting 213 countries and territories around the world </h5>
    </div>
    <!-- world wide once -->


    <!-- try -->
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


    <!-- main tracker -->
    <div class="container-fluid  center-align ">
        <div class="table-responsive center-align">
            <table class="table table-bordered table-striped  centered striped center-align">
                <thead class="thead-dark ">
                    <tr class="center-align">
                        <th class="text-uppercase center-align  text-white" style=" background-color: #4285F4!important">Countries</th>
                        <th class="text-uppercase center-align  text-white" style=" background-color: #4285F4!important">Conformed</th>
                        <th class="text-uppercase center-align  text-white" style=" background-color: #4285F4!important">Increasing</th>
                        <th class="text-uppercase center-align  text-white" style=" background-color: #4285F4!important">Recovered</th>
                        <th class="text-uppercase center-align  text-white" style=" background-color: #4285F4!important">Deaths</th>
                    </tr>
                </thead>

                <tbody class="center-align ">
                    <?php
                    foreach ($data as $key => $value) {
                        $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
                    ?>

                        <tr>
                            <th class="center-align"><?php echo $key; ?></th>
                            <td class="center-align">
                                <?php echo $value[$days_count]['confirmed']; ?>


                            </td>
                            <td class="center-align">
                                <?php if ($increase != 0) { ?> <small class="text-danger pl-3"><i class="fas fa-arrow-circle-up"></i><?php echo $increase; ?></small> <?php } ?>
                            </td>
                            <td class="center-align">
                                <?php echo $value[$days_count]['recovered']; ?>
                            </td>
                            <td class="center-align">
                                <?php echo $value[$days_count]['deaths']; ?>
                            </td>

                        </tr>







                        


                    <?php } ?>

                </tbody>

            </table>

        </div>
    </div>






    <!-- footer -->

    <?php include 'footer.php' ?>


</body>

</html>