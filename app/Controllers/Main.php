<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Main extends BaseController
{
    var $data;
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->data['locale'] = $this->locale;
    }
    public function index()
    {
        echo view('index', $this->data);
    }

    public function list()
    {
        echo view('list', $this->data);
    }
}
