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
