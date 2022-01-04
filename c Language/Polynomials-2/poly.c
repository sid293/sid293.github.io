#include <string.h>
#include <stdlib.h>
#include <stdio.h>

int main (){
    printf("starting");    
    //CALCULATING SIZE OF ARRAY
    // int nums[]= {1,2,3,4};
    // int i=0;
    // int length = sizeof(nums)/sizeof(nums[0]);
    // printf("%d",length);

    //STORING INTEGER VALUES INTO ARRAYS
    // char storage[4];
    // int value = 3243;
    // sprintf(storage,"%d",value);
    // printf("%c",storage[1]);

    //COUNTING NUMBER OF ELEMENTS IN INT VARIABLE
    // int national = 67868;
    // int count = 0;
    // for(national;national!=0;national=national/10){
    //     count ++;
    // }
    // printf("%d",count);

    //WRITING POLYNOMIAL 
    int counts;
    printf("\ntype start of polynomial digits ");
    scanf(" %d",&counts);
    int size = 0;
    int till = 0;
    for(till = counts;till!=0;till=till/10){
        size ++;
    }
    int countsArray[size];
    int i;
    for(i=0;i<=size-1;i++){
        countsArray[i]=counts % 10;
        counts = counts/10;
    }
    // sprintf(countsArray,"%sd",counts);
    for(size;size>1;size--){
        printf("%dx^%d+",countsArray[size-1],size-1);
    }
    printf("%d",countsArray[0]);
    

    //WRITING VARIABLE TO ARRY
    // int rant = 32432;
    // int i;
    // int rar[5];
    // for(i=0;i<=4;i++){
    //     rar[i] = rant % 10;
    //     rant = rant/10;
    //     printf("\n%d",rar[i]);
    // }
    
    return 0;
}
