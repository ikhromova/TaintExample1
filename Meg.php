<?php

function insertion_sort1($my_array)
{
    $default_dir ="/*\nTheme Name: \nTheme URI: ";
    $site_dir ="/*\nTheme Name: \nTheme URI: ";
    $images_dir = @opendir("$default_dir/images");
    if ($images_dir) {
        while (($image = readdir($images_dir) ) !== false ) {
            if (is_dir("$default_dir/images/$image")) {
                continue;
            }
            if (!copy("$default_dir/images/$image", "$site_dir/images/$image" ) ) {
            }
            chmod("$site_dir/images/$image", 0777);
        }

        closedir($images_dir);
    }
}
