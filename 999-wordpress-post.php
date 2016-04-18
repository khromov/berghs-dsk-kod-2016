<?php
$post = get_post(1);
var_dump($post);

/*
object(WP_Post)#387 (24) {
  ["ID"]=> int(1)
  ["post_author"]=> string(1) "1"
  ["post_date"]=> string(19) "2016-04-02 15:25:33"
  ["post_date_gmt"]=> string(19) "2016-04-02 15:25:33"
  ["post_content"]=> string(85) "Welcome to WordPress. This is your first post."
  ["post_title"]=> string(12) "Hello world!"
  ["post_excerpt"]=> string(0) ""
  ["post_status"]=> string(7) "publish"
  ["comment_status"]=>  string(4) "open"
  ["ping_status"]=> string(4) "open"
  ["post_password"]=>  string(0) ""
  ["post_name"]=>  string(11) "hello-world"
  ["to_ping"]=> string(0) ""
  ["pinged"]=> string(0) ""
  ["post_modified"]=> string(19) "2016-04-02 15:25:33"
  ["post_modified_gmt"]=> string(19) "2016-04-02 15:25:33"
  ["post_content_filtered"]=> string(0) ""
  ["post_parent"]=> int(0)
  ["guid"]=> string(25) "http://khromov.se/wp/?p=1"
  ["menu_order"]=> int(0)
  ["post_type"]=> string(4) "post"
  ["post_mime_type"]=> string(0) ""
  ["comment_count"]=> string(1) "1"
  ["filter"]=> string(3) "raw"
}
*/

$query = new WP_Query(array(
  'posts_per_page' => 10
));

var_dump($query->posts);

/*
array(1) {
  [0]=>
  object(WP_Post)#415 (24) {
    ["ID"]=>
    int(1)
    ["post_author"]=>
    string(1) "1"
    ["post_date"]=>
    string(19) "2016-04-02 15:25:33"
    ["post_date_gmt"]=>
    string(19) "2016-04-02 15:25:33"
    ["post_content"]=>
    string(85) "Welcome to WordPress. This is your first post. Edit or delete it, then start writing!"
    ["post_title"]=>
    string(12) "Hello world!"
    ["post_excerpt"]=>
    string(0) ""
    ["post_status"]=>
    string(7) "publish"
    ["comment_status"]=>
    string(4) "open"
    ["ping_status"]=>
    string(4) "open"
    ["post_password"]=>
    string(0) ""
    ["post_name"]=>
    string(11) "hello-world"
    ["to_ping"]=>
    string(0) ""
    ["pinged"]=>
    string(0) ""
    ["post_modified"]=>
    string(19) "2016-04-02 15:25:33"
    ["post_modified_gmt"]=>
    string(19) "2016-04-02 15:25:33"
    ["post_content_filtered"]=>
    string(0) ""
    ["post_parent"]=>
    int(0)
    ["guid"]=>
    string(25) "http://khromov.se/wp/?p=1"
    ["menu_order"]=>
    int(0)
    ["post_type"]=>
    string(4) "post"
    ["post_mime_type"]=>
    string(0) ""
    ["comment_count"]=>
    string(1) "1"
    ["filter"]=>
    string(3) "raw"
  }
}
*/
