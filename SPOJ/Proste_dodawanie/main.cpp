#include <iostream>

using namespace std;

int main()
{
    int testy,a,n;

    cin>>testy;

    for(int i=0; i<testy; i++)
    {
        cin>>n;
        int sum=0;

        for(int i=0; i<n; i++)
        {
            cin>>a;
            sum+=a;
        }
        cout<<sum<<endl;
    }


    return 0;
}
