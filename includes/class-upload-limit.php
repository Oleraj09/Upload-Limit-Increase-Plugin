<?php
if (!defined('ABSPATH')) {
    exit;
}

class IUL_Upload_Limit
{

    private $option_name = 'iul_upload_limit_mb';

    public function __construct()
    {
        // Set upload limit
        add_filter('upload_size_limit', [$this, 'set_upload_limit'], 999);

        // Add admin menu
        add_action('admin_menu', [$this, 'add_settings_page']);

        // Register setting
        add_action('admin_init', [$this, 'register_settings']);
    }

    /**
     * Set upload limit dynamically
     */
    public function set_upload_limit($bytes)
    {
        $limit_mb = get_option($this->option_name, 100); // default 100MB
        return intval($limit_mb) * 1024 * 1024;
    }

    /**
     * Add settings page
     */
    public function add_settings_page()
    {
        add_options_page(
            __('Upload Limit', 'easy-increase-upload-limit'),
            __('Upload Limit', 'easy-increase-upload-limit'),
            'manage_options',
            'iul-upload-limit',
        [$this, 'render_settings_page']
        );
    }

    /**
     * Register the setting
     */
    public function register_settings()
    {
        register_setting('iul_settings_group', $this->option_name, [
            'type' => 'integer',
            'sanitize_callback' => 'absint',
            'default' => 100
        ]);
    }

    /**
     * Render settings page
     */
    public function render_settings_page()
    {
?>
        <div class="wrap">
            <h1><?php esc_html_e('Upload Limit Settings', 'easy-increase-upload-limit'); ?></h1>
            <form method="post" action="options.php">
                <?php settings_fields('iul_settings_group'); ?>
                <?php do_settings_sections('iul_settings_group'); ?>
                <table class="form-table">
                    <tr>
                        <th scope="row"><?php esc_html_e('Upload Limit (MB)', 'easy-increase-upload-limit'); ?></th>
                        <td>
                            <input type="number" name="<?php echo esc_attr($this->option_name); ?>" value="<?php echo esc_attr(get_option($this->option_name, 100)); ?>" min="1" step="1">
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }
}
