<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
    private $id;

    public function __construct(Request $id = null)
    {
        $this->model = '\App\Models\Subscriber';
        $this->table = 'subscribers';
        $this->label = 'contact';
        $this->router = 'contact';
        $this->template_folder = 'admin.contacts';
        
        view()->share('controller_label', $this->label);
        view()->share('controller_router', $this->router);
    }

    public function updateAttrs($request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);
        $attrs = [
            'email' => $request->email,
            'name' => isset($request->name) ? $request->name : '',
            'message' => isset($request->message) ? $request->message : '',
            'phone' => isset($request->phone) ? $request->phone : '',
            'address' => isset($request->address) ? $request->address : '',
            'subject' => isset($request->subject) ? $request->subject : '',
        ];
        return $attrs;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpage = config('app.perpage');
        $search = request()->query('search');
        if ($search) {
            $categoriesData = $this->model::
                where('title', 'LIKE', "%{$search}%")
                ->orWhere('id', 'LIKE', "%{$search}%")
                ->orWhere('id', '=', $search);
            $totalCategories = $categoriesData->count() . ' result for: ' . $search;
            $categoriesData = $categoriesData->latest()->paginate($perpage);
        } else {
            $totalCategories = $this->model::count();
            $categoriesData = $this->model::latest()->paginate($perpage);
        }
        return view($this->template_folder . '.index')
            ->with('totalCategories', $totalCategories)
            ->with('categories', $categoriesData)
            ->with('search', $search);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = false;
        if (isset($this->parent_model) && $this->parent_model != false) {
            $categories = $this->parent_model::latest()->paginate(100);
        }
        return view($this->template_folder . '.create')
            ->with('categories', $categories)
            ->with('parent_field', isset($this->parent_field) ? $this->parent_field : null);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attrs = $this->updateAttrs($request);
        $category = $this->model::create($attrs);
        
        // flash message
        session()->flash('success', __('app.Created :name successfully.', ['name' => __('app.'. $this->label)]));
        // redirect user
        return redirect(route($this->router . '.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  str  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  str  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = false;
        if (isset($this->parent_model) && $this->parent_model != false) {
            $categories = $this->parent_model::latest()->paginate(100);
        }
        $category = $this->model::where('id', $id)->first();
        return view($this->template_folder . '.create')
            ->with('category', $category)
            ->with('categories', $categories)
            ->with('parent_field', isset($this->parent_field) ? $this->parent_field : null);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  str  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = $this->model::where('id', $id)->first(); 
        if (is_null($category)) {
            // flash message
            session()->flash('error', __('app.NotFound'));
            // redirect user
            return redirect(route($this->router .'.index'));
        }
        $attrs = $this->updateAttrs($request);
        $category->update($attrs); 
        
        // flash message
        session()->flash('success', __('app.Update :name successfully.', ['name' => __('app.'. $this->label)]));
        // redirect user
        return redirect(route($this->router .'.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  str  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->model::where('id', $id)->first();
        $category->delete();
        // flash message
        session()->flash('success', __('app.Deleted :name successfully.', ['name' =>  __('app.'. $this->label)]));
        // redirect user
        return redirect(route($this->router .'.index'));
    }

    public function ajaxCreate(Request $request) {
        $category = $this->model::create([
            'title' => $request->title,
        ]);
        return response()->json([
            "status" => 200,
            "message" => "Success",
            "data" => $category
        ]);
    }
    
}
