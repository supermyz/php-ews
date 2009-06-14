<?php
/**
 * Definition of the ArrayOfCalendarPermissionsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfCalendarPermissionsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfCalendarPermissionsType {
	/**
	 * CalendarPermission property
	 * 
	 * @var EWSType_CalendarPermissionType
	 */
	public $CalendarPermission;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'CalendarPermission',
				'required' => false,
				'type' => 'CalendarPermissionType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfCalendarPermissionsType