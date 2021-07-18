<?php 
    $menuObject = wp_get_nav_menu_object(get_nav_menu_locations()['main_menu']);
    $menuItems = wp_get_nav_menu_items($menuObject);
    $menu = array();
    
    foreach ($menuItems as $key => $value) {
        array_push($menu, (object) [
            'title' => $value->title,
            'url' => $value->url
        ]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css" integrity="sha512-apX8rFN/KxJW8rniQbkvzrshQ3KvyEH+4szT3Sno5svdr6E/CP0QE862yEeLBMUnCqLko8QaugGkzvWS7uNfFQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Curso PHP</title>
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    <header class="fullwidth header">
        <div class="container h-flex">
            <div class="logo">
                <a href="<?php echo $menu[0]->url?>"><i class="fab fa-wordpress"></i></a>
            </div>

            <div class="menu">
                <?php 
                    if(count($menu) > 0){
                        foreach ($menu as $key => $value) {
                            ?>
                                <a href="<?php echo $value->url?>"><?php echo $value->title ?></a>
                            <?php
                        }
                    }
                    
                ?>
            </div>
        </div>
    </header>