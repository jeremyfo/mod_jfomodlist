<?php
/**
* Admin Module to display mod info for Joomla 1.5
* Author:  Jeremy Ford - jeremyfo@gmail.com
* Copyright 2011 jfo.me
* http://www.jfo.me
* License:  GNU General Public License
*
* File: default.php 
*/
defined( '_JEXEC' ) or die( 'Restricted access' );
$gfx = null;
?>

<table class="adminlist">
		<thead>
			<tr>
				<td class="title">
					<strong><?php echo 'id' ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Module' ); ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Position' ); ?></strong>
				</td>
				<td class="title"><center>
					<strong><?php echo JText::_( 'Published' ); ?></strong></center>
				</td>
			</tr>
		</thead>
<tbody>
<?php foreach($items as $items) {	?>
			<tr>
				<td width="5%">
					<?php echo $items->id; ?>
				</td>
				<td>
				     <a href="<?php echo $link . 'index.php?option=com_modules&client=0&task=edit&cid[]=' . $items->id;?>"> <?php echo $items->title;?> </a>
				</td>
				<td>
					<?php echo $items->position; ?>
				</td>
				<td><center>
				    <?php if($items->published) $gfx = "check.png"; else $gfx = "x.png";?>
				    <?php echo '<img src="' . $link . 'modules/mod_jfomodlist/tmpl/'. $gfx . '"/>';?></center>
				</td>
			</tr>
			<?php } ?>
		</tbody>
</table>
<table class="adminlist">
        <thead>
			<tr>
				<td class="title">
					<center><strong><?php echo JText::_( 'Total Modules' ); ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Total Enabled' ); ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Total Disabled' ); ?></strong></center>
				</td>
			</tr>
		</thead>
		<tbody>
		    <tr>
		        <td>
		            <center><?php echo $total;?></center>
		        </td>
		        <td>
		            <center><?php echo $total_en;?></center>
		        </td>
		        <td>
		            <center><?php echo $total_dis;?></center>
		        </td>
		    </tr>
		</tbody>
</table>
<center><a href="http://jfo.me">jfo.me</a></center>
