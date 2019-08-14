# OOP

## Khái niệm đối tượng trong lập trình là gì?
- Đối tượng trong PHP được hiểu như một sự vật cụ thể chứa một hay một số các thuộc tính (
properties) và các phương thức (methods) bên trong đối tượng đó. Trong OOP thì đơn giản đối tượng được gom chung trong một class, khi cần thì mới khởi tạo ra.

## Tại sao lại sử dụng OOP ? Code hướng thủ tục như thông thường có khác gì không?
- Sử dụng OOP giúp cho việc nhìn nhận tổng quan và cụ thể hóa được các logic trong khi code.
- Thuận lợi hơn việc sử dụng các functions rời rạc với cách code thông thường vì OOP có tính đóng gói sẽ quản lí methods tốt hơn, sắp xếp chung các properties và methods liên quan tới nhau trong class giúp người khác dễ hình dung code của người viết => dễ maintain.

## 4 đặc trưng cơ bản trong OOP
- Tính đóng gói (Encapsulation): Việc sử dụng class, khi cần thì mới khởi tạo giúp cho các đối tượng như được đóng gói lại từ đó rất dễ quản lí và kiểm soát code.
- Tính kế thừa (Inheritance): Việc này giúp giảm sự lặp lại dẫn tới nguy cơ code dài, code thừa.
- Tính đa hình (Polymorphism): Vì sở hữu tính kế thừa giúp cho việc sử dụng code linh hoạt hơn và tuy có chung các methods nhưng có thể khác nhau về xử lí bên trong tạo nên sự muôn hình muôn vẻ của đối tượng. Ví dụ cùng là đối tượng ngôi nhà có những đặc điểm chung song bên trong nội thất có thể giống hoặc rất khác nhau. 
- Tính trừu tượng (Abstraction): Việc khai báo các lớp abstract hoặc sử dụng interface giúp cho ta hình dung dễ hơn, khái quát hóa được các đối tượng.

## Thực hành và giải thích các thành phần cụ thể

### Create class

```php
class People{
  protected $name;
  protected $age;
  
  public function setName($name){
      $this->name = $name;
  }
  public function setAge($age){
      $this->age = $age;
  }
  public function getInfo(){
      return $this->name.'-'.$this->age;
  }
}

// khởi tạo object mới tên là people
$people = new People();
$people->setName('thanh');
$people->setAge(20);
echo $people->getInfo(); // thanh-20
```

### Visibility (phạm vi)
- public, protected, private chỉ phạm vi được phép sử dụng của thuộc tính hoặc phương thức.
+ private: chỉ được sử dụng bên trong class hiện tại.
+ protected : sử dụng trong class hiện tại và các class con kế thừa từ nó, ko được sử dụng bên ngoài.
+ public : sử dụng mọi nơi.

```php
class People{
  protected $name; // dùng trong class People và các class con của People 
  private $age; // chỉ dùng trong class People
  
  public function setName($name){ // function này dùng mọi nơi kể cả bên ngoài.
      $this->name = $name;
  }
  public function setAge($age){
      $this->age = $age;
  }
  public function getInfo(){
      return $this->name.'-'.$this->age;
  }
}
```

### Inheritance
- OOP trong php cho phép 1 class có thể kế thừa class đã định nghĩa trước đó.

```php
class A {
  
}
  
class B extends A {
  // class B kế thưà toàn bộ phương thức và thuộc tính của A.
  // class B có thể override lại các thuộc tính hay phương thức của A nếu 
  // không muốn B override thì trong A ta sử dụng khai báo final trước từ khóa pham vi.
}

```
- Kế thừa lồng nhau 

```php
class A {
  
}
  
class B extends A {
  
}
  
class C extends B {
  
}
```


### How to access a private property? 
- Sử dụng các methods trung gian để có thể truy cập private từ bên ngoài hoặc từ class kế thừa.
```php
class People{
  private $name;

  public function setName($name){
     $this->name = $name;
  }

  public function getName(){
     return $this->name;
  }
  
}

$thanh = new People();
$thanh->setName('thanh');
echo $thanh->getName();
// thanh 
```

### Static
- Cú pháp:

```php
//thuộc tính  
Visibility static $name;

// phương thức 
Visibility static funciton $getName();

```
- Phương thức và thuộc tính sau khi khai báo static thì giống như biến toàn cục trong hướng thủ tục.
- Để gọi phương thức và thuộc tính tĩnh trong class thì chúng ta có thể sử dụng cú pháp self::$ten hoặc ClassName::$ten hoặc static::$ten. 

