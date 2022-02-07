#include <stdio.h>
#include <string.h>
#include <stdlib.h>

struct node{
    struct node* plink;
    struct node* nlink;
    int data;
};

void swap(int *one){
    int temp;
    temp = *one;
    printf("%d",temp);
    
}
int main(){
    //MULTI SELF REFRENTIAL STRUCTURE
    // printf("begin\n");
    // struct node obj1;
    // obj1.data = 23;
    // obj1.plink = NULL;

    // struct node obj2;
    // obj2.data = 24;

    // struct node obj3;
    // obj3.nlink = NULL;
    // obj3.data = 25;

    // obj1.nlink = &obj2;
    // obj2.plink = &obj1;
    // obj2.nlink = &obj3;
    // obj3.plink = &obj2;
    // printf("%d",obj3.plink -> data);

    //TESTING IF VOID IS TAKING POINTER OR INTEGER
    // int dat = 23;
    // int *choco = &dat;
    // swap(choco);
    return 0;
}