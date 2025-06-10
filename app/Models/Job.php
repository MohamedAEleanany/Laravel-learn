<?php

namespace App\Models;



class Job 
{
    public static function all()
    {
        return [
            ["Title" =>"Software Enginner" , "Salary" =>"5000" , ],
            ["Title" =>"Graphic Designer" , "Salary" =>"4000" , ],
            ["Title" =>"IT" , "Salary" =>"3000" , ],
        ];
    }
}
