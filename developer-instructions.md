To access user interface, go to:
- [Smart Home](http:ec2-18-220-233-118.us-east-2.compute.amazonaws.com/SmartHome/)

To add users to the database, login to a user with admin privileges.

To access the database directly:
1. Open MySQL Workbench and navigate to the 'Database' drop down menu.
2. Click on 'Manage Connections'.
3. Enter a name in the "Connection Name" space and choose "Standard TCP/IP over SSH" as the connection method.
4. Change SSH hostname to '[EC2 DNS]:22' and SSH username to 'ec2-user'.
5. Download the .pem file and select it's directory path in SSH Key File.
6. Set MySQL Hostname to 'localhost' and MySQL Server Port to '3306'
7. Set Username to 'admin' and store 'smarthomeadmin' in the Password vault.
8. Test the connection, click continue if prompted, and if successful, click close.
9. Double click on the connection from the dashboard and execute any queries from the next page using the lightning bolt.
- NOTE: need to change to different EC2 instance. This functionality is currently unavailable. Had someone hack into and drop all tables multiple times due to security issues.

We've experienced many difficulties in terms of creating a Zephyr build. Some of the issues can be seen in the github issues we made and documented. Maya also created a wiki page titled "Running devices using Zephyr", and explains some of the steps we took, as well as some problems we faced.

The development instructions in terms of Zephyr can be seen here: https://github.com/clarkwalcott/Zephyr-Group9/blob/master/setupZephyrInstructions.md
