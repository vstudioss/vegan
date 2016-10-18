<?php
/*
* @Author 		PickPlugins
* Copyright: 	2015 PickPlugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 





add_action( 'team_action_single_team_member_main', 'team_action_single_team_member_main_title', 10 );
add_action( 'team_action_single_team_member_main', 'team_action_single_team_member_main_position', 10 );
add_action( 'team_action_single_team_member_main', 'team_action_single_team_member_main_social', 10 );
add_action( 'team_action_single_team_member_main', 'team_action_single_team_member_main_content', 10 );



if ( ! function_exists( 'team_action_single_team_member_main_title' ) ) {

	
	function team_action_single_team_member_main_title() {
				
		require_once( team_plugin_dir. 'templates/single-team_member-title.php');
	}
}

if ( ! function_exists( 'team_action_single_team_member_main_position' ) ) {

	
	function team_action_single_team_member_main_position() {
				
		require_once( team_plugin_dir. 'templates/single-team_member-position.php');
	}
}


if ( ! function_exists( 'team_action_single_team_member_main_social' ) ) {

	
	function team_action_single_team_member_main_social() {
				
		require_once( team_plugin_dir. 'templates/single-team_member-social.php');
	}
}





if ( ! function_exists( 'team_action_single_team_member_main_content' ) ) {

	
	function team_action_single_team_member_main_content() {
				
		require_once( team_plugin_dir. 'templates/single-team_member-content.php');
	}
}












