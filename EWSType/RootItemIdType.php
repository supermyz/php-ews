<?php
/**
 * Definition of the RootItemIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the RootItemIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_RootItemIdType {
	/**
	 * RootItemId property
	 * 
	 * @var EWSType_string
	 */
	public $RootItemId;

	/**
	 * RootItemChangeKey property
	 * 
	 * @var EWSType_string
	 */
	public $RootItemChangeKey;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'RootItemId',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'RootItemChangeKey',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class RootItemIdType