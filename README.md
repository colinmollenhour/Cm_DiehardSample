# Cm_DiehardSample  #

This module is a sample implementation of [Cm_Diehard](https://github.com/colinmollenhour/Cm_Diehard)
on a clean installation with the default theme and no additional extensions installed.

There are many ways to do what this module does, so it is only a reference or starting point
for a custom implementation and it will not be modified to work with third-party plugins.

This is a work-in-progress so bug fixes are welcome! This reference implementation is primarily
for Magento Community Edition so patches for operation with EE are welcome only as long as they
don't break, cripple or otherwise make operation with CE overly complex.

## Installation

(instructions need a lot of work)

1. Install Magento CE (1.6 through 1.8 should work)
2. Install [modman](https://github.com/colinmollenhour/modman) and run `modman init` in the Magento root directory.
2. `modman clone https://github.com/colinmollenhour/Cm_Diehard.git`
3. `modman clone https://github.com/colinmollenhour/Cm_DiehardSample.git`
4. Configure under System > Configuration > Advanced > System > Full-Page Cache Configuration (Cm_Diehard)
5. Modify `app/etc/local.xml` as necessary (Local and Revalidating backends - see source code vardocs)
6. Enable "Full Page Cache" under System > Cache Management

## License

This module is distributed under the GPLv3 license. To receive a copy
under a different license please contact the author.

Cm_DiehardSample - Sample implementation of Cm_Diehard on Magento CE.
Copyright (C) 2014  Colin Mollenhour (http://colin.mollenhour.com)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see http://www.gnu.org/licenses/
