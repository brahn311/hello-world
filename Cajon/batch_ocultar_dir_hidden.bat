cls 
@ECHO OFF 
title Folder hidden 
if EXIST "HTG Locker" goto UNLOCK 
if NOT EXIST hidden goto MDLOCKER 
:CONFIRM 
echo Are you sure you want to lock the folder(Y/N) 
set/p "cho=>" 
if %cho%==Y goto LOCK 
if %cho%==y goto LOCK 
if %cho%==n goto END 
if %cho%==N goto END 
echo Invalid choice. 
goto CONFIRM 
:LOCK 
ren hidden "HTG Locker" 
attrib +h +s "HTG Locker" 
echo Folder locked 
goto End 
:UNLOCK 
echo Enter password to unlock folder 
set/p "pass=>" 
if NOT %pass%== PASSWORD goto FAIL 
attrib -h -s "HTG Locker" 
ren "HTG Locker" hidden 
echo Folder Unlocked successfully 
goto End 
:FAIL 
echo Invalid password 
goto end 
:MDLOCKER 
md hidden 
echo hidden created successfully 
goto End 
:End
pause
exit
