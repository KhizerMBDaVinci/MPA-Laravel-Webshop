<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\categorieModel;
use App\ordersModel;
use App\order_detailsModel;
use App\klantenModel;

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
    
    public function index()
    {
        $categories = categorieModel::all();
        return view('home', ['categories' => $categories]);
    }

    public function ShowOrders()
    {
        $user = Auth::user();

        $categories = categorieModel::all();
        $orders = ordersModel::where('username', $user->name)->get();

        return view('view-orders', ['categories' => $categories, 'orders' => $orders]);
    }

    public function DeleteOrder()
    {
        $id = request('id');

        $orderDetails = order_detailsModel::where('Order_ID', $id);
        $order = ordersModel::where('ID', $id);

        $orderklant = ordersModel::find($id);
        $klant = klantenModel::where('ID', $orderklant->Klant_ID);

        $orderDetails->delete();
        $order->delete();
        $klant->delete();
        
        $user = Auth::user();
        $categories= categorieModel::all();
        $orders = ordersModel::where('username', $user->name)->get();

        return redirect()->route('view-orders', ['categories' => $categories, 'orders' => $orders]);
    }
}
