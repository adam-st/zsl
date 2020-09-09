#include <iostream>
#include <string>

using namespace std;

int main()
{
    int testy;
    cin>>testy;

    for(int i=0; i<testy; i++)
    {
        int liczby;

        cin>>liczby;
        int tablica[liczby];

        for(int i=0; i<liczby; i++)
        {
           cin>>tablica[i];
        }

        for(int i=liczby-1; i>=0; i--)
        {
            cout<<tablica[i]<<" ";
        }
        cout<<endl;
    }
    return 0;
}
