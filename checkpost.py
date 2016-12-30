#!/usr/bin/python

import os
import sys
import re

v = ''.join(sys.argv[1:])
w = ''.join(sys.argv[2:])
v1 = len(v)
w1 = len(w)

def main():
	if v1<6 or v1>7:
		print '*length invalid'
	elif not re.match("([A-Z]{1}[0-9]{1}[A-Z]{1})([0-9]{1}[A-Z]{1}[0-9]{1})", v):
		print '*keep letters in upper case and enter an canadian postcode(eg.H2X 3R2)'
	else:
		print ''




if __name__ == '__main__':
	main()