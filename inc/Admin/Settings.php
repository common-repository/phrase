<?php
/**
 * Plugin settings page functions.
 */

namespace Phrase\WP\Admin;

/**
 * Plugin Settings.
 */
class Settings {

	/**
	 * The access token option key.
	 *
	 * @var string
	 */
	private const ACCESS_TOKEN_OPTION_NAME = 'phrase_api_access_token';

	/**
	 * Initialize settings hooks and filters.
	 *
	 * @return void
	 */
	public static function init(): void {
		self::register_settings();
		self::add_sections();
		self::add_fields();
	}

	/**
	 * Register the admin menu page.
	 *
	 * @return void
	 */
	public static function admin_menu(): void {
		add_menu_page(
			__( 'Phrase Settings', 'phrase' ),
			__( 'Phrase Strings', 'phrase' ),
			'manage_options',
			'phrase',
			[ self::class, 'render' ],
			'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAiIGhlaWdodD0iMzAiIHZpZXdCb3g9IjAgMCAzMCAzMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE4Ljg1NTMgMkg3LjQ0NDEyQzYuNjQ2NTEgMiA2IDIuNjUxMTggNiAzLjQ1NDU1VjIxLjU0NTVDNiAyMi4zNDg4IDYuNjQ2NTEgMjMgNy40NDQxMiAyM0gxNC45NzQzVjIwLjI3MjdIOC43MDc3MVY0LjcyNzI3SDE4Ljg1NTNDMjAuMjAxMyA0LjcyNzI3IDIxLjI5MjMgNS44MjYxOCAyMS4yOTIzIDcuMTgxODJWMTcuODE4MkMyMS4yOTIzIDE5LjE3MzggMjAuMjAxMyAyMC4yNzI3IDE4Ljg1NTMgMjAuMjcyN0gxNi42ODkyQzE2LjQ4OTggMjAuMjcyNyAxNi4zMjgxIDIwLjQzNTUgMTYuMzI4MSAyMC42MzY0VjIyLjYzNjRDMTYuMzI4MSAyMi44MzczIDE2LjQ4OTggMjMgMTYuNjg5MiAyM0gxOC44NTUzQzIxLjY5NjYgMjMgMjQgMjAuNjgwMSAyNCAxNy44MTgyVjcuMTgxODJDMjQgNC4zMiAyMS42OTY2IDIgMTguODU1MyAyWiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTEyLjY4MzQgMjcuNzA0M0w3LjEyNjggMjMuNTAzN0M2LjQxNjQzIDIyLjk2NjcgNiAyMi4xMzQ4IDYgMjEuMjUyN1YzLjQyMTQ1QzYgMi4yNDUxOSA3LjM2OTQ0IDEuNTc5ODMgOC4zMTY2IDIuMjk1OTFMMTMuODczMyA2LjQ5NjUzQzE0LjU4MzYgNy4wMzM0OCAxNSA3Ljg2NTQ2IDE1IDguNzQ3NTFWMjYuNTc4OEMxNSAyNy43NTUgMTMuNjMwNyAyOC40MjA1IDEyLjY4MzQgMjcuNzA0M1oiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo='
		);
	}

	/**
	 * Register plugin settings.
	 *
	 * @return void
	 */
	private static function register_settings(): void {
		register_setting(
			'phrase',
			self::ACCESS_TOKEN_OPTION_NAME,
			[
				'type'              => 'string',
				'sanitize_callback' => [ self::class, 'sanitize_access_token' ],
				'default'           => '',
			]
		);
	}

	/**
	 * Sanitize the access token. Set the existing option if field was not submitted (it probably was disabled).
	 *
	 * @param string|null $token The form input.
	 * @return string The sanitized token.
	 */
	public static function sanitize_access_token( $token ): string {
		if ( null === $token ) {
			return get_option( self::ACCESS_TOKEN_OPTION_NAME );
		}

		return sanitize_text_field( $token );
	}

