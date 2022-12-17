<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class MyAccountController extends Controller
{
public function orders()
{
$viewData = [];
$viewData["title"] = "Mis ordenes - Confecciones Abigail";
$viewData["subtitle"] = "Ordenes del usuario";
$viewData["orders"] = Order::with(['items.product'])->where('user_id', Auth::user()->getId())->get();
return view('myaccount.orders')->with("viewData", $viewData);
}
}
