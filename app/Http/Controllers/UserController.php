<?php

namespace App\Http\Controllers;

use App\Models\bills;
use App\Models\Personalinfo;
use App\Models\tms_user;
use App\Models\transactionhistory;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class UserController extends Controller
{
            // $transact= new transactionhistory();
        // $transact->tenant = $request->input('tenant');
        // $transact->room = $request->input('room');
        // $transact->amount = $request->input('amount');
        // $transact->due_date = $request->input('due_date');
        // $transact->save();

    public function userpayment(Request $request)
    {
        $user_info = tms_user::where('email', '=', $request->email)->first();
        $userinfo = $request->session()->get('LoggedUser');
        if($userinfo && !$userinfo->is_admin);
        {
            $bills = bills::all();

    return view('UserView.userpayment',compact('bills'));
        }
    }

    public function userprofile(Request $request)
    {
        $user_info = tms_user::where('email', '=', $request->email)->first();
        $userinfo = $request->session()->get('LoggedUser');
        if($userinfo && !$userinfo->is_admin);
        {
            $user_id = $userinfo->id;
            $user_fname = $userinfo->firstname;
            $user_lname = $userinfo->lastname;
            $user_bdate = $userinfo->birthdate;
            $user_gender = $userinfo->gender;
            $user_phonenumber = $userinfo->phonenumber;
            $roomnumber = $userinfo->roomnumber;
            return view('UserView.userprofile', compact('user_id','user_fname','user_lname','user_bdate','user_gender','user_phonenumber','roomnumber'));
    }
}
    public function usertransactionhistory()
    {
        $transactionhistory = transactionhistory::all();
        return view('UserView.usertransactionhistory',compact('transactionhistory'));
    }

    public function addinfo()
    {
        return view('layout.addinfo');
    }

    public function addinformation(Request $request)
    {

        $tenant = new Personalinfo();
        $tenant->tms_user_id =$request->input('user_id');
        $tenant->name = $request->input('tenant_name');
        $tenant->tenant_since = $request->input('tenant_since');
        $tenant->contact_number = $request->input('contact_number');
        $tenant->home_address = $request->input('home_address');
        $tenant->contact_person = $request->input('contact_person');
        $tenant->relationship = $request->input('relationship');
        $tenant->contact_person_number = $request->input('contact_person_number');
        $tenant->contact_person_address = $request->input('contact_person_address');

        $tenant->save();

        return redirect()->route('userprofileview')->with('Success', 'Tenant Information Added Successfully.');
    }
    public function paymentsection($tenant)
    {
        $bills = bills::where('tenant',$tenant)->first();
        if (!$bills)
        {
            return redirect()->back()->with('error', 'Tenant information not found.');
        }
        return view('layout.paymentsection',compact('bills'));
    }
    public function paymentdone($tenant)
    {
        $bills = bills::where('tenant', $tenant)->first();

        if ($bills) {
            $bills->delete();
            return redirect()->back()->with('Success', 'Paid Successfully.');
        } else {
            return redirect()->back()->with('error', 'Record not found.');
        }
    }

    public function paymentth(Request $request, $tenant)
    {
        $bill = bills::where('tenant', $tenant)->first();

        if ($bill) {

            $transaction = new transactionhistory();
            $transaction->tenant = $bill->tenant;
            $transaction->room = $bill->room;
            $transaction->amount = $bill->amount;
            $transaction->due_date = $bill->due_date;
            $transaction->save();

            $bill->delete();

            return redirect()->back()->with('Success', 'Payment recorded and bill deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Record not found.');
        }
    }
}
