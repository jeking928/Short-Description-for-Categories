=========================================================
Short Description for Categories for Zen Cart 1.5.*
=========================================================

*~PLEASE READ THIS ENTIRE readme.txt BEFORE INSTALLING~*

**NOTE** This mod has been updated for and tested on Zen Cart 1.5.1. If you persist in using out of date Zen Carts, then this version will more than likely work on 1.5.0. We offer no advice for ZenCart versions prior to that.

Frome here on this readme remains as by the original author but with the link to view the mod in action at an old zc137 removed.

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Basically this allows you to SPLIT your category descriptions into two parts. One part comes before any products or subcategories (as a normal zen cart install does), and another part comes AFTER any products or subcategories. This mod also places a "more info..." link directly after the first description, so your customers can "jump" down to the secondary description.This add on will be useful for people who have LENGTHY category descriptions, and who don't wish to force their customers to scroll down to find the products or subcategories.

If there is NO secondary category description, there will be no "more info..." link. You are also able to adjust the "more info..." text via a language file, and you can remove it all together if you'd prefer not to have that link.

You can ask for any technical help for this mod here:
http://www.zen-cart.com/forum/showthread.php?t=61114

If you have any suggestions or changes for this mod, please post them in the link above, or you can email me at jade@sagefish.com.

=================================================
Steps to Install Short Description for Categories
=================================================

1. Be sure to change all folders named YOUR_TEMPLATE to your actual template name. 

2. There are two core overrides for this mod, as they have no override folder. This means that at some point in the future, if you perform an upgrade on your zen cart, these two files will be overwritten.  The two core overrides for this template are:
	admin/categories.php
	includes/modules/pages/index/main_template_vars.php

Before uploading this mod, I suggest that you rename your ORIGINAL version of these two files to:
	admin/categories.bak
	includes/modules/pages/index/main_template_vars.bak

That way you have backups of the original versions; this will make removing this mod even easier, and will help you remember what files you need to update when you do upgrade your zen cart.

3. Upload the files in the admin and includes folder to your website, retaining the folder structure.

4. In your store admin, go to "Tools", then "Install SQL Patches" and upload the short_description.sql file included in this download.

5. Add this to your stylesheet.css (color and padding for the "more info...." text):

#descSubLink {
	padding-left:.7em;
	color:#990000;
	}

6. You can adjust the "more info..." text in includes/languages/english/extra_definitions/YOUR_TEMPLATE/category_description_sub_defines.php

7. DONE! Now when you go to add a category or edit a category in your admin, there will be a new section where you can enter the description that goes below the category or product listings.


==================================================
Files Included in Short Description for Categories
==================================================

admin/categories.php   **CORE OVERRIDE
admin/includes/functions/extra_functions/categories_description_sub.php
admin/includes/languages/english/extra_definitions/categories_description_sub.php
includes/languages/english/extra_definitions/YOUR_TEMPLATE/category_description_sub_defines.php
includes/modules/pages/index/main_template_vars.php   **CORE OVERRIDE
includes/templates/YOUR_TEMPLATE/templates/tpl_index_categories.php
includes/templates/YOUR_TEMPLATE/templates/tpl_index_product_list.php

=====================================
Version History
=====================================
v1.0 2007-03-24  First Release
v1.1 2007-08-18 updates to admin/categories.php (support for FCKeditor), includes/templates/YOUR_TEMPLATE/templates/tpl_index_product_list.php,includes/templates/YOUR_TEMPLATE/templates/tpl_index_index_categories.php
v1.2 2007-09-10 update to admin/categories.php (removed seo urls code)
v1.3 2013-01-25 by Rick Suffolk, JSWeb.co.uk - updated to work woth ZC1.5.1
