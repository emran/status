<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Front {

    private $_taskModel;
    public function before()
    {
        parent::before();
        $this->_taskModel = new Model_Tasks();
    }
    public function action_index()
    {
        $view =  View::factory('welcome/index',
                                    array('title' => 'Status log'));
        $sidebar = View::factory('welcome/sidebar');
        if(count($_POST) > 0){
            //Save tasks
            $data = array(
                    'title'  => $_POST['task'],
                    'time'   => $_POST['time'],
                    'status' => $_POST['status'],
            );
            $this->_taskModel->create($data);
        }
        $taskLists = $this->_taskModel->readAll(array(array('created_at', gmdate('Y-m-d'), '>')))->as_array();
        $view->taskLists = $taskLists;
        $this->template->sidebar = $sidebar;
        $this->template->content = $view;
    }
} // End Welcome
