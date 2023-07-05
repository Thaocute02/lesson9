<!-- 1. Bài tập Tạo lớp Hình chữ nhật:
Tạo một lớp HìnhChuNhat với các thuộc tính chiều dài và chiều rộng.
Tạo các phương thức để tính diện tích và chu vi của hình chữ nhật. -->
<?php 
class Rec{
    private $width;
    private $length;
    public function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
    }
    public function calcArea(){
        return $this->length * $this->width;
    }
    public function calcPerimeter(){
        return ($this->length * $this->width)*2;
    }
}
$length = 144;
$width = 7;
$rec = new Rec($length, $width);
echo "Bài 1:<br>";
echo "Area: " . $rec->calcArea() . "<br>";
echo "Perimeter: " . $rec->calcPerimeter();

//  2. Bài tập Tạo lớp Điểm 2D:
// Tạo một lớp Diem2D với các thuộc tính x và y.
// Tạo phương thức để tính khoảng cách từ điểm hiện tại tới một điểm khác.
class Point2D{
    private $x, $y;
    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function distance(Point2D $point){
        return sqrt(abs(($point->x - $this->x)*($point->x - $this->x))+abs(($point->y - $this->y)*($point->y - $this->y)));
    }
}
$point1 = new Point2D(1,4);
$point2 = new Point2D(0,7);
echo "<br><br>Bài 2:<br>";
echo "Distance is: " . $point1 -> distance($point2);

// 3. Bài tập Tạo lớp Mảng số nguyên:
// Tạo một lớp MangSoNguyen với thuộc tính là một mảng các số nguyên.
// Tạo các phương thức để tính tổng, trung bình, và phần tử lớn nhất của mảng.
class IntArray{
    private $Array;
    public function __construct($Array){
        $this->Array = $Array;
    }
    public function Sum(){
        $sum = 0;
        foreach($this->Array as $Array)
            $sum += $Array;
        return $sum;
    }
    public function Avg(){
        $sum = 0;
        $count = 0;
        foreach($this->Array as $Array){
            $sum += $Array;
            $count++;
        }
        return $sum/$count;
    }
    public function Max(){
        $max = $this->Array[0];
        foreach($this->Array as $Array){
            if($max < $Array)
                $max = $Array;
    }
    return $max;
    }
}
echo "<br><br>Bài 3:<br>";
$Array= new IntArray ([1,4,0,7,2,9,11]);
echo "Sum: " . $Array->Sum() . "<br>";
echo "Average: " . $Array->Avg() . "<br>";
echo "Max: " . $Array->Max() ;

// 4. Bài tập Tạo lớp Đồng hồ:
// Tạo một lớp DongHo với các thuộc tính giờ, phút và giây.
// Tạo phương thức để hiển thị thời gian dưới định dạng "HH:MM:SS" và diễn tả chức năng tăng giây.
class Clock{
    protected $hour, $minute, $second;
    public function __construct($hour, $minute, $second){
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }
    public function show(){
        echo sprintf("%02d", $this->hour) . ":" .sprintf("%02d",$this->minute) . ":" . sprintf("%02d",$this->second);
    }
    public function plusSecond(){
        $this->second++;
        if($this->second >= 60){
            $this->minute++;
            $this->second = 0;
            if($this->minute >= 60){
                $this->hour++;
                $this->minute = 0;
                if($this->hour >= 24){
                    $this->hour = 0;
                }
            }
        }
    }
}
echo "<br><br>Bài 4:<br>";
echo "Now: ";
$clock = new Clock(16,47,59);
$clock->show();
echo "<br>Next second: ";
$clock->plusSecond();
$clock->show();

