#!/bin/sh
while inotifywait -e modify,create,delete -r ./ ; do

done