<?php


/*
//duplicate same class in same namespace is syntax error
namespace Abdalla{
    class f{
       
    }
    class f{
       
    }
}    

//even this is error: namespaces with same name listen to each other
namespace Abdalla{
    class f{
       
    }
}
namespace Abdalla{
    class f{
       
    }
}

//namespaces don't accept variables
namespace Abdalla{
    $val = "me";    // error
    class f{
       
    }
}

so solution:
*/
namespace OOP\Namespaces\Abdalla{
    class f{
        function ge() {
            $t = "me";
            return $t;
        }
    }
}
namespace OOP\Namespaces\Abdalla\coms{
    class f{
        function ge() {
            $t = "meff";
            return $t;
        }
    }
}
namespace{
    echo OOP\Namespaces\Abdalla\f::ge();
    // echo OOP\Namespaces\Abdalla\f.ge(); error
    //echo OOP\Namespaces\Abdalla\f->ge(); error
}