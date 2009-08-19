<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  The Mana World Server
 *  Copyright 2009 The Mana World Development Team
 *
 *  This file is part of The Mana World.
 *
 *  The Mana World  is free software; you can redistribute  it and/or modify it
 *  under the terms of the GNU General  Public License as published by the Free
 *  Software Foundation; either version 2 of the License, or any later version.
 *
 *  The Mana  World is  distributed in  the hope  that it  will be  useful, but
 *  WITHOUT ANY WARRANTY; without even  the implied warranty of MERCHANTABILITY
 *  or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
 *  more details.
 *
 *  You should  have received a  copy of the  GNU General Public  License along
 *  with The Mana  World; if not, write to the  Free Software Foundation, Inc.,
 *  59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 */

/*
 * define some constants to identify the current running version of tmwweb
 */
define ('TMWWEB_VERSION', '1.0.0');
define ('TMWWEB_VERSION_DATE', '2009-08-19');

/*
|--------------------------------------------------------------------------
| Ranges to display user levels
|--------------------------------------------------------------------------
|
| The table tmw_accounts has a level column, that shows the priviledged level
| of a user. To visualize the level of a user in the management area, there
| should be names for each levels or ranges of levels.
|
| A normal player would have permissions of 1
| A tester would have permissions of 3 (AL_PLAYER | AL_TESTER)
| A dev would have permissions of 7 (AL_PLAYER | AL_TESTER | AL_DEV)
| A gm would have permissions of 11 (AL_PLAYER | AL_TESTER | AL_GM)
| A admin would have permissions of 255 (*)
|
| see tmwserv/src/defines.h
|    AL_BANNED =   0,     < This user is currently banned.
|    AL_PLAYER =   1,     < User has regular rights.
|    AL_TESTER =   2,     < User can perform testing tasks.
|    AL_DEV    =   4,     < User is a developer and can perform dev tasks
|    AL_GM     =   8,     < User is a moderator and can perform mod tasks
|    AL_ADMIN  =  128     < User can perform administrator tasks.
|
*/

define('AL_BANNED',   0);
define('AL_PLAYER',   1);
define('AL_TESTER',   2);
define('AL_DEV',      4);
define('AL_GM',       8);
define('AL_ADMIN',  128 );


?>
