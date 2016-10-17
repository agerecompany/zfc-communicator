<?php
namespace Agere\Communicator\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

use Agere\Communicator\Connector\SchedulerConnector\SchedulerConnector;


class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        $view = new ViewModel();
        //$view->setTerminal(true);
        return $view;
    }

    public function testAction() {

        // Mysql
        //$dbtype = "MySQL";
        $res=mysqli_connect("localhost", "root", "", "dentistry");
        //mysql_select_db("dentistry");

        //\Zend\Debug\Debug::dump($res); die();
        /**
         * @var Agere\Scheduler\Connector\schedulerConnector;
         */
        $scheduler = new SchedulerConnector($res);
        $scheduler->render_table("events2","id","start_date,end_date,text,subject, test1, test2");
    }
}
