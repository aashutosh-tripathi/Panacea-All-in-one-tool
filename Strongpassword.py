import re
import sys
#Password >= 8 characters
length = re.compile(r'.{8,}')
#Password Contains an upper case letter
upper = re.compile(r'[A-Z]')
#Password Contains a lower case letter
lower = re.compile(r'[a-z]')
#Password Contains a digit
digit = re.compile(r'[0-9]')        


def pass_strength_checker(text):
    if length.search(text) is None:
        return False
    if upper.search(text) is None:
        return False
    if lower.search(text) is None:
        return False
    if digit.search(text) is None:
        return False
    else:
        return True


password = sys.argv[1]

if pass_strength_checker(password) is True:
    #when password is Strong
    print(1)
else:
    #when password is Weak
    print(0)
