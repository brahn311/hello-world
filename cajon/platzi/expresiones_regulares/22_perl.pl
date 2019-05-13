#!/usr/bin/perl

# Video_22
# Perl

use strict;
use warnings;

my $t = time;
open (my $f, "./regex/results.csv") or die ("No hay archivo");

while(<$f>) {
	print $_;
	#chomp;
	#if()
}

close($f);