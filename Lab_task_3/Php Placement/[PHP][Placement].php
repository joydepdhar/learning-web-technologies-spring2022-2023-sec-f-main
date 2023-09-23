<html>
    <head>
        <title>Lab 3.1 PlaceHolders</title>
    </head>
    <body>
        <!-- area and peramiter of a Ractangle    -->
        <?php 
        $length = 50;
        $width =30;
        $area =$length * $width;
        echo"The area of Ractangle is : ".$area ."<br>";

        $perimeter = 2*($length+$width);
        echo"The perimeter of Ractangle is : $perimeter";
        ?>
        </br>

        <!-- VAT Calculation: where vat is 8% -->
        <?php
        $amount =1000;
        $vat = $amount*(0.08);
        echo "Total VAT is: " . $vat;
        ?>
        </br>

        <!-- Odd or Even -->
        <?php
        $num = 11;
        if ($num % 2 == 0)
        {
            echo "Given Number $num  is even";
        } else 
        {
        echo "Given Number $num  is odd";
        }
        ?>
        </br>

        <!--largest number  -->
        <?php
        $Number1 = 6;
        $Number2 = 16;
        $Number3 = 12;
        if ($Number1 >= $Number2 && $Number1 >= $Number3) 
        {
        echo"$Number1  is the largest Number";
        } 
        elseif ($Number2 >= $Number1 && $Number2 >= $Number3) 
        {
        echo "$Number2 is the largest Number";
        } 
        else 
        {
        echo "$Number3  is the largest Number";
        }
        ?>
        </br>

        <!-- Printing all the odd number between 10 to 100 -->
        <?php

        for($num=10;$num<=100;$num++)
        {
            if($num%2!==0)
            {
                echo "$num\n";
            }
        }
        ?>
        </br>

        <!-- the shapes -->
        <?php 

            for($i=0;$i<=2;$i++)
            {        
                for($j=0;$j<=$i;$j++){
                    echo "*";
                }
                echo "<br>";
            }
            echo "<br>";
            for($i=2;$i>=0;$i--)
            {
                $x=1;        
                for($j=0;$j<=$i;$j++){
                    echo ($x. " ");
                    $x=$x+1;
                }
                echo "<br>";
            }
        echo "<br>";
            $k=65;
            for($i=0; $i<4; $i++)
            {
            for($j=0;$j<$i;$j++)
            {
                echo chr($k)," ";
                $k++;
            }
                echo"</br>";
            }
        ?>
    </body>
</html>
