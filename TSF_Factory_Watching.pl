#!/usr/bin/perl

use strict ;
use warnings ;
use Linux::Inotify2 ;

#このディレクトリ監視
my $watch_dir =  './';
my $inotify = Linux::Inotify2->new or die $!;
