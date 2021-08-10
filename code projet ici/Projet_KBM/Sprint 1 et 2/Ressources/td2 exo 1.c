#include <stdio.h>
#define N 100

int main(void)
{
    int a,i,j,b,c;
   int tab[N];
   scanf("%d",&a);
   for (i=0;i<a;i++)
   {
       scanf("%d",&tab[i]);
   }
   for (i=0;i<a-1;i++)
   {
       c=tab[i];
       for (j=i+1;j<a;j++)
       {
           if (tab[j]<c)
           {
               b=tab[i];
               tab[i]=tab[j];
               tab[j]=b;

           }
       }
   }
   for(i=0;i<a;i++)
   {
       printf("%d ",tab[i]);
   }
}
