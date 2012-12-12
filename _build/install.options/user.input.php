<?php

/**
 * Script to interact with user during Flexibility package install
 *
 * Copyright 2011 Menno Pietersen <info@designfromwithin.com>
 * @author Menno Pietersen <info@designfromwithin.com>
 * 13/12/2011
 *
 *  is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 *  is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package flexibility
 */
/**
 * Flexibility is a fully functional MODX Revolution website. Quickstart projects by creating a fully working MODX Revolution website with just one package.: Script to interact with user during Flexibility package install
 * @package flexibility
 * @subpackage build
 */
/* Use these if you would like to do different things depending on what's happening */

/* The return value from this script should be an HTML form (minus the
 * <form> tags and submit button) in a single string.
 *
 * The form will be shown to the user during install
 * after the readme.txt display.
 *
 * This example presents an HTML form to the user with one input field
 * (you can have more).
 *
 * The user's entries in the form's input field(s) will be available
 * in any php resolvers with $modx->getOption('field_name', $options, 'default_value').
 *
 * You can use the value(s) to set system settings, snippet properties,
 * chunk content, etc. One common use is to use a checkbox and ask the
 * user if they would like to install an example resource for your
 * component.
 */

$output = '<h1>Thank you for using Flexibility</h1>
<p>This package is meant to be used once to quick-start MODX website projects. It will install a lot of things and provide a nice responsive MODX website based on the Foundation framework from ZURB.</p>
<p>Any needed packages (like Wayfinder) will be installed automatically by the Flexibility package. You will be able to update and edit any sub-packages at a later date.</p>
<h2>!!! ATTENTION !!!</h2>
<ul>
<li>The <b>Slider items</b> Template Variable (called multiItemsGrid) will not work after install, you need to open the multiItemsGrid Template Variable, and re-save it.
Simply go to: <b>Elements tree</b> > <b>Template Variables</b> > <b>Flexibility</b> and open the <b>multiItemsGrid</b> Template Variable.
Edit any field (like the name, remove the final <b>e</b> and retype it) and re-save the Template Variable. Now the Slider Items option will work as expected.<br>
(If anybody knows how to fix this let me know!)</li>
<li>If you change or edit any Chunk, Snippet, Template Variable or Plugin that was included in the Flexibility package.<br>
<b>please rename it!</b> Or it will be overwritten on any future updates.</li>
<h3>Installation options</h3>
<label for="sitename">Enter the website name (you can change this later)</label>
<p>&nbsp;</p>
<input type="text" name="sitename" id="sitename" value="" align="left" size="40" maxlength="60" />
<p>&nbsp;</p>
<input type="checkbox" name="change_sitename" id="change_sitename" checked="checked" value="1" align="left" />&nbsp;&nbsp;
<label for="change_sitename">Set site name on install</label>
<p>&nbsp;</p>';

return $output;