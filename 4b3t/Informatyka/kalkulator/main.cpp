#include <iostream>

using namespace std;

int silnia(int n){
  int w;

  if(n<=1)
    w=1;
  else
    w=n*silnia(n-1);

  return w;
}

int sum(int a, int b){
  return a+b;
}

int roznica(int a, int b){
  return a-b;
}

int iloczyn(int a, int b){
  return a*b;
}

int iloraz(int a, int b){
  return a/b;
}

int calculator(int s, char op, int a){
    switch(op){
      case '+':

      return sum(s,a);
      break;


    case '-':

      return roznica(s,a);
      break;


    case '*':

      return iloczyn(s,a);
      break;


    case '/':
      if(a==0){
        return 0;
      }
      else{
        return iloraz(s,a);
      }
      break;
    }
}

int main() {

  int s=0, a;
  char op;
  int cont;

    do{
        cout<<"operator:";
        cin>>op;
        cout<<"liczba:";
        cin>>a;
        s=calculator(s,op,a);
        cout<<s<<endl;
        cout<<"continuation(1):";
        cin>>cont;
    }while(cont==1);



}
