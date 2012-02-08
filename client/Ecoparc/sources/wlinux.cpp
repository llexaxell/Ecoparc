// This file is part of Ecoparc project.
//
// Ecoparc project is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Ecoparc project is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Ecoparc project.  If not, see <http://www.gnu.org/licenses/>.
//

#include "wlinux.h"
#include <QDebug>
#include <QProcess>

wlinux::wlinux()
{
}
void wlinux::shutdown() {

   qDebug() << "Linux shut";
   QProcess::execute("shutdown -h now");
}

void wlinux::sleep() {

   qDebug() << "sleep linux:";
   QProcess::execute("pmi action suspend");
}

void wlinux::initialize() {
    qDebug() << "initialize() OS:";
}