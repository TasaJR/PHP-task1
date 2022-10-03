<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>DPDD STUDENTS</title>
        <h1>Students' Names and Ages comparison </h1>
    </head>

    <body>
        <!--All PHP scripts need to go inside these tags-->
        <?php
            #create 2D array
            $student_name = array('Mithcell', 'Derron', 'Omarion', 'Ela', 'Jake', 'Alex', 'Rana', 'Rehman', 'Nour', 'Noman', 'Temi', 'Taylor','Elizabeth','Roddick');
            $age = array(17, 17, 19, 17, 18, 17, 19, 19, 19, 18, 18, 18, 17, 17);
            
            $student_details = array('Mitchell' => 17, 'Derron' => 17, 'Omarion' => 19, 'Ela' => 17, 'Jake' => 18, 'Alex' => 17, 'Rana' => 19, 'Rehman' => 19, 'Nour' => 19, 'Temi' => 18, 'Noman' => 18, 'Taylor' => 18, 'Elizabete' => 17, 'Roddick' => 17);

            echo "<dl><dt>DPDD Students: Original Order<dd>";
            foreach($student_details as $key => $value) {
                echo '&bull; ', $key.': '.$value;
                echo '<br>';
            }
            echo '<br>';

            #Sorted by  student Name
            ksort($student_details);
            echo "<dt>Sorted by Name:<dd>";
            foreach($student_details as $key => $value) {
                echo '&bull;', $key.': '.$value;
                echo '<br>';
            }
            echo '<br>';
        
            #Sorted by student Age
            asort($student_details);
            echo "<dt>Sorted by Age:<dd>";
            foreach($student_details as $key => $value) {
                echo '&bull;', $key.': '.$value;
                echo '<br>';
            }
            echo '<br>';

            $average_age = array_sum($age);
            echo "<dt>The average age of the DPDD Group is: ";
            echo round($average_age/14);
            echo '<br> <br>';

            //Age comparison against students' ages
            echo "<dt>Comparing my age to DPDD students' ages: <dd><br>";

            foreach($student_details as  $key => $value) {
                if ($value > 19) {
                    echo " $key is older than Rehman <br>" ;
                }
                if ($value < 19) {
                    echo " $key is younger than Rehman <br>";
                }
                if ($value == 19) {
                    echo " $key is the same age as Rehman <br>";
                }
            }
            echo'<br>'; 

            //Printing students over 18, less than 18 and exactly 18
           
            echo "<dt>Students over 18:<dd><br>";
            foreach($student_details as  $key => $value) {
                if ($value > 18) {
                    echo '&bull;', $key.': '.$value;
                    echo '<br>';
                }
            }
            echo'<br>';
            echo "<dt>Students less than 18:<dd><br>";
            foreach($student_details as  $key => $value) {
                if ($value < 18) {
                    echo '&bull;', $key.': '.$value;
                    echo '<br>';
                }
            }
            echo'<br>';
            echo "<dt>Students who are 18:<dd><br>";
            foreach($student_details as  $key => $value) {
                if ($value == 18) {
                    echo '&bull;', $key.': '.$value;
                    echo '<br>';
                }
            }


        ?>
    </body>

</html>