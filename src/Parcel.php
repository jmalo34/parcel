<?php
    class Parcel
    {
        private $height;
        private $length;
        private $width;
        private $weight;

        function __construct ($height = 0, $length = 0, $width = 0, $weight = 0)
        {
            $this->height = $height;
            $this->length = $length;
            $this->width = $width;
            $this->weight = $weight;
        }

        function getHeight ()
        {
            return $this->height;
        }

        function setHeight ($new_height)
        {
            $this->height = (integer) $new_height;
        }

        function getLength ()
        {
            return $this->length;
        }

        function setLength ($new_length)
        {
            $this->length = (integer) $new_length;
        }

        function getWidth ()
        {
            return $this->width;
        }

        function setWidth ($new_width)
        {
            $this->width = (integer) $new_width;
        }

        function getWeight ()
        {
            return $this->weight;
        }

        function setWeight ($new_weight)
        {
            $this->weight = (integer) $new_weight;
        }

        function volume()
        {
            return $this->height * $this->length * $this->width;
        }

        function costToShip()
        {
            if($this->height < 12 && $this->weight < 10)
            {
                return 10;
            }
            else
            {
                return 18;
            }
        }
    }
 ?>
