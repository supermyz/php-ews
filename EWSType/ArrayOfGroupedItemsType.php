<?php
/**
 * Definition of the ArrayOfGroupedItemsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfGroupedItemsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfGroupedItemsType {
	/**
	 * GroupedItems property
	 * 
	 * @var EWSType_GroupedItemsType
	 */
	public $GroupedItems;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'GroupedItems',
				'required' => false,
				'type' => 'GroupedItemsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfGroupedItemsType