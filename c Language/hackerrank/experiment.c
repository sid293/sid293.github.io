#include <stdio.h>
#include <string.h>
/*
Add `int max_of_four(int a, int b, int c, int d)` here.
*/

int main() {
    int a, b, c, d;
    scanf("%d %d %d %d", &a, &b, &c, &d);
    function max_of_four(a,b,c,d){
        int great;
        if(a>=b and a>=c and a>=d){
            great =a;
        }
        elseif(b>=a and b>=c and b>=d){
            great = b;
        }
        elseif(c>=a and c>=b and c>=d){
            great = c;
        }
        elseif(d>=a and d>=b and d>=c){
            great =d;
        }
        return great;
    }
    int ans = max_of_four(a, b, c, d);
    printf("%d", ans);
    
    return 0;
}