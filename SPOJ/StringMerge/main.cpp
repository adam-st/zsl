#include <iostream>
#include <cstring>
#include <cstdlib>

using namespace std;

string string_merge(char ch1, char ch2)
{
    string chain;
    chain+=ch1;
    chain+=ch2;

    return chain;
}

int main()
{
    int t;
    cin>>t;

    for(int i=0; i<t; i++)
    {
        string t1, t2;

        cin>>t1>>t2;

        int length;

        if(t1.length()>t2.length())
            length=t1.length();
        else
            length=t2.length();

        string chain="";

        for(int i=0;i<length;i++)
        {


            chain+=string_merge(t1[i],t2[i]);

        }
        cout<<chain<<endl;
    }

    return 0;
}
