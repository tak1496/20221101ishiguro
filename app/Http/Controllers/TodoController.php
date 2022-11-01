<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Auth::user()->todos;
        $user = Auth::user();
        $tags = Tag::all();
        return view('index', [
            'todos' => $todos,
            'user' => $user,
            'tags' => $tags,
        ]);
    }
    public function add(TodoRequest $request)
    {
        $id = Auth::id();
        $form = $request->all();
        Todo::create([
            'user_id' => $id,
            'task_name' => $form['content'],
            'tag_id' => $form['tag_id'],
        ]);
        return redirect('/home');
    }
    public function update(TodoRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->id)->update([
            'task_name' => $form['content'],
            'tag_id' => $form['tag_id'],
        ]);
        $page = $request->page;
        return redirect($page);
    }
    public function delete(Request $request)
    {
        Todo::find($request->id)->delete();
        $page = $request->page;
        return redirect($page);
    }
    public function find()
    {
        $user = Auth::user();
        $tags = Tag::all();
        return view('find', [
            'user' => $user,
            'tags' => $tags,
        ]);
    }
    public function search(Request $request)
    {
        $form = $request->all();
        $user = Auth::user();
        $content = $request->content;
        $tag_id = $request->tag_id;
        if ($tag_id == null) {
            $todos = Todo::where('user_id', $user->id)
                ->Where('task_name', 'LIKE', '%' . $content . '%')
                ->get();
        } else {
            $todos = Todo::where('user_id', $user->id)
                ->Where('task_name', 'LIKE', '%' . $content . '%')
                ->Where('tag_id', $tag_id)
                ->get();
        }
        $tags = Tag::all();
        return view('find', [
            'todos' => $todos,
            'user' => $user,
            'tags' => $tags,
        ]);
    }
}
