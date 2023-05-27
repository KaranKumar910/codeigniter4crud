<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
    {
        if(!$this->session->has('admin_id')){
            return redirect()->to('login');
        }
        else
        return view('index');
    }





    // function login_post(){
    //     if($post = $this->request->getPost()){
    //         $get = $this->db->table('login')->where('email',$post['email'])->where('password',$post['password'])->get();
    //         // echo '<pre>';

    //         // $this->session->set('a','233')    ;       
    //         //  print_r($this->session->get('a'));
    //         echo ($get->getNumRows());
    //     }

    // }
    public function sign_up()
    {
        $post = $this->request->getPost();
        if($post){
            $data1 = [
                'email' => $post['email'],
                'password' => $post['Password'],
                // 'confirm_password' => $post['confirm_password'],
                'mobile' => $post['mobile'],
            ];
                // if($post['password'] == $post['confirm_password']){

                $this->db->table('login')->insert($data1);
                return redirect()->to('login');
            // }
            // else {
                
            //     return redirect()->back()->with('error', 'Passwords do not match');
            // }
        }
        else
            return view('sign_up');
    }




    public function login()
    {   
        $post = $this->request->getPost();
        if($post){
            $get = $this->db->table('login')->where('email',$post['email'])->where('password',$post['password'])->get();
            if($get->getNumRows()){
                $data = [
                    'admin_id' => $get->getRow()->id,
                    'admin_login'=>TRUE,
                ];
                $this->session->set($data);
                print_r($this->session->set($data));
                return redirect()->to('index');
            }
            else
                return redirect()->to('login');
        }
        else
            return view('login');
    }

    public function employee()
    {
        $post = $this->request->getPost();
        if ($post) {
            $data = [
                'name' => $post['name'],
                'mobile' => $post['mobile'],
                'email' => $post['email'],
                'dob' => $post['dob'],
                'password' => $post['password'],
                'confirm_Password' => $post['confirm_password'],
            ];
            
            if ($post['password'] == $post['confirm_password']) {
                $this->db->table('employee')->insert($data);
                return redirect()->to('index');
            } else {
                return redirect()->to('employee')->with('error', 'Passwords do not match');
            }
        } else {
            return view('employee');
        }
    }

    public function edit_employee()
    {
        // echo '<pre>';
        $id = ($this->request->uri->getSegment(3));
        // exit;
        $employee = $this->db->table('employee')->where('id', $id)->get()->getRow();

       

        $post = $this->request->getPost();
        if ($post) {
            
            $data = [
                'name' => $post['name'],
                'mobile' => $post['mobile'],
                'email' => $post['email'],
                'dob' => $post['dob'],
                
            ];
           
            
            $this->db->table('employee')->where('id', $id)->update($data);

            return redirect()->to('index')->with('success', 'Employee updated successfully');
        }

        return view('edit_employee', ['employee' => $employee,'id' => $id]);
    }   

    public function delete_employee()
    {
        $db = \Config\Database::connect(); 
        $id = ($this->request->uri->getSegment(3));
        
        $delete = $db->table('employee')->where('id', $id)->get()->getRow();

        $db->table('employee')->where('id', $id)->delete();
        if($delete){
            return redirect()->to('index');
        }
        else{
            echo 'Error';
        }
        // return redirect()->to('index');
    }


    


}

