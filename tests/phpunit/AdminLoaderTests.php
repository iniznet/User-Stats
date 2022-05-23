<?php

namespace Tests;

defined('ABSPATH') or die();

class AdminLoaderTests extends PluginTestCase
{
    public function test_construct()
    {
        new \WPUserStatistics\AdminLoader('test');

        $this->assertTrue(has_action('admin_menu', '\WPUserStatistics\AdminLoader->admin_menu()') > 0);
    }
}
