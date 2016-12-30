#!/usr/bin/python

import os
import sys
import re

v = ''.join(sys.argv[1:])
w = ''.join(sys.argv[2:])
v1 = len(v)
w1 = len(w)

def main():
	if not re.match("([^@|\s]+@[^@]+\.[^@|\s]+)", v):
		print '*invalid email address'
	else:
		print ''




if __name__ == '__main__':
	main()