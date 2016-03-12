@echo off
:GIT_COMMAND
    @set VERSION=5.05.10
    @call :set_remote
    @echo.
    @echo INFO, %~nx0, Version: %VERSION%, Remote: %REMOTE%
    @echo.
    @echo INFO, Cyan  : Changes pushed to remote
    @echo INFO, Green : Local changes commited
    @echo.
    @call :setdt 
    @call :git_pull
    @call :git_loop
    @call :git_push
    @goto :eof

:SET_REMOTE    
    @set REMOTE=false
    @if exist nieuwsbrief set REMOTE=true
    @goto :eof
    
:GIT_LOOP    
    @REM call :git_pull
    @call :git_status
    @set /p ANS="ASK, Git command? (add/commit/status/quit) [%ANS%]: "
    @if not "%ANS%" == "q" (
        @echo.
        @if "%ANS%" == "a" (    
            @call :git_add
        )
        @if "%ANS%" == "c" (
            @call :git_commit
            @REM  :git_push
            
        )
        @set ANS=s
        goto :git_loop
    )
    goto :eof
    
:GIT_ADD
    @set /p TO_ADD="ASK, Git add?  []: "
    @if "%TO_ADD%" == "" goto :eof
    @git add %TO_ADD%
    @echo.
    @goto :eof

:GIT_COMMIT
    @echo INFO, Git commit
    @call :setdt
    @git commit -a -m %DT%
    @echo.
    @goto :eof
    
:GIT_PUSH
    @if not "%REMOTE%" == "true" goto :eof
    @echo INFO, Git push
    @git push
    @echo.
    @goto :eof

:GIT_PULL
    @if not "%REMOTE%" == "true" goto :eof
    @echo INFO, Git pull
    @git pull
    @echo.
    @goto :eof
    
:GIT_STATUS
    @echo INFO, Git status
    @git status
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