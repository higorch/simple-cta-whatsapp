<div class="wrap">
<h1>Simples CTA WhatsApp</h1>

<form method="post" action="options.php">
    <?php settings_fields('scw-options'); ?>
    <?php do_settings_sections('scw-options'); ?>
    <table class="form-table">

        <tr valign="top">
        <th scope="row">Telefone WhatsApp</th>
        <td><input type="text" name="scw_telefone" value="<?php echo esc_attr( get_option('scw_telefone') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Texto padrão</th>
        <td><input class="regular-text" type="text" name="scw_text" value="<?php echo esc_attr( get_option('scw_text') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Mostrar em desktop</th>
        <td><input type="checkbox" name="scw_show_desktop" value="1" <?php checked(1, get_option('scw_show_desktop'), true); ?> /></tr>

    </table>
    
    <?php submit_button(); ?>

</form>
</div>