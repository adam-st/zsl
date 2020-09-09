#include <iostream>
#include <string>

using namespace std;

int main()
{
    int linie;
    cin>>linie;

    for(int i=0; i<linie; i++)
    {
        string tekst, tekst2="";

        int ile=0;
        int odwrotnie=0;

        cin>>tekst;

        int liczba=stoi(tekst);

        do
        {
            for(int i=tekst.length()-1; i>=0; i--)
            {
                tekst2+=tekst[i];
            }

            odwrotnie=stoi(tekst2);

            if(liczba==odwrotnie)
            {
                break;
            }

            ile++;
            liczba+=odwrotnie;
            tekst=to_string(liczba);
            tekst2="";
        }
        while(true);

        cout<<liczba<<" "<<ile<<endl;
    }
    return 0;
}
