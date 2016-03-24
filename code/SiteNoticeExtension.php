<?php
/**
 * Add a Site Notice to alert users to some information
 *
 * @author Creative Gorillas
 * @package Site Notice
*/
class SiteNoticeExtension extends DataExtension {

	/**
	 * @var array
	*/
	private static $db = array (
		"SiteNotice" => "Varchar",
	);

	/**
	 * @param FieldList $fields
	*/
	public function updateCMSFields(Fieldlist $fields) {
		$fields->addFieldsToTab('Root.SiteNotice', array(
			TextField::create('SiteNotice', 'Site Notice'),
		));
	}


}