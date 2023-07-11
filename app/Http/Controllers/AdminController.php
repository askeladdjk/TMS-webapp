<?php

namespace App\Http\Controllers;

use App\Models\Personalinfo;
use App\Models\tms_user;
use App\Models\transactionhistory;
use App\Models\bills;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminhome()
    {
        return view ('AdminView.adminhome');
    }

    public function billingview()
    {
        $personalinfo = Personalinfo::all();
        $userinfo = tms_user::where('is_admin', 0)->get();
        return view ('AdminView.billingview',compact('personalinfo','userinfo'));
    }

    public function roomview()
    {

        $personalinfo = Personalinfo::all();

        $userinfo = tms_user::where('is_admin', 0)->get();

        return view('AdminView.roomview', compact('personalinfo', 'userinfo'));
    }

    public function tenantview()
    {
        $tenantinfo = Personalinfo::all();
        return view ('AdminView.tenantview',compact('tenantinfo'));
    }

    public function transactionhistoryview()
    {
        $transactionhistory = transactionhistory::all();
        return view ('AdminView.transactionhistoryview',compact('transactionhistory'));
    }

    public function edittenantinfo($name)
    {
        $info = Personalinfo::where('name', $name)->first();

        if (!$info)
        {
            return redirect()->back()->with('error', 'Tenant information not found.');
        }

        return view('layout.edittenantinfo', compact('info'));
    }

    public function updateinfo(Request $request, $name)
    {
        $info = Personalinfo::where('name', $name)->first();

        if ($info) {
            $info->name = $request->input('tenant_name');
            $info->tenant_since = $request->input('tenant_since');
            $info->contact_number = $request->input('contact_number');
            $info->home_address = $request->input('home_address');
            $info->contact_person = $request->input('contact_person');
            $info->relationship = $request->input('relationship');
            $info->contact_person_number = $request->input('contact_person_number');
            $info->contact_person_address = $request->input('contact_person_address');
            $info->save();

            return redirect()->back()->with('success', 'Save Successfuly');
        } else {
            return redirect()->back()->with('error', 'Tenant not found');
        }
    }

    public function deleteinfo ($name)
    {
        $info = Personalinfo::where('name', $name)->first();

        if ($info) {
            $info->delete();
            return redirect()->back()->with('success', 'Information Deleted Successfully.');
        } else {
            return redirect()->back()->with('error', 'Record not found.');
        }
    }
    public function setbill(Request $request)
    {

        $bill = new bills();
        $bill->tenant = $request->input('tenant');
        $bill->room = $request->input('room');
        $bill->amount = $request->input('amount');
        $bill->due_date = $request->input('due_date');
        $bill->save();

        return redirect()->back()->with('Success', 'Set Successfully.');
    }
    public function saveBill($name)
    {
        $info = Personalinfo::where('name', $name)->first();

        if (!$info)
        {
            return redirect()->back()->with('error', 'Tenant information not found.');
        }
        return view('layout.setbill',compact('info'));
    }
}
