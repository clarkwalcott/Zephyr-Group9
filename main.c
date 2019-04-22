#include <zephyr.h>
#include <misc/printk.h>
#include <stdio.h>
#include <stdlib.h>

#define MAX_MESSAGE_LENGTH 500

void helpCall();
void messageOthers();
void notifyParents();

int main(void)
{
	int input;	

        printk("1. Call for help \n");
	printk("2. Message others \n");
	printk("3. Notify parents of children location or emergency \n");
	printk("Please make a selection: ");
//	scanf("%d", &input);

	if(input == 1){
		helpCall();
	}
	
	if(input == 2){
		messageOthers();
	}

	if(input == 3){
		notifyParents();
	}

	return 0;
}

void helpCall(){
	printk("HELP IS ON THE WAY! /n");
}

void messageOthers(){
	
	char message[MAX_MESSAGE_LENGTH];
	
	printk("Type message here: ");
//	scanf("%s", &message);
	printk("Message has been sent. /n");
}

void notifyParents(){
	printk("Parents have been given child location, and on the way to check for emergency! /n");
}

