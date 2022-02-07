#include <stdio.h>
#include <stdlib.h>

struct node{
    int value;
    struct node* next;    
};

void printLL(struct node* node){
    while(node != NULL){
        printf("\n %d",node -> value);
        node = node -> next;
    }
}
void printRLL(struct node* first){
    
}
int main(){
    printf("hellow world");
    // struct node *first = (struct node*)malloc(sizeof(struct node));
    // struct node *second = (struct node*)malloc(sizeof(struct node));
    // struct node *third = (struct node*)malloc(sizeof(struct node));
    // first -> value = 32;
    // second -> value = 12;
    // third -> value = 76;
    // first -> next = second;
    // second -> next = third;
    // third -> next = NULL;
    // printLL(first);

    return 0; 
};

