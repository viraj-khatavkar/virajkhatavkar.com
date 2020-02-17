---
id: 2
title: Understanding the sudoers file
excerpt: sudoers file has the rules covering privileges for different users and groups of our server. I have been always confused about the syntax and definitions used to define these privileges through sudoers. I try to explain the rules that can be set in the sudoers file to give apprpriate privileges.
---

`sudoers` file has the rules regarding privileges for different users and groups of our server. It is one of the most important files in the system and needs to be handled with care. Do not try to edit the `sudoers` file without `visudo`. If we try to edit it using a text editor and if any error persists, we might be locked out of the server. `visudo` is a more reliable way as it validates the file after every edit. It doesn't allow us to save until all errors are resolved.


To edit a `sudoers` file, we must use:

```
sudo `visudo`
```

A typical `sudoers` file for a server will have following configuration:

```shell

# This file MUST be edited with the '`visudo`' command as root.
#
# Please consider adding local content in /etc/`sudoers`.d/ instead of
# directly modifying this file.
#
# See the man page for details on how to write a `sudoers` file.
#

Defaults env_reset
Defaults mail_badpass
Defaults secure_path="/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/snap/bin"

# Host alias specification
# User alias specification
# Cmnd alias specification

# User privilege specification
root ALL=(ALL:ALL) ALL

# Members of the admin group may gain root privileges
%admin ALL=(ALL) ALL

# Allow members of group sudo to execute any command
%sudo ALL=(ALL:ALL) ALL

# See `sudoers`(5) for more information on "#include" directives:
#includedir /etc/`sudoers`.d

```

## User Privileges

We will first concentrate on this specific entry:

```
# User privilege specification 
root ALL=(ALL:ALL) ALL
```

The above rule says that:
> A root user can execute any command as any user or any group from any host

The syntax specification for a rule in the `sudoers` file is:

```
user (host)=(user:group) commands
```
We can read the above rule as *A given user can run the specified commands as the specified user or group from the specified hosts*

## Group Privileges
Groups are represented by a % sign before the name. Privileges for sudo group are as follows:
```
# Allow members of group sudo to execute any command 
%sudo ALL=(ALL:ALL) ALL
```
The above rule says that:
> Any user having a group sudo can execute any command as any user or any group from any host

> An user belonging to the sudo group still has to enter password for those commands

## NOPASSWD
We seldom have a need to execute certain commands without a password. A common example demonstrating this would be of an automated deployment script which might require to restart some services or reload nginx after every deploy.
We can modify or add the privileges for certain users in our `sudoers` file. Let us provide the deployer user to reload nginx without password:

```
deployer ALL=(ALL) NOPASSWD:/usr/sbin/nginx reload
```
Alternatively, we can allow the deployer user to run all nginx related commands:

```
deployer ALL=(ALL) NOPASSWD:/usr/sbin/nginx *
```

We can add multiple commands by separating them with commas.
```
deployer ALL=(ALL) NOPASSWD:/usr/sbin/nginx reload,/usr/sbin/php7.0-fpm restart
```

## Note:

> It is advisable to create a new file in /etc/`sudoers`.d directory rather than directly editing the `sudoers` file. All files in /etc/`sudoers`.d directory are automatically loaded.