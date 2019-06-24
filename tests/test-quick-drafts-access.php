<?php

defined( 'ABSPATH' ) or die();

class Quick_Drafts_Access_Test extends WP_UnitTestCase {

	public function tearDown() {
		parent::tearDown();

		remove_filter( 'c2c_quick_drafts_access_post_types', array( $this, 'c2c_quick_drafts_access_post_types' ) );
	}


	//
	//
	// FUNCTIONS FOR HOOKING ACTIONS/FILTERS
	//
	//


	public function c2c_quick_drafts_access_post_types( $post_types ) {
		// Array values would in reality be post type objects, but not necessary as
		// far as the plugin goes.
		return array( 'post' => 'post', 'book' => 'book' );
	}


	//
	//
	// TESTS
	//
	//


	public function test_class_exists() {
		$this->assertTrue( class_exists( 'c2c_QuickDraftsAccess' ) );
	}

	public function test_get_version() {
		$this->assertEquals( '2.2', c2c_QuickDraftsAccess::version() );
	}

	public function test_get_post_types() {
		$this->assertEquals( array( 'post', 'page', 'attachment', 'wp_block' ), array_keys( c2c_QuickDraftsAccess::get_post_types() ) );
	}

	/*
	 * Filter: c2c_quick_drafts_access_post_types
	 */

	public function test_hook_c2c_quick_drafts_access_post_types() {
		add_filter( 'c2c_quick_drafts_access_post_types', array( $this, 'c2c_quick_drafts_access_post_types' ) );

		$this->assertEquals( array( 'post', 'book' ), array_keys( c2c_QuickDraftsAccess::get_post_types() ) );
	}

	/*
	 * Hooks
	 */

	public function test_hooks_action_plugins_loaded() {
		$this->assertNotFalse( has_action( 'plugins_loaded', array( 'c2c_QuickDraftsAccess', 'init' ) ) );
	}

	public function test_hooks_action_admin_init() {
		$this->assertNotFalse( has_action( 'admin_init', array( 'c2c_QuickDraftsAccess', 'admin_init' ) ) );
	}

	public function test_hooks_action_admin_menu() {
		$this->assertNotFalse( has_action( 'admin_menu', array( 'c2c_QuickDraftsAccess', 'quick_drafts_access' ) ) );
	}

	public function test_hooks_action_restrict_manage_posts() {
		$this->assertNotFalse( has_action( 'restrict_manage_posts', array( 'c2c_QuickDraftsAccess', 'filter_drafts_by_author' ) ) );
	}

}
