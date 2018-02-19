<?php
/**
 * Residential One Properties Specials Callout for Floor Plans Page
 *
 * @package Residential_One_Properties
 */

function resone_template_specials_callout() {
  if ( function_exists( 'get_field' ) ) {
    $content = get_field( 'specials_content', option );
    $details = get_field( 'specials_details', option );

    if( $content ): ?>

    <div class="specials-callout">
      <div class="callout-wrapper">

        <?php if ( $content ): ?>
          <span class="callout-special">Specials: <?php echo esc_html( $content ); ?></span>
        <?php endif ?>

        <?php if ( $details ):  ?>
          <span class="callout-details"><?php echo $details; ?></span>
        <?php endif ?>

      </div>
    </div>

    <?php endif;
  }
}
