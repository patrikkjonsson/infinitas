#!/bin/bash
set -e
sudo apt-get update
sudo DEBIAN_FRONTEND=noninteractive apt-get -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" upgrade
sudo apt-get -q -y install git autoconf automake make libtool php5-dev php5-mysql php5-cli php5-xdebug php5-fpm php-apc htop iotop gettext

