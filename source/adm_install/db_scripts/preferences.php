<?php
/******************************************************************************
 * Systemeinstellungen fuer eine Organisation
 *
 * WICHTIG: Sollen neue Einstellungen bei einem Update andere Werte erhalten,
 *          so muessen diese im Updatescript fuer jede Organisation
 *          eingetragen werden !!!
 *
 * Copyright    : (c) 2004 - 2007 The Admidio Team
 * Homepage     : http://www.admidio.org
 * Module-Owner : Markus Fassbender
 * License      : GNU Public License 2 http://www.gnu.org/licenses/gpl-2.0.html
 *
 *****************************************************************************/

$orga_preferences = array(

    // System
    'enable_rss'					=> '1',
    'enable_bbcode'					=> '1',
    'enable_auto_login'				=> '1',
    'logout_minutes'				=> '20',
    'enable_system_mails'			=> '1',
    'email_administrator'			=> 'webmaster@'. $_SERVER['HTTP_HOST'],
    'homepage_logout'				=> 'index.html',
    'homepage_login'				=> 'index.html',
    'theme'							=> 'modern',
	'enable_password_recovery'		=> '1',

    // Registrierung
    'registration_mode'              => '1',
    'enable_registration_captcha'    => '1',
    'enable_registration_admin_mail' => '1',

    // Ankuendigungen
    'enable_announcements_module' => '1',

    // Downloads
    'enable_download_module' => '1',
    'max_file_upload_size'   => '3072',

    // Fotomodul
    'enable_photo_module' => '1',
    'photo_save_scale'    => '640',
    'photo_thumbs_column' => '5',
    'photo_thumbs_row'    => '5',
    'photo_thumbs_scale'  => '100',
    'photo_show_width'    => '500',
    'photo_show_height'   => '380',
    'photo_image_text'    => '1',
    'photo_preview_scale' => '100',
    'photo_show_mode'	  => '1',

	// Forum
	'enable_forum_interface'=> '0',
	'forum_version'			=> 'phpbb2',
	'forum_export_user'	    => '1',
	'forum_praefix'         => 'phpbb',
	'forum_sqldata_from_admidio'		=> '0',
	'forum_db'              => '',
	'forum_srv'             => '',
	'forum_usr'             => '',
	'forum_pw'              => '',
	
    // Gaestebuch
    'enable_guestbook_module'           => '1',
    'enable_guestbook_captcha'          => '1',
    'flooding_protection_time'          => '60',
    'enable_gbook_comments4all'         => '0',
    'enable_intial_comments_loading'    => '0',

    // Listen
    'lists_roles_per_page'   => '10',
    'lists_members_per_page' => '20',

    // Mailmodul
    'enable_mail_module'        => '1',
    'max_email_attachment_size' => '1024',
    'enable_mail_captcha'       => '1',

    // Grußkartenmodul
    'enable_ecard_module'			=> '1',
	'enable_ecard_text_length'		=> '1',
	'enable_ecard_cc_recipients'	=> '1',
    'ecard_view_width'				=> '250',
    'ecard_view_height'				=> '250',
    'ecard_card_picture_width'		=> '400',
    'ecard_card_picture_height'		=> '250',
    'ecard_cc_recipients'			=> '5',
    'ecard_text_length'				=> '500',
    'ecard_text_font'				=> 'Comic Sans MS',
    'ecard_text_size'				=> '20',
    'ecard_text_color'				=> 'black',
    'ecard_template'				=> 'ecard_1.tpl',

    // Profil
    'default_country'           => 'Deutschland',
    'profile_show_map_link'     => '1',
    'profile_show_roles'        => '1',
    'profile_show_former_roles' => '1',
    'profile_show_extern_roles' => '1',

    // Termine
    'enable_dates_module'       => '1',
    'dates_show_map_link'       => '1',

    // Weblinks
    'enable_weblinks_module' => '1'
 )
?>