<?php

function addAdminMenu( ) {
    add_options_page( 'страница настроек', 'страница настроек', 'manage_options', 'settingsPage', 'optionsPage' );
}

function settingsInit( ) {
    register_setting( 'LinkAttr', 'LinkAttrOptions' );
    add_settings_section(
        'LinkAttrSection',
        __( 'Секция 1', 'wordpress' ),
        'sectionCallback',
        'LinkAttr'
    );

    add_settings_field(
        'enOption',
        __( 'Включить плагин', 'wordpress' ),
        'enOptionElm',
        'LinkAttr',
        'LinkAttrSection'
    );

    add_settings_field(
        'customText',
        __( 'Контент', 'wordpress' ),
        'customTextElm',
        'LinkAttr',
        'LinkAttrSection'
    );
    foreach (get_post_types() as $key => $value)
    {
        add_settings_field(
            'postType'.$key,
            __('Тип:'.$key,'wordpress'),
            'postTypeElm',
            'LinkAttr',
            'LinkAttrSection',
            $value
        );
    }
}
function postTypeElm($postType)
{
    $options = get_option( 'LinkAttrOptions' );
    ?>
    <input type='checkbox' name='LinkAttrOptions[postType<?php echo $postType;?>]' <?php echo checked($options['postType'.$postType]); ?> value="1">
    <?php
}
function enOptionElm() {
    $options = get_option( 'LinkAttrOptions' );
    ?>
    <input type='checkbox' name='LinkAttrOptions[enOption]' <?php echo checked($options['enOption']); ?> value="1">
    <?php
}

function customTextElm( ) {
    $options = get_option( 'LinkAttrOptions' );
    ?>
    <Textarea name='LinkAttrOptions[customText]'> <?php echo $options['customText']; ?>
    </Textarea>
    <?php
}

function sectionCallback( ) {
    echo __( 'Описание для секции настроек', 'wordpress' );
}

function optionsPage( ) {
    ?>
    <form action='options.php' method='post'>
        <h2>Дополнительная страница настроек</h2>
        <?php
        settings_fields( 'LinkAttr' );
        do_settings_sections( 'LinkAttr' );
        submit_button();
        ?>
    </form>
    <?php
}
add_action( 'admin_menu', 'addAdminMenu' );
add_action( 'admin_init', 'settingsInit' );
?>