<?php

namespace App\Controllers;

use App\Models\PostsModel;

class Posts extends BaseController
{
    public function index()
    {
        $model = model(PostsModel::class);

        $data = [
            'posts'  => $model->getPosts(),
            'title' => 'Posts',
        ];

        echo view('dashboard/posts', $data);
    }

    public function view($slug = null)
    {
        $model = model(PostsModel::class);

        $data['posts'] = $model->getPosts($slug);

        if (empty($data['posts'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find that post: ' . $slug);
        }
    
        $data['title'] = $data['posts']['title'];    
        
        echo view('dashboard/post-view', $data);        
    }

    public function create()
    {
        $model = model(PostsModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required',
        ])) {
            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', true),
                'body'  => $this->request->getPost('body'),
            ]);

            return redirect()->to('/dashboard/posts');
        } else {                
            echo view('dashboard/post-create');                
        }
    }

    public function update()
    {
        $model = model(PostsModel::class);
        $id = $this->request->getVar('id');

        $data= [
            'title' => $this->request->getPost('title'),            
            'body'  => $this->request->getPost('body'),
        ];

        $model->update($id, $data);            

        return redirect()->to('/dashboard/posts');
    }

    public function delete($slug = null)
    {
        $model = model(PostsModel::class);        
        $data['posts'] = $model->where('slug', $slug)->delete();        
        return redirect()->to('/dashboard/posts');
    }
}