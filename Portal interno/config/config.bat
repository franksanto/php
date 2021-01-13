
cd \Documents and Settings\%USERNAME%\Dados de aplicativos\Mozilla\Firefox\Profiles\*default

echo user_pref("browser.startup.homepage" , "http://172.20.128.253/portal/as"); >>prefs.js

cd C:\config

copy SAVE* C:\Users\%username%\Desktop

regedit /s fsantana.reg

regedit /s homepage.reg

net use P: \\srvrodc066\publico

exit



