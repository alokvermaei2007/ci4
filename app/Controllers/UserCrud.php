<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserCrud extends Controller
{
    // show users list
    public function index()
    {
        try {
            $userModel = new UserModel();
            $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
            return view('user_view', $data);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setStatusCode(500)->setBody('Error fetching users list');
        }
    }

    // add user form
    public function create()
    {
        return view('add_user');
    }

    // insert data
    public function store()
    {
        try {
            $userModel = new UserModel();
            $data = [
                'firstname' => $this->request->getVar('firstname'),
                'lastname' => $this->request->getVar('lastname'),
                'email'  => $this->request->getVar('email'),
                'mobile'  => $this->request->getVar('mobile'),
                'username'  => $this->request->getVar('username'),
                'password'  => $this->request->getVar('password'),
            ];
            $userModel->insert($data);
            return $this->response->redirect(site_url('/users-list'));
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setStatusCode(500)->setBody('Error inserting user data');
        }
    }

    // show single user
    public function singleUser($id = null)
    {
        try {
            $userModel = new UserModel();
            $data['user_obj'] = $userModel->where('id', $id)->first();
            return view('edit_user', $data);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setStatusCode(500)->setBody('Error fetching user data');
        }
    }

    // update user data
    public function update()
    {
        try {
            $userModel = new UserModel();
            $id = $this->request->getVar('id');
            $data = [
                'firstname' => $this->request->getVar('firstname'),
                'lastname' => $this->request->getVar('lastname'),
                'email'  => $this->request->getVar('email'),
                'mobile'  => $this->request->getVar('mobile'),
                'username'  => $this->request->getVar('username'),
                'password'  => $this->request->getVar('password'),
            ];
            $userModel->update($id, $data);
            return $this->response->redirect(site_url('/users-list'));
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setStatusCode(500)->setBody('Error updating user data');
        }
    }

    // delete user
    public function delete($id = null)
    {
        try {
            $userModel = new UserModel();
            $data['user'] = $userModel->where('id', $id)->delete($id);
            return $this->response->redirect(site_url('/users-list'));
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setStatusCode(500)->setBody('Error deleting user');
        }
    }
}
