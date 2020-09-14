#include <iostream>

using namespace std;

void zad1()
{
    int a, b, x;

    cout<<"Podaj:a, b, x: ";
    cin>>a>>b>>x;

    if(a==0)
    {
        if(b==0)
            cout<<"Nieskonczenie wiele znakow"<<endl;
        else
            cout<<"Rownanie sprzeczne";
    }
    else
    {
        x=-b/a;
        cout<<x;
    }
}

void zad2()
{
    int n, s;
    cout<<"Podaj n: ";
    cin>>n;
    s=n*(n+1)/2;
    cout<<s;
}

void zad3()
{

void zad4()
{

}

    int n, s;
    cout<<"Podaj n: ";
    cin>>n;

    if(n<1)
    {
        cout<<"n<1";
    }
    else
    {
    s=n*(n+1)/2;
    cout<<s;
    }
}
int main()
{
    zad3();
    return 0;
}
