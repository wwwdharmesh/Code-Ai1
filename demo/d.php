<?php
// Sample menu items - replace with dynamic input if needed
$menuItems = ["Home", "About", "Contact"]; // Ensure $menuItems is defined

echo '<div class="header" style="background-color: #226ebf; min-height: 40px; max-height: 40px; display: flex; align-items: center; padding: 10px;">';
echo '<img src="uploads/1.jpg" alt="Logo" class="logo" style="max-height: 40px; margin-right: 10px;">';
echo '<div class="header-title" style="text-align: left; flex-grow: 1;">';
echo '<h1 style="font-size: 20px; color: #ffffff; margin: 0;">dhrmesh</h1>';
echo '</div>';
echo '<div class="menu" style="text-align: left; font-size: 10px;">';

foreach ($menuItems as $item) {
    echo '<a href="#" style="margin-right: 10px; color: white; text-decoration: none;">' . htmlspecialchars(trim($item)) . '</a>';
}

echo '</div>';
echo '</div>';
?>
