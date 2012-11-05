## Eat.is application for Kohana 3.3

This is complete application for kohana framework version 3.3 allowing people to find some places by distance, food types, categories, price range, etc. You can get directions to place, read its review and rate it.

### Dependecies

* [Database module](http://github.com/kohana/database)
* [ORM module](http://github.com/kohana/orm)
* [Kohana 3.3](http://github.com/kohana/core/tree/3.3/master)

### Installation

1. git clone git@github.com:birkir/Eat.is.git
2. git submodule init
3. git submodule update
4. mysql -u [username] -p[password] [database] < __database.sql__
5. modify __application.php__ to your specifications.
6. copy modules/database/config/database.php -> application/config/database.php and modify.
6. chmod 0777 logs cache
7. browse to localhost !

### Copyright (c) 2012

The Eat.is application code and design is copyright 2012 by following authors:

* Birkir R Gudjonsson http://birkir.forritun.org email birkir.gudjonsson@gmail.com

This license is a legal agreement between you and the Kohana Team for the use of Kohana Framework (the "Software"). By obtaining the Software you agree to comply with the terms and conditions of this license.
Copyright © 2007–2012 Kohana Team. All rights reserved.
Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
Neither the name of the Kohana nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
