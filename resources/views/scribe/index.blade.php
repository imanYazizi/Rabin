<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>rabin pizza Docs</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "https://rabin.karo.studio";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.26.0.js") }}"></script>

    <script src="{{ asset("vendor/scribe/js/theme-default-3.26.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="addresses">
                    <a href="#addresses">Addresses</a>
                </li>
                                    <ul id="tocify-subheader-addresses" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="addresses-GETapi-address">
                        <a href="#addresses-GETapi-address">Show All Addresses</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="addresses-POSTapi-address">
                        <a href="#addresses-POSTapi-address">Create Address</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="addresses-GETapi-address--id-">
                        <a href="#addresses-GETapi-address--id-">Show One Address</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="addresses-PUTapi-address--id-">
                        <a href="#addresses-PUTapi-address--id-">Edit One Address</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="addresses-DELETEapi-address--id-">
                        <a href="#addresses-DELETEapi-address--id-">Delete One Address</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-3" class="tocify-header">
                <li class="tocify-item level-1" data-unique="cart">
                    <a href="#cart">Cart</a>
                </li>
                                    <ul id="tocify-subheader-cart" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="cart-POSTapi-cart">
                        <a href="#cart-POSTapi-cart">Create One Cart</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-4" class="tocify-header">
                <li class="tocify-item level-1" data-unique="favorite">
                    <a href="#favorite">Favorite</a>
                </li>
                                    <ul id="tocify-subheader-favorite" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="favorite-GETapi-favorite">
                        <a href="#favorite-GETapi-favorite">Show All Favorites</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="favorite-POSTapi-favorite">
                        <a href="#favorite-POSTapi-favorite">Favorite An Item</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="favorite-DELETEapi-favorite--id-">
                        <a href="#favorite-DELETEapi-favorite--id-">Unfavorite An Item</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-5" class="tocify-header">
                <li class="tocify-item level-1" data-unique="landing">
                    <a href="#landing">Landing</a>
                </li>
                                    <ul id="tocify-subheader-landing" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="landing-GETapi-panel-landing">
                        <a href="#landing-GETapi-panel-landing">Show All landings</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="landing-POSTapi-panel-landing">
                        <a href="#landing-POSTapi-panel-landing">create one landing</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="landing-GETapi-panel-landing--id-">
                        <a href="#landing-GETapi-panel-landing--id-">show one landing</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="landing-PUTapi-panel-landing--id-">
                        <a href="#landing-PUTapi-panel-landing--id-">edit one landing</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="landing-DELETEapi-panel-landing--id-">
                        <a href="#landing-DELETEapi-panel-landing--id-">delete one landing</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-6" class="tocify-header">
                <li class="tocify-item level-1" data-unique="menu">
                    <a href="#menu">Menu</a>
                </li>
                                    <ul id="tocify-subheader-menu" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="menu-GETapi-menu">
                        <a href="#menu-GETapi-menu">Show all foods in the menu</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="menu-GETapi-menu--id-">
                        <a href="#menu-GETapi-menu--id-">Show one menu item</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="menu-GETapi-special_items">
                        <a href="#menu-GETapi-special_items">Show all special items</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-7" class="tocify-header">
                <li class="tocify-item level-1" data-unique="menu-category">
                    <a href="#menu-category">Menu category</a>
                </li>
                                    <ul id="tocify-subheader-menu-category" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="menu-category-GETapi-menu_category">
                        <a href="#menu-category-GETapi-menu_category">Show All Menu&#039;s Category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="menu-category-GETapi-menu_category--id-">
                        <a href="#menu-category-GETapi-menu_category--id-">Show foods of a category in the menu</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-8" class="tocify-header">
                <li class="tocify-item level-1" data-unique="order">
                    <a href="#order">Order</a>
                </li>
                                    <ul id="tocify-subheader-order" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="order-GETapi-active_order">
                        <a href="#order-GETapi-active_order">Cart</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="order-GETapi-order">
                        <a href="#order-GETapi-order">Order History</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="order-POSTapi-order">
                        <a href="#order-POSTapi-order">Add address to cart</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-9" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-all-users">
                    <a href="#panel-all-users">Panel All Users</a>
                </li>
                                    <ul id="tocify-subheader-panel-all-users" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-all-users-GETapi-panel-users">
                        <a href="#panel-all-users-GETapi-panel-users">Show Users And Admins</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-10" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-content">
                    <a href="#panel-content">Panel Content</a>
                </li>
                                    <ul id="tocify-subheader-panel-content" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-content-GETapi-panel-content">
                        <a href="#panel-content-GETapi-panel-content">Show all content</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-content-POSTapi-panel-content">
                        <a href="#panel-content-POSTapi-panel-content">create one content</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-content-GETapi-panel-content--id-">
                        <a href="#panel-content-GETapi-panel-content--id-">Show one content</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-content-PUTapi-panel-content--id-">
                        <a href="#panel-content-PUTapi-panel-content--id-">edit one content</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-content-DELETEapi-panel-content--id-">
                        <a href="#panel-content-DELETEapi-panel-content--id-">delete one content</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-11" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-country">
                    <a href="#panel-country">Panel Country</a>
                </li>
                                    <ul id="tocify-subheader-panel-country" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-country-GETapi-all_country">
                        <a href="#panel-country-GETapi-all_country">Show All Countries</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-country-POSTapi-panel-country">
                        <a href="#panel-country-POSTapi-panel-country">Create One Country</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-12" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-ingredient">
                    <a href="#panel-ingredient">Panel Ingredient</a>
                </li>
                                    <ul id="tocify-subheader-panel-ingredient" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-ingredient-GETapi-panel-ingredient">
                        <a href="#panel-ingredient-GETapi-panel-ingredient">Show all ingredients</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-ingredient-POSTapi-panel-ingredient">
                        <a href="#panel-ingredient-POSTapi-panel-ingredient">Create one ingredient</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-ingredient-GETapi-panel-ingredient--id-">
                        <a href="#panel-ingredient-GETapi-panel-ingredient--id-">Show one ingredient</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-ingredient-PUTapi-panel-ingredient--id-">
                        <a href="#panel-ingredient-PUTapi-panel-ingredient--id-">Edit one ingredient</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-ingredient-DELETEapi-panel-ingredient--id-">
                        <a href="#panel-ingredient-DELETEapi-panel-ingredient--id-">Delete one ingredient</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-ingredient-POSTapi-panel-item_ingredient">
                        <a href="#panel-ingredient-POSTapi-panel-item_ingredient">add one ingredient to men item</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-13" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-ingredient-category">
                    <a href="#panel-ingredient-category">Panel Ingredient Category</a>
                </li>
                                    <ul id="tocify-subheader-panel-ingredient-category" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-ingredient-category-GETapi-panel-ingredient_category">
                        <a href="#panel-ingredient-category-GETapi-panel-ingredient_category">Show All ingredient&#039;s Category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-ingredient-category-POSTapi-panel-ingredient_category">
                        <a href="#panel-ingredient-category-POSTapi-panel-ingredient_category">Create ingredient category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-ingredient-category-GETapi-panel-ingredient_category--id-">
                        <a href="#panel-ingredient-category-GETapi-panel-ingredient_category--id-">Show one ingredient&#039;s category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-ingredient-category-PUTapi-panel-ingredient_category--id-">
                        <a href="#panel-ingredient-category-PUTapi-panel-ingredient_category--id-">Edit ingredient&#039;s category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-ingredient-category-DELETEapi-panel-ingredient_category--id-">
                        <a href="#panel-ingredient-category-DELETEapi-panel-ingredient_category--id-">Delete ingredient&#039;s category</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-14" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-menu">
                    <a href="#panel-menu">Panel Menu</a>
                </li>
                                    <ul id="tocify-subheader-panel-menu" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-menu-GETapi-panel-menus">
                        <a href="#panel-menu-GETapi-panel-menus">Show All Menu</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-menu-POSTapi-panel-menus">
                        <a href="#panel-menu-POSTapi-panel-menus">Create one menu</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-menu-GETapi-panel-menus--id-">
                        <a href="#panel-menu-GETapi-panel-menus--id-">Show one menu item</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-menu-PUTapi-panel-menus--id-">
                        <a href="#panel-menu-PUTapi-panel-menus--id-">Edit menu item</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-menu-DELETEapi-panel-menus--id-">
                        <a href="#panel-menu-DELETEapi-panel-menus--id-">Delete one menu item</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-15" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-menu-category">
                    <a href="#panel-menu-category">Panel Menu Category</a>
                </li>
                                    <ul id="tocify-subheader-panel-menu-category" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-menu-category-GETapi-panel-menu_category">
                        <a href="#panel-menu-category-GETapi-panel-menu_category">Show All Menu&#039;s Category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-menu-category-POSTapi-panel-menu_category">
                        <a href="#panel-menu-category-POSTapi-panel-menu_category">Create menu category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-menu-category-GETapi-panel-menu_category--id-">
                        <a href="#panel-menu-category-GETapi-panel-menu_category--id-">Show one menu&#039;s category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-menu-category-PUTapi-panel-menu_category--id-">
                        <a href="#panel-menu-category-PUTapi-panel-menu_category--id-">Edit menu&#039;s category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-menu-category-DELETEapi-panel-menu_category--id-">
                        <a href="#panel-menu-category-DELETEapi-panel-menu_category--id-">Delete menu&#039;s category</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-16" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-selfmade">
                    <a href="#panel-selfmade">Panel Selfmade</a>
                </li>
                                    <ul id="tocify-subheader-panel-selfmade" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-selfmade-GETapi-panel-selfmades">
                        <a href="#panel-selfmade-GETapi-panel-selfmades">Show All selfmades</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-selfmade-POSTapi-panel-selfmades">
                        <a href="#panel-selfmade-POSTapi-panel-selfmades">Create one selfmade</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-selfmade-GETapi-panel-selfmades--id-">
                        <a href="#panel-selfmade-GETapi-panel-selfmades--id-">Show one self made</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-selfmade-PUTapi-panel-selfmades--id-">
                        <a href="#panel-selfmade-PUTapi-panel-selfmades--id-">Edit self made</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-selfmade-DELETEapi-panel-selfmades--id-">
                        <a href="#panel-selfmade-DELETEapi-panel-selfmades--id-">Delete one self made</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-17" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-selfmade-category">
                    <a href="#panel-selfmade-category">Panel Selfmade Category</a>
                </li>
                                    <ul id="tocify-subheader-panel-selfmade-category" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-selfmade-category-GETapi-panel-selfmade_category">
                        <a href="#panel-selfmade-category-GETapi-panel-selfmade_category">Show All Selfmade&#039;s Category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-selfmade-category-POSTapi-panel-selfmade_category">
                        <a href="#panel-selfmade-category-POSTapi-panel-selfmade_category">Create selfmade category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-selfmade-category-GETapi-panel-selfmade_category--id-">
                        <a href="#panel-selfmade-category-GETapi-panel-selfmade_category--id-">Show one selfmade&#039;s category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-selfmade-category-PUTapi-panel-selfmade_category--id-">
                        <a href="#panel-selfmade-category-PUTapi-panel-selfmade_category--id-">Edit selfmade&#039;s category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-selfmade-category-DELETEapi-panel-selfmade_category--id-">
                        <a href="#panel-selfmade-category-DELETEapi-panel-selfmade_category--id-">Delete selfmade&#039;s category</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-18" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-users">
                    <a href="#panel-users">Panel Users</a>
                </li>
                                    <ul id="tocify-subheader-panel-users" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-users-GETapi-panel-client">
                        <a href="#panel-users-GETapi-panel-client">Show All Users</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-users-POSTapi-panel-client">
                        <a href="#panel-users-POSTapi-panel-client">Create User</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-users-GETapi-panel-client--id-">
                        <a href="#panel-users-GETapi-panel-client--id-">Show one user</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-users-PUTapi-panel-client--id-">
                        <a href="#panel-users-PUTapi-panel-client--id-">Edit User</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-users-DELETEapi-panel-client--id-">
                        <a href="#panel-users-DELETEapi-panel-client--id-">Delete one user</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-19" class="tocify-header">
                <li class="tocify-item level-1" data-unique="password">
                    <a href="#password">Password</a>
                </li>
                                    <ul id="tocify-subheader-password" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="password-POSTapi-change_password--reset_link-">
                        <a href="#password-POSTapi-change_password--reset_link-">Change Password</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="password-POSTapi-forget_password">
                        <a href="#password-POSTapi-forget_password">Forget password</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="password-POSTapi-current_password">
                        <a href="#password-POSTapi-current_password">Current password</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-20" class="tocify-header">
                <li class="tocify-item level-1" data-unique="pizza-selfmade">
                    <a href="#pizza-selfmade">Pizza (selfmade)</a>
                </li>
                                    <ul id="tocify-subheader-pizza-selfmade" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="pizza-selfmade-GETapi-pizza">
                        <a href="#pizza-selfmade-GETapi-pizza">Show All pizzas</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="pizza-selfmade-POSTapi-pizza">
                        <a href="#pizza-selfmade-POSTapi-pizza">Create selfmade pizza</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="pizza-selfmade-GETapi-pizza--id-">
                        <a href="#pizza-selfmade-GETapi-pizza--id-">Show One selfmade pizza</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="pizza-selfmade-DELETEapi-pizza--id-">
                        <a href="#pizza-selfmade-DELETEapi-pizza--id-">Delete One selfmade pizza</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-21" class="tocify-header">
                <li class="tocify-item level-1" data-unique="self-made">
                    <a href="#self-made">Self made</a>
                </li>
                                    <ul id="tocify-subheader-self-made" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="self-made-GETapi-selfmade">
                        <a href="#self-made-GETapi-selfmade">Show all self made&#039;s categoty</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="self-made-GETapi-selfmade--id-">
                        <a href="#self-made-GETapi-selfmade--id-">Show self mades of a category</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-22" class="tocify-header">
                <li class="tocify-item level-1" data-unique="users">
                    <a href="#users">Users</a>
                </li>
                                    <ul id="tocify-subheader-users" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="users-POSTapi-login">
                        <a href="#users-POSTapi-login">Login</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="users-POSTapi-register">
                        <a href="#users-POSTapi-register">Register</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="users-POSTapi-edit_user">
                        <a href="#users-POSTapi-edit_user">Edit User</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-23" class="tocify-header">
                <li class="tocify-item level-1" data-unique="verify">
                    <a href="#verify">Verify</a>
                </li>
                                    <ul id="tocify-subheader-verify" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="verify-GETapi-verify_email--code-">
                        <a href="#verify-GETapi-verify_email--code-">Verify email</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="verify-POSTapi-verify_phone">
                        <a href="#verify-POSTapi-verify_phone">Verify Phone</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-24" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-admin">
                    <a href="#panel-admin">panel Admin</a>
                </li>
                                    <ul id="tocify-subheader-panel-admin" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-admin-POSTapi-admin-login">
                        <a href="#panel-admin-POSTapi-admin-login">Login Admin</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-admin-GETapi-panel-admin">
                        <a href="#panel-admin-GETapi-panel-admin">Show All Admins</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-admin-POSTapi-panel-admin">
                        <a href="#panel-admin-POSTapi-panel-admin">create one admin</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-admin-GETapi-panel-admin--id-">
                        <a href="#panel-admin-GETapi-panel-admin--id-">Show one admin</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-admin-PUTapi-panel-admin--id-">
                        <a href="#panel-admin-PUTapi-panel-admin--id-">Edit Admin</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-admin-DELETEapi-panel-admin--id-">
                        <a href="#panel-admin-DELETEapi-panel-admin--id-">Delete Admin</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-25" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-orders">
                    <a href="#panel-orders">panel Orders</a>
                </li>
                                    <ul id="tocify-subheader-panel-orders" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-orders-GETapi-panel-orders">
                        <a href="#panel-orders-GETapi-panel-orders">Show All Orders</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-orders-GETapi-panel-orders--id-">
                        <a href="#panel-orders-GETapi-panel-orders--id-">Show one order</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="panel-orders-PUTapi-panel-orders--id-">
                        <a href="#panel-orders-PUTapi-panel-orders--id-">Change order status</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-26" class="tocify-header">
                <li class="tocify-item level-1" data-unique="panel-sell">
                    <a href="#panel-sell">panel Sell</a>
                </li>
                                    <ul id="tocify-subheader-panel-sell" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="panel-sell-GETapi-panel-sell">
                        <a href="#panel-sell-GETapi-panel-sell">Sell</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 7 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">https://rabin.karo.studio</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>Authenticate requests to this API's endpoints by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="addresses">Addresses</h1>

    <p>APIs for user's addresses</p>

            <h2 id="addresses-GETapi-address">Show All Addresses</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint shows all addresses of specific user</p>

<span id="example-requests-GETapi-address">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/address" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/address"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-address">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 3,
        &quot;client_id&quot;: 2,
        &quot;title&quot;: &quot;Home&quot;,
        &quot;address&quot;: &quot;USA , LA&quot;,
        &quot;lat_lng&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;client_id&quot;: 2,
        &quot;title&quot;: &quot;Office &quot;,
        &quot;address&quot;: &quot;Germany , Hamburg&quot;,
        &quot;lat_lng&quot;: &quot;&quot;
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-address" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-address"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-address"></code></pre>
</span>
<span id="execution-error-GETapi-address" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-address"></code></pre>
</span>
<form id="form-GETapi-address" data-method="GET"
      data-path="api/address"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-address', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-address"
                    onclick="tryItOut('GETapi-address');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-address"
                    onclick="cancelTryOut('GETapi-address');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-address" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/address</code></b>
        </p>
                <p>
            <label id="auth-GETapi-address" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-address"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="addresses-POSTapi-address">Create Address</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint creates address of specific user</p>

<span id="example-requests-POSTapi-address">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/address" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"address\": \"eius\",
    \"lat_lng\": \"et\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/address"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "address": "eius",
    "lat_lng": "et"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-address">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 3,
    &quot;client_id&quot;: 2,
    &quot;title&quot;: &quot;Home&quot;,
    &quot;address&quot;: &quot;USA , LA&quot;,
    &quot;lat_lng&quot;: &quot;&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-address" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-address"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-address"></code></pre>
</span>
<span id="execution-error-POSTapi-address" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-address"></code></pre>
</span>
<form id="form-POSTapi-address" data-method="POST"
      data-path="api/address"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-address', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-address"
                    onclick="tryItOut('POSTapi-address');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-address"
                    onclick="cancelTryOut('POSTapi-address');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-address" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/address</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-address" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-address"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="address"
               data-endpoint="POSTapi-address"
               value="eius"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-address"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>lat_lng</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="lat_lng"
               data-endpoint="POSTapi-address"
               value="et"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="addresses-GETapi-address--id-">Show One Address</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint shows one address</p>
