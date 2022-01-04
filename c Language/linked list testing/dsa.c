#include <stdio.h>
#include <stdlib.h>
#include <strings.h>

//FOR LINKED LIST
struct node{
    int data;
    struct node* next;
};

//FOR STRUCT
struct nonsense{
    int data;
};

void printLL(struct node* x){
    while(x != NULL){
        printf("%d \n",x->data);
        x = x->next;
    }
}

int main(){
    printf("Ready");
    printf("\n Begin \n");
    // struct node *p;

    //POINTER
    // int *point; 
    // int root = 32;
    // point = &root; 
    // printf("%p \n %d",point , root);
    // printf("\n value of pointer is %d",*point);

    //USING MALLOC  
    // int *ptr = (int*)malloc(sizeof(int)*4);
    // ptr[1] = 1;
    // ptr[2] = 2;
    // ptr[3] = 3;
    // ptr[4] = 4;
    // printf("%p",ptr);
    // printf("\n %d",ptr[2]);

    //STRUCT
    // struct nonsense name = {32};
    // int number;
    // number = name.data;
    // printf("%d",number);

    //LINKED LIST
    // struct node* first = (struct node*)malloc(sizeof(struct node));
    // struct node* second = (struct node*)malloc(sizeof(struct node));
    // struct node* third = (struct node*)malloc(sizeof(struct node));
    // first -> data = 543;
    // first -> next = second;
    // second -> data = 3894;
    // second -> next = third;
    // third -> data = 298374;
    // third -> next = NULL;

    // printLL(first);

    //FREE SPACE OF MALLOC , CALLOC, ****
    char *ptr = (char*)malloc(sizeof(char));
    // strcpy(ptr,"3");
    printf("pointer address %p \n character %s",&ptr , ptr);
    free(ptr);
    printf("\n pointer address %p \n character %s",&ptr , ptr);

    int *choco;
    printf("size choco %d",sizeof(choco));
    choco = (int*)calloc(5,sizeof(int));
    printf("size choco %d",sizeof(choco));

};