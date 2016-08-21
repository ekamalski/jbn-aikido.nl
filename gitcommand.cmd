@echo off
:GIT_COMMAND
    @set VERSION=2016-04-29
    @set GIT_EXE=C:\PortableApps\GitPortable\App\Git\bin\git.exe
    @call :set_remote
    @echo.
    @echo INFO, %~nx0, Version: %VERSION%, Remote: %REMOTE%
    @echo.
    @call :setdt 
    @call :git_loop
    @goto :eof

:SET_REMOTE    
    @set REMOTE=false
    @if exist nieuwsbrief set REMOTE=true
    @goto :eof
    
:GIT_LOOP    
    @call :git_pull
    @call :git_status
    @set ANS=s
    @set /p ANS="ASK, Git command? (${FILE_TO_ADD}/commit/status/quit) [%ANS%]: "
    @if "%ANS%" == "q" goto :eof
        @echo.
        @if "%ANS%" == "c" (
            @call :git_commit
            @REM  :git_push
        ) else if "%ANS%" == "s" (
            @REM echo DBG, status
        ) else (
            @call :git_add %ANS%
        )
        goto :git_loop
    )
    goto :eof
    
:GIT_ADD
    @%GIT_EXE% add %1
    @echo.
    @goto :eof

:GIT_COMMIT
    @echo INFO, Git commit
    @call :setdt
    @%GIT_EXE% commit -a -m %DT%
    @echo.
    @goto :eof
    
:GIT_PUSH
    @if not "%REMOTE%" == "true" goto :eof
    @echo INFO, Git push
    @%GIT_EXE% push
    @echo.
    @goto :eof

:GIT_PULL
    @if not "%REMOTE%" == "true" goto :eof
    @echo INFO, Git pull
    @%GIT_EXE% pull
    @echo.
    @goto :eof
    
:GIT_STATUS
    @echo INFO, Git status
    @%GIT_EXE% status
    @echo.
    @goto :eof

:SETDT
    @set YYYY=%DATE:~9,4%
    @set MM=%DATE:~6,2%
    @set DD=%DATE:~3,2%
    @if "%TIME:~0,1%" == " " (
        @set DT=%YYYY%-%MM%-%DD%_0%TIME:~1,1%.%TIME:~3,2%
    ) else (
        @set DT=%YYYY%-%MM%-%DD%_%TIME:~0,2%.%TIME:~3,2%
    )
    @echo INFO, DT: %DT%    
    @goto :eof