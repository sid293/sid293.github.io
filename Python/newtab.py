import pyautogui;
pyautogui.hotkey('win','pagedown');
pyautogui.PAUSE = 2;
try:
	a,b = pyautogui.locateCenterOnScreen('yt.png');
	pyautogui.click(a,b); 
except TypeError:
	pyautogui.alert("not found");
