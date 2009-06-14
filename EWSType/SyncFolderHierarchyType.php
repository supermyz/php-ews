<?php
/**
 * Definition of the SyncFolderHierarchyType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SyncFolderHierarchyType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SyncFolderHierarchyType {
	/**
	 * FolderShape property
	 * 
	 * @var EWSType_FolderResponseShapeType
	 */
	public $FolderShape;

	/**
	 * SyncFolderId property
	 * 
	 * @var EWSType_TargetFolderIdType
	 */
	public $SyncFolderId;

	/**
	 * SyncState property
	 * 
	 * @var EWSType_string
	 */
	public $SyncState;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'FolderShape',
				'required' => false,
				'type' => 'FolderResponseShapeType',
			),
			array(
				'name' => 'SyncFolderId',
				'required' => false,
				'type' => 'TargetFolderIdType',
			),
			array(
				'name' => 'SyncState',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SyncFolderHierarchyType