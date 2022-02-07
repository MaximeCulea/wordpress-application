<?php
echo 'Displays:';
		
          echo '$a string:'; 
          //display word conditionally
           $a = '';
           $cond = false;

           if($cond){
           echo  $a = "True Word";
           }else{
           echo  $a = "!True Word"; 
           }
          
           echo '<br>';
           echo '<br>';
           echo 'Switch case:';
          
          
           
           //display word conditionally with while
           $i = '';
            switch ($i) {
            case 'me':
                  echo "Am";
                  break;
            case 'you':
                  break;
                  echo "Are";
            default:
                  echo "Is";
            }
           
            echo '<br>';
            echo '<br>';
            echo 'For Loop:';
           
           
           
            //display 1 to 10 with for loop
            for($i=0;$i<=10;$i++){
                  echo $i;
            }
            
            echo '<br>';
            echo '<br>';
            echo 'While Loop:';
           
            

            //display 1 to 10 with while loop
            $i = 1;
            while ($i <= 10) {
                echo $i++; 
            }

            echo '<br>';
            echo '<br>';
            echo 'While Loop Function:';
          
            
            //display 1 to 10 with while loop in a function with no parameters
            function iterate_no_params(){
                    $i = 1;
                     while ($i <= 10) {
                        echo $i++; 
                    }
            }
            echo iterate_no_params();
            
            
            echo '<br>';
            echo '<br>';
            echo 'While Loop Function With Parameters:';
            
           
            //display 1 to 10 with while loop in a function with no parameters
            function iterate_params($max){
                    $i = 1;
                     while ($i <= $max) {
                        echo $i++; 
                    }
            }
            echo iterate_params(20);

            

            //Set variable array to next exercise
            $ex_array = array(5, 12, 10, 21, 2, 6, 8, 20, 14, 9, 12);
            
            echo '<br>';
            echo '<br>';
            echo 'Arrays with comas:';

            
            
            //display $ex_array separated by comas
            function array_with_comas($array){
              return implode(',', $array);
            }
           echo array_with_comas($ex_array);

            
           echo '<br>';
            echo '<br>';
            echo 'Average number from array:';
            

            //echo average number from $ex_array
            function average_number_from_array($array){
              $average = array_sum($array) / count($array);
              return round($average,2);
              echo '<br>';
              echo 'or';
              echo '<br>';
              return ceil($average);
            }

            echo average_number_from_array($ex_array);

            
            
            echo '<br>';
            echo '<br>';
            echo 'Total numbers equal greater than 10:';
            
            function greaterequal($var)
            {
                // returns whether the input id >= 10
                return $var >= 10;
            }
            
            //return total items from $ex_array >=10
            function total_items($array){
               $array_total = array_filter($array, "greaterequal");
               return sizeof( $array_total);
            }
            echo total_items($ex_array);


            echo '<br>';
            echo '<br>';
            echo 'Is 20 in the array?:';
            
            //return if value is in $ex_array
            function is_in_array($array,$value){
            if (in_array($value, $array)) {
                  echo 'Yes '. $value.' is in array';
                    }
            }
            echo is_in_array($ex_array,20);



            echo '<br>';
            echo '<br>';
            echo 'Largest number in array:';
            
            //return largest value of $ex_array
            function largest_number($array){
               return max($array);
            }
            
            echo largest_number($ex_array);
            
