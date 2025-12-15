# 🧩 OOP in PHP 8

Object-Oriented Programming (OOP) in **PHP 8** provides a powerful way to structure applications using objects, classes, and reusable code. PHP 8 improves OOP with better performance, strict typing, attributes, and more consistent error handling.

---

## 🚀 What Is OOP?

**Object-Oriented Programming (OOP)** is a programming paradigm based on the concept of **objects** — data structures that contain both properties (data) and methods (functions).

OOP helps developers create modular, reusable, and scalable applications.

---

## 🔑 Key Concepts in PHP OOP

### 1️⃣ **Class**
A blueprint that defines the structure and behavior of objects.

### 2️⃣ **Object**
An instance created from a class.

### 3️⃣ **Encapsulation**
Protecting data by restricting direct access.

### 4️⃣ **Inheritance**
Creating new classes that reuse and extend existing ones.

### 5️⃣ **Polymorphism**
Using one method name with different implementations.

### 6️⃣ **Abstraction**
Hiding complex details and exposing only essential features.

---

## 🛠 PHP 8 OOP Features

- ✔️ Constructor Property Promotion  
- ✔️ Typed properties  
- ✔️ Union types  
- ✔️ Static return types  
- ✔️ Attributes (annotations)  
- ✔️ Improved error handling  

---

## 📌 Example: Simple Class in PHP 8

```php
class User
{
    public function __construct(
        public string $name,
        public int $age
    ) {}

    public function greet()
    {
        return "Hello, my name is {$this->name} and I am {$this->age} years old.";
    }
}

$user = new User("Yasser", 27);
echo $user->greet();
```
## 📘 Why Use OOP in PHP?

- Organizes code into logical pieces  
- Makes applications easier to maintain  
- Encourages reusability  
- Supports scalable project architecture  
- Cleaner, more modern development style  

---

## 📚 Topics You Can Learn Next

- Classes & Objects  
- Access Modifiers  
- Traits  
- Interfaces  
- Abstract Classes  
- Namespaces & Autoloading  
- Dependency Injection  
- SOLID Principles  
- Design Patterns  

## 🧱 Classes & Objects

### **What is a Class?**
A **class** is a blueprint or template used to create objects.  
It defines the properties (variables) and methods (functions) that the object will have.

Example:
```php
class User {
    public $name;
    public function sayHello() {
        return "Hello!";
    }
}
```
# Access Modifiers in PHP

                ┌─────────────┐
                │   Class     │
                │   Members   │
                └─────────────┘
                       │
      ┌────────────────┼─────────────────┐
      │                │                 │
      |public          |   protected     | private
      |Accessible      | Accessible in   | Accessible only
      |────────────    | ──────────────  | ───────────────
      |Anywhere        | class & child   | inside the class
      ───────────────  | ─────────────── | ───────────────
___________________________________________________________________________________
 
🔑 Best Practices

  - Use private for sensitive data
  
   - Use protected for child class access
  
   - Use public only for safe-to-access members
  
   - Prefer getters and setters for private/protected properties
## ⚡ Static Properties and Methods

### **Static Properties**
- Belong to the **class**, not objects  
- Shared among all instances  

```php
class Counter {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }
}

Counter::increment();
Counter::increment();
echo Counter::$count; // 2
```
## 🏷 Constants 🏷

- Fixed values that **cannot change**  
- Defined using the `const` keyword  
- Accessed using `ClassName::CONSTANT`  

```php
class Circle {
    const PI = 3.1416;

    public static function area($radius) {
        return self::PI * $radius * $radius;
    }
}

echo Circle::PI;        // 3.1416
echo Circle::area(5);   // 78.54
```

   | Feature         | Static             | Constant           |
| --------------- | ------------------ | ------------------ |
| Belongs to      | Class              | Class              |
| Access          | `ClassName::$prop` | `ClassName::CONST` |
| Can change?     | ✅ Yes              | ❌ No               |
| Defined with    | `static`           | `const`            |
| Access in class | `self::$prop`      | `self::CONST`      |

# 📝 Best Practices
  - Use static for shared data or utility functions
  - Use constants for fixed values like configuration or math constants
# 
# 📘 Abstraction in Object-Oriented Programming (OOP)

## 🧠 What Is Abstraction?

**Abstraction** is one of the four main pillars of Object-Oriented Programming.  
It allows developers to **hide complex implementation details** and expose only what is necessary for other parts of the application.

In simple terms:

> **Abstraction focuses on “what” an object does, not “how” it does it.**

---

## 🎯 Why Use Abstraction?

Abstraction helps you:

- ✔️ Reduce complexity  
- ✔️ Make your code cleaner and easier to maintain  
- ✔️ Protect your internal logic from misuse  
- ✔️ Focus on important features instead of unnecessary details  
- ✔️ Improve reusability and scalability  

---

## 📌 How Abstraction Works in PHP

In PHP, abstraction is achieved using:

### **1. Abstract Classes**
- Cannot be instantiated.
- May contain abstract methods (methods without a body).
- Can include normal methods as well.

### **2. Interfaces**
- Define method signatures only.
- A class implementing the interface *must* implement all its methods.

---

## 📚 Example Using an Abstract Class  in Sample definition.

```php
<?php

namespace App\Oop;
    
class Test2
{
    private string $name;
    private int  $age;
    private string $adress;
    /**
     * Test2 construct 
     * @param string  $name 
     * @param int $age 
     * @param string  $address 
     */

    public function __construct($name,  $age,  $adress){
        // throw new \Exception('Not implemented');
        $this->name = $name;
        $this->age = $age;
        $this->adress = $adress;
        // $this->printInfo();
    }
    public function printInfo(){
        return "My Name is {$this->name} , I have {$this->age} Years Old, live in {$this->adress}";
    }
}
```
# 🏗️ When Should You Use Abstraction?

Use abstraction when:

- You want to enforce a specific structure for multiple classes  
- You want different classes to share a common template  
- You want to separate **essential behavior** from **complex internal logic**  
- You want to make your code flexible to future changes  

---

# 📝 Benefits of Using Abstraction

| Benefit            | Description                                      |
|-------------------|--------------------------------------------------|
| Simplifies Code   | Hides unnecessary details                        |
| Improves Security | Protects internal logic                          |
| Increases Reusability | Allows common structure for multiple classes |
| Enhances Readability | Easy to understand interfaces and abstract methods |

---

# 🔚 Conclusion

Abstraction is a key concept in OOP that helps you build structured, reusable, and scalable applications.  
By hiding unnecessary details and exposing only important features, abstraction keeps your code clean and maintainable.

