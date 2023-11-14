#include <iostream>

using namespace std;

class Animal{
    protected:
        int age;
    public:
        string name;
        void birthday(){
            age++;
        }
        Animal(string n, int a){
            name = n;
            age = a;
        }
};

class Cat : public Animal {
    public:
        Cat(string c, int a) : Animal(c, a) {
            
        };
        void meow(){
            cout << "meow!\n";
        }
};
class Dog : public Animal{
    public:
        Dog(string c, int a) : Animal(c, a) {
            
        };
        void woof(){
            cout << "woof!\n";
        }
};

int main() {
    Cat cat1("Mincis", 2);
    cat1.meow();
    Dog dog1("Reksis", 6);
    dog1.woof();
    return 0;
}