<?php
namespace Core;

class Router{
    protected $routes=[];

    protected function add($url, $controller, $method){
        $this->routes[] = [
            "url" => $url,
            "controller" => $controller,
            "method" => $method
        ];
    }

    public function get($url, $controller){
        $this->add($url,$controller,"GET");
    }

    public function post($url, $controller){
        $this->add($url,$controller,"POST");
    }

    public function put($url, $controller){
        $this->add($url,$controller,"PUT");
    }

    public function delete($url, $controller){
        $this->add($url,$controller,"DELETE");
    }

    public function route($uri,$request_method){
        foreach($this->routes as $route){
            if($route['url'] === $uri && $route['method'] === strtoupper($request_method)){
                require base_path( "controllers/" . $route['controller']) ;
                die();
            }
        }
        $this->abort();
    }

    function abort($code=404){
        http_response_code($code);

        view("$code.view.php");
        
        die();
    }
}