<aside class="success">Send address's id</aside>

<span id="example-requests-GETapi-address--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/address/6" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/address/6"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-address--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 3,
    &quot;client_id&quot;: 2,
    &quot;title&quot;: &quot;Home&quot;,
    &quot;address&quot;: &quot;USA , LA&quot;,
    &quot;lat_lng&quot;: &quot;&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-address--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-address--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-address--id-"></code></pre>
</span>
<span id="execution-error-GETapi-address--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-address--id-"></code></pre>
</span>
<form id="form-GETapi-address--id-" data-method="GET"
      data-path="api/address/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-address--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-address--id-"
                    onclick="tryItOut('GETapi-address--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-address--id-"
                    onclick="cancelTryOut('GETapi-address--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-address--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/address/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-address--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-address--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-address--id-"
               value="6"
               data-component="url" hidden>
    <br>
<p>The ID of the address.</p>
            </p>
                    </form>

            <h2 id="addresses-PUTapi-address--id-">Edit One Address</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint edits one address</p>
<aside class="success">please send all items </aside>

<span id="example-requests-PUTapi-address--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://rabin.karo.studio/api/address/8" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/address/8"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-address--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 3,
    &quot;client_id&quot;: 2,
    &quot;title&quot;: &quot;Home&quot;,
    &quot;address&quot;: &quot;USA , LA&quot;,
    &quot;lat_lng&quot;: &quot;&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-address--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-address--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-address--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-address--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-address--id-"></code></pre>
</span>
<form id="form-PUTapi-address--id-" data-method="PUT"
      data-path="api/address/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-address--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-address--id-"
                    onclick="tryItOut('PUTapi-address--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-address--id-"
                    onclick="cancelTryOut('PUTapi-address--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-address--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/address/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/address/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-address--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-address--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-address--id-"
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the address.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="address"
               data-endpoint="PUTapi-address--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="title"
               data-endpoint="PUTapi-address--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>lat_lng</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="lat_lng"
               data-endpoint="PUTapi-address--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="addresses-DELETEapi-address--id-">Delete One Address</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint edits one address</p>
<aside class="success">Send me the address's id</aside>

<span id="example-requests-DELETEapi-address--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/address/11" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/address/11"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-address--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;address deleted successfully&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-address--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-address--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-address--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-address--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-address--id-"></code></pre>
</span>
<form id="form-DELETEapi-address--id-" data-method="DELETE"
      data-path="api/address/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-address--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-address--id-"
                    onclick="tryItOut('DELETEapi-address--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-address--id-"
                    onclick="cancelTryOut('DELETEapi-address--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-address--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/address/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-address--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-address--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-address--id-"
               value="11"
               data-component="url" hidden>
    <br>
<p>The ID of the address.</p>
            </p>
                    </form>

        <h1 id="cart">Cart</h1>

    <p>APIs for managing carts</p>

            <h2 id="cart-POSTapi-cart">Create One Cart</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint creates one cart</p>
<aside class="success">pizza_id = selfmade & item_id = Menu Item</aside>

