#include <stdio.h>

int main () {

	char name[6];
	int age;
	double height;

	printf ("what is your name: ");
	scanf ("%s",&name);//the %s is to tell the program to scan a string|char data type
	printf ("what is your age: ");
	scanf ("%d",&age);//the %d is to tell the program to scan a integer data type
	printf ("what is your height: ");
	scanf ("%f",&height);//the %f is to tell the program to scan a double data type

	printf ("Hi, %s. your age is : %d years old and your height is : %f\n",name,age,height);

	return 0;

}
