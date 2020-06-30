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
    



    <section class="fluid-container m-5 ">
        <div class="mb-5 jumbotron">
        <h2 class="font-weight-bold display-4 center-align">COVID-19 INDIA CORONAVIRUS PANDEMIC </h2>
        <h5 class="center-align black-text">The coronavirus COVID-19 is affecting 213 countries and territories around the world </h5>
        </div>
        <div class="responsive-table ">
            <table class="table table-bordered table-striped  centered striped ">
                <tr >
                    <th class="text-uppercase center-align newcase text-white" style=" background-color: #4285F4!important">Last updated Time</th>
                    <th class="text-uppercase center-align newcase text-white" style=" background-color: #4285F4!important">state</th>
                    <th class="text-uppercase center-align newcase text-white" style=" background-color: #4285F4!important">confirmed</th>
                    <th class="text-uppercase center-align newcase text-white" style=" background-color: #4285F4!important">active</th>
                    <th class="text-uppercase center-align newcase text-white" style=" background-color: #4285F4!important">recovered</th>
                    <th class="text-uppercase center-align newcase text-white" style=" background-color: #4285F4!important">Deaths</th>
                </tr>

                <?php

                $data = file_get_contents('https://api.covid19india.org/data.json');
                $coronalive = json_decode($data, true);

                // echo "<pre>";

                // print_r($coronalive);
                // echo "</pre>"

                $statecount = count($coronalive['statewise']);


                $i = 1;
                while ($i < $statecount) {

                    ?>

                    <tr>
                        <td class="center-align"><?php echo $coronalive['statewise'][$i]['lastupdatedtime']?></td>
                        <td class="center-align"><?php echo $coronalive['statewise'][$i]['state']?></td>
                        <td class="center-align"><?php echo $coronalive['statewise'][$i]['confirmed']?></td>
                        <td class="center-align"><?php echo $coronalive['statewise'][$i]['active']?></td>
                        <td class="center-align"><?php echo $coronalive['statewise'][$i]['recovered']?></td>
                        <td class="center-align"><?php echo $coronalive['statewise'][$i]['deaths']?></td>
                    </tr>

                 
                    <?php
                    $i++;
                }

                ?>

            </table>

        </div>

    </section>
    <!-- livetracker -->







    <!-- footer -->

    <?php include 'footer.php' ?>


</body>

</html>