	/**
	 * Add setting sections.
	 *
	 * @return void
	 */
	private static function add_sections(): void {
		// Register a new section in the "phrase" page.
		add_settings_section(
			'phrase_section_api',
			__( 'Authentication', 'phrase' ),
			[ self::class, 'render_section_api' ],
			'phrase'
		);

	}

	/**
	 * Add settings fields.
	 *
	 * @return void
	 */
	private static function add_fields(): void {
		add_settings_field(
			self::ACCESS_TOKEN_OPTION_NAME,
			__( 'API Access Token', 'phrase' ),
			[ self::class, 'render_field_api_token' ],
			'phrase',
			'phrase_section_api',
			[
				'label_for' => self::ACCESS_TOKEN_OPTION_NAME,
			]
		);
	}

	/**
	 * API section description render.
	 *
	 * @param array $args The arguments.
	 * @return void
	 */
	public static function render_section_api( $args ): void {
		?>
		<p id="<?php echo esc_attr( $args['id'] ); ?>">
			<?php esc_html_e( 'Please provide a Phrase API Access Token to connect WordPress to your Phrase account.', 'phrase' ); ?>
		</p>
		<?php
	}

	/**
	 * Render the api token field.
	 *
	 * @param array $args The arguments.
	 * @return void
	 */
	public static function render_field_api_token( $args ): void {
		$token = get_option( self::ACCESS_TOKEN_OPTION_NAME );
		?>
		<div class="access-token-input">
			<input
				type="text"
				id="<?php echo esc_attr( $args['label_for'] ); ?>"
				class="regular-text"
				name="<?php echo esc_attr( $args['label_for'] ); ?>"
				value="<?php echo $token ? esc_attr( str_repeat( '*', 30 ) . substr( $token, -8 ) ) : ''; ?>"
				<?php echo $token ? 'disabled' : ''; ?>
			/>

			<?php if ( $token ) : ?>
				<button type="button" class="button change-access-token"><?php esc_html_e( 'Change', 'phrase' ); ?></button>
			<?php endif; ?>

			<p class="description" <?php echo $token ? 'hidden' : ''; ?>>
				<?php
				printf(
					/* translators: Placeholders are used for link (<a></a>) markup. */
					esc_html__( 'Go to %1$syour Phrase Access Token settings%2$s, generate an Access Token, copy and paste it here.', 'phrase' ),
					'<a href="https://app.phrase.com/settings/oauth_access_tokens" target="_blank" rel="noopener noreferrer">',
					'</a>'
				);
				?>
			</p>
		</div>
		<?php
	}

	/**
	 * Renders the settings page markup.
	 *
	 * @return void
	 */
	public static function render(): void {
		// Check user capabilities.
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		// Add error/update messages.

		// Check if the user have submitted the settings.
		// WordPress will add the "settings-updated" $_GET parameter to the url.
		if ( isset( $_GET['settings-updated'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification
			// Add settings saved message with the class of "updated".
			add_settings_error(
				'phrase_messages',
				'phrase_message',
				__( 'Settings saved.', 'phrase' ),
				'updated'
			);
		}

		// Show error/update messages.
		settings_errors( 'phrase_messages' );
		?>
		<div class="wrap">
			<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
			<form action="options.php" method="post">
				<?php
				// Output security fields for the registered settings.
				settings_fields( 'phrase' );

				// Output setting sections and their fields.
				do_settings_sections( 'phrase' );

				// Output save settings button.
				submit_button( __( 'Save Settings', 'phrase' ) );
				?>
			</form>
		</div>
		<?php
	}

	/**
	 * Get the phrase access token.
	 *
	 * @return string The token or false.
	 */
	public static function get_access_token(): string {
		$access_token = get_option( self::ACCESS_TOKEN_OPTION_NAME );

		if ( ! $access_token ) {
			return '';
		}

		return $access_token;
	}
}