// 5. Bài tập Tạo lớp Danh sách sinh viên:
// Tạo một lớp SinhVien với các thuộc tính mã số, họ và tên.
// Tạo lớp DanhSachSinhVien với các phương thức thêm sinh viên mới và hiển thị danh sách sinh viên.
class Student{
    protected $code, $fullName, $list;
    public function __construct(){
        $this->list = [];
    }
    public function addNewStudent($code, $fullName){
        $this->list[$code] = $fullName; 
    }
    public function showList(){
        return $this->list;
    }
}
echo "<br><br>Bài 5:<br>";
$student = new Student();
$student->addNewStudent("20D191034", "Đinh Thị Thanh");
$student->addNewStudent("20D191035", "Nguyễn Thị Thanh Thảo");
echo "<i>List of Students: <br></i>";
foreach($student->showList() as $key=>$value)
    echo "ID: " . $key . " <br>" . "Full Name: " . $value . "</br>";

// 6. Bài tập Tạo lớp Xe hơi:
// Tạo một lớp XeHoi với các thuộc tính là hãng xe, màu sắc và năm sản xuất.
// Tạo phương thức để hiển thị thông tin đầy đủ của xe.
class Car{
    protected $brand, $color, $year;
    protected $list;
    public function __construct($brand, $color, $year){
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }
    public function brand(){
        return $this->brand;
    }
    public function color(){
        return $this->color;
    }
    public function year(){
        return $this->year;
    }
}
echo "<br>Bài 6:<br>";
$car = new Car("LEXUS", "Black", "1989");
echo "Brand: " . $car->brand() . "<br>";
echo "Color: " . $car->color() . "<br>";
echo "Year: " . $car->year();

// 7. Bài tập Tạo lớp Phân số:
// Tạo một lớp PhanSo với các thuộc tính tử số và mẫu số.
// Tạo các phương thức để thực hiện các phép toán cộng, trừ, nhân và chia giữa các phân số.
class Fraction{
    protected $numerator, $denominator;
    public function __construct($numerator, $denominator){
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }
    public function numerator(){
        return $this->numerator;
    }
    public function denominator(){
        return $this->denominator;
    }
    public function reduce($newNumerator, $newDenominator){
        $gcd = 1;
        if($newNumerator>=$newDenominator) 
            $max = $newNumerator;
        else 
            $max = $newDenominator;
        for($i=1; $i<=$max; $i++)
            if($newNumerator%$i==0 && $newDenominator%$i==0)
                $gcd = $i;
        return $gcd;
    }
    public function showFraction($numerator, $denominator){
        if($denominator == 1)
            return $numerator;
        else if($numerator == 0)
            return 0;
        else return [$numerator,$denominator];
    }
    public function addition(Fraction $fraction){
        $newNumerator = ($this->numerator * $fraction->denominator)+($fraction->numerator * $this->denominator);
        $newDenominator = $this->denominator * $fraction->denominator;
        $gcd = $this->reduce($newNumerator, $newDenominator);
        $newNumerator = $newNumerator/$gcd;
        $newDenominator = $newDenominator/$gcd;
        return $this->showFraction($newNumerator,$newDenominator);
    }
    public function subtraction(Fraction $fraction){
        $newNumerator = ($this->numerator * $fraction->denominator)-($fraction->numerator * $this->denominator);
        $newDenominator = $this->denominator * $fraction->denominator;
        $gcd = $this->reduce($newNumerator, $newDenominator);
        $newNumerator = $newNumerator/$gcd;
        $newDenominator = $newDenominator/$gcd;
        return $this->showFraction($newNumerator,$newDenominator);
    }
    public function multiplication(Fraction $fraction){
        $newNumerator = $this->numerator * $fraction->numerator;
        $newDenominator = $this->denominator * $fraction->denominator;
        $gcd = $this->reduce($newNumerator, $newDenominator);
        $newNumerator = $newNumerator/$gcd;
        $newDenominator = $newDenominator/$gcd;
        return $this->showFraction($newNumerator,$newDenominator);
    }
    public function division(Fraction $fraction){
        $newNumerator = $this->numerator * $fraction->denominator;
        $newDenominator = $this->denominator * $fraction->numerator;
        $gcd = $this->reduce($newNumerator, $newDenominator);
        $newNumerator = $newNumerator/$gcd;
        $newDenominator = $newDenominator/$gcd;
        return $this->showFraction($newNumerator,$newDenominator);
    }
}
echo "<br><br>Bài 7:<br>";
$fraction1 = new Fraction(14,7);
$fraction2 = new Fraction(21,9);
$frac1 = $fraction1->showFraction($fraction1->numerator(),$fraction1->denominator());
if($frac1 === 1 || $frac1 === 0){
    echo "First fraction: " . $frac1;
}
else echo "First fraction: " . $frac1[0] . "/" . $frac1[1];
echo "<br>";
$frac2 = $fraction2->showFraction($fraction2->numerator(),$fraction2->denominator());
if($frac2 === 1 || $frac2 === 0){
    echo "Second fraction: " . $frac2;
}
else echo "Second fraction: " . $frac2[0] . "/" . $frac2[1];
echo "<br>";
$result = $fraction1->addition($fraction2);
if($result === 1 || $result === 0){
    echo "Sum of two fractions: " . $result;
}
else echo "Sum of two fractions: " . $result[0] . "/" . $result[1];
echo "<br>";
$result = $fraction1->subtraction($fraction2);
if($result === 1 || $result === 0){
    echo "Subtraction: " . $result;
}
else echo "Subtraction: " . $result[0] . "/" . $result[1];
echo "<br>";
$result = $fraction1->multiplication($fraction2);
if($result === 1 || $result === 0){
    echo "Multiplication: " . $result;
}
else echo "Multiplication: " . $result[0] . "/" . $result[1];
echo "<br>";
$result = $fraction1->division($fraction2);
if($result === 1 || $result === 0){
    echo "Division: " . $result;
}
else echo "Division: " . $result[0] . "/" . $result[1];

