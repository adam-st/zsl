#include <iostream>

using namespace std;

unsigned int n;
long long silnia;
int przypadki,jednosci,dziesiatki;

int main()
{
    cin>>przypadki;

    for(int i=0; i<przypadki; i++)
    {
        cin>>n;
        if(n>10==false)
        {
            silnia=1;
            for(int i=1; i<=n; i++)
            {
                silnia=silnia*i;
            }
            jednosci=silnia%10;
            dziesiatki=silnia/10%10;
            cout<<dziesiatki<<" "<<jednosci<<endl;
        }
        else
            cout<<"0 0"<<endl;
    }

    return 0;
}
