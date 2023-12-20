<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }

    public function root()
    {
        return view('index');
    }


    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function FormSubmit(Request $request)
    {
        return view('form-repeater');
    }
    public function home(){
        $data = [
            'categories' => \App\Models\Category::with("products")->orderBy('id','asc')->get(),
        ];

        return view("front.index",compact('data'));
    }
    public function shop(Request $request){
        $featuredProduct = Product::inRandomOrder()->first();
        $products = Product::with("categoryRel");
        if($request->has("search")){
            $products->search($request->search);
        }

        if($request->has("category")){
            $products->where('category',$request->category);
        }
        $products->orderBy("priority",'asc');

        $products = $products->paginate(15);
        $categories = Category::whereHas('products');

        $categories = $categories->limit(15)->get();

        return view("front.shop",compact('products','categories','featuredProduct'));
    }

    public function checkout(Request $request){


        if($request->getMethod() == 'POST'){

            dd($request->all());
        }
        $items = \Cart::getContent();

        return view("front.checkout",compact('items'));
    }
    public function signup(Request $request){
        dd($request->all());
    }
}
