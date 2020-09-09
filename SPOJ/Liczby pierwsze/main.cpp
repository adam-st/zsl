#include <iostream>

using namespace std;

int liczba,test;

int main()
{
    cin>>test;

    for(int i=0; i<test; i++)
    {
        cin>>liczba;

        if(liczba<2==false)
        {
            for(int i=2; i<=liczba; i++)
            {
                if(liczba%i==0)
                {
                    if(i==liczba)
                        cout<<"TAK"<<endl;
                    else
                        cout<<"NIE"<<endl;
                    break;
                }
            }
        }
        else
            cout<<"NIE"<<endl;
    }
    return 0;
}
