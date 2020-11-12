<?php

function turn($direction)
{
    try{
        if($direction == "left")
        {
            throw new Exception("You on left side");
        }
        else {
            echo "You on other side";
        }
    } catch(Exception $e)
    {
        echo "Exception caught: " . $e->getMessage();
    }
}

turn("right");