import time
import pyautogui
import sys
duration = int(sys.argv[1])
timeout = time.time()+60*duration
while time.time()<=timeout:
        pyautogui.moveRel(10, 0, 0.5)
        pyautogui.moveRel(-10, 0, 0.5)
        time.sleep(10)
