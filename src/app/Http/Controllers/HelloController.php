<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller{
public function index(){
    return <<<EOF
<html>
    <head>
        <titleHello/Index</title>
    </head>
    <body>
        <h1>おおん</h1>
    </body>
</html>
EOF;

return view('hello.index');
}
}