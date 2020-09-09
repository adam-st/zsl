#include <iostream>

using namespace std;

int main()
{
    short int t;
    cin>>t;

    for(int i=0; i<t; i++)
    {
        short int vsr, v1, v2;
        cin>>v1>>v2;
        vsr= (2*v1)*v2 /(v1 + v2);
        cout<<vsr<<endl;
    }

    return 0;
}
