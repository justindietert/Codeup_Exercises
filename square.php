<?php

class Square extends Rectangle 
{
    public function perimeter()
    {
        return $perimeter = ($this->width)*2 + ($this->height)*2;
    }
}