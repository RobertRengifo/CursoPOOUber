public class Main {
    public static void main(String[] args){
        System.out.println("Hello World");
        Car car = new Car("LZV-202", new Account("Andres Suarez","1062298742"));

        //System.out.println("Car License: " + car.license);
        car.printDataCar();
    }
}
