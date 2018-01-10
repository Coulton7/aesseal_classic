<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>



  <?php if (!empty($fields->separator)): ?>
    <?php print $fields->separator; ?>
  <?php endif; ?>


<div class="row-fluid">
  <div class="span6 feature-content">
  	<?php print $fields['title']->content; ?>
<?php print $fields['body']->content; ?>


  </div>
  <div class="span6 featured-image">

<?php print $fields['field_image']->content; ?>

</div>
</div>
<div class="row-fluid">
<div class="span6 featured-footer">
		<?php print $fields['created']->content; ?><br>

	<?php print $fields['view_node']->content; ?>


</div>

<div class="span6">
  
</div> 


</div> 



 



