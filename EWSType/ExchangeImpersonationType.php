<?php
/**
 * Definition of the ExchangeImpersonationType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ExchangeImpersonationType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ExchangeImpersonationType {
	/**
	 * ConnectingSID property
	 * 
	 * @var EWSType_ConnectingSIDType
	 */
	public $ConnectingSID;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'ConnectingSID',
				'required' => false,
				'type' => 'ConnectingSIDType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ExchangeImpersonationType