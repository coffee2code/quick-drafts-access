<?php

defined( 'ABSPATH' ) or die();

class Quick_Drafts_Access_Test extends WP_UnitTestCase {

	public function test_class_exists() {
		$this->assertTrue( class_exists( 'c2c_QuickDraftsAccess' ) );
	}

	public function test_get_version() {
		$this->assertEquals( '2.1', c2c_QuickDraftsAccess::version() );
	}

	public function test_hooks_action_admin_init() {
		$this->assertNotFalse( has_action( 'admin_init', array( 'c2c_QuickDraftsAccess', 'admin_init' ) ) );
	}

	public function test_hooks_action_admin_menu() {
		$this->assertNotFalse( has_action( 'admin_menu', array( 'c2c_QuickDraftsAccess', 'quick_drafts_access' ) ) );
	}

}