```php
class People
{
    private static $name = 'thanh';

    public function setName($name)
    {
        static::$name = $name;
    }

    public function getName()
    {
        return static::$name;
    }
}

$people1 = new People();
$people1->setName("hieu");
echo $people1->getName();

// hieu 

$people2 = new People();

echo $people2->getName();

//hieu - thuộc tính k đổi 

``` 
### Interface
Khái niệm :là một chức năng mà ta có thể thêm và bất kì class nào. 
- Trong interface chúng ta chỉ được khai báo phương thức chứ không được định nghĩa chúng.
- Trong interface chúng ta có thể khai báo được hằng nhưng không thể khai báo biến.
- Các lớp implement interface thì phải khai báo và định nghĩa lại tất cả các phương thức có trong interface đó.
- Một class có thể implements nhiều interface.

```php
interface Animal
{
    public function getName();
}

class Dog implements Animal
{
    private $name;

    public function getName()
    {
        return $this->name;
    }
}

```

### Abstract class

Khái niệm : là một class cha cho tất cả các class có cùng bản chất, nó định nghĩa tổng quát về các class kế thừa nó. Gần giống như vẽ vác thảo lại.
- Các phương thức trong abstract khi được khai báo là abstract thì ko đc code bên trong. Nếu ko khai báo thì viết code bình thường.
- Các thuộc tính trong abstract class ko đc khai báo là abstract.
- Các class kế thừa phải định nghĩa lại tất cả phương thức trong abstract.

```php
// cú pháp định nghĩa  
abstract class ClassName{

  abstract visibility function methodName1();
  abstract visibility function methodName2();

}


// kế thừa và sử dụng 
class A extends ClassName{
  visibility function methodName1(){
    // code định nghĩa lại 
  };
  visibility function methodName2(){
    // code định nghĩa lại 
  };

}

```

### Magic methods

```php
// __construct : Hàm thực thi ngay sau khi khởi tạo object 

// __destruct : Hàm thực thi sau khi hủy object

class People{
  protected $name;

  public function __construct($name){
     $this->name = $name;
     echo "__construct";
  }

  public function getName(){
     echo $this->name;
  }

  public function __destruct(){
     echo "__destruct";
  }
  
}

$thanh = new People('thanh');

$thanh->getName();
//__construct
//thanh
//__destruct
```

### So sánh giữa $this và self

- $this : gọi đến đối tượng hiện tại

```php
class People{
  public function getInfo(){
      return "class People";
  }

  public function echoInfo(){
     echo $this->getInfo(); 
  }
}

class Child extends People{

  public function echoInfo(){
      echo "class Child";
  }
}

$thanh = new People();
$thanh->echoInfo(); 
// class People

```
- self : gọi đến đối tượng khai báo nó
```php
class People{
 
  public function getInfo(){
      return "class People";
  }

  public function echoInfo(){
     echo self::getInfo(); // dùng self thay cho this ở đây  
  }
}
class Child extends People{

  public function echoInfo(){
      echo "class Child";
  }
}

$thanh = new Child();
$thanh->echoInfo();
// class Child
```

### Magic constants

```php
// __CLASS__ : lấy tên của class sử dụng nó.
class People
{
    private static $name = "thanh";


    public function getClass()
    {
        return __CLASS__;
    }
}
$people = new People();
echo $people->getClass();
// People
```


```php
// __FILE__ : lấy tên của file sử dụng nó.
class People
{
    private static $name = "thanh";


    public function getFile()
    {
        return __FILE__;
    }
}
$people = new People();
echo $people->getFile();
// /home/thanhryot/Desktop/php/index.php - kết quả thay đổi tùy đường dẫn của bạn
```

```php
// __METHOD__ : lấy tên của phương thức sử dụng nó.

class People
{
    private static $name = "thanh";


    public function getMethod()
    {
        return __METHOD__;
    }
}
$people = new People();
echo $people->getMethod();


// People::getMethod
```

### Call multiple methods

Muốn gọi  đồng thời nhiều methods ta cần trả về object hiện tại ở cuối methods:

```php

class People
{
    private static $name;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getName()
    {
       return $this->name;
    }
}
$people = new People();
echo $people->setName("thanh")->getName();
// thanh
```










