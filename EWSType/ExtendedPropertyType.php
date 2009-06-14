<?php
/**
 * Definition of the ExtendedPropertyType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ExtendedPropertyType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ExtendedPropertyType {
	/**
	 * ExtendedFieldURI property
	 * 
	 * @var EWSType_PathToExtendedFieldType
	 */
	public $ExtendedFieldURI;

	/**
	 * Value property
	 * 
	 * @var EWSType_string
	 */
	public $Value;

	/**
	 * Values property
	 * 
	 * @var EWSType_NonEmptyArrayOfPropertyValuesType
	 */
	public $Values;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'ExtendedFieldURI',
				'required' => false,
				'type' => 'PathToExtendedFieldType',
			),
			array(
				'name' => 'Value',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Values',
				'required' => false,
				'type' => 'NonEmptyArrayOfPropertyValuesType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ExtendedPropertyType