#include <iostream>
#include <string>

using namespace std;

int main()
{
    int zestawy;


    cin>>zestawy;

    for(int i=0; i<zestawy; i++)
    {
        string tekst, wynik="";
        int ile=1, j=0;

        cin>>tekst;

        while(j<tekst.length())
        {
            ile=1;
            char aktualnyZnak= tekst[j];
            j++;

            for(j; j<tekst.length() && tekst[j]==aktualnyZnak; j++)
            {
                ile++;
            }

            if(ile==1)
                wynik+=aktualnyZnak;
            else if(ile==2)
            {
                wynik+=aktualnyZnak;
                wynik+=aktualnyZnak;
            }
            else
                wynik+=aktualnyZnak + to_string(ile);
        }
        cout<<wynik<<endl;
    }
    return 0;
}
