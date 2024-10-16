<?php

namespace App\Http\Controllers\admin_panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Sale;
use App\Models\User;
use App\Models\Address;

use Illuminate\Support\Arr; // Import Arr if you're using Arr::prepend

class managementController extends Controller
{
    public function manage()
    {
    	$res1= sale::all();
        if(!$res1)
        {
			return view('admin_panel.dashboard.orderManagement')->with('all',[])
	         ->with('products',[])
	         ->with('sale',[]);
        }
        
        $cart=[];
        $product=[];

        $userIds = array_column($res1->toArray(), 'user_id'); // Extract user IDs from $res1
        $users = User::with('address')->whereIn('id', $userIds)->get(); // Fetch users with addresses

        foreach ($res1 as $r) {
            $totalCart = explode(',', $r->product_id);

            foreach ($totalCart as $c) {
                // Use Arr::prepend to prepend the value to the array
                $cart[] = Arr::prepend(explode(':', $c), $r->id);
                
                $a = explode(':', $c);
                $res = Product::find($a[0]);
                $product[] = $res;
            }
        }
        //dd($users);
        //dd($users[0]->area);
        
         return view('admin_panel.orders.index')->with('all',$cart)
         ->with('products',$product)
         ->with('sale',$res1)
         ->with('users',$users)
         ->with('status',['Placed','On Process','Delivered','Cancel']);

    }
    public function update(Request $r)
    {
    	$n=sale::find($r->orderId);

    	if($n)
    	{
    		$n->order_status=$r->stat;
    		$n->save();
    	}

    	


    	$res1= sale::all();
        if(!$res1)
        {
			return view('admin_panel.dashboard.orderManagement')->with('all',[])
	         ->with('products',[])
	         ->with('sale',[]);
        }
        
        $cart=[];
        $product=[];
        foreach ($res1 as $r) {
            $totalCart = explode(',', $r->product_id);

            foreach ($totalCart as $c) {
                // Use Arr::prepend to prepend the value to the array
                $cart[] = Arr::prepend(explode(':', $c), $r->id);
                
                $a = explode(':', $c);
                $res = Product::find($a[0]);
                $product[] = $res;
            }
        }
         return redirect()->route('admin.orderManagement');

    }
}
