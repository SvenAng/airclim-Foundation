<?php

/**
* @file
* This template is used to print a single field in a view.
*
* It is not actually used in default Views, as this is registered as a theme
* function which has better performance. For single overrides, the template is
* perfectly okay.
*
* Variables available:
* - $view: The view object
* - $field: The field handler object that can process the input
* - $row: The raw SQL result that can be used
* - $output: The processed output that will normally be used.
*
* When fetching output from the $row, this construct should be used:
* $data = $row->{$field->field_alias}
*
* The above will guarantee that you'll always get the correct data,
* regardless of any changes in the aliasing that might happen if
* the view is modified.
*
* 79 = Mitten - Bild i topp
* 187 = Mitten - Bild till höger
* Dessa syfar på ett ID i en taxonmi
*
* Denna fil hanterar textcontent
*
*/
?>
<?php 
if ($output == 187){
    print "<div class='teaser-txt-top columns small-12'>";
}elseif($output == 79){
    print "<div class='teaser-txt-right columns small-12 medium-pull-5 medium-7'>";
}elseif($output == 188){
    print "<div class='teaser-txt-left columns small-12 medium-7'>";
}
?>