<span id="example-requests-POSTapi-cart">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/cart" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"count\": 8
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/cart"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "count": 8
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-cart">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;client_id&quot;: 2,
    &quot;is_pay&quot;: false,
    &quot;total_price&quot;: 180,
    &quot;status&quot;: &quot;pending&quot;,
    &quot;address&quot;: null,
    &quot;carts&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;item_id&quot;: {
                &quot;id&quot;: 1,
                &quot;item_category_id&quot;: 1,
                &quot;image&quot;: &quot;&quot;,
                &quot;available&quot;: 1,
                &quot;name&quot;: &quot;peperroni&quot;,
                &quot;price&quot;: &quot;25&quot;,
                &quot;description&quot;: &quot;so good&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null
            },
            &quot;is_menu&quot;: true,
            &quot;count&quot;: 6,
            &quot;amount&quot;: 150
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected pizza id is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;pizza_id&quot;: [
            &quot;The selected pizza id is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-cart" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-cart"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cart"></code></pre>
</span>
<span id="execution-error-POSTapi-cart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cart"></code></pre>
</span>
<form id="form-POSTapi-cart" data-method="POST"
      data-path="api/cart"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-cart', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-cart"
                    onclick="tryItOut('POSTapi-cart');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-cart"
                    onclick="cancelTryOut('POSTapi-cart');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-cart" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/cart</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-cart" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-cart"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>count</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="count"
               data-endpoint="POSTapi-cart"
               value="8"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>pizza_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="pizza_id"
               data-endpoint="POSTapi-cart"
               value=""
               data-component="body" hidden>
    <br>
<p>This field is required when none of <code>item_id</code> are present.</p>
        </p>
                <p>
            <b><code>item_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="item_id"
               data-endpoint="POSTapi-cart"
               value=""
               data-component="body" hidden>
    <br>
<p>This field is required when none of <code>pizza_id</code> are present.</p>
        </p>
        </form>

        <h1 id="favorite">Favorite</h1>

    <p>APIs for Favorite</p>

            <h2 id="favorite-GETapi-favorite">Show All Favorites</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint shows all of the items that is favorite</p>

<span id="example-requests-GETapi-favorite">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/favorite" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/favorite"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-favorite">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;is_menu&quot;: true,
        &quot;item_id&quot;: {
            &quot;id&quot;: 2,
            &quot;item_category_id&quot;: 1,
            &quot;image&quot;: &quot;mknjbh&quot;,
            &quot;available&quot;: 1,
            &quot;name&quot;: &quot;peperoni&quot;,
            &quot;price&quot;: &quot;5&quot;,
            &quot;description&quot;: &quot;;.&#039;lkjihugjhg&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        }
    },
    {
        &quot;id&quot;: 2,
        &quot;is_menu&quot;: true,
        &quot;item_id&quot;: {
            &quot;id&quot;: 2,
            &quot;item_category_id&quot;: 1,
            &quot;image&quot;: &quot;mknjbh&quot;,
            &quot;available&quot;: 1,
            &quot;name&quot;: &quot;peperoni&quot;,
            &quot;price&quot;: &quot;5&quot;,
            &quot;description&quot;: &quot;;.&#039;lkjihugjhg&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        }
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-favorite" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-favorite"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-favorite"></code></pre>
</span>
<span id="execution-error-GETapi-favorite" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-favorite"></code></pre>
</span>
<form id="form-GETapi-favorite" data-method="GET"
      data-path="api/favorite"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-favorite', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-favorite"
                    onclick="tryItOut('GETapi-favorite');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-favorite"
                    onclick="cancelTryOut('GETapi-favorite');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-favorite" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/favorite</code></b>
        </p>
                <p>
            <label id="auth-GETapi-favorite" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-favorite"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="favorite-POSTapi-favorite">Favorite An Item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint favorites an item (Menu item or selfmade pizza)</p>
<aside class="success">for selfmade send pizza_id
an if it's menu item send item_id</aside>

<span id="example-requests-POSTapi-favorite">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/favorite" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/favorite"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-favorite">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;is_menu&quot;: true,
    &quot;item_id&quot;: {
        &quot;id&quot;: 2,
        &quot;item_category_id&quot;: 1,
        &quot;image&quot;: &quot;mknjbh&quot;,
        &quot;available&quot;: 1,
        &quot;name&quot;: &quot;peperoni&quot;,
        &quot;price&quot;: &quot;5&quot;,
        &quot;description&quot;: &quot;;.&#039;lkjihugjhg&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The pizza id field is required when none of item id are present. (and 1 more error)&quot;,
    &quot;errors&quot;: {
        &quot;pizza_id&quot;: [
            &quot;The pizza id field is required when none of item id are present.&quot;
        ],
        &quot;item_id&quot;: [
            &quot;The item id field is required when none of pizza id are present.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-favorite" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-favorite"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-favorite"></code></pre>
</span>
<span id="execution-error-POSTapi-favorite" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-favorite"></code></pre>
</span>
<form id="form-POSTapi-favorite" data-method="POST"
      data-path="api/favorite"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-favorite', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-favorite"
                    onclick="tryItOut('POSTapi-favorite');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-favorite"
                    onclick="cancelTryOut('POSTapi-favorite');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-favorite" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/favorite</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-favorite" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-favorite"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>pizza_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="pizza_id"
               data-endpoint="POSTapi-favorite"
               value=""
               data-component="body" hidden>
    <br>
<p>This field is required when none of <code>item_id</code> are present.</p>
        </p>
                <p>
            <b><code>item_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="item_id"
               data-endpoint="POSTapi-favorite"
               value=""
               data-component="body" hidden>
    <br>
<p>This field is required when none of <code>pizza_id</code> are present.</p>
        </p>
        </form>

            <h2 id="favorite-DELETEapi-favorite--id-">Unfavorite An Item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint unfavorites an item (send favorite's id)</p>

<span id="example-requests-DELETEapi-favorite--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/favorite/4" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/favorite/4"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-favorite--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;item unfavorited successfully&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-favorite--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-favorite--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-favorite--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-favorite--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-favorite--id-"></code></pre>
</span>
<form id="form-DELETEapi-favorite--id-" data-method="DELETE"
      data-path="api/favorite/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-favorite--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-favorite--id-"
                    onclick="tryItOut('DELETEapi-favorite--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-favorite--id-"
                    onclick="cancelTryOut('DELETEapi-favorite--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-favorite--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/favorite/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-favorite--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-favorite--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-favorite--id-"
               value="4"
               data-component="url" hidden>
    <br>
<p>The ID of the favorite.</p>
            </p>
                    </form>

        <h1 id="landing">Landing</h1>

    

            <h2 id="landing-GETapi-panel-landing">Show All landings</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-landing">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/landing" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/landing"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-landing">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 3,
        &quot;type&quot;: &quot;text&quot;,
        &quot;key&quot;: &quot;about_title&quot;,
        &quot;value&quot;: &quot;about us&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;type&quot;: &quot;text&quot;,
        &quot;key&quot;: &quot;about_title&quot;,
        &quot;value&quot;: &quot;about us&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-landing" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-landing"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-landing"></code></pre>
</span>
<span id="execution-error-GETapi-panel-landing" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-landing"></code></pre>
</span>
<form id="form-GETapi-panel-landing" data-method="GET"
      data-path="api/panel/landing"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-landing', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-landing"
                    onclick="tryItOut('GETapi-panel-landing');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-landing"
                    onclick="cancelTryOut('GETapi-panel-landing');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-landing" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/landing</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-landing" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-landing"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="landing-POSTapi-panel-landing">create one landing</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-panel-landing">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/panel/landing" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"key\": \"ex\",
    \"type\": \"text\",
    \"value\": \"minima\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/landing"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "key": "ex",
    "type": "text",
    "value": "minima"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-panel-landing">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 3,
    &quot;type&quot;: &quot;text&quot;,
    &quot;key&quot;: &quot;about_title&quot;,
    &quot;value&quot;: &quot;about us&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-panel-landing" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-panel-landing"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-panel-landing"></code></pre>
</span>
<span id="execution-error-POSTapi-panel-landing" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-panel-landing"></code></pre>
</span>
<form id="form-POSTapi-panel-landing" data-method="POST"
      data-path="api/panel/landing"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-panel-landing', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-panel-landing"
                    onclick="tryItOut('POSTapi-panel-landing');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-panel-landing"
                    onclick="cancelTryOut('POSTapi-panel-landing');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-panel-landing" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/panel/landing</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-panel-landing" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-panel-landing"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>content_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="content_id"
               data-endpoint="POSTapi-panel-landing"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="key"
               data-endpoint="POSTapi-panel-landing"
               value="ex"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="type"
               data-endpoint="POSTapi-panel-landing"
               value="text"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>image</code> or <code>text</code>.</p>
        </p>
                <p>
            <b><code>value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="value"
               data-endpoint="POSTapi-panel-landing"
               value="minima"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="landing-GETapi-panel-landing--id-">show one landing</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-landing--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/landing/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/landing/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-landing--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 3,
    &quot;type&quot;: &quot;text&quot;,
    &quot;key&quot;: &quot;about_title&quot;,
    &quot;value&quot;: &quot;about us&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-landing--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-landing--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-landing--id-"></code></pre>
</span>
<span id="execution-error-GETapi-panel-landing--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-landing--id-"></code></pre>
</span>
<form id="form-GETapi-panel-landing--id-" data-method="GET"
      data-path="api/panel/landing/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-landing--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-landing--id-"
                    onclick="tryItOut('GETapi-panel-landing--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-landing--id-"
                    onclick="cancelTryOut('GETapi-panel-landing--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-landing--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/landing/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-landing--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-landing--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-panel-landing--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the landing.</p>
            </p>
                    </form>

            <h2 id="landing-PUTapi-panel-landing--id-">edit one landing</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>@response scenario=success
{
&quot;id&quot;: 3,
&quot;type&quot;: &quot;text&quot;,
&quot;key&quot;: &quot;about_title&quot;,
&quot;value&quot;: &quot;about us&quot;
}</p>

<span id="example-requests-PUTapi-panel-landing--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://rabin.karo.studio/api/panel/landing/13" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/landing/13"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-panel-landing--id-">
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-panel-landing--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-panel-landing--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-panel-landing--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-panel-landing--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-panel-landing--id-"></code></pre>
</span>
<form id="form-PUTapi-panel-landing--id-" data-method="PUT"
      data-path="api/panel/landing/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-panel-landing--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-panel-landing--id-"
                    onclick="tryItOut('PUTapi-panel-landing--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-panel-landing--id-"
                    onclick="cancelTryOut('PUTapi-panel-landing--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-panel-landing--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/panel/landing/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/panel/landing/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-panel-landing--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-panel-landing--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-panel-landing--id-"
               value="13"
               data-component="url" hidden>
    <br>
<p>The ID of the landing.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>key</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="key"
               data-endpoint="PUTapi-panel-landing--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>value</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="value"
               data-endpoint="PUTapi-panel-landing--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="landing-DELETEapi-panel-landing--id-">delete one landing</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>@response scenario=success {&quot;message&quot; : &quot;landing deleted successfully&quot;}</p>

<span id="example-requests-DELETEapi-panel-landing--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/panel/landing/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/landing/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-panel-landing--id-">
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-panel-landing--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-panel-landing--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-panel-landing--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-panel-landing--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-panel-landing--id-"></code></pre>
</span>
<form id="form-DELETEapi-panel-landing--id-" data-method="DELETE"
      data-path="api/panel/landing/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-panel-landing--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-panel-landing--id-"
                    onclick="tryItOut('DELETEapi-panel-landing--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-panel-landing--id-"
                    onclick="cancelTryOut('DELETEapi-panel-landing--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-panel-landing--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/panel/landing/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-panel-landing--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-panel-landing--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-panel-landing--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the landing.</p>
            </p>
                    </form>

        <h1 id="menu">Menu</h1>

    <p>APIs for Menu</p>

            <h2 id="menu-GETapi-menu">Show all foods in the menu</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint Sends you all foods.</p>

<span id="example-requests-GETapi-menu">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/menu" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/menu"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-menu">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
{
&quot;id&quot;: 2,
&quot;category&quot;: &quot;pizza&quot;,
&quot;image&quot;: &quot;http://127.0.0.1:8000/storage/mknjbh&quot;,
&quot;available&quot;: true,
&quot;name&quot;: &quot;peperoni&quot;,
&quot;price&quot;: &quot;5&quot;,
&quot;description&quot;: &quot;very delicious&quot;
},
{
&quot;id&quot;: 3,
&quot;category&quot;: &quot;hamburger&quot;,
&quot;image&quot;: &quot;http://127.0.0.1:8000/storage/AS&quot;,
&quot;available&quot;: true,
&quot;name&quot;: &quot;cheeseburger&quot;,
&quot;price&quot;: &quot;6&quot;,
&quot;description&quot;: &quot;delicious&quot;
},
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-menu" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-menu"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-menu"></code></pre>
</span>
<span id="execution-error-GETapi-menu" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-menu"></code></pre>
</span>
<form id="form-GETapi-menu" data-method="GET"
      data-path="api/menu"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-menu', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-menu"
                    onclick="tryItOut('GETapi-menu');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-menu"
                    onclick="cancelTryOut('GETapi-menu');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-menu" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/menu</code></b>
        </p>
                <p>
            <label id="auth-GETapi-menu" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-menu"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="menu-GETapi-menu--id-">Show one menu item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-menu--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/menu/enim" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/menu/enim"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-menu--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 2,
        &quot;category&quot;: &quot;pizza&quot;,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/mknjbh&quot;,
        &quot;available&quot;: true,
        &quot;name&quot;: &quot;peperoni&quot;,
        &quot;price&quot;: &quot;5&quot;,
        &quot;description&quot;: &quot;very delicious&quot;
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-menu--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-menu--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-menu--id-"></code></pre>
</span>
<span id="execution-error-GETapi-menu--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-menu--id-"></code></pre>
</span>
<form id="form-GETapi-menu--id-" data-method="GET"
      data-path="api/menu/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-menu--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-menu--id-"
                    onclick="tryItOut('GETapi-menu--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-menu--id-"
                    onclick="cancelTryOut('GETapi-menu--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-menu--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/menu/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-menu--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-menu--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-menu--id-"
               value="enim"
               data-component="url" hidden>
    <br>
<p>The ID of the menu.</p>
            </p>
                    </form>

            <h2 id="menu-GETapi-special_items">Show all special items</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint sends you foods of the specific category.</p>
<aside class="success">Send me category id.</aside>

<span id="example-requests-GETapi-special_items">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/special_items" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/special_items"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-special_items">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 2,
        &quot;category&quot;: &quot;pizza&quot;,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/mknjbh&quot;,
        &quot;available&quot;: true,
        &quot;is_special&quot;: true,
        &quot;name&quot;: &quot;peperoni&quot;,
        &quot;price&quot;: &quot;5&quot;,
        &quot;description&quot;: &quot;very delicious&quot;
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-special_items" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-special_items"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-special_items"></code></pre>
</span>
<span id="execution-error-GETapi-special_items" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-special_items"></code></pre>
</span>
<form id="form-GETapi-special_items" data-method="GET"
      data-path="api/special_items"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-special_items', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-special_items"
                    onclick="tryItOut('GETapi-special_items');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-special_items"
                    onclick="cancelTryOut('GETapi-special_items');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-special_items" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/special_items</code></b>
        </p>
                <p>
            <label id="auth-GETapi-special_items" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-special_items"
                                                                data-component="header"></label>
        </p>
                </form>

        <h1 id="menu-category">Menu category</h1>

    <p>APIs for Menu's category</p>

            <h2 id="menu-category-GETapi-menu_category">Show All Menu&#039;s Category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-menu_category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/menu_category" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/menu_category"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-menu_category">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/image.png&quot;,
        &quot;name&quot;: &quot;pizza&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/jlhv&quot;,
        &quot;name&quot;: &quot;hamburger&quot;
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-menu_category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-menu_category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-menu_category"></code></pre>
</span>
<span id="execution-error-GETapi-menu_category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-menu_category"></code></pre>
</span>
<form id="form-GETapi-menu_category" data-method="GET"
      data-path="api/menu_category"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-menu_category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-menu_category"
                    onclick="tryItOut('GETapi-menu_category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-menu_category"
                    onclick="cancelTryOut('GETapi-menu_category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-menu_category" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/menu_category</code></b>
        </p>
                <p>
            <label id="auth-GETapi-menu_category" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-menu_category"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="menu-category-GETapi-menu_category--id-">Show foods of a category in the menu</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint sends you foods of the specific category.</p>
<aside class="success">Send me category id.</aside>

<span id="example-requests-GETapi-menu_category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/menu_category/consequatur" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/menu_category/consequatur"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-menu_category--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json"></code>
 </pre>
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
&quot;pizza&quot;: [
{
&quot;id&quot;: 2,
&quot;item_category_id&quot;: 1,
&quot;image&quot;: &quot;&quot;,
&quot;available&quot;: 1,
&quot;name&quot;: &quot;peperoni&quot;,
&quot;price&quot;: &quot;5&quot;,
&quot;description&quot;: &quot;good&quot;,
&quot;created_at&quot;: null,
&quot;updated_at&quot;: null,
&quot;deleted_at&quot;: null,
&quot;category&quot;: {
&quot;id&quot;: 1,
&quot;image&quot;: &quot;&quot;,
&quot;name&quot;: &quot;pizza&quot;,
&quot;created_at&quot;: null,
&quot;updated_at&quot;: null,
&quot;deleted_at&quot;: null
}
}
],
&quot;hamburger&quot;: [
{
&quot;id&quot;: 3,
&quot;item_category_id&quot;: 2,
&quot;image&quot;: &quot;&quot;,
&quot;available&quot;: 1,
&quot;name&quot;: &quot;peperoni&quot;,
&quot;price&quot;: &quot;6&quot;,
&quot;description&quot;: &quot;bad&quot;,
&quot;created_at&quot;: null,
&quot;updated_at&quot;: null,
&quot;deleted_at&quot;: null,
&quot;category&quot;: {
&quot;id&quot;: 2,
&quot;image&quot;: &quot;&quot;,
&quot;name&quot;: &quot;hamburger&quot;,
&quot;created_at&quot;: null,
&quot;updated_at&quot;: null,
&quot;deleted_at&quot;: null
}
},
]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-menu_category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-menu_category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-menu_category--id-"></code></pre>
</span>
<span id="execution-error-GETapi-menu_category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-menu_category--id-"></code></pre>
</span>
<form id="form-GETapi-menu_category--id-" data-method="GET"
      data-path="api/menu_category/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-menu_category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-menu_category--id-"
                    onclick="tryItOut('GETapi-menu_category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-menu_category--id-"
                    onclick="cancelTryOut('GETapi-menu_category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-menu_category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/menu_category/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-menu_category--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-menu_category--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-menu_category--id-"
               value="consequatur"
               data-component="url" hidden>
    <br>
<p>The ID of the menu category.</p>
            </p>
                    </form>

        <h1 id="order">Order</h1>

    <p>APIs for Orders</p>

            <h2 id="order-GETapi-active_order">Cart</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint shows active order</p>

<span id="example-requests-GETapi-active_order">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/active_order" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/active_order"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-active_order">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;client_id&quot;: 1,
    &quot;is_pay&quot;: false,
    &quot;total_price&quot;: 0,
    &quot;status&quot;: null,
    &quot;address&quot;: {
        &quot;id&quot;: 1,
        &quot;client_id&quot;: 1,
        &quot;title&quot;: &quot;l;kjh&quot;,
        &quot;address&quot;: &quot;;klj&quot;,
        &quot;lat_lng&quot;: &quot;&quot;
    },
    &quot;carts&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-active_order" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-active_order"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-active_order"></code></pre>
</span>
<span id="execution-error-GETapi-active_order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-active_order"></code></pre>
</span>
<form id="form-GETapi-active_order" data-method="GET"
      data-path="api/active_order"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-active_order', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-active_order"
                    onclick="tryItOut('GETapi-active_order');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-active_order"
                    onclick="cancelTryOut('GETapi-active_order');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-active_order" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/active_order</code></b>
        </p>
                <p>
            <label id="auth-GETapi-active_order" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-active_order"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="order-GETapi-order">Order History</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint shows all orders</p>

<span id="example-requests-GETapi-order">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/order" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/order"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-order">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
{
&quot;id&quot;: 1,
&quot;client_id&quot;: 1,
&quot;is_pay&quot;: false,
&quot;total_price&quot;: 60,
&quot;status&quot;: &#039;sent&#039;,
&quot;address&quot;: {
&quot;id&quot;: 1,
&quot;client_id&quot;: 1,
&quot;title&quot;: &quot;home&quot;,
&quot;address&quot;: &quot;canada&quot;,
&quot;lat_lng&quot;: &quot;&quot;
},
&quot;carts&quot;: [
{
&quot;id&quot;: 1,
&quot;item_id&quot;: {
&quot;id&quot;: 2,
&quot;item_category_id&quot;: 1,
&quot;image&quot;: &quot;mknjbh&quot;,
&quot;available&quot;: 1,
&quot;name&quot;: &quot;peperoni&quot;,
&quot;price&quot;: &quot;5&quot;,
&quot;description&quot;: &quot;;.&#039;lkjihugjhg&quot;,
&quot;created_at&quot;: null,
&quot;updated_at&quot;: null,
&quot;deleted_at&quot;: null
},
&quot;is_menu&quot;: true,
&quot;count&quot;: 6,
&quot;amount&quot;: 30
},
{
&quot;id&quot;: 2,
&quot;item_id&quot;: {
&quot;id&quot;: 3,
&quot;item_category_id&quot;: 2,
&quot;image&quot;: &quot;AS&quot;,
&quot;available&quot;: 1,
&quot;name&quot;: &quot;QWE&quot;,
&quot;price&quot;: &quot;6&quot;,
&quot;description&quot;: &quot;QWE&quot;,
&quot;created_at&quot;: null,
&quot;updated_at&quot;: null,
&quot;deleted_at&quot;: null
},
&quot;is_menu&quot;: true,
&quot;count&quot;: 5,
&quot;amount&quot;: 30
}
]
},</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-order" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-order"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-order"></code></pre>
</span>
<span id="execution-error-GETapi-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-order"></code></pre>
</span>
<form id="form-GETapi-order" data-method="GET"
      data-path="api/order"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-order', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-order"
                    onclick="tryItOut('GETapi-order');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-order"
                    onclick="cancelTryOut('GETapi-order');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-order" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/order</code></b>
        </p>
                <p>
            <label id="auth-GETapi-order" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-order"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="order-POSTapi-order">Add address to cart</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-order">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/order" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"address_id\": \"est\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/order"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "address_id": "est"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-order">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;client_id&quot;: 1,
    &quot;is_pay&quot;: false,
    &quot;total_price&quot;: 0,
    &quot;status&quot;: null,
    &quot;address&quot;: {
        &quot;id&quot;: 1,
        &quot;client_id&quot;: 1,
        &quot;title&quot;: &quot;l;kjh&quot;,
        &quot;address&quot;: &quot;;klj&quot;,
        &quot;lat_lng&quot;: &quot;&quot;
    },
    &quot;carts&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-order" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-order"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-order"></code></pre>
</span>
<span id="execution-error-POSTapi-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-order"></code></pre>
</span>
<form id="form-POSTapi-order" data-method="POST"
      data-path="api/order"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-order', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-order"
                    onclick="tryItOut('POSTapi-order');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-order"
                    onclick="cancelTryOut('POSTapi-order');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-order" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/order</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-order" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-order"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>address_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="address_id"
               data-endpoint="POSTapi-order"
               value="est"
               data-component="body" hidden>
    <br>

        </p>
        </form>

        <h1 id="panel-all-users">Panel All Users</h1>

    

            <h2 id="panel-all-users-GETapi-panel-users">Show Users And Admins</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/users" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/users"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-users">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: null,
        &quot;avatar&quot;: null,
        &quot;username&quot;: null,
        &quot;country_id&quot;: 1,
        &quot;phone&quot;: &quot;09358548353&quot;,
        &quot;email&quot;: &quot;nicolas.eric@example.org&quot;,
        &quot;reset_link&quot;: null,
        &quot;phone_code&quot;: null,
        &quot;email_code&quot;: &quot;bdK8ZIhe3j&quot;,
        &quot;is_phone_verify&quot;: 1,
        &quot;is_email_verify&quot;: 0,
        &quot;is_admin&quot;: false
    },
    {
        &quot;id&quot;: 22,
        &quot;image&quot;: &quot;&quot;,
        &quot;name&quot;: &quot;ziz&quot;,
        &quot;country_id&quot;: 1,
        &quot;phone&quot;: &quot;9358548353&quot;,
        &quot;role&quot;: &quot;edit&quot;,
        &quot;is_admin&quot;: true
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;zeinab&quot;,
        &quot;avatar&quot;: &quot;files/1649859720-859727325.png&quot;,
        &quot;username&quot;: &quot;zizi&quot;,
        &quot;country_id&quot;: 1,
        &quot;phone&quot;: &quot;2&quot;,
        &quot;email&quot;: &quot;hand.annamarie@example.org&quot;,
        &quot;reset_link&quot;: &quot;CzUsyVDrqN&quot;,
        &quot;phone_code&quot;: &quot;huJXcMd7rf&quot;,
        &quot;email_code&quot;: &quot;EtmzkoYH2R&quot;,
        &quot;is_phone_verify&quot;: 0,
        &quot;is_email_verify&quot;: 0,
        &quot;is_admin&quot;: false
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-users"></code></pre>
</span>
<span id="execution-error-GETapi-panel-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-users"></code></pre>
</span>
<form id="form-GETapi-panel-users" data-method="GET"
      data-path="api/panel/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-users"
                    onclick="tryItOut('GETapi-panel-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-users"
                    onclick="cancelTryOut('GETapi-panel-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-users" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/users</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-users" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-users"
                                                                data-component="header"></label>
        </p>
                </form>

        <h1 id="panel-content">Panel Content</h1>

    

            <h2 id="panel-content-GETapi-panel-content">Show all content</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-content">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/content" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/content"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-content">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;title&quot;: &quot;about us&quot;,
        &quot;description&quot;: &quot;hello , this is our website&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;title&quot;: &quot;about us&quot;,
        &quot;description&quot;: &quot;hello , this is our website&quot;
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-content" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-content"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-content"></code></pre>
</span>
<span id="execution-error-GETapi-panel-content" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-content"></code></pre>
</span>
<form id="form-GETapi-panel-content" data-method="GET"
      data-path="api/panel/content"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-content', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-content"
                    onclick="tryItOut('GETapi-panel-content');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-content"
                    onclick="cancelTryOut('GETapi-panel-content');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-content" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/content</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-content" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-content"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="panel-content-POSTapi-panel-content">create one content</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-panel-content">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/panel/content" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"dolor\",
    \"description\": \"libero\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/content"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "dolor",
    "description": "libero"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-panel-content">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;title&quot;: &quot;about us&quot;,
    &quot;description&quot;: &quot;hello , this is our website&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-panel-content" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-panel-content"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-panel-content"></code></pre>
</span>
<span id="execution-error-POSTapi-panel-content" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-panel-content"></code></pre>
</span>
<form id="form-POSTapi-panel-content" data-method="POST"
      data-path="api/panel/content"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-panel-content', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-panel-content"
                    onclick="tryItOut('POSTapi-panel-content');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-panel-content"
                    onclick="cancelTryOut('POSTapi-panel-content');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-panel-content" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/panel/content</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-panel-content" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-panel-content"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-panel-content"
               value="dolor"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-panel-content"
               value="libero"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-content-GETapi-panel-content--id-">Show one content</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-content--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/content/12" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/content/12"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-content--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;title&quot;: &quot;about us&quot;,
    &quot;description&quot;: &quot;hello , this is our website&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected title is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;phone&quot;: [
            &quot;The selected title is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-content--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-content--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-content--id-"></code></pre>
</span>
<span id="execution-error-GETapi-panel-content--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-content--id-"></code></pre>
</span>
<form id="form-GETapi-panel-content--id-" data-method="GET"
      data-path="api/panel/content/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-content--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-content--id-"
                    onclick="tryItOut('GETapi-panel-content--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-content--id-"
                    onclick="cancelTryOut('GETapi-panel-content--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-content--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/content/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-content--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-content--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-panel-content--id-"
               value="12"
               data-component="url" hidden>
    <br>
<p>The ID of the content.</p>
            </p>
                    </form>

            <h2 id="panel-content-PUTapi-panel-content--id-">edit one content</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-panel-content--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://rabin.karo.studio/api/panel/content/5" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/content/5"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-panel-content--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;title&quot;: &quot;about us&quot;,
    &quot;description&quot;: &quot;hello , this is our website&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected title is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;phone&quot;: [
            &quot;The selected title is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-panel-content--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-panel-content--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-panel-content--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-panel-content--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-panel-content--id-"></code></pre>
</span>
<form id="form-PUTapi-panel-content--id-" data-method="PUT"
      data-path="api/panel/content/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-panel-content--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-panel-content--id-"
                    onclick="tryItOut('PUTapi-panel-content--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-panel-content--id-"
                    onclick="cancelTryOut('PUTapi-panel-content--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-panel-content--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/panel/content/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/panel/content/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-panel-content--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-panel-content--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-panel-content--id-"
               value="5"
               data-component="url" hidden>
    <br>
<p>The ID of the content.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="title"
               data-endpoint="PUTapi-panel-content--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-panel-content--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-content-DELETEapi-panel-content--id-">delete one content</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>@response scenario=success {&quot;message&quot; : &quot;content deleted successfully&quot;}</p>

<span id="example-requests-DELETEapi-panel-content--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/panel/content/19" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/content/19"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-panel-content--id-">
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-panel-content--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-panel-content--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-panel-content--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-panel-content--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-panel-content--id-"></code></pre>
</span>
<form id="form-DELETEapi-panel-content--id-" data-method="DELETE"
      data-path="api/panel/content/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-panel-content--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-panel-content--id-"
                    onclick="tryItOut('DELETEapi-panel-content--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-panel-content--id-"
                    onclick="cancelTryOut('DELETEapi-panel-content--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-panel-content--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/panel/content/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-panel-content--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-panel-content--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-panel-content--id-"
               value="19"
               data-component="url" hidden>
    <br>
<p>The ID of the content.</p>
            </p>
                    </form>

        <h1 id="panel-country">Panel Country</h1>

    <p>APIs for managing Countries</p>

            <h2 id="panel-country-GETapi-all_country">Show All Countries</h2>

<p>
</p>

<p>This endpoint shows all countries</p>

<span id="example-requests-GETapi-all_country">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/all_country" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/all_country"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-all_country">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/gvjgvgv&quot;,
        &quot;code&quot;: &quot;1&quot;,
        &quot;name&quot;: &quot;canada&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/iji&quot;,
        &quot;code&quot;: &quot;1&quot;,
        &quot;name&quot;: &quot;USA&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-all_country" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-all_country"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-all_country"></code></pre>
</span>
<span id="execution-error-GETapi-all_country" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-all_country"></code></pre>
</span>
<form id="form-GETapi-all_country" data-method="GET"
      data-path="api/all_country"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-all_country', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-all_country"
                    onclick="tryItOut('GETapi-all_country');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-all_country"
                    onclick="cancelTryOut('GETapi-all_country');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-all_country" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/all_country</code></b>
        </p>
                    </form>

            <h2 id="panel-country-POSTapi-panel-country">Create One Country</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint creates one Country</p>

<span id="example-requests-POSTapi-panel-country">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/panel/country" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=illum" \
    --form "code=13" \
    --form "image=@/tmp/phpW1Khcx" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/country"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'illum');
body.append('code', '13');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-panel-country">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 3,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649160294-516619164.png&quot;,
    &quot;code&quot;: &quot;49&quot;,
    &quot;name&quot;: &quot;germany&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The image field is required.&quot;,
    &quot;errors&quot;: {
        &quot;image&quot;: [
            &quot;The image field is required.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-panel-country" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-panel-country"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-panel-country"></code></pre>
</span>
<span id="execution-error-POSTapi-panel-country" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-panel-country"></code></pre>
</span>
<form id="form-POSTapi-panel-country" data-method="POST"
      data-path="api/panel/country"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-panel-country', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-panel-country"
                    onclick="tryItOut('POSTapi-panel-country');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-panel-country"
                    onclick="cancelTryOut('POSTapi-panel-country');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-panel-country" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/panel/country</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-panel-country" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-panel-country"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-panel-country"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-panel-country"
               value="illum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>code</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="code"
               data-endpoint="POSTapi-panel-country"
               value="13"
               data-component="body" hidden>
    <br>

        </p>
        </form>

        <h1 id="panel-ingredient">Panel Ingredient</h1>

    

            <h2 id="panel-ingredient-GETapi-panel-ingredient">Show all ingredients</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-ingredient">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/ingredient?category_id=et&amp;count=tempora" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/ingredient"
);

const params = {
    "category_id": "et",
    "count": "tempora",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-ingredient">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1650706364-1792862385.png&quot;,
        &quot;name&quot;: &quot;cheese&quot;,
        &quot;amount&quot;: &quot;200gr&quot;,
        &quot;price&quot;: &quot;5.3&quot;,
        &quot;description&quot;: null
    },
    {
        &quot;id&quot;: 3,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1650706701-287947386.png&quot;,
        &quot;name&quot;: &quot;cheese2&quot;,
        &quot;amount&quot;: &quot;20gr&quot;,
        &quot;price&quot;: &quot;5.3&quot;,
        &quot;description&quot;: null
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-ingredient" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-ingredient"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-ingredient"></code></pre>
</span>
<span id="execution-error-GETapi-panel-ingredient" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-ingredient"></code></pre>
</span>
<form id="form-GETapi-panel-ingredient" data-method="GET"
      data-path="api/panel/ingredient"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-ingredient', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-ingredient"
                    onclick="tryItOut('GETapi-panel-ingredient');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-ingredient"
                    onclick="cancelTryOut('GETapi-panel-ingredient');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-ingredient" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/ingredient</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-ingredient" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-ingredient"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>category_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="category_id"
               data-endpoint="GETapi-panel-ingredient"
               value="et"
               data-component="query" hidden>
    <br>
<p>to show ingredients of a category .</p>
            </p>
                    <p>
                <b><code>count</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="count"
               data-endpoint="GETapi-panel-ingredient"
               value="tempora"
               data-component="query" hidden>
    <br>
<p>to show last N ingredients  .</p>
            </p>
                </form>

            <h2 id="panel-ingredient-POSTapi-panel-ingredient">Create one ingredient</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-panel-ingredient">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/panel/ingredient" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "ingredient_category_id=ipsam" \
    --form "name=dolor" \
    --form "image=@/tmp/phpdXlQ1z" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/ingredient"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('ingredient_category_id', 'ipsam');
body.append('name', 'dolor');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-panel-ingredient">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1650706364-1792862385.png&quot;,
    &quot;name&quot;: &quot;cheese&quot;,
    &quot;amount&quot;: &quot;20gr&quot;,
    &quot;price&quot;: &quot;5.3&quot;,
    &quot;description&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected item_category_id is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;item_category_id&quot;: [
            &quot;The selected item_category_id is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-panel-ingredient" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-panel-ingredient"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-panel-ingredient"></code></pre>
</span>
<span id="execution-error-POSTapi-panel-ingredient" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-panel-ingredient"></code></pre>
</span>
<form id="form-POSTapi-panel-ingredient" data-method="POST"
      data-path="api/panel/ingredient"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-panel-ingredient', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-panel-ingredient"
                    onclick="tryItOut('POSTapi-panel-ingredient');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-panel-ingredient"
                    onclick="cancelTryOut('POSTapi-panel-ingredient');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-panel-ingredient" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/panel/ingredient</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-panel-ingredient" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-panel-ingredient"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>ingredient_category_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="ingredient_category_id"
               data-endpoint="POSTapi-panel-ingredient"
               value="ipsam"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-panel-ingredient"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-panel-ingredient"
               value="dolor"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-ingredient-GETapi-panel-ingredient--id-">Show one ingredient</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-ingredient--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/ingredient/8" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/ingredient/8"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-ingredient--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1650706364-1792862385.png&quot;,
    &quot;name&quot;: &quot;cheese&quot;,
    &quot;amount&quot;: &quot;20gr&quot;,
    &quot;price&quot;: &quot;5.3&quot;,
    &quot;description&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-ingredient--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-ingredient--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-ingredient--id-"></code></pre>
</span>
<span id="execution-error-GETapi-panel-ingredient--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-ingredient--id-"></code></pre>
</span>
<form id="form-GETapi-panel-ingredient--id-" data-method="GET"
      data-path="api/panel/ingredient/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-ingredient--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-ingredient--id-"
                    onclick="tryItOut('GETapi-panel-ingredient--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-ingredient--id-"
                    onclick="cancelTryOut('GETapi-panel-ingredient--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-ingredient--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/ingredient/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-ingredient--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-ingredient--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-panel-ingredient--id-"
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the ingredient.</p>
            </p>
                    </form>

            <h2 id="panel-ingredient-PUTapi-panel-ingredient--id-">Edit one ingredient</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-panel-ingredient--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://rabin.karo.studio/api/panel/ingredient/4" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "image=@/tmp/phpjNnNSy" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/ingredient/4"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-panel-ingredient--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1650706364-1792862385.png&quot;,
    &quot;name&quot;: &quot;cheese&quot;,
    &quot;amount&quot;: &quot;20gr&quot;,
    &quot;price&quot;: &quot;5.3&quot;,
    &quot;description&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected phone is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;phone&quot;: [
            &quot;The selected phone is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-panel-ingredient--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-panel-ingredient--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-panel-ingredient--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-panel-ingredient--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-panel-ingredient--id-"></code></pre>
</span>
<form id="form-PUTapi-panel-ingredient--id-" data-method="PUT"
      data-path="api/panel/ingredient/{id}"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-panel-ingredient--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-panel-ingredient--id-"
                    onclick="tryItOut('PUTapi-panel-ingredient--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-panel-ingredient--id-"
                    onclick="cancelTryOut('PUTapi-panel-ingredient--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-panel-ingredient--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/panel/ingredient/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/panel/ingredient/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-panel-ingredient--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-panel-ingredient--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-panel-ingredient--id-"
               value="4"
               data-component="url" hidden>
    <br>
<p>The ID of the ingredient.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>ingredient_category_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="ingredient_category_id"
               data-endpoint="PUTapi-panel-ingredient--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="PUTapi-panel-ingredient--id-"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-panel-ingredient--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-ingredient-DELETEapi-panel-ingredient--id-">Delete one ingredient</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-panel-ingredient--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/panel/ingredient/8" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/ingredient/8"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-panel-ingredient--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;ingredient deleted successfully&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-panel-ingredient--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-panel-ingredient--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-panel-ingredient--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-panel-ingredient--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-panel-ingredient--id-"></code></pre>
</span>
<form id="form-DELETEapi-panel-ingredient--id-" data-method="DELETE"
      data-path="api/panel/ingredient/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-panel-ingredient--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-panel-ingredient--id-"
                    onclick="tryItOut('DELETEapi-panel-ingredient--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-panel-ingredient--id-"
                    onclick="cancelTryOut('DELETEapi-panel-ingredient--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-panel-ingredient--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/panel/ingredient/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-panel-ingredient--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-panel-ingredient--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-panel-ingredient--id-"
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the ingredient.</p>
            </p>
                    </form>

            <h2 id="panel-ingredient-POSTapi-panel-item_ingredient">add one ingredient to men item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-panel-item_ingredient">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/panel/item_ingredient" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"item_id\": \"unde\",
    \"ingredient_id\": \"eaque\",
    \"amount\": \"deserunt\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/item_ingredient"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "item_id": "unde",
    "ingredient_id": "eaque",
    "amount": "deserunt"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-panel-item_ingredient">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;ingredient deleted successfully&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-panel-item_ingredient" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-panel-item_ingredient"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-panel-item_ingredient"></code></pre>
</span>
<span id="execution-error-POSTapi-panel-item_ingredient" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-panel-item_ingredient"></code></pre>
</span>
<form id="form-POSTapi-panel-item_ingredient" data-method="POST"
      data-path="api/panel/item_ingredient"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-panel-item_ingredient', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-panel-item_ingredient"
                    onclick="tryItOut('POSTapi-panel-item_ingredient');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-panel-item_ingredient"
                    onclick="cancelTryOut('POSTapi-panel-item_ingredient');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-panel-item_ingredient" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/panel/item_ingredient</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-panel-item_ingredient" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-panel-item_ingredient"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>item_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="item_id"
               data-endpoint="POSTapi-panel-item_ingredient"
               value="unde"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>ingredient_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="ingredient_id"
               data-endpoint="POSTapi-panel-item_ingredient"
               value="eaque"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>amount</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="amount"
               data-endpoint="POSTapi-panel-item_ingredient"
               value="deserunt"
               data-component="body" hidden>
    <br>

        </p>
        </form>

        <h1 id="panel-ingredient-category">Panel Ingredient Category</h1>

    

            <h2 id="panel-ingredient-category-GETapi-panel-ingredient_category">Show All ingredient&#039;s Category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-ingredient_category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/ingredient_category" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/ingredient_category"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-ingredient_category">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266130-257876169.png&quot;,
        &quot;name&quot;: &quot;topping&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266284-1299351634.png&quot;,
        &quot;name&quot;: &quot;topping&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266590-1689863156.png&quot;,
        &quot;name&quot;: &quot;topping&quot;
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-ingredient_category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-ingredient_category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-ingredient_category"></code></pre>
</span>
<span id="execution-error-GETapi-panel-ingredient_category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-ingredient_category"></code></pre>
</span>
<form id="form-GETapi-panel-ingredient_category" data-method="GET"
      data-path="api/panel/ingredient_category"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-ingredient_category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-ingredient_category"
                    onclick="tryItOut('GETapi-panel-ingredient_category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-ingredient_category"
                    onclick="cancelTryOut('GETapi-panel-ingredient_category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-ingredient_category" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/ingredient_category</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-ingredient_category" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-ingredient_category"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="panel-ingredient-category-POSTapi-panel-ingredient_category">Create ingredient category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>this will create a category in ingredient</p>

<span id="example-requests-POSTapi-panel-ingredient_category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/panel/ingredient_category" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=numquam" \
    --form "image=@/tmp/phpEJBkBy" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/ingredient_category"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'numquam');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-panel-ingredient_category">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266284-1299351634.png&quot;,
    &quot;name&quot;: &quot;topping&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-panel-ingredient_category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-panel-ingredient_category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-panel-ingredient_category"></code></pre>
</span>
<span id="execution-error-POSTapi-panel-ingredient_category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-panel-ingredient_category"></code></pre>
</span>
<form id="form-POSTapi-panel-ingredient_category" data-method="POST"
      data-path="api/panel/ingredient_category"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-panel-ingredient_category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-panel-ingredient_category"
                    onclick="tryItOut('POSTapi-panel-ingredient_category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-panel-ingredient_category"
                    onclick="cancelTryOut('POSTapi-panel-ingredient_category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-panel-ingredient_category" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/panel/ingredient_category</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-panel-ingredient_category" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-panel-ingredient_category"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-panel-ingredient_category"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-panel-ingredient_category"
               value="numquam"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-ingredient-category-GETapi-panel-ingredient_category--id-">Show one ingredient&#039;s category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-ingredient_category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/ingredient_category/culpa" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/ingredient_category/culpa"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-ingredient_category--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266130-257876169.png&quot;,
    &quot;name&quot;: &quot;topping&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-ingredient_category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-ingredient_category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-ingredient_category--id-"></code></pre>
</span>
<span id="execution-error-GETapi-panel-ingredient_category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-ingredient_category--id-"></code></pre>
</span>
<form id="form-GETapi-panel-ingredient_category--id-" data-method="GET"
      data-path="api/panel/ingredient_category/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-ingredient_category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-ingredient_category--id-"
                    onclick="tryItOut('GETapi-panel-ingredient_category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-ingredient_category--id-"
                    onclick="cancelTryOut('GETapi-panel-ingredient_category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-ingredient_category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/ingredient_category/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-ingredient_category--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-ingredient_category--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-panel-ingredient_category--id-"
               value="culpa"
               data-component="url" hidden>
    <br>
<p>The ID of the ingredient category.</p>
            </p>
                    </form>

            <h2 id="panel-ingredient-category-PUTapi-panel-ingredient_category--id-">Edit ingredient&#039;s category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-panel-ingredient_category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://rabin.karo.studio/api/panel/ingredient_category/aut" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "image=@/tmp/phpR3E5xA" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/ingredient_category/aut"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-panel-ingredient_category--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266130-257876169.png&quot;,
    &quot;name&quot;: &quot;topping&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-panel-ingredient_category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-panel-ingredient_category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-panel-ingredient_category--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-panel-ingredient_category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-panel-ingredient_category--id-"></code></pre>
</span>
<form id="form-PUTapi-panel-ingredient_category--id-" data-method="PUT"
      data-path="api/panel/ingredient_category/{id}"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-panel-ingredient_category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-panel-ingredient_category--id-"
                    onclick="tryItOut('PUTapi-panel-ingredient_category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-panel-ingredient_category--id-"
                    onclick="cancelTryOut('PUTapi-panel-ingredient_category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-panel-ingredient_category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/panel/ingredient_category/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/panel/ingredient_category/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-panel-ingredient_category--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-panel-ingredient_category--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="PUTapi-panel-ingredient_category--id-"
               value="aut"
               data-component="url" hidden>
    <br>
<p>The ID of the ingredient category.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="PUTapi-panel-ingredient_category--id-"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-panel-ingredient_category--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-ingredient-category-DELETEapi-panel-ingredient_category--id-">Delete ingredient&#039;s category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>@response scenario=success {&quot;message&quot; : &quot;ingredient category deleted successfully&quot;}</p>

<span id="example-requests-DELETEapi-panel-ingredient_category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/panel/ingredient_category/ullam" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/ingredient_category/ullam"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-panel-ingredient_category--id-">
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-panel-ingredient_category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-panel-ingredient_category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-panel-ingredient_category--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-panel-ingredient_category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-panel-ingredient_category--id-"></code></pre>
</span>
<form id="form-DELETEapi-panel-ingredient_category--id-" data-method="DELETE"
      data-path="api/panel/ingredient_category/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-panel-ingredient_category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-panel-ingredient_category--id-"
                    onclick="tryItOut('DELETEapi-panel-ingredient_category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-panel-ingredient_category--id-"
                    onclick="cancelTryOut('DELETEapi-panel-ingredient_category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-panel-ingredient_category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/panel/ingredient_category/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-panel-ingredient_category--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-panel-ingredient_category--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-panel-ingredient_category--id-"
               value="ullam"
               data-component="url" hidden>
    <br>
<p>The ID of the ingredient category.</p>
            </p>
                    </form>

        <h1 id="panel-menu">Panel Menu</h1>

    

            <h2 id="panel-menu-GETapi-panel-menus">Show All Menu</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>to get items of a category use :</p>
<aside class="success">{url}/api/panel/menus?category_id=5</aside>

<span id="example-requests-GETapi-panel-menus">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/menus?category_id=fuga&amp;count=voluptatem" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/menus"
);

const params = {
    "category_id": "fuga",
    "count": "voluptatem",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-menus">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
&quot;pizza&quot;: [
{
&quot;id&quot;: 2,
&quot;item_category_id&quot;: 1,
&quot;image&quot;: &quot;&quot;,
&quot;available&quot;: 1,
&quot;name&quot;: &quot;peperoni&quot;,
&quot;price&quot;: &quot;5&quot;,
&quot;description&quot;: &quot;good&quot;,
&quot;created_at&quot;: null,
&quot;updated_at&quot;: null,
&quot;deleted_at&quot;: null,
&quot;category&quot;: {
&quot;id&quot;: 1,
&quot;image&quot;: &quot;&quot;,
&quot;name&quot;: &quot;pizza&quot;,
&quot;created_at&quot;: null,
&quot;updated_at&quot;: null,
&quot;deleted_at&quot;: null
}
}
],
&quot;hamburger&quot;: [
{
&quot;id&quot;: 3,
&quot;item_category_id&quot;: 2,
&quot;image&quot;: &quot;&quot;,
&quot;available&quot;: 1,
&quot;name&quot;: &quot;peperoni&quot;,
&quot;price&quot;: &quot;6&quot;,
&quot;description&quot;: &quot;bad&quot;,
&quot;created_at&quot;: null,
&quot;updated_at&quot;: null,
&quot;deleted_at&quot;: null,
&quot;category&quot;: {
&quot;id&quot;: 2,
&quot;image&quot;: &quot;&quot;,
&quot;name&quot;: &quot;hamburger&quot;,
&quot;created_at&quot;: null,
&quot;updated_at&quot;: null,
&quot;deleted_at&quot;: null
}
},
]
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-menus" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-menus"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-menus"></code></pre>
</span>
<span id="execution-error-GETapi-panel-menus" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-menus"></code></pre>
</span>
<form id="form-GETapi-panel-menus" data-method="GET"
      data-path="api/panel/menus"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-menus', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-menus"
                    onclick="tryItOut('GETapi-panel-menus');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-menus"
                    onclick="cancelTryOut('GETapi-panel-menus');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-menus" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/menus</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-menus" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-menus"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>category_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="category_id"
               data-endpoint="GETapi-panel-menus"
               value="fuga"
               data-component="query" hidden>
    <br>
<p>to show items of a category .</p>
            </p>
                    <p>
                <b><code>count</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="count"
               data-endpoint="GETapi-panel-menus"
               value="voluptatem"
               data-component="query" hidden>
    <br>
<p>to show last n items  .</p>
            </p>
                </form>

            <h2 id="panel-menu-POSTapi-panel-menus">Create one menu</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>this will create an item in menu</p>

<span id="example-requests-POSTapi-panel-menus">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/panel/menus" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=dicta" \
    --form "price=sed" \
    --form "description=quod" \
    --form "item_category_id=15" \
    --form "available=1" \
    --form "is_special=1" \
    --form "image=@/tmp/phpy1Se6x" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/menus"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'dicta');
body.append('price', 'sed');
body.append('description', 'quod');
body.append('item_category_id', '15');
body.append('available', '1');
body.append('is_special', '1');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-panel-menus">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
&quot;id&quot;: 3,
&quot;item_category_id&quot;: 2,
&quot;image&quot;: &quot;&quot;,
&quot;available&quot;: 1,
&quot;name&quot;: &quot;peperoni&quot;,
&quot;price&quot;: &quot;6&quot;,
&quot;description&quot;: &quot;hot&quot;,
&quot;category&quot;: {
&quot;id&quot;: 2,
&quot;image&quot;: &quot;&quot;,
&quot;name&quot;: &quot;hamburger&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected item_category_id is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;item_category_id&quot;: [
            &quot;The selected item_category_id is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-panel-menus" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-panel-menus"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-panel-menus"></code></pre>
</span>
<span id="execution-error-POSTapi-panel-menus" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-panel-menus"></code></pre>
</span>
<form id="form-POSTapi-panel-menus" data-method="POST"
      data-path="api/panel/menus"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-panel-menus', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-panel-menus"
                    onclick="tryItOut('POSTapi-panel-menus');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-panel-menus"
                    onclick="cancelTryOut('POSTapi-panel-menus');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-panel-menus" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/panel/menus</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-panel-menus" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-panel-menus"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-panel-menus"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-panel-menus"
               value="dicta"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="price"
               data-endpoint="POSTapi-panel-menus"
               value="sed"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-panel-menus"
               value="quod"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>item_category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="item_category_id"
               data-endpoint="POSTapi-panel-menus"
               value="15"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>available</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="available"
               data-endpoint="POSTapi-panel-menus"
               value="1"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>0</code> or <code>1</code>.</p>
        </p>
                <p>
            <b><code>is_special</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="is_special"
               data-endpoint="POSTapi-panel-menus"
               value="1"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>0</code> or <code>1</code>.</p>
        </p>
                <p>
            <b><code>ingredients</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="ingredients"
               data-endpoint="POSTapi-panel-menus"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-menu-GETapi-panel-menus--id-">Show one menu item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-menus--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/menus/ut" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/menus/ut"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-menus--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
&quot;id&quot;: 3,
&quot;item_category_id&quot;: 2,
&quot;image&quot;: &quot;&quot;,
&quot;available&quot;: 1,
&quot;name&quot;: &quot;peperoni&quot;,
&quot;price&quot;: &quot;6&quot;,
&quot;description&quot;: &quot;hot&quot;,
&quot;category&quot;: {
&quot;id&quot;: 2,
&quot;image&quot;: &quot;&quot;,
&quot;name&quot;: &quot;hamburger&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-menus--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-menus--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-menus--id-"></code></pre>
</span>
<span id="execution-error-GETapi-panel-menus--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-menus--id-"></code></pre>
</span>
<form id="form-GETapi-panel-menus--id-" data-method="GET"
      data-path="api/panel/menus/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-menus--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-menus--id-"
                    onclick="tryItOut('GETapi-panel-menus--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-menus--id-"
                    onclick="cancelTryOut('GETapi-panel-menus--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-menus--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/menus/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-menus--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-menus--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-panel-menus--id-"
               value="ut"
               data-component="url" hidden>
    <br>
<p>The ID of the menu.</p>
            </p>
                    </form>

            <h2 id="panel-menu-PUTapi-panel-menus--id-">Edit menu item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-panel-menus--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://rabin.karo.studio/api/panel/menus/eum" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "item_category_id=14" \
    --form "available=1" \
    --form "is_special=0" \
    --form "image=@/tmp/phpaocmFx" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/menus/eum"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('item_category_id', '14');
body.append('available', '1');
body.append('is_special', '0');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-panel-menus--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
&quot;id&quot;: 3,
&quot;item_category_id&quot;: 2,
&quot;image&quot;: &quot;&quot;,
&quot;available&quot;: 1,
&quot;name&quot;: &quot;peperoni&quot;,
&quot;price&quot;: &quot;6&quot;,
&quot;description&quot;: &quot;hot&quot;,
&quot;category&quot;: {
&quot;id&quot;: 2,
&quot;image&quot;: &quot;&quot;,
&quot;name&quot;: &quot;hamburger&quot;,
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected phone is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;phone&quot;: [
            &quot;The selected phone is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-panel-menus--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-panel-menus--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-panel-menus--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-panel-menus--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-panel-menus--id-"></code></pre>
</span>
<form id="form-PUTapi-panel-menus--id-" data-method="PUT"
      data-path="api/panel/menus/{id}"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-panel-menus--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-panel-menus--id-"
                    onclick="tryItOut('PUTapi-panel-menus--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-panel-menus--id-"
                    onclick="cancelTryOut('PUTapi-panel-menus--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-panel-menus--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/panel/menus/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/panel/menus/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-panel-menus--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-panel-menus--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="PUTapi-panel-menus--id-"
               value="eum"
               data-component="url" hidden>
    <br>
<p>The ID of the menu.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="PUTapi-panel-menus--id-"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-panel-menus--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="price"
               data-endpoint="PUTapi-panel-menus--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-panel-menus--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>item_category_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="item_category_id"
               data-endpoint="PUTapi-panel-menus--id-"
               value="14"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>available</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="available"
               data-endpoint="PUTapi-panel-menus--id-"
               value="1"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>0</code> or <code>1</code>.</p>
        </p>
                <p>
            <b><code>is_special</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="is_special"
               data-endpoint="PUTapi-panel-menus--id-"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>0</code> or <code>1</code>.</p>
        </p>
        </form>

            <h2 id="panel-menu-DELETEapi-panel-menus--id-">Delete one menu item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-panel-menus--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/panel/menus/ea" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/menus/ea"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-panel-menus--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;item deleted successfully&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-panel-menus--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-panel-menus--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-panel-menus--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-panel-menus--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-panel-menus--id-"></code></pre>
</span>
<form id="form-DELETEapi-panel-menus--id-" data-method="DELETE"
      data-path="api/panel/menus/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-panel-menus--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-panel-menus--id-"
                    onclick="tryItOut('DELETEapi-panel-menus--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-panel-menus--id-"
                    onclick="cancelTryOut('DELETEapi-panel-menus--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-panel-menus--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/panel/menus/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-panel-menus--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-panel-menus--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-panel-menus--id-"
               value="ea"
               data-component="url" hidden>
    <br>
<p>The ID of the menu.</p>
            </p>
                    </form>

        <h1 id="panel-menu-category">Panel Menu Category</h1>

    

            <h2 id="panel-menu-category-GETapi-panel-menu_category">Show All Menu&#039;s Category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-menu_category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/menu_category" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/menu_category"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-menu_category">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/image.png&quot;,
        &quot;name&quot;: &quot;pizza&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/jlhv&quot;,
        &quot;name&quot;: &quot;hamburger&quot;
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-menu_category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-menu_category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-menu_category"></code></pre>
</span>
<span id="execution-error-GETapi-panel-menu_category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-menu_category"></code></pre>
</span>
<form id="form-GETapi-panel-menu_category" data-method="GET"
      data-path="api/panel/menu_category"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-menu_category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-menu_category"
                    onclick="tryItOut('GETapi-panel-menu_category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-menu_category"
                    onclick="cancelTryOut('GETapi-panel-menu_category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-menu_category" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/menu_category</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-menu_category" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-menu_category"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="panel-menu-category-POSTapi-panel-menu_category">Create menu category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>this will create a category in menu</p>

<span id="example-requests-POSTapi-panel-menu_category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/panel/menu_category" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=itaque" \
    --form "image=@/tmp/phplv4f0z" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/menu_category"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'itaque');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-panel-menu_category">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/image.png&quot;,
    &quot;name&quot;: &quot;pizza&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The image field is required.&quot;,
    &quot;errors&quot;: {
        &quot;image&quot;: [
            &quot;The image field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-panel-menu_category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-panel-menu_category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-panel-menu_category"></code></pre>
</span>
<span id="execution-error-POSTapi-panel-menu_category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-panel-menu_category"></code></pre>
</span>
<form id="form-POSTapi-panel-menu_category" data-method="POST"
      data-path="api/panel/menu_category"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-panel-menu_category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-panel-menu_category"
                    onclick="tryItOut('POSTapi-panel-menu_category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-panel-menu_category"
                    onclick="cancelTryOut('POSTapi-panel-menu_category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-panel-menu_category" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/panel/menu_category</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-panel-menu_category" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-panel-menu_category"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-panel-menu_category"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-panel-menu_category"
               value="itaque"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="type"
               data-endpoint="POSTapi-panel-menu_category"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-menu-category-GETapi-panel-menu_category--id-">Show one menu&#039;s category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-menu_category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/menu_category/et" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/menu_category/et"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-menu_category--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/image.png&quot;,
    &quot;name&quot;: &quot;pizza&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-menu_category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-menu_category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-menu_category--id-"></code></pre>
</span>
<span id="execution-error-GETapi-panel-menu_category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-menu_category--id-"></code></pre>
</span>
<form id="form-GETapi-panel-menu_category--id-" data-method="GET"
      data-path="api/panel/menu_category/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-menu_category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-menu_category--id-"
                    onclick="tryItOut('GETapi-panel-menu_category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-menu_category--id-"
                    onclick="cancelTryOut('GETapi-panel-menu_category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-menu_category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/menu_category/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-menu_category--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-menu_category--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-panel-menu_category--id-"
               value="et"
               data-component="url" hidden>
    <br>
<p>The ID of the menu category.</p>
            </p>
                    </form>

            <h2 id="panel-menu-category-PUTapi-panel-menu_category--id-">Edit menu&#039;s category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-panel-menu_category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://rabin.karo.studio/api/panel/menu_category/error" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "image=@/tmp/phpmjlMZz" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/menu_category/error"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-panel-menu_category--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/image.png&quot;,
    &quot;name&quot;: &quot;pizza&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The image field is required.&quot;,
    &quot;errors&quot;: {
        &quot;image&quot;: [
            &quot;The image field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-panel-menu_category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-panel-menu_category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-panel-menu_category--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-panel-menu_category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-panel-menu_category--id-"></code></pre>
</span>
<form id="form-PUTapi-panel-menu_category--id-" data-method="PUT"
      data-path="api/panel/menu_category/{id}"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-panel-menu_category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-panel-menu_category--id-"
                    onclick="tryItOut('PUTapi-panel-menu_category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-panel-menu_category--id-"
                    onclick="cancelTryOut('PUTapi-panel-menu_category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-panel-menu_category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/panel/menu_category/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/panel/menu_category/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-panel-menu_category--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-panel-menu_category--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="PUTapi-panel-menu_category--id-"
               value="error"
               data-component="url" hidden>
    <br>
<p>The ID of the menu category.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="PUTapi-panel-menu_category--id-"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-panel-menu_category--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-menu-category-DELETEapi-panel-menu_category--id-">Delete menu&#039;s category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>@response scenario=success {&quot;message&quot; : &quot;menu category deleted successfully&quot;}</p>

<span id="example-requests-DELETEapi-panel-menu_category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/panel/menu_category/consectetur" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/menu_category/consectetur"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-panel-menu_category--id-">
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-panel-menu_category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-panel-menu_category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-panel-menu_category--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-panel-menu_category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-panel-menu_category--id-"></code></pre>
</span>
<form id="form-DELETEapi-panel-menu_category--id-" data-method="DELETE"
      data-path="api/panel/menu_category/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-panel-menu_category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-panel-menu_category--id-"
                    onclick="tryItOut('DELETEapi-panel-menu_category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-panel-menu_category--id-"
                    onclick="cancelTryOut('DELETEapi-panel-menu_category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-panel-menu_category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/panel/menu_category/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-panel-menu_category--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-panel-menu_category--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-panel-menu_category--id-"
               value="consectetur"
               data-component="url" hidden>
    <br>
<p>The ID of the menu category.</p>
            </p>
                    </form>

        <h1 id="panel-selfmade">Panel Selfmade</h1>

    

            <h2 id="panel-selfmade-GETapi-panel-selfmades">Show All selfmades</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>to get items of a category use :</p>
<aside class="success">{url}/api/panel/selfmades?category_id=1</aside>

<span id="example-requests-GETapi-panel-selfmades">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/selfmades?category_id=est&amp;count=beatae" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/selfmades"
);

const params = {
    "category_id": "est",
    "count": "beatae",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-selfmades">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;category&quot;: {
            &quot;id&quot;: 1,
            &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649935818-609770772.png&quot;,
            &quot;name&quot;: &quot;test&quot;
        },
        &quot;items&quot;: []
    },
    {
        &quot;category&quot;: {
            &quot;id&quot;: 2,
            &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649938458-516340118.png&quot;,
            &quot;name&quot;: &quot;Proteins&quot;
        },
        &quot;items&quot;: [
            {
                &quot;id&quot;: 9,
                &quot;category&quot;: &quot;Proteins&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649939385-1614994750.png&quot;,
                &quot;name&quot;: &quot;Turkey&quot;,
                &quot;price&quot;: &quot;5&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 10,
                &quot;category&quot;: &quot;Proteins&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649939399-1584526436.png&quot;,
                &quot;name&quot;: &quot;Peperoni&quot;,
                &quot;price&quot;: &quot;4&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 11,
                &quot;category&quot;: &quot;Proteins&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649939421-1942282979.png&quot;,
                &quot;name&quot;: &quot;Ham Pork&quot;,
                &quot;price&quot;: &quot;9&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 12,
                &quot;category&quot;: &quot;Proteins&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649939443-849350251.png&quot;,
                &quot;name&quot;: &quot;Bacon&quot;,
                &quot;price&quot;: &quot;2&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 13,
                &quot;category&quot;: &quot;Proteins&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649939458-751912540.png&quot;,
                &quot;name&quot;: &quot;Shrimp&quot;,
                &quot;price&quot;: &quot;5&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            }
        ]
    },
    {
        &quot;category&quot;: {
            &quot;id&quot;: 4,
            &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649938489-1442248704.png&quot;,
            &quot;name&quot;: &quot;Toppings&quot;
        },
        &quot;items&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;category&quot;: &quot;Toppings&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649939063-1911919153.png&quot;,
                &quot;name&quot;: &quot;Onion&quot;,
                &quot;price&quot;: &quot;2&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;category&quot;: &quot;Toppings&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649939087-657905889.png&quot;,
                &quot;name&quot;: &quot;Bell peper&quot;,
                &quot;price&quot;: &quot;5&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;category&quot;: &quot;Toppings&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649939106-723479123.png&quot;,
                &quot;name&quot;: &quot;Tomato&quot;,
                &quot;price&quot;: &quot;3&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;category&quot;: &quot;Toppings&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649939124-1682604317.png&quot;,
                &quot;name&quot;: &quot;Mushrooms&quot;,
                &quot;price&quot;: &quot;2&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;category&quot;: &quot;Toppings&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649939144-1955042652.png&quot;,
                &quot;name&quot;: &quot;Chili peper&quot;,
                &quot;price&quot;: &quot;1&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            }
        ]
    },
    {
        &quot;category&quot;: {
            &quot;id&quot;: 5,
            &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649938513-578878224.png&quot;,
            &quot;name&quot;: &quot;Base&quot;
        },
        &quot;items&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;category&quot;: &quot;Base&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649938722-155651557.png&quot;,
                &quot;name&quot;: &quot;mini&quot;,
                &quot;price&quot;: &quot;1&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;category&quot;: &quot;Base&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649938810-1674898215.png&quot;,
                &quot;name&quot;: &quot;medium&quot;,
                &quot;price&quot;: &quot;2&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;category&quot;: &quot;Base&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649938829-1462934484.png&quot;,
                &quot;name&quot;: &quot;Big&quot;,
                &quot;price&quot;: &quot;3&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            }
        ]
    },
    {
        &quot;category&quot;: {
            &quot;id&quot;: 6,
            &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649938525-886795885.png&quot;,
            &quot;name&quot;: &quot;sauce&quot;
        },
        &quot;items&quot;: [
            {
                &quot;id&quot;: 14,
                &quot;category&quot;: &quot;sauce&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649940048-459027458.png&quot;,
                &quot;name&quot;: &quot;Ketchub&quot;,
                &quot;price&quot;: &quot;1&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 15,
                &quot;category&quot;: &quot;sauce&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649940064-2042544871.png&quot;,
                &quot;name&quot;: &quot;Hot chili&quot;,
                &quot;price&quot;: &quot;2&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 16,
                &quot;category&quot;: &quot;sauce&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649940080-1194826427.png&quot;,
                &quot;name&quot;: &quot;Garlic&quot;,
                &quot;price&quot;: &quot;3&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 17,
                &quot;category&quot;: &quot;sauce&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649940103-397906002.png&quot;,
                &quot;name&quot;: &quot;Pesto&quot;,
                &quot;price&quot;: &quot;2&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 18,
                &quot;category&quot;: &quot;sauce&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649940160-1695644124.png&quot;,
                &quot;name&quot;: &quot;BBQ&quot;,
                &quot;price&quot;: &quot;1&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            }
        ]
    },
    {
        &quot;category&quot;: {
            &quot;id&quot;: 7,
            &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649938535-938803222.png&quot;,
            &quot;name&quot;: &quot;Cheese&quot;
        },
        &quot;items&quot;: [
            {
                &quot;id&quot;: 19,
                &quot;category&quot;: &quot;Cheese&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649940331-995937756.png&quot;,
                &quot;name&quot;: &quot;Gouda&quot;,
                &quot;price&quot;: &quot;3&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 20,
                &quot;category&quot;: &quot;Cheese&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649940345-418905076.png&quot;,
                &quot;name&quot;: &quot;Cheddar&quot;,
                &quot;price&quot;: &quot;4&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 21,
                &quot;category&quot;: &quot;Cheese&quot;,
                &quot;image&quot;: &quot;https://rabin.karo.studio/storage/files/1649940379-1221406781.png&quot;,
                &quot;name&quot;: &quot;Mozzarella&quot;,
                &quot;price&quot;: &quot;2&quot;,
                &quot;amount_1x&quot;: &quot;15&quot;,
                &quot;amount_2x&quot;: &quot;17&quot;,
                &quot;amount_3x&quot;: &quot;10&quot;
            }
        ]
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-selfmades" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-selfmades"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-selfmades"></code></pre>
</span>
<span id="execution-error-GETapi-panel-selfmades" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-selfmades"></code></pre>
</span>
<form id="form-GETapi-panel-selfmades" data-method="GET"
      data-path="api/panel/selfmades"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-selfmades', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-selfmades"
                    onclick="tryItOut('GETapi-panel-selfmades');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-selfmades"
                    onclick="cancelTryOut('GETapi-panel-selfmades');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-selfmades" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/selfmades</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-selfmades" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-selfmades"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>category_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="category_id"
               data-endpoint="GETapi-panel-selfmades"
               value="est"
               data-component="query" hidden>
    <br>
<p>to show selfmades of a category .</p>
            </p>
                    <p>
                <b><code>count</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="count"
               data-endpoint="GETapi-panel-selfmades"
               value="beatae"
               data-component="query" hidden>
    <br>
<p>to show last N selfmades  .</p>
            </p>
                </form>

            <h2 id="panel-selfmade-POSTapi-panel-selfmades">Create one selfmade</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>this will create a selfmade</p>

<span id="example-requests-POSTapi-panel-selfmades">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/panel/selfmades" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=dolorem" \
    --form "price=inventore" \
    --form "amount_1x=odit" \
    --form "amount_2x=dolorem" \
    --form "amount_3x=aspernatur" \
    --form "selfmade_category_id=2" \
    --form "image=@/tmp/phpqI1YWz" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/selfmades"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'dolorem');
body.append('price', 'inventore');
body.append('amount_1x', 'odit');
body.append('amount_2x', 'dolorem');
body.append('amount_3x', 'aspernatur');
body.append('selfmade_category_id', '2');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-panel-selfmades">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;category&quot;: &quot;topping&quot;,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649269072-916395255.png&quot;,
    &quot;name&quot;: &quot;oninon&quot;,
    &quot;price&quot;: &quot;17&quot;,
    &quot;amount_1x&quot;: &quot;2&quot;,
    &quot;amount_2x&quot;: &quot;13&quot;,
    &quot;amount_3x&quot;: &quot;3&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-panel-selfmades" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-panel-selfmades"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-panel-selfmades"></code></pre>
</span>
<span id="execution-error-POSTapi-panel-selfmades" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-panel-selfmades"></code></pre>
</span>
<form id="form-POSTapi-panel-selfmades" data-method="POST"
      data-path="api/panel/selfmades"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-panel-selfmades', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-panel-selfmades"
                    onclick="tryItOut('POSTapi-panel-selfmades');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-panel-selfmades"
                    onclick="cancelTryOut('POSTapi-panel-selfmades');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-panel-selfmades" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/panel/selfmades</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-panel-selfmades" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-panel-selfmades"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-panel-selfmades"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-panel-selfmades"
               value="dolorem"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="price"
               data-endpoint="POSTapi-panel-selfmades"
               value="inventore"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>amount_1x</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="amount_1x"
               data-endpoint="POSTapi-panel-selfmades"
               value="odit"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>amount_2x</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="amount_2x"
               data-endpoint="POSTapi-panel-selfmades"
               value="dolorem"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>amount_3x</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="amount_3x"
               data-endpoint="POSTapi-panel-selfmades"
               value="aspernatur"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>selfmade_category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="selfmade_category_id"
               data-endpoint="POSTapi-panel-selfmades"
               value="2"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-selfmade-GETapi-panel-selfmades--id-">Show one self made</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-selfmades--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/selfmades/2" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/selfmades/2"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-selfmades--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;category&quot;: &quot;topping&quot;,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649269072-916395255.png&quot;,
    &quot;name&quot;: &quot;oninon&quot;,
    &quot;price&quot;: &quot;17&quot;,
    &quot;amount_1x&quot;: &quot;2&quot;,
    &quot;amount_2x&quot;: &quot;13&quot;,
    &quot;amount_3x&quot;: &quot;3&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-selfmades--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-selfmades--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-selfmades--id-"></code></pre>
</span>
<span id="execution-error-GETapi-panel-selfmades--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-selfmades--id-"></code></pre>
</span>
<form id="form-GETapi-panel-selfmades--id-" data-method="GET"
      data-path="api/panel/selfmades/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-selfmades--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-selfmades--id-"
                    onclick="tryItOut('GETapi-panel-selfmades--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-selfmades--id-"
                    onclick="cancelTryOut('GETapi-panel-selfmades--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-selfmades--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/selfmades/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-selfmades--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-selfmades--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-panel-selfmades--id-"
               value="2"
               data-component="url" hidden>
    <br>
<p>The ID of the selfmade.</p>
            </p>
                    </form>

            <h2 id="panel-selfmade-PUTapi-panel-selfmades--id-">Edit self made</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-panel-selfmades--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://rabin.karo.studio/api/panel/selfmades/18" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "selfmade_category_id=8" \
    --form "image=@/tmp/phpuP7zXz" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/selfmades/18"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('selfmade_category_id', '8');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-panel-selfmades--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;category&quot;: &quot;topping&quot;,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649269072-916395255.png&quot;,
    &quot;name&quot;: &quot;oninon&quot;,
    &quot;price&quot;: &quot;17&quot;,
    &quot;amount_1x&quot;: &quot;2&quot;,
    &quot;amount_2x&quot;: &quot;13&quot;,
    &quot;amount_3x&quot;: &quot;3&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-panel-selfmades--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-panel-selfmades--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-panel-selfmades--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-panel-selfmades--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-panel-selfmades--id-"></code></pre>
</span>
<form id="form-PUTapi-panel-selfmades--id-" data-method="PUT"
      data-path="api/panel/selfmades/{id}"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-panel-selfmades--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-panel-selfmades--id-"
                    onclick="tryItOut('PUTapi-panel-selfmades--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-panel-selfmades--id-"
                    onclick="cancelTryOut('PUTapi-panel-selfmades--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-panel-selfmades--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/panel/selfmades/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/panel/selfmades/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-panel-selfmades--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-panel-selfmades--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-panel-selfmades--id-"
               value="18"
               data-component="url" hidden>
    <br>
<p>The ID of the selfmade.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="PUTapi-panel-selfmades--id-"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-panel-selfmades--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="price"
               data-endpoint="PUTapi-panel-selfmades--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>amount_1x</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="amount_1x"
               data-endpoint="PUTapi-panel-selfmades--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>amount_2x</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="amount_2x"
               data-endpoint="PUTapi-panel-selfmades--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>amount_3x</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="amount_3x"
               data-endpoint="PUTapi-panel-selfmades--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>selfmade_category_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="selfmade_category_id"
               data-endpoint="PUTapi-panel-selfmades--id-"
               value="8"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-selfmade-DELETEapi-panel-selfmades--id-">Delete one self made</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-panel-selfmades--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/panel/selfmades/15" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/selfmades/15"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-panel-selfmades--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;selfmade deleted successfully&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-panel-selfmades--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-panel-selfmades--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-panel-selfmades--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-panel-selfmades--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-panel-selfmades--id-"></code></pre>
</span>
<form id="form-DELETEapi-panel-selfmades--id-" data-method="DELETE"
      data-path="api/panel/selfmades/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-panel-selfmades--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-panel-selfmades--id-"
                    onclick="tryItOut('DELETEapi-panel-selfmades--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-panel-selfmades--id-"
                    onclick="cancelTryOut('DELETEapi-panel-selfmades--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-panel-selfmades--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/panel/selfmades/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-panel-selfmades--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-panel-selfmades--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-panel-selfmades--id-"
               value="15"
               data-component="url" hidden>
    <br>
<p>The ID of the selfmade.</p>
            </p>
                    </form>

        <h1 id="panel-selfmade-category">Panel Selfmade Category</h1>

    

            <h2 id="panel-selfmade-category-GETapi-panel-selfmade_category">Show All Selfmade&#039;s Category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-selfmade_category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/selfmade_category" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/selfmade_category"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-selfmade_category">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266130-257876169.png&quot;,
        &quot;name&quot;: &quot;topping&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266284-1299351634.png&quot;,
        &quot;name&quot;: &quot;topping&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266590-1689863156.png&quot;,
        &quot;name&quot;: &quot;topping&quot;
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-selfmade_category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-selfmade_category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-selfmade_category"></code></pre>
</span>
<span id="execution-error-GETapi-panel-selfmade_category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-selfmade_category"></code></pre>
</span>
<form id="form-GETapi-panel-selfmade_category" data-method="GET"
      data-path="api/panel/selfmade_category"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-selfmade_category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-selfmade_category"
                    onclick="tryItOut('GETapi-panel-selfmade_category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-selfmade_category"
                    onclick="cancelTryOut('GETapi-panel-selfmade_category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-selfmade_category" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/selfmade_category</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-selfmade_category" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-selfmade_category"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="panel-selfmade-category-POSTapi-panel-selfmade_category">Create selfmade category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>this will create a category in selfmade</p>

<span id="example-requests-POSTapi-panel-selfmade_category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/panel/selfmade_category" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=esse" \
    --form "image=@/tmp/phpDrI1Tx" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/selfmade_category"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'esse');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-panel-selfmade_category">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266284-1299351634.png&quot;,
    &quot;name&quot;: &quot;topping&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-panel-selfmade_category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-panel-selfmade_category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-panel-selfmade_category"></code></pre>
</span>
<span id="execution-error-POSTapi-panel-selfmade_category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-panel-selfmade_category"></code></pre>
</span>
<form id="form-POSTapi-panel-selfmade_category" data-method="POST"
      data-path="api/panel/selfmade_category"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-panel-selfmade_category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-panel-selfmade_category"
                    onclick="tryItOut('POSTapi-panel-selfmade_category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-panel-selfmade_category"
                    onclick="cancelTryOut('POSTapi-panel-selfmade_category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-panel-selfmade_category" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/panel/selfmade_category</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-panel-selfmade_category" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-panel-selfmade_category"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-panel-selfmade_category"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-panel-selfmade_category"
               value="esse"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="type"
               data-endpoint="POSTapi-panel-selfmade_category"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-selfmade-category-GETapi-panel-selfmade_category--id-">Show one selfmade&#039;s category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-selfmade_category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/selfmade_category/aut" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/selfmade_category/aut"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-selfmade_category--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266130-257876169.png&quot;,
    &quot;name&quot;: &quot;topping&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-selfmade_category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-selfmade_category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-selfmade_category--id-"></code></pre>
</span>
<span id="execution-error-GETapi-panel-selfmade_category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-selfmade_category--id-"></code></pre>
</span>
<form id="form-GETapi-panel-selfmade_category--id-" data-method="GET"
      data-path="api/panel/selfmade_category/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-selfmade_category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-selfmade_category--id-"
                    onclick="tryItOut('GETapi-panel-selfmade_category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-selfmade_category--id-"
                    onclick="cancelTryOut('GETapi-panel-selfmade_category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-selfmade_category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/selfmade_category/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-selfmade_category--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-selfmade_category--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-panel-selfmade_category--id-"
               value="aut"
               data-component="url" hidden>
    <br>
<p>The ID of the selfmade category.</p>
            </p>
                    </form>

            <h2 id="panel-selfmade-category-PUTapi-panel-selfmade_category--id-">Edit selfmade&#039;s category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-panel-selfmade_category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://rabin.karo.studio/api/panel/selfmade_category/amet" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/selfmade_category/amet"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-panel-selfmade_category--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266130-257876169.png&quot;,
    &quot;name&quot;: &quot;topping&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-panel-selfmade_category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-panel-selfmade_category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-panel-selfmade_category--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-panel-selfmade_category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-panel-selfmade_category--id-"></code></pre>
</span>
<form id="form-PUTapi-panel-selfmade_category--id-" data-method="PUT"
      data-path="api/panel/selfmade_category/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-panel-selfmade_category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-panel-selfmade_category--id-"
                    onclick="tryItOut('PUTapi-panel-selfmade_category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-panel-selfmade_category--id-"
                    onclick="cancelTryOut('PUTapi-panel-selfmade_category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-panel-selfmade_category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/panel/selfmade_category/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/panel/selfmade_category/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-panel-selfmade_category--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-panel-selfmade_category--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="PUTapi-panel-selfmade_category--id-"
               value="amet"
               data-component="url" hidden>
    <br>
<p>The ID of the selfmade category.</p>
            </p>
                    </form>

            <h2 id="panel-selfmade-category-DELETEapi-panel-selfmade_category--id-">Delete selfmade&#039;s category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>@response scenario=success {&quot;message&quot; : &quot;selfmade category deleted successfully&quot;}</p>

<span id="example-requests-DELETEapi-panel-selfmade_category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/panel/selfmade_category/magni" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/selfmade_category/magni"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-panel-selfmade_category--id-">
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-panel-selfmade_category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-panel-selfmade_category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-panel-selfmade_category--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-panel-selfmade_category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-panel-selfmade_category--id-"></code></pre>
</span>
<form id="form-DELETEapi-panel-selfmade_category--id-" data-method="DELETE"
      data-path="api/panel/selfmade_category/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-panel-selfmade_category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-panel-selfmade_category--id-"
                    onclick="tryItOut('DELETEapi-panel-selfmade_category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-panel-selfmade_category--id-"
                    onclick="cancelTryOut('DELETEapi-panel-selfmade_category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-panel-selfmade_category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/panel/selfmade_category/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-panel-selfmade_category--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-panel-selfmade_category--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-panel-selfmade_category--id-"
               value="magni"
               data-component="url" hidden>
    <br>
<p>The ID of the selfmade category.</p>
            </p>
                    </form>

        <h1 id="panel-users">Panel Users</h1>

    

            <h2 id="panel-users-GETapi-panel-client">Show All Users</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-client">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/client?count=non" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/client"
);

const params = {
    "count": "non",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-client">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 2,
        &quot;image&quot;: &quot;&quot;,
        &quot;name&quot;: &quot;zeinab&quot;,
        &quot;phone&quot;: &quot;9129612721&quot;,
        &quot;email&quot;: &quot;zeinab@gmail.com&quot;,
        &quot;orders&quot;: []
    },
    {
        &quot;id&quot;: 3,
        &quot;image&quot;: &quot;&quot;,
        &quot;name&quot;: &quot;zeinab&quot;,
        &quot;phone&quot;: &quot;9129612722&quot;,
        &quot;email&quot;: &quot;yari@gmail.com&quot;,
        &quot;orders&quot;: []
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-client" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-client"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-client"></code></pre>
</span>
<span id="execution-error-GETapi-panel-client" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-client"></code></pre>
</span>
<form id="form-GETapi-panel-client" data-method="GET"
      data-path="api/panel/client"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-client', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-client"
                    onclick="tryItOut('GETapi-panel-client');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-client"
                    onclick="cancelTryOut('GETapi-panel-client');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-client" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/client</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-client" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-client"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>count</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="count"
               data-endpoint="GETapi-panel-client"
               value="non"
               data-component="query" hidden>
    <br>

            </p>
                </form>

            <h2 id="panel-users-POSTapi-panel-client">Create User</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-panel-client">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/panel/client" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=voluptatem" \
    --form "phone=14" \
    --form "email=eabbott@example.com" \
    --form "country_id=15" \
    --form "password=wjq" \
    --form "re_try_Password=quae" \
    --form "image=@/tmp/phpVjcdMz" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/client"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'voluptatem');
body.append('phone', '14');
body.append('email', 'eabbott@example.com');
body.append('country_id', '15');
body.append('password', 'wjq');
body.append('re_try_Password', 'quae');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-panel-client">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;image&quot;: &quot;&quot;,
    &quot;name&quot;: &quot;zeinab&quot;,
    &quot;phone&quot;: &quot;9129612721&quot;,
    &quot;email&quot;: &quot;zeinab@gmail.com&quot;,
    &quot;orders&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected country id is invalid. (and 2 more errors)&quot;,
    &quot;errors&quot;: {
        &quot;country_id&quot;: [
            &quot;The selected country id is invalid.&quot;
        ],
        &quot;password&quot;: [
            &quot;The password must be at least 8.&quot;
        ],
        &quot;re_try_Password&quot;: [
            &quot;The re try  password and password must match.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-panel-client" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-panel-client"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-panel-client"></code></pre>
</span>
<span id="execution-error-POSTapi-panel-client" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-panel-client"></code></pre>
</span>
<form id="form-POSTapi-panel-client" data-method="POST"
      data-path="api/panel/client"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-panel-client', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-panel-client"
                    onclick="tryItOut('POSTapi-panel-client');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-panel-client"
                    onclick="cancelTryOut('POSTapi-panel-client');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-panel-client" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/panel/client</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-panel-client" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-panel-client"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-panel-client"
               value="voluptatem"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="phone"
               data-endpoint="POSTapi-panel-client"
               value="14"
               data-component="body" hidden>
    <br>
<p>This field is required when none of <code>email</code> are present.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-panel-client"
               value="eabbott@example.com"
               data-component="body" hidden>
    <br>
<p>This field is required when none of <code>phone</code> are present.  Must be a valid email address.</p>
        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-panel-client"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>country_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="country_id"
               data-endpoint="POSTapi-panel-client"
               value="15"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-panel-client"
               value="wjq"
               data-component="body" hidden>
    <br>
<p>Must be at least 8 characters.</p>
        </p>
                <p>
            <b><code>re_try_Password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="re_try_Password"
               data-endpoint="POSTapi-panel-client"
               value="quae"
               data-component="body" hidden>
    <br>
<p>The value and <code>password</code> must match.</p>
        </p>
        </form>

            <h2 id="panel-users-GETapi-panel-client--id-">Show one user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-client--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/client/9" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/client/9"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-client--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;image&quot;: &quot;&quot;,
    &quot;name&quot;: &quot;zeinab&quot;,
    &quot;phone&quot;: &quot;9129612721&quot;,
    &quot;email&quot;: &quot;zeinab@gmail.com&quot;,
    &quot;orders&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-client--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-client--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-client--id-"></code></pre>
</span>
<span id="execution-error-GETapi-panel-client--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-client--id-"></code></pre>
</span>
<form id="form-GETapi-panel-client--id-" data-method="GET"
      data-path="api/panel/client/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-client--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-client--id-"
                    onclick="tryItOut('GETapi-panel-client--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-client--id-"
                    onclick="cancelTryOut('GETapi-panel-client--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-client--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/client/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-client--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-client--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-panel-client--id-"
               value="9"
               data-component="url" hidden>
    <br>
<p>The ID of the client.</p>
            </p>
                    </form>

            <h2 id="panel-users-PUTapi-panel-client--id-">Edit User</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-panel-client--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://rabin.karo.studio/api/panel/client/12" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "phone=3" \
    --form "email=shanny.hartmann@example.net" \
    --form "country_id=2" \
    --form "image=@/tmp/phpgORZ1A" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/client/12"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('phone', '3');
body.append('email', 'shanny.hartmann@example.net');
body.append('country_id', '2');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-panel-client--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;image&quot;: &quot;&quot;,
    &quot;name&quot;: &quot;zeinab&quot;,
    &quot;phone&quot;: &quot;9129612721&quot;,
    &quot;email&quot;: &quot;zeinab@gmail.com&quot;,
    &quot;orders&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected country id is invalid. (and 2 more errors)&quot;,
    &quot;errors&quot;: {
        &quot;country_id&quot;: [
            &quot;The selected country id is invalid.&quot;
        ],
        &quot;password&quot;: [
            &quot;The password must be at least 8.&quot;
        ],
        &quot;re_try_Password&quot;: [
            &quot;The re try  password and password must match.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-panel-client--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-panel-client--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-panel-client--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-panel-client--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-panel-client--id-"></code></pre>
</span>
<form id="form-PUTapi-panel-client--id-" data-method="PUT"
      data-path="api/panel/client/{id}"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-panel-client--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-panel-client--id-"
                    onclick="tryItOut('PUTapi-panel-client--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-panel-client--id-"
                    onclick="cancelTryOut('PUTapi-panel-client--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-panel-client--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/panel/client/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/panel/client/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-panel-client--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-panel-client--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-panel-client--id-"
               value="12"
               data-component="url" hidden>
    <br>
<p>The ID of the client.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-panel-client--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="phone"
               data-endpoint="PUTapi-panel-client--id-"
               value="3"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="PUTapi-panel-client--id-"
               value="shanny.hartmann@example.net"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="PUTapi-panel-client--id-"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>country_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="country_id"
               data-endpoint="PUTapi-panel-client--id-"
               value="2"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-users-DELETEapi-panel-client--id-">Delete one user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-panel-client--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/panel/client/6" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/client/6"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-panel-client--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;user deleted successfully&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-panel-client--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-panel-client--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-panel-client--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-panel-client--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-panel-client--id-"></code></pre>
</span>
<form id="form-DELETEapi-panel-client--id-" data-method="DELETE"
      data-path="api/panel/client/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-panel-client--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-panel-client--id-"
                    onclick="tryItOut('DELETEapi-panel-client--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-panel-client--id-"
                    onclick="cancelTryOut('DELETEapi-panel-client--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-panel-client--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/panel/client/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-panel-client--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-panel-client--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-panel-client--id-"
               value="6"
               data-component="url" hidden>
    <br>
<p>The ID of the client.</p>
            </p>
                    </form>

        <h1 id="password">Password</h1>

    <p>APIs for  Password</p>

            <h2 id="password-POSTapi-change_password--reset_link-">Change Password</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>send reset link with new password and confirm password</p>

<span id="example-requests-POSTapi-change_password--reset_link-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/change_password/nulla" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"new_password\": \"fpbcgoff\",
    \"confirm_password\": \"excepturi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/change_password/nulla"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "new_password": "fpbcgoff",
    "confirm_password": "excepturi"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-change_password--reset_link-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;password changed successfully&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, user not found (wrong reset link)):</p>
        </blockquote>
                <pre>

<code class="language-json">user not found (wrong reset link)</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The new password must be at least 8. (and 1 more error)&quot;,
    &quot;errors&quot;: {
        &quot;new_password&quot;: [
            &quot;The new password must be at least 8.&quot;
        ],
        &quot;confirm_password&quot;: [
            &quot;The confirm password and password must match.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-change_password--reset_link-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-change_password--reset_link-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-change_password--reset_link-"></code></pre>
</span>
<span id="execution-error-POSTapi-change_password--reset_link-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-change_password--reset_link-"></code></pre>
</span>
<form id="form-POSTapi-change_password--reset_link-" data-method="POST"
      data-path="api/change_password/{reset_link}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-change_password--reset_link-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-change_password--reset_link-"
                    onclick="tryItOut('POSTapi-change_password--reset_link-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-change_password--reset_link-"
                    onclick="cancelTryOut('POSTapi-change_password--reset_link-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-change_password--reset_link-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/change_password/{reset_link}</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-change_password--reset_link-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-change_password--reset_link-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>reset_link</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="reset_link"
               data-endpoint="POSTapi-change_password--reset_link-"
               value="nulla"
               data-component="url" hidden>
    <br>

            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>new_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="new_password"
               data-endpoint="POSTapi-change_password--reset_link-"
               value="fpbcgoff"
               data-component="body" hidden>
    <br>
<p>Must be at least 8 characters.</p>
        </p>
                <p>
            <b><code>confirm_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="confirm_password"
               data-endpoint="POSTapi-change_password--reset_link-"
               value="excepturi"
               data-component="body" hidden>
    <br>
<p>The value and <code>new_password</code> must match.</p>
        </p>
        </form>

            <h2 id="password-POSTapi-forget_password">Forget password</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>send link for forget password</p>

<span id="example-requests-POSTapi-forget_password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/forget_password" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/forget_password"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-forget_password">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{&quot;message&quot; :&#039;reset link sent successfully&#039;}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected email is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The selected email is invalid.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-forget_password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-forget_password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-forget_password"></code></pre>
</span>
<span id="execution-error-POSTapi-forget_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-forget_password"></code></pre>
</span>
<form id="form-POSTapi-forget_password" data-method="POST"
      data-path="api/forget_password"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-forget_password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-forget_password"
                    onclick="tryItOut('POSTapi-forget_password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-forget_password"
                    onclick="cancelTryOut('POSTapi-forget_password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-forget_password" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/forget_password</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-forget_password" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-forget_password"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="phone"
               data-endpoint="POSTapi-forget_password"
               value=""
               data-component="body" hidden>
    <br>
<p>This field is required when none of <code>email</code> are present.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-forget_password"
               value=""
               data-component="body" hidden>
    <br>
<p>This field is required when none of <code>phone</code> are present.</p>
        </p>
        </form>

            <h2 id="password-POSTapi-current_password">Current password</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Check if current password is correct</p>
<aside class="success">if password is correct this will send you a link that you should use in change_password</aside>

<span id="example-requests-POSTapi-current_password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/current_password" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"current_password\": \"vitae\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/current_password"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "current_password": "vitae"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-current_password">
            <blockquote>
            <p>Example response (200, success{):</p>
        </blockquote>
                <pre>

<code class="language-json">&quot;reset_link&quot;: &quot;WbEITkE4xx&quot;}</code>
 </pre>
            <blockquote>
            <p>Example response (400, wrong password):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;wrong password&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-current_password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-current_password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-current_password"></code></pre>
</span>
<span id="execution-error-POSTapi-current_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-current_password"></code></pre>
</span>
<form id="form-POSTapi-current_password" data-method="POST"
      data-path="api/current_password"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-current_password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-current_password"
                    onclick="tryItOut('POSTapi-current_password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-current_password"
                    onclick="cancelTryOut('POSTapi-current_password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-current_password" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/current_password</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-current_password" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-current_password"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>current_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="current_password"
               data-endpoint="POSTapi-current_password"
               value="vitae"
               data-component="body" hidden>
    <br>

        </p>
        </form>

        <h1 id="pizza-selfmade">Pizza (selfmade)</h1>

    <p>APIs for create selfmade pizza</p>

            <h2 id="pizza-selfmade-GETapi-pizza">Show All pizzas</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint shows all selfmade pizzas of login user</p>

<span id="example-requests-GETapi-pizza">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/pizza" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/pizza"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pizza">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;soluta&quot;,
        &quot;price&quot;: &quot;5&quot;,
        &quot;selfmades&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;category&quot;: &quot;topping&quot;,
                &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649269045-111627720.png&quot;,
                &quot;name&quot;: &quot;oninon&quot;,
                &quot;price&quot;: &quot;17&quot;,
                &quot;amount_1x&quot;: &quot;2&quot;,
                &quot;amount_2x&quot;: &quot;13&quot;,
                &quot;amount_3x&quot;: &quot;3&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;category&quot;: &quot;topping&quot;,
                &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649269072-916395255.png&quot;,
                &quot;name&quot;: &quot;oninon&quot;,
                &quot;price&quot;: &quot;17&quot;,
                &quot;amount_1x&quot;: &quot;2&quot;,
                &quot;amount_2x&quot;: &quot;13&quot;,
                &quot;amount_3x&quot;: &quot;3&quot;
            }
        ]
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pizza" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pizza"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pizza"></code></pre>
</span>
<span id="execution-error-GETapi-pizza" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pizza"></code></pre>
</span>
<form id="form-GETapi-pizza" data-method="GET"
      data-path="api/pizza"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pizza', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pizza"
                    onclick="tryItOut('GETapi-pizza');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pizza"
                    onclick="cancelTryOut('GETapi-pizza');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pizza" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pizza</code></b>
        </p>
                <p>
            <label id="auth-GETapi-pizza" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-pizza"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="pizza-selfmade-POSTapi-pizza">Create selfmade pizza</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Use this when user makes a selfmade pizza</p>
<aside class="success">Send id of selfmade's items in array</aside>

<span id="example-requests-POSTapi-pizza">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/pizza" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=accusamus" \
    --form "selfmades[]=iusto" \
    --form "image=@/tmp/phpzQpZJA" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/pizza"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'accusamus');
body.append('selfmades[]', 'iusto');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-pizza">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;name&quot;: &quot;exercitationem&quot;,
    &quot;price&quot;: 4,
    &quot;selfmades&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;category&quot;: &quot;topping&quot;,
            &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649269045-111627720.png&quot;,
            &quot;name&quot;: &quot;oninon&quot;,
            &quot;price&quot;: &quot;17&quot;,
            &quot;amount_1x&quot;: &quot;2&quot;,
            &quot;amount_2x&quot;: &quot;13&quot;,
            &quot;amount_3x&quot;: &quot;3&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;category&quot;: &quot;topping&quot;,
            &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649269072-916395255.png&quot;,
            &quot;name&quot;: &quot;oninon&quot;,
            &quot;price&quot;: &quot;17&quot;,
            &quot;amount_1x&quot;: &quot;2&quot;,
            &quot;amount_2x&quot;: &quot;13&quot;,
            &quot;amount_3x&quot;: &quot;3&quot;
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{&quot;message&quot;: &quot;Unauthenticated.&quot;}

* @response status=422 scenario=&quot;validation error&quot;
{
&quot;message&quot;: &quot;The selfmades field is required.&quot;,
&quot;errors&quot;: {
&quot;selfmades&quot;: [
&quot;The selfmades field is required.&quot;
]
}
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-pizza" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-pizza"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pizza"></code></pre>
</span>
<span id="execution-error-POSTapi-pizza" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pizza"></code></pre>
</span>
<form id="form-POSTapi-pizza" data-method="POST"
      data-path="api/pizza"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-pizza', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-pizza"
                    onclick="tryItOut('POSTapi-pizza');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-pizza"
                    onclick="cancelTryOut('POSTapi-pizza');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-pizza" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/pizza</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-pizza" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-pizza"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-pizza"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-pizza"
               value="accusamus"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>selfmades</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
                <input type="text"
               name="selfmades[0]"
               data-endpoint="POSTapi-pizza"
               data-component="body" hidden>
        <input type="text"
               name="selfmades[1]"
               data-endpoint="POSTapi-pizza"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="pizza-selfmade-GETapi-pizza--id-">Show One selfmade pizza</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint shows One selfmade pizza</p>

<span id="example-requests-GETapi-pizza--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/pizza/17" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/pizza/17"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pizza--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;soluta&quot;,
        &quot;price&quot;: &quot;5&quot;,
        &quot;selfmades&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;category&quot;: &quot;topping&quot;,
                &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649269045-111627720.png&quot;,
                &quot;name&quot;: &quot;oninon&quot;,
                &quot;price&quot;: &quot;17&quot;,
                &quot;amount_1x&quot;: &quot;2&quot;,
                &quot;amount_2x&quot;: &quot;13&quot;,
                &quot;amount_3x&quot;: &quot;3&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;category&quot;: &quot;topping&quot;,
                &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649269072-916395255.png&quot;,
                &quot;name&quot;: &quot;oninon&quot;,
                &quot;price&quot;: &quot;17&quot;,
                &quot;amount_1x&quot;: &quot;2&quot;,
                &quot;amount_2x&quot;: &quot;13&quot;,
                &quot;amount_3x&quot;: &quot;3&quot;
            }
        ]
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pizza--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pizza--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pizza--id-"></code></pre>
</span>
<span id="execution-error-GETapi-pizza--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pizza--id-"></code></pre>
</span>
<form id="form-GETapi-pizza--id-" data-method="GET"
      data-path="api/pizza/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pizza--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pizza--id-"
                    onclick="tryItOut('GETapi-pizza--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pizza--id-"
                    onclick="cancelTryOut('GETapi-pizza--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pizza--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pizza/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-pizza--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-pizza--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-pizza--id-"
               value="17"
               data-component="url" hidden>
    <br>
<p>The ID of the pizza.</p>
            </p>
                    </form>

            <h2 id="pizza-selfmade-DELETEapi-pizza--id-">Delete One selfmade pizza</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint deletes One selfmade pizza</p>

<span id="example-requests-DELETEapi-pizza--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/pizza/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/pizza/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-pizza--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;pizza deleted successfully&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-pizza--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-pizza--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-pizza--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-pizza--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-pizza--id-"></code></pre>
</span>
<form id="form-DELETEapi-pizza--id-" data-method="DELETE"
      data-path="api/pizza/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-pizza--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-pizza--id-"
                    onclick="tryItOut('DELETEapi-pizza--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-pizza--id-"
                    onclick="cancelTryOut('DELETEapi-pizza--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-pizza--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/pizza/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-pizza--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-pizza--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-pizza--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the pizza.</p>
            </p>
                    </form>

        <h1 id="self-made">Self made</h1>

    <p>APIs for Self made</p>

            <h2 id="self-made-GETapi-selfmade">Show all self made&#039;s categoty</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint Shows all self made's categoty with image like cheese</p>

<span id="example-requests-GETapi-selfmade">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/selfmade" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/selfmade"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-selfmade">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266130-257876169.png&quot;,
        &quot;name&quot;: &quot;topping&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266284-1299351634.png&quot;,
        &quot;name&quot;: &quot;topping&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649266590-1689863156.png&quot;,
        &quot;name&quot;: &quot;topping&quot;
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-selfmade" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-selfmade"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-selfmade"></code></pre>
</span>
<span id="execution-error-GETapi-selfmade" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-selfmade"></code></pre>
</span>
<form id="form-GETapi-selfmade" data-method="GET"
      data-path="api/selfmade"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-selfmade', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-selfmade"
                    onclick="tryItOut('GETapi-selfmade');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-selfmade"
                    onclick="cancelTryOut('GETapi-selfmade');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-selfmade" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/selfmade</code></b>
        </p>
                <p>
            <label id="auth-GETapi-selfmade" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-selfmade"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="self-made-GETapi-selfmade--id-">Show self mades of a category</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint sends you self mades of the specific category.</p>
<aside class="success">Send category's id.</aside>

<span id="example-requests-GETapi-selfmade--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/selfmade/13" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/selfmade/13"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-selfmade--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;category&quot;: &quot;topping&quot;,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649269045-111627720.png&quot;,
        &quot;name&quot;: &quot;oninon&quot;,
        &quot;price&quot;: &quot;17&quot;,
        &quot;amount_1x&quot;: &quot;2&quot;,
        &quot;amount_2x&quot;: &quot;13&quot;,
        &quot;amount_3x&quot;: &quot;3&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;category&quot;: &quot;topping&quot;,
        &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/files/1649269072-916395255.png&quot;,
        &quot;name&quot;: &quot;oninon&quot;,
        &quot;price&quot;: &quot;17&quot;,
        &quot;amount_1x&quot;: &quot;2&quot;,
        &quot;amount_2x&quot;: &quot;13&quot;,
        &quot;amount_3x&quot;: &quot;3&quot;
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-selfmade--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-selfmade--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-selfmade--id-"></code></pre>
</span>
<span id="execution-error-GETapi-selfmade--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-selfmade--id-"></code></pre>
</span>
<form id="form-GETapi-selfmade--id-" data-method="GET"
      data-path="api/selfmade/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-selfmade--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-selfmade--id-"
                    onclick="tryItOut('GETapi-selfmade--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-selfmade--id-"
                    onclick="cancelTryOut('GETapi-selfmade--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-selfmade--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/selfmade/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-selfmade--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-selfmade--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-selfmade--id-"
               value="13"
               data-component="url" hidden>
    <br>
<p>The ID of the selfmade.</p>
            </p>
                    </form>

        <h1 id="users">Users</h1>

    <p>APIs for managing users</p>

            <h2 id="users-POSTapi-login">Login</h2>

<p>
</p>

<p>Login with email or phone</p>

<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"password\": \"veritatis\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "veritatis"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">token = &quot;TOKEN_EXAMPLE&quot;</code>
 </pre>
            <blockquote>
            <p>Example response (403, Not Verify):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;your account is not verify , the code has been sent to your phone and your email&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected phone is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;phone&quot;: [
            &quot;The selected phone is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, wrong password):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;wrong password&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="phone"
               data-endpoint="POSTapi-login"
               value=""
               data-component="body" hidden>
    <br>
<p>This field is required when none of <code>email</code> are present.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-login"
               value=""
               data-component="body" hidden>
    <br>
<p>This field is required when none of <code>phone</code> are present.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-login"
               value="veritatis"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="users-POSTapi-register">Register</h2>

<p>
</p>

<p>This endpoint creates one user</p>

<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/register" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=quis" \
    --form "phone=10" \
    --form "email=mlang@example.org" \
    --form "country_id=1" \
    --form "password=w" \
    --form "re_try_Password=eius" \
    --form "image=@/tmp/phpJ2mzLA" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/register"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'quis');
body.append('phone', '10');
body.append('email', 'mlang@example.org');
body.append('country_id', '1');
body.append('password', 'w');
body.append('re_try_Password', 'eius');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">token = &quot;TOKEN_EXAMPLE&quot;</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected country id is invalid. (and 2 more errors)&quot;,
    &quot;errors&quot;: {
        &quot;country_id&quot;: [
            &quot;The selected country id is invalid.&quot;
        ],
        &quot;password&quot;: [
            &quot;The password must be at least 8.&quot;
        ],
        &quot;re_try_Password&quot;: [
            &quot;The re try  password and password must match.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-register"
               value="quis"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="phone"
               data-endpoint="POSTapi-register"
               value="10"
               data-component="body" hidden>
    <br>
<p>This field is required when none of <code>email</code> are present.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-register"
               value="mlang@example.org"
               data-component="body" hidden>
    <br>
<p>This field is required when none of <code>phone</code> are present.  Must be a valid email address.</p>
        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-register"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>country_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="country_id"
               data-endpoint="POSTapi-register"
               value="1"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-register"
               value="w"
               data-component="body" hidden>
    <br>
<p>Must be at least 8 characters.</p>
        </p>
                <p>
            <b><code>re_try_Password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="re_try_Password"
               data-endpoint="POSTapi-register"
               value="eius"
               data-component="body" hidden>
    <br>
<p>The value and <code>password</code> must match.</p>
        </p>
        </form>

            <h2 id="users-POSTapi-edit_user">Edit User</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-edit_user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/edit_user" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "phone=2" \
    --form "email=stevie36@example.org" \
    --form "country_id=17" \
    --form "image=@/tmp/phpGdaTuz" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/edit_user"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('phone', '2');
body.append('email', 'stevie36@example.org');
body.append('country_id', '17');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-edit_user">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;image&quot;: &quot;&quot;,
    &quot;name&quot;: &quot;zeinab&quot;,
    &quot;phone&quot;: &quot;9129612721&quot;,
    &quot;email&quot;: &quot;zeinab@gmail.com&quot;,
    &quot;orders&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected country id is invalid. (and 2 more errors)&quot;,
    &quot;errors&quot;: {
        &quot;country_id&quot;: [
            &quot;The selected country id is invalid.&quot;
        ],
        &quot;password&quot;: [
            &quot;The password must be at least 8.&quot;
        ],
        &quot;re_try_Password&quot;: [
            &quot;The re try  password and password must match.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-edit_user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-edit_user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-edit_user"></code></pre>
</span>
<span id="execution-error-POSTapi-edit_user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-edit_user"></code></pre>
</span>
<form id="form-POSTapi-edit_user" data-method="POST"
      data-path="api/edit_user"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-edit_user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-edit_user"
                    onclick="tryItOut('POSTapi-edit_user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-edit_user"
                    onclick="cancelTryOut('POSTapi-edit_user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-edit_user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/edit_user</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-edit_user" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-edit_user"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-edit_user"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="phone"
               data-endpoint="POSTapi-edit_user"
               value="2"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-edit_user"
               value="stevie36@example.org"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-edit_user"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>country_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="country_id"
               data-endpoint="POSTapi-edit_user"
               value="17"
               data-component="body" hidden>
    <br>

        </p>
        </form>

        <h1 id="verify">Verify</h1>

    <p>APIs for Verification</p>

            <h2 id="verify-GETapi-verify_email--code-">Verify email</h2>

<p>
</p>

<p>Verify email</p>

<span id="example-requests-GETapi-verify_email--code-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/verify_email/magni" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/verify_email/magni"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-verify_email--code-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">email verified successfully</code>
 </pre>
            <blockquote>
            <p>Example response (400, Not Correct):</p>
        </blockquote>
                <pre>

<code class="language-json">The code is not correct</code>
 </pre>
    </span>
<span id="execution-results-GETapi-verify_email--code-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-verify_email--code-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-verify_email--code-"></code></pre>
</span>
<span id="execution-error-GETapi-verify_email--code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-verify_email--code-"></code></pre>
</span>
<form id="form-GETapi-verify_email--code-" data-method="GET"
      data-path="api/verify_email/{code}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-verify_email--code-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-verify_email--code-"
                    onclick="tryItOut('GETapi-verify_email--code-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-verify_email--code-"
                    onclick="cancelTryOut('GETapi-verify_email--code-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-verify_email--code-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/verify_email/{code}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="code"
               data-endpoint="GETapi-verify_email--code-"
               value="magni"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="verify-POSTapi-verify_phone">Verify Phone</h2>

<p>
</p>

<p>Verify phone</p>

<span id="example-requests-POSTapi-verify_phone">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/verify_phone" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"phone\": 11,
    \"code\": \"rem\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/verify_phone"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone": 11,
    "code": "rem"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-verify_phone">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">phone verified successfully</code>
 </pre>
            <blockquote>
            <p>Example response (400, Not Correct):</p>
        </blockquote>
                <pre>

<code class="language-json">The code is not correct</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-verify_phone" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-verify_phone"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-verify_phone"></code></pre>
</span>
<span id="execution-error-POSTapi-verify_phone" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-verify_phone"></code></pre>
</span>
<form id="form-POSTapi-verify_phone" data-method="POST"
      data-path="api/verify_phone"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-verify_phone', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-verify_phone"
                    onclick="tryItOut('POSTapi-verify_phone');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-verify_phone"
                    onclick="cancelTryOut('POSTapi-verify_phone');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-verify_phone" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/verify_phone</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="phone"
               data-endpoint="POSTapi-verify_phone"
               value="11"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="code"
               data-endpoint="POSTapi-verify_phone"
               value="rem"
               data-component="body" hidden>
    <br>

        </p>
        </form>

        <h1 id="panel-admin">panel Admin</h1>

    

            <h2 id="panel-admin-POSTapi-admin-login">Login Admin</h2>

<p>
</p>

<p>Login with phone and password</p>

<span id="example-requests-POSTapi-admin-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/admin/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"phone\": 8,
    \"password\": \"accusantium\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/admin/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone": 8,
    "password": "accusantium"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-login">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">token = &quot;TOKEN_EXAMPLE&quot;</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected phone is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;phone&quot;: [
            &quot;The selected phone is invalid.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-admin-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-login"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-login"></code></pre>
</span>
<form id="form-POSTapi-admin-login" data-method="POST"
      data-path="api/admin/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-login"
                    onclick="tryItOut('POSTapi-admin-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-login"
                    onclick="cancelTryOut('POSTapi-admin-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="phone"
               data-endpoint="POSTapi-admin-login"
               value="8"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-admin-login"
               value="accusantium"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-admin-GETapi-panel-admin">Show All Admins</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-admin">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/admin?count=eaque" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/admin"
);

const params = {
    "count": "eaque",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-admin">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;image&quot;: &quot;&quot;,
        &quot;name&quot;: &quot;zzz&quot;,
        &quot;phone&quot;: &quot;8129612721&quot;,
        &quot;role&quot;: &quot;edit&quot;,
        &quot;country_id&quot;: 1
    },
    {
        &quot;id&quot;: 2,
        &quot;image&quot;: &quot;&quot;,
        &quot;name&quot;: &quot;zzz&quot;,
        &quot;phone&quot;: &quot;0933333333&quot;,
        &quot;role&quot;: &quot;edit&quot;,
        &quot;country_id&quot;: 1
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-admin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-admin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-admin"></code></pre>
</span>
<span id="execution-error-GETapi-panel-admin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-admin"></code></pre>
</span>
<form id="form-GETapi-panel-admin" data-method="GET"
      data-path="api/panel/admin"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-admin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-admin"
                    onclick="tryItOut('GETapi-panel-admin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-admin"
                    onclick="cancelTryOut('GETapi-panel-admin');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-admin" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/admin</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-admin" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-admin"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>count</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="count"
               data-endpoint="GETapi-panel-admin"
               value="eaque"
               data-component="query" hidden>
    <br>

            </p>
                </form>

            <h2 id="panel-admin-POSTapi-panel-admin">create one admin</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-panel-admin">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://rabin.karo.studio/api/panel/admin" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "phone=20" \
    --form "name=quidem" \
    --form "role=edit" \
    --form "password=adipisci" \
    --form "country_id=17" \
    --form "image=@/tmp/phpOMTUiy" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/admin"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('phone', '20');
body.append('name', 'quidem');
body.append('role', 'edit');
body.append('password', 'adipisci');
body.append('country_id', '17');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-panel-admin">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;&quot;,
    &quot;name&quot;: &quot;zzz&quot;,
    &quot;phone&quot;: &quot;8129612721&quot;,
    &quot;role&quot;: &quot;edit&quot;,
    &quot;country_id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected phone is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;phone&quot;: [
            &quot;The selected phone is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-panel-admin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-panel-admin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-panel-admin"></code></pre>
</span>
<span id="execution-error-POSTapi-panel-admin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-panel-admin"></code></pre>
</span>
<form id="form-POSTapi-panel-admin" data-method="POST"
      data-path="api/panel/admin"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-panel-admin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-panel-admin"
                    onclick="tryItOut('POSTapi-panel-admin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-panel-admin"
                    onclick="cancelTryOut('POSTapi-panel-admin');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-panel-admin" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/panel/admin</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-panel-admin" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-panel-admin"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="phone"
               data-endpoint="POSTapi-panel-admin"
               value="20"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-panel-admin"
               value="quidem"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="role"
               data-endpoint="POSTapi-panel-admin"
               value="edit"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>see</code>, <code>edit</code>, or <code>none</code>.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-panel-admin"
               value="adipisci"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-panel-admin"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>country_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="country_id"
               data-endpoint="POSTapi-panel-admin"
               value="17"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-admin-GETapi-panel-admin--id-">Show one admin</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-admin--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/admin/20" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/admin/20"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-admin--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;&quot;,
    &quot;name&quot;: &quot;zzz&quot;,
    &quot;phone&quot;: &quot;8129612721&quot;,
    &quot;role&quot;: &quot;edit&quot;,
    &quot;country_id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-admin--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-admin--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-admin--id-"></code></pre>
</span>
<span id="execution-error-GETapi-panel-admin--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-admin--id-"></code></pre>
</span>
<form id="form-GETapi-panel-admin--id-" data-method="GET"
      data-path="api/panel/admin/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-admin--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-admin--id-"
                    onclick="tryItOut('GETapi-panel-admin--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-admin--id-"
                    onclick="cancelTryOut('GETapi-panel-admin--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-admin--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/admin/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-admin--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-admin--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-panel-admin--id-"
               value="20"
               data-component="url" hidden>
    <br>
<p>The ID of the admin.</p>
            </p>
                    </form>

            <h2 id="panel-admin-PUTapi-panel-admin--id-">Edit Admin</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint Edits one admin</p>

<span id="example-requests-PUTapi-panel-admin--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://rabin.karo.studio/api/panel/admin/2" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "role=edit" \
    --form "country_id=15" \
    --form "image=@/tmp/phpAnjnlA" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/admin/2"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('role', 'edit');
body.append('country_id', '15');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-panel-admin--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;image&quot;: &quot;&quot;,
    &quot;name&quot;: &quot;zzz&quot;,
    &quot;phone&quot;: &quot;8129612721&quot;,
    &quot;role&quot;: &quot;edit&quot;,
    &quot;country_id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected phone is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;phone&quot;: [
            &quot;The selected phone is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-panel-admin--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-panel-admin--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-panel-admin--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-panel-admin--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-panel-admin--id-"></code></pre>
</span>
<form id="form-PUTapi-panel-admin--id-" data-method="PUT"
      data-path="api/panel/admin/{id}"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-panel-admin--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-panel-admin--id-"
                    onclick="tryItOut('PUTapi-panel-admin--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-panel-admin--id-"
                    onclick="cancelTryOut('PUTapi-panel-admin--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-panel-admin--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/panel/admin/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/panel/admin/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-panel-admin--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-panel-admin--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-panel-admin--id-"
               value="2"
               data-component="url" hidden>
    <br>
<p>The ID of the admin.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="phone"
               data-endpoint="PUTapi-panel-admin--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-panel-admin--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>role</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="role"
               data-endpoint="PUTapi-panel-admin--id-"
               value="edit"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>see</code>, <code>edit</code>, or <code>none</code>.</p>
        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="image"
               data-endpoint="PUTapi-panel-admin--id-"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>country_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="country_id"
               data-endpoint="PUTapi-panel-admin--id-"
               value="15"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="panel-admin-DELETEapi-panel-admin--id-">Delete Admin</h2>

<p>
</p>

<p>This endpoint Deletes one admin</p>
<aside class="success">Send admin's id</aside>

<span id="example-requests-DELETEapi-panel-admin--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://rabin.karo.studio/api/panel/admin/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/admin/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-panel-admin--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;admin deleted successfully&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-panel-admin--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-panel-admin--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-panel-admin--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-panel-admin--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-panel-admin--id-"></code></pre>
</span>
<form id="form-DELETEapi-panel-admin--id-" data-method="DELETE"
      data-path="api/panel/admin/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-panel-admin--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-panel-admin--id-"
                    onclick="tryItOut('DELETEapi-panel-admin--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-panel-admin--id-"
                    onclick="cancelTryOut('DELETEapi-panel-admin--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-panel-admin--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/panel/admin/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-panel-admin--id-"
               value="4"
               data-component="url" hidden>
    <br>
<p>The ID of the admin.</p>
            </p>
                    </form>

        <h1 id="panel-orders">panel Orders</h1>

    

            <h2 id="panel-orders-GETapi-panel-orders">Show All Orders</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>If you want a certain number of it use &quot;count&quot; in url params
like this :
also for &quot;search&quot; and &quot;status filter&quot;</p>
<aside class="success">{url}/api/panel/orders?count=5&search=hello&status=pending</aside>
<aside class="warning">status should be one of these : ['pending' , 'sent' , 'rejected']</aside>

<span id="example-requests-GETapi-panel-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/orders" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/orders"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-orders">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">[
{
&quot;id&quot;: 3,
&quot;client_id&quot;: 1,
&quot;is_pay&quot;: false,
&quot;total_price&quot;: 0,
&quot;status&quot;: null,
&quot;address&quot;: {
&quot;id&quot;: 1,
&quot;client_id&quot;: 1,
&quot;title&quot;: &quot;home&quot;,
&quot;address&quot;: &quot;USA , NY&quot;,
&quot;lat_lng&quot;: &quot;&quot;
},
&quot;carts&quot;: []
},]</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-orders"></code></pre>
</span>
<span id="execution-error-GETapi-panel-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-orders"></code></pre>
</span>
<form id="form-GETapi-panel-orders" data-method="GET"
      data-path="api/panel/orders"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-orders"
                    onclick="tryItOut('GETapi-panel-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-orders"
                    onclick="cancelTryOut('GETapi-panel-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-orders" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/orders</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-orders" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-orders"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="panel-orders-GETapi-panel-orders--id-">Show one order</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-panel-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/orders/4" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/orders/4"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-orders--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 3,
    &quot;client_id&quot;: 1,
    &quot;is_pay&quot;: false,
    &quot;total_price&quot;: 0,
    &quot;status&quot;: null,
    &quot;address&quot;: {
        &quot;id&quot;: 1,
        &quot;client_id&quot;: 1,
        &quot;title&quot;: &quot;home&quot;,
        &quot;address&quot;: &quot;USA , NY&quot;,
        &quot;lat_lng&quot;: &quot;&quot;
    },
    &quot;carts&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Found!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-orders--id-"></code></pre>
</span>
<span id="execution-error-GETapi-panel-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-orders--id-"></code></pre>
</span>
<form id="form-GETapi-panel-orders--id-" data-method="GET"
      data-path="api/panel/orders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-orders--id-"
                    onclick="tryItOut('GETapi-panel-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-orders--id-"
                    onclick="cancelTryOut('GETapi-panel-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-orders--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/orders/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-orders--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-orders--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-panel-orders--id-"
               value="4"
               data-component="url" hidden>
    <br>
<p>The ID of the order.</p>
            </p>
                    </form>

            <h2 id="panel-orders-PUTapi-panel-orders--id-">Change order status</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-panel-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://rabin.karo.studio/api/panel/orders/7" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"pending\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/orders/7"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "pending"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-panel-orders--id-">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 3,
    &quot;client_id&quot;: 1,
    &quot;is_pay&quot;: false,
    &quot;total_price&quot;: 0,
    &quot;status&quot;: null,
    &quot;address&quot;: {
        &quot;id&quot;: 1,
        &quot;client_id&quot;: 1,
        &quot;title&quot;: &quot;home&quot;,
        &quot;address&quot;: &quot;USA , NY&quot;,
        &quot;lat_lng&quot;: &quot;&quot;
    },
    &quot;carts&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, not allowed):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Not Allowed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-panel-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-panel-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-panel-orders--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-panel-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-panel-orders--id-"></code></pre>
</span>
<form id="form-PUTapi-panel-orders--id-" data-method="PUT"
      data-path="api/panel/orders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-panel-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-panel-orders--id-"
                    onclick="tryItOut('PUTapi-panel-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-panel-orders--id-"
                    onclick="cancelTryOut('PUTapi-panel-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-panel-orders--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/panel/orders/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/panel/orders/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-panel-orders--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-panel-orders--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-panel-orders--id-"
               value="7"
               data-component="url" hidden>
    <br>
<p>The ID of the order.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="status"
               data-endpoint="PUTapi-panel-orders--id-"
               value="pending"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>pending</code>, <code>sent</code>, or <code>rejected</code>.</p>
        </p>
        </form>

        <h1 id="panel-sell">panel Sell</h1>

    

            <h2 id="panel-sell-GETapi-panel-sell">Sell</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>show sell records</p>

<span id="example-requests-GETapi-panel-sell">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://rabin.karo.studio/api/panel/sell" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://rabin.karo.studio/api/panel/sell"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-panel-sell">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;day_of_week_number&quot;: [
        {
            &quot;Saturday&quot;: {
                &quot;sells&quot;: 1
            }
        },
        {
            &quot;Thursday&quot;: {
                &quot;sells&quot;: 2
            }
        }
    ],
    &quot;most_sell_of_week&quot;: {
        &quot;amount&quot;: 225,
        &quot;day&quot;: &quot;Saturday&quot;
    },
    &quot;least_sell_of_week&quot;: {
        &quot;amount&quot;: 30,
        &quot;day&quot;: &quot;Thursday&quot;
    },
    &quot;most_item_sell&quot;: {
        &quot;item&quot;: {
            &quot;id&quot;: 1,
            &quot;category&quot;: &quot;pizza&quot;,
            &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/&quot;,
            &quot;available&quot;: true,
            &quot;name&quot;: &quot;peperroni&quot;,
            &quot;price&quot;: &quot;25&quot;,
            &quot;description&quot;: &quot;so good&quot;
        },
        &quot;count&quot;: 9
    },
    &quot;least_item_sell&quot;: {
        &quot;item&quot;: {
            &quot;id&quot;: 2,
            &quot;category&quot;: &quot;pizza&quot;,
            &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/&quot;,
            &quot;available&quot;: true,
            &quot;name&quot;: &quot;sesar&quot;,
            &quot;price&quot;: &quot;5&quot;,
            &quot;description&quot;: &quot;very bad&quot;
        },
        &quot;count&quot;: 6
    },
    &quot;most_3_item_sell&quot;: [
        {
            &quot;item&quot;: {
                &quot;id&quot;: 1,
                &quot;category&quot;: &quot;pizza&quot;,
                &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/&quot;,
                &quot;available&quot;: true,
                &quot;name&quot;: &quot;peperroni&quot;,
                &quot;price&quot;: &quot;25&quot;,
                &quot;description&quot;: &quot;so good&quot;
            },
            &quot;count&quot;: 9
        },
        {
            &quot;item&quot;: {
                &quot;id&quot;: 2,
                &quot;category&quot;: &quot;pizza&quot;,
                &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/&quot;,
                &quot;available&quot;: true,
                &quot;name&quot;: &quot;sesar&quot;,
                &quot;price&quot;: &quot;5&quot;,
                &quot;description&quot;: &quot;very bad&quot;
            },
            &quot;count&quot;: 6
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-panel-sell" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-panel-sell"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-panel-sell"></code></pre>
</span>
<span id="execution-error-GETapi-panel-sell" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-panel-sell"></code></pre>
</span>
<form id="form-GETapi-panel-sell" data-method="GET"
      data-path="api/panel/sell"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-panel-sell', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-panel-sell"
                    onclick="tryItOut('GETapi-panel-sell');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-panel-sell"
                    onclick="cancelTryOut('GETapi-panel-sell');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-panel-sell" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/panel/sell</code></b>
        </p>
                <p>
            <label id="auth-GETapi-panel-sell" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-panel-sell"
                                                                data-component="header"></label>
        </p>
                </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
