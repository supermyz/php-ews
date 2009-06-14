<?php
/**
 * Definition of the BaseDelegateResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BaseDelegateResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BaseDelegateResponseMessageType {
	/**
	 * ResponseMessages property
	 * 
	 * @var EWSType_ArrayOfDelegateUserResponseMessageType
	 */
	public $ResponseMessages;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'ResponseMessages',
				'required' => false,
				'type' => 'ArrayOfDelegateUserResponseMessageType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BaseDelegateResponseMessageType