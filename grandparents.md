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
2. User gets logged out unexpectedly
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
