<?php


function getCourseList() {

    // create empty array
    $data = array();

    // WP loop to get all the courses into an array

    // http://generatewp.com/wp_query/
    // WP_Query arguments
    $args = array (
        'category_name'          => 'courses',
        'pagination'             => false,
        'posts_per_page'         => '200',
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) 
        {
            $query->the_post();
            $data[] = array (
                "title" => get_the_title(),
                "link" => get_permalink()
            );
        }
    }

    return json_encode($data);
}

// a handy function to "console.log" PHP data
function consoleLog($data, $function) 
{
	if (is_array($data) || is_object($data)) $data = json_encode($data);
	else if (is_string($data)) $data = '"' . $data . '"';

	if (!$function) $function = 'log';
	
	echo('<script>console.' . $function . '(' . $data . ');</script>');
}

// let's give a proper name to the function to print the active theme's folder
function theActiveThemeDirectory()
{
	$directory = get_template_directory_uri() . '/';
	print $directory;
}

function getBowerDirectory()
{
	$directory = get_template_directory_uri() . '/bower_components/';
	if (!fileExists($directory)) consoleLog("You seem to be missing the 'bower_components' folder", 'error');
	else return $directory;
}

function theHTML5BoilerplateDirectory()
{
	$directory = getBowerDirectory() . 'html5-boilerplate/dist/';
	if (!fileExists($directory)) consoleLog("You seem to be missing the 'html5-boilerplate/dist' folder", 'error');
	print $directory;
}

function theSkeletonDirectory()
{
	$directory = getBowerDirectory() . 'skeleton-css/';
	if (!fileExists($directory)) consoleLog("You seem to be missing the 'skeleton-css' folder", 'error');
	print $directory;
}

// from http://php.net/manual/en/function.file-exists.php#103436
function fileExists($path)
{
    return (@fopen($path, 'r') == true);
}



?>