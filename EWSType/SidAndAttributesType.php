<?php
/**
 * Definition of the SidAndAttributesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SidAndAttributesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SidAndAttributesType {
	/**
	 * SecurityIdentifier property
	 * 
	 * @var EWSType_string
	 */
	public $SecurityIdentifier;

	/**
	 * Attributes property
	 * 
	 * @var EWSType_unsignedInt
	 */
	public $Attributes;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'SecurityIdentifier',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Attributes',
				'required' => false,
				'type' => 'unsignedInt',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SidAndAttributesType