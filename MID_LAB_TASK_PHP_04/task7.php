<?php

    for($i=1;$i<=3;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo"* ";
        }
        echo"<br/> ";
    }

    echo"<br/> ";

    for($i=1;$i<=3;$i++)
    {
        for($j=3;$j>=$i;$j--)
        {
            echo 4-$j." ";
        }
        echo"<br/> ";
    }

    echo"<br/> ";

    $ch="A";
    for($i=1;$i<=3;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo$ch." ";
            $ch++;
        }
        echo"<br/> ";
    }

?>