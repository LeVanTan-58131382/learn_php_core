<?php
//Nó không giống nhau. self đề cập đến lớp mà từ khóa mới thực sự được viết. static đề cập đến lớp trong hệ thống phân cấp, nơi phương thức đã được gọi

class Class_A {
    public static function get_self() {
        return new self();
    }

    public static function get_static() {
        return new static();
    }
}

class Class_B extends Class_A {}

echo get_class(Class_B::get_self());   // A
echo get_class(Class_B::get_static()); // B
echo get_class(Class_A::get_self());   // A
echo get_class(Class_A::get_static()); // A