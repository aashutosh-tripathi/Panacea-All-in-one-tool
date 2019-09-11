import time
from datetime import datetime as dt
 
hosts_temp='host'

hosts_path = r'C:\Windows\System32\drivers\etc\hosts'
redirect = '127.0.0.1'
sites_to_block = []
print("Enter sites to block : (0 to exit)")
while(True):
    x=input()
    if x=='0':
        break
    sites_to_block.append(x)

print(dt.now())
while True:
    if dt(dt.now().year, dt.now().month, dt.now().day, 8) < dt.now() < dt(dt.now().year, dt.now().month, dt.now().day, 20):
        print('Working Hours : ')
        with open(hosts_path,'r+') as file:
            content = file.read()  
            for site in sites_to_block:
                if site in content:
                    pass
                else:
                    file.write(redirect+' '+site+'\n')
    else:
        with open(hosts_path,'r+') as file:
            content = file.readlines()
            file.seek(0)
            for line in content:
                if not any(site in line for site in sites_to_block):
                    file.write(line)
            file.truncate()
        print('time to play!!!!!')
    time.sleep(5)

