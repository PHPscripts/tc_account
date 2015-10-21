<============= Released by Jeutie - http://jeutie.info =============>

This is a registration page for Trinity Core utilizing SOAP.
It was made to play nicely with newly introduced RBAC system.
The page was designed by Pradox in 2010 (pradoxblog@gmail.com)
And adapted to utilize SOAP in 2013 by Chocochaos (me@chocochaos.com)

In order for this to work you will need to alter your php.ini file
and there please remove the ';' from the following lines:

;short_open_tag
;  Default Value: On
;  Development Value: Off
;  Production Value: Off

;extension=php_soap.dll

Be sure to enable SOAP in your Trinity Core world configuration and
edit the config.php to fit your configuration. The SOAP account has
to be GMlevel 4 (Console) in order to use the account create command.

If you need any support please ask for it in the repository bug tracker not the TrinityCore forum!
Good luck, and have fun.

With kind regards,
Jeutie

AlterEgo's Notes
Modified for 6.x.x use. May error out if used on just the 3.3.5 world server. 
It needs to create the account on a 6.x.x world server because of the inclusion on bnet. This can be acheived by setting the soap port to that 6.x.x realm.
Cleaned up some shitty code.
Looks like the authors have been inactice for quite some time.
