#include <stdio.h>

unsigned int deret1(int n)

{
  if (n == 1)
    return 3;
  else
    return (deret1(n-1) + 4);
}


unsigned int deret2(int a)
{
	  if (a == 1)
    return 7;
  else
    return (deret2(a-1) - 6);

}


int main()
{
  int x;

  for (x=1; x<=3; x++)
    printf("%4d", deret1(x));

  return 0;
}


