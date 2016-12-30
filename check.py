#!/usr/bin/python

import os
import sys
import re

v = ''.join(sys.argv[1:])
w = ''.join(sys.argv[2:])
v1 = len(v)
w1 = len(w)

def main():
	if v1<3 or v1>16:
		print '*length invalid'
	elif not re.match("^[A-Za-z0-9]*$", v):
		print '*input should only contains numbers and letters'
	else:
		print ''




if __name__ == '__main__':
	main()