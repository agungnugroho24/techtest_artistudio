# Techtest_artistudio
Example website that use CMS wordpress for technical test as a part time wordpress developer

# Installation
1. Clone or download repository
2. Unzip and extract file
3. Move example_cpt.zip to folder wp-content -> plugins
4. Open wordpress Admin on browser
5. In your WordPress admin dashboard, go to the Plugins > Add New
6. Click on the "Upload Plugin" button.
7. Choose the zip file you created earlier and click "Install Now."
8. After the plugin is installed, click "Activate" to activate the plugin

# How to make pop up and custom field type
**Step 1 :** Set up the Plugin Structure<br>
1.1 Create a folder for your plugin, e.g., example_cpt.
1.2 Inside the folder, create the main plugin file, e.g., example_cpt.php.

**Step 2:** Define Custom Post Type
In the example_cpt.php file, register a custom post type for the popups using the WordPress register_post_type function

**Step 3:** Add Custom Fields
Extend the custom post type to include custom fields for title, description, and page using the Advanced Custom Fields (ACF) plugin or a similar method

**Step 4:** Create the Pop-up Functionality
Implement the function to display the popup using the Dot Framework

**Step 5:** Implement JavaScript and CSS for the Pop-up
Implement the JavaScript and CSS to control the display and styling of the pop-up when the link is clicked
