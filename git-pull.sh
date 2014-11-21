#!/bin/sh

git pull
git submodule init
git submodule update
git submodule foreach --recursive git pull origin master
