import os

count=1;
location=input("If Directory location is \n same press Y \n different press N \n")
if(location=='Y' or location=='y'):
    sName = input("Enter file name ")
else:
    sName=input("Enter file name ")
    dir=input("Enter Dir path ")

os.chdir(dir)

x=int(input("Choose the below option \n 1 for Renaming Folders \n 2 for Renaming Images \n 3 for Renaming Text Files \n 4 for Renaming Videos \n 5 for Renaming Songs \n"))
if x==1:
    for file in os.listdir():
        new= sName +  str(count).zfill(2)
        prev=file
        count+=1
        os.rename(prev,new)
elif x==2:
    for file in os.listdir():
            new = sName + str(count).zfill(2) + ".jpg"
            prev = file
            count += 1
            os.rename(prev, new)
elif x==3:
    for file in os.listdir():
        new = sName + str(count).zfill(2) + ".txt"
        prev = file
        count += 1
        os.rename(prev, new)
elif x==4:
    for file in os.listdir():
        new = sName + str(count).zfill(2) + ".mp4"
        prev = file
        count += 1
        os.rename(prev, new)
elif x==5:
    for file in os.listdir():
        new = sName + str(count).zfill(2) + ".mp3"
        prev = file
        count += 1
        os.rename(prev, new)
print(" "+str(count)+"files renamed")
