<?php

$file = fopen("data.json", w);
$arr = Array();

 # 26 items
$food = Array(
    "apple", "pear", "banana", "almond", "whole wheat bread", "salmon",
    "avocado", "broccoli", "pomegranate", "pumpkin", "ginger", "lettuce",
    "blueberry", "raspberry", "soybean", "skim milk", "mango", "dark chocolate",
    "lentil", "lean meat", "onion", "quinoa", "beet", "plum", "kiwi", "tuna"
    );
# 15 items
$group = Array(
    "fruit", "vegetable", "whole grain", "fish", "anti-oxidant", 
    "micro-green", "low-fat dairy", "lean meat", "high omega-3 food", "fish oil",
    "vitamin", "mineral", "monounsaturated fat", "low sodium food", "low sugar food"
    );
# 7 items
$taste = Array(
    "amazing", "great", "good", "okay", "bad", 
    "so grooooooss", "like it is totally inedible"
    );

class HealthyFood {
    function __construct($name, $group, $taste) {
        $this->name = $name;
        $this->group = $group;
        $this->taste = $taste;
    }

    function message() {
        return "This is a $this->name. A type of $this->group. It tastes $this->taste.";
    }
}

while ($x < 25000) {
    $food_type = rand(0, 25);
    $food_group = rand(0, 14);
    $food_taste = rand(0, 6);
    $item = new HealthyFood(
        $food[$food_type], 
        $group[$food_group], 
        $taste[$food_taste]
        );
    array_push($arr, $item->message());
    $x++;
}

$json = json_encode($arr);

fwrite($file, $json);

echo readfile("data.json");
