# PHP 표준권고(PSR)

*** 
## PSR-1 Basic Coding Standard
* PHP 파일은 BOM(Byte Order Mark)없는 UTF-8 인코딩을 사용할 것
* 네임스페이스와 클래스는 오토로딩 표준(PSR-0, PSR-4)을 따를 것
* 클래스 이름은 반드시 첫 글자를 대문자로 할 것
* 클래스내 상수는 반드시 모두 대문자로 작성하고 구분자로 _를 사용할 것
* 클래스내 메소드의 이름은 반드시 camelCase 를 사용 할것

```php
<?php
    namespace Vendor\Model;
    
    class Cart 
    {
        const DELIVERY_COST = 3000;
        
        public function addItem($item) {
    
        }   
    }

```

## PSR-2 Coding Style Guide
### PSR-1 표준의 연장선인 코딩 스타일 표준
* 들여쓰기는 tab 대신 4칸의 공백 사용
* 닫는 태그(?>) 는 사용하지 않음
* namespace 선언뒤에는 한 줄의 공백을 사용하고 여러 개의 use는 줄 공백없이 사용후에 마지막 블록뒤에 한 줄의 공백을 사용할 것
* 클래스 구문의 여는 괄호는 다음 줄에 사용하고 닫는 괄호는 본문 다음 줄에 사용할 것
* 메소드 구문의 여는 괄호는 다음 줄에 사용하고 닫는 괄호는 본문 다음 줄에 사용할 것
* 가시성과 관련된 키워드인 abstract 와 final 은 모든 메소드와 프로퍼티에 명시적으로 사용하고 제일 먼저 와야하며 static 구문은 그 후에 위치시킬 것
* if 나 elseif 같은 제어 관련 구문은 제어문 뒤에 한 개의 공백을 두고 그 후에 괄호를 사용하고 조건문을 기술할 것 함수 호출이나 메소드 호출은 메소드명 뒤에 공백이 있으면 안됨.
* if 나 elseif 같은 제어 관련 구문의 여는 괄호는 제어문과 같은 줄에 위치해야 함. 닫는 괄호는 본문의 다음 줄에 위치

```php
<?php
namespace Vendor\Package;
 
use FooInterface;
use BarClass as Bar;
 
class Foo extends Bar implements FooInterface
{
    public function sampleFunction($a, $b = null)
    {
        if ($a === $b) {
            bar();
        } elseif ($a > $b) {
            $foo->bar($arg1);
        }
    }
}
```