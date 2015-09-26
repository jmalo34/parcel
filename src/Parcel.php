<?php
    class Parcel
    {
        private $height;
        private $length;
        private $width;
        private $weight;

        function __construct ($height, $length, $width, $weight)
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
            $this->height = (float) $new_height;
        }

        function getLength ()
        {
            return $this->length;
        }

        function setLength ($new_length)
        {
            $this->length = (float) $new_length;
        }

        function getWidth ()
        {
            return $this->width;
        }

        function setWidth ($new_width)
        {
            $this->width = (float) $new_width;
        }

        function getWeight ()
        {
            return $this->weight;
        }

        function setWeight ($new_weight)
        {
            $this->weight = (float) $new_weight;
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
