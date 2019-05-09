# How to set up Zephyr
Web-access for fake boards using mac is not worked out. It may be possible for someone with a deep understanding of the inner workings of the mac networking architecture.

Currently, this all holds only for a linux operating system. On mac, one might need to set up a virtual environment to get the network features to run.
Network features will not work on the window's ubuntu app. Any code that asks for the board to connect to the internet will not load.

## Dependencies:
* Python 3.5
* Cmake
* pip3
* python module: elftools
> pip3 install pyelftools


## Set up Zephyr



From: <https://docs.zephyrproject.org/latest/getting_started/installation_linux.html>

## Setup network using net-tools
You will need at least 3 terminals.

In terminal 1:
  Go to /zephyrproject/net-tools and type:
  > make
  
  > ./loop-socat.sh

In terminal 2:
  Go to /zephyrproject/net-tools and type:
  > sudo ./loop-slip-tap.sh

In terminal 3:
  > iptables -t nat -A POSTROUTING -j MASQUERADE -s 192.0.2.1

  > sysctl -w net.ipv4.ip_forward=1

In terminal 3 or 4:
  Build board as described in next section.

From: <https://docs.zephyrproject.org/latest/subsystems/networking/qemu_setup.html#networking-internet>

## Build board.

In start (zephyr) folder type:
> source bash zephyr-env.sh
In project folder type:

> mkdir build3

> cd build3

> export GNUARMEMB_TOOLCHAIN_PATH='~/opt/gcc-arm-none-eabi-7-2017-q4-major/'

> export ZEPHYR_TOOLCHAIN_VARIANT=gnuarmemb

> cmake -GNinja -DBOARD=qemu_cortex_m3 ..

> ninja

To leave the virtual board type:

> control a

> x
