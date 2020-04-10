<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Member extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\Member_model';

	public function index()
	{
		return $this->respond($this->model->findAll(), 200);
    }

    public function create()
    {
        // $validation =  \Config\Services::validation();

        $name   = $this->request->getPost('name');
        $ename = $this->request->getPost('ename');
        $phone = $this->request->getPost('phone');
        $email = $this->request->getPost('email');
        $sex = $this->request->getPost('sex');
        $city = $this->request->getPost('city');
        $township = $this->request->getPost('township');
        $postcode = $this->request->getPost('postcode');
        $address = $this->request->getPost('address');
        $notes = $this->request->getPost('notes');
        
        $data = [
            'name' => $name,
            'ename' => $ename,
            'phone' => $phone,
            'email' => $email,
            'sex' => $sex,
            'city' => $city,
            'township' => $township,
            'postcode' => $postcode,
            'address' => $address,
            'notes' => $notes,
            
        ];
        
        // if($validation->run($data, 'member') == FALSE){
        //     $response = [
        //         'status' => 500,
        //         'error' => true,
        //         'data' => $validation->getErrors(),
        //     ];
        //     return $this->respond($response, 500);
        // } else {
            $simpan = $this->model->insertMember($data);
            if($simpan){
                $msg = ['message' => 'Created member successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        // }
    }

public function show($id = NULL)
{
    $get = $this->model->getMember($id);
    if($get){
        $response = [
            'status' => 200,
            'error' => false,
            'data' => $get,
        ];
        return $this->respond($response, 200);
    } else {
        $msg = ['message' => 'Not Found'];
        $response = [
            'status' => 404,
            'error' => false,
            'data' => $msg,
        ];
    }
}

public function edit($id = NULL)
{
    $get = $this->model->getMember($id);
    if($get){
        $response = [
            'status' => 200,
            'error' => false,
            'data' => $get,
        ];
        return $this->respond($response, 200);
    } else {
        $msg = ['message' => 'Not Found'];
        $response = [
            'status' => 404,
            'error' => false,
            'data' => $msg,
        ];
    }
}

    public function update($id = NULL)
    {
        //$validation =  \Config\Services::validation();
        $name   = $this->request->getRawInput('name');
        $ename = $this->request->getRawInput('ename');
        $phone = $this->request->getRawInput('phone');
        $email = $this->request->getRawInput('email');
        $sex = $this->request->getRawInput('sex');
        $city = $this->request->getRawInput('city');
        $township = $this->request->getRawInput('township');
        $postcode = $this->request->getRawInput('postcode');
        $address = $this->request->getRawInput('address');
        $notes = $this->request->getRawInput('notes');

        $data = [
            'name' => $name,
            'ename' => $ename,
            'phone' => $phone,
            'email' => $email,
            'sex' => $sex,
            'city' => $city,
            'township' => $township,
            'postcode' => $postcode,
            'address' => $address,
            'notes' => $notes,
        ];
        // if($validation->run($data, 'member') == FALSE){
        //     $response = [
        //         'status' => 500,
        //         'error' => true,
        //         'data' => $validation->getErrors(),
        //     ];
        //     return $this->respond($response, 500);
        // } else {
            $simpan = $this->model->updateMember($data,$id);
            if($simpan){
                $msg = ['message' => 'Updated member successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        // }
    }

    public function delete($id = NULL)
    {
        $hapus = $this->model->deleteMember($id);
        if($hapus){
            $msg = ['message' => 'Deleted member successfully'];
            $response = [
                'status' => 200,
                'error' => false,
                'data' => $msg,
            ];
            return $this->respond($response, 200);
        } else {
            $msg = ['message' => 'Not Found'];
            $response = [
                'status' => 404,
                'error' => false,
                'data' => $msg,
            ];
        }
    }
    
}