// 8. Bài tập Tạo lớp Người:
// Tạo một lớp Nguoi với các thuộc tính tên, tuổi và địa chỉ.
// Tạo phương thức để hiển thị thông tin người.
class Person{
    protected $name, $age, $address;
    
    public function __construct($name, $age, $address){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
    public function name(){
        return $this->name;
    }
    public function age(){
        return $this->age;
    }
    public function address(){
        return $this->address;
    }
}
echo "<br><br>Bài 8:<br>";
$person = new Person("Thanh Thảo", 21, "Hà Nội");
echo "Name: " . $person->name() . "<br>";
echo "Age: " . $person->age() . "<br>";
echo "Address: " . $person->address();

// 9. Bài tập Tạo lớp Sản phẩm:
// Tạo một lớp SanPham với các thuộc tính tên, giá và mô tả.
// Tạo phương thức để hiển thị thông tin chi tiết của sản phẩm.
class Product{
    protected $name, $price, $description;
    public function __construct($name, $price, $description){
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
    public function name(){
        return $this->name;
    }
    public function price(){
        return $this->price;
    }
    public function description(){
        return $this->description;
    }
}
echo "<br><br>Bài 9:<br>";
$prod = new Product("crop-top shirt",99000,"pink chalk");
echo "Product Name: " . $prod->name() . "<br>";
echo "Price: " . $prod->price() . "<br>";
echo "Description: " . $prod->description();
// 10. Bài tập Tạo lớp Đặt phòng khách sạn:
// Tạo một lớp DatPhong voi các thuộc tính tên, ngày đến và số đêm ở lại.
// Tạo phương thức để tính tổng số tiền cần thanh toán dựa trên giá phòng.
class BookRoom{
    protected $name, $arriveDay, $numNight, $price;
    public function __construct($name, $arriveDay, $numNight){
        $this->name = $name;
        $this->arriveDay = $arriveDay;
        $this->numNight = $numNight;
        $this->price = [
            301 => 200000,
            302 => 300000,
            303 => 400000
        ];
    }
    public function insertRoom($room, $price){
        $this->price[$room] = $price;
    }
    public function total(){
        return $this->price[$this->name] * $this->numNight;
    }
}
echo "<br><br>Bài 10:<br>";
$bookRoom = new BookRoom(302,"14/07/2023", 7);
echo "Total: " . $bookRoom->total();
?>