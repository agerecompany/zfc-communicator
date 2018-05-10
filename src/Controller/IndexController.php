<?php
namespace Agere\Communicator\Controller;

use Popov\ZfcCore\Service\ServiceManagerAwareTrait;
use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;
use Agere\Communicator\Connector\SchedulerConnector\SchedulerConnector;

class IndexController extends AbstractActionController
{
    /**
     * @var array
     */
    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function indexAction()
    {
        $view = new ViewModel();
        //$view->setTerminal(true);
        return $view;
    }

    public function syncAction()
    {
        $config = $this->config;
        $db = $config['db'];
        $table = $config['communicator']['table'];
        $columns = $config['communicator']['columns'];
        $res = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
        mysqli_set_charset($res, "utf8");
        $scheduler = new SchedulerConnector($res);
        $scheduler->render_table($table, implode($columns, ','));
    }
}
