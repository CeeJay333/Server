#Carsten Junk
#Version 1.0

#this script returns a random String in the following format
#nnnnncnnnnccnnncccnnccccnccccc
#eg:
#12345a6789bc012def34ghij5klmno

import random

def generate_number():
    ###returns a random number between 0 and 9###
    return random.randint(0,9)

def generate_char():
    ###returns a random lowercase char###
    i = random.randint(97,122)
    return chr(i)

randstring = []
for i in range(5,0,-1):
    for chars in range(i,0,-1):
        randstring.append(generate_number())
    for numbers in range(6-i,0,-1):
        randstring.append(generate_char())

result = ""
for i in randstring:
	result = result+str(i)

print(result)	
