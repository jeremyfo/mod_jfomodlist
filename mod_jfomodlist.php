<?php
/**
* Admin Module to display mod info for Joomla 1.5
* Author:  Jeremy Ford - jeremyfo@gmail.com
* Copyright 2011 ShoreFast Internet
* http://jfo.me
* License:  GNU General Public License
* 
* ChangeLog
* 
* Version 1.0
*   - Initial Release
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

$lang	=& JFactory::getLanguage();
$doc	=& JFactory::getDocument();
$user	=& JFactory::getUser();
$db     =& JFactory::getDBO();
$link   =& JURI::base();

$total = null;
$total_en = null;
$total_dis = null;

// get the total number enabled modules
$query = 'SELECT COUNT(*) FROM #__modules WHERE published = \'1\' ORDER BY title ASC';
$db->setQuery( $query );
$total_en = $db->loadResult();

//get the total number of disabled modules
$query = 'SELECT COUNT(*) FROM #__modules WHERE published = \'0\' ORDER BY title ASC';
$db->setQuery( $query );
$total_dis = $db->loadResult();

$total = $total_en + $total_dis;

$query = 'SELECT * FROM #__modules ORDER BY title ASC';
$db->setQuery($query);
$items = $db->loadObjectList();

require( dirname( __FILE__ ).DS.'tmpl'.DS.'default.php' );
