<?php
// Enter your code here, enjoy!
$ideas=array("Avocados - 3"                       ,"Shallot - 1"
,"White onion - 2"                    ,"Asparagus - 1 bunch"
,"Mixed Greens - 1 container"         ,"Bananas - 1 bunch"
,"Apples - 5"                         ,"Lemons - 5"
,"Limes - 5"                          ,"Tomatoes (Heirloom) - 3"
,"Green Grapes - 1 container"         ,"Plain Yogurt - 1 quart"
,"Unsalted Butter - 4 sticks"         ,"Brown Eggs - 2 dozen"
,"Whole Milk - 1 gallon"              ,"Shredded Cheddar Cheese - 1 bag"
,"Orange Juice - 1 gallon"            ,"Sliced Turkey (Boars Head) - 2 LBS"
,"Thick-cut bacon - 1 pack"           ,"Hotdogs - 1 pack"
,"Chicken breast - 3 pack"            ,"Ground beef - 3 lb"
,"American cheese (Boars Head) - 1 lb" ,"Heinz ketchup - 1 bottle"
,"Hamburger rolls - 6 8 count"        ,"Taco shells - 12 count"
,"Salsa (medium) - 1 jar"             ,"Tostitos chips (scoops) - 1 bag"
,"Sour cream (Hood) - 8 oz"           ,"Granola (Bear Naked) - 2 bags"
,"Spaghetti - 2 boxes"                ,"Marinara sauce - 1 jar"
,"Ground coffee - 1 bag"              ,"Mayonnaise - 1 jar"
,"Portuguese bread - 2 loaves"        ,"Olive oil (EVO) - 1 jar"
,"Salt & Pepper shakers - 1 set"      ,"Ziploc bags - 1 gallon"
,"Ziploc bags - 1 quart"              ,"Tates cookies - 2 bags"
,"Cape Cod chips (regular) - 1 bag"   ,"Bottled Water - 24 pack"
,"Firewood - 1 bundle"                ,"Ice - 2 bags");

$searchword = 'spag';
$matches = array();
foreach($ideas as $value){
	//echo stripos($value,$searchword);
	if (stripos($value,$searchword)>-1){
		array_push($matches,$value);
	}
}

foreach($matches as $answer){
	echo $answer.PHP_EOL ;
}



  