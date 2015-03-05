<?php

// Function for Short Description for Categories
// categories_description_sub.php

function zen_get_category_description_sub($category_id, $language_id) {
    global $db;
    $category = $db->Execute("select categories_description_sub
                              from " . TABLE_CATEGORIES_DESCRIPTION . "
                              where categories_id = '" . (int)$category_id . "'
                              and language_id = '" . (int)$language_id . "'");

    return $category->fields['categories_description_sub'];
  }
  ?>