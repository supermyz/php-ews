<?php
/**
 * Definition of the WeeklyRecurrencePatternType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the WeeklyRecurrencePatternType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_WeeklyRecurrencePatternType {
	/**
	 * DaysOfWeek property
	 * 
	 * @var EWSType_DaysOfWeekType
	 */
	public $DaysOfWeek;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'DaysOfWeek',
				'required' => false,
				'type' => 'DaysOfWeekType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class WeeklyRecurrencePatternType