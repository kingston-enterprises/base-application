<?php
/** created by : kingston-5 @ 6/01/23 **/

namespace kingstonenterprises\core;

use kingstonenterprises\application\models\Visitor;
use kingstonenterprises\application\models\User;

/** Main application backbone everything starts, ends or goes through here */
class Application {
	const EVENT_BEFORE_REQUEST = 'beforeRequest';
    const EVENT_AFTER_REQUEST = 'afterRequest';

    protected array $eventListeners = [];

    public static Application $app;
    public static string $ROOT_DIR;
    public static string $api;
    public string $userClass;

    public Request $request;
    public Router $router;
    public Response $response;
    public View $view;
    public ?Controller $controller = null;
    public Database $db;
    public Session $session;
    public string $layout = 'main';
    
    public ?Visitor $visitor;
    public ?User $user;
    
    // start app lifecycle by instantiating important classes and variables
    public function __construct($rootDir, $config){
    	
		self::$ROOT_DIR = $rootDir;
        self::$app = $this;
        self::$api = php_sapi_name();
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->view = new View();
        $this->db = new Database($config['db']);
        $this->session = new Session();
        $this->user = null;
        $this->userClass = $config['userClass'];
        
        // if app is not running in the cli
        // resolve visitor details
        if(self::$api != "cli") {
	        $this->visitor = new Visitor();
			
            if(!$this->visitor->findOne(['ip' => Application::$app->visitor->ip])){
    	        $this->visitor->ip = Application::$app->visitor->ip;
    	    	$this->visitor->save();
    	    }
	    	
            $this->visitor = $this->visitor->findOne(['ip' => Application::$app->visitor->ip]);
	    	Application::$app->session->set('visitorId', $this->visitor->id);
        }
        
        $userId = Application::$app->session->get('user');
        if ($userId) {
            $key = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$key => $userId]);
        } 
    }

    // try to show the requested view
    public function run(){
        try {
            echo $this->router->resolve();
        } catch (\Exception $e){
            echo $this->router->renderView('_error', [
                'exception' => $e,
            ]);
        }
    }
    
        public function login(User $user)
    {
        $this->user = $user;
        $className = get_class($user);
        $primaryKey = $className::primaryKey();
        $value = $user->{$primaryKey};
        Application::$app->session->set('user', $value);

        return true;
    }

    public function logout()
    {
        $this->user = null;
        self::$app->session->remove('user');
    }
    
    public function triggerEvent($eventName)
    {
        $callbacks = $this->eventListeners[$eventName] ?? [];
        foreach ($callbacks as $callback) {
            call_user_func($callback);
        }
    }

    // set event listeners with their callbacks
    public function on($eventName, $callback)
    {
        $this->eventListeners[$eventName][] = $callback;
    }
    
    public static function isGuest()
    {
        return !self::$app->user;
    }
    
    
}


?>
