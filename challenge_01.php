<?php

class Bicycle
{
    var $brand;
    var $model;
    var $year;
    var $description = 'Used bicycle';
    var $weight_kg = 0.0;

    function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }
    function weight_lbs()
    {
        return floatval($this->weight_kg) * 2.2046226218;
    }
    function set_weight_lbs($weight_lbs)
    {
        return $this->weight_kg = floatval($weight_lbs) / 2.2046226218;
    }
}

$bicycle1 = new Bicycle;
$bicycle1->brand = 'BMX';
$bicycle1->model = 'Elite';
$bicycle1->year = 2019;
$bicycle1->weight_kg = 1;
$bicycle1->weight_lbs();

echo "Bicycle brand, model and year are: " . $bicycle1->name() . "<br />";
echo "Bicycle weight in kilograms is: " . $bicycle1->weight_kg . "<br />";
echo "Bicycle weight in pounds is: " . $bicycle1->weight_lbs() . "<br />";

$bicycle1->set_weight_lbs(2);
echo "New bicycle weight in kilograms is: " . $bicycle1->weight_kg;

$bicycle2 = new Bicycle;
$bicycle2->brand = 'Capriolo';
$bicycle2->model = 'Diavolo';
$bicycle2->year = 2017;
$bicycle2->weight_kg = 9;
$bicycle2->weight_lbs();

echo "<br />";
echo "<br />Bicycle brand, model and year are: " . $bicycle2->name() . "<br />";
echo "Bicycle weight in kilograms is: " . $bicycle2->weight_kg . "<br />";
echo "Bicycle weight in pounds is: " . $bicycle2->weight_lbs() . "<br />";

$bicycle2->set_weight_lbs(15.3);
echo "New bicycle weight in kilograms is: " . $bicycle2->weight_kg;


?>