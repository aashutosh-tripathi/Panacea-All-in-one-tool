import shutil
import os
import sys
fname=input("Enter Source path: ")
dest=input("Enter destination path: ")
start=input("Enter starting string: ")
a=len(start)
try:
    os.chdir(fname)
except:
    print("Wrong Address")
    sys.exit()
for file in os.listdir(fname):
    b=file[0:a]
    if b==start:
        shutil.move(file,dest)
    

