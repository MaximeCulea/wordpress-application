# Easy Test

## Git
Before doing anything else, we need to have a copy of your answers. We use git to see how you can use it, name your commits, etc:
* Maybe [create](https://github.com/join) your Github Account
* [Fork](https://help.github.com/articles/fork-a-repo/) the project, then clone yours to work into
* Create a branch and name it as you want
* You can use whatever software you want to ease the process: smartgit, git kraken, sourcetree, etc
* Try to make one commit and push it

# Dig into PHP

## Exercise
For the next questions write all your answers in the file `wp-content/themes/easy/php-exercice/answers.php`

### Display
Try to echo the following cases:

* `$a` is a string, conditionally changing due to a true/false condition (pick 2 words you want)
* `$b` is a string depending on a switch case (use whatever test values and strings)
* `$a` & `$b`

### Loops
Try to echo the following cases:

* Display all numbers between 1 and 10 (including 10) with a `for` loop
* Same as before but with a `while` loop
* Wrap the while loop inside a function and call it
* Evolve it to make it use a parameter called `$max` and display all values from 1 to `$max` (still using a `while` loop as before). Call it with a value of 20

### Arrays
Given this array `array(5, 12, 10, 21, 2, 6, 8, 20, 14, 9, 12)`, write & wrap your code inside functions for the following cases:

* Display all the elements of the array (separated with a comma)
* Display the average value
* Display how many values are equal to 10 (or greater)
* Display if the value 20 is present in the array
* Display the greatest value of the array

# WordPress is your best Friend
You are done with the first part, now let's go to the WordPress part!

## Theme creation
* Create a custom from scratch theme (add only the basic files)
* Complete the style's header
* Then, add the default files for the homepage, the post single and archive view
* Activate your theme

## Theme templating
* From the html folder (`themes/easy/html/`) you would have to carve and build the different templates, let's begin with the header and footer block.

### Header / Footer
Keep the essential code for the following:
* Header: localize the header part and isolate it into your theme
* Footer: same for the footer
* Go into homepage template and display the header & footer

#### Dynamization
Now your html has been split out, you must dynamize it, which means replacing all:
* relative urls into absolute urls
* same for image's source
* also apply to assets (css/javascript)
* so on ..
Do it on header and footer

### WP_Query & loop
On the homepage template, display the last 6 news:
* Use a wp_query to get the 6th last news ordered by name ascending
* Create a loop to display these. Get inspired from index.html for portfolio: title, term, image, link, etc.
* Then to make it reusable somewhere else and clean the code, move the loop template into a block and call it into your loop

# Finalizing
Use a local environment to make this theme work and display what is expected. Don't hesitate to fake 10 posts to make it work as expected.
At the end screenshot your PHP answers and your theme homepage, place them into the `screenshots` folder. 
