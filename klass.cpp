// Online C++ compiler to run C++ program online
#include <iostream>

using namespace std;

class Car {
    public:
        string brand;
        Car(string b, float m){
            brand = b;
            milage = m;
            cout << brand << " is used\n";
        }
        void makeNoise(){
            cout << "Beep, beep!\n";
        }
        Car(string b){
            brand = b;
            cout << brand << " is created\n";
        }
        ~Car(){
            cout << brand << " got exploded\n";
        }
    private:
        float milage;

};

int main() {
    Car car1("Dacia", 19200);
    car1.makeNoise();
    
    Car* car2 = new Car("Mini");
    car2-> makeNoise();
    delete car2;

    return 0;
}