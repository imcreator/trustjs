<?php
/**
 * Template Name: Post Insert
 *
 * A custom page template that allows users to submit a post from the front end.
 * Based on the Twenty Ten page template.
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @author iCosmin (http://icosmin.com)
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header();

$tags = $_POST['postTags'];
$tagsArray = explode(',', $tags);

echo $_POST['postTags'];

if( $_POST['postTitle'] ) {
		$tags = array();

	    $post_information = array(
	        'post_title' => wp_strip_all_tags( $_POST['postTitle'] ),
	        'post_content' => $_POST['postContent'],
	        'post_type' => 'post',
	        'tags_input' => explode(',', $_POST['postTags']),
	        'post_status' => 'publish'
	    );
	 
	    wp_insert_post( $post_information );
}
	

?>
<div id="question_form">

	<form action="" id="primaryPostForm" method="POST">
	 
	    <fieldset>
	        <label for="postTitle"><?php _e('Temat:', 'framework') ?></label>
	        <input type="text" name="postTitle" id="postTitle" class="required" />
	    </fieldset>
	 
	    <fieldset>
	        <textarea name="postContent" id="postContent" rows="8" cols="30" class="required"></textarea>
	    </fieldset>
	 	
		 <fieldset>
	        <label for="postTags"><?php _e('Tagi', 'framework') ?></label>
	        <input type="text" name="postTags" id="postTags" class="required" />
	    </fieldset>

	    <fieldset>
	        <input type="hidden" name="submitted" id="submitted" value="true" />
	        <button id="main_submit" type="submit"><?php _e('Wyślij pytanie', 'framework') ?></span>
	    </fieldset>
	 	<div id="result"></div>
	</form>
</div>


<?php get_footer(); ?>