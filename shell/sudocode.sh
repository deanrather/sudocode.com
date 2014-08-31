#!/bin/bash
# sudocode.sh
# Shows the sudocode logo and other info on login

# Displays all the colours of the rainbow
colours()
{
	echo -e "\e[0;30m - txtblk";
	echo -e "\e[0;31m - txtred";
	echo -e "\e[0;32m - txtgrn";
	echo -e "\e[0;33m - txtylw";
	echo -e "\e[0;34m - txtblu";
	echo -e "\e[0;35m - txtpur";
	echo -e "\e[0;36m - txtcyn";
	echo -e "\e[0;37m - txtwht";
	echo -e "\e[1;30m - bldblk";
	echo -e "\e[1;31m - bldred";
	echo -e "\e[1;32m - bldgrn";
	echo -e "\e[1;33m - bldylw";
	echo -e "\e[1;34m - bldblu";
	echo -e "\e[1;35m - bldpur";
	echo -e "\e[1;36m - bldcyn";
	echo -e "\e[1;37m - bldwht";
	echo -e "\e[4;30m - unkblk";
	echo -e "\e[4;31m - undred";
	echo -e "\e[4;32m - undgrn";
	echo -e "\e[4;33m - undylw";
	echo -e "\e[4;34m - undblu";
	echo -e "\e[4;35m - undpur";
	echo -e "\e[4;36m - undcyn";
	echo -e "\e[4;37m - undwht";
	echo -e "\e[40m - bakblk";
	echo -e "\e[41m - bakred";
	echo -e "\e[42m - bakgrn";
	echo -e "\e[43m - bakylw";
	echo -e "\e[44m - bakblu";
	echo -e "\e[45m - bakpur";
	echo -e "\e[46m - bakcyn";
	echo -e "\e[47m - bakwht";
	echo -e "\e[0m - txtrst";
}

b="\e[0;36m  "
w="\e[0m  "
g="\e[1;32m  "

# banner="\n"
# banner+="$b+---------------------------------------------------------------------------+\n"
# banner+="$b|                                                                           |\n"
# banner+="$b|$g                             __                 __                     $b|\n"
# banner+="$b|$g                 ___      __/ /___  ___ ___  __/ /___                  $b|\n"
# banner+="$b|$g                (__,/ / // _ // _ \/   / _ \/ _ // __                  $b|\n"
# banner+="$b|$g                ___/\__/ \__/ \___/\___\___/\__/ \___                  $b|\n"
# banner+="$b|$g                                                                       $b|\n"
# banner+="$b|                                                                           |\n"
# banner+="$b+---------------------------------------------------------------------------+\n"

user="$(git config --global user.name)"

banner="\n"
banner+="$b+---------------------------------------------------------------------------+\n"
banner+="$b|                                                                           |\n"
banner+="$b|$g                         __                     __                     $b|\n"
banner+="$b|$g           ___        __/ / ___   ___  ___   __/ / ___                 $b|\n"
banner+="$b|$g          (__, / / / / _ / / _ \ /    / _ \ / _ / / __\                $b|\n"
banner+="$b|$g          ___/ \__/  \__/  \___/ \___ \___/ \__/  \___                 $b|\n"
banner+="$b|$g                                                                       $b|\n"
banner+="$b|                                                                           |\n"
banner+="$b+---------------------------------------------------------------------------+\n"
echo -e "$banner"
echo -e "$w    Welcome, $user"
fortune -s | fold -w 70 -s | sed  's/^/      /'
echo 

unset b g w user banner

# TODO

	# Check fortune is installed
	# Check git is installed
	# Only display banner if wide-enough
	# word-wrap the fortune
	# display uptime and other stuffs?
