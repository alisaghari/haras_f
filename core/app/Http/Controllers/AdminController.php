<?php

namespace App\Http\Controllers;

use App\cart;
use App\order_package;
use App\support;
use App\ticket;
use App\User;
use App\user_package;
use App\user_type;
use Illuminate\Http\Request;
use App\package;
use Illuminate\Support\Facades\Auth;
use App\Field;
use App\Document;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function users()
    {
        $users = User::all();
        return view("admin.users")->with("users", $users);
    }

    public function active_agents()
    {
        $users = User::join("user_types","users.id","user_types.u_id")->where("user_types.type", 501)->where("user_types.is_active", 1)->get();
        return view("admin.agents")->with("users", $users);
    }

    public function deactive_agents()
    {
        $packages = package::where("is_organ",1)->get();
        $users = User::join("user_types","users.id","user_types.u_id")->where("user_types.type", 501)->where("user_types.is_active", 0)->get();
        return view("admin.deagents")->with("users", $users)->with("packages", $packages);
    }

    public function agents_user_deactive($id)
    {
        $users = User::all()->where("type", 400)->where("namayandeh_id", $id)->where("status", 0);
        return view("admin.agent_users")->with("users", $users)->with("status", 0);
    }

    public function agents_user_active($id)
    {
        $users = User::all()->where("type", 400)->where("namayandeh_id", $id)->where("status", 1);
        return view("admin.agent_users")->with("users", $users)->with("status", 1);
    }

    public function user()
    {
        $users = [];
        $packages = package::all();
        return view("admin.user")->with("users", $users)->with("packages", $packages);
    }

    public function FilterUsers()
    {

    }

    public function packages()
    {
        $packages = package::all();
        return view("admin.packages")->with("packages", $packages);
    }

    public function package()
    {
        $users = [];
        $packages = package::all();
        return view("admin.package")->with("users", $users)->with("packages", $packages);
    }

    public function package_add(Request $request)
    {

        $package = new package();
        $package->title = $request->input("title");
        $package->price1 = $request->input("price1");
        $package->price2 = $request->input("price2");
        $package->price3 = $request->input("price3");
        $package->price4 = $request->input("price4");
        $package->price5 = $request->input("price5");
        $package->day = $request->input("day");
        $package->type = $request->input("type");
        $package->code = $request->input("code");
        if ($request->input("is_organ")=="on")
            $package->is_organ = 1;
        $package->save();
        $packages = package::all();
        return view("admin.package")->with("packages", $packages);
    }

    public function addUser(Request $request)
    {
        $user = new User();
        $user->f_name = $request->input("f_name");
        $user->l_name = $request->input("l_name");
        $user->n_code = $request->input("n_code");
        $user->phone = $request->input("phone");
        $user->tell = $request->input("tell");
        $user->birthdate = $request->input("birthdate");
        $user->address = $request->input("address");
        $user->cart = $request->input("cart_number");
        $user->save();

        $cart = new cart();
        $cart->user_id = $user->id;
        $cart->cart_number = $request->input("cart_number_user");
        $cart->cvv2 = $request->input("cvv2");
        $cart->expire_date = $request->input("expire_date");
        $cart->save();
        $i = 0;
        foreach ($request->input("p_id") as $item) {
            $package = new order_package();
            $package->u_id = $user->id;
            $package->c_id = $cart->id;
            $package->p_id = $item;
            $package->count = $request->input("count")[$i];
            $package->save();
            $u = 0;
            foreach ($request->input("count") as $item) {
                $id = $i . $u;
                if ($request->input("namedyn$id") != "") {
                    $userpackage = new user_package();
                    $userpackage->name = $request->input("namedyn$id");
                    $userpackage->n_code = $request->input("n_codedyn$id");
                    $userpackage->birthdate = $request->input("birthdatedyn$id");
                    $userpackage->o_id = $package->id;
                    $userpackage->save();
                }
                $u++;
            }
            $i++;
        }
        return redirect()->back();
    }

    public function searchUser(Request $request)
    {
        $users = User::where("phone", "like", '%' . $request->input("phone") . '%')->where("id", "like", '%' . $request->input("code") . '%')->where("n_code", "like", '%' . $request->input("ncode") . '%')->get();
        return view("admin.users")->with("users", $users);
    }

    public function carts()
    {
        $carts = cart::with("user")->get();
        return view("admin.carts")->with("carts", $carts);
    }

    public function cartsStatus($status)
    {
        $carts = cart::with("user")->where("status", $status)->get();
        return view("admin.carts")->with("carts", $carts);
    }

    public function change_status_cart($cart_id, $status)
    {
        cart::where('id', $cart_id)
            ->update(['status' => $status]);
        return redirect()->back();
    }

    public function change_status_cart_data(Request $request)
    {
        cart::where('id', $request->input("cart_id"))
            ->update(['status' => 3, 'cvv2' => $request->input("cvv2"), 'cart_number' => $request->input("cart_number"), 'expire_date' => $request->input("expire_date"),]);
        return redirect()->back();
    }

    public function login()
    {
        return view("admin.auth.login");
    }

    public function register()
    {
        return view("admin.auth.register");
    }

    public function admin_creator(Request $request)
    {
        User::create([
            'username' => $request->input("username"),
            'phone' => $request->input("phone"),
            'type' => "2000",
            'password' => Hash::make($request->input("password")),
        ]);
        return redirect()->back();
    }

    public function verify_creator()
    {
        //send sms to this phone
        Auth::user()->phone;
        // and content this
        $seed = str_split('abcdefghijkmnopqrstuvwxyz'
            . '0123456789'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];

        User::where('id', Auth::user()->id)
            ->update(['verify' => $rand]);

        $url = "https://ippanel.com/services.jspd";
        $param = array
        (
            'uname' => 'rokhtarh',
            'pass' => '2241377',
            'from' => '100020400',
            'message' => $rand,
            'to' => Auth::user()->phone,
            'op' => 'send'
        );

        $handler = curl_init($url);
        curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($handler, CURLOPT_POSTFIELDS, $param);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($handler);
        return redirect("admin/verify");
    }

    public function verify()
    {
        return view("admin.auth.verify");
    }

    public function verifyCheck(Request $request)
    {

        if ($request->input("verify") != Auth::user()->verify) {
            return redirect("admin/login");
        } else {
            session_start();
            if (Auth::user()->type == 2000) {
                $_SESSION["type"] = "admin";
                return redirect("admin");
            }
        }

        return redirect()->back();
    }

    public function addDoctorView()
    {
        $fields = Field::all();
        return View('admin.doctor', ['fields' => $fields]);
    }

    public function addDoctor(Request $request)
    {
        $users = User::where("phone", $request->input("phone"))->orWhere("n_code", $request->input("n_code"))->get();
        $status = 1;
        foreach ($users as $user) {
            $status = 0;
        }
        if ($status == 1) {
            $user = new User();
            $user->phone = $request->input("phone");
            $user->f_name = $request->input("f_name");
            $user->l_name = $request->input("l_name");
            $user->address = $request->input("address");
            $user->tell = $request->input("tell");
            $user->n_code = $request->input("n_code");
            $user->birthdate = $request->input("birthdate");
            $user->field = $request->input("field");
            $user->shaba = $request->input("shaba");
            $user->city = $request->input("Shahrestan");
            $user->postal_code = $request->input("postal_code");
            /*$user->namayandeh_id = $_SESSION["userId"] ? $_SESSION["userId"]:null;*/
            $user->status = 1;
            $user->register=1;
            $user->type = 115;
            $user->save();
            $seed = str_split('abcdefghijkmnopqrstuvwxyz'
                . '0123456789'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            $rand = '';
            foreach (array_rand($seed, 3) as $k) $rand .= $seed[$k];
            $rand .= $rand;
            User::where('id', $user->id)
                ->update(['user_code' => $rand]);

            $mojavez = $request->file('mojavez');
            if (isset($mojavez))
                if ($mojavez->isValid()) {
                    $fileName="mojavez-". time() ."-".$mojavez->getClientOriginalName();
                    $mojavez->move('upload/document', $fileName);
                    $document = new Document();
                    $document->user_id =$user->id;
                    $document->image = $fileName;
                    $document->type = 'mojavez';
                    $document->save();
                }
            $profile_image = $request->file('profile_image');
            if (isset($profile_image))
                if ($profile_image->isValid()) {
                    $fileName="profile_image-". time() ."-".$profile_image->getClientOriginalName();
                    $profile_image->move('upload/document', $fileName);
                    $document = new Document();
                    $document->user_id =$user->id;
                    $document->image = $fileName;
                    $document->type = 'profile_image';
                    $document->save();
                }
            $meli_cart = $request->file('meli_cart');
            if (isset($meli_cart))
                if ($meli_cart->isValid()) {
                    $fileName="meli_cart-". time() ."-".$meli_cart->getClientOriginalName();
                    $meli_cart->move('upload/document', $fileName);
                    $document = new Document();
                    $document->user_id =$user->id;
                    $document->image = $fileName;
                    $document->type = 'meli_cart';
                    $document->save();
                }
            $shaba_Confirmation = $request->file('shaba_Confirmation');
            if (isset($shaba_Confirmation))
                if ($shaba_Confirmation->isValid()) {
                    $fileName="shaba_Confirmation-". time() ."-".$shaba_Confirmation->getClientOriginalName();
                    $shaba_Confirmation->move('upload/document', $fileName);
                    $document = new Document();
                    $document->user_id =$user->id;
                    $document->image = $fileName;
                    $document->type = 'shaba_Confirmation';
                    $document->save();
                }
            $sejeld = $request->file('sejeld');
            if (isset($sejeld))
                if ($sejeld->isValid()) {
                    $fileName="sejeld-". time() ."-".$sejeld->getClientOriginalName();
                    $sejeld->move('upload/document', $fileName);
                    $document = new Document();
                    $document->user_id =$user->id;
                    $document->image = $fileName;
                    $document->type = 'sejeld';
                    $document->save();
                }
            $psp_contract = $request->file('psp_contract');
            if (isset($psp_contract))
                if ($psp_contract->isValid()) {
                    $fileName="psp_contract-". time() ."-".$psp_contract->getClientOriginalName();
                    $psp_contract->move('upload/document', $fileName);
                    $document = new Document();
                    $document->user_id =$user->id;
                    $document->image = $fileName;
                    $document->type = 'psp_contract';
                    $document->save();
                }
            if ($request->hasFile('haras_contract'))
                $haras_contract = $request->file('haras_contract');
            foreach ($haras_contract as $value){
                $fileName="haras_contract-". time() ."-".$value->getClientOriginalName();
                $value->move('upload/document', $fileName);
                $document = new Document();
                $document->user_id =$user->id;
                $document->image = $fileName;
                $document->type = 'haras_contract';
                $document->save();
            }


            \Illuminate\Support\Facades\Session::flash('message', 'با موفقیت ثبت شد');
            \Illuminate\Support\Facades\Session::flash('alert-class', 'alert-success');
            \Illuminate\Support\Facades\Session::flash('title', 'عملیات  موفق');
            return redirect()->back();
        } else {
            \Illuminate\Support\Facades\Session::flash('message', 'کاربر قبلا ثبت نام کرده است');
            \Illuminate\Support\Facades\Session::flash('alert-class', 'alert-danger');
            \Illuminate\Support\Facades\Session::flash('title', 'عملیات  نا موفق');
            return redirect()->back();
        }
    }

    public function updateDoctorView($id)
    {

        $user = User::find($id);
        $documents = $user->documents;
        $fields = Field::all();
        return View('admin.doctor', ['fields' => $fields,'user'=>$user,'id'=>$id,'documents'=>$documents]);
    }

    public function updateDoctor(Request $request){
        User::where('id', $request->input("id"))
            ->update([
                "phone" => $request->input("phone"),
                "f_name" => $request->input("f_name"),
                "l_name" => $request->input("l_name"),
                "address" => $request->input("address"),
                "tell" => $request->input("tell"),
                "n_code" => $request->input("n_code"),
                "birthdate" => $request->input("birthdate"),
                "field" => $request->input("field"),
                "shaba" => $request->input("shaba"),
                "city" => $request->input("Shahrestan"),
                "postal_code" => $request->input("postal_code"),
            ]);
        $mojavez = $request->file('mojavez');
        if (isset($mojavez))
            if ($mojavez->isValid()) {
                $fileName="mojavez-". time() ."-".$mojavez->getClientOriginalName();
                $mojavez->move('upload/document', $fileName);
                Document::where('user_id', $request->input("id"))->where('type','mojavez')
                    ->update([
                        "image" => $fileName,
                    ]);
            }
        $profile_image = $request->file('profile_image');
        if (isset($profile_image))
            if ($profile_image->isValid()) {
                $fileName="profile_image-". time() ."-".$profile_image->getClientOriginalName();
                $profile_image->move('upload/document', $fileName);
                Document::where('user_id', $request->input("id"))->where('type','profile_image')
                    ->update([
                        "image" => $fileName,
                    ]);
            }
        $meli_cart = $request->file('meli_cart');
        if (isset($meli_cart))
            if ($meli_cart->isValid()) {
                $fileName="meli_cart-". time() ."-".$meli_cart->getClientOriginalName();
                $meli_cart->move('upload/document', $fileName);
                Document::where('user_id', $request->input("id"))->where('type','meli_cart')
                    ->update([
                        "image" => $fileName,
                    ]);
            }
        $shaba_Confirmation = $request->file('shaba_Confirmation');
        if (isset($shaba_Confirmation))
            if ($shaba_Confirmation->isValid()) {
                $fileName="shaba_Confirmation-". time() ."-".$shaba_Confirmation->getClientOriginalName();
                $shaba_Confirmation->move('upload/document', $fileName);
                Document::where('user_id', $request->input("id"))->where('type','shaba_Confirmation')
                    ->update([
                        "image" => $fileName,
                    ]);
            }
        $sejeld = $request->file('sejeld');
        if (isset($sejeld))
            if ($sejeld->isValid()) {
                $fileName="sejeld-". time() ."-".$sejeld->getClientOriginalName();
                $sejeld->move('upload/document', $fileName);
                Document::where('user_id', $request->input("id"))->where('type','sejeld')
                    ->update([
                        "image" => $fileName,
                    ]);
            }
        $psp_contract = $request->file('psp_contract');
        if (isset($psp_contract))
            if ($psp_contract->isValid()) {
                $fileName="psp_contract-". time() ."-".$psp_contract->getClientOriginalName();
                $psp_contract->move('upload/document', $fileName);
                Document::where('user_id', $request->input("id"))->where('type','psp_contract')
                    ->update([
                        "image" => $fileName,
                    ]);
            }
       /* if ($request->hasFile('haras_contract'))
            $haras_contract = $request->file('haras_contract');
        foreach ($haras_contract as $value){
            $fileName="haras_contract-". time() ."-".$value->getClientOriginalName();
            $value->move('upload/document', $fileName);
            Document::where('user_id', $request->input("id"))->where('type','haras_contract')
                ->update([
                    "image" => $fileName,
                ]);
        }*/
        return redirect()->back();

    }


    public function del_document($field_id){
        Document::destroy($field_id);
        return redirect()->back();

    }

    public function doctors()
    {
        $doctors = User::where('type', '115')->get();
        return View('admin.doctors', ['doctors' => $doctors]);
    }

    public function deleteDoctor($id)
    {
        User::destroy($id);
        return redirect()->back();
    }

    public function fields()
    {
        $fields = Field::all();
        return View('admin.fields', ['fields' => $fields]);
    }

    public function addFieldView()
    {
        return View('admin.field');
    }

    public function addField(Request $request)
    {
        $field = new Field();
        $field->name = $request->input("name");
        $field->save();
        return redirect(url('admin/doctor/fields'));
    }

    public function updateFieldView($id)
    {
        $field = Field::find($id);
        return View('admin.field', ['id' => $id, 'field' => $field]);
    }

    public function updateField(Request $request)
    {
        Field::where('id', $request->input("id"))
            ->update([
                'name' => $request->input("name"),
            ]);
        return redirect(url('admin/doctor/fields'));
    }

    public function deleteField($id)
    {
        Field::destroy($id);
        return redirect()->back();
    }


    public function tickets()
    {
        $tickets = ticket::all();
        return view("admin.tickets")->with("tickets", $tickets);
    }


    public function ticket($user_id, $code)
    {
        $ticket = ticket::where("ticket_code", $code)->where("u_id", $user_id)->first();
        $messages = support::where("t_id", $ticket->id)->get();
        return view("admin.ticket")->with("messages", $messages)->with("code", $code)->with("user_id", $user_id);
    }

    public function send_message(Request $request, $user_id, $code)
    {
        $ticket = ticket::where("ticket_code", $code)->where("u_id", $user_id)->first();
        $ticket->status = "1";
        $ticket->save();
        $message = new support();
        $message->message = $request->input("message");
        $message->type = "admin";
        $message->t_id = $ticket->id;
        $message->save();
        return redirect()->back();
    }

    public function active_agents_id(Request $request)
    {

        $is_active = user_type::where("u_id",$request->input("u_id"))->first()->is_active;
        if ($is_active == "" || $is_active == 0) {
            user_type::where('u_id', $request->input("u_id"))
                ->update(['is_active' => 1]);
            User::where('id', $request->input("u_id"))
                ->update(['p_id' => $request->input("p_id")]);
        } else {
            user_type::where('u_id', $request->input("u_id"))
                ->update(['is_active' => 0]);
        }
        return redirect()->back();

    }

    public function agent_user_toggle_status_id($id)
    {

        $status = User::find($id)->status;
        if ($status == "" || $status == 0) {
            User::where('id', $id)
                ->update(['status' => 1]);
        } else {
            User::where('id', $id)
                ->update(['status' => 0]);
        }
        return redirect()->back();

    }

    public function agent_user_active_all_status_id($id)
    {


        User::where('namayandeh_id', $id)
            ->update(['status' => 1]);

        return redirect()->back();

    }

    public function toggleStatusDoctor($id)
    {
        $status = User::find($id)->status;
        if ($status == "" || $status == 0) {
            User::where('id', $id)
                ->update(['status' => 1]);
        } else {
            User::where('id', $id)
                ->update(['status' => 0]);
        }
        return redirect()->back();
    }

    public function addDoctorToFavoritesView($id){
        $favDoctors = User::whereBetween('favorite', [1, 16])->get();

        return View('admin.favorite_doctors',compact('id','favDoctors'));
    }

    public function addDoctorToFavorites(Request $request){
        $user = User::find($request->input('doctor_id'));
        $date = date('Y/m/d');
        $fav_days = $request->input('fav_days');
        if ($user->credit < $request->input('price') ){
            return redirect()-> back()->with('job','error');
        }
        User::where('id',$request->input('doctor_id'))->update([
            'credit' => $user->credit - $request->input('price') ,
            'favorite'=>$request->input('favorite'),
            'fav_days'=>$fav_days,
            'fav_date'=>date('Y/m/d',strtotime($date. ' + '.$fav_days.' days'))
        ]);
        return redirect()->back();
    }

    public function deleteDoctorFromFavorites($id){
        User::where('id',$id)->update([
            'favorite' => 17,
            'fav_days'=>0
        ]);
        return redirect()->back();
    }

    public function favorites(){
        $favDoctors = User::whereBetween('favorite', [1, 16])->get();

        return View('admin.favorite_doctors',compact('favDoctors'));
    }


}
