<div class="sui-box-settings-row">

	<div class="sui-box-settings-col-1">
		<span class="sui-settings-label"><?php esc_html_e( '“Never see this again” Link', 'wordpress-popup' ); ?></span>
		<span class="sui-description"><?php esc_html_e( 'The visitor will never see this message again, once clicked on this link.', 'wordpress-popup' ); ?></span>
	</div>

	<div class="sui-box-settings-col-2">

		<label for="hustle-add-never-see-link" class="sui-toggle">
			<input type="checkbox"
				name="show_never_see_link"
				data-attribute="show_never_see_link"
				id="hustle-add-never-see-link"
				{{ _.checked(_.isTrue(show_never_see_link), true) }} />
			<span class="sui-toggle-slider"></span>
		</label>

		<label for="hustle-add-never-see-link"><?php esc_html_e( 'Add “Never see this message again” link', 'wordpress-popup' ); ?></label>
		<span class="sui-description sui-toggle-description"><?php esc_html_e( 'Add a “Never see this message again” link at the bottom of the module.', 'wordpress-popup' ); ?></span>

		<div id="hustle-add-never-see-link-toggle-wrapper" class="sui-border-frame sui-toggle-content {{ ( _.isFalse(show_never_see_link) ) ? 'sui-hidden' : '' }}">

			<div class="sui-form-field">

				<label for="hustle-never-see-link-text" class="sui-label"><?php esc_html_e( 'Link text', 'wordpress-popup' ); ?></label>
				<input type="text"
					name="never_see_link_text"
					data-attribute="never_see_link_text"
					id="hustle-never-see-link-text"
					placeholder="<?php esc_html_e( 'Never see this again', 'wordpress-popup' ); ?>"
					value="{{ never_see_link_text }}"
					class="sui-form-control" />

			</div>

		</div>

	</div>

</div>
