from car import Car

if __name__=="__main__":
    print("Hola mundo")
    car = Car()
    car.license = "AMR-123"
    car.driver = "Andres Suarez"
    print(vars(car))

    car2 = Car()
    car2.license = "PQR-123"
    car2.driver = "Andres Rengifo"
    print(vars(car2)) 