#include<conio.h>
#include<stdio.h>
#include<windows.h>
//----------------------------------------------------------------------------------
// khai bao chuong trinh con

//----------------------------------------------------------------------------------
main()
{
	int i;
	for(i=1; i<=255; i++)
	{
		SetConsoleTextAttribute(GetStdHandle(STD_OUTPUT_HANDLE), i);
   		printf("\n mau gi day so   %d", i);
	}
	getch();
}


