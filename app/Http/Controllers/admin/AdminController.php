<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required',
            'password' => 'min:6',
            'c_password' => 'min:6|required_with:password|same:password'
        ]);
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profiles'), $image_name);
            $image = $image_name;
        }
        Admin::create([
            "name" => $request->name,
            "email" => $request->email,
            "image" => $image,
            "is_admin" => 1,
            "password" =>  password_hash($request->password, PASSWORD_DEFAULT)
        ]);

        return redirect()->route('admins.index')
            ->with('success', 'Admin à été ajouté avec succés.');
    }

    public function adminProfile()
    {
        if (!session()->has('admin')) {
            return redirect()->route("login.index");
        }
        $admin = Admin::where("id", session()->get('admin'))->first();
        return view("admin.profile", compact("admin"));
    }
    public function updateAdminProfile(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
        ]);

        $admin = Admin::where('id', session()->get('admin'))->first();
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profiles'), $image_name);
            if ($admin->image != "default.jpg") {
                if (file_exists(public_path("uploads/profiles/{$admin->image}"))) {
                    unlink(public_path("uploads/profiles/{$admin->image}"));
                }
            }
            $admin->update([
                "name" => $request->name,
                "email" => $request->email,
                "image" => $image_name,
            ]);
            return redirect()->route('adminProfile')->with('success', 'votre profile à été modifié avec succés.');
        } else {
            $admin->update([
                "name" => $request->name,
                "email" => $request->email,
            ]);
            return redirect()->route('adminProfile')->with('success', 'votre profile à été modifié avec succés.');
        }
    }
    public function adminPassword()
    {
        return view("admin.password");
    }
    public function updateAdminPassword(Request $request)
    {
        $request->validate([
            "old_psw" => "required",
            "new_psw" => "required|min:6",
            "c_new_psw" => "min:6|required_with:new_psw|same:new_psw",
        ]);

        $admin = Admin::where('id', session()->get('admin'))->first();

        if ($admin && password_verify($request->old_psw, $admin->password)) {
            if ($request->new_psw === $request->c_new_psw) {
                $admin->update([
                    "password" => password_hash($request->new_psw, PASSWORD_DEFAULT)
                ]);
                return redirect()->route('adminPassword')->with('success', 'votre mot de passe à été bien modifié.');
            } else {
                return redirect()->back()->withInput()->with('error', '
               le mot de passe et le mot de passe de confirmation ne correspondent pas.');
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'Ancien mot de passe est incorrect !');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        return view('admin.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($request->has('image')) {
            $file = $request->image;
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profiles'), $image_name);
            if (file_exists(public_path("uploads/profiles/{$admin->image}"))) {
                unlink(public_path("uploads/profiles/{$admin->image}"));
            }
            $image = $image_name;
        } else {
            $image = $request->old_img;
        }
        $admin->update([
            "name" => $request->name,
            "email" => $request->email,
            "image" => $image
        ]);

        return redirect()->route('admins.index')
            ->with('success', 'Admin à été modifié avec succés.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        if (file_exists(public_path("uploads/profiles/{$admin->image}")) && $admin->image != "default.jpg") {
            unlink(public_path("uploads/profiles/{$admin->image}"));
        }
        $admin->delete();

        return redirect()->route('admins.index')
            ->with('success', 'Admin à été supprimé avec succés.');
    }
}
