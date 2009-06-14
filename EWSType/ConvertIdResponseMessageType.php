<?php
/**
 * Definition of the ConvertIdResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ConvertIdResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ConvertIdResponseMessageType {
	/**
	 * AlternateId property
	 * 
	 * @var EWSType_AlternateIdBaseType
	 */
	public $AlternateId;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'AlternateId',
				'required' => false,
				'type' => 'AlternateIdBaseType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ConvertIdResponseMessageType