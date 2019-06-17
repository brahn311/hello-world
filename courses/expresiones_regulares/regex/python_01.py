#!/usr/bin/python

import re
# importamos la libreria de expresiones regulares

pattern = re.compile(r'^([\d]{4})\-\d\d-\d\d,(.*),Friendly,.*$')
# guardamos la regex y pre compilamos la expresion

f = open("./results.csv", "r") 

for line in f:
	# print line
	# para probar la lectura del archivo comentando el patron

	res = re.match(pattern, line)
	if res:
		print "%s\n" % res.group(2)
	
f.close()

