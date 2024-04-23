<!DOCTYPE html>
<html>
<head>
    <title>Meal Selection Page for fit</title>
    <style>
        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        .item {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h2>Meal Selection</h2>
    <div class="clearfix">
        <div class="column">
            <h3>Breakfast</h3>
            <div id="breakfastItems" >               
            <input type="checkbox" name="breakfastItem" value="Oatmeal with Nut Butter and Fruit">
                <label for="Oatmeal with Nut Butter and Fruit">Oatmeal with Nut Butter and Fruit</label><br>
                <input type="checkbox" name="breakfastItem" value="Greek Yogurt Parfait">
                <label for="Greek Yogurt Parfait">Greek Yogurt Parfait</label><br>
                <input type="checkbox" name="breakfastItem" value="Scrambled Eggs with Whole Grain Toast">
                <label for="Scrambled Eggs with Whole Grain Toast">Scrambled Eggs with Whole Grain Toast</label><br>
                <input type="checkbox" name="breakfastItem" value="Smoothie Bowl with Granola and Berries">
                <label for="Smoothie Bowl with Granola and Berries">Smoothie Bowl with Granola and Berries</label><br>
                <input type="checkbox" name="breakfastItem" value="Avocado Toast with Poached Egg">
                <label for="Avocado Toast with Poached Egg">Avocado Toast with Poached Egg</label><br>
                <input type="checkbox" name="breakfastItem" value="Whole Wheat Pancakes with Maple Syrup">
                <label for="Whole Wheat Pancakes with Maple Syrup">Whole Wheat Pancakes with Maple Syrup</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Burrito with Eggs, Vegetables, and Cheese">
                <label for="Breakfast Burrito with Eggs, Vegetables, and Cheese">Breakfast Burrito with Eggs, Vegetables, and Cheese</label><br>
                <input type="checkbox" name="breakfastItem" value="Chia Seed Pudding with Fresh Fruit">
                <label for="Chia Seed Pudding with Fresh Fruit">Chia Seed Pudding with Fresh Fruit</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Quiche with Spinach and Feta">
                <label for="Breakfast Quiche with Spinach and Feta">Breakfast Quiche with Spinach and Feta</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Tacos with Black Beans and Salsa">
                <label for="Breakfast Tacos with Black Beans and Salsa">Breakfast Tacos with Black Beans and Salsa</label><br>
                <input type="checkbox" name="breakfastItem" value="Overnight Oats with Almond Milk and Chia Seeds">
                <label for="Overnight Oats with Almond Milk and Chia Seeds">Overnight Oats with Almond Milk and Chia Seeds</label><br>
                <input type="checkbox" name="breakfastItem" value="Veggie Omelette with Toast">
                <label for="Veggie Omelette with Toast">Veggie Omelette with Toast</label><br>
                <input type="checkbox" name="breakfastItem" value="Banana Walnut Muffins">
                <label for="Banana Walnut Muffins">Banana Walnut Muffins</label><br>
                <input type="checkbox" name="breakfastItem" value="Protein Waffles with Greek Yogurt and Honey">
                <label for="Protein Waffles with Greek Yogurt and Honey">Protein Waffles with Greek Yogurt and Honey</label><br>
                <input type="checkbox" name="breakfastItem" value="Cottage Cheese and Pineapple">
                <label for="Cottage Cheese and Pineapple">Cottage Cheese and Pineapple</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Quesadilla with Scrambled Eggs and Avocado">
                <label for="Breakfast Quesadilla with Scrambled Eggs and Avocado">Breakfast Quesadilla with Scrambled Eggs and Avocado</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Wrap with Turkey Bacon and Avocado">
                <label for="Breakfast Wrap with Turkey Bacon and Avocado">Breakfast Wrap with Turkey Bacon and Avocado</label><br>
                <input type="checkbox" name="breakfastItem" value="Smoked Salmon Bagel with Cream Cheese and Capers">
                <label for="Smoked Salmon Bagel with Cream Cheese and Capers">Smoked Salmon Bagel with Cream Cheese and Capers</label><br>
                <input type="checkbox" name="breakfastItem" value="French Toast with Fresh Berries">
                <label for="French Toast with Fresh Berries">French Toast with Fresh Berries</label><br>
                <input type="checkbox" name="breakfastItem" value="Shakshuka (Poached Eggs in Tomato Sauce)">
                <label for="Shakshuka (Poached Eggs in Tomato Sauce)">Shakshuka (Poached Eggs in Tomato Sauce)</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Hash with Sweet Potatoes and Sausage">
                <label for="Breakfast Hash with Sweet Potatoes and Sausage">Breakfast Hash with Sweet Potatoes and Sausage</label><br>
                <input type="checkbox" name="breakfastItem" value="Acai Bowl with Granola and Mixed Berries">
                <label for="Acai Bowl with Granola and Mixed Berries">Acai Bowl with Granola and Mixed Berries</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Sausage and Egg Sandwich">
                <label for="Breakfast Sausage and Egg Sandwich">Breakfast Sausage and Egg Sandwich</label><br>
                <input type="checkbox" name="breakfastItem" value="Spinach and Mushroom Breakfast Frittata">
                <label for="Spinach and Mushroom Breakfast Frittata">Spinach and Mushroom Breakfast Frittata</label><br>
                <input type="checkbox" name="breakfastItem" value="Quinoa Breakfast Bowl with Almond Milk and Berries">
                <label for="Quinoa Breakfast Bowl with Almond Milk and Berries">Quinoa Breakfast Bowl with Almond Milk and Berries</label><br>
                <input type="checkbox" name="breakfastItem" value="Blueberry Banana Bread">
                <label for="Blueberry Banana Bread">Blueberry Banana Bread</label><br>
                <input type="checkbox" name="breakfastItem" value="Green Smoothie with Spinach, Mango, and Banana">
                <label for="Green Smoothie with Spinach, Mango, and Banana">Green Smoothie with Spinach, Mango, and Banana</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Pizza with Eggs and Bacon">
                <label for="Breakfast Pizza with Eggs and Bacon">Breakfast Pizza with Eggs and Bacon</label><br>
                <input type="checkbox" name="breakfastItem" value="Apple Cinnamon Overnight Oats">
                <label for="Apple Cinnamon Overnight Oats">Apple Cinnamon Overnight Oats</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Biscuits with Sausage Gravy">
                <label for="Breakfast Biscuits with Sausage Gravy">Breakfast Biscuits with Sausage Gravy</label><br>
                <input type="checkbox" name="breakfastItem" value="Peanut Butter Banana Overnight Oats">
                <label for="Peanut Butter Banana Overnight Oats">Peanut Butter Banana Overnight Oats</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Muffin Sandwich with Egg and Cheese">
                <label for="Breakfast Muffin Sandwich with Egg and Cheese">Breakfast Muffin Sandwich with Egg and Cheese</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Polenta with Roasted Vegetables and Poached Egg">
                <label for="Breakfast Polenta with Roasted Vegetables and Poached Egg">Breakfast Polenta with Roasted Vegetables and Poached Egg</label><br>
                <input type="checkbox" name="breakfastItem" value="Greek Yogurt with Honey and Granola">
                <label for="Greek Yogurt with Honey and Granola">Greek Yogurt with Honey and Granola</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Croissant with Ham and Swiss Cheese">
                <label for="Breakfast Croissant with Ham and Swiss Cheese">Breakfast Croissant with Ham and Swiss Cheese</label><br>
                <input type="checkbox" name="breakfastItem" value="Huevos Rancheros with Black Beans and Avocado">
                <label for="Huevos Rancheros with Black Beans and Avocado">Huevos Rancheros with Black Beans and Avocado</label><br>
                <input type="checkbox" name="breakfastItem" value="Veggie Breakfast Sausage Patties with Scrambled Eggs">
                <label for="Veggie Breakfast Sausage Patties with Scrambled Eggs">Veggie Breakfast Sausage Patties with Scrambled Eggs</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Bruschetta with Tomatoes and Basil">
                <label for="Breakfast Bruschetta with Tomatoes and Basil">Breakfast Bruschetta with Tomatoes and Basil</label><br>
                <input type="checkbox" name="breakfastItem" value="Strawberry Banana Smoothie Bowl">
                <label for="Strawberry Banana Smoothie Bowl">Strawberry Banana Smoothie Bowl</label><br>
                <input type="checkbox" name="breakfastItem" value="Baked Oatmeal with Apples and Cinnamon">
                <label for="Baked Oatmeal with Apples and Cinnamon">Baked Oatmeal with Apples and Cinnamon</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Rice Bowl with Fried Egg and Kimchi">
                <label for="Breakfast Rice Bowl with Fried Egg and Kimchi">Breakfast Rice Bowl with Fried Egg and Kimchi</label><br>
                <input type="checkbox" name="breakfastItem" value="Veggie Breakfast Burrito with Tofu Scramble">
                <label for="Veggie Breakfast Burrito with Tofu Scramble">Veggie Breakfast Burrito with Tofu Scramble</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Pizza with Spinach, Feta, and Sun-Dried Tomatoes">
                <label for="Breakfast Pizza with Spinach, Feta, and Sun-Dried Tomatoes">Breakfast Pizza with Spinach, Feta, and Sun-Dried Tomatoes</label><br>
                <input type="checkbox" name="breakfastItem" value="Pumpkin Spice Pancakes with Maple Syrup">
                <label for="Pumpkin Spice Pancakes with Maple Syrup">Pumpkin Spice Pancakes with Maple Syrup</label><br>
                <input type="checkbox" name="breakfastItem" value="Quiche Lorraine with Bacon and Gruyere Cheese">
                <label for="Quiche Lorraine with Bacon and Gruyere Cheese">Quiche Lorraine with Bacon and Gruyere Cheese</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Sushi with Smoked Salmon and Avocado">
                <label for="Breakfast Sushi with Smoked Salmon and Avocado">Breakfast Sushi with Smoked Salmon and Avocado</label><br>
                <input type="checkbox" name="breakfastItem" value="Greek Yogurt Parfait with Mango and Coconut Flakes">
                <label for="Greek Yogurt Parfait with Mango and Coconut Flakes">Greek Yogurt Parfait with Mango and Coconut Flakes</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Tostadas with Refried Beans and Fried Egg">
                <label for="Breakfast Tostadas with Refried Beans and Fried Egg">Breakfast Tostadas with Refried Beans and Fried Egg</label><br>
                <input type="checkbox" name="breakfastItem" value="Berry Smoothie with Spinach and Almond Milk">
                <label for="Berry Smoothie with Spinach and Almond Milk">Berry Smoothie with Spinach and Almond Milk</label><br>
                <input type="checkbox" name="breakfastItem" value="Breakfast Stuffed Peppers with Eggs and Cheese">
                <label for="Breakfast Stuffed Peppers with Eggs and Cheese">Breakfast Stuffed Peppers with Eggs and Cheese</label><br>
            </div>
        </div>
        <div class="column">
            <h3>Lunch</h3>
            <div id="lunchItems">
            <input type="checkbox" name="lunchItem" value="Avocado Chicken Salad">
                <label for="Avocado Chicken Salad">Avocado Chicken Salad</label><br>
                <input type="checkbox" name="lunchItem" value="Turkey and Cheese Sandwich on Whole Grain Bread">
                <label for="Turkey and Cheese Sandwich on Whole Grain Bread">Turkey and Cheese Sandwich on Whole Grain Bread</label><br>
                <input type="checkbox" name="lunchItem" value="Quinoa and Black Bean Salad">
                <label for="Quinoa and Black Bean Salad">Quinoa and Black Bean Salad</label><br>
                <input type="checkbox" name="lunchItem" value="Egg Salad Wrap with Spinach">
                <label for="Egg Salad Wrap with Spinach">Egg Salad Wrap with Spinach</label><br>
                <input type="checkbox" name="lunchItem" value="Peanut Butter and Banana Sandwich">
                <label for="Peanut Butter and Banana Sandwich">Peanut Butter and Banana Sandwich</label><br>
                <input type="checkbox" name="lunchItem" value="Chickpea Salad with Feta and Cucumber">
                <label for="Chickpea Salad with Feta and Cucumber">Chickpea Salad with Feta and Cucumber</label><br>
                <input type="checkbox" name="lunchItem" value="Tuna Salad Lettuce Wraps">
                <label for="Tuna Salad Lettuce Wraps">Tuna Salad Lettuce Wraps</label><br>
                <input type="checkbox" name="lunchItem" value="Veggie and Hummus Wrap">
                <label for="Veggie and Hummus Wrap">Veggie and Hummus Wrap</label><br>
                <input type="checkbox" name="lunchItem" value="Cheese and Tomato Quesadilla">
                <label for="Cheese and Tomato Quesadilla">Cheese and Tomato Quesadilla</label><br>
                <input type="checkbox" name="lunchItem" value="Grilled Chicken Caesar Salad">
                <label for="Grilled Chicken Caesar Salad">Grilled Chicken Caesar Salad</label><br>
                <input type="checkbox" name="lunchItem" value="Greek Yogurt with Granola and Berries">
                <label for="Greek Yogurt with Granola and Berries">Greek Yogurt with Granola and Berries</label><br>
                <input type="checkbox" name="lunchItem" value="Turkey and Avocado Wrap">
                <label for="Turkey and Avocado Wrap">Turkey and Avocado Wrap</label><br>
                <input type="checkbox" name="lunchItem" value="Pasta Salad with Grilled Chicken">
                <label for="Pasta Salad with Grilled Chicken">Pasta Salad with Grilled Chicken</label><br>
                <input type="checkbox" name="lunchItem" value="Lentil Soup with Whole Grain Bread">
                <label for="Lentil Soup with Whole Grain Bread">Lentil Soup with Whole Grain Bread</label><br>
                <input type="checkbox" name="lunchItem" value="Caprese Salad with Balsamic Glaze">
                <label for="Caprese Salad with Balsamic Glaze">Caprese Salad with Balsamic Glaze</label><br>
                <input type="checkbox" name="lunchItem" value="Vegetable Stir-Fry with Tofu">
                <label for="Vegetable Stir-Fry with Tofu">Vegetable Stir-Fry with Tofu</label><br>
                <input type="checkbox" name="lunchItem" value="Salmon Salad with Mixed Greens">
                <label for="Salmon Salad with Mixed Greens">Salmon Salad with Mixed Greens</label><br>
                <input type="checkbox" name="lunchItem" value="Quinoa Buddha Bowl with Roasted Vegetables">
                <label for="Quinoa Buddha Bowl with Roasted Vegetables">Quinoa Buddha Bowl with Roasted Vegetables</label><br>
                <input type="checkbox" name="lunchItem" value="Hummus and Veggie Sandwich">
                <label for="Hummus and Veggie Sandwich">Hummus and Veggie Sandwich</label><br>
                <input type="checkbox" name="lunchItem" value="Cottage Cheese with Pineapple">
                <label for="Cottage Cheese with Pineapple">Cottage Cheese with Pineapple</label><br>
                <input type="checkbox" name="lunchItem" value="Chicken and Vegetable Soup">
                <label for="Chicken and Vegetable Soup">Chicken and Vegetable Soup</label><br>
                <input type="checkbox" name="lunchItem" value="Turkey and Cranberry Wrap">
                <label for="Turkey and Cranberry Wrap">Turkey and Cranberry Wrap</label><br>
                <input type="checkbox" name="lunchItem" value="Bean Burrito with Guacamole">
                <label for="Bean Burrito with Guacamole">Bean Burrito with Guacamole</label><br>
                <input type="checkbox" name="lunchItem" value="Grilled Veggie Panini">
                <label for="Grilled Veggie Panini">Grilled Veggie Panini</label><br>
                <input type="checkbox" name="lunchItem" value="Chicken and Rice Soup">
                <label for="Chicken and Rice Soup">Chicken and Rice Soup</label><br>
                <input type="checkbox" name="lunchItem" value="Greek Salad with Grilled Shrimp">
                <label for="Greek Salad with Grilled Shrimp">Greek Salad with Grilled Shrimp</label><br>
                <input type="checkbox" name="lunchItem" value="Veggie Burger with Sweet Potato Fries">
                <label for="Veggie Burger with Sweet Potato Fries">Veggie Burger with Sweet Potato Fries</label><br>
                <input type="checkbox" name="lunchItem" value="Spinach and Strawberry Salad with Grilled Chicken">
                <label for="Spinach and Strawberry Salad with Grilled Chicken">Spinach and Strawberry Salad with Grilled Chicken</label><br>
                <input type="checkbox" name="lunchItem" value="BLT Sandwich with Avocado">
                <label for="BLT Sandwich with Avocado">BLT Sandwich with Avocado</label><br>
                <input type="checkbox" name="lunchItem" value="Mexican Quinoa Salad">
                <label for="Mexican Quinoa Salad">Mexican Quinoa Salad</label><br>
                <input type="checkbox" name="lunchItem" value="Egg and Spinach Breakfast Wrap">
                <label for="Egg and Spinach Breakfast Wrap">Egg and Spinach Breakfast Wrap</label><br>
                <input type="checkbox" name="lunchItem" value="Beef and Vegetable Stir-Fry">
                <label for="Beef and Vegetable Stir-Fry">Beef and Vegetable Stir-Fry</label><br>
                <input type="checkbox" name="lunchItem" value="Chicken Caesar Wrap">
                <label for="Chicken Caesar Wrap">Chicken Caesar Wrap</label><br>
                <input type="checkbox" name="lunchItem" value="Mediterranean Couscous Salad">
                <label for="Mediterranean Couscous Salad">Mediterranean Couscous Salad</label><br>
                <input type="checkbox" name="lunchItem" value="Turkey Chili with Cornbread">
                <label for="Turkey Chili with Cornbread">Turkey Chili with Cornbread</label><br>
                <input type="checkbox" name="lunchItem" value="Baked Potato with Broccoli and Cheese">
                <label for="Baked Potato with Broccoli and Cheese">Baked Potato with Broccoli and Cheese</label><br>
                <input type="checkbox" name="lunchItem" value="Asian Noodle Salad with Chicken">
                <label for="Asian Noodle Salad with Chicken">Asian Noodle Salad with Chicken</label><br>
                <input type="checkbox" name="lunchItem" value="Tuna Nicoise Salad">
                <label for="Tuna Nicoise Salad">Tuna Nicoise Salad</label><br>
                <input type="checkbox" name="lunchItem" value="Veggie and Bean Burrito Bowl">
                <label for="Veggie and Bean Burrito Bowl">Veggie and Bean Burrito Bowl</label><br>
                <input type="checkbox" name="lunchItem" value="Greek Yogurt Parfait with Honey and Nuts">
                <label for="Greek Yogurt Parfait with Honey and Nuts">Greek Yogurt Parfait with Honey and Nuts</label><br>
                <input type="checkbox" name="lunchItem" value="BBQ Chicken Salad">
                <label for="BBQ Chicken Salad">BBQ Chicken Salad</label><br>
                <input type="checkbox" name="lunchItem" value="Turkey and Cheese Panini">
                <label for="Turkey and Cheese Panini">Turkey and Cheese Panini</label><br>
                <input type="checkbox" name="lunchItem" value="Antipasto Salad with Italian Dressing">
                <label for="Antipasto Salad with Italian Dressing">Antipasto Salad with Italian Dressing</label><br>
                <input type="checkbox" name="lunchItem" value="Chicken Pita Sandwich with Tzatziki Sauce">
                <label for="Chicken Pita Sandwich with Tzatziki Sauce">Chicken Pita Sandwich with Tzatziki Sauce</label><br>
                <input type="checkbox" name="lunchItem" value="Lentil and Vegetable Soup">
                <label for="Lentil and Vegetable Soup">Lentil and Vegetable Soup</label><br>
                <input type="checkbox" name="lunchItem" value="Falafel Wrap with Tahini Sauce">
                <label for="Falafel Wrap with Tahini Sauce">Falafel Wrap with Tahini Sauce</label><br>
                <input type="checkbox" name="lunchItem" value="Southwest Chicken Salad">
                <label for="Southwest Chicken Salad">Southwest Chicken Salad</label><br>
                <input type="checkbox" name="lunchItem" value="Quinoa and Veggie Stuffed Bell Peppers">
                <label for="Quinoa and Veggie Stuffed Bell Peppers">Quinoa and Veggie Stuffed Bell Peppers</label><br>
                <input type="checkbox" name="lunchItem" value="Shrimp and Avocado Salad">
                <label for="Shrimp and Avocado Salad">Shrimp and Avocado Salad</label><br>
                <input type="checkbox" name="lunchItem" value="Veggie Sushi Rolls">
                <label for="Veggie Sushi Rolls">Veggie Sushi Rolls</label><br>
            </div>
        </div>
        <div class="column">
            <h3>Dinner</h3>
            <div id="dinnerItems">
            <input type="checkbox" name="dinnerItems" value="Grilled Salmon with Quinoa and Steamed Vegetables">
                <label for="Grilled Salmon with Quinoa and Steamed Vegetables">Grilled Salmon with Quinoa and Steamed Vegetables</label><br>
                <input type="checkbox" name="dinnerItems" value="Beef Stir-Fry with Brown Rice and Broccoli">
                <label for="Beef Stir-Fry with Brown Rice and Broccoli">Beef Stir-Fry with Brown Rice and Broccoli</label><br>
                <input type="checkbox" name="dinnerItems" value="Baked Chicken Breast with Sweet Potato Mash and Green Beans">
                <label for="Baked Chicken Breast with Sweet Potato Mash and Green Beans">Baked Chicken Breast with Sweet Potato Mash and Green Beans</label><br>
                <input type="checkbox" name="dinnerItems" value="Spaghetti Carbonara with Whole Wheat Pasta">
                <label for="Spaghetti Carbonara with Whole Wheat Pasta">Spaghetti Carbonara with Whole Wheat Pasta</label><br>
                <input type="checkbox" name="dinnerItems" value="Lentil and Vegetable Curry with Basmati Rice">
                <label for="Lentil and Vegetable Curry with Basmati Rice">Lentil and Vegetable Curry with Basmati Rice</label><br>
                <input type="checkbox" name="dinnerItems" value="Turkey Meatballs with Marinara Sauce and Whole Wheat Spaghetti">
                <label for="Turkey Meatballs with Marinara Sauce and Whole Wheat Spaghetti">Turkey Meatballs with Marinara Sauce and Whole Wheat Spaghetti</label><br>
                <input type="checkbox" name="dinnerItems" value="Stuffed Bell Peppers with Ground Beef and Rice">
                <label for="Stuffed Bell Peppers with Ground Beef and Rice">Stuffed Bell Peppers with Ground Beef and Rice</label><br>
                <input type="checkbox" name="dinnerItems" value="Tofu and Vegetable Stir-Fry with Quinoa">
                <label for="Tofu and Vegetable Stir-Fry with Quinoa">Tofu and Vegetable Stir-Fry with Quinoa</label><br>
                <input type="checkbox" name="dinnerItems" value="Baked Cod with Roasted Potatoes and Asparagus">
                <label for="Baked Cod with Roasted Potatoes and Asparagus">Baked Cod with Roasted Potatoes and Asparagus</label><br>
                <input type="checkbox" name="dinnerItems" value="Chicken and Vegetable Skewers with Couscous">
                <label for="Chicken and Vegetable Skewers with Couscous">Chicken and Vegetable Skewers with Couscous</label><br>
                <input type="checkbox" name="dinnerItems" value="Shrimp and Vegetable Stir-Fry with Brown Rice">
                <label for="Shrimp and Vegetable Stir-Fry with Brown Rice">Shrimp and Vegetable Stir-Fry with Brown Rice</label><br>
                <input type="checkbox" name="dinnerItems" value="Beef Chili with Kidney Beans and Cornbread">
                <label for="Beef Chili with Kidney Beans and Cornbread">Beef Chili with Kidney Beans and Cornbread</label><br>
                <input type="checkbox" name="dinnerItems" value="Baked Pork Chops with Applesauce and Steamed Carrots">
                <label for="Baked Pork Chops with Applesauce and Steamed Carrots">Baked Pork Chops with Applesauce and Steamed Carrots</label><br>
                <input type="checkbox" name="dinnerItems" value="Eggplant Parmesan with Whole Wheat Pasta">
                <label for="Eggplant Parmesan with Whole Wheat Pasta">Eggplant Parmesan with Whole Wheat Pasta</label><br>
                <input type="checkbox" name="dinnerItems" value="Chicken Enchiladas with Brown Rice and Black Beans">
                <label for="Chicken Enchiladas with Brown Rice and Black Beans">Chicken Enchiladas with Brown Rice and Black Beans</label><br>
                <input type="checkbox" name="dinnerItems" value="Grilled Steak with Baked Sweet Potato and Brussels Sprouts">
                <label for="Grilled Steak with Baked Sweet Potato and Brussels Sprouts">Grilled Steak with Baked Sweet Potato and Brussels Sprouts</label><br>
                <input type="checkbox" name="dinnerItems" value="Vegetarian Lasagna with Spinach and Ricotta">
                <label for="Vegetarian Lasagna with Spinach and Ricotta">Vegetarian Lasagna with Spinach and Ricotta</label><br>
                <input type="checkbox" name="dinnerItems" value="Turkey Burger with Sweet Potato Fries">
                <label for="Turkey Burger with Sweet Potato Fries">Turkey Burger with Sweet Potato Fries</label><br>
                <input type="checkbox" name="dinnerItems" value="Baked Ziti with Ground Turkey and Marinara Sauce">
                <label for="Baked Ziti with Ground Turkey and Marinara Sauce">Baked Ziti with Ground Turkey and Marinara Sauce</label><br>
                <input type="checkbox" name="dinnerItems" value="Teriyaki Tofu with Stir-Fried Vegetables and Rice">
                <label for="Teriyaki Tofu with Stir-Fried Vegetables and Rice">Teriyaki Tofu with Stir-Fried Vegetables and Rice</label><br>
                <input type="checkbox" name="dinnerItems" value="Roast Beef with Mashed Potatoes and Green Peas">
                <label for="Roast Beef with Mashed Potatoes and Green Peas">Roast Beef with Mashed Potatoes and Green Peas</label><br>
                <input type="checkbox" name="dinnerItems" value="Lemon Herb Grilled Chicken with Quinoa Salad">
                <label for="Lemon Herb Grilled Chicken with Quinoa Salad">Lemon Herb Grilled Chicken with Quinoa Salad</label><br>
                <input type="checkbox" name="dinnerItems" value="Fish Tacos with Mango Salsa and Black Beans">
                <label for="Fish Tacos with Mango Salsa and Black Beans">Fish Tacos with Mango Salsa and Black Beans</label><br>
                <input type="checkbox" name="dinnerItems" value="Vegetable and Chickpea Tagine with Couscous">
                <label for="Vegetable and Chickpea Tagine with Couscous">Vegetable and Chickpea Tagine with Couscous</label><br>
                <input type="checkbox" name="dinnerItems" value="Chicken Caesar Salad with Whole Wheat Croutons">
                <label for="Chicken Caesar Salad with Whole Wheat Croutons">Chicken Caesar Salad with Whole Wheat Croutons</label><br>
                <input type="checkbox" name="dinnerItems" value="Beef and Vegetable Kabobs with Brown Rice">
                <label for="Beef and Vegetable Kabobs with Brown Rice">Beef and Vegetable Kabobs with Brown Rice</label><br>
                <input type="checkbox" name="dinnerItems" value="Baked Halibut with Roasted Vegetables and Wild Rice">
                <label for="Baked Halibut with Roasted Vegetables and Wild Rice">Baked Halibut with Roasted Vegetables and Wild Rice</label><br>
                <input type="checkbox" name="dinnerItems" value="Mushroom and Spinach Risotto">
                <label for="Mushroom and Spinach Risotto">Mushroom and Spinach Risotto</label><br>
                <input type="checkbox" name="dinnerItems" value="Turkey and Vegetable Soup with Whole Grain Bread">
                <label for="Turkey and Vegetable Soup with Whole Grain Bread">Turkey and Vegetable Soup with Whole Grain Bread</label><br>
                <input type="checkbox" name="dinnerItems" value="Tofu and Broccoli Stir-Fry with Udon Noodles">
                <label for="Tofu and Broccoli Stir-Fry with Udon Noodles">Tofu and Broccoli Stir-Fry with Udon Noodles</label><br>
                <input type="checkbox" name="dinnerItems" value="Baked Chicken Parmesan with Spaghetti Squash">
                <label for="Baked Chicken Parmesan with Spaghetti Squash">Baked Chicken Parmesan with Spaghetti Squash</label><br>
                <input type="checkbox" name="dinnerItems" value="Beef and Bean Burritos with Spanish Rice">
                <label for="Beef and Bean Burritos with Spanish Rice">Beef and Bean Burritos with Spanish Rice</label><br>
                <input type="checkbox" name="dinnerItems" value="Lemon Garlic Shrimp Pasta with Whole Wheat Linguine">
                <label for="Lemon Garlic Shrimp Pasta with Whole Wheat Linguine">Lemon Garlic Shrimp Pasta with Whole Wheat Linguine</label><br>
                <input type="checkbox" name="dinnerItems" value="Veggie Burger with Avocado and Sweet Potato Wedges">
                <label for="Veggie Burger with Avocado and Sweet Potato Wedges">Veggie Burger with Avocado and Sweet Potato Wedges</label><br>
                <input type="checkbox" name="dinnerItems" value="Shepherd's Pie with Ground Lamb and Mixed Vegetables">
                <label for="Shepherd's Pie with Ground Lamb and Mixed Vegetables">Shepherd's Pie with Ground Lamb and Mixed Vegetables</label><br>
                <input type="checkbox" name="dinnerItems" value="Baked Chicken Thighs with Quinoa Pilaf and Steamed Broccoli">
                <label for="Baked Chicken Thighs with Quinoa Pilaf and Steamed Broccoli">Baked Chicken Thighs with Quinoa Pilaf and Steamed Broccoli</label><br>
                <input type="checkbox" name="dinnerItems" value="Vegetable Paella with Saffron Rice">
                <label for="Vegetable Paella with Saffron Rice">Vegetable Paella with Saffron Rice</label><br>
                <input type="checkbox" name="dinnerItems" value="Turkey and Cranberry Stuffed Acorn Squash">
                <label for="Turkey and Cranberry Stuffed Acorn Squash">Turkey and Cranberry Stuffed Acorn Squash</label><br>
                <input type="checkbox" name="dinnerItems" value="Egg Fried Rice with Mixed Vegetables and Tofu">
                <label for="Egg Fried Rice with Mixed Vegetables and Tofu">Egg Fried Rice with Mixed Vegetables and Tofu</label><br>
                <input type="checkbox" name="dinnerItems" value="BBQ Pulled Pork Sandwiches with Coleslaw">
                <label for="BBQ Pulled Pork Sandwiches with Coleslaw">BBQ Pulled Pork Sandwiches with Coleslaw</label><br>
                <input type="checkbox" name="dinnerItems" value="Baked Teriyaki Salmon with Brown Rice and Stir-Fried Vegetables">
                <label for="Baked Teriyaki Salmon with Brown Rice and Stir-Fried Vegetables">Baked Teriyaki Salmon with Brown Rice and Stir-Fried Vegetables</label><br>
                <input type="checkbox" name="dinnerItems" value="Lentil Soup with Whole Grain Bread">
                <label for="Lentil Soup with Whole Grain Bread">Lentil Soup with Whole Grain Bread</label><br>
                <input type="checkbox" name="dinnerItems" value="Grilled Portobello Mushrooms with Polenta and Roasted Vegetables">
                <label for="Grilled Portobello Mushrooms with Polenta and Roasted Vegetables">Grilled Portobello Mushrooms with Polenta and Roasted Vegetables</label><br>
                <input type="checkbox" name="dinnerItems" value="Chicken and Vegetable Stir-Fry with Lo Mein Noodles">
                <label for="Chicken and Vegetable Stir-Fry with Lo Mein Noodles">Chicken and Vegetable Stir-Fry with Lo Mein Noodles</label><br>
                <input type="checkbox" name="dinnerItems" value="Beef and Barley Stew with Crusty Bread">
                <label for="Beef and Barley Stew with Crusty Bread">Beef and Barley Stew with Crusty Bread</label><br>
                <input type="checkbox" name="dinnerItems" value="Baked Cod with Lemon Butter Sauce and Quinoa Pilaf">
                <label for="Baked Cod with Lemon Butter Sauce and Quinoa Pilaf">Baked Cod with Lemon Butter Sauce and Quinoa Pilaf</label><br>
                <input type="checkbox" name="dinnerItems" value="Vegetable and Bean Chili with Cornbread Muffins">
                <label for="Vegetable and Bean Chili with Cornbread Muffins">Vegetable and Bean Chili with Cornbread Muffins</label><br>
                <input type="checkbox" name="dinnerItems" value="Chicken Alfredo with Whole Wheat Fettuccine">
                <label for="Chicken Alfredo with Whole Wheat Fettuccine">Chicken Alfredo with Whole Wheat Fettuccine</label><br>
                <input type="checkbox" name="dinnerItems" value="Baked Tofu with Maple Glaze and Roasted Brussels Sprouts">
                <label for="Baked Tofu with Maple Glaze and Roasted Brussels Sprouts">Baked Tofu with Maple Glaze and Roasted Brussels Sprouts</label><br>
                <input type="checkbox" name="dinnerItems" value="Beef and Broccoli with Brown Rice">
                <label for="Beef and Broccoli with Brown Rice">Beef and Broccoli with Brown Rice</label><br>
            </div>
        </div>
    </div>
    <button onclick="validateSelection()">Submit</button>

    <script>
        function addOptionToList(selectId, targetDivId) {
            var select = document.getElementById(selectId);
            var selectedOptions = select.selectedOptions;
            var targetDiv = document.getElementById(targetDivId);
            
            targetDiv.innerHTML = ''; // Clear previous selections
            
            for (var i = 0; i < selectedOptions.length; i++) {
                var optionText = selectedOptions[i].text;
                var checkbox = document.createElement('input');
                checkbox.type = 'checkbox';
                checkbox.value = optionText;
                checkbox.checked = true;
                checkbox.disabled = true;
                var label = document.createElement('label');
                label.appendChild(checkbox);
                label.appendChild(document.createTextNode(optionText));
                label.className = 'item';
                targetDiv.appendChild(label);
            }
        }

        function validateSelection() {
            var breakfastSelected = document.getElementById("breakfastItems").selectedOptions.length;
            var lunchSelected = document.getElementById("lunchItems").selectedOptions.length;
            var dinnerSelected = document.getElementById("dinnerItems").selectedOptions.length;

            if (breakfastSelected >= 6 && lunchSelected >= 6 && dinnerSelected >= 6) {
                // At least 6 items are selected from each column
                // Proceed with form submission or other actions
                alert("Selection is valid. Proceed with form submission.");
            } else {
                // Not enough items selected from each column
                alert("Please select at least 6 items from each column.");
            }
        }

        // Listen for change events on select elements and update the respective lists
        document.getElementById("breakfastItems").addEventListener("change", function() {
            addOptionToList("breakfast", "breakfastItems");
        });
        document.getElementById("lunchItems").addEventListener("change", function() {
            addOptionToList("lunch", "lunchItems");
        });
        document.getElementById("dinnerItems").addEventListener("change", function() {
            addOptionToList("dinner", "dinnerItems");
        });
    </script>
</body>
</html>
