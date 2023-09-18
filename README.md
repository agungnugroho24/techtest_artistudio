# techtest_artistudio
Example website that use CMS wordpress for technical test as a part time wordpress developer

# Installation
1. Clone or download repository
2. Import sql to server
3. Use access
   username: agung
   password: &62IcMz3cdqWY)iWMj

# How to make pop up
1. Login into admin page
2. Install plugin pop up maker
3. Make modal pop up
4. Fill the body input and close button
5. Click save and publish
6. Choose menu page -> add new
7. Make a new page
8. Make pop up on the body of website
9. Save and publish

# How to make custom field type
1. Click on the three-dot menu in the top-right corner of the screen and select ‘Preferences’ from the menu
2. Switch to the ‘Panels’ tab and then enable the ‘Custom fields’ option
3. Click on the ‘Enable & Reload’ button to reload the post editor
4. Add any information related to the post, page, or other content type
5. Provide a Name for your custom field and then enter its Value
6. Click on the ‘Add Custom Field’ button to save it
7. Install plugin WPcode
8. Choose Code Snippets » + Add Snippet
9. Select the ‘Add Your Custom Code (New Snippet)’ option
10. Copy this code to add to your theme files: 	<?php echo get_post_meta($post->ID, 'key', true); ?>
11. Replace key with the name of your custom field
12. Change the code into the ‘Code Preview’ area and change the Code Type to ‘PHP Snippet’
13. Choose the ‘Page Specific’ tab and select the ‘Insert Before Post’ option
14. Save your changes and visit the post where you added the custom field to see it in action
15. Choose Post -> All posts
16. Edit post
17. Add pop up on the webpage
18. Click update
