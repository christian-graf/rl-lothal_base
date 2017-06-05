@echo.
@echo off

SET app=%0
SET baseDirectory=%~dp0

php -qf "%baseDirectory%artisan" %*
echo.

exit /B %ERRORLEVEL%