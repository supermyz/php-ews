<?php
/**
 * Definition of the NonEmptyArrayOfGroupIdentifiersType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfGroupIdentifiersType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfGroupIdentifiersType {
	/**
	 * GroupIdentifier property
	 * 
	 * @var EWSType_SidAndAttributesType
	 */
	public $GroupIdentifier;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'GroupIdentifier',
				'required' => false,
				'type' => 'SidAndAttributesType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfGroupIdentifiersType