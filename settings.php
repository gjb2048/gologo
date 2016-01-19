<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's Clean theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_gologo
 * @copyright 2016 byLazyDaisy.uk
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $temp = new admin_settingpage('theme_gologo', get_string('configtitle','theme_gologo'));

    // Invert Navbar to dark background.
    $name = 'theme_gologo/invert';
    $title = get_string('invert', 'theme_gologo');
    $description = get_string('invertdesc', 'theme_gologo');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Brand icon file setting.
    $name = 'theme_gologo/brandicon';
    $title = get_string('brandicon','theme_gologo');
    $description = get_string('brandicondesc', 'theme_gologo');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'brandicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Brand Logo file setting.
    $name = 'theme_gologo/brandlogo';
    $title = get_string('brandlogo','theme_gologo');
    $description = get_string('brandlogodesc', 'theme_gologo');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'brandlogo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_gologo/customcss';
    $title = get_string('customcss', 'theme_gologo');
    $description = get_string('customcssdesc', 'theme_gologo');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_gologo/footnote';
    $title = get_string('footnote', 'theme_gologo');
    $description = get_string('footnotedesc', 'theme_gologo');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}
