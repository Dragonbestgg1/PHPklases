#include <iostream>

using namespace std;

class Cat {
    public:
        string name;
        Cat(string n, int a){
            name = n;
            age = a;
        }
        void birthday(){
            age++;
        }
        void meow(){
            cout << "meow!\n";
        }
    private:
        int age;

};

int main() {
    Cat cat1("Mincis", 2);
    cat1.meow();
    return 0;
}