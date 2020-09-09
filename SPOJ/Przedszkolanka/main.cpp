#include <iostream>

using namespace std;

int main()
{
    int zestawy;
    cin>>zestawy;

    for(int i=0; i<zestawy; i++)
    {
        int grupaA, grupaB, nwd, nww, mniejsza, wieksza;
        cin>>grupaA>>grupaB;

        if(grupaA>grupaB)
        {
            wieksza=grupaA;
            mniejsza=grupaB;
        }
        else
        {
            wieksza=grupaB;
            mniejsza=grupaA;
        }

        while(grupaA!=grupaB)
        {
            if(grupaA>grupaB)
            {
                grupaA-=grupaB;
            }
            else
            {
                grupaB-=grupaA;
            }
        }
        nwd=grupaA;

        nww=mniejsza/nwd*wieksza;

        cout<<nww<<endl;
    }

    return 0;
}
