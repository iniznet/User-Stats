<?php
namespace Baseapp;

/**
 * Cli commands loader
 */
class CliLoader
{
	/**
	 * Initialize this class
	 */
    public function __construct($prefix)
    {
    	// this is where you can load Cli
    	\WP_CLI::add_command( $prefix, \Baseapp\ExampleCommand::class );
    	\WP_CLI::add_command( $prefix, \Baseapp\IndexerCommand::class );
    }
}
