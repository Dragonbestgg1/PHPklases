// Online C++ compiler to run C++ program online
#include <iostream>

using namespace std;

class Dog {
    public:
        string name;
        Dog(string n, int a){
            name = n;
            age = a;
        }
        void birthday(){
            age++;
        }
        void woof(){
            cout << "Woof Woof!\n";
        }
    private:
        int age;

};

int main() {
    Dog dog1("Reksis", 6);
    dog1.woof();
    return 0;
}