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
    



    
 <section class=" ">
        <div class="mb-5 jumbotron">
        <h1 class="font-weight-bold display-4 center-align">COVID-19 INDIA CORONAVIRUS PANDEMIC </h1>
        <h5 class="center-align black-text">The coronavirus COVID-19 is affecting 213 countries and territories around the world </h5>
        </div>
        <div class="responsive-table">
            <table class="table table-bordered table-striped  centered striped ">
                <tr>
                    <th class="text-uppercase center-align newcase text-white" style=" background-color: #4285F4!important">date</th>
                    <th class="text-uppercase center-align newcase text-white" style=" background-color: #4285F4!important">totalconfirmed</th>
                    <th class="text-uppercase center-align newcase text-white" style=" background-color: #4285F4!important">totaldeceased</th>
                    <th class="text-uppercase center-align newcase text-white" style=" background-color: #4285F4!important">totalrecovered</th>
                   
                </tr>

                <?php

                    $data = file_get_contents('https://api.covid19india.org/data.json');
                    $daywise = json_decode($data,true);


                    $totalcount = count($daywise['cases_time_series']);

                    $i=0;
                    while ($i < $totalcount) 
                
                
                {

                    ?>

                    <tr>
                        <td class="center-align"><?php echo $daywise['cases_time_series'][$i]['date']?></td>
                        <td class="center-align"><?php echo $daywise['cases_time_series'][$i]['totalconfirmed']?></td>
                        <td class="center-align"><?php echo $daywise['cases_time_series'][$i]['totaldeceased']?></td>
                        <td class="center-align"><?php echo $daywise['cases_time_series'][$i]['totalrecovered']?></td>
                        
                    </tr>

                 
                    <?php
                    $i++;
                }

                ?>

            </table>

        </div>

    </section>






    <!-- footer -->

    <?php include 'footer.php' ?>


</body>

</html>