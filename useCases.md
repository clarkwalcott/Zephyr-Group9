# Use Case 1
## Title 
Parents, also known as admins, manage users and their privileges.

## Description

Primarily, the parents are able to create, edit, and delete users. In detail, this means they can create both the grandparent and children users. From there they are able to edit their permissions, such as allowing the child to play music, but not allowing them to use appliances such as the stove. They also have the ability to delete users, in this regard an example would be when the children grow too old to be monitored in their rooms. The parents are able to do all things, and are in charge of distributing these privileges to the sub users.

## Triggers 

creation of a user with successful login prompts the start of this use case

## Actors 
Parents

## Preconditions 

- app/site is running
- logged in to running system
- compatible appliances are connected

## Main Success Scenario (Goals)

- parent has successfully created users and logged in
- ability to use the parental controls like granting privileges is active
- parent can monitor sub users, like children, as well as receive and react to alerts

## Alternate Success Scenarios 

- can restrict uses by other users, such as using appliances
- can edit or delete a user after the main success scenario has been executed
- monitors children or grandparent aside from alert scenario

## Failed End Condition 

- parent gives incorrect privileges, resulting in failed condition
- parent unintentionally deletes a user
- alert provided by children or grandparent goes unnoticed

## Extensions

- Web failure during launch
  - System reports the failure, reports to user, and reverts to previous step
- Website does not acknowledge create, edit, or delete action
  - System logs the action, reports to user, reverts to previous state
- Website does not return needed information from action performed
  - System reports lack of information, asks user for information description

## Steps of Execution (Requirements)

- System is booted up without errors
- Parent logs in successfully
- Parent utilizes the application/website (manage users, monitor sub users, etc)
- Parent successfully logs out
- System shuts down accordingly/when needed 

## A use case diagram

https://drive.google.com/file/d/1HDQ3li7yBwUctRFIkVBD_nog_tgIZ5Mq/view?usp=sharing

## Dependent Use Cases

As the admin of this application, there is no dependent use cases. But, both the grandparent and children depend on the parent admin.

# Use Case 2

## Title 
Grandparent interacts with WebPage and devices.

## Description 
The grandparent is granted certain permissions from the admin. With these permissions, the grandparent is able to access certain functionality in the system. In this case, he has access to Messaging, Monitoring Children, and Calling for Help functionalities, but could be granted additional privelidges. 

## Triggers 
Access to WebPage triggers this Use Case
## Actors 

* Grandparent

## Preconditions 

* WebPage is running
* Logged-in to system
* Compatible Devices Connected

## Main Success Scenario (Goals)

The grandparent can:
* Monitor the children
* Call for help in the case of an emergency
* Message other users (parents, children, etc.)

## Alternate Success Scenarios 

* A user is able to execute the functionality that they have been granted access to by the admin (e.g. use certain appliances, unlock front door, etc.).

## Failed End Condition 

* Messaging feature sends message to incorrect recipient
* Alert functionality has false positives

## Extensions

1. Website sends alert when nothing happened
	- Alert is displayed
	- Page waits until user dismisses alert
2. User is logged out unexpectedly
    - Logged out message displayed
    - Login page loaded
3. Device is disconnected
    - Unable to connect message displayed
    - Attempts to reconnect

## Steps of Execution (Requirements)

1. System boots
2. WebPage loads successfully
3. Login is successful
4. User is able to complete desired task
5. Logout or exit page
6. System shuts down when requested

## Use Case Diagram

https://drive.google.com/open?id=1Yy5fSc6m53X1OXBgfksyDnI0_B_L_Piv

## Dependent Use Cases

- Parents (Admin)
- Children Use Case

# Use Case 3

## Title
Children interacting with system

## Description
Children are given permissions from admin to do various activities. They can change attributes about the house, like lights and music, as long as they have google home like stuff.

## Triggers
Child does something or moves.

## Actors
Child, Parent

## Preconditions
Children (or a child) are registered as users. House is set up (with the program running).

## Main Success Scenario (Goals)
- Child can turn on lights and music, if they are allowed to.
- Children location is monitored. If they go somewhere suspicious, parent is notified. Also if baby starts crying.

## Failed End Condition
- Lights/music do not turn on with command.
- Parent and other allowed users are unable to tell where the children are.
- baby crying does not send alert

## Extensions
- Light/music do not turn on:
    1. Children have their own login to website, where they can operate lights/music.
- Child location does not exit:
    1. Attempt reconnect to child cellphone gps.
    2. Try again every half hour.
    3. Do not display child location when location is unknown.
- Baby cry alert does not send:
    1. Have option to change upset baby detection method (to strict volume based, for example).

## Steps of Execution (Requirements)
- Connect with music/light software
- Update child's location
- Recognize cry.
- Security to keep others from accessing information or manipulate house using software.

## A use case diagram
https://drive.google.com/file/d/1KG2Iizy_fjP48qc0kH7eHzP-JZlQRhe4/view?usp=sharing

## Dependent Use Cases
Parent Use Case
