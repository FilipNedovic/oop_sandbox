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

class Unicycle extends Bicycle
{
    protected static $wheels = 1;
}

$trek = new Bicycle;
$trek->brand = "Trek";
$trek->model = "Emonda";
$trek->year = "2017";

echo "Bicycle count: " . Bicycle::$instance_count . "<br />";
echo "Unicycle count: " . Unicycle::$instance_count . "<br />";

$bike = Bicycle::create();
$uni = Unicycle::create();

echo "Bicycle count: " . Bicycle::$instance_count . "<br />";
echo "Unicycle count: " . Unicycle::$instance_count . "<br />";

echo "<hr />";

echo "Categories: " . implode(", ", Bicycle::CATEGORIES) . "<br />";
$trek->category = Bicycle::CATEGORIES[0];
echo "Category: " . $trek->category . "<br />";

echo "<hr />";

echo "Bicycle: " . Bicycle::wheel_details() . "<br />";
echo "Unicycle: " . Unicycle::wheel_details() . "<br />";

?>