<?php

class Bicycle
{
    public static $instance_count = 0;

    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    public $category;
    protected $weight_kg = 0.0;
    protected static $wheels = 2;

    public const CATEGORIES = ['Road', 'Mountain', 'Cruiser', 'City', 'BMX'];


    public static function create()
    {
        $class_name = get_called_class();
        $obj = new $class_name;
        // $obj = new static            // another way
        self::$instance_count++;

        return $obj;
    }

    public function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }
    public function weight_lbs()
    {
        return floatval($this->weight_kg) * 2.2046226218 . " lbs";
    }
    public function set_weight_lbs($weight_lbs)
    {
        return $this->weight_kg = floatval($weight_lbs) / 2.2046226218;
    }

    public static function wheel_details()
    {
        $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels . "wheels";
        return "It has " . $wheel_string . ".<br />";
    }

    public function set_weight_kg($value)
    {
        return $this->weight_kg = floatval($value);
    }

    public function weight_kg()
    {
        return $this->weight_kg . " kg";
    }
}

?>