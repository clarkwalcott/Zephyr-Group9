# Sprint 1 Design Document 

## Deployment Environment

- Our first step was creating a virual environment for zephyr to run inside. From here we were able to activate and enter the VM. 
- After installing the needed tools such as homebrew, additional python packages, and west, we were then able to clone the zephyr source code from the repository onto our local machine.
- Next we downloaded a toolchain for zephyr to use, and moved it to home/opt, for this is where zephyr looks for the toolchain by default.
- From here we were able to set up the build environment, as well as build the application. We also had to set the toolchain variable and the zephyr variant in order for our board to recognize it
- Lastly we found a board that acts as an emulator, so we were able to see output from our terminal by running 'ninja run'
- We chose the DBOARD QEMU cortex_m3 because of its emulator capabilities, this way a physical board or server isnt necessary to visualize the output  
- Right now there is no data that we feel the need to keep safe and store during reset, so a database wont be needed with our project

## Functional Requirements

1. Parent Use Case
	- The emulator should allow full access to the data and handling capabilities to the parent
	- 
	- ... etc.
2. Grandparent Use Case	
	- The grandparent can login from the main page
	- From their dashboard, the grandparent can:
		- Push a button to call for help
		- Message other users (family members)
		- Monitor the children
3. Child Use Case

## Database Design

### ERD

**some kind of logical ERD, at least, that lets us know what data is being managed**
![ERD](./images/erd.png)

### DDL 

n/a

## Files that are stubbed out in your repository, with comments about the use cases they are connected to. These sections may not all exist for the Zephyr project teams. Simply explain them as best you can. 

### User Interface Files

1. It seems there will not be a user interface that is defined. Interaction will take place, but no UI will be necessary.


### Model Files (Database Access)

1. first one
2. second one
3. etc


### Controller Files (API or other)

1. first one 
2. second one
3. etc. 

## Describe languages you need to use, and any gaps in skills on your team. 

1. Python 
    - Some members have base knowledge with this language, but will need to build on this in order to complete our project.
2. C
    - Due to previous courses taken here at Mizzou, we are all well equipped to write functioning code in C.
3. Skill gaps, if any, otherwise specify who is doing what
    - Gap 1: None of us have experience with emulators, or how zephyr interacts 
    - name
    - skill gap 